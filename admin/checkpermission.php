<?php
	if (!isset($_COOKIE["cit_permission"]))
	{
		echo "<script language='javascript' type='text/javascript'>";
		echo "alert('未登录');";
		echo "window.location.href='index.php'";
		echo "</script>";
	}
?>