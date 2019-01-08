<?php

namespace Home\Model;

use Core\Model;

//设置时区
date_default_timezone_set('PRC');

include_once "./Vendor/SendCode/extend/common/smsDemo.php";

class RegisterModel extends Model
{

    public function addUser($data)
    {
        $sql = "insert into cc_user(username,passwd,user_state) values(?,?,?)";
        return $this->exec($sql,$data);
    }
}

?>