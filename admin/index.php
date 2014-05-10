<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<link href="css/main.css" rel="stylesheet" type="text/css" />
<title>后台管理系统</title>
</head>

<body>

<div class="login">
    <div class="box png">
		<div class="logo png"></div>
		<div class="input">
			<div class="log">
            	<form action="validateAdmin.php" method="post">
				<div class="name">
					<label>用户名</label><input type="text" class="text" id="value_1" placeholder="用户名" name="username" tabindex="1">
				</div>
				<div class="pwd">
					<label>密　码</label><input type="password" class="text" id="value_2" placeholder="密码" name="password" tabindex="2">
					<input type="submit" class="submit" tabindex="3" value="登录">
				</div>
				<div class="tip"></div>
                </form>
			</div>
		</div>
	</div>
    <div class="air-balloon ab-1 png"></div>
	<div class="air-balloon ab-2 png"></div>
    <div class="footer"></div>
</div>

<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/fun.base.js"></script>
<script type="text/javascript" src="js/script.js"></script>


<!--[if IE 6]>
<script src="js/DD_belatedPNG.js" type="text/javascript"></script>
<script>DD_belatedPNG.fix('.png')</script>
<![endif]-->
<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">



<!--
<div class="container">
    <a href="addpolicy.php"><h1>添加政策法规</h1></a>
    <a href="addnews.php"><h1>添加党建要闻</h1></a>
    <a href="#"><h1>添加先锋风采</h1></a>
    <a href="adduser.php"><h1>添加党员信息</h1></a>
    <a href="modifyuser.php"><h1>修改党员信息</h1></a>
    <a href="addquestion.php"><h1>添加题库题目</h1></a>
</div>
-->


<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script> 
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>