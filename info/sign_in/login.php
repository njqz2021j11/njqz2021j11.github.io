<?php
include_once "func.php";
$username=$_POST['username'];
$pwd=$_POST['pwd'];
$sql="select * from test where username='{$username}' and pwd='{$pwd}'";
$res=select(conn("127.0.0.1", "root", "root", "test"), $sql);
if($res==null){
echo 0;
}else{
echo 1;
}
?>
