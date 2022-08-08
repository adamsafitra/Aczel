# Initiate

Dalam variabel string, menambahkan:
"\n" - baris baru
"\t" - tab
"\r" - carriage return atau spasi
"\\" - backslash atau (mungkin) tanda \ sebagai string
"\$" - dollar sign atau (mungkin) tanda $ sebagai string
"\"" - double quote atau tanda " sebagai string

```php
dirname( __FILE__ ).'/paya.php';
```


## Fungsi number_format
### 2 Argument
string number_format(float $number [, int $decimals = 0 ])
  * Argumen pertama (`$number`) membutuhkan input nilai angka yang akan diformat. Argumen ini bertipe _float_, tapi bisa juga bisa diisi dengan nilai _integer_.
  * Argumen kedua (`$decimals`) bersifat opsional. Argumen ini menentukan berapa jumlah angka desimal (angka di belakang koma) yang dibutuhkan. Apabila tidak diisi, dianggap sebagai 0.

### 4 Argument
string number_format(float $number, int $decimals = 0, string $dec_point = ".", string $thousands_sep = ",")
  * Argumen ketiga dan keempat fungsi `number_format()` digunakan untuk menentukan karakter apa sebagai pemisah nilai ribuan dan nilai desimal. Argumen ketiga dan keempat fungsi `number_format()` digunakan untuk menentukan karakter apa sebagai pemisah nilai ribuan dan nilai desimal.


## Cara Memotong atau Mengambil Sebagian String (fungsi substr)
Fungsi `substr()` digunakan untuk memotong sebuah string atau mengambil sebagian nilai dari sebuah string di dalam PHP.
Sebagai contoh, misalkan kita memiliki sebuah string berbentuk tanggal: “14-09-2015”. Bagaimana caranya untuk mengambil nilai bulan dari string tersebut, yakni karakter “09” ?
Contoh lain, katakan NIM seorang mahasiswa terdiri dari 8 digit: “12140001”. Dua digit pertama adalah tahun masuk mahasiswa, dua digit berikutnya kode jurusan, dan empat digit terakhir adalah no urut mahasiswa. Bagaimana cara memisahkan digit-digit ini?

Dalam kasus seperti inilah fungsi `substr()` diperlukan.

Fungsi `substr()` membutuhkan 2 buah argumen dan 1 argumen tambahan (opsional). Arguman pertama adalah _string_ asal yang ingin diambil nilainya. Argumen kedua berupa posisi awal pemotongan, dan argumen ketiga diisi jumlah karakter yang akan diambil. Argumen kedua dan ketiga bertipe _integer_ dan bisa positif maupun negatif.

PHP membuat penggunaan fungsi `substr()` dengan 6 kombinasi cara penulisan.
### Cara Mengambil Karakter Dari Awal String
```php
$kalimat = "Belajar PHP di Duniailkom";
$sub_kalimat = substr($kalimat,3);
echo $sub_kalimat;
// ajar PHP di Duniailkom
```

Dalam kode di atas, saya mengambil _string_ `$kalimat` mulai dari index ke-3. Jika fungsi `substr()` ditulis dengan 2 argumen seperti ini, dan argumen kedua bernilai positif, maka fungsi `substr()` akan mengembalikan nilai _string_ `$kalimat` mulai dari huruf ke-4, yakni huruf “a” hingga akhir _string_.

Fungsi `substr()` juga memiliki argumen ketiga yang bersifat opsional (boleh diisi atau dikosongkan). Jika kita menambahkan argumen ketiga, nilai ini berfungsi sebagai penentu ‘berapa banyak jumlah karakter yang akan  diambil’
```php
$kalimat = "Belajar PHP di Duniailkom";
$sub_kalimat = substr($kalimat,8,3);
echo $sub_kalimat;
// PHP
```

Fungsi `substr($kalimat,8,3)` akan mengambil _string_ `$kalimat` mulai dari index ke-8 (karakter ke-9) dan ambil sebanyak 3 karakter.

Kita juga bisa memberikan nilai negatif untuk argumen ke-3 ini, dan fungsinya akan berubah. Berikut contohnya:
```php
$kalimat = "Belajar PHP di Duniailkom";
$sub_kalimat = substr($kalimat,8,-3);
echo $sub_kalimat;
// PHP di Duniail
```

