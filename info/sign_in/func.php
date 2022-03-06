<?php
function conn($host,$user,$pwd,$dbName,$char="utf8"){
$link=mysqli_connect($host, $user, $pwd, $dbName);
if($link==false){
exit("连接数据库失败，请检查参数是否正确");
}
else{
mysqli_set_charset($link,$char);
return $link;
}   }
function select($link,$sql){
$res=mysqli_query($link, $sql);
if($res==false){
echo "error".mysqli_errno($link);
exit;
}
else{
$arr=mysqli_fetch_all($res);
if($arr){
return $arr;
}
else{
return null;
}  }
mysqli_free_result($arr);
mysqli_close($link);
}
function insert($link,$sql){
$res=mysqli_query($link, $sql);
if($res==false){
echo "error".errno($link);
exit;
}
else{
$row=mysqli_affected_rows($link);
if($row>0){
return 1;
}
else{
return 0;
}  }
mysqli_close($link);
}
?>
