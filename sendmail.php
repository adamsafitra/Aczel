<?php
#Alphabet Studio Zigatur
/**
 * @package Zigatur Headquarters Server 
 * @author Alphabet Studio Zigatur
 * @copyright	Copyright (c) 2016 - 2019, Zigatur Inc.
 * @copyright	Copyright (c) 2018 - 2019, Alphabet Studio Zigatur
 * @license	Timaka
 * @link	zigatur.com
 * @since	Version 1.0.0
 * @filesource
 * 
 * Proyek Sumber Terbuka
 * Lingkungan Pengembangan Terpadu Zigantara
*/
?>
<?php
require_once 'initiate.php';
$init = new Initiate;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sendmail</title>
  <?php $init->rendering(); ?>
</head>
<body>
  <?php
    $to = 'adamsafitra24@gmail.com';
    $subject = 'Hello from XAMPP!';
    $message = 'This is a test';
    $headers = "From: zigatur37@gmail.com\r\n";

    if (mail($to, $subject, $message, $headers)) {
      echo "SUCCESS";
    } else {
      echo "ERROR";
    }
  ?>
</body>
</html>
