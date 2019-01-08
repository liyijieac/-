<?php 


	class Uploader {

		//增强版的path_info
		protected function path_info($filepath)   
		{   
		    $path_parts = array();   
		    $path_parts ['dirname'] = rtrim(substr($filepath, 0, strrpos($filepath, '/')),"/")."/";   
		    $path_parts ['basename'] = ltrim(substr($filepath, strrpos($filepath, '/')),"/");   
		    $path_parts ['extension'] = substr(strrchr($filepath, '.'), 1);   
		    $path_parts ['filename'] = ltrim(substr($path_parts ['basename'], 0, strrpos($path_parts ['basename'], '.')),"/");   
		    return $path_parts;
		}

		/*
		  返回值：boolean  true 成功，false 失败
		  参数：$file 文件上传对象 $file = $_FILES['表单的name值'];
		        $imgArr  文件上传的路径
				$suffixArr  文件上传时允许的后缀
				$type 文件名的类型
				      1   文件名是uuid格式的
				      2   时间戳
				      3   原来的文件名
		 */
		function uploadImageAndWater($file,$imgArr,$suffixArr=['jpg','jpeg','gif','png','bmp'],$type){
			//1、判断文件是否上传成功 如果上传成功，error = 0
			if($file['error']==0){
			//2、判断你的文件后缀是否合法
			 $pathArr = $this->path_info($file['name']);
			 $suffix = $pathArr['extension'];
			 //in_array() 可以判断元素是否在数组中出现
			 //如果出现返回值为true 否则 false
			 if(in_array($suffix,$suffixArr)){
			 	//判断产生文件名的类型
			 	if($type ==1 ){
			 		$fileName = uniqid().".".$suffix;  //asfadsfasfa.jpg
			 	}else if($type == 2){
			 		$fileName = time().".".$suffix;           //12734234234.jpg
			 	}else{
			 		$f = iconv("utf-8","gbk",$pathArr['filename']);
			 		$fileName = $f.".".$suffix;         //xxxxx.jpg
			 	}
			 	// $dir = "./upload/"
			 	//得到当前的月份：
		   		$monthDir = date("m")."/";  //     03/
		   		//得到每天的
		   		$dayDir = date("Ymd")."/";  //    20180316/

		   		$dir = $imgArr['dir'].$monthDir;      //     upload/03/

		      	//1) 判断当前upload 文件夹有没有月份（03）
		   		if(file_exists($dir)){
		      	// 如果有，
		      	//  1）判断有没有  $dir.$dayDir --> upload/03/20180316/
		      		if(!file_exists($dir.$dayDir)){
		      			mkdir($dir.$dayDir,0777,true);
		      		}
		      	    // 如果有，把保存下路径           
		      	    $dir = $dir.$dayDir;      //   ./upload/03/20180314/
		      	}else {

		        	//直接创建 ./upload/03/20180316/ 对应的文件夹
		        	$dir = $dir.$dayDir;
		        	mkdir($dir,0777,true);
				}

				//var_dump($dir); // $dir = "./upload/03/20180316/";
			 	
			 	if(move_uploaded_file($file['tmp_name'], $dir.$fileName)){

		              	//定义一个数组，保存两个路径
		              	//upload/03/20180329/sadfasdfasdf.jpg
						$img['image'] = $dir.$fileName;
						$img['water'] = $imgArr['water'];

						$imgObj = new Image;
						$re = $imgObj -> saveWaterImage($img,$img['image'],"bottomRight");

			 		 return $re;

			 	}else{
			 		return false;
			 	}


			 }
			    
			}
		}


	}


 ?>