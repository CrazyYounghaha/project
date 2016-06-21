<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
	<title>Online Education</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>


<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<a href="index.html" class="navbar-brand logo"><img src="img/niit.jpg" alt="NIIT education"></a>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.html"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="course.html"><span class="glyphicon glyphicon-list"></span> Course</a></li>
				<li class="active"><a href="examination.php" id="nav_exam"><span class="glyphicon glyphicon-fire"></span> Exam</a></li>
				<li><a href="about.html"><span class="glyphicon glyphicon-question-sign"></span> About us</a></li>
				<li id="login"><a href="login/login.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>
				<li id="signup"><a href="login/register.php"><span class="glyphicon glyphicon-plus-sign"></span> Register</a></li>
				<li class="dropdown" id="nowUser" style="display: none;">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<span class="glyphicon glyphicon-user"></span>
						<span id="username">UserName</span><span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#" style="text-align: center">Personal</a></li>
						<li><a href="" style="text-align: center" id="logout">Log out</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>

<div class="jumbotron">
	<div class="container">
		<hgroup>
			<h1>Student online test</h1>
<!--			<h4></h4>-->
		</hgroup>
	</div>
</div>


<div id="examination">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="container-fluid" style="padding:0;" id="examlist">
					<div class="row info-content">
						<h4>默认考试</h4>
						<p>测试那个是默认的。</p>
						<a  class="btn btn-danger btn-md pull-right" role="button">Start Test</a>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<footer id="footer">
	<div class="container">
		<p>Training | Cooperation | Comments</p>
		<p>© 2016 Train Lab. </p>
	</div>
</footer>



<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/sendAjax.js"></script>
</body>
</html>