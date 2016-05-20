<?php
	session_start();
	$pid=$_GET["id"];
	$goods=$_SESSION["goodsArray"];
	unset($goods[$pid]);
	$_SESSION["goodsArray"]=$goods;
	header("location:shoppingCar.php");
?>
