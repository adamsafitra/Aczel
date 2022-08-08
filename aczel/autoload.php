<?php

	spl_autoload_register(function($class){
		require_once __DIR__.'/Produk/'.$class.'.php';
	});

//---------------------------------------------

	spl_autoload_register(function($class){
		$class = explode('\\', $class);
		$class = end($class);
		require_once __DIR__ . '/Produk/' . $class . '.php';
	});

//--------------------------------------------

	namespace Foobar;

	class Foo {
		static public function test($name){
			print '[['. $name .']]';
		}
	}

	spl_autoload_register(__NAMESPACE__ .'\Foo::test'); // As of PHP 5.3.0

	new InexistentClass;
	
//--------------------------------------------------

	class TestAutoload {
		public static function register(){
			spl_autoload_register(function($class){
				$file = str_replace('\\', DIRECTORY_SEPARATOR, $class).'.php';

				if(file_exists($file)){
					require $file;
					return true;
				}

				return false;
			});
		}
	}

//--------------------------------------------------

	class TestAutoload2 {
		function __autoload($class_name){
			$invalidChars = array(
				'.', '\\', '/', ':', '*', '?', '"', '<', '>', "'", '|'
			);

			$class_name = str_replace($invalidChars, '', $class_name);

			$extension_prefix = '.class.php';

			if(!@include_once $class_name . $extension_prefix){
				$path = 'lib'; // In this dir the function will search

				foreach(new DirectoryIterator($path) as $file){
					if($file->isDot()){
						continue;
					}

					if($file->isDir()){
						$file = $path . DIRECTORY_SEPARATOR . $file->getFilename() . DIRECTORY_SEPARATOR . $class_name . $extension_prefix;    

						if(file_exists($file)){
							include_once $file;
						}
					}
				}    
			}

			if(!class_exists($class_name, false) || !interface_exists($class_name, false)){
				// return || Some tracking error task..
			}
		}
	}

//-------------------------------------------

	class TestAutoload3 {
		function __autoload($className)  {
			var_dump($className);
			$file = str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
			var_dump($file);

			var_dump(file_exists($file));
			if(!file_exists($file)){
				return false;
			} else {
				require $file;
				return true;
			}
		}
	}

//--------------------------------

	class autoloader {
		public static $loader;

		public static function init(){
			if(self::$loader == NULL)
				self::$loader = new self();

				return self::$loader;
		}

		public function __construct(){
			spl_autoload_register(array($this,'model'));
			spl_autoload_register(array($this,'helper'));
			spl_autoload_register(array($this,'controller'));
			spl_autoload_register(array($this,'library'));
		}

		public function library($class){
			set_include_path(get_include_path().PATH_SEPARATOR.'/lib/');
			spl_autoload_extensions('.library.php');
			spl_autoload($class);
		}

		public function controller($class){
			$class = preg_replace('/_controller$/ui','',$class);

			set_include_path(get_include_path().PATH_SEPARATOR.'/controller/');
			spl_autoload_extensions('.controller.php');
			spl_autoload($class);
		}

		public function model($class){
			$class = preg_replace('/_model$/ui','',$class);

			set_include_path(get_include_path().PATH_SEPARATOR.'/model/');
			spl_autoload_extensions('.model.php');
			spl_autoload($class);
		 }

		public function helper($class){
			$class = preg_replace('/_helper$/ui','',$class);

			set_include_path(get_include_path().PATH_SEPARATOR.'/helper/');
			spl_autoload_extensions('.helper.php');
			spl_autoload($class);
		}
	}

	//call
	autoloader::init();

//-----------------------------

	class Autoloader {
		public static function register(){
			spl_autoload_register(function ($class) {
				$file = str_replace('\\', DIRECTORY_SEPARATOR, $class).'.php';
				if(file_exists($file)){
					require $file;
					return true;
				}

				return false;
			});
		}
	}

	Autoloader::register();

//-----------------------------------------