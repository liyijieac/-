<?php 

	//定义命名空间
	namespace Core;

	class BaseController {

		var $smarty;

		public function __construct(){

			//构造方法中加载增加smarty模板配置
			//引入 Smarty 
			include_once VENDOR."Smarty/Smarty.class.php";

			//实例化Smarty对象
			$this->smarty = new \Smarty;
			
			//配置Smarty
			//1) 模板路径
			$this->smarty->template_dir = APP.PLAT."/View/".CONTROLLER."/";
			//2）模板编译路径
			$this->smarty->compile_dir = APP.PLAT."/View_c/";
			//3）是否缓存
			$this->smarty->caching = false;
			//4）缓存路径
			$this->smarty->cache_dir = APP.PLAT."/cache/";

			//设置开始和结束标识符
			$this->smarty->left_delimiter = "<{";
			$this->smarty->right_delimiter = "}>";

			// var_dump($this->smarty);
		}

		//定义一个 操作成功和操作失败的方法
		/*
		 * $p 表示平台
		 * $c 表示控制器
		 * $a 方法
		 * $msg 提示信息
		 * $n 秒数
		*/

        //实现更新操作
        public function successz()
        {
            include_once "APP/Admin/View/Xft/edit.html";
//            $this->display('edit.html');
            exit;
        }

        public function errorr()
        {
            include_once "APP/Admin/View/Xft/error.html";
//            $this->display('error.html');
            exit;
        }
//		public function success($p,$c,$a,$msg,$n=3)
//		{
//			// //跳转  index.php?p=xx&c=xxx&a=xxxx
//			$url = "index.php?p={$p}&c={$c}&a={$a}";
//			// //      n秒以后跳转
//			// header("refresh:{$n};url={$url}");
//			// //输出信息
//			// echo $msg."<br>{$n}秒后自动跳转...<a href='{$url}'>立即跳转</a>";
//			//程序不向下执行
//
//			//success.html页面
//			include_once APP.PLAT."/View/Public/success.html";
//
//			exit;
//		}
//
//		//定义一个 操作成功和操作失败的方法
//		/*
//		 * $p 表示平台
//		 * $c 表示控制器
//		 * $a 方法
//		 * $msg 提示信息
//		 * $n 秒数
//		*/
//		public function error($p,$c,$a,$msg,$n=3)
//		{
//			// //跳转  index.php?p=xx&c=xxx&a=xxxx
//			$url = "index.php?p={$p}&c={$c}&a={$a}";
//			// //      n秒以后跳转
//			// header("refresh:{$n};url={$url}");
//			// //输出信息
//			// echo $msg."<br>{$n}秒后自动跳转...<a href='{$url}'>立即跳转</a>";
//			//程序不向下执行
//
//			//success.html页面
//			include_once APP.PLAT."/View/Public/error.html";
//
//			exit;
//		}

		/*
		 * 自定义assign方法
		 */

		public function assign($name,$value){

			return $this->smarty->assign($name,$value);
		}

		/*
		 * 自定义display方法
		 */
		public function display($name){

			return $this->smarty->display($name);
		}


	}



 ?>