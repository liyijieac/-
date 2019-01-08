<?php
	namespace Admin\Controller;
	use \Core\AdminController;
	class LzlController extends AdminController 
	{
		public function index(){
			$this->display(APP.PLAT."/View/juejin.html");
		}
	}



?>