<?php


	namespace Home\Controller;

	use Core\HomeController;

	use Home\Model\ContentModel;

	class ContentController extends HomeController {

	 function contentas() {

	        $contentModel = new ContentModel;
	        
	        $arr = $contentModel->contenta();

	        var_dump($arr);
	        // $this->assign('dataArr',$arr1);
	  
		   $this->assign("Label",$arr);
		   $this->display('content.html');

	  
	 }





		
	    
	}

?>