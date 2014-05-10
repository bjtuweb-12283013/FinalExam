<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<title>添加党建要闻</title>
</head>

<body>
<div class="container" style="width:600px">
	<h1 class="page-header">增加一条党建要闻</h1>
    <form role="form" action="handle_add_news.php" method="post">
      <div class="form-group">
        <label for="newstitle">标题</label>
        <input type="text" class="form-control" id="newstitle" name="add_title" placeholder="输入标题">
      </div>
      <div class="form-group">
        <label for="newsmainbody">正文</label>
        <textarea class="form-control" rows="18" id="newsmainbody" name="add_mainbody" placeholder="输入正文">
        </textarea>
      </div>
	  <div class="form-group">
        <label for="nowtime">时间（默认为当前时间，不用修改）</label>
        <input type="text" class="form-control" id="nowtime" name="add_time" value=<?php echo date("Y-m-d")?> placeholder="<?php echo date("Y-m-d") ?>">
	  </div>
      <center><button type="submit" class="btn btn-success btn-lg">Submit</button></center>
    </form>
</div>









<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>