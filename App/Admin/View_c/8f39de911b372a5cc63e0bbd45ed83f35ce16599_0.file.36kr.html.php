<?php
/* Smarty version 3.1.30, created on 2018-04-23 13:26:08
  from "F:\ajaxstudy\Polycode\App\Admin\VIEW\36kr.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adddef0e67935_19281462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f39de911b372a5cc63e0bbd45ed83f35ce16599' => 
    array (
      0 => 'F:\\ajaxstudy\\Polycode\\App\\Admin\\VIEW\\36kr.html',
      1 => 1524489033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5adddef0e67935_19281462 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>home</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="public/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="public/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="public/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <!-- <link href="assets/css/custom.css" rel="stylesheet" /> -->
    <!-- GOOGLE FONTS-->
    <?php echo '<script'; ?>
 type="text/javascript" src="public/js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php" style="background-color: #000000">全栈十组</a>
                <a class="navbar-brand brand2" href="index.php" style="background-color: #f4726d"><img src="assets/img/logo.jpg" alt=""><span>聚码在线后台管理</span></a>
            </div>
            <div class="header-right">
                <div class="btn-group">
                    <span data-toggle="dropdown" class="btn btn-inverse dropdown-toggle">屁桃<span class="caret"></span></span>
                    <ul class="dropdown-menu">
                        <li><a href="h_change_pwd.php">修改密码</a></li>
                        <li><a href="h_loginout.php">退出登陆</a></li>
                    </ul>
                </div>
            </div>

        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="active">
                        <a href="#" class=""><i class="fa fa-desktop "></i>采集管理 <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="index.php?p=admin&c=lgy&a=index" ><i class="fa fa-toggle-on"></i>51CTO</a>
                            </li>
                            <li>
                                <a href="index.php?p=admin&c=xft&a=doList" class="active-menu"><i class="fa fa-bell "></i>36氪</a>
                            </li>
                            <li>
                                <a href="index.php?p=admin&c=cxy&a=index"><i class="fa fa-bell "></i>开源中国</a>
                            </li>
                            <li>
                                <a href="index.php?p=admin&c=lzl&a=index"><i class="fa fa-bell "></i>掘金</a>
                            </li>
                            <li>
                                <a href="index.php?p=admin&c=xrc&a=index"><i class="fa fa-bell "></i>今日头条</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.php?p=admin&c=article&a=articleList"><i class="fa fa-yelp "></i>内容管理</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">36氪</h1>
                        <h1 class="page-subhead-line">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                添加规则
                            </button>
                        </h1>
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <form action="index.php?p=admin&c=xft&a=Addto" method="post">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">添加规则</h4>
                                        </div>
                                        <div class="modal-body">
                                            <!--添加下拉框-->
                                            <select name="type">
                                                <!--这里是拿到type表的父类id  叫采集规则表的采集列表和父类对应上-->
                                                <option value="0">根级分类</option>

                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataArr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
#<?php echo $_smarty_tpl->tpl_vars['v']->value['path'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['type_name'];?>
</option>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                            </select>
                                            <!--添加下拉框-->

                                            <!--添加下拉框-->
                                            <!--这里查询的是 采集规则的表   这里是给采集内容添加pid-->
                                            <select name="filmtype">
                                                <option value="0">根级分类</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filmArr']->value, 'film');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['film']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['film']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['film']->value['rules_name'];?>
</option>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                            </select>
                                            <!--添加下拉框-->
                                           <div class="form-group">
                                                <label>规则名称：</label>
                                                <input class="form-control" type="text" name="urlName">
                                            </div>
                                            <div class="form-group">
                                                <label>采集地址：</label>
                                                <input class="form-control" type="text"name="url">
                                            </div>
                                            <br>
                                            <div class="form-inline">
                                                <label>开始页码：</label>
                                                <input class="form-control" type="text" name="star">&nbsp;&nbsp;&nbsp;&nbsp;
                                                <label>结束页码：</label>
                                                <input class="form-control" type="text" name="end">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label>采集规则(正则内容)：</label>
                                                <textarea class="form-control" rows="5" id="content" name="content"></textarea>
                                            </div>
                                            <div class="pub-txt-bar">

                                                <input type="radio" name="rulestype" value="1" checked="checked"> 列表
                                                <input type="radio" name="rulestype" value="2"> 内容

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                                            <button type="submit" class="btn btn-primary">确认添加</button>
                                        </div>

                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 修改模态框 -->
                    <div class="modal fade" id="changeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="myModalLabel">修改规则</h4>
                                </div>
                                <div class="modal-body">
                                   <div class="form-group">
                                        <label>规则名称：</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>采集地址：</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <br>
                                    <div class="form-inline">
                                        <label>开始页码：</label>
                                        <input class="form-control" type="text">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label>结束页码：</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>采集规则(正则内容)：</label>
                                        <textarea class="form-control" rows="5" id="comment"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                                    <button type="button" class="btn btn-primary">确认添加</button>
                                </div>
                            </div>
                        </div>
                    </div>
                                    <!-- 删除模态框 -->
                  <div class="modal fade" id="deleteModal">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <!-- 模态框头部 -->
                        <div class="modal-header">
                          <h4 class="modal-title">提示</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- 模态框主体 -->
	                   <div class="modal-body">
	                    你确定要删除吗？
	                  </div>
                        <!-- 模态框底部 -->
                        <div class="modal-footer">
                        	<button type="button" class="btn btn-success" data-dismiss="modal">确认</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                        </div>

                      </div>
                    </div>
                  </div>
                <!-- /. ROW  -->
                <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-primary">
      <!-- Default panel contents -->
                          <div class="panel-heading">
                            <span>采集列表</span>
                            <form action="" method="get">
                                <span><input name="keyword" class="form-control" type="text" placeholder="搜索" style="display: block;width: 30%; position: absolute;top: 7px;right: 25px;" ><button id="likeBtn" class="fa fa-search" type="submit" style="cursor: pointer;position: absolute;right: 40px;top: 12px;color: skyblue;font-size: 24px;border: 0px;background-color: #fff;"></button></span>
                            </form>
                          </div>
                          <!-- Table -->
                          <table class="table">
                            <thead>
                              <tr class="row">
                                <th class="col-md-2">ID</th>
                                <th class="col-md-2">规则名称</th>
                                <th class="col-md-4">添加时间</th>
                                <th class="col-md-4">操作</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Arr']->value, 'listt');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['listt']->value) {
?>
                              <tr class="list-group-item-info row">
                                <td class="col-md-2"><?php echo $_smarty_tpl->tpl_vars['listt']->value['id'];?>
</td>
                                <td class="col-md-2"><a><?php echo $_smarty_tpl->tpl_vars['listt']->value['rules_name'];?>
</a></td>
                                <td class="col-md-4">2018/4/21</td>
                                <td class="col-md-4">
                                    <div class="btn">
                                        <a class="btn btn-primary" data-toggle="modal" data-target="#changeModal">修改</a>
                                        <a class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">删除</a>
                                        <a class="btn btn-warning">更新URL</a>
                                        <a class="btn btn-success">采集URL</a>
                                    </div>
                                </td>
                              </tr>
                             <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </tbody>
                          </table>
                        </div>
                       </div>
                     </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <?php echo '<script'; ?>
 src="public/js/bootstrap.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/jquery.metisMenu.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/custom.js"><?php echo '</script'; ?>
>




</body>
</html><?php }
}
