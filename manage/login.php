<?php
$id=$_POST["id"];
$pwd=$_POST["pwd"];
if($id=="" && $pwd=="")
header("Location:index.html");
$path="Location:console.php";
$f=file_get_contents("manager.json");
$a=json_decode($f,true);
if(array_key_exists($id,$a)&&md5($pwd)==$a[$id])
{
    header($path);
    setcookie("id",$id);
    setcookie("time",time());
    setcookie("pwd",$pwd);
    exit;
}
echo "error";
?>
