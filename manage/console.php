<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" href="pict/logo.ico" type="image/x-icon">
    <title>Microfish 控制台</title>
    <style>
    a:visited{color:blue;}
    </style>
</head>
<?php
$now_time=time();
if($now_time >= $_COOKIE["time"]+60*5)
{
    echo "登录超时<br>";
    ?><a href="index.html">返回</a>
<?php
    exit;
}
?>
<body>
<p>
<a href=".">退出</a><br>
<a href="oray.php">流量统计</a><br>
<a href="walk.php">网站目录</a><br>
<a href="mm.html">管理员帐户管理</a><br>
</p>

</body>
</html>

