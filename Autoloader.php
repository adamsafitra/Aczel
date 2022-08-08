<?php
namespace Aczel;

final class Autoloader {
  final public function __construct($path = null){
    spl_autoload_register(function($class){
      $class = explode("\\", $class);
      $class = end($class);
      require_once __DIR__ . $path . $class . ".php";
    });
  }
}

try {

} catch(Throwable $e) {
	print $e->getMessage();
} catch(ArithmeticException $e) {
	print $e->getMessage();
} catch(Exception $e) {
	echo $e->getMessage();
} finally {

}

/*
class Autoloader {
  public static function register(){
    spl_autoload_register(function($class){
      $file = str_replace('\\', DIRECTORY_SEPARATOR, $class).'.php';
      if (file_exists($file)) {
        require $file;
        return true;
      }

      return false;
    });
  }
}

class Autoload {
  public function __construct(){
    spl_autoload_extensions(".php");
    spl_autoload_register();
  }
}


//-----------------------------------

// Your custom class dir
define('CLASS_DIR', 'class/');

// Add your class dir to include path
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);

/**
This adds the include path to THE END of the paths PHP will scan for the class file, resulting in a bunch of misses (file-not-found's) before actually looking into the CLASS_DIR.
A more sensible approach, then would be to write
**

set_include_path(
  CLASS_DIR.
  PATH_SEPARATOR,
  get_include_path()
); 


//---------------------------------------------
function autoload($className){
  set_include_path('./library/classes/');
  spl_autoload($className); //replaces include/require
}
spl_autoload_extensions('.class.php');
spl_autoload_register('autoload'); 
//-------------------------------------------------
*/
