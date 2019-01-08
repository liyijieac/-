<?php
	namespace Admin\Controller;
	use \Core\AdminController;
	class XrcController extends AdminController 
	{
		public function index(){
			$this->display(APP.PLAT."/View/toutiao.html");
		}
	}



?>