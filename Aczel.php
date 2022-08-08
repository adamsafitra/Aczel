<?php //delimiter
/**
 * @package Aczel Config
 *
 * @author Alphabet Studio Zigatur
 *
 * @copyright Copyright (c) 2018 - 2021, Alphabet Studio Zigatur
 *
 * @license MIT
 *
 * @link  https://zigatur.org
 *
 *
 * @version 0.5.1
 *
 * @see https://github.com/adamsafitra/aczel-config
 *
*/

namespace Aczel;

require_once "Kaus.php";
use Aczel\Kaus;
use PDO;
use DateTime;

class Aczel implements Kaus {
  public $peladen;
  public $zurl = "192.168.43.89";

  private $jalur;
  public $sprt = '/';

  public $src;
  public $favicon;
  private $pdo;
  private $db;

  public $waktu;

  public function __construct() {
    date_default_timezone_set("Asia/Makassar");

    $this->initialize();
    $this->initializeLogic();
  }

  public function initialize() {
    if (!empty($_SERVER["HTTPS"]) && ($_SERVER["HTTPS"]) == "on") {
      $this->jalur = "https://";
    } else {
      $this->jalur = "http://";
    }

    $this->zurl = $_SERVER["HTTP_HOST"];

    $this->peladen = $this->jalur . $this->zurl . "/";

    #$init['base_url'] = 'http://localhost/';
    #$root = "http://".$_SERVER['HTTP_HOST'];
    #$root .= dirname($_SERVER['SCRIPT_NAME']);
    #$config['base_url'] = $root;

    $this->src = $this->peladen . '@cdn' . "/";
    $this->favicon = $this->peladen . 'favicon.ico';
  }

  public function initializeLogic() {

  }

  public function src($path = null) {
    if (empty($path)) {
      return $this->src;
    } else {
      return $this->src . $path;
    }
  }

  public function peladen() {
    return $this->peladen;
  }

  public function favicon() {
    return $this->favicon;
  }

  public function waktuSekarang() {
    /** Menampilkan Tanggal
      * l -> hari (huruf)
      * D -> nama hari (huruf(bentuk 3 digit))
      * N -> hari (angka: 1=senin)
      * w -> hari (angka: 0=minggu,6=sabtu)
      * d -> tanggal (angka: dengan 0 di awal)
      * j -> tanggal (angka: tanpa 0 di awal)
      * F -> nama bulan(huruf)
      * M -> nama bulan (huruf(bentuk 3 digit))
      * m -> bulan (angka)
      * Y -> tahun (angka)
      * y -> tahun (angka(2 digit))

      ** Menampilkan Waktu
      * s -> detik
      * i -> menit
      * h -> jam (12)
      * H -> jam (24)
      * a -> tampilkan waktu am atau pm
    */
    $this->waktu["waktu"] = date('Y-m-d H:i:s');
    $this->waktu["tahun"] = date("Y");
    $this->waktu["bulan"] = date("m");
    $this->waktu["tanggal"] = date("d");
    $this->waktu["jam"] = date("H");
    $this->waktu["menit"] = date("i");
    $this->waktu["detik"] = date("s");
  }

