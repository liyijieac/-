<?php
namespace Home\Controller;
use Core\HomeController;
use Home\Model\RegisterModel;
include_once "./Vendor/SendCode/extend/common/smsDemo.php";
class RegisterController extends HomeController {

    public function index() {
        $this->display('Register.html');
    }
    public function sendCode () {

        if (isset($_POST['cass'])) {
//    echo 1;
//    echo $_POST['click'];
//    发送验证码
            $sendCode = \SmsDemo::sendSms($_POST['phone']);
        }
    }




    public function register(){
        $response = \SmsDemo::querySendDetails($_POST['phone']);

//var_dump($response);
//echo "查询短信发送情况(querySendDetails)接口返回的结果:\n";

        $vali = $_POST['validate'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $data[":username"] = $username;
        $data[':password'] = $password;
        $data[':user_state'] = 0;
//拿到验证码
        $validate = mb_substr($response->SmsSendDetailDTOs->SmsSendDetailDTO[0]->Content, 21, 4);
        if ($vali == $validate) {
                $RegisterModel = new RegisterModel;
                $result = $RegisterModel->addUser($data);
                if($result){
                    
                        $arr = array("msg"=>"注册成功","state"=>true);

                }else {
                        $arr = array("msg"=>"注册失败","state"=>false);
//
                }
        }else {
               $arr=array("msg"=>"验证码错误","state"=>false) ;
//
        }
        echo json_encode($arr);
    }
}

?>