Fungsi `substr($kalimat,8,-3)` akan mengembalikan _string_ `$kalimat` mulai dari index ke-8 (karakter ke-9) hingga akhir string, kecuali 3 karakter terakhir. 3 karakter terakhir ini adalah “kom”, sehingga hasil akhir kode di atas adalah: “PHP di Duniail”.

### Cara Mengambil Karakter Dari Akhir String
Selain dari awal _string_, kita juga bisa mengambil karakter mulai dari akhir _string_. Caranya adalah dengan memberikan nilai negatif pada argumen kedua fungsi `substr()`. Langsung saja kita lihat contoh penggunaannya:
```php
$kalimat = "Belajar PHP di Duniailkom";
$sub_kalimat = substr($kalimat,-10);
echo $sub_kalimat;
// Duniailkom
```

Fungsi `substr($kalimat,-10)` berarti ambil 10 karakter terakhir dari _string_ `$kalimat`.

Agar lebih spesifik, kita juga bisa menentukan jumlah karakter yang ingin diambil. Ini bisa didapat dengan menambahkan argumen ke-3:
```php
$kalimat = "Belajar PHP di Duniailkom";
$sub_kalimat = substr($kalimat,-10,5);
echo $sub_kalimat;
// Dunia
```

Kombinasi terakhir dari fungsi `substr()` adalah menggunakan angka minus untuk argumen ketiga, seperti contoh berikut:
```php
$kalimat = "Belajar PHP di Duniailkom";
$sub_kalimat = substr($kalimat,-10,-3);
echo $sub_kalimat;
// Duniail
```

Fungsi `substr($kalimat,-10,-3)` berarti ambil 10 karakter terakhir dari _string_ `$kalimat`, kecuali 3 karakter terakhir, sehingga hasil kode programnya adalah: “Duniail”.

Berikut contoh kode seluruh kombinasi fungsi `substr()`:
```php
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
```

```php
function waktu($s) {
  $jam = substr($s, 0, 2);
  $menit = substr($s, 2, 2);
  $detik = substr($s, 4, 2);
  echo $jam . ":" . $menit . ":" . $detik;
}

echo "<br/>";
waktu(210923);
echo "<br/>";
waktu(203102);
echo "<br/>";
waktu(181250);
```

```php
$nama = explode(" ", "Joni Fernandes Hutapea");
$inisial = "";

foreach ($nama as $kata) {
  $inisial .= $kata[0];
}

echo $inisial;
```

```php
$array_split = str_split("abcdef12345abcdf12355", 5);
$hasil = implode(" ", $array_split);

echo $hasil; // abcde f1234 5abcd f1235 5
```



###Cara Menghapus Spasi di Awal dan Akhir String (Fungsi trim)
fungsi `trim()` digunakan untuk menghapus spasi atau karakter whitespace dari sebuah _string_. Karakter spasi yang akan dihapus bisa berada di awal maupun di akhir _string_.

Dalam prakteknya, fungsi `trim()` sering digunakan untuk ‘membersihkan’ hasil input form dari karakter spasi yang sengaja atau tidak sengaja ditambahkan pengguna.

Berikut adalah contoh penggunaan dasar fungsi `trim()` di dalam PHP:
```php
$nama = " andi       ";
$trim_nama = trim($nama);

echo $trim_nama; // "andi"
```

Karena di HTML whitespace atau spasi tidak akan ditampilkan, penerapan kode di atas tidak terlalu jelas efeknya. Fungsi `trim()` akan lebih terlihat jika digunakan dalam operasi perbandingan, seperti contoh berikut:
```php
$nama = "andi ";
$nama_juga = "andi";

if ($nama == $nama_juga) {
  echo "Nama Sama";
} else {
  echo "Nama Beda";
}
// hasil: Nama Beda
```

Dalam operasi perbandingan di atas, tambahan sebuah spasi di akhir variabel `$nama`, yakni “andi ” akan membuat operasi perbandingan menghasilkan nilai _FALSE_, sehingga hasil akhirnya adalah “Tidak Sama”.

