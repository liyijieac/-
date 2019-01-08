<?php 

	namespace Core;

	//Model类 前后台的公共Model的类
	//处理例如：增删改查功能
	class Model {


		//定义DAO类的属性
		private $dao;
		//增加构造方法
		public function __construct(){
			//给$dao初始化
			$this->dao = Dao::getInstance();

		}

		//公共的查询的方法
		protected function getAll($sql,$data){

			return $this->dao->db_getAll($sql,$data);
		}

		/*
        * 查询一行数据
		*/
		protected function getRow($sql,$data){
			//执行查询
			return $this->dao->db_getRow($sql,$data);
			//返回结果
		}


		/*
        * 查询一行数据
		*/
		protected function exec($sql,$data){

			//执行查询
			return $this->dao->db_exec($sql,$data);

			//返回结果
		}


		/*
		* 定义静态方法，拼接表名
		*/
		public function getTableName(){

			//$config;
			global $config;
			//拼接表名
			return $config['mysql']['prefix'].$this->table;

		}

		/*
		 * 增加获取一列的方法
		 */
		public function getFirstFeild($sql,$data){

			//获取第一列
			return $this->dao->db_getFirstField($sql,$data);

		}

		/*
		 * 
		 */


		
	}


 ?>