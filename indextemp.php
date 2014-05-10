<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<link rel="stylesheet" href="css/position.css" >

<title>CitParty</title>
</head>

<body onload="pageInit()">
<?php
	include 'header.php';
?>


<!-- Carousel-->
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

<?php
	include 'mysql_connect.php';				
	//mysql_query("INSERT INTO policy(title, mainbody) VALUES ('Hello', 'HelloWorld')");
	$id_policy = array("0","1","2","3");
	$title_policy = array("","","","");
	$mainbody_policy = array("","","","");
						
	$result = mysql_query("SELECT * FROM policy");

	$i = 0;
	while($row = mysql_fetch_array($result))
	{
		$id_policy[$i] = $row['id'];
		$title_policy[$i] = $row['title'];
		$mainbody_policy[$i] = $row['mainbody'];
		$i++;
	}
?>
<br />
<br />
<br />
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
                <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                <a href="#" class="list-group-item">Morbi leo risus</a>
                <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                <a href="#" class="list-group-item">Vestibulum at eros</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="list-group">
                <a href="#" class="list-group-item active">
                    <span class="glyphicon glyphicon-user"></span> 先锋风采
                </a>
                <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                <a href="#" class="list-group-item">Morbi leo risus</a>
                <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                <a href="#" class="list-group-item">Vestibulum at eros</a>
            </div>
        </div>
    </div>	
</div>
<hr />
<footer>
	&copy;北京交通大学
</footer>


<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script> 
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>

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