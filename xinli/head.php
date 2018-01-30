<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>大学生心理健康网</title>
<link rel="alternate" type="application/rss+xml" title="egrappler.com" href="feed/index.html">
<link rel="stylesheet" href="assets/css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript">
function liuyan(){
    
   document.getElementById('xinwen').style.display='none';
    
   document.getElementById('landing').style.display='block';
};

</script>

</head>
<body>
<nav>

  <div class="container">
    <a href='index.php'><h1>Healthy</h1></a>
    <div id="menu" >
      <ul class="toplinks">
        <li><a href="index.php">首页</a></li>
        <li><a href="xinwen.php ">新闻中心</a></li>
        <li><a href="jigou.php">机构设置</a></li>
        <li><a href="aiqing.php">心理测评</a></li>
        <li><a href="luntan.php">心理论坛</a></li>
        <li><a href="shipin.php">视频课堂</a></li>
        <li><a href="zixun.html">校内心理咨询</a></li>

        </ul>  
<div style="font-size: 19px;font-color: white; display: inline;text-align: right;width:200px;height:100px;position: absolute;left:1400px; " >  
<?php 
session_start();
// print_r($_SESSION);
if(!empty($_SESSION['iiid']))//你已经赋值的ID
                            echo ' <a href="">' . $_SESSION['uuser'] . '</a> 
<a href="logout.php">注销</a> ';
                        else
                            echo ' <a href="register.php">注册</a> 
<a href="denglu.php">登陆</a> ';

 ?>
   

 </div>  
    </div>

    </div>
    <a id="menu-toggle" href="#" class=" ">&#9776;</a> </div>
</nav>
