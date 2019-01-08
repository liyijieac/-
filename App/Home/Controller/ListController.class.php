<?php
namespace Home\Controller;
use Core\HomeController;
use Home\Model\ListModel;
class ListController extends HomeController {

 function listt() {

 	    $k =isset($_POST['k']) ? $_POST['k'] : "";
        $filmModle = new ListModel;
        $arr1 = $filmModle->doList($k);

//            var_dump($arr);
        $this->assign('dataArr',$arr1);
  
    
 	$type = $_GET['type'];
  	$listModel = new ListModel;
 	$arr = $listModel->listt($type);
   // var_dump($arr);
   $this->assign("Label",$arr);
   $this->display('list.html');

  
 }





	
    
}

?>