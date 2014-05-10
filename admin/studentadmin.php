<?php
	if (!isset($_COOKIE["cit_permission"]))
	{
		echo "<script language='javascript' type='text/javascript'>";
		echo "alert('未登录');";
		echo "window.location.href='index.php'";
		echo "</script>";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<title>后台管理系统</title>
</head>

<body>
    <div class="container">
        <a href="adduser.php"><h1>添加党员信息</h1></a>
        <a href="modifyuser.php"><h1>修改党员信息</h1></a>
    </div>
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script> 
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>