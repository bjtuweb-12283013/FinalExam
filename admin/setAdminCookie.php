<?php
	setcookie("cit_permission",$_GET["permission"],time()+3600);
	//超级管理员
	if ($_GET["permission"]==8)
	{
		header("location:superadmin.php");
	}
	//党支部书记
	else if ($_GET["permission"]==1)
	{
		header("location:studentadmin.php");
	}
	//老师
	else if ($_GET["permission"]==2)
	{
		header("location:teacheradmin.php");
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>设置COOKIE</title>
</head>

<body>
</body>
</html>