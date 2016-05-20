<?php
require("config.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>购物车</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<script language="javascript">
	function modify(id,value)
	{
		location.href="shoppingModify.php?id="+id+"&value="+value;
	}
</script>
<?php
	if($_SESSION["user"]=="")
	{
	echo "<script language=javascript>alert('您还没有登陆！请先登陆，如果您还没有注册，请先注册在登陆');window.close()</script>";
		?>
		<?php
		exit();
	}
	$id=$_GET["id"];
	$goods=$_SESSION["goodsArray"];
	if($id<>"")
	{	
		if($goods[$id]=="")
		{
			$goods[$id]=1;
		}
		else
		{
			$goods[$id]=$goods[$id]+1;
		}
		$_SESSION["goodsArray"]=$goods;
	}
?>
        <form action="" method="post" name="frm" id="frm">
          <table width="500" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#CCCCCC">
            <tr>
              <th bgcolor="#FFFFFF">商品编号</th>
              <th bgcolor="#FFFFFF">商品名称</th>
              <th bgcolor="#FFFFFF">商品单价</th>
              <th bgcolor="#FFFFFF">购买数量</th>
              <th bgcolor="#FFFFFF">删除</th>
            </tr>
		<?php
			$sum=0;
			while ($fruit_goods = current($goods))
			{
				$pid=key($goods);
				$sql="select * from book1 where pid=$pid";
				$rs=mysql_query($sql);
				$rows=mysql_fetch_assoc($rs);
		?>
			<tr>
              <td bgcolor="#FFFFFF"><?php echo $pid?></td>
              <td bgcolor="#FFFFFF"><?php echo $rows["bookname"]?></td>
              <td bgcolor="#FFFFFF"><?php echo $rows["price"]?></td>
              <td bgcolor="#FFFFFF"><label>
                <input name="txt<?php echo $pid?>" type="text" id="txt<?php echo $pid?>" size="3" value="<?php echo $fruit_goods?>" />
                <input type="button" name="Submit3" value="修改数量" onclick="modify(<?php echo $pid?>,frm.txt<?php echo $pid?>.value)" />
              </label></td>
              <td bgcolor="#FFFFFF"><input type="button" value="删除" onclick="if(confirm('确定要删除吗?')){location.href='shoppingDel.php?id=<?php echo $pid?>'}" /></td>
            </tr>
		<?php
				$sum+=$rows["price"]*$fruit_goods;
				next($goods);
			}
		?>
            <tr>
              <td colspan="5" align="center" bgcolor="#FFFFFF"><input type="button" name="Submit" value="购买" onclick="location.href='goShopping.php'">
              <input type="button" name="Submit2" value="继续购物" onClick="window.close()"></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#FFFFFF"> 总价：<?php echo $sum?></td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
          </table>
        </form>
</body>
</html>