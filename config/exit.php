<?php
//注销操作
error_reporting(0);
ob_start();
session_start();  //打开会话
session_destroy();
echo "<script>alert('注销成功');location='../index.php';</script>";
?>