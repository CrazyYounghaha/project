<?php
session_start();

$course_id = $_GET['id'];
$_SESSION['course_id'] = $course_id;
include_once("mysql_connect.php");
$sql = "SELECT * FROM niit_course WHERE course_id='$course_id'";
$result = mysqli_query($con, $sql);
if ($row = mysqli_fetch_array($result)){
    $_SESSION['course_name'] = $row[1];
    $_SESSION['course_des'] = $row[2];
    $_SESSION['img'] = $row[3];
}
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
                <li class="active"><a href="course.html"><span class="glyphicon glyphicon-list"></span> Course</a></li>
                <li><a href="examination.php"><span class="glyphicon glyphicon-fire"></span> Exam</a></li>
                <li><a href="about.html"><spand class="glyphicon glyphicon-question-sign"></spand> About us</a></li>
                <li id="login"><a href="login/login.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>
                <li id="signup"><a href="login/register.php"><span class="glyphicon glyphicon-plus-sign"></span> Register</a></li>
                <li class="dropdown" id="nowUser" style="display: none;">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-user"></span><span id="username">UserName</span><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" style="text-align: center">Personal</a></li>
                        <li><a href="" style="text-align: center" id="logout">Log out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="detail">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-2 hidden-xs"></div>
            <div class="col-md-3 col-sm-4">
                <img src="<?php echo $_SESSION['img'] ?>" class="img-responsive center-block" alt="">
            </div>
            <div class="col-md-5 col-sm-4 text">
                <h1 id="">
                    <?php echo $_SESSION['course_name'] ?>
                </h1>

                <p style="">
                    <?php echo $_SESSION['course_des'] ?>
                </p>
                <p><a id="sign" class="btn btn-primary btn-lg" href="<?php echo 'attendance_add.php?c_id='.$_SESSION['course_id'].'&
                c_name='.$_SESSION['course_name'].'&c_des='. $_SESSION['course_des']?>" role="button">Sign</a></p>
<!--                <a role="button" id="ul1" href="#">Sign</a>-->
<!--                <div id="box" class="popBox1" style="display: none;">-->
<!--                    <h4>Sign Successfully!</h4>-->
<!--                    <span onclick="sureDelete(this)">Yes</span><span onclick="cancel(this)">No</span>-->
<!--                </div>-->

            </div>
            <div class="col-md-2 col-sm-2 hidden-xs"></div>
        </div>

    </div>
</div>
<!--<div style="padding: 0 0; margin: 0 0;">-->
    <!--<div class="container-fluid">-->
        <!--<div class="row">-->
                <!--<img src="img/detail_5.jpg" class="img-responsive center-block" alt="">-->
        <!--</div>-->
        <!--<div class="row">-->
            <!--<img src="img/detail_3.jpg" class="img-responsive center-block" alt="">-->
        <!--</div>-->
        <!--<div class="row">-->
            <!--<img src="img/detail_2.jpg" class="img-responsive center-block" alt="">-->
        <!--</div>-->
        <!--<div class="row">-->
            <!--<img src="img/detail_4.jpg" class="img-responsive center-block" alt="">-->
        <!--</div>-->
        <!--<div class="row">-->
            <!--<img src="img/detail_6.jpg" class="img-responsive center-block" alt="">-->
        <!--</div>-->
        <!--<div class="row">-->
            <!--<img src="img/detail_1.jpg" class="img-responsive center-block" alt="">-->
        <!--</div>-->
    <!--</div>-->
<!--</div>-->

<footer id="footer">
    <div class="container">
        <p>Training | Cooperation | Comments</p>
        <p>© 2016 Train Lab. </p>
    </div>
</footer>



<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/sendAjax.js"></script>
<!--<script type="text/javascript">-->
<!--    function sureDelete(obj){-->
<!--        $(obj).parent().hide();-->
<!--    }-->
<!--    function cancel(obj){-->
<!--        $(obj).parent().hide();-->
<!--    }-->
<!--</script>-->

</body>
</html>