<?php 

	//定义安全访问的常量
	define("ACCESS",true);
	// echo "这是项目的主入口文件!";
	//包含App.class.php
	require_once "Core/App.class.php";

	//使用类来调用静态方法run
	App::run();

 ?>