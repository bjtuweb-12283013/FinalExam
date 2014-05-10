<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<link rel="stylesheet" href="css/position.css" >
<link rel="stylesheet" type="text/css" href="css/bootstrapcombined.css" />
<link rel="stylesheet" text="text/css" href="css/myfooter.css"/>
<link href="css/zzsc.css" rel="stylesheet" type="text/css"></link>
	<script type="text/javascript" src="js/jquery-2.0.0.min.js" ></script>
	<script>
	$(document).ready(function() {
		$('ul.form li a').click(
			function(e) {
				e.preventDefault(); // prevent the default action
				e.stopPropagation; // stop the click from bubbling
				$(this).closest('ul').find('.selected').removeClass('selected');
				$(this).parent().addClass('selected');
			});
	});
	</script>	
<script src="js/modernizr.custom.js"></script>
<title>ExplorerNews</title>
<style type='text/css'>
    body {
      background-color: #CCC;
    }
    #content {
      background-color: #FFF;
      border-radius: 5px;
    }
    #content .main {
      padding: 20px;
    }
    #content .sidebar {
      padding: 10px;
    }
    #content p {
      line-height: 30px;
	  height:auto;
    }
</style>
</head>

<body>

<?php
	include 'mysql_connect.php';	
					
	$id_news = array("0","1","2","3");
	$title_news = array("","","","");
	$mainbody_news = array("","","","");
						
	$result = mysql_query("SELECT * FROM news");

	$_title = "";
	$_mainbody = "";
	while($row = mysql_fetch_array($result))
	{
		if ($_GET['id']==$row['id'])
		{
			$_title = $row['title'];
			$_mainbody = $row['mainbody'];
		}
	}
?>

<?php
	include 'header.php';
?>

<div class="headerbg">
    <br />
    <br />
    <br />
	<h1>&nbsp;&nbsp;&nbsp;&nbsp;<font color="#FFFFFF">党建要闻</font></h1>
    <ol class="breadcrumb">
  		<li><a href="index.php">首页</a></li>
  		<li class="active"><a href="#">党建要闻</a></li>
	</ol>
</div>


<div class='container'>
    <div id='content' class='row-fluid'>
      <div class='span9 main'>
        <h2><?php echo $_title ; ?></h2>
        <p><?php echo "&nbsp;&nbsp;".$_mainbody;?><p> 
      </div>
      <div class='span3 sidebar'>
        <h5>快捷导航</h5>
        <ul class="form">
            <li><a class="profile" href="#"><i class="icon-user"></i>政策法规</a></li>
            <li class="selected"><a class="messages" href="#"><i class="icon-envelope-alt"></i>党建要闻</a></li>
            <li><a class="settings" href="#"><i class="icon-cog"></i>MIS系统</a></li>
            <li><a class="logout" href="#"><i class="icon-signout"></i>在线答题</a></li>
		</ul>
        <!--
        <ul class="nav nav-tabs nav-stacked">
          <li><a href='#'>政策法规</a></li>
          <li><a href='#'>思想交流</a></li>
          <li><a href='#'>MIS系统</a></li>
          <li><a href='#'>MIS系统</a></li>
          <li><a href='#'>MIS系统</a></li>
          <li><a href='#'>MIS系统</a></li>
        </ul>
        -->
      </div>
    </div>
</div>

<?php
	include 'footer.php';
?>

<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script> 
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/borderMenu.js"></script>
</body>
</html>
