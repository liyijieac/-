<?php

namespace Home\Model;

use Core\Model;

class IndexModel extends Model
{
    public function Label()
    {
        $sql = "select biaoqian from cc_poly GROUP BY biaoqian limit 20";
        return $this->getAll($sql, $data = []);
    }

    public function isTop()
    {
        $sql = "select * from cc_poly where is_top=1 limit 3";
        return $this->getAll($sql,$data=[]);
    }
}

?>