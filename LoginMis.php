<?php
	if (isset($_COOKIE["cit_username"]))
	{
		$url = "MIS.php"."?username=".$_COOKIE["cit_username"];
		echo "<script language='javascript' type='text/javascript'>";
		echo "window.location.href='$url'";
		echo "</script>";
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>登录MIS系统</title>
        
        <!-- The stylesheet -->
        <link rel="stylesheet" href="assets/css/styles.css" />
        
        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    
    <body>
        <div id="main"> 	
        	<h1>登陆MIS系统</h1>
        	<form method="post" action="validate.php" >
	    		<input type="text" id="username" name="username" placeholder="UserName" />
        		<input type="password" id="password" name="password" placeholder="Password" />
                <br>
                <br>
                <br>
        		<input type="submit" value="登录" />
        	</form>
        </div>    

		<script src="assets/js/jquery-1.7.2.min.js"></script>
		<script src="assets/js/jquery.complexify.js"></script>

		     
    </body>
</html>