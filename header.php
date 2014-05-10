<?php
if(isset($_COOKIE["cit_username"]))
{
	//echo $_COOKIE["cit_username"];
	$target_url = "MIS.php?username=".$_COOKIE["cit_username"];
	$str_header = '<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation"> 
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="index.php">计算机学院党支部</a> </div>
      
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
		  <li class="active"><a href="index.php">首页</a></li>
          <li class="active"><a href="policy.php">政策法规</a></li>
          <li class="active"><a href="partynews.php">党建要闻</a></li>
          <li class="active"><a href="partynews.php">思想交流</a></li>
          <li class="active"><a href="LoginMis.php">MIS系统</a></li>
          <li class="dropdown active"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">网上党校 <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="leadereamil.php">书记信箱(不能使用)</a></li>
              <li class="divider"></li>
              <li><a href="OnlineAnswer.php">在线答题</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">'.
          '<li><a href='.$target_url.'>'.$_COOKIE["cit_username"].'</a></li>'.
		  '<li><a href="logout.php">退出</a></li>'.
        '</ul>
      </div>
	</div>
  <!-- /.navbar-collapse --> 
</nav>';
}
else
{
	$str_header = 
'<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation"> 
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="index.php">计算机学院党支部</a> </div>
      
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
		  <li class="active"><a href="index.php">首页</a></li>
          <li class="active"><a href="policy.php">政策法规</a></li>
          <li class="active"><a href="partynews.php">党建要闻</a></li>
          <li class="active"><a href="LoginMis.php">MIS系统</a></li>
          <li class="dropdown active"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">网上党校 <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="leadereamil.php">书记信箱（不能使用）</a></li>
              <li class="divider"></li>
              <li><a href="OnlineAnswer.php">在线答题</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="LoginMis.php">登录</a></li>
        </ul>
      </div>
	</div>
  <!-- /.navbar-collapse --> 
</nav>';
}
	echo $str_header;
?>