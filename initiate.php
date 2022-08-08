<?php
/**
 * @package Aczel Universal Configuration
 * @author Zigatur Studio
 * @author Alphabet Studio Zigatur
 * @author Alphabet Ministudio Zigatur
 * @copyright Copyright (c) 2012 - 2020, Timaka SuperCluster
 * @copyright Copyright (c) 2016 - 2020, Zigatur Inc.
 * @copyright Copyright (c) 2018 - 2019, Alphabet Studio Zigatur
 * @copyright Copyright (c) 2018 - 2020, Alphabet Studio Zigatur
 * @license Timaka SuperCluster
 * @link https://zigatur.com
 *
 * @version 1.0
 * @since 2019
 *
 * @version 1.1
 * @since 2020
 *
 * @version 1.2
 * @since 20 Februari 2020
 *
 * @version 1.2.1
 * @since 15 Februari 2020
 *
 * @since Version 1.0.0
 * @filesource Zigatorium
 *
 * Lingkungan Pengembangan dan Pembelajaran Terpadu Zigantara
 *
*/

namespace Aczel;

use PDO;

class Initiate {
  public static $peladen;
  public $zurl = "192.168.43.89";
  private $jalur;
  public $sprt = "/";

  public static $src;
  public static $favicon;
  private $pdo;

  public function __construct() {
    date_default_timezone_set("Asia/Makassar");

    if (!empty($_SERVER["HTTPS"]) && ("on" == $_SERVER["HTTPS"])) {
      $this->jalur = "https://";
    } else {
      $this->jalur = "http://";
    }

    $this->zurl = $_SERVER["HTTP_HOST"];

    #$this->peladen = $this->jalur . $this->zurl . "/";
    self::$peladen = $this->jalur . $this->zurl . "/";
    #$this->peladen = $this->jalur . $_SERVER['HTTP_HOST'] . "/";

    #$init['base_url'] = 'http://localhost/';
    #$root = "http://".$_SERVER['HTTP_HOST'];
    #$root .= dirname($_SERVER['SCRIPT_NAME']);
    #$config['base_url'] = $root;

    #$this->src = $this->peladen . 'resource' . "/";
    #$this->favicon = $this->peladen . 'favicon.ico';
    self::$src = self::$peladen . "resource" . "/";
    self::$favicon = self::$peladen . "favicon.ico";

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
  }

  /**
   * @return $this->src
   */
  public function src() {
    // if(!empty($patz)){
    //   return self::$src . $patz;
    // } else {
    //   return self::$src;
    // }
    }

  /**
   * @return $this->peladen
   */
  public function peladen(){
    return self::$peladen;
  }

  /**
   * @return $this->favicon
   */
  public function favicon() {
    return self::$favicon;
  }

  // Tanggal Indonesia
  /*public function tgl_indo($tanggal){
    $bulan = array (
      1 =>  'Januari',
          'Maret',
          'Februari',
          'April',
          'Mei',
          'Juni',
          'Juli',
          'Agustus',
          'September',
          'Oktober',
          'November',
          'Desember',
    );

    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2].' '.$bulan[(int)$pecahkan[1]].' '.$pecahkan [0];
  }*/

  public function tgl_indo($tanggal) {
    $bulan = array (
      1 =>  'Januari',
          'Februari',
          'Maret',
          'April',
          'Mei',
          'Juni',
          'Juli',
          'Agustus',
          'September',
          'Oktober',
          'November',
          'Desember'
    );

    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
  }

  #echo tgl_indo(date('Y-m-d')); // 22 Oktober 2019
  #echo tgl_indo("1992-02-15");

  public static function rendering(){
    //<meta name="author" content="Alphabet Studio Zigatur"/>
    return <<<EOT
    \n\t\t<meta charset="utf-8">
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta content="IE=edge, chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=1.0">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="renderer" content="webkit">
    <meta content="id_ID" property="og:locale:alternate">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="full-screen" content="yes">
    <meta name="browsermode" content="application">
    <meta name="x5-fullscreen" content="true">
    <meta name="x5-page-mode" content="app">\n\n
EOT;
  }

  public function kaus(): void {
    echo "Zigatur";
  }

  public function daftar_file($dir) {
    if (is_dir($dir)) {
      if ($handle = opendir($dir)) {
        //tampilkan semua file dalam folder kecuali
        while(($file = readdir($handle)) !== false) {
          #echo '<a target="_blank" href="'.$dir.$file.'">'.$file.'</a><br>'."\n";
          echo ("<button><a target=\"_blank\" href=\"{$dir}{$file}\">{$file}</a></button><br/><br/>"."\n\t\t");
        }

        closedir($handle);
      }
    }
  }

