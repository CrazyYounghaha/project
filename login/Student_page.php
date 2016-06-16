<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Training Lab Personal Page</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">

    <link href='http://fonts.useso.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">

</head>
<body>
<!-- Left column -->
<div class="templatemo-flex-row">
    <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
            <div class="square"></div>
            <h1>Training Lab</h1>
        </header>
        <div class="profile-photo-container">
<!--            从数据库获取头像图片-->
            <?php
            include('conn.php');
            Header( "Content-type: utf-8");
            $result=mysqli_query($db,"select * from niit_".$_SESSION['user_identity']." where name='".$_SESSION['username']."' limit 1");
            if($row=mysqli_fetch_array($result))
            {
                echo "<img src='".$row['user_img']."' alt=\"Profile Photo\" class=\"img-responsive\">";
            }
            ?>
<!--            <img src="picture.php" alt="Profile Photo" class="img-responsive">-->
            <!--<div class="profile-photo-overlay"></div>-->
        </div>
        <nav class="templatemo-left-nav">
            <ul>
                <li><a><center>Welcome <u><?php echo $_SESSION['username'];?></u> to Training Lab </center></a></li>
<!--                <li><a><center>Logout</center></a></li>-->
                <?php
                include('conn.php');
                Header( "Content-type: utf-8");
                $result=mysqli_query($db,"select * from niit_".$_SESSION['user_identity']." where name='".$_SESSION['username']."' limit 1");
                if($row=mysqli_fetch_array($result))
                {
                    echo "<li><a>Chinese Name:"."<br>".$row['Chinese_name']."</a></li>";
                    echo "<li><a>Telephone Number:"."<br>".$row['tele_num']."</a></li>";
                    echo "<li><a>Gender:"."<br>".$row['gender']."</a></li>";
                    echo "<li><a>Date of birth:"."<br>".$row['Date_of_birth']."</a></li>";
                    echo "<li><a>Email Address:"."<br>".$row['Email_address']."</a></li>";
                    if($row['City']) {
                        echo "<li><a>City:" . "<br>" . $row['City'] . "</a></li>";
                    }else{
                        echo "<li><a>City:" . "<br>"."Not completed" . "</a></li>";
                    }
                    if($row['Ob_of_Career']) {
                        echo "<li><a>Objective of Career:" . "<br>" . $row['Ob_of_Career'] . "</a></li>";
                    }else{
                        echo "<li><a>Objective of Career:" . "<br>"."Not completed" . "</a></li>";
                    }
                    if($row['Ac_Degree']) {
                        echo "<li><a>Academic Degree:" . "<br>" . $row['Ac_Degree'] . "</a></li>";
                    }else{
                        echo "<li><a>Academic Degree:" . "<br>"."Not completed" . "</a></li>";
                    }
                    if($row['Train_Lab_Track']) {
                        echo "<li><a>Training Lab Track:" . "<br>" . $row['Train_Lab_Track'] . "</a></li>";
                    }else{
                        echo "<li><a>Training Lab Track:" . "<br>"."Not completed" . "</a></li>";
                    }
                    if($row['IT_Skill']) {
                        echo "<li><a>IT Skills:" . "<br>" . $row['IT_Skill'] . "</a></li>";
                    }else{
                        echo "<li><a>IT Skills:" . "<br>"."Not completed" . "</a></li>";
                    }
                    if($row['Des_Job_Location_1']) {
                        echo "<li><a>Desire Job Location:" . "<br>" . $row['Des_Job_Location_1'] . "</a></li>";
                    }else{
                        echo "<li><a>Desire Job Location:" . "<br>"."Not completed" . "</a></li>";
                    }
                }
                ?>
            </ul>
        </nav>
    </div>
    <!-- Main content -->
    <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
            <div class="row">
                <nav class="templatemo-top-nav col-lg-12 col-md-12">
                    <ul class="text-uppercase">
                        <li><a href="#" class="active">Job</a></li>
                        <li><a href="resume.php">Online Resume</a></li>
                        <li><a href="Stu_feedback.php">Feedback</a></li>
                        <li><a href="../examination.php">Exam</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="templatemo-content-container" id="c_left">
            <div class="templatemo-content-widget white-bg">
            <div class="margin-bottom-10">
                <h2><span>Opening Jobs</span></h2>
            </div>
            <div class="row form-group">
                <!--wz-->
                <div class="wz">
                    <h3><a href="#" title="App_Developing">Android Telephone App</a></h3>
                    <dl>
                        <dt style="float: left;"><img src="images/android.jpg" width="200"  height="123" alt=""></dt>
                        <dd>
                            <p class="dd_text_1">最近看群里聊天聊得最火热的莫过于手机网站和html5这两个词。可能有人会问，这两者有什么关系呢？随着这移动互联
                                网快速发展的时代，尤其是4G时代已经来临的时刻，加上微软对"XP系统"不提供更新补丁、维护的情况下。
                                html5+css3也逐渐的成为新一代web前端技术.....</p>
                            <p class="dd_text_2">
                                <span class="left author">唐豆</span><span class="left sj">DATE:2014-8-9</span>
                                <span class="left fl">Classification :Mobile Terminal Software</span>
                                <span class="left yd"><a href="#" title="Apply">Apply</a></span>
                            <div class="clear"></div>
                            </p>
                        </dd>
                        <div class="clear"></div>
                    </dl>
                </div>
            </div>
                <!--wz end-->
                <!--wz-->
            <div class="row form-group">
                <div class="wz" style="float: left;">
                    <h3><a href="#" title="Html">Html Web Page Designer</a></h3>
                    <dl>
                        <dt style="float: left;"><img src="images/html.jpg" width="200" height="123" alt=""></dt>
                        <dd>
                            <p class="dd_text_1">最近看群里聊天聊得最火热的莫过于手机网站和html5这两个词。可能有人会问，这两者有什么关系呢？随着这移动互联
                                网快速发展的时代，尤其是4G时代已经来临的时刻，加上微软对"XP系统"不提供更新补丁、维护的情况下。
                                html5+css3也逐渐的成为新一代web前端技术.....</p>
                            <p class="dd_text_2">
                                <span class="left author">我山</span><span class="left sj">DATE:2014-8-9</span>
                                <span class="left fl">Classification :Front-end Engineer</span>
                                <span class="left yd"><a href="#" title="Apply">Apply</a></span>
                            <div class="clear"></div>
                            </p>
                        </dd>
                        <div class="clear"></div>
                    </dl>
                </div>
                <br>
            </div>
                <!--wz end-->
                <!--wz-->
            <div class="row form-group">
                <div class="wz" style="float: left;">
                    <h3><a href="#" title="Flash Animation">Flash Animation</a></h3>
                    <dl>
                        <dt style="float: left;"><img src="images/flash.jpg" width="200" height="123" alt=""></dt>
                        <dd>
                            <p class="dd_text_1">最近看群里聊天聊得最火热的莫过于手机网站和html5这两个词。可能有人会问，这两者有什么关系呢？随着这移动互联
                                网快速发展的时代，尤其是4G时代已经来临的时刻，加上微软对"XP系统"不提供更新补丁、维护的情况下。
                                html5+css3也逐渐的成为新一代web前端技术.....</p>
                            <p class="dd_text_2">
                                <span class="left author">我智</span><span class="left sj">DATE:2014-8-9</span>
                                <span class="left fl">Classification :Animation Designer</span>
                                <span class="left yd"><a href="#" title="Apply">Apply</a></span>
                            <div class="clear"></div>
                            </p>
                        </dd>
                        <div class="clear"></div>
                    </dl>
                </div>
            </div>
                <!--wz end-->
                <!--wz-->
            <div class="row form-group">
                <div class="wz" style="float: left;">
                    <h3><a href="#" title="PHP">PHP</a></h3>
                    <dl>
                        <dt style="float: left;"><img src="images/php.jpg" width="200" height="123" alt=""></dt>
                        <dd>
                            <p class="dd_text_1">最近看群里聊天聊得最火热的莫过于手机网站和html5这两个词。可能有人会问，这两者有什么关系呢？随着这移动互联
                                网快速发展的时代，尤其是4G时代已经来临的时刻，加上微软对"XP系统"不提供更新补丁、维护的情况下。
                                html5+css3也逐渐的成为新一代web前端技术.....
                            </p>
                            <p class="dd_text_2">
                                <span class="left author">帅</span><span class="left sj">DATE:2014-8-9</span>
                                <span class="left fl">Classification :Server Developer</span>
                                <span class="left yd"><a href="#" title="Apply">Apply</a></span>
                                <div class="clear"></div>
                            </p>
                        </dd>
                        <div class="clear"></div>
                    </dl>
                </div>
            </div>
                <!--wz end-->
                <!--wz-->
            <div class="row form-group">
                <div class="wz" style="float: left;">
                    <h3><a href="#" title="IOS App">IOS App Developer</a></h3>
                    <dl>
                        <dt style="float: left;"><img src="images/ios.jpg" width="200" height="123" alt=""></dt>
                        <dd>
                            <p class="dd_text_1">最近看群里聊天聊得最火热的莫过于手机网站和html5这两个词。可能有人会问，这两者有什么关系呢？随着这移动互联
                                网快速发展的时代，尤其是4G时代已经来临的时刻，加上微软对"XP系统"不提供更新补丁、维护的情况下。
                                html5+css3也逐渐的成为新一代web前端技术.....</p>
                            <p class="dd_text_2">
                                <span class="left author">我品</span><span class="left sj">DATE:2014-8-9</span>
                                <span class="left fl">Classification :Mobile Terminal Software</span>
                                <span class="left yd"><a href="#" title="Apply">Apply</a></span>
                                <div class="clear"></div>
                            </p>
                        </dd>
                        <div class="clear"></div>
                    </dl>
                </div>
            </div>
                <!--wz end-->
            </div>

        </div>
    </div>
</div>

  <!-- JS -->
  <script src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
  <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->

  </body>
</html>