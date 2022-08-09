<?php
namespace Aczel;

final class Autoloader {
  final public function __construct(
      protected string $path = "",
      bool $is_test = false
  ) {
    $fn = 'register';
    $ext = '.php';

    if ($is_test) {
      $fn = 'register_test';
      $ext = '_test.php';
    }

    // set_include_path('./');
    // spl_autoload_extensions($ext);
    spl_autoload_register(array($this, $fn));
  }

  final protected function register($class) {
    $class = explode('\\', $class);
    $class = end($class);
    $class = __DIR__ . '/' . $class . '.php';

    if (file_exists($class)) {
      require_once $class;
      return true;
    }

    echo __FILE__ . ": $class not found<br>\n";
    return false;
  }

  final public function register_test($class) {
    $class = explode('\\', $class);
    $class = end($class);
    $class = __DIR__. '/' . $class . '_test.php';

    if (file_exists($class)) {
      require_once $class;
      echo $class . "<br>\n";
      return true;
    }

    echo __FILE__ . ": $class not found<br>\n";
    return false;
  }

  final public static function autoload($path = __DIR__) {
    $files = scandir($path);

    foreach ($files as $file) {
      if (substr($file, 0, 1) == '.') {
        continue;
      }

      $file = $path . DIRECTORY_SEPARATOR . $file;

      if (is_file($file)) {
        require_once $file;
        continue;
      }

      if (is_dir($file)) {
        self::autoload($file);
      }
    }
  }

  public function test($msg) {
    echo $msg . ' in ' . __FILE__ . '<br>';
  }
}
