<?php


    namespace Home\Model;

    use Core\Model;

    class ContentModel extends Model {

    	public function contenta($type) {

    		$sql = "select * from cc_poly where id = 1665";

            $data[":type"]= $type;
             
    		return $this->getAll($sql,$data);

    	}


    }

?>