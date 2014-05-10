<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- The stylesheet -->
<link rel="stylesheet" href="assets/css/styles.css" />
        
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<title>登录答题系统</title>
</head>

<body>
<div id="main"> 	
        	<h1>登陆答题系统</h1>
        	<form method="post" action="validateAnswer.php" >
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