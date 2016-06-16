<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">  
	    <title>Login</title>
        <meta name="description" content="">
        <meta name="author" content="templatemo">

        <link href='http://fonts.useso.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/templatemo-style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script type="text/javascript">
            function check_not_null(){
                var str1=document.getElementById('username').value.toString();
                var str2=document.getElementById('password').value.toString();
                if(str1.length<=0){
                    alert("Please input your name!");
                    return false;
                }
                else if(str2.length<=0){
                    alert("Please input your password!");
                    return false
                }
                return true;
            }
        </script>
	</head>
    <body class="light-gray-bg">
    <div class="templatemo-content-widget templatemo-login-widget white-bg">
        <header class="text-center">
            <div class="square"></div>
            <h1>User Login</h1>
        </header>
        <form method="post" action="check_login.php" class="templatemo-login-form">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class=""></i></div>
                    <select name="identity" class="form-control">
                        <option name="Student">Student</option>
                        <option name="Teacher">Teacher</option>
                        <option name="HR">HR</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class=""></i></div>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class=""></i></div>
                    <input type="password" name="password" id="password" class="form-control" placeholder="******">
                </div>
            </div>
<!--            <div class="form-group">-->
<!--                <div class="checkbox squaredTwo">-->
<!--                    <input type="checkbox" id="c1" name="cc" />-->
<!--                    <label for="c1"><span></span>Remember me</label>-->
<!--                </div>-->
<!--            </div>-->
            <div class="form-group">
                <button type="submit" class="templatemo-blue-button width-100"
                        onclick="return check_not_null()">Login</button>
            </div>
        </form>
    </div>
    <div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
        <p>Not a registered user yet? <strong><a href="register.php" class="blue-text">Sign up now!</a></strong></p>
    </div>
    </body>
</html>


