<?php
/**
 * Created by PhpStorm.
 * User: ThinkPad
 * Date: 2018/4/21
 * Time: 17:55
 */

namespace Model;

use \Core\Model;

class XftModel extends Model
{
    function getUserInfoByName($username)
    {

        //保存用户名到数组中
        $data[':username'] = $username;
        //定义sql
        $sql = "select * from cc_user where username =:username";

        //调用底层方法，返回一行数据
        return $this->getRow($sql, $data);

    }




//    插入规则表
    public function insertInfo($data)
    {
        $sql = "insert into cc_rules(rules_name,rules_url,type_id,type,start_page,end_page,content,pid,path) values(:urlName,:url,:filmtype,:rulestype,:start,:end,:content,:pid,:path)";
        return $this->exec($sql, $data);
    }


//    根据id先将当前要修改的拿出来默认显示进去

    public function showUpdate($id)
    {
        $sql = "select * from cc_rules where id = :id";
        $data[':id'] = $id;
        return $this->getRow($sql, $data);
    }


//    实现删除功能

    public function delete($id) {
        $sql = "delete from cc_rules where id = :id";
        $data[':id']  = $id;
        return $this->exec($sql,$data);
    }


//    查询出所有的规则
    public function getParent()
    {
        $sql = "select * from cc_rules";
        return $this->getAll($sql, $data = []);
    }



//    查询所有的采集规则
    public function showList()
    {
        $sql = "select * from cc_rules";
        return $this->getAll($sql, $data = []);
    }

    //查询出所有的父分类
    public function getInfo()
    {
        $sql = "select *,concat(path,'-',id) dpath  from cc_poly_type order by dpath";
        return $this->getAll($sql, $data = []);
    }




    public function update($data) {
        $sql = "update cc_rules set rules_name=:rules_name,rules_url=:rulesurl,start_page:start,end_page:end,content=:contentt";
        $data[":data"] = $data;
        return $this->exec($sql,$data);
    }


    public function Getone($id ){
        $sql = "select * from cc_rules where id = :id and type_id = 2";
        $data[':id'] = $id;
        return $this->getRow($sql,$data);
    }



//    判断hash是否存在
    function url_exists($hashurl){

        $sql = "select id from cc_poly_url where url_hash=:hashurl";
        //定义数组，保存条件参数
        $data[':hashurl'] = $hashurl;

        //判断url是否存
        if($this->getFirstFeild($sql,$data)){
            //表示查询到了，url存在
            return true;
        }

        //url不存在
        return false;
    }

//    将url添加到数据库
    function addInfo($data){

        $sql = "insert into cc_poly_url(id,url,url_hash,page,add_time,is_download,type_id,biaoqian) values(null,:url,:hashurl,:page,:addtime,:is_down,:filmtypeid,:biaoqian)";

        //           调用父类 Model方法
        return $this->exec($sql,$data);


}
//    根据id查询出要采集的内容规则
    function getRulesContent($id) {
        $sql = "select * from cc_rules where id = :id";
        $data[':id'] = $id;
        return $this->getRow($sql,$data);
    }

//    查询出所有和和type_id对应的url

    function findUrlByFilmtypeid($type_id){

        $sql = "select * from cc_poly_url where type_id =:type_id and is_download=0";
        //保存参数到数组
        $data[':type_id'] = $type_id;

        return $this->getAll($sql,$data);

    }


    function addContent($data) {
        $sql = "insert into cc_poly(name,add_time,content,type_id,poly_img,author) values(?,now(),?,?,?,?,?)";
        return $this->exec($sql,$data);
    }



    function updateDownState($id) {

        $sql = "update cc_poly_url set is_download = 1 where id=:id";

        $data[':urlid'] = $id;

        return $this->exec($sql,$data);
    }

    function findRowById($id){
        $sql = "select * from cc_rules where id= :id";
        //保存参数到数组中
        $data[':id'] = $id;
        return $this->getRow($sql,$data);
    }

    /*
         * 定义方法，保存新的分类
         */
    function addInfo2($data){
        $sql = "insert into cc_poly (title,author,add_time,content,poly_img,type_id,biaoqian,address) values(?,?,?,?,?,?,?,?)";
        return $this->exec($sql,$data);
    }




}