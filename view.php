<?php 
include("config.php"); 
?> 
<table width=500 border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#add3ef"> 
<?php 
$sql="select * from message order by id desc"; 
$query=mysql_query($sql); 
while($row=mysql_fetch_array($query)){ 
?> 
<tr bgcolor="#eff3ff"> 
<td>标题：<?php echo $row[title];?> 用户：<?php echo $row[user];?></td> 
</tr> 
<tr bgColor="#ffffff"> 
<td>内容：<?php echo $row[content];?></td> 
</tr> 
<?php 
} 
?> 
</table>