  /**
   * echo tgl_indo(date('Y-m-d')); // 22 Oktober 2019
   * echo tgl_indo("1992-02-15");
   */
  public function tanggal_indo($tanggal) {
    $bulan = array (
      'Januari', 'Februari', 'Maret',
      'April', 'Mei', 'Juni',
      'Juli', 'Agustus', 'September',
      'Oktober', 'November', 'Desember'
    );

    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1] + 1] .
      ' ' . $pecahkan[0];
  }

  public function addMeta() {
    readfile("/home/adamr/www/htdocs/initiate.meta-config.php");
  }

  public function kaus(): void {
    echo "Zigatur";
  }

  public function daftar_file($dir){
    if (is_dir($dir)){
      if ($handle = opendir($dir)){
        while (($file = readdir($handle)) !== false) {
          if ($file == "." || $file == ".." || substr($file, 0, 1) == ".") continue;
          #echo '<a target="_blank" href="'.$dir.$file.'">'.$file.'</a><br>'."\n";
          echo "<button><a target=\"_blank\" href=\"{$dir}{$file}\">{$file}</a></button><br/><br/>"."\n\t\t";
        }

        closedir($handle);
      }
    }
  }

  /**
   * [resizeImg description]
   * @param [string] $image [Lokasi dan nama file]
   * @param [int] $max_width [Lebar Gambar]
   * @param [int] $max_height [Tinggi gambar]
   */
  public  function resizeImg($image, $max_width, $max_height = 1000){
    if (strrchr($image, '/')){
      $filename = substr(strrchr($image, '/'), 1); // remove folder references
    } else {
      $filename = $image;
    }

    $size = getimagesize($image);
    $width = $size[0];
    $height = $size[1];

    // get the ratio needed
    $x_ratio = $max_width / $width;
    $y_ratio = $max_height / $height;

    // if image already meets criteria, load current values in
    // if not, use ratios to load new size info
    if (($width <= $max_width) && ($height <= $max_height)){
      $tn_width = $width;
      $tn_height = $height;
    } else if (($x_ratio * $height) < $max_height){
      $tn_height = ceil($x_ratio * $height);
      $tn_width = $max_width;
    } else {
      $tn_width = ceil($y_ratio * $width);
      $tn_height = $max_height;
    }

    /* Caching additions by Trent Davies */
    // first check cache
    // cache must be world-readable
    $resized = 'cache/'.$tn_width.'x'.$tn_height.'-'.$filename;
    $imageModified = @filemtime($image);
    $thumbModified = @filemtime($resized);

    header("Content-type: image/jpeg");

    // if thumbnail is newer than image then output cached thumbnail and exit
    if ($imageModified < $thumbModified){
      header("Last-Modified: ".gmdate("D, d M Y H:i:s",$thumbModified)." GMT");
      readfile($resized);
      exit;
    }

    // read image
    $ext = substr(strrchr($image, '.'), 1); // get the file extension
    switch ($ext){
      case 'jpg':     // jpg
        $src = imagecreatefromjpeg($image) or notfound();
        break;
      case 'png':     // png
        $src = imagecreatefrompng($image) or notfound();
        break;
      case 'gif':     // gif
        $src = imagecreatefromgif($image) or notfound();
        break;
      default:
        notfound();
        break;
    }

    // set up canvas
    $dst = imagecreatetruecolor($tn_width,$tn_height);

    imageantialias($dst, true);

    // copy resized image to new canvas
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $tn_width, $tn_height, $width, $height);

    /* Sharpening adddition by Mike Harding */
    // sharpen the image (only available in PHP5.1)
    if (function_exists("imageconvolution")){
      $matrix = array(
        array( -1, -1, -1 ),
        array( -1, 32, -1 ),
        array( -1, -1, -1 )
      );
      $divisor = 24;
      $offset = 0;

      imageconvolution($dst, $matrix, $divisor, $offset);
    }

    // send the header and new image
    imagejpeg($dst, null, -1);
    imagejpeg($dst, $resized, -1); // write the thumbnail to cache as well...

    // clear out the resources
    imagedestroy($src);
    imagedestroy($dst);
  }

  public function fibonacci_seq($n){
    for ($l = array(0,1), $i = 1, $x = 0; $i <= $n; $i++){
      $l[] = $l[$x++] + $l[$x];

      // Sintaks purba
      #echo ($l[$i]);

      // Baris kode di bawah untuk suku pertama = 0
      #echo "Suku ke-$x = $l[$i]";

      // Baris kode di bawah untuk suku pertama = 1
      //echo "Suku ke-$x = $l[$x]";
    }
    #return $l;
  }

  /**
   * @param [int] $n [Suku ke-n barisan bilangan Fibonacci]
   * @return int
   */
  public function binet(int $n): int {
    $dec_fi = 1.6180339887498948482;
    $akar_5 = sqrt(5);
    //$fi = 1.618043;
    $fi = (1+$akar_5)/2;
    return floor((pow($fi, $n)-pow(1-$fi, $n))/$akar_5);
  }

  /**
   * @param [int] $n
   * @return int
   */
  public function fibonacci(int $n): int {
    $a = 0;
    $b = 1;
    for ($i = 0; $i < $n; $i++){
      $b += $a;
      $a = $b - $a;
    }

    return $a;
  }

  /**
   * @param [int] $n
   * @return int
   */
  public function rekursi_fibonacci($n){
    if ($n == 0 || $n == 1){
      return 1;
    } else {
      return rekursi_fibonacci($n-1) + rekursi_fibonacci($n-2);
    }
  }

  /**
   * @param [int] $n
   * @return int
   */
  public function faktorial(int $n): int {
    if ($n == 1){
      return 1;
    } else {
      return $n * $this->faktorial($n-1);
    }
  }

  /**
   * @param [int] $a
   * @param [int] $b
   * @return int
   */
  public function rekursi_euclid($a, $b){
    // Algoritme ini untuk menentukan FPB dari 2 bilangan
    if ($b == 0){
      return $a;
    } else {
      return rekursi_euclid($b, $a % $b);
    }
  }

  /**
   * @param [int] $a
   * @param [int] $b
   * @return int
   */
  public function iteratif_euclid($a, $b){
    while ($b != 0){
      $t = $b;
      $b = $a % $b;
      $a = $t;
    }

    return $a;
  }

  /**
   * @param [string] $dbname [Nama Database]
   * @param [string] $user   [Nama Pengguna Database]
   * @param [string] $passwd [Kata Kunci Database]
   * @param [string] $db     [Database]
   * @param [string] $post   [Port]
   * @param [string] $host   [Host]
   * @return PDO
   */
  public function pixma($dbname, $user="getter", $passwd="", $db="mysql", $port="3306", $host="localhost") {
    // $db = "pgsql";
    // return new PDO("$db:host=$host; dbname=$dbname", $user, $passwd);

    // $this->db = new PDO("{$db}:host={$host};dbname={$dbname}", $user, $passwd);
    // $mysqli = new mysqli($host, $user, $passwd, $dbname);
    //try {
    $dbh = new PDO("{$db}:host={$host};dbname={$dbname}", $user, $passwd);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //} catch(PDOException $e){
      //echo 'Connection failed: '.$e->getMessage();
    //}

    return $dbh;
  }

  public function dbh($dbname, $user="root", $passwd="root", $db="mysql", $port="3306", $host="localhost") {
    // $db = "pgsql";
    // return new PDO("{$db}:host={$host}; dbname={$dbname}", $user, $passwd);

    if ($this->pdo === null){
      $this->pdo = new PDO("{$db}:host={$host};dbname={$dbname}", $user, $passwd);
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    return $this->pdo;
  }

  /**
   * @param [string] $db
   * @return PDO
   */
  public function pdo($dbname, $user="root", $passwd="root", $db="mysql", $port="3306", $host="localhost"){
    return $this->dbh($dbname, $user, $passwd, $db, $port, $host);

    #$this->db = new PDO('mysql:host=localhost;dbname=malasngoding', 'root', '');
    #$mysqli = new mysqli($host, $user, $pass, $database);
  }

  public function querypdo($query){
    $que = $this->pdo->prepare($query);
    $que->execute();
    $result = $que;
    $rows = [];

    while ($row = $result->fetch(PDO::FETCH_ASSOC)){
      $rows[] = $row;
    }

    return $rows;
  }

  /**
   * @param [string] $texthere
   * @return string
   */
  public function spasi_remover($texthere){
    $text = str_replace("  ", "", $texthere);
    return $text;
  }

  /**
   * @param [string] $texthere
   * @return string
   */
  public function single_spasi_remover($texthere){
    $text = str_replace(" ", "", $texthere);
    return $text;
  }

  public function Nohtmlphp($check, $varhtml){
    $htmlphpfind = strpos($check, $varhtml);
    return $htmlphpfind;
  }

  public function DateToIndo($date){
    $BulanIndo = array(
      "Januari", "Februari", "Maret",
      "April", "Mei", "Juni",
      "Juli", "Agustus", "September",
      "Oktober", "November", "Desember"
    );
    $tahun = substr($date, 6, 4);
    $bulan = substr($date, 0, 2);
    $tgl = substr($date, 3, 2);
    $jam = substr($date, 11, 8);
    $result = $tgl . " " . $BulanIndo[(int) $bulan - 1] . " " . $tahun;
    return($result);
  }

  public function DateToIndoReversed($date){
    $BulanIndo = array(
      "Januari", "Februari", "Maret",
      "April", "Mei", "Juni",
      "Juli", "Agustus", "September",
      "Oktober", "November", "Desember"
    );
    $tahun = substr($date, 0, 4);
    $bulan = substr($date, 5, 2);
    $tgl = substr($date, 8, 2);
    $jam = substr($date, 11, 8);
    $result = $tgl . " " . $BulanIndo[(int) $bulan - 1] . " " . $tahun;
    return($result);
  }

  public function ftp($server, $username, $password, $server_file, $local_file, $folder_path){
    // set up basic connection
    $connect = ftp_connect($server);

    // login with username and password
    $login = ftp_login($connect, $username, $password);

    // try to download $server_file and save to $local_file
    if (ftp_get($connect, $local_file, $server_file, FTP_BINARY)){
      echo "Successfully written to $local_file\n";
    } else {
      echo "There was a problem\n";
    }

    // close the connection
    ftp_close($connect);
  }

  public function pluralise($amount, $str, $alt = ''){
    return intval($amount) === 1 ? $str : $str . ($alt !== '' ? $alt : 's');
  }

  public function relative_time($date){
    if (is_numeric($date)){
      $date = '@' . $date;
    }

    #$user_timezone = new DateTimeZone(Config::app('timezone'));
    $user_timezone = new DateTimeZone('Asia/Makassar');
    $date = new DateTime($date, $user_timezone);

    // get current date in user timezone
    $now = new DateTime('now', $user_timezone);

    $elapsed = $now->format('U') - $date->format('U');

    if ($elapsed <= 1){
      return 'Just now';
    }

    $times = array(
      31104000 => 'year',
      2592000 => 'month',
      604800 => 'week',
      86400 => 'day',
      3600 => 'hour',
      60 => 'minute',
      1 => 'second'
    );

    foreach ($times as $seconds => $title){
      $rounded = $elapsed / $seconds;

      if ($rounded > 1){
        $rounded = round($rounded);
        return $rounded . ' ' . $this->pluralise($rounded, $title) . ' ago';
      }
    }
  }

  /**
   * @return float
   */
  public function val_e(): float {
    return M_E;
  }

  public function pascalTriangle($tinggi){
    for ($a = 10; $a > 0; $a--){
      for ($i = 1; $i <= $a; $i++){
        echo "  ";
      }

      for ($a1 = 10; $a1 > $a; $a1--){
        echo "x";
      }

      for ($a2 = 11; $a2 > $a; $a2--){
        echo "x";
      }

      echo "<br>";
    }
  }

  public function pascalTriangle2($tinggi){
    for ($i = 1; $i <= 5; $i++){
      for ($j = 4; $j >= $i; $j--){
        echo "  ";
      }

      for ($k = 1; $k <= $i; $k++){
        echo "$k";
      }

      echo "<br>";
    }
  }

  /**
   * Retrieves the escaped current URL
   *
   * @return string
   * @throws \ErrorException
   * @throws \OverflowException
   */
  function current_url(){
    return htmlentities(raw_current_url());
  }

  /* Hash */

  /**
   * Creates a new hash
   *
   * @param string $value  string to hash
   * @param int    $rounds (optional) hashing rounds to apply
   *
   * @return bool|string
   */
  public function make($value, $rounds = 12){
    return password_hash($value, PASSWORD_BCRYPT, ['cost' => $rounds]);
  }

  /**
   * Verifies a hash
   *
   * @param string $value value to verify the hash against
   * @param string $hash  hash to check
   *
   * @return bool whether the hash is valud
   */
  public function check($value, $hash){
    return password_verify($value, $hash);
  }

  /* /Hash */

  public function __toString(){

  }

  public function file($file, $mode, $text){
    /* Mode
     * a  : Opens file for write only
     * x  : Creates new file for write only
     * r+ : Opens file for read/write
     * w+ : Opens file for read/write. Erases the contents of the file or creates a new file if it doesn't exist
     * a+ : Opens file for read/write. Creates a new file if the file doesn't exist
     * x+ : Creates new file for read/write
     */

    switch($mode){
      case "a":
        break;
    }

    $tmp = fopen($file, $mode);
  }

  #dirname( __FILE__ ).'/paya.php';

  /* Fungsi number_format
    - 2 Argument
      string number_format(float $number [, int $decimals = 0 ])
      * Argumen pertama ($number) membutuhkan input nilai angka yang akan diformat. Argumen ini bertipe float, tapi bisa juga bisa diisi dengan nilai integer.
      * Argumen kedua ($decimals) bersifat opsional. Argumen ini menentukan berapa jumlah angka desimal (angka di belakang koma) yang dibutuhkan. Apabila tidak diisi, dianggap sebagai 0.
    - 4 Argument
      string number_format(float $number, int $decimals = 0, string $dec_point = ".", string $thousands_sep = ",")
      * Argumen ketiga dan keempat fungsi number_format() digunakan untuk menentukan karakter apa sebagai pemisah nilai ribuan dan nilai desimal.rgumen ketiga dan keempat fungsi number_format() digunakan untuk menentukan karakter apa sebagai pemisah nilai ribuan dan nilai desimal.
  */

  /* Cara Memotong atau Mengambil Sebagian String (fungsi substr)
    Fungsi substr() digunakan untuk memotong sebuah string atau mengambil sebagian nilai dari sebuah string di dalam PHP.
    Sebagai contoh, misalkan kita memiliki sebuah string berbentuk tanggal: “14-09-2015”. Bagaimana caranya untuk mengambil nilai bulan dari string tersebut, yakni karakter “09” ?
    Contoh lain, katakan NIM seorang mahasiswa terdiri dari 8 digit: “12140001”. Dua digit pertama adalah tahun masuk mahasiswa, dua digit berikutnya kode jurusan, dan empat digit terakhir adalah no urut mahasiswa. Bagaimana cara memisahkan digit-digit ini?

    Dalam kasus seperti inilah fungsi substr() diperlukan.

    Fungsi substr() membutuhkan 2 buah argumen dan 1 argumen tambahan (opsional). Arguman pertama adalah string asal yang ingin diambil nilainya. Argumen kedua berupa posisi awal pemotongan, dan argumen ketiga diisi jumlah karakter yang akan diambil. Argumen kedua dan ketiga bertipe integer dan bisa positif maupun negatif.

    PHP membuat penggunaan fungsi substr() dengan 6 kombinasi cara penulisan.
      # Cara Mengambil Karakter Dari Awal String
        <?php
          $kalimat = "Belajar PHP di Duniailkom";
          $sub_kalimat = substr($kalimat,3);
          echo $sub_kalimat;
          // ajar PHP di Duniailkom
        ?>
        Dalam kode diatas, saya mengambil string $kalimat mulai dari index ke-3. Jika fungsi substr() ditulis dengan 2 argumen seperti ini, dan argumen kedua bernilai positif, maka fungsi substr() akan mengembalikan nilai string $kalimat mulai dari huruf ke-4, yakni huruf “a” hingga akhir string.

        Fungsi substr() juga memiliki argumen ketiga yang bersifat opsional (boleh diisi atau dikosongkan). Jika kita menambahkan argumen ketiga, nilai ini berfungsi sebagai penentu ‘berapa banyak jumlah karakter yang akan  diambil’
        <?php
          $kalimat = "Belajar PHP di Duniailkom";
          $sub_kalimat = substr($kalimat,8,3);
          echo $sub_kalimat;
          // PHP
        ?>
        Fungsi substr($kalimat,8,3) akan mengambil string $kalimat mulai dari index ke-8 (karakter ke-9) dan ambil sebanyak 3 karakter.

        Kita juga bisa memberikan nilai negatif untuk argumen ke-3 ini, dan fungsinya akan berubah. Berikut contohnya:
        <?php
          $kalimat = "Belajar PHP di Duniailkom";
          $sub_kalimat = substr($kalimat,8,-3);
          echo $sub_kalimat;
          // PHP di Duniail
        ?>
        Fungsi substr($kalimat,8,-3) akan mengembalikan string $kalimat mulai dari index ke-8 (karakter ke-9) hingga akhir string, kecuali 3 karakter terakhir. 3 karakter terakhir ini adalah “kom”, sehingga hasil akhir kode diatas adalah: “PHP di Duniail”.

      # Cara Mengambil Karakter Dari Akhir String
        Selain dari awal string, kita juga bisa mengambil karakter mulai dari akhir string. Caranya adalah dengan memberikan nilai negatif pada argumen kedua fungsi substr(). Langsung saja kita lihat contoh penggunaannya:
        <?php
          $kalimat = "Belajar PHP di Duniailkom";
          $sub_kalimat = substr($kalimat,-10);
          echo $sub_kalimat;
          // Duniailkom
        ?>
        Fungsi substr($kalimat,-10) berarti ambil 10 karakter terakhir dari string $kalimat.

        Agar lebih spesifik, kita juga bisa menentukan jumlah karakter yang ingin diambil. Ini bisa didapat dengan menambahkan argumen ke-3:
        <?php
          $kalimat = "Belajar PHP di Duniailkom";
          $sub_kalimat = substr($kalimat,-10,5);
          echo $sub_kalimat;
          // Dunia
        ?>
        Kombinasi terakhir dari fungsi substr() adalah menggunakan angka minus untuk argumen ketiga, seperti contoh berikut:
        <?php
          $kalimat = "Belajar PHP di Duniailkom";
          $sub_kalimat = substr($kalimat,-10,-3);
          echo $sub_kalimat;
          // Duniail
        ?>
        Fungsi substr($kalimat,-10,-3) berarti ambil 10 karakter terakhir dari string $kalimat, kecuali 3 karakter terakhir, sehingga hasil kode programnya adalah: “Duniail”.

        Berikut contoh kode seluruh kombinasi fungsi substr():
        <?php
          $kalimat = "Belajar PHP di Duniailkom";
          echo substr($kalimat,8); // PHP di Duniailkom
          echo "<br>";
          echo substr($kalimat,8,6); // PHP di
          echo "<br>";
          echo substr($kalimat,8,-5); // PHP di Dunia
          echo "<br>";
          echo substr($kalimat,-10); // Duniailkom
          echo "<br>";
          echo substr($kalimat,-10,5); // Dunia
          echo "<br>";
          echo substr($kalimat,-10,-3); // Duniail
        ?>


    function waktu($s){
      $jam = substr ($s, 0, 2);
      $menit = substr ($s, 2, 2);
      $detik = substr ($s, 4, 2);
      echo $jam . ":" . $menit . ":" . $detik;
    }
    echo "<br/>";
    waktu (210923);
    echo "<br/>";
    waktu (203102);
    echo "<br/>";
    waktu (181250);


    <?php
      $nama = explode(" ", "Joni Fernandes Hutapea");
      $inisial = "";

      foreach ($nama as $kata) {
        $inisial .= $kata[0];
      }
      echo $inisial;
    ?>


    <?php
      $array_split = (str_split("abcdef12345abcdf12355",5));
      $hasil = implode(" ",$array_split);

      echo $hasil; // abcde f1234 5abcd f1235 5
    ?>
  */

  /*
    Cara Menghapus Spasi di Awal dan Akhir String (Fungsi trim)

    fungsi trim() digunakan untuk menghapus spasi atau karakter whitespace dari sebuah string. Karakter spasi yang akan dihapus bisa berada di awal maupun di akhir string.

    Dalam prakteknya, fungsi trim() sering digunakan untuk ‘membersihkan’ hasil input form dari karakter spasi yang sengaja atau tidak sengaja ditambahkan pengguna.

    Berikut adalah contoh penggunaan dasar fungsi trim() di dalam PHP:
    <?php
    $nama = " andi       ";
    $trim_nama = trim($nama);
    echo $trim_nama; // "andi"
    ?>
    Karena di HTML whitespace atau spasi tidak akan ditampilkan, penerapan kode diatas tidak terlalu jelas efeknya. Fungsi trim() akan lebih terlihat jika digunakan dalam operasi perbandingan, seperti contoh berikut:
    <?php
      $nama = "andi ";
      $nama_juga = "andi";
      if ($nama == $nama_juga) {
        echo "Nama Sama";
      }
      else {
        echo "Nama Beda";
      }
      // hasil: Nama Beda
    ?>

    Dalam operasi perbandingan diatas, tambahan sebuah spasi diakhir variabel $nama, yakni “andi ” akan membuat operasi perbandingan menghasilkan nilai FALSE, sehingga hasil akhirnya adalah “Tidak Sama”.

    Dengan menambahkan fungsi trim(), kode program diatas akan menghasilkan nilai TRUE, karena spasi yang ada baik diawal dan diakhir string akan dihapus terlebih dahulu:
    <?php
      $nama = "andi ";
      $nama_juga = "andi";
      if (trim($nama) == trim($nama_juga)) {
        echo "Nama Sama";
      }
      else {
        echo "Nama Beda";
      }
      // hasil: Nama Sama
    ?>

    Selain menghapus karakter spasi, fungsi trim() juga akan menghapus 5 karakter whitespace lainnya, seperti tab, new line, carriage return (karakter enter), null-byte, dan vertical tab. Dalam kode karakter ASCII, ke-6 karakter ini adalah sebagai berikut:
    ” ” (ASCII 32 (0x20)), : karakter spasi.
    “\t” (ASCII 9 (0x09)), : karakter tab.
    “\n” (ASCII 10 (0x0A)), : karakter new line (line feed).
    “\r” (ASCII 13 (0x0D)), : karakter carriage return.
    “\0” (ASCII 0 (0x00)), : karakter NULL-byte.
    “\x0B” (ASCII 11 (0x0B)), : karakter vertical tab.

    Berikut contoh penggunaannya:
    <?php
      $nama = "\t \t andi \n \r";
      $nama_juga = "   andi \t";
      if (trim($nama) == trim($nama_juga)) {
        echo "Nama Sama";
      }
      else {
        echo "Nama Beda";
      }
      // hasil: Nama Sama
    ?>

    Untuk menulis karakter “tab”, tidak tersedia tombol khusus di dalam keyboard, oleh karena itu kita menggunakan escape karakter untuk tab, yakni “\t”.

    Fungsi trim() ini sering digunakan untuk menfilter hasil imputan form. Berikut adalah contoh penggunaannya:
    <?php
      $nama = trim($_GET["nama"]);
      // proses variabel nama disini
    ?>

    Menambahkan Karakter yang akan Dihapus (character_mask)
    Fungsi trim() juga memiliki argumen kedua yang bersifat opsional. Argumen kedua ini bertipe string yang jika ditulis akan ditambahkan kedalam daftar karakter yang ikut dihapus, atau istilah teknisnya disebuh dengan character_mask. Langsung saja kita lihat contoh penggunaannya:
    <?php
      $nama = "__andi__";
      $trim_nama = trim($nama);
      echo $trim_nama; // "__andi__"
      echo "<br>";

      $trim_nama = trim($nama,"_");
      echo $trim_nama; // "andi"
    ?>

    Dengan membuat fungsi trim($nama,”_”) maka karakter underscore “_” juga akan ikut dihapus.

    Lebih jauh lagi, character_mask ini mendukung penulisan range atau jangkauan karakter, yang ditulis dengan “awal..akhir”.

    Sebagai contoh, jika saya memiliki beberapa string yang dimulai dengan angka seperti: “1 kelereng”, “2 buah”, “3 orang”, saya bisa menggunakan fungsi trim() untuk menghapus seluruh angka awalan ini. Berikut contohnya:
    <?php
      $kata = "1 kelereng";
      $trim_kata = trim($kata,"0..9");
      echo $trim_kata; // "kelereng"
      echo "<br>";

      $kata = "2 buah";
      $trim_kata = trim($kata,"0..9");
      echo $trim_kata; // "buah"
      echo "<br>";

      $kata = "3 orang";
      $trim_kata = trim($kata,"0..9");
      echo $trim_kata; // "orang"
    ?>

    Fungsi trim($kata,”0..9″) berarti: hapus whitespace yang ada di awal dan akhir string $kata, dan hapus karakter 0, 1, 2, 3 s/d 9 di awal dan diakhir string. Fitur untuk menghapus karakter tertentu ini cukup berguna ketika kita ingin ‘membersihakan’ sebuah string dari karakter yang tidak diinginkan.

    Pengertian Fungsi rtrim() dan ltrim()
    Fungsi rtrim() dan ltrim() adalah bentuk lain dari fungsi trim(), tapi hanya akan menghapus karakter whitespace yang ada disisi kanan (untuk rtrim) dan di sisi kiri string (untuk ltrim). Kedua fungsi ini juga bisa ditambahkan argumen ketiga seperti halnya fungsi trim().

    Berikut contoh penggunaan fungsi rtrim() dan ltrim() dalam PHP:
    <?php
      $nama = " andi ";

      $rtrim_nama = rtrim($nama);
      echo $rtrim_nama; // " andi"
      echo "<br>";

      $ltrim_nama = ltrim($nama);
      echo $ltrim_nama; // "andi "
      echo "<br>";

      $nama = "___andi___";

      $rtrim_nama = rtrim($nama,"_");
      echo $rtrim_nama; // "___andi"
      echo "<br>";

      $ltrim_nama = ltrim($nama,"_");
      echo $ltrim_nama; // "andi___"
    ?>

    Dapat terlihat bahwa fungsi rtrim() dan fungsi ltrim() hanya akan menghapus karakter pada satu sisi saja.

  */

  /*

    ESCAPE CHARACTER
    \u00A9 -> copyright (c)
    \u00AE -> (r)
    \u00B1 -> plus minus (+-)
    \u00B5 -> micro (u)
    \u2122 -> Trade Mark (TM)

  */

  /* Object Type

    $obj = (object) "Asd";
    echo $obj->scalar; // output Asd


  */

  /* Type-Hinting

  declare(strict_types=1);

  class MyClass {};

  function myfunc($class){
    // Validate classname.
    if($class instanceof MyClass){
      $class = get_class($class);
    } elseif(!class_exists($class) or !is_a($class, MyClass::class, true)){
      throw new \TypeError("$class is not of type " . MyClass::class);
    }
    // Proceed with processing of MyClass subclass ...
  }

  $myclass = new MyClass;
  myfunc($myclass);                // valid
  myfunc(MyClass::class);        // valid
  myfunc(\String::class);          // not of type MyClass.

  */

  /* Autoloading - OOP

    function autoload($class){

    }

    spl_autoload_register(autoload());


    ATAU

    spl_autoload_register(function($class){
      require_once __DIR__ "Produk/".$class.".php";
    });

  */



  /* Sublime Text 3 : Snippet
    Simpan nama file sesuai dengan tabtrigger diikuti
    ekstensi sublime-snippet

    contoh:
    formel.sublime-snippet

    <snippet>
      <content><![CDATA[
    <label for="${2:elemen}">${2:elemen} :</label>
    <input type="${1:text}" name="${2:elemen}" id="${2:elemen}"
    ]]></content>
      <!-- Optional: Set a tabTrigger to define how to trigger the snippet -->
      <tabTrigger>formel</tabTrigger>
      <!-- Optional: Set a scope to limit where the snippet will trigger -->
      <scope>text.html</scope>
    </snippet>
  */


  /* Pseudo-types and variables used in this documentation
    Pseudo-types are keywords used in the PHP documentation to specify the types or values an argument can have. Please note that they are not primitives of the PHP language. So you cannot use pseudo-types as typehints in your own custom functions.

    mixed
      mixed indicates that a parameter may accept multiple (but not necessarily all) types.

      gettype() for example will accept all PHP types, while str_replace() will accept strings and arrays.

      array
      string
      bool
      callable
      int
      float
      void
      mixed
      Aczel
      CI

    number
      number indicates that a parameter can be either integer or float.

      int
      float

    callback
      callback pseudo-types was used in this documentation before callable type hint was introduced by PHP 5.4. It means exactly the same.

      callable

    array|object
      array|object indicates that a parameter can be either array or object.

      array
      Aczel
      CI

    void
      void as a return type means that the return value is useless. void in a parameter list means that the function doesn't accept any parameters. As of PHP 7.1 void is accepted as a function return type hint.

      ...

      $... in function prototypes means and so on. This variable name is used when a function can take an endless number of arguments.

  */
}



/*

Kenapakah langit itu berwarna biru?
Suara kuning pun terangkat
dan melahirkan ingatan menentramkan
dari campuran warna biru dan kuning
Hijau untuk sebuah bunga,
bunga untuk air dan impian untuk diriku
Buatlah dari nol dan pertaruhkan aliran darah merahmu
Hancurkanlah cangkangmu itu,
layaknya bunga yang bermekaran
Hubungkan semua rumus, peganglah kuas itu
dan rebut kembali kehidupanmu
Kita terjang aturan yang tak terlihat itu
'tuk mendapatkan tanda sama dengan
Siapa yang berani memulai dari awal
dan mampu mengubah semuanya dengan tekad
Kekuatan tuk hidup menyebar melalui warna utama
Era yang kosong terlepas dari masa lalu,
berdiri menjadi kenyataan
Semuanya pun akhirnya menjadi gelap,
apakah yang akan berkembang selanjutnya?
Ah, jika masa depan kita memiliki warna
akan kugambar dengan warna yang pernah kulihat

*/
