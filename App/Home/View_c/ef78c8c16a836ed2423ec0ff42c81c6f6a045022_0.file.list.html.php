<?php
/* Smarty version 3.1.30, created on 2018-04-26 12:18:46
  from "C:\www\Polycode\App\Home\View\List\list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae1c3a6445f50_03456414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef78c8c16a836ed2423ec0ff42c81c6f6a045022' => 
    array (
      0 => 'C:\\www\\Polycode\\App\\Home\\View\\List\\list.html',
      1 => 1524745122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae1c3a6445f50_03456414 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>聚码在线</title>
	<link rel="stylesheet" href="../../../Public/css/index.css" />
	<link rel="stylesheet" href="../../../Public/css/footer.css" />
	<link rel="stylesheet" href="../../../Public/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../../Public/css/kefu.css" />
	
	<!--<link rel="stylesheet" href="Public/css/bootstrap.min.css" />-->
	<?php echo '<script'; ?>
 type="text/javascript" src="../../../Public/js/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="../../../Public/js/dingbu.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="../../../Public/js/bootstrap-3.1.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="Public/js/index.js"><?php echo '</script'; ?>
>
	<style>
		body {
			background: #060e1b;
			z-index: 1;
		}

		canvas {
			position: fixed;
			z-index: -2;
		  opacity: 0.5;
		}

		.swiper-container {
			overflow: hidden;
			width: 670px;
			height: 330px;
			margin-top: 10px;
		}

		.swiper-slide {
			text-align: center;
			font-size: 18px;
			background: #fff;
			/* Center slide text vertically */
			display: -webkit-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			-webkit-box-pack: center;
			-ms-flex-pack: center;
			-webkit-justify-content: center;
			justify-content: center;
			-webkit-box-align: center;
			-ms-flex-align: center;
			-webkit-align-items: center;
			align-items: center;
		}

		

		.i {

			width: 100px;
			position: relative;
			left: 423px;
			top: -61px;

		}

		.po {

			width: 2px;
			height: 1900px;
			background-color: white;
			position: relative;
			left: 644px;
			top: 48px;

		}


		.j a{

			width: 100px;
			height: 50px;
			font-size: 25px;
			color: deepskyblue;
			position: relative;
			top: 60px;
			left: 0px;
			text-decoration: none;
			margin-left: 20px;
		    padding: 3px 10px;
		    cursor: pointer;
		    color: #333;
        	border-radius: 6px;
    		background: deepskyblue;
			/*background-color: skyblue;*/

		}

		.k a{

			width: 100px;
			height: 50px;
			font-size: 25px;
			color: deepskyblue;
			position: relative;
			top: 34px;
			left: 243px;
			text-decoration: none;
			margin-left: 20px;
		    padding: 3px 10px;
		    cursor: pointer;
		    color: #333;
       	 	border-radius: 6px;
    		background: deepskyblue;
			/*background-color: skyblue;*/

		}


		.l a{

			width: 100px;
			height: 50px;
			font-size: 25px;
			color: deepskyblue;
			position: relative;
			top: 8px;
			left: 479px;
			text-decoration: none;
			margin-left: 20px;
		    padding: 3px 10px;
		    cursor: pointer;
		    color: #333;
        	border-radius: 6px;
    		background: deepskyblue;
			/*background-color: skyblue;*/

		}

		.nm {

			width: 500px;
			height: 50px;

		}

	</style>
