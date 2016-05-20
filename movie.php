<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>电影</title>
	<link rel="stylesheet" type="text/css" href="css/style/nav/nav.css">
	<link rel="stylesheet" type="text/css" href="Style/standard.css">
</head>
<style type="text/css" media="screen">
body{
	background:url(images/waterfall/water_bg.jpg);
}
div{
	position: relative;
	float: left;
	margin:10px;
	padding-top:40px; 
	/*border: 1px solid blue;*/
	background-color: #7a9a95;
	opacity: 0.6; 
}
#container span{
	position: absolute;
	top: 0px;
	display: block;
	height: 40px;
	/*width: 600px;*/
	text-align: center;
	background-color: #7a9a95;
	cursor: pointer;
	border-bottom:1px solid gray; 
	line-height: 40px;
	}
	#nav ul li:last-child{
		background: red;
	}
</style>
<body>
  <header id="nav">
        <ul>
            <li><a href="index.php">书城首页<span>BOOKSHELF</span></a></li>
            <li><a href="ebook1.php">电子书<span>E-BOOK</span></a></li>
            <li><a href="culture.php">文化<span>CULTURE</span></a></li>
            <li><a href="popular.php">流行<span>POPULAR</span></a></li>
            <li><a href="life.php">生活<span>LIFE</span></a></li>
            <li><a href="technology.php">科技<span>TECHNOLOGY</span></a></li>
            <li><a href="movie.php">电影<span>MORE</span></a></li>
        </ul>
    </header>
    <section id="container">
    	
    
	<div class="box">
		<span style="width: 300px">二流小说家</span>
		<video src="Video/视频.mp4" autobuffer autoloop loop controls height="300px" width="300px" poster="Images/bookPictures/2.jpg"></video></div>
	<div class="box">
		<span style="width: 576px">外婆外婆</span>
		<video src="Video/视频.mp4" autobuffer autoloop loop controls height="400px" width="576px" poster="Images/bookPictures/外婆外婆.jpg"></video></div>
	<div class="box">
		<span style="width: 280px">收山</span>
		<video src="Video/视频.mp4" autobuffer autoloop loop controls height="280px" width="280px" poster="Images/bookPictures/收山.jpg"></video></div>
	<div class="box" style="margin-left: 50px;">
		<span style="width: 200px">儒林外史</span>
		<video src="Video/视频.mp4" autobuffer autoloop loop controls height="200px" width="200px" poster="Images/bookPictures/儒林外史.jpg"></video></div>
		<div class="box" style="position: absolute; top: 420px;">
		<span style="width: 250px">斯通纳</span>
		<video src="Video/视频.mp4" autobuffer autoloop loop controls width="250px" height="200px" poster="Images/bookPictures/斯通纳.jpg"></video></div>
	<div class="box" style="position: absolute; right: 0px;top: 400px">
		<span>人生拿得起放得下</span>
		<video src="Video/视频.mp4" autobuffer autoloop loop controls width="150px" height="100px" poster="Images/bookPictures/人生拿得起放得下.jpg"></video></div>
		<div class="box" style="position: absolute; right: 470px;top: 520px">
		<span style="width: 500px">有鹿来</span>
		<video src="Video/视频.mp4" autobuffer autoloop loop controls width="500px" height="80px" poster="Images/bookPictures/有鹿来.jpg"></video></div>
	<div class="box">
		<span>红楼梦</span>
		<video src="Video/视频.mp4" autobuffer autoloop loop controls poster="Images/bookPictures/红楼梦.jpg"></video></div><div class="box">
		<span>二流小说家</span>
		<video src="Video/视频.mp4" autobuffer autoloop loop controls poster="Images/bookPictures/二流小说家.jpg"></video></div>
	<div class="box">
		<span>二流小说家</span>
		<video src="Video/视频.mp4" autobuffer autoloop loop controls poster="Images/bookPictures/人生拿得起放得下.jpg"></video></div><div class="box">
		<span>二流小说家</span>
		<video src="Video/视频.mp4" autobuffer autoloop loop controls poster="Images/bookPictures/二流小说家.jpg"></video></div>
	<div class="box">
		<span>二流小说家</span>
		<video src="Video/视频.mp4" autobuffer autoloop loop controls poster="Images/bookPictures/人生拿得起放得下.jpg"></video></div>
		</section>
		<audio src="Audio/1 (1).mp3"></audio>
  <audio src="Audio/1 (2).mp3"></audio>
  <audio src="Audio/1 (3).mp3"></audio>
  <audio src="Audio/1 (4).mp3"></audio>
  <audio src="Audio/1 (5).mp3"></audio>
  <audio src="Audio/1 (6).mp3"></audio>
  <audio src="Audio/1 (7).mp3"></audio>
  <audio src="Audio/1 (8).mp3"></audio>
</body>
<script type="text/javascript" src="Js/jquery-1.11.3.js"></script>
<script type="text/javascript" src="Js/nav/nav.js"></script>
<script >
	var vid = document.getElementsByTagName("video")
	for(var i=0;i<vid.length;i++){
		vid[i].index=i;
		vid[i].onplay=function(){
			 $('.box').eq(this.index).css('opacity',1).css('background','#fa8b60');
			 $('#container span').eq(this.index).css('opacity',1).css('background','#fa8b60').css('font-weight',700);
		}
	}
</script>
</html>