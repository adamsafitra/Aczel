<?php
ob_start();
session_start();
	
// MYSQL
$mysql_config = array(
  'db' => 'fb_chat_m',
  'host' => 'localhost',
  'options' => array(),
  'pass' => '',
  'user' => 'root',
);

// SITE
define('SITE', true);

// USER IP
function getIP() {
  return getenv('HTTP_CLIENT_IP')?: getenv('HTTP_X_FORWARDED_FOR')?: getenv('HTTP_X_FORWARDED')?: getenv('HTTP_FORWARDED_FOR')?: getenv('HTTP_FORWARDED')?: getenv('REMOTE_ADDR');	
}

define('IP', getIP());
