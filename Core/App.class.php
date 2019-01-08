<?php 

	//z这个类是框架运行的基础文件
	//1）检测是否统一了入口 （是否通过index来进行访问）
	if(!defined("ACCESS")){
		//跳转到入口页面
		header("location:../index.php");
	}
	//2）初始化操作（配置、网页的设置....）
	
	class App {

		//增一个静态方法，run
		/*
		 * run方法是一个静态方法，用来初始化数据
		 */
		public static function run(){
			//输出类名和方法名
			// echo __CLASS__."--->".__METHOD__."<br>";

			//初始化网页编码
			self::initCharset();

			//初始化目录的常量
			self::initDir();

			//初始化错误信息的设置
			self::initError();

			//初始配置文件
			self::initConfig();

			//初始化url地址
			self::initURL();

			//自动加载文件
			self::initAutoload();



			//初始化分发方法
			self::initDispatch();


		}

		/*
		 *  静态方法，用于初始化网页的编码
		 */
		private static function initCharset(){
			//使用header()
			header("Content-type:text/html;charset=UTF-8");
		}

		/*
		 *  initDir() 用来初始化 路径的常量
		 */
		private static function initDir(){

			//__DIR__ 文件所在的目录的绝对路径
			//C:\www\czxyframe\Core
			//
			//__FILE__ 当前文件所在位置的绝对路径
			//C:\www\czxyframe\Core\App.class.php
			
			$loc = strrpos(__DIR__,"\\");
			$dir = substr(__DIR__,0,$loc+1);
			//目录的字符串
			$str = str_replace("\\", "/", $dir);
			// ROOT 根目录的绝对路径
			define("ROOT",$str);
			define("APP",       ROOT."App/");  //C:/www/czxyframe/App
			define("CONFIG",    ROOT."Config/");
			define("CORE",      ROOT."Core/");
			define("PUBLICDIR", ROOT."Public/");
			define("UPLOAD",    ROOT."Upload/");
			define("VENDOR",    ROOT."Vendor/");

		}


		/*
		 *  设置错误信息的显示方式和显示级别
		 */
		private static function initError(){

			//@ini_set("名","值") 设置php的配置信息，特点：1）即时生效 2）当前脚本有效

			//设置错误显示的级别 display_errors 设置为 1(on)
			@ini_set("display_errors",1);
			//设置错误的显示方式
			@ini_set("error_reporting","E_ALL");


		}


		/*
		 * 接收从入口传递过来的参数，并且初始化
		 * 初始化URL地址
		 * index.php?p=前台还是后台c=控制器名&a=方法名
		 * p的值：  Home 前台   Admin 后台
		 *
		 * index.php?p=home&c=user&a=getAllUser
		 */
		private static function initURL(){

			//接收用户参数
			$p = isset($_REQUEST['p']) ? $_REQUEST['p'] : "Admin";
			$c = isset($_REQUEST['c']) ? $_REQUEST['c'] : "xft";  //IndexControler.class.php
			$a = isset($_REQUEST['a']) ? $_REQUEST['a'] : "index";

			//把平台 p 和 控制器 a 的值的首字母大写
			$p = ucfirst(strtolower($p));
			$c = ucfirst(strtolower($c));

			//接下来，把$p \ $c \$a 定义成常量
			define("PLAT",$p);   //定义常量 PLAT 保存 前后台
			define("CONTROLLER",$c);
			define("ACTION",$a);


			// var_dump(PLAT."--".CONTROLLER."---".ACTION);
		}

		/*
		 * 初始化请求分发机制
		 *
		 *     根据访问统一入口的时候，传递的控制的名称和方法名，去调用具体的控制和方法，这是一种请求分发。
		 */
		private static function initDispatch(){

			// \Home\Controller\IndexController

			//定义变量，保存Controller类名
			$cName = CONTROLLER."Controller";   //IndexController
			$a = ACTION;
			// //定义路径                                  UserController.class.php
			// $controller_path = APP.PLAT."/Controller/".$cName.".class.php";
			//判断路径是否存
			// if(file_exists($controller_path)){
			// 	//   如果存在，引入文件
			// 	require_once $controller_path;

				$cName = "\\".PLAT."\\Controller\\".$cName;
				//   实例化对象
				$controllerObj = new $cName;
				//   调用方法
				$controllerObj ->$a();

			// }else {
			// //如果不存在，给一个错误提示，然后代码停止
			// 	die("系统错误，您需要的控制器文件:{$controller_path},不存在!<br>");
			// }   

		}


		/*
		 * 定义加载配置的的初始化方法
		 */
		private static function initConfig(){

			//定义一个全局的变量
			global $config;
			//包含文件，直接报文件的数组赋值给变量 $config
			$config = include_once CONFIG."Config.php";
		}

		/*
		 * 初始化自动加载方法
		 */
		private static function initAutoload(){

			//自动加载控制器类
			spl_autoload_register(array('self','loadController'));

			//自动加载模型类
			spl_autoload_register(array('self','loadModel'));

			//自动加载核心类
			spl_autoload_register(array('self','loadCoreClass'));

			//自动加载扩展类
			spl_autoload_register(array('self','loadVendorClass'));

		}



		/*
		 *  加载控制器类 App/平台/Controller/
		 */
		private static function loadController($class_name){

			$class_name = basename($class_name);
			//模型类的文件路径
			$path = APP.PLAT."/Controller/".$class_name.".class.php";

			//判断文件是否存在
			if(file_exists($path)){
				require_once $path;
			}


		}

		/*
		 * 加载模型类  App/Model
		 */
		private static function loadModel($class_name){

			// var_dump($class_name);  // Model\UserModel 
			//此时应该去 /App/Model/UserModel.class.php
			$class_name = basename($class_name);

			//模型类的文件路径
			$path = APP."Model/".$class_name.".class.php";

			//判断文件是否存在
			if(file_exists($path)){
				// require_once "/App/Model/UserModel.class.php";
				require_once $path;
			}

		}

		/*
		 * 加载核心类文件  /Core
		 */
		private static function loadCoreClass($class_name){

			$class_name = basename($class_name);
			//模型类的文件路径
			$path = CORE.$class_name.".class.php";

			//判断文件是否存在
			if(file_exists($path)){
				require_once $path;
			}

		}

		/*
		 * 加载扩展类  /Vendor 
		 */
		private static function loadVendorClass($class_name){

			$class_name = basename($class_name);
			//模型类的文件路径
			$path = VENDOR.$class_name.".class.php";

			//判断文件是否存在
			if(file_exists($path)){
				require_once $path;
			}


		}

	}


 ?>