  /**
   * [resizeImg description]
   * @param [string] $image [Lokasi dan nama file]
   * @param [int] $max_width [Lebar Gambar]
   * @param [int] $max_height [Tingg gambar]
   */
  public static function resizeImg($image, $max_width, $max_height = 1000) {
    if (strrchr($image, '/')) {
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
    if (($width <= $max_width) && ($height <= $max_height)) {
      $tn_width = $width;
      $tn_height = $height;
    } else if (($x_ratio * $height) < $max_height) {
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
    if ($imageModified < $thumbModified) {
      header("Last-Modified: ".gmdate("D, d M Y H:i:s",$thumbModified)." GMT");
      readfile($resized);
      exit;
    }

    // read image
    $ext = substr(strrchr($image, '.'), 1); // get the file extension
    switch ($ext) {
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
    }

    // set up canvas
    $dst = imagecreatetruecolor($tn_width,$tn_height);

    imageantialias($dst, true);

    // copy resized image to new canvas
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $tn_width, $tn_height, $width, $height);

    /* Sharpening adddition by Mike Harding */
    // sharpen the image (only available in PHP5.1)
    if (function_exists("imageconvolution")) {
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

  public static function fibonacci_seq($n){
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

  public static function binet(int $n): int {
    $dec_fi = 1.6180339887498948482;
    $akar_5 = sqrt(5);
    //$fi = 1.618043;
    $fi = (1+$akar_5)/2;

    return floor((pow($fi, $n)-pow(1-$fi, $n))/$akar_5);
  }

  public static function fibonacci(int $n): int {
    $a = 0;
    $b = 1;

    for($i = 0; $i < $n; $i++){
      $b += $a;
      $a = $b - $a;
    }

    return $a;
  }

  public static function rekursi_fibonacci($n){
    if($n == 0 || $n == 1){
      return 1;
    } else {
      return rekursi_fibonacci($n-1) + rekursi_fibonacci($n-2);
    }
  }

  public static function faktorial(int $n): int {
    if($n == 1){
      return 1;
    } else {
      return $n * self::faktorial($n-1);
    }
  }

  public static function rekursi_euclid($a, $b){
    // Algoritme ini untuk menentukan FPB dari 2 bilangan
    if($b == 0){
      return $a;
    } else {
      return rekursi_euclid($b, $a % $b);
    }
  }

  public static function iteratif_euclid($a, $b){
    while($b != 0){
      $t = $b;
      $b = $a % $b;
      $a = $t;
    }

    return $a;
  }

  public static function pixma($dbname){
    #return "\"mysql:host=localhost;dbname=".$dbname."\", \"root\", \"\"";
    #return new PDO('mysql:host=localhost; dbname={$dbname}', "root", "");
    if($dbh === null){
      $dbh = new PDO("mysql:host=localhost;dbname=$dbname", "root", "");
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    return $dbh;

    #$this->db = new PDO("mysql:host=localhost;dbname=$dbname", 'root', '');
    #$mysqli = new mysqli(localhost, root, '', $dbname);
  }

  public function dbh($dbname){
    #return "\"mysql:host=localhost;dbname=".$dbname."\", \"root\", \"\"";
    #return new PDO('mysql:host=localhost; dbname={$dbname}', "root", "");
    if ($this->pdo === null) {
      $this->pdo = new PDO("mysql:host=localhost;dbname=$dbname", "root", "");
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    return $this->pdo;
  }

  public function pdo($db){
    return $this->dbh($db);

    #$this->db = new PDO('mysql:host=localhost;dbname=malasngoding', 'root', '');
    #$mysqli = new mysqli($host, $user, $pass, $database);
  }

  public function querypdo($query){
    $que = $this->pdo->prepare($query);
    $que->execute();
    $result = $que;
    $rows = [];

    while($row = $result->fetch(PDO::FETCH_ASSOC)){
      $rows[] = $row;
    }

    return $rows;
  }

  public function spasi_remover($texthere) {
    $text = str_replace("  ", "", $texthere);
    return $text;
  }

  public function single_spasi_remover($texthere) {
    $text = str_replace(" ", "", $texthere);
    return $text;
  }

  public function Nohtmlphp($check, $varhtml) {
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

  public function ftp($server, $username, $password, $server_file, $local_file, $folder_path) {
    // set up basic connection
    $connect = ftp_connect($server);

    // login with username and password
    $login = ftp_login($connect, $username, $password);

    // try to download $server_file and save to $local_file
    if(ftp_get($connect, $local_file, $server_file, FTP_BINARY)){
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
    if(is_numeric($date)){
      $date = '@' . $date;
    }

    #$user_timezone = new DateTimeZone(Config::app('timezone'));
    $user_timezone = new DateTimeZone('Asia/Makassar');
    $date = new DateTime($date, $user_timezone);

    // get current date in user timezone
    $now = new DateTime('now', $user_timezone);

    $elapsed = $now->format('U') - $date->format('U');

    if($elapsed <= 1){
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

    foreach ($times as $seconds => $title) {
      $rounded = $elapsed / $seconds;

      if ($rounded > 1) {
        $rounded = round($rounded);
        return $rounded . ' ' . $this->pluralise($rounded, $title) . ' ago';
      }
    }
  }

  public function val_e(): float {
    return M_E;
  }

  public function pascalTriangle($tinggi) {
    for ($a = 10; $a > 0; $a--) {
      for ($i = 1; $i <= $a; $i++) {
        echo "  ";
      }

      for ($a1 = 10; $a1 > $a; $a1--) {
      echo "x";
      }

      for ($a2 = 11; $a2 > $a; $a2--) {
      echo "x";
      }

      echo "<br>";
    }
  }

  public function pascalTriangle2($tinggi){
    for ($i = 1; $i <= 5; $i++) {
      for ($j = 4; $j >= $i; $j--) {
        echo "  ";
      }

      for ($k = 1; $k <= $i; $k++) {
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
  function current_url() {
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
  public static function make($value, $rounds = 12) {
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
  public static function check($value, $hash){
    return password_verify($value, $hash);
  }

  /* /Hash */

  public function __toString() {

  }


  public static function file($file, $mode, $text){
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

  public function __destruct(){
    $this->pdo = null;
  }
