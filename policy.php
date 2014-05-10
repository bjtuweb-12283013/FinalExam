<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<link rel="stylesheet" href="css/position.css" >
<title>政策法规</title>
</head>

<body>
<?php
	include 'header.php';
?>

<div class="headerbg">
    <br />
    <br />
	<h1>&nbsp;&nbsp;CitParty</h1>
</div>


<div class="row">
    <div class="col-md-3" style="width:300px">
        <ul class="nav nav-pills nav-stacked">
          <li><a href="#">政策法规</a></li>
          <li><a href="#">思想交流</a></li>
          <li><a href="#">MIS系统</a></li>
        </ul>
    </div>
    <div class="col-md-9">
    	<h2 class="text-danger">政策法规列表</h2>
        <?php
			include "mysql_connect.php";
			$result = mysql_query("SELECT * FROM policy order by id desc limit 10");
			echo "<table class='table table-hover'>";
			echo "<th>标题</th> <th>时间</th>";
			while($row = mysql_fetch_array($result))
			{
				echo
					"
					<tr>
					<td><a href='explorerpolicy.php?id=$row[id]'>".$row['title']."</a></td> <td>".$row['time']."</td>
					</tr>
					";	
			}
			echo "</table>";
		?>
    </div>
</div>


<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script> 
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>