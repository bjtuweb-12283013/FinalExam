<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<title>正在添加新党员信息</title>
</head>

<body>
<?php
	include '../mysql_connect.php';
	$_username = $_POST['username'];
	$_password = $_POST['password'];
	$_name = $_POST['name'];
	$_class = $_POST['class'];
	$_student_id = $_POST['student_id'];
	$_political_status = $_POST['political_status'];
	$_pre_conversion_date = $_POST['pre_conversion_date'];
	$_conversion_date = $_POST['conversion_date'];
	$_pre_conversion_application_flag = $_POST['pre_conversion_application_flag'];
	$_first_report_flag = $_POST['first_report_flag'];
	$_second_report_flag = $_POST['second_report_flag'];
	$_third_report_flag = $_POST['third_report_flag'];
	$_fourth_report_flag = $_POST['fourth_report_flag'];
	$_conversion_application_flag = $_POST['conversion_application_flag'];
	$_pre_conversion_application_date = $_POST['pre_conversion_application_date'];
	$_first_report_date = $_POST['first_report_date'];
	$_second_report_date = $_POST['second_report_date'];
	$_third_report_date = $_POST['third_report_date'];
	$_fourth_report_date = $_POST['fourth_report_date'];
	
	echo $_student_id;
	
	$sql = "INSERT INTO userinfo(
			name,
			class,
			political_status,
			pre_conversion_date,
			conversion_date,
			pre_conversion_application,
			first_report,
			second_report,
			third_report,
			fourth_report,
			conversion_application,
			pre_conversion_application_date,
			first_report_date,
			second_report_date,
			third_report_date,
			fourth_report_date,
			password,
			username) VALUES (
			'$_name',
			'$_class',
			'$_political_status',
			'$_pre_conversion_date',
			'$_conversion_date',
			'$_pre_conversion_application_flag',
			'$_first_report_flag',
			'$_second_report_flag',
			'$_third_report_flag',
			'$_fourth_report_flag',
			'$_conversion_application_flag',
			'$_pre_conversion_application_date',
			'$_first_report_date',
			'$_second_report_date',
			'$_third_report_date',
			'$_fourth_report_date',
			'$_password',
			'$_username')";
	mysql_query($sql) or die('Could not connect: ' . mysql_error());
?>
<div class="container">
<a href="index.php"><h1>添加成功，请返回</h1></a>
</a>
</body>
</html>