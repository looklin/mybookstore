<?php
	include_once("config.php");
	$username=$_POST["username"];
	if($username=="")
	{
		echo 2;
		exit();
	}
	$sql="select * from user where username='$username'";
	$rs=mysql_query($sql);
	if(mysql_num_rows($rs)==0)
	{
		echo 0;
	}
	else
	{
		echo 1;
	}
?>
