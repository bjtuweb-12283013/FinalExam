<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Handle_Add_News</title>
</head>

<body>
<?php include '../mysql_connect.php';?>
    <?php
		$_title = $_POST['add_title'];
		$_mainbody = $_POST['add_mainbody'];
		$_time = $_POST['add_time'];
		mysql_query("INSERT INTO news(title, mainbody, time) VALUES('$_title','$_mainbody','$_time')");
	?>
</body>
</html>