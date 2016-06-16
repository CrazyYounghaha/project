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
			<h1>Exam</h1>
			<h4>Student online test...</h4>
		</hgroup>
	</div>
</div>


<div id="examination">
	<div class="container">
		<div class="row">
<!--			<div class="col-md-4 info-right hidden-xs hidden-sm">-->
<!--				<blockquote>-->
<!--					<h2>热门资讯</h2>-->
<!--				</blockquote>-->
<!--				<div class="container-fluid">-->
<!--					<div class="row">-->
<!--						<div class="col-md-5 col-sm-5 col-xs-5" style="margin: 12px 0; padding: 0">-->
<!--							<img src="img/info2.jpg" class="img-responsive" alt="">-->
<!--						</div>-->
<!--						<div class="col-md-7 col-sm-7 col-xs-7" style="padding-right: 0">-->
<!--							<h4>苹果四寸手机为何要配置强大的A9处理器？</h4>-->
<!--							<p>admin 15 / 10 / 11</p>-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="row">-->
<!--						<div class="col-md-5 col-sm-5 col-xs-5" style="margin: 12px 0; padding: 0">-->
<!--							<img src="img/info1.jpg" class="img-responsive" alt="">-->
<!--						</div>-->
<!--						<div class="col-md-7 col-sm-7 col-xs-7" style="padding-right: 0">-->
<!--							<h4>广电总局发布TVOS2.0 华为阿里参与研发</h4>-->
<!--							<p>admin 15 / 10 / 11</p>-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="row">-->
<!--						<div class="col-md-5 col-sm-5 col-xs-5" style="margin: 12px 0; padding: 0">-->
<!--							<img src="img/info3.jpg" class="img-responsive" alt="">-->
<!--						</div>-->
<!--						<div class="col-md-7 col-sm-7 col-xs-7" style="padding-right: 0">-->
<!--							<h4>六家互联网公司发声明 抵制流量劫持等违法行为</h4>-->
<!--							<p>admin 15 / 10 / 11</p>-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="row">-->
<!--						<div class="col-md-5 col-sm-5 col-xs-5" style="margin: 12px 0; padding: 0">-->
<!--							<img src="img/info2.jpg" class="img-responsive" alt="">-->
<!--						</div>-->
<!--						<div class="col-md-7 col-sm-7 col-xs-7" style="padding-right: 0">-->
<!--							<h4>苹果四寸手机为何要配置强大的A9处理器？</h4>-->
<!--							<p>admin 15 / 10 / 11</p>-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="row">-->
<!--						<div class="col-md-5 col-sm-5 col-xs-5" style="margin: 12px 0; padding: 0">-->
<!--							<img src="img/info1.jpg" class="img-responsive" alt="">-->
<!--						</div>-->
<!--						<div class="col-md-7 col-sm-7 col-xs-7" style="padding-right: 0">-->
<!--							<h4>广电总局发布TVOS2.0 华为阿里参与研发</h4>-->
<!--							<p>admin 15 / 10 / 11</p>-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="row">-->
<!--						<div class="col-md-5 col-sm-5 col-xs-5" style="margin: 12px 0; padding: 0">-->
<!--							<img src="img/info3.jpg" class="img-responsive" alt="">-->
<!--						</div>-->
<!--						<div class="col-md-7 col-sm-7 col-xs-7" style="padding-right: 0">-->
<!--							<h4>六家互联网公司发声明 抵制流量劫持等违法行为</h4>-->
<!--							<p>admin 15 / 10 / 11</p>-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="row">-->
<!--						<div class="col-md-5 col-sm-5 col-xs-5" style="margin: 12px 0; padding: 0">-->
<!--							<img src="img/info2.jpg" class="img-responsive" alt="">-->
<!--						</div>-->
<!--						<div class="col-md-7 col-sm-7 col-xs-7" style="padding-right: 0">-->
<!--							<h4>苹果四寸手机为何要配置强大的A9处理器？</h4>-->
<!--							<p>admin 15 / 10 / 11</p>-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="row">-->
<!--						<div class="col-md-5 col-sm-5 col-xs-5" style="margin: 12px 0; padding: 0">-->
<!--							<img src="img/info1.jpg" class="img-responsive" alt="">-->
<!--						</div>-->
<!--						<div class="col-md-7 col-sm-7 col-xs-7" style="padding-right: 0">-->
<!--							<h4>广电总局发布TVOS2.0 华为阿里参与研发</h4>-->
<!--							<p>admin 15 / 10 / 11</p>-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="row">-->
<!--						<div class="col-md-5 col-sm-5 col-xs-5" style="margin: 12px 0; padding: 0">-->
<!--							<img src="img/info3.jpg" class="img-responsive" alt="">-->
<!--						</div>-->
<!--						<div class="col-md-7 col-sm-7 col-xs-7" style="padding-right: 0">-->
<!--							<h4>六家互联网公司发声明 抵制流量劫持等违法行为</h4>-->
<!--							<p>admin 15 / 10 / 11</p>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
			<div class="col-md-12">
				<div class="container-fluid" style="padding:0;" id="examlist">
					<div class="row info-content">
							<h4>广电总局发布TVOS2.0 华为阿里参与研发</h4>
							<p>TVOS2.0是在TVOS1.0与华为MediaOS及阿里巴巴YunOS融合的基础上，打造的新一代智能电视操作系统。华为主要承担开发工作，内置的电视购物商城由阿里方面负责。</p>
							<a href="examing.html" class="btn btn-danger btn-md pull-right" role="button">Start Test</a>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<footer id="footer">
	<div class="container">
		<p>企业培训 | 合作事宜 | 版权投诉</p>
		<p>苏ICP 备12345678. © 2009-2016 NIIT. Powered by Bootstrap.</p>
	</div>
</footer>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/sendAjax.js"></script>
<script type="text/javascript">
	//alert("start");
//	$(function(){
//		$("#examlist div").children("a").live("click",function(){
//			alert("daf");
<!--			--><?php
//                $_SESSION["exam_id"] = "
//                            <script   language=javascript>
//                                this.id;
//                            </script> ";
//                            echo $_SESSION["exam_id"];
//            ?>
//
//		});
//
//	});
//
//window.onload=function(){
//	var examlist = document.getElementById("examlist");
//	var childDiv = examlist.children;
//	for(var i = 0;i < childDiv.length;i++)
//	{
//		var tDiv = childDiv[i];
//		var aObj = tDiv.lastElementChild;
//		aObj.onclick = function(){
//			alert("click");
//		}
//	}
//}

</script>
</body>
</html>