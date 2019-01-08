<?php
namespace Home\Controller;
use Core\HomeController;
use Home\Model\IndexModel;

class IndexController extends HomeController {
    public function index() {
        session_start();
        // $username = $_SESSION['username'];



        $IndexModel = new IndexModel;
        $arr = $IndexModel->Label();
        $arr1 = $IndexModel->isTop();
        unset($arr[0]);
        //        将标签显示到首页
        $this->assign("Label",$arr);
//        将置顶的文章显示到首页
        $this->assign("isTop",$arr1);

//        将用户的登陆信息保存到session传递到页面
//        $this->assign('username',$username);
        $this->display("index.html");
    }
}

?>