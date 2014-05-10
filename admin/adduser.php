<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<title>添加一名党员信息</title>
</head>

<body>

<div class="container" style="width:600px">
	<h1 class="page-header">增加一名党员信息 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><b>没有可不填写</b></small></h1>
    <form role="form" action="handle_add_user.php" method="post">
      <div class="form-group">
        <label for="username">用户名（姓名小写全拼）</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="用户名（姓名小写全拼）">
      </div>
      <div class="form-group">
        <label for="password">密码</label>
        <input type="text" class="form-control" id="password" name="password" placeholder="密码">
      </div>
      <div class="form-group">
        <label for="name">姓名</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="姓名">
      </div>
      <div class="form-group">
        <label for="class">班级</label>
        <input type="text" class="form-control" id="class" name="class" placeholder="班级">
      </div>
      <div class="form-group">
        <label for="student_id">学号</label>
        <input type="text" class="form-control" id="student_id" name="student_id" placeholder="学号">
      </div>
      <div class="form-group">
        <label for="political_status">政治面貌</label>
        <input type="text" class="form-control" id="political_status" name="political_status" placeholder="政治面貌">
      </div>
      <div class="form-group">
        <label for="pre_conversion_date">发展日期</label>
        <input type="text" class="form-control" id="pre_conversion_date" name="pre_conversion_date" placeholder="xxxx-xx-xx 例：2010-04-18">
      </div>
      <div class="form-group">
        <label for="conversion_date">转正日期</label>
        <input type="text" class="form-control" id="conversion_date" name="conversion_date" placeholder="xxxx-xx-xx 例：2010-04-18">
      </div>

      <h5><b>入党申请书</b><h5>
      <div class="radio">
  		<label for="pre_conversion_application_flag_yes">
    	<input type="radio" name="pre_conversion_application_flag" id="pre_conversion_application_flag_yes" value="yes">已交
  		</label>
      </div>
      <div class="radio">
  		<label for="pre_conversion_application_flag_no">
        <input type="radio" name="pre_conversion_application_flag" id="pre_conversion_application_flag_no" value="no">未交
  		</label>
	  </div>
      
      <h5><b>第一季度思想汇报</b><h5>
      <div class="radio">
  		<label for="first_report_yes">
    	<input type="radio" name="first_report_flag" id="first_report_yes" value="yes">已交
  		</label>
      </div>
      <div class="radio">
  		<label for="first_report_no">
        <input type="radio" name="first_report_flag" id="first_report_no" value="no">未交
  		</label>
	  </div>
      
      <h5><b>第二季度思想汇报</b><h5>
      <div class="radio">
  		<label for="second_report_yes">
    	<input type="radio" name="second_report_flag" id="second_report_yes" value="yes">已交
  		</label>
      </div>
      <div class="radio">
  		<label for="second_report_no">
        <input type="radio" name="second_report_flag" id="second_report_no" value="no">未交
  		</label>
	  </div>
      
      <h5><b>第三季度思想汇报</b><h5>
      <div class="radio">
  		<label for="third_report_yes">
    	<input type="radio" name="third_report_flag" id="third_report_yes" value="yes">已交
  		</label>
      </div>
      <div class="radio">
  		<label for="third_report_no">
        <input type="radio" name="third_report_flag" id="third_report_no" value="no">未交
  		</label>
	  </div>
      
      <h5><b>第四季度思想汇报</b><h5>
      <div class="radio">
  		<label for="fourth_report_yes">
    	<input type="radio" name="fourth_report_flag" id="fourth_report_yes" value="yes">已交
  		</label>
      </div>
      <div class="radio">
  		<label for="fourth_report_no">
        <input type="radio" name="fourth_report_flag" id="fourth_report_no" value="no">未交
  		</label>
	  </div>
      
      <h5><b>转正申请书</b><h5>
      <div class="radio">
  		<label for="conversion_application_yes">
    	<input type="radio" name="conversion_application_flag" id="conversion_application_yes" value="yes">已交
  		</label>
      </div>
      <div class="radio">
  		<label for="fourth_report_no">
        <input type="radio" name="conversion_application_flag" id="conversion_application_no" value="no">未交
  		</label>
	  </div>
  
      <div class="form-group">
        <label for="pre_conversion_application_date">入党申请书提交日期</label>
        <input type="text" class="form-control" id="pre_conversion_application_date" name="pre_conversion_application_date" placeholder="xxxx-xx-xx 例：2010-04-18">
      </div>
      <div class="form-group">
        <label for="first_report_date">第一季度思想汇报提交日期</label>
        <input type="text" class="form-control" id="first_report_date" name="first_report_date" placeholder="xxxx-xx-xx 例：2010-04-18">
      </div>
      <div class="form-group">
        <label for="second_report_date">第二季度思想汇报提交日期</label>
        <input type="text" class="form-control" id="second_report_date" name="second_report_date" placeholder="xxxx-xx-xx 例：2010-04-18">
      </div>
      <div class="form-group">
        <label for="third_report_date">第三季度思想汇报提交日期</label>
        <input type="text" class="form-control" id="third_report_date" name="third_report_date" placeholder="xxxx-xx-xx 例：2010-04-18">
      </div>
      <div class="form-group">
        <label for="fourth_report_date">第四季度思想汇报提交日期</label>
        <input type="text" class="form-control" id="fourth_report_date" name="fourth_report_date" placeholder="xxxx-xx-xx 例：2010-04-18">
      </div>
      <center><button type="submit" class="btn btn-success btn-lg">注册</button></center>
    </form>
</div>


<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>