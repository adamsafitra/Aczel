<?php

if (!$_REQUEST['action']) {
  die("<h1>403</h1>");
}

switch($_REQUEST['action']){
  case "sendMessage":
    session_start();
    echo true;
    exit;
    break;        
  case "getMessage":
    echo time() - strtotime("24 nov 2003");
    break;
  case "mikro":
    echo microtime(true);
    break;
}
