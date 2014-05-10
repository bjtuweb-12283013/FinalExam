<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<link rel="stylesheet" href="css/position.css" >
<link rel="stylesheet" type="text/css" href="css/bootstrapcombined.css" />
<link rel="stylesheet" text="text/css" href="css/myfooter.css"/>
<script src="js/modernizr.custom.js"></script>
<title>ExplorerPolicy</title>
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
					
	$id_policy = array("0","1","2","3");
	$title_policy = array("","","","");
	$mainbody_policy = array("","","","");
						
	$result = mysql_query("SELECT * FROM policy");

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
	<h1>&nbsp;&nbsp;&nbsp;&nbsp;<font color="#FFFFFF">政策法规</font></h1>
    <ol class="breadcrumb">
  		<li><a href="index.php">首页</a></li>
  		<li class="active"><a href="#">政策法规</a></li>
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
        <ul class="nav nav-tabs nav-stacked">
          <li><a href='#'>政策法规</a></li>
          <li><a href='#'>思想交流</a></li>
          <li><a href='#'>MIS系统</a></li>
          <li><a href='#'>MIS系统</a></li>
          <li><a href='#'>MIS系统</a></li>
          <li><a href='#'>MIS系统</a></li>
        </ul>
      </div>
    </div>
  </div>
  
<!--
<div style="margin-top:40px">
    <div class="row">
        <div class="col-md-3 sidenav" style="width:260px">
             <ul class="nav nav-pills nav-stacked">
              <li><a href="#"><center>政策法规</center></a></li>
              <li><a href="#"><center>思想交流</center></a></li>
              <li><a href="#"><center>MIS系统</center></a></li>
              <li><a href="#"><center>MIS系统</center></a></li>
              <li><a href="#"><center>MIS系统</center></a></li>
              <li><a href="#"><center>MIS系统</center></a></li>
              <li><a href="#"><center>MIS系统</center></a></li>
            </ul>
         </div>
         <div class="col-md-8">
            <h2 class="page-header"><center><php echo $_title ; ?></center></h2>
            <p><php echo "&nbsp;&nbsp;".$_mainbody;?></p>
        </div>
    </div>
</div>
-->

<?php
	include 'footer.php';
?>

<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script> 
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/borderMenu.js"></script>
</body>
</html>


    <!--
        <nav id="bt-menu" class="bt-menu">
            <a href="#" class="bt-menu-trigger">Menu</a>
            <ul>
            <li><a href="#" class="bt-icon icon-home">Search</a></li>
            <li><a href="#" class="bt-icon icon-calendar">Compose</a></li>
            <li><a href="#" class="bt-icon icon-folder-add">Profile</a></li>
            <li><a href="#" class="bt-icon icon-download">Calendar</a></li>
            <li><a href="#" class="bt-icon icon-window-delete">Download</a></li>
            </ul>
        </nav>
        -->