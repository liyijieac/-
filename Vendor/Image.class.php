<?php 

	class Image {

		private $imgObj; //保存图片资源
		private $ext;    //保存文件的后缀
		//生成图片的水印
		/*
		 * 参数：
		 * 		1、$imgArr  图片的数组
		 * 		$imgArr['image']  表示背景图（原图）
		 *      $imgArr['water']  表示水印图
		 *
		 * 	    2、$loc     方位词，
		 * 	     -- topLeft   左上角
		 * 	     -- topCenter 上中
		 * 	     -- topRight  右上角
		 *
		 *       -- centerLeft 中左
		 *       -- centerCenter 水平居中，垂直居中
		 *       -- centerRight  中右
		 *
		 * 		 -- bottomLeft  下左
		 * 		 -- bottomCenter 下中
		 * 		 -- bottomRight  下右（右下角）也是默认值
		 */
		public  function waterImage($imgArr,$loc='bottomRight'){
			//设置文件的类型
			header("Content-Type:image/png");

			//生成水印图片
			// self::copyImage($imgArr);
			$this->copyImage($imgArr,$loc);

			//输出显示
			ob_clean();
			imagepng($this->imgObj);

		}


		// 合成两张图片
		private function copyImage($imgArr,$loc){
			//设置水印图片的透明度
			//al的值 0-100     0完全透明     100 不透明
			$al = 50;

			//能不能合成成功？
			//获取图片的宽度和高度
			// 思路：定义一个方法，在方法中，获取图片的宽度、高度、后缀，这个方法返回一个数组
			$imgInfoArr = self::getImageInfo($imgArr['image']);
			$waterInfoArr = self::getImageInfo($imgArr['water']);

			//检查图片是否能够合成成功
			if(!self::checkImg($imgInfoArr,$waterInfoArr)){
				throw new Exception("copyImage:水印图片尺寸大于原图", 8888);
			}

			//定义字符串，用于创建图片资源
			$method = "imagecreatefrom".$imgInfoArr['ext'];
			//创建图片对象
			$imgObj = $method($imgArr['image']);


			$method = "imagecreatefrom".$waterInfoArr['ext'];
			$waterImg = $method($imgArr['water']);

			//计算位置
			$locArr = self::getPosition($imgInfoArr,$waterInfoArr,$loc);

			//如果图片的后缀是 jpeg 使用 imagecopymerge()
			if($waterInfoArr['ext']=="jpeg" || $waterInfoArr['ext']=="jpg") {
			
			//如果图片的后缀是png的时候，最好用 imagecopy 其他  imagecopymerge
				imagecopymerge($imgObj,$waterImg,$locArr['x'],$locArr['y'],0,0,$waterInfoArr['width'],$waterInfoArr['height'],$al);
			}else {
				imagecopy($imgObj,$waterImg,$locArr['x'],$locArr['y'],0,0,$waterInfoArr['width'],$waterInfoArr['height']);
			}
			//把image 图片资源保存到属性
			$this->imgObj = $imgObj;
			$this->ext = $imgInfoArr['ext'];

		}

		/*
		 * $imgInfoArr    原图的宽度、高度、后缀
		 * $imgInfoArr    水印图片的宽度、高度、后缀
		 * $loc  方位词
		 * 	     -- topLeft   上左
		 * 	     -- topCenter 上中
		 * 	     -- topRight  上右
		 *
		 *       -- centerLeft   中左
		 *       -- centerCenter 水平居中，垂直居中
		 *       -- centerRight  中右
		 *
		 * 		 -- bottomLeft   下左
		 * 		 -- bottomCenter 下中
		 * 		 -- bottomRight  下右（右下角）也是默认值
		 *
		 *  
		 * 
		 */
		private static function getPosition($imgInfoArr,$waterInfoArr,$loc){
			$num = 10;

			switch ($loc) {
		 // * 	     -- topLeft   上左   $x = 10,$y=10  
			case "topLeft":
				$x = $num;
				$y = $num;
				break;

		 // * 	     -- topCenter 上中   $x = (原图宽 - 水印宽) /2;   $y = 10;
			 case "topCenter":
				$x = ($imgInfoArr['width']-$waterInfoArr['width'])/2;
				$y = $num;
				break;
		 // 
		 // * 	     -- topRight  上右   $x =  原图宽 - 水印宽 -10 ;  $y = 10
		 	case "topRight":
				$x = $imgInfoArr['width']-$waterInfoArr['width']-$num;
				$y = $num;
				break;
		 // *
		 // *       -- centerLeft   中左               $x = 10,  $y = (原图高 - 水印高)/2;
			 case "centerLeft":
				$x = $num;
				$y = ($imgInfoArr['height'] - $waterInfoArr['height'])/2;
				break;
		 // 
		 // *       -- centerCenter 水平居中，垂直居中 $x =  (原图宽 - 水印宽) /2;  $y  = (原图高 - 水印高)/2;
			 case "centerCenter":
				$x = ($imgInfoArr['width']-$waterInfoArr['width'])/2;
				$y = ($imgInfoArr['height'] - $waterInfoArr['height'])/2;
				break;
		 // 
		 // *       -- centerRight  中右               $x = 原图宽 - 水印宽 -10 ;   $y  = (原图高 - 水印高)/2;
			 case "centerRight":
				$x = $imgInfoArr['width']-$waterInfoArr['width']-$num;
				$y = ($imgInfoArr['height'] - $waterInfoArr['height'])/2;
				break;
		 // *
		 // * 		 -- bottomLeft   下左 $x = 10;                                          $y = 原图高-水印高；
			case "bottomLeft":
				$x = $num;
				$y = $imgInfoArr['height'] - $waterInfoArr['height'] -$num;
				break;
		 // * 		 -- bottomCenter 下中 $x = (原图宽 - 水印宽) /2;                        $y = 原图高-水印高；
		 	case "bottomCenter":
				$x = ($imgInfoArr['width']-$waterInfoArr['width'])/2;
				$y = $imgInfoArr['height'] - $waterInfoArr['height'] - $num;
				break;
		 // * 		 -- bottomRight  下右（右下角）也是默认值    $x = 原图宽 - 水印宽;      $y = 原图高-水印高；
			 case "bottomRight":
				$x = $imgInfoArr['width']-$waterInfoArr['width']-$num;
				$y = $imgInfoArr['height'] - $waterInfoArr['height'] - $num;
				break;
			}

			$arr['x'] = $x;
			$arr['y'] = $y;

			return $arr;
		}

		/*
		 *  参数：
		 *  $imgInfoArr 
		 *
		 *       $imgInfoArr['width']   原图的宽度
		 *       $imgInfoArr['height']  原图的高度
		 *       $imgInfoArr['ext']     原图的后缀
		 *
		 *  $waterInfoArr 
		 *
		 *       $waterInfoArr['width']   水印图的宽度
		 *       $waterInfoArr['height']  水印图的高度
		 *       $waterInfoArr['ext']     水印图的后缀
         *
		 */
		private static function checkImg($imgInfoArr,$waterInfoArr){

			//判断是否能够合成
			// 如果 水印图片的高度 > 原图的高度  || 水印图片的宽度 > 原图的宽度
			// 
			if($waterInfoArr['width']>$imgInfoArr['width'] || $waterInfoArr['height']>$imgInfoArr['height']) {

				return false;
			}

			return true;

		}

		/*
		 *  参数： 要获取的图片的路径
		 */
		private static function getImageInfo($imgPath){

			$arr = array();
			//1、长度
			$info = getimagesize($imgPath);
			$arr['width'] = $info[0];
			//2、宽度
			$arr['height'] = $info[1];
			//3、后缀              $info['mime'] = "image/gif"
			// 获取 / 位置   
			$loc = strrpos( $info['mime'],"/");
			//
			$arr['ext'] = substr($info['mime'],$loc+1);

			return $arr;
		}

		/*
		 * $dirPath  水印图片保存的路径
		 */
		public function saveWaterImage($imgArr,$dirPath,$loc='bottomRight'){

			//合成图片
			$this->copyImage($imgArr,$loc);
			$method = "image{$this->ext}";

			if(is_dir($dirPath)){

				//如果图片的后缀是.jpeg 的，我改为 .jpg
				if($this->ext =='jpeg'){

					$fileName = time().".jpg";
				}else {
					//拼接文件名
					$fileName = time().".".$this->ext;
				}
				
				//保存图片
				if($method($this->imgObj,$dirPath.$fileName)){
					//如果保存成功，返回文件的名称
					return $fileName;
				}

			}else {

				if($method($this->imgObj,$dirPath)){
					//如果保存成功，返回文件的名称
					return $dirPath;
				}

			}

			
			return false;

		}


		/*生成图片的缩略图
		 *参数：
		 *    $img           原图
		 *    $maxWidth      最大允许的宽度
		 *    $maxHeight     最大允许的高度
		 *    $is_zoom       是否缩放，true 表示按照最大的宽度，等比例缩放，false 生成最大宽度和高度的缩略图（会让图片失真）
		 */
		public  function getThumbImage($imgPath,$maxWidth,$maxHeight,$is_zoom=true){
			//用于把图片在网页中显示
			header("Content-Type:image/jpeg");
			//
			$this->thumbImage($imgPath,$maxWidth,$maxHeight,$is_zoom);
			//显示缩略图
			ob_clean();
			imagejpeg($this->imgObj);

		}

		/* 生成图片的缩略图核心代码
		 *参数：
		 *    $imgPath           原图
		 *    $thumbWidth      最大允许的宽度
		 *    $thumbHeight     最大允许的高度
		 *    $is_zoom       是否缩放，true 表示按照最大的宽度，等比例缩放，false 生成最大宽度和高度的缩略图（会让图片失真）
		 */

		private  function thumbImage($imgPath,$thumbWidth,$thumbHeight,$is_zoom){


			//获取大图片的宽度和高度
			$imgInfoArr = self::getImageInfo($imgPath);
			// $imgWidth ----> $imgInfoArr['width']

			$method = "imagecreatefrom{$imgInfoArr['ext']}";
			//创建画布资源
			$bigImg = $method($imgPath);


			// $is_zoom  true 缩放
			// $is_zoom  false 不缩放，使用用户指定的尺寸
			
			if($is_zoom){

				//缩放的倍数
				$per = 1;

				if($imgInfoArr['width'] > $thumbWidth ){
					//计算缩略图占大图片的百分比
					$per = round($thumbWidth / $imgInfoArr['width'],2);
				}else if($imgInfoArr['height'] > $thumbHeight) {
					$per = round($thumbHeight / $imgInfoArr['height'],2);
				}

				//计算实际的缩略图的宽度和高度
				$thumbWidth = $imgInfoArr['width'] * $per;
				$thumbHeight = $imgInfoArr['height'] * $per;

			}

			//创建缩略的宽度和高度
			$thumbImg = imagecreatetruecolor($thumbWidth, $thumbHeight);

			// imagecopyresized(缩略图的图片画布资源, 大图画布资源, 大图在缩略图的x坐标, 大图在缩略图的y坐标, 缩略图的x坐标, 缩略图的y坐标, 缩略图宽, 缩略图高,大图的宽, 大图高度)
			imagecopyresampled($thumbImg, $bigImg, 0, 0, 0, 0, $thumbWidth, $thumbHeight,$imgInfoArr['width'], $imgInfoArr['height']);

			//把图片资源保存类的属性中
			$this->imgObj = $thumbImg;
			//把图片的后缀保存到属性中
			$this->ext = $imgInfoArr['ext'];

		}


		/*生成图片的缩略图(保存到指定的目录)
		 *参数：
		 *    $img           原图
		 *    $maxWidth      最大允许的宽度
		 *    $maxHeight     最大允许的高度
		 *    $is_zoom       是否缩放，true 表示按照最大的宽度，等比例缩放，false 生成最大宽度和高度的缩略图（会让图片失真）
		 *    $dirPath       缩略图保存的位置
		 */
		public function saveThumbImage($imgPath,$maxWidth,$maxHeight,$is_zoom=true,$dirPath){
			//调用生成缩略图的核心代码
			$this->thumbImage($imgPath,$maxWidth,$maxHeight,$is_zoom);

			//如果图片的后缀是.jpeg 的，我改为 .jpg
			if($this->ext =='jpeg'){

				$fileName = time().".jpg";
			}else {
				//拼接文件名
				$fileName = time().".".$this->ext;
			}

			$method = "image{$this->ext}";
			//保存图片
			if($method($this->imgObj,$dirPath.$fileName)){
				//如果保存成功，返回文件的名称
				return $fileName;
			}else {
				return false;
			}


		}


	}





 ?>
