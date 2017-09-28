<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../">
    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
    <title><?php echo $title?></title>

    <!-- Bootstrap core CSS -->
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <link href="//v3.bootcss.com/examples/blog/blog.css" rel="stylesheet">


</head>
<body>
<div class="navbar-wrapper">
    <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">GiLiGiLi</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="/index.php/">首页</a></li>
                        <li><a href="">关于我</a></li>
                        <li><a href="/index.php/message">留言</a></li>
                        <li><a href="#about">学习</a></li>
                        <li><a href="#contact">友情链接</a></li>
                        <li><a href="">欢迎:<?php echo $_SESSION['user-name']?></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">设置 <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/index.php/register">立即注册</a></li>
                                <li><a href="/index.php/log">马上登陆</a></li>
                                <li><a href="#">现在注销</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">其它</li>
                                <li><a href="#">将网站分享给好友</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
</div>
