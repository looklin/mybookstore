<?php
 include_once("config/config.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>图书</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="css/style/nav/nav.css">
<link rel="stylesheet" type="text/css" href="css/book/book1.css">
<link rel="stylesheet" type="text/css" href="Style/standard.css">
</head>
<style type="text/css" media="screen">
    img{
      /*opacity: 0.5;*/
    }
    img:hover{
      opacity: 1;
    }
    body{
      background: #18bc9c;}
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
            <li><a href="movie.php">电影<span>MOVIE</span></a></li>
        </ul>
    </header>

<section>
	<?php
	if(!$_GET[proid]){
	$sql="select * from book1";
	}else{
	$sql="select * from book1 where proid=".$_GET[proid];
	}
	$rs=mysql_query($sql);
	$pagesize=8;
	$rs=mysql_query($sql);
	$recordcount=mysql_num_rows($rs);
	$pagecount=($recordcount-1)/$pagesize+1;
	$pagecount=(int)$pagecount;
	$pageno=$_GET["pageno"];
	if($pageno=="")
	{
		$pageno=1;
	}
	if($pageno<1)
	{
		$pageno=1;
	}
	if($pageno>$pagecount)
	{
		$pageno=$pagecount;
	}
	$startno=($pageno-1)*$pagesize;
	if(!$_GET[proid]){
	$sql="select * from book1 limit $startno,$pagesize";
	}else{
	$sql="select * from book1 where proid='".$_GET[proid]."' limit $startno,$pagesize";
	}
	$rs=mysql_query($sql);
?>
      <?php
	while($rows=mysql_fetch_assoc($rs))
	{
	?>


  

 <div class="book_6">
                    <img src="<?php echo $rows["tu"]?>" alt="">
                            <div><?php echo $rows["bookname"]?></div>
                            图书价格:&nbsp;&nbsp;<?php echo $rows["price"]?>
                            <br>
                            <a href="#" onClick="window.open('config/shoppingbookscar.php?id=<?php echo $rows["pid"]?>','shoppingbookscar','width=550 height=300')">放入购物车</a>
                            <a href="ebook1.php" title="">查看电子书</a>
                      
               
            </div>


  <?php
  }
?>
	 
</section>
  <footer class="pagenumber" style="clear: both;margin-left: 350px;margin-bottom: 30px;">
            <?php
          	if($pageno==1)
          	{
          	?>
                <a href="index.php">首页</a>
              | 上一页
              | <a href="?proid=<?php echo $_GET[proid] ?>&pageno=<?php echo $pageno+1?>">下一页</a> 
              | <a href="?proid=<?php echo $_GET[proid] ?>&pageno=<?php echo $pagecount?>">末页</a>
              <?php
          	}
          	else if($pageno==$pagecount)
          	{
          	?>
                <a href="?proid=<?php echo $_GET[proid] ?>&pageno=1">首页</a>
              | <a href="?proid=<?php echo $_GET[proid] ?>&pageno=<?php echo $pageno-1?>">上一页</a>
              | 下一页 | 末页
              <?php
          	}
          	else
          	{
          	?>
                <a href="?proid=<?php echo $_GET[proid] ?>&pageno=1">首页</a> 
              | <a href="?proid=<?php echo $_GET[proid] ?>&pageno=<?php echo $pageno-1?>">上一页</a>
              | <a href="?proid=<?php echo $_GET[proid] ?>&pageno=<?php echo $pageno+1?>">下一页</a> 
              | <a href="?proid=<?php echo $_GET[proid] ?>&pageno=<?php echo $pagecount?>">末页</a>
              <?php
          	}
          ?>
              &nbsp;页次：<?php echo $pageno ?>/<?php echo $pagecount ?>页&nbsp;共有<?php echo $recordcount?>条信息
    </footer>
         <footer>
        <div class="foot">
                <div class="row_content" style="position: absolute;left: 200px; ">
                    <h3>UrlLink</h3>
                    <ul>
                        <li><a href="#">Baidu</a></li>
                        <li><a href="#">Douban</a></li>
                        <li><a href="#">Sina</a></li>
                        <li><a href="#">163</a></li>
                        <li><a href="#">Dangdang</a></li>
                        <li><a href="#">Taobao</a></li>
                        <li><a href="#">Sohu</a></li>
                    </ul>
                </div>
                <div class="row_content" style="position: absolute;left: 400px;">
                    <h3>Share</h3>
                    <ul>
                        <li><a href="#">QQ</a></li>
                        <li><a href="#">WeChat</a></li>
                        <li><a href="#">RenRen</a></li>
                        <li><a href="#">Weibo</a></li>
                        <li><a href="#">Zhihu</a></li>
                    </ul>
                </div>
                <div class="row_content" style="position: absolute;left: 600px; ">
                    <h3>Navigator</h3>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">E-book</a></li>
                        <li><a href="#">Culture</a></li>
                        <li><a href="#">Popular</a></li>
                        <li><a href="#">Technology</a></li>
                        <li><a href="#">Lift</a></li>
                        <li><a href="#">Movie</a></li>
                    </ul>
                </div>

                <div class="row_content" style="position: absolute;left: 800px; ">
                    <h3>Contact</h3>
                    <ul>
                        <li><a href="#">ByEmail</a></li>
                        <li><a href="#">ByQQ</a></li>
                        <li><a href="#">ByWeChat</a></li>
                        <li><a href="#">ByWeibo</a></li>
                        <li><a href="#">ByTel</a></li>
                        <li><a href="#">ByLetter</a></li>
                    </ul>

                </div>
                <div class="row_content" style="position: absolute;left: 1000px; ">
                    <h3>LookMore</h3>
                     <ul>
                        <li><a href="#">Wikipedia</a></li>
                        <li><a href="#">YouTube</a></li>
                        <li><a href="#">Quora</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">goodreads</a></li>
                        <li><a href="#">Armenian House</a></li>
                    </ul>
                </div>
        </div>

        <p align="center">
            Copyright &copy;2016 Linnan
        </p>

</footer>
     <audio src="Audio/1 (1).mp3"></audio>
    <audio src="Audio/1 (2).mp3"></audio>
    <audio src="Audio/1 (3).mp3"></audio>
    <audio src="Audio/1 (4).mp3"></audio>
    <audio src="Audio/1 (5).mp3"></audio>
    <audio src="Audio/1 (6).mp3"></audio>
    <audio src="Audio/1 (7).mp3"></audio>
    <audio src="Audio/1 (8).mp3"></audio>
</body>
<script src="Js/jquery-1.11.3.js"></script>
<script src="Js/nav/nav.js"></script>

</html>
