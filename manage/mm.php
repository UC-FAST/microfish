<?php
$c_pwd=$_COOKIE["pwd"];
$id=$_COOKIE["id"];
$new_pwd=$_POST["new_pwd"];
$com=$_POST["confirm"];
$pwd=$_POST["pwd"];

if($c_pwd==$pwd && $com==$new_pwd)
{
    $f=file_get_contents("manager.json");
    $a=json_decode($f,true);
    $a[$id]=md5($new_pwd);
    $js=json_encode($a);
    file_put_contents("manager.json",$js);
    echo "修改成功！";
}
else
{
    echo "error";?>
    <br><a href="mm.html">再试一次</a><?php
    exit;
}
?>
<br><a href="index.html">重新登录</a>
