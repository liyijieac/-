<?php
/* Smarty version 3.1.30, created on 2018-04-26 03:37:42
  from "F:\ajaxstudy\Polycode\App\Home\View\Register\Register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae149865a6399_24047975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1b6d6bda67d3811791168c66ddabcecb4286af4' => 
    array (
      0 => 'F:\\ajaxstudy\\Polycode\\App\\Home\\View\\Register\\Register.html',
      1 => 1524707578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae149865a6399_24047975 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php echo '<script'; ?>
 src="../../../../Public/js/jquery.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<style>
    @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300);

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-weight: 300;
    }

    body {
        font-family: 'Source Sans Pro', sans-serif;
        color: white;
        font-weight: 300;
        background-color: black;!important;
    }

    body ::-webkit-input-placeholder {
        font-family: 'Source Sans Pro', sans-serif;
        color: white;
        font-weight: 300;
    }

    body :-moz-placeholder {
        font-family: 'Source Sans Pro', sans-serif;
        color: white;
        opacity: 1;
        font-weight: 300;
    }

    body ::-moz-placeholder {
        font-family: 'Source Sans Pro', sans-serif;
        color: white;
        opacity: 1;
        font-weight: 300;
    }

    body :-ms-input-placeholder {
        font-family: 'Source Sans Pro', sans-serif;
        color: white;
        font-weight: 300;

    }

    .wrapper {
        background: #50a3a2;
        background: -webkit-linear-gradient(top left, black 0%, black 100%);
        background: -moz-linear-gradient(top left, black 0%, black 100%);
        background: -o-linear-gradient(top left, black 0%,black 100%);
        background: linear-gradient(to bottom right, black 0%, black 100%);
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        height: 400px;
        margin-top: -200px;
        overflow: hidden;
    }

    .wrapper.form-success .container h1 {
        transform: translateY(85px);
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 80px 0;
        height: 400px;
        text-align: center;
    }

    .container h1 {
        font-size: 40px;
        transition-duration: 1s;
        transition-timing-function: ease-in-put;
        font-weight: 200;
    }

    form {
        padding: 20px 0;
        position: relative;
        z-index: 2;

    }

    form .ccc {
        display: block;
        appearance: none;
        outline: 0;
        border: 1px solid rgba(255, 255, 255, 0.4);
        background-color: rgba(255, 255, 255, 0.2);
        width: 250px;
        border-radius: 3px;
        padding: 10px 15px;
        margin: 0 auto 10px auto;
        text-align: center;
        font-size: 18px;
        color: white;
        transition-duration: 0.25s;
        font-weight: 300;
    }

    form .ccc:hover {
        background-color: rgba(255, 255, 255, 0.4);
    }

    form .ccc:focus {
        background-color: white;
        width: 300px;
        color: #53e3a6;
    }

    form .aaa {
        appearance: none;
        outline: 0;
        background-color: white;
        border: 0;
        padding: 10px 15px;
        color: #53e3a6;
        border-radius: 3px;
        width: 250px;
        cursor: pointer;
        font-size: 18px;
        transition-duration: 0.25s;
    }

    form .bbb {
        appearance: none;
        outline: 0;
        background-color: white;
        border: 0;
        padding: 10px 15px;
        color: #53e3a6;
        border-radius: 3px;
        width: 100px;
        height: 40px;
        cursor: pointer;
        font-size: 12px;
        transition-duration: 0.25s;
        color: transparent;
        text-shadow: 0 0 0 #53e3a6;
        padding-left: 20px;
    }

    form .aaa:hover {
        background-color: #f5f7f9;
    }

    .bg-bubbles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
    }

    .bg-bubbles li {
        position: absolute;
        list-style: none;
        display: block;
        width: 40px;
        height: 40px;
        background-color: rgba(255, 255, 255, 0.15);
        bottom: -160px;
        -webkit-animation: square 25s infinite;
        animation: square 25s infinite;
        -webkit-transition-timing-function: linear;
        transition-timing-function: linear;
    }

    .bg-bubbles li:nth-child(1) {
        left: 10%;
    }

    .bg-bubbles li:nth-child(2) {
        left: 20%;
        width: 80px;
        height: 80px;
        animation-delay: 2s;
        animation-duration: 17s;
    }

    .bg-bubbles li:nth-child(3) {
        left: 25%;
        animation-delay: 4s;
    }

    .bg-bubbles li:nth-child(4) {
        left: 40%;
        width: 60px;
        height: 60px;
        animation-duration: 22s;
        background-color: rgba(255, 255, 255, 0.25);
    }

    .bg-bubbles li:nth-child(5) {
        left: 70%;
    }

    .bg-bubbles li:nth-child(6) {
        left: 80%;
        width: 120px;
        height: 120px;
        animation-delay: 3s;
        background-color: rgba(255, 255, 255, 0.2);
    }

    .bg-bubbles li:nth-child(7) {
        left: 32%;
        width: 160px;
        height: 160px;
        animation-delay: 7s;
    }

    .bg-bubbles li:nth-child(8) {
        left: 55%;
        width: 20px;
        height: 20px;
        animation-delay: 15s;
        animation-duration: 40s;
    }

    .bg-bubbles li:nth-child(9) {
        left: 25%;
        width: 10px;
        height: 10px;
        animation-delay: 2s;
        animation-duration: 40s;
        background-color: rgba(255, 255, 255, 0.3);
    }

    .bg-bubbles li:nth-child(10) {
        left: 90%;
        width: 160px;
        height: 160px;
        animation-delay: 11s;
    }

    @-webkit-keyframes square {
        0% {
            transform: translateY(0);
        }
        100% {
            transform: translateY(-700px) rotate(600deg);
        }
    }

    @keyframes square {
        0% {
            transform: translateY(0);
        }
        100% {
            transform: translateY(-700px) rotate(600deg);
        }
    }

</style>

<?php echo '<script'; ?>
>
    $("#login-button").click(function (event) {
        event.preventDefault();

        $('form').fadeOut(500);
        $('.wrapper').addClass('form-success');

    });
    //    function sendCode() {
    //        var send = document.getElementById('senCode');
    //        send.value = time + "秒后发送";
    //    }
    //    function show(){
    //        time =time -1;
    //    }
    //    if(time!=0) {
    //        var flag = setInterval(show, 1000);
    //    }else {
    //        clearInterval(flag);
    //    }


<?php echo '</script'; ?>
>

<div class="wrapper"style="background-color: black" >
    <div class="container" style="background-color: black">
        <!--<h1 >Welcome</h1>-->
        <form class="form" style="margin-top: -40px;">
            <input id="username" class="ccc" type="text" placeholder="用户名" name="username">
            <span id="hidden1"></span>
            <input class="ccc" id = "password" type="password" placeholder="密码" name="password">
            <input id="phone" class="ccc" type="text" placeholder="手机号" name="phone"
                   style="display: inline-block;margin-left: 125px;">
            <input class="bbb" style="display: inline-block;margin-left: 20px; cursor: pointer" id="senCode"
                   value="发送验证码">
            <br><span id="hidden"></span>
            <input id="validate" class="ccc" type="text" placeholder="验证码" name="validate">
            <br>
            <?php echo '<script'; ?>
>


            <?php echo '</script'; ?>
>
            <button class="aaa register" type="button" id="login-button" style="">Register</button>
        </form>
    </div>

    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>

<?php echo '<script'; ?>
>

    $(function () {
        $('.register').click(function () {
           $.ajax({
               "url":"index.php?p=home&c=register&a=register",
               "type":"post",
               "data":{
                     "password":$("#password").val(),
                      "username":$('#username').val(),
                   "validate":$('#validate').val()
               },
               success:function (data) {
                    console.log(data);
               },
               error:function (data) {
//                   location.href="index.php?p=home&c=register&a=register";
               }
           })
        });








        $("#senCode").val("发送验证码");


        $("#senCode").click(function () {
//            alert($("#phone").val())
            if($("#phone").val()!==""){

                var time = 60;
                var flag = setInterval(function () {


                    if (time == 0) {
                        $("#senCode").val("发送验证码");
                        clearInterval(flag);
                        time = 60;
                    } else {

                        time--;



                    }

                    $("#senCode").val(time + "秒后发送");

                }, 1000);


                if ($("#senCode").val() == "发送验证码") {
                    $.ajax({
//                        "url": "Vendor/SendCode/extend/common/login/login.php",
                        "url":"index.php?p=home&c=register&a=sendCode",
                        "type": "post",
                        "data": {
                            "cass": "true",
                            "phone":$('#phone').val()
                        },
                        "dataType": "json",
                        success: function (data) {
                            console.log(data);

                        },
                        error:function (data) {
                            console.log(data)
                        }
                    })
                }





            }







        });

//        验证表单
        $('#phone').blur(function () {
            if ($(this).val() == $(this).val().match(/^[1][3,4,5,7,8][0-9]{9}$/)) {
                $('#hidden').text('手机号可用').css("color", "green", "margin-top", "-20px");
            } else {
                $('#hidden').text('手机号不可用').css("color", "red", "margin-top", "-20px");
            }
        });
        $('#username').blur(function () {
            if ($(this).val() == $(this).val().match(/[^\u0000-\u00FF]/)) {
                $('#hidden1').text("用户名可用");
            } else {
                $('#hidden1').text("用户名不可用");
            }
        });




    })
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
