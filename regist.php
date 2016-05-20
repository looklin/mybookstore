<?php 
require_once("config/config.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>注册</title>
<link rel="stylesheet" type="text/css" href="css/reg/regist.css">

</head>

<body>

<?php
	if ($_POST["Submit"])
	{
		$username=$_POST["username"];
		$pwd=$_POST["pwd"];
		$sex=$_POST["sex"];
		$yy=$_POST["yy"];
		$mm=$_POST["mm"];
		$dd=$_POST["dd"];
		$birth="$yy-$mm-$dd";
		$phone=$_POST["phone"];
		$address=$_POST["address"];
		$sql="insert into user(username,password,sex,birth,phone,address) values ('$username','$pwd','$sex','$birth','$phone','$address')";
		mysql_query($sql);
		echo "<script language=javascript>alert('注册成功，请重新登陆一下！');window.location='reg.php'</script>";
		exit();
	}
?>
<div class="main">
<h2>注册</h2>
			<div class="line"><span></span></div>
<form id="frm" name="frm" method="post" action="" onsubmit="return checkForm()" >

      <input name="username" type="text" class="name" id="username" placeholder="请输入用户名" required="required" onkeyup="ajaxSubmit()" />
      <span id="msg" style="color: red;font-weight: 700;position: absolute;top:150px;"></span>
     <input name="pwd" type="password" id="pwd" required="required" placeholder="请输入密码" /><br>
     <input name="pwd2" type="password" id="pwd2" required="required" placeholder="请确认密码" /><br>
      <div style="font-size: 16px; color: #858282;">
      <input style="margin-left: -140px;" type="radio" name="sex" value="男" checked="checked" />
        男
        <input style="margin-left: 140px;" type="radio" name="sex" value="女" />
      女
      </div>
<div  style="font-size: 16px; color: #858282; margin-top: 20px;margin-left: -60px;margin-bottom: 10px;">
   出生年月：
      <select name="yy" id="yy">
        <script  type="text/javascript">
	  	var date=new Date();
		for(i=1955;i<date.getFullYear();i++)
		{
			document.write("<option value="+i+">"+i+"</option>")
		}
	  </script>
      </select>
        年
        <select name="mm" id="mm">
          <script  type="text/javascript">
	   	for(i=1;i<=12;i++)
		{
			if(i<10)
			{
				i="0"+i
			}
			document.write("<option value="+i+">"+i+"</option>")
		}
	   </script>
        </select>
        月
        <select name="dd" id="dd">
          <script  type="text/javascript">
	   	for(i=1;i<=31;i++)
		{
			if(i<10)
			{
				i="0"+i
			}
			document.write("<option value="+i+">"+i+"</option>")
		}
	   </script>
        </select>
      日
      </div>
           
      <input name="phone" type="text" id="phone" placeholder="请输入电话" /><br>
      <input name="address" type="text" id="address" placeholder="请输入地址" /><br>
    <input type="submit" name="Submit" value="提交"  id="submit1" />
    <input type="submit" name="Submit2" value="重置"  id="submit2" />
    <div class="new">
					<h3><a href="index.php">首页</a></h3>
					<h4><a href="reg.php">已有账号，登录</a></h4>
					<div class="clear"></div>
				</div>
 
</form>
</div>
</body>
<script>
	function checkForm()
	{
		
		if(flag==1)
		{
			alert("此用户名已经被注册");
			frm.username.focus()
			return false;
		}
			if(frm.pwd.value!=frm.pwd2.value)
			{
				alert("确认密码和密码要一致")
				frm.pwd2.focus()
				return false;
			}
		var tel_num=(/^[1-3]\d{10}$/)
		if(frm.phone.value.match(tel_num)){
				// alert("正确！")
		}else{
			alert("电话格式错误")
			frm.phone.focus()
			return false;
		}
		if(frm.address.value=="")
		{
			alert("地址不能为空")
			frm.address.focus()
			return false;
		}
	}
	function ajaxSubmit(){
		//获取用户输入
		var username=document.getElementById('username');
		var msg=document.getElementById('msg');
		//创建XMLHttpRequest对象
		var xmlhttp;
		if (window.XMLHttpRequest) 
		{ 
			xmlhttp=new XMLHttpRequest();
		} 
		else {
			xmlhttp=new ActiveXObject("Msxml2.XMLHTTP")
		}
		//创建请求结果处理程序
		//打开连接，true代表异步，false代表同步
		xmlhttp.open("post","config/checkUsername.php",true);
		//当方法为post时需要设置http头
		xmlhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
		//发送数据
		var str="username="+escape(username.value);
		xmlhttp.send(str);
		xmlhttp.onreadystatechange=function(){
			if(xmlhttp.readyState==4)
			{
				if(xmlhttp.status==200)//代表服务器端返回的是正确的结果，这样才有可能正确的解析XML。200表示正常返回；404表示找不到网页；500表示服务器内部错误
				{
					flag=xmlhttp.responseText;
					if(flag==0)
					{
						msg.innerHTML="*恭喜,此用户没有被注册"
						// alert(flag);
					}
					else if(flag==1)
					{
						msg.innerHTML="*抱歉,此用户已经被注册"
					}
					else
					{
						msg.innerHTML="";
						// alert("用户名不能为空");
					}
					// msg.innerHTML='dfsdf';
					// alert(xmlhttp.responseText);
				}
				else
				{	
					alert("数据提交失败");
				}
			}
		}
	}

</script>
</html>
