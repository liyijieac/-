<?php 

	//return一个 存有配合信息的数组

    return array(
	//    key    value
		'type'=>"mysql",
		'mysql'=>array(
//            192.168.13.69
				'host'=>'192.168.13.69',    //数据服务器主机名（IP、域名）,localhost 本机的特殊的域名
				'port'=>3306,           //Web端口默认为 80  MySQL服务器的默认端口 3306
				'user'=>"root",         //数据库用户名
				'pass'=>'',          //数据密码
				'dbname'=>'polycodedb',  //数据库名称
				'charset'=>'utf8',      //数据库的默认编码
				'prefix'=>'cc_'        //数据表前缀
		),
		'upload'=>array(
				//设置文件上传允许的后缀
				'allow_suffix'=>['jpg','jpeg','gif','png','bmp'],
				'upload_dir'=>UPLOAD,
				'water_img'=>PUBLICDIR.'logo.png'
		),
		'pageSize'=>array(
				'admin_pagesize'=>20,  //前天的分页大小
				'home_pagesize'=>18    //后台分页大小
		)
	);
	
 ?>