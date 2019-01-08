<?php

namespace Home\Model;

use Core\Model;

class LoginModel extends Model
{
    public function Login($username)
    {
        $sql = "select * from cc_user where username =:userr";
        $data[':userr'] = $username;
            return $this->getRow($sql,$data);
    }
}

?>