
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Administrator-->
<!-- * Date: 2015/12/28 0028-->
<!-- * Time: 上午 11:21-->
<!-- */-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">

    <link href='http://fonts.useso.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/templatemo-style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript">
        function Confirm_pwd(){
            var str1=document.getElementById('new_username').value.toString();
            var str2=document.getElementById('newpassword').value.toString();
            var str3=document.getElementById('confirm-password').value.toString();
            if(str1.length<=0 || str2.length<=0 || str3.length<=0){
                alert("Please input username and password!");
                return false;
            }else{
                if(str2 != str3){
                    alert("Two password not the same!");
                    return false;
                }
            }
            return true;
        }
    </script>
</head>
<body class="light-gray-bg">
<div class="templatemo-content-widget templatemo-login-widget white-bg">
    <header class="text-center">
        <div class="square"></div>
        <h1>Register</h1>
    </header>
    <form action="reg_new.php" class="templatemo-login-form" method="post">
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon"><i class=""></i></div>
                <select name="identity" class="form-control">
                    <option >Student</option>
                    <option >Teacher</option>
                    <option >HR</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon"><i class=""></i></div>
                <input type="text" name="new_username" id="new_username" class="form-control" placeholder="Username">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon"><i class=""></i></div>
                <input type="password" class="form-control" id="newpassword" name="newpassword" placeholder="new password">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon"><i class=""></i></div>
                <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="confirm password">
            </div>
        </div>
<!--        <div class="form-group">-->
<!--            <div class="checkbox squaredTwo">-->
<!--                <input type="checkbox" id="c1" name="cc" />-->
<!--                <label for="c1"><span></span>Remember me</label>-->
<!--            </div>-->
<!--        </div>-->
        <div class="form-group">
            <button type="submit" class="templatemo-blue-button width-100" onclick="return Confirm_pwd()">Register</button>
        </div>
        <div class="form-group">
            <a href="login.php"><button type="button" class="templatemo-blue-button width-100">Back to Login</button></a>
        </div>
    </form>
</div>
</body>
</html>