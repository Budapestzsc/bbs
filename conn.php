<?php 
$conn = @mysql_connect ("localhost","root","") or die("数据库连接出错!"); 
mysql_select_db("bbs",$conn); 
mysql_query("set names 'UTF8'");
header('Content-Type:text/html;charset=UTF-8') 
?>