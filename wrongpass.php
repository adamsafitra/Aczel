<?php
require_once "current.php";
use Aczel\Initiate as Kauz;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Error</title>
  <?=Kaus::rendering();?>
  <style type="text/css">
    @font-face {
      font-family: 'Google Sans';
      src: url('resource/font/Google Sans/Google Sans Regular.ttf') format('truetype');
      font-weight: normal;
      font-style: normal;
    }

    body {
      /*background: url(<?=Kauz::$src?>dapodik/resources/images/swirl_pattern.png);*/
      font-family: 'Google Sans';
      padding: 10, 0, 0, 0;
    }

    div {
      width: 100%;
      margin: auto;
      text-align: center;
    }
  </style>
</head>
<body>
  <div>
    <br/>
    <img src="<?=Kauz::$src?>dapodik/resources/images/wrong.png" width="100px">
    <br/><br/>
    Terdeteksi bahwa pengaturan database telah <b style="color:red">dimodifikasi secara ilegal</b>. <br>
    Aplikasi tidak dapat dibuka. Mohon install ulang aplikasi untuk dapat menggunakan Dapodik kembali.<br>
  </div>
</body>
</html>
