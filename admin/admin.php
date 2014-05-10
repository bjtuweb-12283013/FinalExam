<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<title>分级管理系统</title>
</head>
<body>
<?php
	include '../mysql_connect.php';
	$result = mysql_query("SELECT * FROM userinfo");
 	$login_flag = false;
	$user_permission = "";
	while($row = mysql_fetch_array($result))
  	{
		if ($row['username'] == $_POST["username"]  &&   $row['password'] == $_POST["password"])
		{
			$user_permission = $row['permission'];
			$login_flag = true;
		}
  	}
	
	if ($login_flag==true && $user_permission!=0)
	{
		//超级管理员
		if ($user_permission==8)
		{
			include 'superadmin.php';
		}
		//党支部书记
		else if ($user_permission==1)
		{
			include 'studentadmin.php';
		}
		else if ($user_permission==2)
		{
			include 'teacheradmin.php';
		}
	}
	else
	{
		echo "<script language='javascript' type='text/javascript'>";
		echo "alert('用户名或密码错误，请重新登录');";
		echo "window.location.href='index.php'";
		echo "</script>";
	}

	mysql_close($con);
?>







<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script> 
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>