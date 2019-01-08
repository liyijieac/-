<?php
/* Smarty version 3.1.30, created on 2018-04-24 07:27:27
  from "F:\ajaxstudy\Polycode\App\Admin\View\Xft\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adedc5f16a8b5_71225675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f25477ca004bb00bdcdcc675f501e373862f9702' => 
    array (
      0 => 'F:\\ajaxstudy\\Polycode\\App\\Admin\\View\\Xft\\edit.html',
      1 => 1524553962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5adedc5f16a8b5_71225675 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="3 ;url=index.php?p=admin&c=xft&a=doList">
    <title>Document</title>
    <style>
        .svg-container {
            width: 30%;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
        }

        /*rocket*/
        .rocket {animation: takeoff 2s 1 ease-in forwards;
            animation-delay: 1s;}
        .blastoff {animation:takeoff 2s 1 ease-in forwards;
            animation-delay: 1s;}
        @keyframes takeoff {
            0% {transform: translateY(0);}
            100% {transform: translateY(-500px);}
        }
        /*blast wiggle*/
        .leftblast {animation: wiggleleftdos 1500ms infinite both;}
        .leftinblast {animation: wiggleleft 1500ms infinite both;}
        .rightinblast {animation: wiggleleft 1500ms infinite both;}
        .rightblast {animation: wiggleleftdos 1500ms infinite both;}

        @keyframes wiggleleftdos{
            0% {transform: rotate(.3deg);}
            25% {transform: rotate(0deg);}
            50% {transform: rotate(.2deg);}
            75% {transform: rotate(.5deg);}
            100% {transform: rotate(.3deg);}
        }

        @keyframes wiggleleft{
            0% {transform: rotate(-.3deg);}
            25% {transform: rotate(0deg);}
            50% {transform: rotate(-.2deg);}
            75% {transform: rotate(-.5deg);}
            100% {transform: rotate(-.3deg);}
        }

        /*stars*/
        .circlestar{animation: borderitup 2s infinite both}
        .circlestardouble{animation: borderitupdos 1.5s infinite both}
        .circlestartres{animation: borderituptres 1.2s infinite both}
        .largestar{animation: glowborder 2s infinite both;}
        .largestardos{animation: glowborderdos 1.5s infinite both;}
        .largestartres{animation: glowborderthres 1s infinite both;}

        @keyframes borderitup {
            0% {stroke-width: .5%;}
            25% {stroke-width: 2%;}
            50% {stroke-width: .8%;}
            75% {stroke-width: 1.7%;}
            100% {stroke-width: .5%;}
        }
        @keyframes borderitupdos {
            0% {stroke-width: 1%;}
            25% {stroke-width: .5%;}
            50% {stroke-width: 3%;}
            75% {stroke-width: .5%;}
            100% {stroke-width: 1%;}
        }

        @keyframes borderituptres {
            0% {stroke-width: .6%;}
            25% {stroke-width: .2%;}
            50% {stroke-width: .8%;}
            75% {stroke-width: .2%;}
            100% {stroke-width: .6%;}
        }
        @keyframes glowborder {
            0% {opacity: 1; stroke-width: .6%;}
            20% {opacity: .4; stroke-width: .5%;}
            40% {opacity: .8; stroke-width: 1%;}
            80% {opacity: .4; stroke-width: .5%;}
            100% {opacity: 1; stroke-width: .6%;}
        }
        @keyframes glowborderdos {
            0% {opacity: .3; stroke-width: .1%;}
            20% {opacity: .9; stroke-width: .4%;}
            40% {opacity: .2; stroke-width: .2%;}
            80% {opacity: 1; stroke-width: .6%;}
            100% {opacity: .3; stroke-width: .1%;}
        }
        @keyframes glowbordertres {
            0% {opacity: .2; stroke-width: .2%;}
            20% {opacity: 1; stroke-width: .1%;}
            40% {opacity: .5; stroke-width: .5%;}
            80% {opacity: .7; stroke-width: .7%;}
            100% {opacity: .2; stroke-width: .2%;}
        }
        /*clouds*/
        .clouds {animation: cloudin 2s 1 both;
            animation-delay: 1s;}
        .smoke {animation: stretch 2s 1 ease-in;
            animation-delay: 1s;}

        @keyframes cloudin {
            0% {opacity: 0;}
            40% {opacity: 1;}
            100% {opacity: 0;}
        }

        @keyframes stretch {
            0% {stroke-width: 0%;}
            20% {stroke-width: 2%;}
            40% {stroke-width: 4%;}
            60% {stroke-width: 6%;}
            80% {stroke-width: 8%;
            100% {stroke-width: 10%;}
        }
    </style>
</head>
<body>
<div class="svg-container">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 362.13 407.12">
        <title>rocket</title>
        <g id="grass">
            <path id="GrassShape" d="M1.32,366.12h359.5c-72.43-16.88-116.67-9-205.78-9S38.9,356.1,1.32,366.12Z" transform="translate(2.49 -7.25)" style="fill: #a8d15f;stroke: #a8d15f;stroke-miterlimit: 10"/>
        </g>
        <g id="Stars" class="stars">
            <circle id="circlestar" class="circlestartres" cx="238.83" cy="48.21" r="3" style="fill: #ffdca9;stroke: #ffdca9;stroke-miterlimit: 10"/>
            <circle id="circlestar-2" class="circlestar" cx="219.83" cy="66.21" r="3" style="fill: #ffdca9;stroke: #ffdca9;stroke-miterlimit: 10"/>
            <circle id="circlestar-3" class="circlestar" cx="32.83" cy="140.21" r="3" style="fill: #ffdca9;stroke: #ffdca9;stroke-miterlimit: 10"/>
            <circle id="circlestar-4" class="circlestardouble" cx="82.83" cy="201.21" r="3" style="fill: #ffdca9;stroke: #ffdca9;stroke-miterlimit: 10"/>
            <circle id="circlestar-5" class="circlestar" cx="70" cy="95" r="3" style="fill: #ffdca9;stroke: #ffdca9;stroke-miterlimit: 10"/>
            <circle id="circlestar-13" class="circlestardouble" cx="120" cy="100" r="3" style="fill: #ffdca9;stroke: #ffdca9;stroke-miterlimit: 10"/>
            <circle id="circlestar-6" class="circlestar" cx="312.89" cy="224.67" r="3" style="fill: #ffdca9;stroke: #ffdca9;stroke-miterlimit: 10"/>
            <circle id="circlestar-7" class="circlestardouble" cx="320.06" cy="190" r="3" style="fill: #ffdca9;stroke: #ffdca9;stroke-miterlimit: 10"/>
            <circle id="circlestar-8" class="circlestar" cx="330.89" cy="44.67" r="3" style="fill: #ffdca9;stroke: #ffdca9;stroke-miterlimit: 10"/>
            <circle id="circlestar-12" class="circlestartres" cx="200" cy="200" r="3" style="fill: #ffdca9;stroke: #ffdca9;stroke-miterlimit: 10"/>
            <circle id="circlestar-12" class="circlestartres" cx="150" cy="170" r="3" style="fill: #ffdca9;stroke: #ffdca9;stroke-miterlimit: 10"/>

            <polygon id="large_star" class="largestardos" points="281.31 143.05 298.18 147.4 281.31 151.75 276.96 168.63 272.61 151.75 255.74 147.4 272.91 143.35 276.96 126.18 281.31 143.05" style="fill: #ffdca9;stroke: #ffdca9;stroke-miterlimit: 10"/>
            <polygon id="large_star-2" class="largestar" points="299.46 115.74 306.02 121.48 297.51 119.63 291.77 126.18 293.62 117.67 287.06 111.93 295.64 113.99 301.31 107.23 299.46 115.74" style="fill: #ffdca9;stroke: #ffdca9;stroke-miterlimit: 10"/>
            <polygon id="large_star-3" class="largestartres" points="69.25 34.59 92.78 20.7 78.9 44.23 92.78 67.77 69.25 53.88 45.71 67.77 60.27 44.23 45.71 20.7 69.25 34.59" style="fill: #ffdca9;stroke: #ffdca9;stroke-miterlimit: 10"/>
        </g>

        <g id="clouds" class="clouds">
            <circle cx="60" cy="330" r="50" style="fill: #cccccc"/>
            <circle cx="305" cy="320" r="55" style="fill: #cccccc"/>
            <circle cx="89.11" cy="356.1" r="50" style="fill: #cccccc"/>
            <circle cx="248.04" cy="344.05" r="40" style="fill: #cccccc"/>
            <circle cx="212.92" cy="349.24" r="45" style="fill: #cccccc"/>
            <circle cx="150" cy="349.24" r="50" style="fill: #cccccc"/>
            <polygon class="smoke" points="201.29 361.34 182.28 261.28 174.77 292.24 162.36 190 126.47 361.34 201.29 361.34" style="fill: #cccccc;stroke: #cccccc;stroke-miterlimit: 10"/>
        </g>
        <g id="rocket" class="rocket">
            <g id="rocketbody">
                <polyline id="supportingleg" points="156.44 216.71 176.97 286.11 192.51 216.71" style="fill: #fcb02d;stroke: #222;stroke-linecap: round;stroke-linejoin: round;stroke-width: 6px"/>
                <path id="mainbody" d="M174.31,220.87c5.69.06,21.71-6.81,21.71-6.81,22.83,0,60.07,56.88,60.07,56.88,0-57.16-30.66-69.39-30.66-69.39,29.42-107.66-50.26-191.3-50.26-191.3h0s-79.68,83.64-50.26,191.3c0,0-30.66,12.23-30.66,69.39,0,0,37.24-56.88,60.07-56.88C154.28,214.06,169,220.8,174.31,220.87Z" style="fill: #fcb02d;stroke: #222;stroke-linecap: round;stroke-linejoin: round;stroke-width: 6px"/>
                <path id="blaster" d="M196,214.06l17.25,37.35H137l17.26-37.35s14.74,6.74,20,6.81C180,220.93,196,214.06,196,214.06Z" style="fill: #f36f25;stroke: #222;stroke-linecap: round;stroke-linejoin: round;stroke-width: 6px"/>
                <circle id="window" cx="175.15" cy="103.43" r="23.67" style="fill: #fff;stroke: #222;stroke-linecap: round;stroke-linejoin: round;stroke-width: 6px"/>
                <g id="blasterdetail">
                    <line x1="175.15" y1="227.64" x2="175.15" y2="244.04" style="fill: none;stroke: #222;stroke-linecap: round;stroke-linejoin: round;stroke-width: 6px"/>
                    <line x1="161.62" y1="227.13" x2="155.62" y2="243.53" style="fill: none;stroke: #222;stroke-linecap: round;stroke-linejoin: round;stroke-width: 6px"/>
                    <line x1="188.68" y1="227.13" x2="194.68" y2="243.53" style="fill: none;stroke: #222;stroke-linecap: round;stroke-linejoin: round;stroke-width: 6px"/>
                </g>
                <g id="rocketdetail">
                    <path d="M146.64,132.8a3.33,3.33,0,1,0,3.32,3.32A3.33,3.33,0,0,0,146.64,132.8Z" style="fill: #222"/>
                    <path d="M204.41,132.8a3.33,3.33,0,1,0,3.32,3.32A3.33,3.33,0,0,0,204.41,132.8Z" style="fill: #222"/>
                    <circle cx="217.92" cy="129.46" r="3.32" style="fill: #222"/>
                    <circle cx="132.38" cy="129.46" r="3.32" style="fill: #222"/>
                    <path d="M160.89,139.47a3.32,3.32,0,1,0,3.33,3.32A3.32,3.32,0,0,0,160.89,139.47Z" style="fill: #222"/>
                    <path d="M190.66,139.47a3.32,3.32,0,1,0,3.33,3.32A3.32,3.32,0,0,0,190.66,139.47Z" style="fill: #222"/>
                    <circle cx="175.15" cy="149.46" r="3.32" style="fill: #222"/>
                    <circle cx="175.15" cy="163.8" r="3.32" style="fill: #222"/>
                    <circle cx="175.15" cy="177.58" r="3.32" style="fill: #222"/>
                    <path d="M175.15,188a3.33,3.33,0,1,0,3.32,3.32A3.33,3.33,0,0,0,175.15,188Z" style="fill: #222"/>
                    <circle cx="175.15" cy="205.14" r="3.32" style="fill: #222"/>
                </g>
                <g id="rocketop">
                    <path d="M196.6,39.49c-11.53-18.17-21.43-28.58-21.43-28.58h0s-9.9,10.41-21.43,28.58a35.71,35.71,0,0,0,42.9,0Z" style="fill: #f36f25;stroke: #222;stroke-linecap: round;stroke-linejoin: round;stroke-width: 6px"/>
                </g>
            </g>
        </g>
        <g id="blastoff" class="blastoff">
            <polygon id="leftblast" class="leftblast" points="143.61 260 123.92 287.38 133.77 309.88 115.75 329.53 142.15 309.88 134.98 287.38 143.61 260" style="fill: #f36f25;fill-opacity: 0.7000000000000001"/>
            <polygon id="leftinblast" class="leftinblast" points="153.43 260 147.24 280.42 159.42 292.53 147.82 306.53 162.42 328.36 154.12 306.53 165.3 292.53 154.59 280.42 153.43 260" style="fill: #f36f25;fill-opacity: 0.7000000000000001"/>
            <polygon id="rightinblast" class="rightinblast" points="192.47 260 203.77 284.2 195.47 294.34 202.69 306.83 203.77 326.52 197.3 306.83 185.73 294.34 196.58 284.2 192.47 260" style="fill: #f36f25;fill-opacity: 0.7000000000000001"/>
            <polygon id="rightblast" class="rightblast" points="208.68 260 228.38 287.38 218.53 309.88 236.54 329.53 210.15 309.88 217.31 287.38 208.68 260" style="fill: #f36f25;fill-opacity: 0.7000000000000001"/>
        </g>


    </svg>
</div>

</body>
</html><?php }
}
