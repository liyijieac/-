<?php
namespace Home\Controller;
use Core\HomeController;
use Home\Model\LoginModel;

class LoginController extends HomeController {

    public function index() {
        $this->display('login.html');
    }
    public function Login(){
        session_start();

        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $data[':userr']  = $username;
//        $data[':password']  = $password;
        $LoginModel = new LoginModel;
        $arr = $LoginModel->Login($username);

        if(!$arr['username'] == $username) {
//            $this->errorr();
            echo "<script>alert('用户名不正确');location.href='index.php?p=home&c=login&a=index'</script>";
        }
        if($arr['passwd'] != $password ) {
            echo "<script>alert('密码不正确');location.href='index.php?p=home&c=login&a=index'</script>";
        }
        //        将用户名存储进session

        $_SESSION['username'] = $username;
//        $this->successz();
        $this->display(APP.PLAT."/View/index/index.html");
    }
}

?>