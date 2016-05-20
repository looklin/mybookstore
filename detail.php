<?php
include("config/config.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<title>天啊</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style type="text/css" media="screen">
    body{
        background: #18bc9c;}
</style>
<body>
<?php
	$id=$_GET["id"];
	$sql="select * from product where product.pid=$id";
	$rs=mysql_query($sql);
	$rows=mysql_fetch_assoc($rs);
?>
<div style="width:600px;height: 500px;background: #373f48;;margin-left: 100px; margin-left: 200px;">
 
<h2 style="margin-left: 250px;">图书类别</h2>
    <h4 style="padding-left: 250px;color: red; border-top:1px solid gray;"><?php echo $rows["proname"]?></h4>
<h2 style="margin-left: 250px;">打包价格</h2>
    <h4 style="padding-left: 250px; color: red;border-top: 1px solid gray;"><?php echo $rows["price"]?></h4>
<h2 style="margin-left: 250px;">图书介绍</h2>
    <p style="padding:10px;"><?php echo $rows["product_contents"]?></p>
 </div>
</body>
</html>
