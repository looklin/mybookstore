<?php
	include_once("config/config.php");
	 header("Content-Type: text/html; charset=UTF-8");
	 $sql="select tu from book1";
				$rs=mysql_query($sql);
				$a='';
while ($arr=mysql_fetch_array($rs,MYSQL_NUM)) {
	# code...
	// $a[]=$arr;
	$a=''+$a+$arr[0];
	// print_r($arr);
}
echo $a;
			
// 			echo $a[1];	
 			// $sql="select tu from book1 where pid='12'";
				// $rs=mysql_query($sql);
				// $arr=mysql_fetch_array($rs);
				// echo $arr[0];

?>

