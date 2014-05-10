<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
						$con = mysql_connect("localhost","root","");
						if (!$con)
						{
							die('Could not connect: ' . mysql_error());
						}
						
						mysql_select_db("citparty", $con);
					
						mysql_query("INSERT INTO policy(title, mainbody) VALUES ('Hello', 'HelloWorld')");
						
						$result = mysql_query("SELECT * FROM policy");
						
						$myname = "";
						while($row = mysql_fetch_array($result))
						{
							$myname = $row['title'];
						}
?>

</body>
</html>