<?php
 include_once("config/config.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta  charset="utf-8" />
<title>书城首页</title>
<link rel="stylesheet" type="text/css" href="../bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/index/index.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">书城首页</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="waterfall/waterfall.html">瀑布流</a>
                </li>
                <li class="page-scroll">
                    <a href="ebook1.php">电子书</a>
                </li>
                <li class="page-scroll">
                    <a href="culture.php">文化</a>
                </li>
                <li class="page-scroll">
                    <a href="popular.php">流行</a>
                </li>
                <li class="page-scroll">
                    <a href="life.php">生活</a>
                </li>
                <li class="page-scroll">
                    <a href="technology.php">科技</a>
                </li>
                 <li class="page-scroll">
                    <a href="movie.php">电影</a>
                </li> 
<i></i>
                <li class="dropdown">
                <?php if($_SESSION["user"]<>''){echo '
                    <a href=config/exit.php>'.$_SESSION["user"].',退出</a>';}else{?>
                   <a class="dropdown-toggle" href="#" data-toggle="dropdown">登录注册<strong class="caret"></strong></a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="reg.php">登录</a>
                    </li>
                    <li>
                      <a href="regist.php">注册</a>
                    </li>
                  </ul>
                  <?php } ?>
                </li>
        </div>
    </div>
</nav>
<div class="clear" style="clear: both;"></div>
 <div style="background: #0BE093; height: 460px;">
       <div id="myCarousel" class="carousel slide" style="margin-top: 60px; margin-left: 50px;">
           <ol class="carousel-indicators">
                <li data-target='#myCarousel' data-slide-to='0' class="active"></li>
                <li data-target='#myCarousel' data-slide-to='1'></li>
                <li data-target='#myCarousel' data-slide-to='2'></li>
           </ol>
           <div class="carousel-inner">
               <div class="item active">
                   <img src="Images/index/carousel1.PNG" alt="">
                   <div class="carousel-caption">
              <h4 >
                古诗文
              </h4>
              <p>
                赌书消得泼茶香,当时知道是寻常
              </p>
            </div>
               </div>
               <div class="item">
                   <img src="Images/index/carousel2.PNG" alt="">
                   <div class="carousel-caption">
              <h4>
                科技
              </h4>
              <p>
                IT之道,一切从简
              </p>
            </div>
               </div>
               <div class="item">
                   <img src="Images/index/carousel3.PNG" alt="">
                   <div class="carousel-caption">
              <h4>
                流行
              </h4>
              <p>
               A slow sparrow should make an early start.
              </p>
            </div>
               </div>
           </div>
           <a href="#myCarousel" data-slide='prev' class="carousel-control left" title=""></a>
           <a href="#myCarousel" data-slide='next' class="carousel-control right" title=""></a>
       </div>
   </div>

<section style="clear: both;height: 800px; padding-left: 25px;background-color: #0BE093;border: 1px solid black;">
  <?php
  $sql="select * from product";
   $rs=mysql_query($sql);
?>
      <?php
  while($rows=mysql_fetch_assoc($rs))
  {
  ?>

 <div class="book_6" style="height: ">
                <div class="cwrap">
                    <div class="circle c1" style="background-image: url(<?php echo $rows["tu"]?>); ">
                        <div class="info">
                            <div class="title"><?php echo $rows["proname"]?></div>
                            总价:&nbsp;<?php echo $rows["price"]?>
                            <br>
                            <a href="#" onClick="window.open('config/shoppingCar.php?id=<?php echo $rows["pid"]?>','shoppingCar','width=550 height=300')">全部添加到购物车</a>
                            <br>
                            <a href="allbooks.php" title="">查看全部图书</a>
                            <input style="color: black;border: none;background: lime;"type="button" value="查看总览" onClick="window.open('detail.php?id=<?php echo $rows["pid"]?>')" />
                        </div>
                    </div>
                </div>
            </div>


  <?php
  }
?>

   
</section>
<div class="grid_12" id="book_show">
    <li class="book_show01"><img src="images/bookPictures/2.jpg" width="332" height="332" /></li>
    <li class="book_show02"><img src="Images/bookPictures/儒林外史.jpg" width="100" height="165" /></li>
    <li class="book_show03"><img src="Images/bookPictures/外婆外婆.jpg" width="165" height="165" /></li>
    <li class="book_show04"><img src="Images/bookPictures/嘿，三十岁.jpg" width="165" height="165" /></li>
    <li class="book_show05"><img src="images/bookPictures/收山.jpg" width="232" height="165" /></li>
    <li class="book_show06"><img src="images/bookPictures/有鹿来.jpg" width="232" height="332" /></li>
    <li class="book_show07"><img src="Images/bookPictures/人生拿得起放得下.jpg" width="300" height="332" /></li>
    <li class="book_show08"><img src="Images/bookPictures/极简宇宙史.jpg" width="200" height="290" /></li>
    <li class="book_show09"><img src="Images/bookPictures/认同感.jpg" width="332" height="332" /></li>
     <li class="book_show10"><img src="Images/bookPictures/斯通纳.jpg" width="180" height="180" /></li>
    <li class="book_show11"><img src="Images/bookPictures/红楼梦.jpg" width="240" height="290" /></li>
    <li class="book_show12"><img src="Images/bookPictures/解忧杂货店.jpg" width="132" height="232" /></li>
            </div>
 
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="static/ebook1.html">E-book</a></li>
                        <li><a href="static/culture.html">Culture</a></li>
                        <li><a href="static/popular.html">Popular</a></li>
                        <li><a href="static/life.html">Lift</a></li>
                        <li><a href="static/technology.html">Technology</a></li>
                        <li><a href="static/movie.html">Movie</a></li>
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

  
</div>
<div style="clear: both;">
        <p align="center" >
            Copyright &copy;2016 Linnan
        </p>

</footer>

</body>
<script src="Js/jquery-1.11.3.js"></script>
<script src="Js/bootstrap.js"></script>
<script src="Js/share.js"></script>
<script type="text/javascript">
    $('#myCarousel').carousel({
        interval:2000,
    });
</script>

</html>
