<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<link rel="stylesheet" href="css/position.css" >
<link rel="stylesheet" type="text/css" href="css/index.css">
<link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:700" rel="stylesheet" />
<link rel="stylesheet" text="text/css" href="css/myfooter.css"/>
<title>CitParty</title>
</head>

<body onload="pageInit()">
<?php
	include 'header.php';
?>


<div class="banner">
	<div id="kinMaxShow">
		<div>
			<img src="images/banner-1.jpg" />
			<div>
				<div style="width:1000px; margin:auto; position:relative; height:480px">
					<img class="sub_1_1" src="images/sub_1_1.png"  />
					<img class="sub_1_2" src="images/sub_1_2.png" />
					<img class="sub_1_3" src="images/sub_1_3.png"  />
				</div>
			</div>
		</div>
		<div>
			<img src="images/banner-1.jpg" />
			<div>
				<div style="width:1000px; margin:auto; position:relative; height:480px">
					<img class="sub_2_1" src="images/sub_2_1.png"  />
					<img class="sub_2_2" src="images/sub_2_2.png" />
					<img class="sub_2_3" src="images/sub_2_3.png"  />
				</div>
			</div>
		</div>
        <div>
			<img src="images/banner-1.jpg" />
			<div>
				<div style="width:1000px; margin:auto; position:relative; height:480px">
					<img class="sub_2_1" src="images/sub_3_1.png"  />
					<img class="sub_2_2" src="images/sub_3_2.png" />
					<img class="sub_2_3" src="images/sub_3_3.png"  />
				</div>
			</div>
		</div>
	</div>
</div>




<?php
	include 'mysql_connect.php';				

	$id_policy = array("0","1","2","3");
	$title_policy = array("","","","");
	$mainbody_policy = array("","","","");
	
	$id_news = array("0","1","2","3");
	$title_news = array("","","","");
	$mainbody_news = array("","","","");
						
?>
<br />
<br />
<br />
<?php
	$i = 0;
	$res = mysql_query("SELECT * FROM policy order by id desc limit 4");
	while($r = mysql_fetch_array($res))
	{
		$id_policy[$i] = $r['id'];
		$title_policy[$i] = $r['title'];
		$mainbody_policy[$i] = $r['mainbody'];
		$i++;
	}
	
	$i = 0;
	$res = mysql_query("SELECT * FROM news order by id desc limit 4");
	while($r = mysql_fetch_array($res))
	{
		$id_news[$i] = $r['id'];
		$title_news[$i] = $r['title'];
		$mainbody_news[$i] = $r['mainbody'];
		$i++;
	}
?>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="list-group">
                <a href="#" class="list-group-item active">
                    <span class="glyphicon glyphicon-book"></span> 政策法规
                </a>
                <a href="<?php echo 'explorerpolicy.php?'.'id='.$id_policy[0];?>" class="list-group-item"><?php echo $title_policy[0]; ?></a>
                <a href="<?php echo 'explorerpolicy.php?'.'id='.$id_policy[1];?>" class="list-group-item"><?php echo $title_policy[1]; ?></a>
                <a href="<?php echo 'explorerpolicy.php?'.'id='.$id_policy[2];?>" class="list-group-item"><?php echo $title_policy[2]; ?></a>
                <a href="<?php echo 'explorerpolicy.php?'.'id='.$id_policy[3];?>" class="list-group-item"><?php echo $title_policy[3]; ?></a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="list-group">
                <a href="#" class="list-group-item active">
                    <span class="glyphicon glyphicon-bookmark"></span> 党建要闻
                </a>
                <a href="<?php echo 'explorernews.php?'.'id='.$id_news[0];?>" class="list-group-item"><?php echo $title_news[0]; ?></a>
                <a href="<?php echo 'explorernews.php?'.'id='.$id_news[1];?>" class="list-group-item"><?php echo $title_news[1]; ?></a>
                <a href="<?php echo 'explorernews.php?'.'id='.$id_news[2];?>" class="list-group-item"><?php echo $title_news[2]; ?></a>
                <a href="<?php echo 'explorernews.php?'.'id='.$id_news[3];?>" class="list-group-item"><?php echo $title_news[3]; ?></a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="list-group">
                <a href="#" class="list-group-item active">
                    <span class="glyphicon glyphicon-user"></span> 先锋风采
                </a>
                <a href="#" class="list-group-item">暂无</a>
                <a href="#" class="list-group-item">暂无</a>
                <a href="#" class="list-group-item">暂无</a>
                <a href="#" class="list-group-item">暂无</a>
            </div>
        </div>
    </div>	
</div>
<hr />


<?php
	include 'footer.php';
?>



<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script> 
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="js/jquery.kinMaxShow-1.0.min.js" type="text/javascript"></script>
<script src="js/banner.js" type="text/javascript"></script>
</div>
</body>
</html>


<!--
<div class="jumbotron" style="background-image:url(images/sliderbg.jpg)">
	<div class="pos_carousel">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="width:400px"> 

          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner">
            <div class="item active"> <img src="images/nav1.png">
              <div class="carousel-caption"> Hello</div>
            </div>
            <div class="item"> <img src="images/nav2.png">
              <div class="carousel-caption"> ... </div>
            </div>
            <div class="item"> <img src="images/nav3.png">
              <div class="carousel-caption"> ... </div>
            </div>
          </div>

           <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a> 
        </div>
	</div>
</div>
-->






<!-- Carousel
    ================================================== 
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="images/slide-01.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>政策法规</h1>
              <p class="lead">发布党新出台的一些政策法规、活动通知，以及有关入党条件、入党流程、党政学习等方面的资料，宣传党的思想政策，丰富理论知识</p>
              <a class="btn btn-large btn-primary" href="#">Learn More</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/slide-02.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>党建要闻</h1>
              <p class="lead">发布各个党支部的活动新闻，对各党支部和团支部的党建活动进行宣传</p>
              <a class="btn btn-large btn-primary" href="#">Learn More</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/slide-03.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>先锋风采</h1>
              <p class="lead">对本学院各个党支部优秀党员（教师党员、学生党员）的事迹进行风采展示，树立党员先锋榜样，鼓励其他党员积极发挥党员先锋模范作用</p>
              <a class="btn btn-large btn-primary" href="#">Learn More</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/slide-01.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>思想交流</h1>
              <p class="lead">为大家提供交流互动的平台，大家可以在这里发布新闻热点或者各种言论看法；党支部也会就某项活动向大家征集意见，了解大家所求所需，及时为大家提供服务</p>
              <a class="btn btn-large btn-primary" href="#">Learn More</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/slide-02.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>网上党校</h1>
              <p class="lead">提供一个关于党课学习网上答题平台，各位正式党员、预备党员、积极分子定期到网上进行答题，答题结果可作为一个考察对象，可以起到学习巩固党的理论知识的作用</p>
              <a class="btn btn-large btn-primary" href="#">Learn More</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->