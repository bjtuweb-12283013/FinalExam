<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ValidAdmin</title>
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
		$url = "setAdminCookie.php"."?permission=".$user_permission;
		echo "<script language='javascript' type='text/javascript'>";
		echo "window.location.href='$url'";
		echo "</script>";
	}
	else
	{
		echo "<script language='javascript' type='text/javascript'>";
		echo "alert('用户名或密码错误，请重新登录');";
		echo "window.location.href='index.php'";
		echo "</script>";
	}
?>
</body>
</html>