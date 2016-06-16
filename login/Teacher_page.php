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
    <script>
        function s_click(obj){
            var num = 0;
            for(var i=0;i<obj.options.length;i++)
            {
                if(obj.options[i].selected==true)
                {

                    num++;
                }
            }
            if(num==1){
                var url = obj.options[obj.selectedIndex].value;
                window.open(url);//这里修改打开连接方式
            }
        }

    </script>

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
            include_once('conn.php');
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
                <li><a><center>Welcome Teacher<u><?php echo "<br>".$_SESSION['username'];?></u> to Training Lab </center></a></li>
                <!--                <li><a><center>Logout</center></a></li>-->
            </ul>
        </nav>
    </div>
    <!-- Main content -->
    <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
            <div class="row">
                <nav class="templatemo-top-nav col-lg-12 col-md-12">
                    <ul class="text-uppercase">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Online Resume</a></li>
                        <li><a href="#" class="active">Feedback</a></li>
                        <li><a href="login.php">Logout</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <br>
        <h1><center><b>Check Feedback</b></center></h1>
        <form action="" class="templatemo-login-form" method="post" enctype="multipart/form-data">
            <div class="templatemo-content-container" style="height: 100px;">
                <div class="templatemo-content-widget white-bg" >
                    <div class="row form-group">
                        <div class="col-lg-6 col-md-6 form-group" style="width: 350px;">
                            <label class="control-label templatemo-block">From</label>
                            <input type="date" style="width: 300px;">
                        </div>
                        <div class="col-lg-6 col-md-6 form-group" style="width: 350px;">
                            <label class="control-label templatemo-block">To</label>
                            <input type="date" style="width: 300px;">
                        </div>
                        <div class="col-lg-6 col-md-6 form-group" style="width: 100px;">
                            <label class="control-label templatemo-block" style="color: white;">haha</label>
                            <button type="submit" name="Search" style="font-size: large;">Search</button>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="templatemo-content-container" style="height: 110px;">
                <div class="templatemo-content-widget white-bg" >
                    <div class="row form-group">
                    <div class="col-lg-6 col-md-6 form-group">
                        <label class="control-label templatemo-block">Student Feedback</label>
                        <select multiple onchange="s_click(this)" name="choice" class="templatemo-multi-select form-control" style="overflow-y: scroll;">
                            <?php
                            include('conn.php');
                            Header( "Content-type: utf-8");
                            $result=mysqli_query($db,"select * from feedback");
                            while($row=mysqli_fetch_array($result))
                            {
                                echo "<option value='feedback_table.php?id=".$row['id']."'>
                                No.".$row['id']."   Batch Number:  ".$row['batch_num']."   Student:  ".$row['user_name'].
                                    "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    </div>
                </div>
            </div>

    </div>
    </form>
    <!-- Main content -->
</div>

<!-- JS -->
<script src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
<script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->

</body>
</html>