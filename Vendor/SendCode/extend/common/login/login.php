<?php
use Aliyun\Api\Sms\Request\V20170525\QueryInterSmsIsoInfoRequest;

include_once "../smsDemo.php";
//设置时区
date_default_timezone_set('PRC');

//echo $_POST['click'];
//判断前端点击后发送验证码
if(isset($_POST['cass'])){
//    echo 1;
//    echo $_POST['click'];
//    发送验证码
    $sendCode = SmsDemo::sendSms($_POST['phone']);
}
//查询验证码
$response = SmsDemo::querySendDetails($_POST['phone']);

//var_dump($response);
//echo "查询短信发送情况(querySendDetails)接口返回的结果:\n";
$username = $_POST['username'];
//echo $username;
$password = $_POST['password'];
$vali = $_POST['validate'];
//拿到验证码
$validate = mb_substr($response->SmsSendDetailDTOs->SmsSendDetailDTO[0]->Content,21,4);
if($vali==$validate){
    //TODO 实现登陆业务
//    echo $_POST['username'];
    echo 1;
}
//if($validate== $_POST['validate']){

//}else {
//    $arr = array("msg"=>"登陆失败","code"=>"false","statu"=>401);
//}




?>