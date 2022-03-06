<?php
include_once "func.php";
$username=$_POST['username'];
$pwd=$_POST['pwd'];
$tel=$_POST['tel'];
$sql="insert test(username,pwd,tel)value('{$username}','{$pwd}','{$tel}')";
$res=insert(conn("127.0.0.1", "root", "root", "test"), $sql);
echo $res;
?>
