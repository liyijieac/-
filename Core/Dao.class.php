<?php 


	//设置命名空间
	namespace Core;
	use \PDO;
	use \PDOException;
	//主要作用：用来产生一个数据库操作对象，连接数据库等
	/*
    *  单例类
       三私一共
       私：
       1）私有静态属性
       2）私有构造方法,防止无限制的new对象
       3）私有克隆方法,防止无限制clone对象
       公
       1）对外提供一个获取属性的方法
	*/
	class Dao{

		private static $dao = null;
		public static $error="";
		//定义一个属性
		private $pdo;
		private function __construct(){

			//获取存储配置信息的数组
			global $config;
			//从配置文件中获取数据库的配置信息
			$type = $config['type'];  //mysql
			$host = $config[$type]['host'];
			$port = $config[$type]['port'];
			$user = $config[$type]['user'];
			$pass = $config[$type]['pass'];
			$dbname = $config[$type]['dbname'];
			$charset = $config[$type]['charset'];
			try {
				//实例化数据库对象
				$this->pdo = new PDO("{$type}:host={$host};port={$port};charset={$charset};dbname={$dbname}",$user,$pass);
				//设置PDO错误信息显示
				$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			}catch(PDOException $e){

				//保存错误信息到静态属性中
				self::$error = $e->getMessage();
			}


		}

		private function __clone(){}
		//获取单例对象的静态方法
		public static function getInstance(){

			//判断对象是否是第一次创建，如果是第一次，new 对象
			if(!self::$dao instanceof self){
				//         产生一个对象，并且放到 $dao对象中
				self::$dao = new self;
			}

			//                       如果不是第一次，直接返回静态属性
			return self::$dao;
		}




		//定义方法，查询所有数据
		function db_getAll($sql,$data){

			try{
				//预处理
				$stmt = $this->pdo->prepare($sql);
				//如果预处理成功，则绑定数据
				if($stmt->execute($data)){
//
					return $stmt->fetchAll(PDO::FETCH_ASSOC);
				}

			}catch(PDOException $e){
				//保存错误信息
				self::$error = $e->getMessage();
				return false;
			}

		}

		//insert\update\delete 
        //insert\update\delete
        function db_exec($sql,$data){

            try{
                //预处理
                $stmt = $this->pdo->prepare($sql);
                //如果预处理成功，则绑定数据
                return $stmt->execute($data);

            }catch(PDOException $e){
                //保存错误信息
                self::$error = $e->getMessage();
                return false;
            }


        }
		//返回插入成功后的记录的id
		function db_lastInsertId(){

			return $this->pdo->lastInsertId();
		}

		//获取一行
		function db_getRow($sql,$data){
			try{
				//预处理
				$stmt = $this->pdo->prepare($sql);
				//如果预处理成功，则绑定数据
				if($stmt->execute($data)){
					return $stmt->fetch(PDO::FETCH_ASSOC);
				}

			}catch(PDOException $e){
				//保存错误信息
				self::$error = $e->getMessage();
				return false;
			}

		}

		//获取一列
		function db_getFirstField($sql,$data){

			try{
				//预处理
				$stmt = $this->pdo->prepare($sql);
				//如果预处理成功，则绑定数据
				if($stmt->execute($data)){
					$arr = $stmt->fetch(PDO::FETCH_NUM);
					return $arr[0];
				}

			}catch(PDOException $e){
				//保存错误信息
				self::$error = $e->getMessage();
				return false;
			}

		}



	}



 ?>