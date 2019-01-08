<?php
	namespace Admin\Controller;
	use \Core\AdminController;
	class LgyController extends AdminController 
	{
		public function index(){
			$this->display(APP.PLAT."/View/51CTO.html");
		}
	}



?>