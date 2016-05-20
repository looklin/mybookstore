<?php
	require_once("config.php");
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>购物车</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
	if($_SESSION["user"]=="")
	{
		header("location:index.php");
		exit();
	}
	
	$user=$_SESSION["user"];
	$goods=$_SESSION["goodsArray"];
	$time=date("Y-m-d H:i:s");
	$sql="insert into orders (username,flag,time) values ('$user',0,'$time')";
	mysql_query($sql);
	/*$sql="select * from orders order by orderid desc limit 0,1";
	$rs=mysql_query($sql);
	$rows=mysql_fetch_assoc($rs);
	$orderid=$rows["orderid"];*/
	$orderid=mysql_insert_id();   //得到上一次所插入数据的ID
	while($fruit_goods=current($goods))
	{
		$sql="insert into orderdetail (orderid,goodsid,amount) values ($orderid,".key($goods).",".$fruit_goods.")";
		mysql_query($sql);
		next($goods);
	}
	echo "<script language=javascript>alert('购买成功，稍候我们会与您进行联系，谢谢！');window.close()</script>";
?>
</body>
</html>