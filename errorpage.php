<?php require_once "current.php";?>
<!DOCTYPE html>
<html>
<head>
  <title>Error</title>
  <?=ZInit::rendering()?>
</head>
<body>
  <div style="width:100%;margin:auto;text-align:center;">
    <br/>
    <img src="<?=ZInit::$src?>dapodik/resources/images/wrong.png" width="100px">
    <br/><br/>
    Terdeteksi bahwa pengaturan database telah <b style="color:red">dimodifikasi secara ilegal</b>. <br>
    Aplikasi tidak dapat dibuka. Mohon install ulang aplikasi untuk dapat menggunakan Dapodik kembali.<br>
  </div>
</body>
</html>
