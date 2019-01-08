<?php
namespace Home\Model;

use Core\Model;

class ListModel extends Model {

	public function listt($type) {
		$sql = "select * from cc_poly where biaoqian =:type limit 15";
        $data[":type"]= $type;
         
		return $this->getAll($sql,$data);

	}

	public function doList($k)
    {

        $likeStr = "";
        if($k != "") {
            $likeStr .= " and  (name like '%{$k}%' or  film_typename like '%{$k}%')";
        }
//        拿到配置文件  分页每页显示大小
        global $config;
        $pageSize = $config['pageSize']['admin_pagesize'];




//        查询总记录数
        $sql = "select count(*) from cc_poly";
//        getFirstFeild方法只返回一条数据
        $totalCount = $this->getFirstFeild($sql,$data=[]);

//        实例化分页类  将总记录数和每页显示大小；传递进函数
//        类的返回值是数组
        $pageArr = \Page::makePage($totalCount,$pageSize);
//        使用分页类  $pageArr['limit']; 显示为limit a,b
        $sql = "select * from cc_poly ".  $pageArr['limit'];
//        查询数据
        $dataArr['data'] = $this->getAll($sql,$data=[]);
//        直接将返回值中的 $pageArr['pageStr'] 保存到数组  然后返回给Controller
        $dataArr['pageStr'] = $pageArr['pageStr'];
        return $dataArr;
    }

}

?>