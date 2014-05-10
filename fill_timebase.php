<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
				$str = "";
				$current_year;
				if ($year_conversion_date == $current_year)
				{
					$str = '<li class="cls highlight">
              				<p class="date">'.$month_conversion_date.'月'.$day_conversion_date.'日</p>
							<p class="intro">我转正啦</p>
							<p class="version">&nbsp;</p>
							<div class="more">
								<p>成为一名正式党员</p>
							</div>
							</li>';
					echo $str;
				}
				if ($year_fourth_report_date == $current_year)
				{
					$str = '<li class="cls highlight">
              				<p class="date">'.$month_fourth_report_date.'月'.$day_fourth_report_date.'日</p>
							<p class="intro">第四季度思想报告</p>
							<p class="version">&nbsp;</p>
							<div class="more">
								<p>我上交了第四季度思想报告</p>
							</div>
							</li>';
					echo $str;
				}
				if ($year_third_report_date == $current_year)
				{
					$str = '<li class="cls highlight">
              				<p class="date">'.$month_third_report_date.'月'.$day_third_report_date.'日</p>
							<p class="intro">第三季度思想报告</p>
							<p class="version">&nbsp;</p>
							<div class="more">
								<p>我上交了第三季度思想报告</p>
							</div>
							</li>';
					echo $str;
				}
				if ($year_second_report_date == $current_year)
				{
					$str = '<li class="cls highlight">
              				<p class="date">'.$month_second_report_date.'月'.$day_second_report_date.'日</p>
							<p class="intro">第二季度思想报告</p>
							<p class="version">&nbsp;</p>
							<div class="more">
								<p>我上交了第二季度思想报告</p>
							</div>
							</li>';
					echo $str;
				}
				if ($year_first_report_date == $current_year)
				{
					$str = '<li class="cls highlight">
              				<p class="date">'.$month_first_repor_date.'月'.$day_first_report_date.'日</p>
							<p class="intro">第一季度思想报告</p>
							<p class="version">&nbsp;</p>
							<div class="more">
								<p>我上交了第一季度思想报告</p>
							</div>
							</li>';
					echo $str;
				}
				if ($year_pre_conversion_date == $current_year)
				{
					$str = '<li class="cls highlight">
              				<p class="date">'.$month_pre_conversion_date.'月'.$day_pre_conversion_date.'日</p>
							<p class="intro">我入党啦</p>
							<p class="version">&nbsp;</p>
							<div class="more">
								<p>成为一名预备党员</p>
							</div>
							</li>';
					echo $str;
				}
			?>
</body>
</html>