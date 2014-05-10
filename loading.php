<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
* {
  margin: 0px;
  padding: 0px;
  border: 0px;
}

html, body {
  min-height: 100%;
}

body {
  background: radial-gradient(#eeeeee, #444444);
}

.loader {
  position: absolute;
  top: 0px;
  bottom: 0px;
  left: 0px;
  right: 0px;
  margin: auto;
  width: 175px;
  height: 100px;
}
.loader span {
  display: block;
  background: #ccc;
  width: 7px;
  height: 10%;
  border-radius: 14px;
  margin-right: 5px;
  float: left;
  margin-top: 25%;
}
.loader span:last-child {
  margin-right: 0px;
}
.loader span:nth-child(1) {
  animation: load 2.5s 1.4s infinite linear;
}
.loader span:nth-child(2) {
  animation: load 2.5s 1.2s infinite linear;
}
.loader span:nth-child(3) {
  animation: load 2.5s 1s infinite linear;
}
.loader span:nth-child(4) {
  animation: load 2.5s 0.8s infinite linear;
}
.loader span:nth-child(5) {
  animation: load 2.5s 0.6s infinite linear;
}
.loader span:nth-child(6) {
  animation: load 2.5s 0.4s infinite linear;
}
.loader span:nth-child(7) {
  animation: load 2.5s 0.2s infinite linear;
}
.loader span:nth-child(8) {
  animation: load 2.5s 0s infinite linear;
}
.loader span:nth-child(9) {
  animation: load 2.5s 0.2s infinite linear;
}
.loader span:nth-child(10) {
  animation: load 2.5s 0.4s infinite linear;
}
.loader span:nth-child(11) {
  animation: load 2.5s 0.6s infinite linear;
}
.loader span:nth-child(12) {
  animation: load 2.5s 0.8s infinite linear;
}
.loader span:nth-child(13) {
  animation: load 2.5s 1s infinite linear;
}
.loader span:nth-child(14) {
  animation: load 2.5s 1.2s infinite linear;
}
.loader span:nth-child(15) {
  animation: load 2.5s 1.4s infinite linear;
}

@keyframes load {
  0% {
    background: #ccc;
    margin-top: 25%;
    height: 10%;
  }

  50% {
    background: #444;
    height: 100%;
    margin-top: 0%;
  }

  100% {
    background: #ccc;
    height: 10%;
    margin-top: 25%;
  }
}

</style>

  <script src="js/prefixfree.min.js"></script>
  <script>
  	function loading()
	{
		setTimeout(function(){
			window.location.href="MIS.php";
			},1000);
	}
  </script>
<title>加载中，请稍后...</title>
</head>

<body onload="loading()">

<div class="loader">
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
</div>

<div style="text-align:center;margin:10px 0; font:normal 14px/24px 'MicroSoft YaHei';">
</div>
</body>
</html>