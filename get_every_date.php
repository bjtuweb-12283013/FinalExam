<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
    //分别取得入党日期的年月日
	$str_pre_conversion_date = $row['pre_conversion_date'];
	$year_pre_conversion_date = substr($str_pre_conversion_date, 0, 4);
	$month_pre_conversion_date = substr($str_pre_conversion_date, 5, 2);
	$day_pre_conversion_date = substr($str_pre_conversion_date, 8, 2);
	
	//分别取得转正日期的年月日
	$str_conversion_date = $row['conversion_date'];
	$year_conversion_date = substr($str_conversion_date, 0, 4);
	$month_conversion_date = substr($str_conversion_date, 5, 2);
	$day_conversion_date = substr($str_conversion_date, 8, 2);
	
	//分别取得第一思想汇报日期的年月日
	$str_first_report_date = $row['first_report_date'];
	$year_first_report_date = substr($str_first_report_date, 0, 4);
	$month_first_repor_date = substr($str_first_report_date, 5, 2);
	$day_first_report_date = substr($str_first_report_date, 8, 2);
	
	//分别取得第二思想汇报日期的年月日
	$str_second_report_date = $row['second_report_date'];
	$year_second_report_date = substr($str_second_report_date, 0, 4);
	$month_second_report_date = substr($str_second_report_date, 5, 2);
	$day_second_report_date = substr($str_second_report_date, 8, 2);
	
	//分别取得第三思想汇报日期的年月日
	$str_third_report_date = $row['third_report_date'];
	$year_third_report_date = substr($str_third_report_date, 0, 4);
	$month_third_report_date = substr($str_third_report_date, 5, 2);
	$day_third_report_date = substr($str_third_report_date, 8, 2);
	
	//分别取得第四思想汇报日期的年月日
	$str_fourth_report_date = $row['fourth_report_date'];
	$year_fourth_report_date = substr($str_fourth_report_date, 0, 4);
	$month_fourth_report_date = substr($str_fourth_report_date, 5, 2);
	$day_fourth_report_date = substr($str_fourth_report_date, 8, 2);
	
	$str = "";
?>
</body>
</html>