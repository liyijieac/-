<?php 

	//分页的类
	class Page{

		//最核心的
		//1）返回 limit m,n  字符串
		//2）返回 分页页码的字符串

		// makePage
		// 参数1) 总的记录数
		// 参数2) 每页显示的大小(条数)
		// 
		public static function makePage($rowCount,$pageSize){

			//1、根据总记录数和每页大小，计算总的页数
			$pages = ceil($rowCount / $pageSize);

			//2、接收当前页，并且判断当前页是否>0
			//   $_GET['p']
			$p = isset($_GET['p']) && $_GET['p']>0 ? $_GET['p'] : 1 ;

			//3、拼接limit字符串
			//   limit (当前页-1)*每页大小,每页大小
			$limtStr = " limit ".($p-1)*$pageSize." , ".$pageSize." ";   //limit 5,10

			//http://www.a.com/phpday11/pages/test.php?a=aaa&b=bbb&flag=1&p=3
			//http://www.a.com/phpday11/pages/test.php?p=3
			
			// ?   a=aaa&b=bbb&flag=1&     p=3
			$pageStr = "<div class='pagelist'>";
			if($pages>0){

				//判断get中是否有参数
				$old = "";
				$inputStr = "";
				//先把p删除
				unset($_GET['p']);

				if(count($_GET)){
					//如过有参数，开始循环，拼接字符串
					//a=aaa&b=bbb&flag=1&
					//key --> a   value--->aaa
					//key --> b   value--->bbb
					//key --> flag value--->1
  					foreach ($_GET as $key => $value) {
						$old .= $key."=".$value."&";
						$inputStr .="<input type='hidden' name='{$key}' value='{$value}'>";
					}

				}

				//4、生成分页的代码
				//如果当前页不是第一页，就显示首页和上一页
				if($p!=1){
					//                a=aaa&b=bbb&flag=1&
					$pageStr .="<a href='?{$old}p=1'>首页</a>";
					$pageStr .="<a href='?{$old}p=".($p-1)."'>上一页</a>";

				}

				//定义变量，保存页面开始的位置和结束的位置
				$start = 1;
				$end = $pages;

				//当点击页面小于等于5，页码显示1-7页
				if($p<=5){

					$start = 1;
					//$p = 4, 总页数6页
					$end = min(7,$pages);

				}else if ($p>=6 && $p<$pages-3) {   //47
					//重新计算开始和结束的页码
					$start = $p-3;
					$end = $p+2;
					//拼接页面1、2
					$pageStr .="<a href='?{$old}p=1'>1</a>";
					$pageStr .="<a href='?{$old}p=1'>2</a>";
					$pageStr .="<a >...</a>";

				}else {

					$start = $p-3;
					$end = $pages;
					$pageStr .="<a href='?{$old}p=1'>1</a>";
					$pageStr .="<a href='?{$old}p=1'>2</a>";
					$pageStr .="<a >...</a>";

				}



				//输出显示页码
				for($i=$start;$i<=$end;$i++){
					$str = "";
					if($i==$p){
						$str = "class = 'active'";
					}

					$pageStr .="<a href='?{$old}p={$i}' {$str} >{$i}</a>";
				}
				//判断如果 $end 小于 总页数，添加...
				if($end < $pages){

					$pageStr .="<a >...</a>";

				}

				//如果当前页小于总页数，显示下一页和末页
				if($p<$pages){
					$pageStr .="<a href='?{$old}p=".($p+1)."'>下一页</a>";
					$pageStr .="<a href='?{$old}p=".$pages."'>末页</a>";
				}

				$pageStr .= "<span>共<b>{$pages}</b>页到第</span>";
				$pageStr .= "<form action='' style='display:inline-block;'><input type='text' class='txt' name='p' value='{$p}'>";
				$pageStr .= "<span>页</span>";
				$pageStr .= $inputStr;
				$pageStr .= "<input type='submit' value='确定' class='btn'></form>";

			
			}else {
				$pageStr .= "暂无数据...";
			}

			
			$pageStr .= "</div>";

			//把字符串放到数组中
			$arr['limit'] = $limtStr;
			$arr['pageStr'] = $pageStr;

			return $arr;

		}


	}



 ?>