Dengan menambahkan fungsi `trim()`, kode program di atas akan menghasilkan nilai _TRUE_, karena spasi yang ada baik di awal dan di akhir _string_ akan dihapus terlebih dahulu:
```php
$nama = "andi ";
$nama_juga = "andi";

if (trim($nama) == trim($nama_juga)) {
  echo "Nama Sama";
} else {
  echo "Nama Beda";
}
// hasil: Nama Sama
```

Selain menghapus karakter spasi, fungsi `trim()` juga akan menghapus 5 karakter _whitespace_ lainnya, seperti _tab_, _new line_, _carriage return_ (karakter enter), _null-byte_, dan _vertical tab_. Dalam kode karakter __ASCII__, ke-6 karakter ini adalah sebagai berikut:
” ” (ASCII 32 (0x20)), : karakter spasi.
“\\t” (ASCII 9 (0x09)), : karakter tab.
“\\n” (ASCII 10 (0x0A)), : karakter new line (line feed).
“\\r” (ASCII 13 (0x0D)), : karakter carriage return.
“\\0” (ASCII 0 (0x00)), : karakter NULL-byte.
“\\x0B” (ASCII 11 (0x0B)), : karakter vertical tab.

Berikut contoh penggunaannya:
```php
$nama = "\t \t andi \n \r";
$nama_juga = "   andi \t";

if (trim($nama) == trim($nama_juga)) {
  echo "Nama Sama";
} else {
  echo "Nama Beda";
}
// hasil: Nama Sama
```

Untuk menulis karakter “__tab__”, tidak tersedia tombol khusus di dalam keyboard, oleh karena itu kita menggunakan escape karakter untuk __tab__, yakni “`\t`”.

Fungsi `trim()` ini sering digunakan untuk menfilter hasil imputan form. Berikut adalah contoh penggunaannya:
```php
$nama = trim($_GET["nama"]);
// proses variabel nama di sini
```

### Menambahkan Karakter yang akan Dihapus (character_mask)
Fungsi `trim()` juga memiliki argumen kedua yang bersifat opsional. Argumen kedua ini bertipe _string_ yang jika ditulis akan ditambahkan kedalam daftar karakter yang ikut dihapus, atau istilah teknisnya disebuh dengan character_mask. Langsung saja kita lihat contoh penggunaannya:
```php
$nama = "__andi__";
$trim_nama = trim($nama);
echo $trim_nama; // "__andi__"
echo "<br>";

$trim_nama = trim($nama,"_");
echo $trim_nama; // "andi"
```

Dengan membuat fungsi `trim($nama,”_”)` maka karakter _underscore_ “\_” juga akan ikut dihapus.

Lebih jauh lagi, `character_mask` ini mendukung penulisan range atau jangkauan karakter, yang ditulis dengan “awal..akhir”.

Sebagai contoh, jika saya memiliki beberapa _string_ yang dimulai dengan angka seperti: “1 kelereng”, “2 buah”, “3 orang”, saya bisa menggunakan fungsi `trim()` untuk menghapus seluruh angka awalan ini. Berikut contohnya:
```php
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
```

Fungsi `trim($kata,”0..9″)` berarti: hapus _whitespace_ yang ada di awal dan akhir _string_ `$kata`, dan hapus karakter 0, 1, 2, 3 s/d 9 di awal dan di akhir string. Fitur untuk menghapus karakter tertentu ini cukup berguna ketika kita ingin ‘membersihakan’ sebuah _string_ dari karakter yang tidak diinginkan.

# Pengertian Fungsi `rtrim()` dan `ltrim()`
Fungsi `rtrim()` dan `ltrim()` adalah bentuk lain dari fungsi `trim()`, tapi hanya akan menghapus karakter _whitespace_ yang ada di sisi kanan (untuk `rtrim`) dan di sisi kiri string (untuk `ltrim`). Kedua fungsi ini juga bisa ditambahkan argumen ketiga seperti halnya fungsi `trim()`.

Berikut contoh penggunaan fungsi `rtrim()` dan `ltrim()` dalam PHP:
```php
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
```

