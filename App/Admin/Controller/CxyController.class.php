<?php

	namespace Admin\Controller;
	use \Core\AdminController;
	class CxyController extends AdminController 
	{
		public function index(){
			$this->display(APP.PLAT."/View/oschina.html");
		}
	}



?>