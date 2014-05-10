<?php 
if (isset($_COOKIE["cit_username"]))
{
	//setcookie("cit_username", $_GET["username"], time()+3600);
}
else
{
	$url = "LoginMis.php";
	echo "<script language='javascript' type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<link rel="stylesheet" href="css/position.css" >
<link href="timebase/css/style.css" rel="stylesheet" type="text/css" />
<title>MIS</title>
</head>

<body>

<?php
	include 'header.php';
?>
<hr />
<hr />

<?php
	include 'mysql_connect.php';		
	$_username = $_COOKIE["cit_username"];						
	$result = mysql_query("SELECT * FROM userinfo WHERE username='$_username'");
	$row = mysql_fetch_array($result);
?>

<div class="container">
	<div class="col-md-2">
    	<img class="img-thumbnail" src="images/news1.jpg" />
    </div>
    
    <div class="col-md-5">
    	<div class="panel panel-primary">
  			<div class="panel-heading">
    			<h3 class="panel-title"><span class="glyphicon glyphicon-info-sign"></span> 基本信息</h3>
  			</div>
  			<div class="panel-body">
    			<blockquote> 姓名<?php echo $row['name'];?></blockquote>
				<blockquote> 班级 <?php echo $row['class'];?></blockquote>
                <blockquote> 政治面貌 <?php echo $row['political_status'];?></blockquote>
                <blockquote> 入党日期 <?php echo $row['pre_conversion_date'];?></blockquote>
                <blockquote> 转正日期 <?php echo $row['conversion_date'];?></blockquote>
  			</div>
		</div>
    </div>
    
    <div class="col-md-5">
    	<div class="panel panel-success">
  			<div class="panel-heading">
    			<h3 class="panel-title"><span class="glyphicon glyphicon-tasks"></span> 递交材料</h3>
  			</div>
  			<div class="panel-body">
    			<blockquote><p class="text-info">入党申请书 <?php if($row['pre_conversion_application']=='yes') echo "已交"; else echo "未交" ?></p></blockquote>
				<blockquote><p class="text-danger">第一季度思想汇报 <?php if($row['first_report']=='yes') echo "已交"; else echo "未交" ?></p></blockquote>
                <blockquote><p class="text-primary">第二季度思想汇报 <?php if($row['second_report']=='yes') echo "已交"; else echo "未交" ?></p></blockquote>
                <blockquote><p class="text-success">第三季度思想汇报 <?php if($row['third_report']=='yes') echo "已交"; else echo "未交" ?></p></blockquote>
                <blockquote><p class="text-warning">第四季度思想汇报 <?php if($row['fourth_report']=='yes') echo "已交"; else echo "未交" ?></p></blockquote>
                <blockquote><p class="text-muted">转正申请书 <?php if($row['conversion_application']=='yes') echo "已交"; else echo "未交" ?></p></blockquote>
  			</div>
		</div>
    </div>
</div>

<div class="container">
	<div class="col-md-2">
    </div>
	<div class="col-md-5">
    	<div class="panel panel-primary">
  			<div class="panel-heading">
    			<h3 class="panel-title"><span class="glyphicon glyphicon-info-sign"></span> 在线考试记录</h3>
  			</div>
  			<div class="panel-body">
    			<blockquote><p class="text-primary">4月&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($row['apr_score']==0) echo "未做"; else echo $row['apr_score']."/30";?></p></blockquote>
				<blockquote><p class="text-primary">5月&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($row['may_score']==0) echo "未做"; else echo $row['may_score']."/30";?></p></blockquote>
                <blockquote><p class="text-primary">6月&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($row['jun_score']==0) echo "未做"; else echo $row['jun_score']."/30";?></p></blockquote>
                <blockquote><p class="text-primary">7月&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($row['jul_score']==0) echo "未做"; else echo $row['jul_score']."/30";?></p></blockquote>
                <blockquote><p class="text-primary">8月&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($row['aug_score']==0) echo "未做"; else echo $row['aug_score']."/30";?></p></blockquote>
                <blockquote><p class="text-primary">9月&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($row['sep_score']==0) echo "未做"; else echo $row['sep_score']."/30";?></p></blockquote>
                <blockquote><p class="text-primary">10月&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($row['oct_score']==0) echo "未做"; else echo $row['oct_score']."/30";?></p></blockquote>
                <blockquote><p class="text-primary">11月&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($row['nov_score']==0) echo "未做"; else echo $row['nov_score']."/30";?></p></blockquote>
                <blockquote><p class="text-primary">12月&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($row['dec_score']==0) echo "未做"; else echo $row['dec_score']."/30";?></p></blockquote>
  			</div>
		</div>
    </div>
</div>


<?php
    include 'get_every_date.php';
?>


<div class="content">
  <div class="wrapper">
    <div class="light"><i></i></div>
    <hr class="line-left">
    <hr class="line-right">
    <div class="main">
      <h1 class="title">我的成长日记</h1>
      <div class="year">
      	<?php $current_year = 2014; ?>
        <h2><a href="#"><?php echo $current_year; ?>年<i></i></a></h2>
        <div class="list">
          <ul> 
	          <?php include 'fill_timebase.php'; ?>
          </ul>
        </div>
      </div>
      <div class="year">
      	<?php $current_year = 2013; ?>
        <h2><a href="#"><?php echo $current_year; ?>年<i></i></a></h2>
        <div class="list">
          <ul>
          	<?php include 'fill_timebase.php'; ?>
          </ul>
        </div>
      </div>
      <div class="year">
      	<?php $current_year = 2012; ?>
        <h2><a href="#"><?php echo $current_year; ?>年<i></i></a></h2>
        <div class="list">
          <ul>
          	<?php include 'fill_timebase.php'; ?>
          </ul>
        </div>
      </div>
      <div class="year">
      	<?php $current_year = 2011; ?>
        <h2><a href="#"><?php echo $current_year; ?>年<i></i></a></h2>
        <div class="list">
          <ul>
	          <?php include 'fill_timebase.php'; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>



<hr />

<script type="text/javascript" src="timebase/js/jquery.min.js"></script>
<script>
	$(".main .year .list").each(function (e, target) {
	    var $target=  $(target),
	        $ul = $target.find("ul");
	    $target.height($ul.outerHeight()), $ul.css("position", "absolute");
	}); 
	$(".main .year>h2>a").click(function (e) {
	    e.preventDefault();
	    $(this).parents(".year").toggleClass("close");
	});
	</script>
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script> 
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>