Dapat terlihat bahwa fungsi `rtrim()` dan fungsi `ltrim()` hanya akan menghapus karakter pada satu sisi saja.


ESCAPE CHARACTER
`\u00A9` -> copyright (c)
`\u00AE` -> (r)
`\u00B1` -> plus minus (+-)
`\u00B5` -> micro (u)
`\u2122` -> Trade Mark (TM)


# Object Type
```php
$obj = (object) "Asd";
echo $obj->scalar; // output Asd
```

# Type-Hinting
```php
declare(strict_types=1);

class MyClass {};

function myfunc($class) {
  // Validate classname.
  if ($class instanceof MyClass) {
    $class = get_class($class);
  } elseif (!class_exists($class) or !is_a($class, MyClass::class, true)) {
    throw new \TypeError("$class is not of type " . MyClass::class);
  }
  // Proceed with processing of MyClass subclass ...
}

$myclass = new MyClass;
myfunc($myclass);        // valid
myfunc(MyClass::class);  // valid
myfunc(\String::class);  // not of type MyClass.
```




```php
$typeMap = [
  'integer' => 'int',
  'int'     => 'int',
  'float'   => 'float',
  'double'  => 'float',
  'real'    => 'float',
  'string'  => 'string',
  'boolean' => 'bool',
  'bool'    => 'bool',
  'mixed'   => 'mixed',
  'Closure' => 'Closure',
  'void'    => 'void',
];
```


# Anonymous Function
```php
$greet = function($name) {
  printf("Hello %s\r\n", $name);
};

$greet("World");
$greet("PHP");
```

# Autoloading - OOP
```php
function autoload($class) {

}

spl_autoload_register(autoload());
```

ATAU
```php
spl_autoload_register(function($class) {
  require_once __DIR__ . "/Produk/" . $class . ".php";
});
```



# Sublime Text 3 : Snippet
Simpan nama file sesuai dengan tabtrigger diikuti ekstensi sublime-snippet

Contoh:
`formel.sublime-snippet`

```xml
<snippet>
  <content>
  <![CDATA[
    <label for="${2:elemen}">${2:elemen} :</label>
    <input type="${1:text}" name="${2:elemen}" id="${2:elemen}"
  ]]>
  </content>
  <!-- Optional: Set a tabTrigger to define how to trigger the snippet -->
  <tabTrigger>formel</tabTrigger>
  <!-- Optional: Set a scope to limit where the snippet will trigger -->
  <scope>text.html</scope>
</snippet>
```


# Pseudo-types and variables used in this documentation
Pseudo-types are keywords used in the PHP documentation to specify the types or values an argument can have. Please note that they are not primitives of the PHP language. So you cannot use pseudo-types as typehints in your own custom functions.

## mixed
mixed indicates that a parameter may accept multiple (but not necessarily all) types.

`gettype()` for example will accept all PHP types, while `str_replace()` will accept strings and arrays.

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

## number
number indicates that a parameter can be either _integer_ or _float_.

int
float

# callback
callback pseudo-types was used in this documentation before callable type hint was introduced by PHP 5.4. It means exactly the same.

callable

# array|object
array|object indicates that a parameter can be either array or object.

array
Aczel
CI

# void
void as a return type means that the return value is useless. void in a parameter list means that the function doesn't accept any parameters. As of PHP 7.1 void is accepted as a function return type hint.

## ...
$... in function prototypes means and so on. This variable name is used when a function can take an endless number of arguments.


# Font
default fontfamily vs code :"Consolas, monospace, 'Courier New'"

# Passwd
password of the homegroup of your network 'Pa1zr8yb7d'


# Dr. Stone
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


Ceddin, deden, neslin, baban.
Ceddin, deden, neslin, baban.
Hep kahraman Turk milleti.
Ordularin, pek cok zaman, vermistiler dunyaya san.
Ordularin, pek cok zaman, vermistiler dunyaya san.

Turk milleti Turk milleti.
Turk milleti Turk milleti.
Ask ile sev milletiyeti.
Kahret vatan dusmanini, ceksin o mel'un zilleti.
Kahret vatan dusmanini, ceksin o mel'un zilleti.
