<center>
<?php 
include("conn.php"); 
if(isset($_POST['submit'])){  
$sql="insert into message (id,user,title,content,lastdate) values ('','$_POST[user]','$_POST[title]','$_POST[content]',now())"; 
mysql_query($sql); 
echo "留言板"; 
} 
?> 
<form action="add.php" method="post"> 
用户:<input type="text" name="user" /><br> 
标题:<input type="text" name="title" /><br /> 
内容:<textarea name="content"></textarea><br /> 
<input type="submit" name="submit" value="提交" /> 
</form>
</center>