</head>
<body>
<canvas id="canvas"></canvas>
<?php echo '<script'; ?>
>
    "use strict";

    var canvas = document.getElementById('canvas'),
        ctx = canvas.getContext('2d'),
        w = canvas.width = window.innerWidth,
        h = canvas.height = window.innerHeight,

        hue = 217,
        stars = [],
        count = 0,
        maxStars = 1400;

    // Thanks @jackrugile for the performance tip! https://codepen.io/jackrugile/pen/BjBGoM
    // Cache gradient
    var canvas2 = document.createElement('canvas'),
        ctx2 = canvas2.getContext('2d');
    canvas2.width = 100;
    canvas2.height = 100;
    var half = canvas2.width/2,
        gradient2 = ctx2.createRadialGradient(half, half, 0, half, half, half);
    gradient2.addColorStop(0.025, '#fff');
    gradient2.addColorStop(0.1, 'hsl(' + hue + ', 61%, 33%)');
    gradient2.addColorStop(0.25, 'hsl(' + hue + ', 64%, 6%)');
    gradient2.addColorStop(1, 'transparent');

    ctx2.fillStyle = gradient2;
    ctx2.beginPath();
    ctx2.arc(half, half, half, 0, Math.PI * 2);
    ctx2.fill();

    // End cache

    function random(min, max) {
        if (arguments.length < 2) {
            max = min;
            min = 0;
        }

        if (min > max) {
            var hold = max;
            max = min;
            min = hold;
        }

        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    function maxOrbit(x,y) {
        var max = Math.max(x,y),
            diameter = Math.round(Math.sqrt(max*max + max*max));
        return diameter/2;
    }

    var Star = function() {

        this.orbitRadius = random(maxOrbit(w,h));
        this.radius = random(60, this.orbitRadius) / 12;
        this.orbitX = w / 2;
        this.orbitY = h / 2;
        this.timePassed = random(0, maxStars);
        this.speed = random(this.orbitRadius) / 50000;
        this.alpha = random(2, 10) / 10;

        count++;
        stars[count] = this;
    }

    Star.prototype.draw = function() {
        var x = Math.sin(this.timePassed) * this.orbitRadius + this.orbitX,
            y = Math.cos(this.timePassed) * this.orbitRadius + this.orbitY,
            twinkle = random(10);

        if (twinkle === 1 && this.alpha > 0) {
            this.alpha -= 0.05;
        } else if (twinkle === 2 && this.alpha < 1) {
            this.alpha += 0.05;
        }

        ctx.globalAlpha = this.alpha;
        ctx.drawImage(canvas2, x - this.radius / 2, y - this.radius / 2, this.radius, this.radius);
        this.timePassed += this.speed;
    }

    for (var i = 0; i < maxStars; i++) {
        new Star();
    }

    function animation() {
        ctx.globalCompositeOperation = 'source-over';
        ctx.globalAlpha = 0.8;
        ctx.fillStyle = 'hsla(' + hue + ', 64%, 6%, 1)';
        ctx.fillRect(0, 0, w, h)

        ctx.globalCompositeOperation = 'lighter';
        for (var i = 1, l = stars.length; i < l; i++) {
            stars[i].draw();
        };

        window.requestAnimationFrame(animation);
    }

    animation();
<?php echo '</script'; ?>
>

	<!--返回顶部-->
	<div class="side">
		<ul>
			<li>
				<a href="#" target="_blank">
					<div class="sidebox"><img src="../../../Public/images/side_icon01.png">首页分享</div>
				</a>
			</li>
			<li>
				<a href="#" target="_blank">
					<div class="sidebox"><img src="../../../Public/images/side_icon04.png">QQ</div>
				</a>
			</li>
			<li>
				<a href="#" target="_blank">
					<div class="sidebox"><img src="../../../Public/images/weixin.png">微信</div>
				</a>
			</li>
			<li>
				<a href="#" target="_blank">
					<div class="sidebox"><img src="../../../Public/images/side_icon03.png">新浪微博</div>
				</a>
			</li>
			<li style="border:none;">
				<a href="javascript:goTop();" class="sidetop"><img src="../../../Public/images/side_icon05.png"></a>
			</li>
		</ul>
	</div>

    <!--logo-->
	<div class="logo">
		<img src="../../../Public/images/welogo.png" />
		<div class="denglu" style="float: right;">
			<a href="#" style="display: inline-block;padding-left: 8px; padding-right: 8px;color: #fff;font-size: 16px;">登录</a>
			<span></span>
			<a href="#" style="display: inline-block;padding-left: 8px; padding-right: 8px;color: #fff;font-size: 16px;">注册</a>
		</div>
		<div class="logo3" style="float: right;width: 35px;height: 34px;margin-right:50px;background: #f3f2ee;margin-left: -2px;border-radius: 3px;"><img style="border: 0px;margin-left: 8px;margin-top: 9px;" class="logo3" src="../../../Public/images/SY/logo3.jpg" /></div>
		<div class="input-group" style="float: right;">
			<input type="text" class="form-control" placeholder="请输入您要搜索的内容">
			<div class="input-group-btn"></div>
		</div>
	</div>

	<hr style="margin-top: -15px;">

	<!--内容-->
	<div class="content">

		<!--标签-->
		<!-- <div class="cn_nav">
			<a class="tag size-name" href="#">全部</a>
			<ul>
				<li><a class="tag" href="#">51CTO</a></li>
				<li><a class="tag" href="#">36Kr</a></li>
				<li><a class="tag" href="#">osChina</a></li>
				<li><a class="tag" href="#">Juejin</a></li>
				<li><a class="tag" href="#">CSDN</a></li>
			</ul>
		</div> -->


		<!--文章显示-->
		<div class="cn_cn">

			<!--文章内容左部分-->
			<div class="cn_left">

					<div class="po"></div>

				<div class="cn_left_right">

					<div class="j"><a href="">51CTO</a></div>
					<div class="k"><a href="">CSDN</a></div>
					<div class="l"><a href="">36Kr</a></div>


					<div class="rgt">
						<!-- <a href="#">
							<h3>51CTO</h3></a>
						<img src="../../../Public/images/SY/cn_left_right1.jpg" /> -->
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Label']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
						<a href="">
							<p class="nm"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</p>

							<span class="i">【<?php echo $_smarty_tpl->tpl_vars['v']->value['add_time'];?>
】</span>
						</a>
					  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</div>

					<?php echo $_smarty_tpl->tpl_vars['dataArr']->value['pageStr'];?>


				</div>

				


				
			</div>
			</div>


			<!--文章内容右部分-->
		<div class="cn_right">
			<div class="cn_right1">
				<h2>今日推荐</h2>
				<div class="cn_right_cn">
					<img style="float: left;" src="../../../Public/images/cn_right2.jpg" />
					<a href="#">
						<h4>&nbsp;&nbsp;&nbsp;年薪60万在北京可以横着走吗？</h4></a>
					<a href="#">其中1rpx=0.5px，在WXSS和WXML中定义的rpx单位最终会转换为在手机端可以识别的rem单位。

						建议：开发微信小程序时设计师可以用 iPhone6 作为视觉稿的标准。</a>
				</div>
				<div class="cn_right_cn">
					<img style="float: left;" src="../../../Public/images/cn_right2.jpg" />
					<a href="#">
						<h4>&nbsp;&nbsp;&nbsp;玩转深度学习(原理+实战)</h4></a>
					<a href="#">其中1rpx=0.5px，在WXSS和WXML中定义的rpx单位最终会转换为在手机端可以识别的rem单位。

						建议：开发微信小程序时设计师可以用 iPhone6 作为视觉稿的标准。</a>
				</div>
				<div class="cn_right_cn">
					<img style="float: left;" src="../../../Public/images/cn_right2.jpg" />
					<a href="#">
						<h4>&nbsp;&nbsp;&nbsp;Facebook的原罪与区块链的救赎</h4></a>
					<a href="#">其中1rpx=0.5px，在WXSS和WXML中定义的rpx单位最终会转换为在手机端可以识别的rem单位。

						建议：开发微信小程序时设计师可以用 iPhone6 作为视觉稿的标准。</a>
				</div>
				<div class="cn_right_cn">
					<img style="float: left;" src="../../../Public/images/cn_right2.jpg" />
					<a href="#">
						<h4>&nbsp;&nbsp;&nbsp;谁在杀死Facebook？谁该为我们负责？</h4></a>
					<a href="#">其中1rpx=0.5px，在WXSS和WXML中定义的rpx单位最终会转换为在手机端可以识别的rem单位。

						建议：开发微信小程序时设计师可以用 iPhone6 作为视觉稿的标准。</a>
				</div>
				<div class="cn_right_cn">
					<img style="float: left;" src="../../../Public/images/cn_right2.jpg" />
					<a href="#">
						<h4>&nbsp;&nbsp;&nbsp;代码之外的功夫：程序员精进之路</h4></a>
					<a href="#">其中1rpx=0.5px，在WXSS和WXML中定义的rpx单位最终会转换为在手机端可以识别的rem单位。

						建议：开发微信小程序时设计师可以用 iPhone6 作为视觉稿的标准。</a>
				</div>
				<div class="cn_right_btm">
					<img src="../../../Public/images/SY/cn_left_left1.jpg" />
					<img src="../../../Public/images/SY/cn_left_left1.jpg" />
					<a href="#">小程序与传统HTML5的区别</a>
					<a href="#">AJAX 原生学习笔记</a>
				</div>

			</div>


			<div class="cn_right3">
				<a href="#" style="float: left;">
					<h2>最新消息</h2></a>
				<a href="#" style="background:#e70112 ; padding: 2px;color: white;float: right;margin-top: 25px;border-radius: 5px;">更多>></a>
				<div style="width: 385px;border-bottom: 1px solid silver;float: left;"></div>
			</div>
			<div class="clear"></div>
			<div class="cn_right4">
				<a href="#">
					<h4>vue源码分析：渲染篇</h4></a>
				<ul>
					<li style="position: relative;"><img src="../../../Public/images/new.jpg" /></li>
					<li style="position: absolute;width: 270px;float: left;margin-left: 10px;">
						<a href="#">如果是比较简单的逻辑，使用template和el比较好，因为这两种都属于声明式渲染，对用户理解比较容易，但灵活性比较差，因为最终生成的Render函数是由程序通过AST解析优化得到的.</a>
					</li>
				</ul>
				<ul class="biaoqian">
					<li class="bq1"> 标签：</li>
					<li class="bq">vue</li>
					<li class="bq">分析</li>
					<li class="bq">渲染</li>
				</ul>
			</div>

			<div class="cn_right4">
				<a href="#">
					<h4>vue源码分析：渲染篇</h4></a>
				<ul>
					<li style="position: relative;"><img src="../../../Public/images/new.jpg" /></li>
					<li style="position: absolute;width: 270px;float: left;margin-left: 10px;">
						<a href="#">如果是比较简单的逻辑，使用template和el比较好，因为这两种都属于声明式渲染，对用户理解比较容易，但灵活性比较差，因为最终生成的Render函数是由程序通过AST解析优化得到的.</a>
					</li>
				</ul>
				<ul class="biaoqian">
					<li class="bq1"> 标签：</li>
					<li class="bq">vue</li>
					<li class="bq">分析</li>
					<li class="bq">渲染</li>
				</ul>
			</div>

			<div class="cn_right4">
				<a href="#">
					<h4>vue源码分析：渲染篇</h4></a>
				<ul>
					<li style="position: relative;"><img src="../../../Public/images/new.jpg" /></li>
					<li style="position: absolute;width: 270px;float: left;margin-left: 10px;">
						<a href="#">如果是比较简单的逻辑，使用template和el比较好，因为这两种都属于声明式渲染，对用户理解比较容易，但灵活性比较差，因为最终生成的Render函数是由程序通过AST解析优化得到的.</a>
					</li>
				</ul>
				<ul class="biaoqian">
					<li class="bq1"> 标签：</li>
					<li class="bq">vue</li>
					<li class="bq">分析</li>
					<li class="bq">渲染</li>
				</ul>
			</div>

			<div class="cn_right4">
				<a href="#">
					<h4>vue源码分析：渲染篇</h4></a>
				<ul>
					<li style="position: relative;"><img src="../../../Public/images/new.jpg" /></li>
					<li style="position: absolute;width: 270px;float: left;margin-left: 10px;">
						<a href="#">如果是比较简单的逻辑，使用template和el比较好，因为这两种都属于声明式渲染，对用户理解比较容易，但灵活性比较差，因为最终生成的Render函数是由程序通过AST解析优化得到的.</a>
					</li>
				</ul>
				<ul class="biaoqian">
					<li class="bq1"> 标签：</li>
					<li class="bq">vue</li>
					<li class="bq">分析</li>
					<li class="bq">渲染</li>
				</ul>
			</div>

			<div class="cn_right4">
				<a href="#">
					<h4>vue源码分析：渲染篇</h4></a>
				<ul>
					<li style="position: relative;"><img src="../../../Public/images/new.jpg" /></li>
					<li style="position: absolute;width: 270px;float: left;margin-left: 10px;">
						<a href="#">如果是比较简单的逻辑，使用template和el比较好，因为这两种都属于声明式渲染，对用户理解比较容易，但灵活性比较差，因为最终生成的Render函数是由程序通过AST解析优化得到的.</a>
					</li>
				</ul>
				<ul class="biaoqian">
					<li class="bq1"> 标签：</li>
					<li class="bq">vue</li>
					<li class="bq">分析</li>
					<li class="bq">渲染</li>
				</ul>
			</div>

		</div>

		</div>

<hr>

		<!--底部-->
		<div class="footer">
				<p class="textbox">相关频道：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;全栈一班&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;传智资讯&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;聚码小道&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;十组消息</p>
				<p class="di">
					京公网卡100100100011号 互联网信息许可证 ©2018 czxy 使用聚码必要协议 聚码协议
				</p>
		</div>



</body>
</html><?php }
}
