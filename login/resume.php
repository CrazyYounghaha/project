<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Training Lab--Resume</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">

    <link href='http://fonts.useso.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    <script type="text/javascript" src="js/city.js"/>
    <script type="text/javascript">
        function init()
        {
            var city = document.getElementById("city");
            var cityArr = arr[0].split(",");
            for(var i=0;i<cityArr.length;i++)
            {
                city[i]=new Option(cityArr[i],cityArr[i]);
            }
        }

    </script>
    <script type="text/javascript">
        function checkNull(){

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
            <?php
            include_once('conn.php');
            Header( "Content-type: utf-8");
            $result=mysqli_query($db,"select * from niit_".$_SESSION['user_identity']." where name='".$_SESSION['username']."' limit 1");
            if($row=mysqli_fetch_array($result))
            {
                echo "<img src='".$row['user_img']."' alt=\"Profile Photo\" class=\"img-responsive\">";
            }
            ?>
            <!--<div class="profile-photo-overlay"></div>-->
        </div>
        <nav class="templatemo-left-nav">
            <ul>
                <li><a><center>Welcome <u><?php echo $_SESSION['username'];?></u> to Training Lab </center></a></li>
                <?php
                include_once('conn.php');
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
                        <li><a href="Student_page.php">Home</a></li>
                        <li><a href="#" class="active">Online Resume</a></li>
                        <li><a href="Stu_feedback.php">Feedback</a></li>
                        <li><a href="../examination.php">Exam</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="templatemo-content-container">
            <div class="templatemo-content-widget white-bg">
                <h2 class="margin-bottom-10">Resume</h2>
                <!--<p>Here goes another form and form controls.</p>-->
                <form action="success.php" class="templatemo-login-form" method="post" enctype="multipart/form-data">
                    <div class="row form-group">
                        <div class="col-lg-6 col-md-6 form-group">
                            <label for="ch_name">Chinese Name</label>
                            <input type="text" class="form-control" id="ch_name" name="ch_name" placeholder="张扬">
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <label for="tel_num">Telephone Number</label>
                            <input type="text" class="form-control" id="tel_num" name="tel_num" placeholder="123********">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-12 form-group">
                            <div class="margin-right-15 templatemo-inline-block">
                                <input type="radio" name="radio" id="rm" value="Male" checked   >
                                <label for="rm" class="font-weight-400"><span></span>Male</label>
                            </div>
                            <div class="margin-right-15 templatemo-inline-block">
                                <input type="radio" name="radio" id="rfm" value="Female">
                                <label for="rfm" class="font-weight-400"><span></span>Female</label>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6 col-md-6 form-group">
                            <label for="dfb">Date of birth</label>
                            <input type="text" class="form-control" id="dfb" name="dfb" placeholder="1991-01-01">
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <label for="address">Email Address</label>
                            <input type="email" class="form-control" id="address" name="address" placeholder="admin@outlook.com">
                        </div>
                    </div>
<!--                    <div class="row form-group">-->
<!--                        <div class="col-lg-6 col-md-6 form-group">-->
<!--                            <label for="inputCurrentPassword">Current Password</label>-->
<!--                            <input type="password" class="form-control highlight" id="inputCurrentPassword" placeholder="*********************">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row form-group">-->
<!--                        <div class="col-lg-6 col-md-6 form-group">-->
<!--                            <label for="inputNewPassword">New Password</label>-->
<!--                            <input type="password" class="form-control" id="inputNewPassword">-->
<!--                        </div>-->
<!--                        <div class="col-lg-6 col-md-6 form-group">-->
<!--                            <label for="inputConfirmNewPassword">Confirm New Password</label>-->
<!--                            <input type="password" class="form-control" id="inputConfirmNewPassword">-->
<!--                        </div>-->
<!--                    </div>-->

                    <div class="row form-group">
                        <div onload="init()" class="col-lg-6 col-md-6 form-group">
                            <label>Chose City</label>
                            <br>
                            <select id="province" name="province" size=1  onchange="getCity()">
                                <option  >北京</option>
                                <option  >上海</option>
                                <option  >天津</option>
                                <option  >重庆</option>
                                <option  >河北</option>
                                <option  >山西</option>
                                <option  >内蒙古</option>
                                <option  >辽宁</option>
                                <option  >吉林</option>
                                <option  >黑龙江</option>
                                <option  >江苏</option>
                                <option  >浙江</option>
                                <option  >安徽</option>
                                <option  >福建</option>
                                <option  >江西</option>
                                <option  >山东</option>
                                <option  >河南</option>
                                <option  >湖北</option>
                                <option  >湖南</option>
                                <option  >广东</option>
                                <option  >广西</option>
                                <option  >海南</option>
                                <option  >四川</option>
                                <option  >贵州</option>
                                <option  >云南</option>
                                <option  >西藏</option>
                                <option  >陕西</option>
                                <option  >甘肃</option>
                                <option  >宁夏</option>
                                <option  >青海</option>
                                <option  >新疆</option>
                                <option  >香港</option>
                                <option  >澳门</option>
                                <option  >台湾</option>
                            </select>
                            <select id="city" style="width:60px">
                            </select>
                        </div>
                    </div>
                        <!--<div class="col-lg-6 col-md-6 form-group">-->
                            <!--<div class="templatemo-block margin-bottom-5">-->
                                <!--<input type="checkbox" name="emailOptions" id="c1" value="new" checked>-->
                                <!--<label for="c1" class="font-weight-400"><span></span>Email me when new member sign up.</label>-->
                            <!--</div>-->
                            <!--<div class="templatemo-block margin-bottom-5">-->
                                <!--<input type="checkbox" name="emailOptions" id="c2" value="weekly">-->
                                <!--<label for="c2" class="font-weight-400"><span></span>Weekly summary email</label>-->
                            <!--</div>-->
                        <!--</div>-->
                    <div class="row form-group">
                        <div class="col-lg-6 col-md-6 form-group">
                            <label class="control-label templatemo-block">Objective of the Career</label>
                            <select id="obj_of_Career" name="obj_of_Career" class="form-control">
                                <option>Manager</option>
                                <option>CEO</option>
                                <option>CTO</option>
                            </select>
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <label class="control-label templatemo-block">Academic Degree</label>
                            <select class="form-control" id="AD" name="AD">
                                <option >Bachelor's degree</option>
                                <option >Master's degree</option>
                                <option >Doctor's degree</option>
                                <option >Post-Doctorate</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6 col-md-6 form-group">
                            <div>
                                <label class="control-label templatemo-block">Training Lab Tracks</label>
                                <div class="templatemo-block margin-bottom-5">
                                    <input type="radio" name="trackOptions" id="r1" value="Java" checked>
                                    <label for="r1" class="font-weight-400"><span></span>Java Track</label>
                                </div>
                                <div class="templatemo-block margin-bottom-5">
                                    <input type="radio" name="trackOptions" id="r2" value="Dot Net">
                                    <label for="r2" class="font-weight-400"><span></span>Dot Net Track</label>
                                </div>
                                <div class="templatemo-block margin-bottom-5">
                                    <input type="radio" name="trackOptions" id="r3" value="Open Source">
                                    <label for="r3" class="font-weight-400"><span></span>Open Source Track</label>
                                </div>
                                <div class="templatemo-block margin-bottom-5">
                                    <input type="radio" name="trackOptions" id="r4" value="Combined">
                                    <label for="r4" class="font-weight-400"><span></span>Combined Track</label>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-12 form-group">
                                <label class="control-label" for="inputNote">IT Skills</label>
                                <textarea class="form-control" id="inputNote" name="inputNote" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6 col-md-6 form-group">
                            <label>Desired Job Location</label>
                            <br>
                            <input type="text" class="form-control" name="city_love1" id="cl1" placeholder="Guangzhou"/>
                            <input type="text" class="form-control" name="city_love2" id="cl2" placeholder="Shenzhen"/>
                            <input type="text" class="form-control" name="city_love3" id="cl3" placeholder="Shanghai"/>
                        </div>
                    </div>
<!--                    <div class="row form-group">-->
<!--                        <div class="col-lg-12 form-group">-->
<!--                            <div class="margin-right-15 templatemo-inline-block">-->
<!--                                <input type="checkbox" name="server" id="c3" value="" checked>-->
<!--                                <label for="c3" class="font-weight-400"><span></span>Server Status</label>-->
<!--                            </div>-->
<!--                            <div class="margin-right-15 templatemo-inline-block">-->
<!--                                <input type="checkbox" name="member" id="c4" value="">-->
<!--                                <label for="c4" class="font-weight-400"><span></span>Member Status</label>-->
<!--                            </div>-->
<!--                            <div class="margin-right-15 templatemo-inline-block">-->
<!--                                <input type="checkbox" name="expired" id="c5" value="">-->
<!--                                <label for="c5" class="font-weight-400"><span></span>Expired Members</label>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

                    <div class="row form-group">
                        <div class="col-lg-12">
                            <label class="control-label templatemo-block">File Input</label>
<!--                             <input type="file" name="fileToUpload" id="fileToUpload" class="margin-bottom-10"> -->
                            <input type="file" name="ff" id="fileToUpload"
                                   class="filestyle" data-buttonName="btn-primary"
                                   data-buttonBefore="true" data-icon="false">
                            <p>Maximum upload size is 5 MB.</p>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="templatemo-blue-button" onclick="return checkNull()">Submit</button>
                        <button type="reset" class="templatemo-white-button">Reset</button>
                    </div>
                </form>
            </div>
            <footer class="text-right">
                <p>Copyright &copy; 2084 Company Name</p>
            </footer>
        </div>
    </div>
</div>

<!-- JS -->
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>        <!-- jQuery -->
<script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>  <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
<script type="text/javascript" src="js/templatemo-script.js"></script>        <!-- Templatemo Script -->

</body>
</html>
