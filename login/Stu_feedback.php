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
                <li><a><center>Welcome <u><?php echo $_SESSION['username'];?></u> to Training Lab </center></a></li>
                <!--                <li><a><center>Logout</center></a></li>-->
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
                        <li><a href="resume.php">Online Resume</a></li>
                        <li><a href="#" class="active">Feedback</a></li>
                        <li><a href="../examination.php">Exam</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <br>
        <h1><center><b>Feedback</b></center></h1>
        <form action="Submit_feedback.php" class="templatemo-login-form" method="post" enctype="multipart/form-data">
        <div class="templatemo-content-container" style="height: 100px;">
                <div class="row form-group">
                    <div class="col-lg-6 col-md-6 form-group">
                        <label class="control-label templatemo-block">Batch Number</label>
                        <select id="batch_num" name="batch_num" class="form-control">
                            <option>Open Source 01</option>
                            <option>Java 01</option>
                            <option>Java 02</option>
                            <option>Java 03</option>
                            <option>Java 04</option>
                            <option>.Net 01</option>
                            <option>.Net 02</option>
                            <option>.Net 03</option>
                            <option>.Net 04</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 form-group">
                        <label class="control-label templatemo-block">Language</label>
                        <select class="form-control" id="language" name="language">
                            <option >English</option>
                            <option >中文</option>
                        </select>
                    </div>
                </div>
        </div>
        <div class="templatemo-content-container" style="height: 110px;">
            <div class="templatemo-content-widget white-bg" style="height: 100px;">
                <label class="control-label templatemo-block">
                    1.You are satisfied with the faculty member's ability to draw participation from the class.</label>
                    <div class="col-lg-12 form-group">
                        <div class="margin-right-15 templatemo-inline-block">
                            <input type="radio" name="radio" id="r1" value="Poor"   >
                            <label for="r1" class="font-weight-400"><span></span>Poor</label>
                        </div>
                        <div class="margin-right-15 templatemo-inline-block">
                            <input type="radio" name="radio" id="r2" value="Average">
                            <label for="r2" class="font-weight-400"><span></span>Average</label>
                        </div>
                        <div class="margin-right-15 templatemo-inline-block">
                            <input type="radio" name="radio" id="r3" value="Satisfactory">
                            <label for="r3" class="font-weight-400"><span></span>Satisfactory</label>
                        </div>
                        <div class="margin-right-15 templatemo-inline-block">
                            <input type="radio" name="radio" id="r4" value="Good">
                            <label for="r4" class="font-weight-400"><span></span>Good</label>
                        </div>
                        <div class="margin-right-15 templatemo-inline-block">
                            <input type="radio" name="radio" id="r5" value="Excellent" checked>
                            <label for="r5" class="font-weight-400"><span></span>Excellent</label>
                        </div>
                    </div>
            </div>
        </div>
        <div class="templatemo-content-container" style="height: 110px;">
            <div class="templatemo-content-widget white-bg" style="height: 100px;">
                <label class="control-label templatemo-block">
                    2.Your sessions begin and end on time.</label>
                <div class="col-lg-12 form-group">
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio1" id="r6" value="Poor"   >
                        <label for="r6" class="font-weight-400"><span></span>Poor</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio1" id="r7" value="Average">
                        <label for="r7" class="font-weight-400"><span></span>Average</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio1" id="r8" value="Satisfactory">
                        <label for="r8" class="font-weight-400"><span></span>Satisfactory</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio1" id="r9" value="Good">
                        <label for="r9" class="font-weight-400"><span></span>Good</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio1" id="r10" value="Excellent" checked>
                        <label for="r10" class="font-weight-400"><span></span>Excellent</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="templatemo-content-container" style="height: 110px;">
            <div class="templatemo-content-widget white-bg" style="height: 100px;">
                <label class="control-label templatemo-block">
                    3.You are satisfied with the presentation skills of your faculty.</label>
                <div class="col-lg-12 form-group">
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio2" id="r11" value="Poor"   >
                        <label for="r11" class="font-weight-400"><span></span>Poor</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio2" id="r12" value="Average">
                        <label for="r12" class="font-weight-400"><span></span>Average</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio2" id="r13" value="Satisfactory">
                        <label for="r13" class="font-weight-400"><span></span>Satisfactory</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio2" id="r14" value="Good">
                        <label for="r14" class="font-weight-400"><span></span>Good</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio2" id="r15" value="Excellent" checked>
                        <label for="r15" class="font-weight-400"><span></span>Excellent</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="templatemo-content-container" style="height: 110px;">
            <div class="templatemo-content-widget white-bg" style="height: 100px;">
                <label class="control-label templatemo-block">
                    4.You are given satisfactory answer to your queries related to the course in this module.</label>
                <div class="col-lg-12 form-group">
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio3" id="r16" value="Poor"   >
                        <label for="r16" class="font-weight-400"><span></span>Poor</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio3" id="r17" value="Average">
                        <label for="r17" class="font-weight-400"><span></span>Average</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio3" id="r18" value="Satisfactory">
                        <label for="r18" class="font-weight-400"><span></span>Satisfactory</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio3" id="r19" value="Good">
                        <label for="r19" class="font-weight-400"><span></span>Good</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio3" id="r20" value="Excellent" checked>
                        <label for="r20" class="font-weight-400"><span></span>Excellent</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="templatemo-content-container" style="height: 110px;">
            <div class="templatemo-content-widget white-bg" style="height: 100px;">
                <label class="control-label templatemo-block">
                    5.The faculty has thorough knowledge of the contents of the module.</label>
                <div class="col-lg-12 form-group">
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio4" id="r21" value="Poor"   >
                        <label for="r21" class="font-weight-400"><span></span>Poor</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio4" id="r22" value="Average">
                        <label for="r22" class="font-weight-400"><span></span>Average</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio4" id="r23" value="Satisfactory">
                        <label for="r23" class="font-weight-400"><span></span>Satisfactory</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio4" id="r24" value="Good">
                        <label for="r24" class="font-weight-400"><span></span>Good</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio4" id="r25" value="Excellent" checked>
                        <label for="r25" class="font-weight-400"><span></span>Excellent</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="templatemo-content-container" style="height: 110px;">
            <div class="templatemo-content-widget white-bg" style="height: 100px;">
                <label class="control-label templatemo-block">
                    6.You are able to understand what your faculty communicates to you.</label>
                <div class="col-lg-12 form-group">
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio5" id="r26" value="Poor"   >
                        <label for="r26" class="font-weight-400"><span></span>Poor</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio5" id="r27" value="Average">
                        <label for="r27" class="font-weight-400"><span></span>Average</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio5" id="r28" value="Satisfactory">
                        <label for="r28" class="font-weight-400"><span></span>Satisfactory</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio5" id="r29" value="Good">
                        <label for="r29" class="font-weight-400"><span></span>Good</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio5" id="r30" value="Excellent" checked>
                        <label for="r30" class="font-weight-400"><span></span>Excellent</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="templatemo-content-container" style="height: 110px;">
            <div class="templatemo-content-widget white-bg" style="height: 100px;">
                <label class="control-label templatemo-block">
                    7.You are satisfied with the attitude of your faculty.</label>
                <div class="col-lg-12 form-group">
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio6" id="r31" value="Poor" >
                        <label for="r31" class="font-weight-400"><span></span>Poor</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio6" id="r32" value="Average">
                        <label for="r32" class="font-weight-400"><span></span>Average</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio6" id="r33" value="Satisfactory">
                        <label for="r33" class="font-weight-400"><span></span>Satisfactory</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio6" id="r34" value="Good">
                        <label for="r34" class="font-weight-400"><span></span>Good</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio6" id="r35" value="Excellent" checked>
                        <label for="r35" class="font-weight-400"><span></span>Excellent</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="templatemo-content-container" style="height: 110px;">
            <div class="templatemo-content-widget white-bg" style="height: 100px;">
                <label class="control-label templatemo-block">
                    8.You are confident about your grasp of the contents of the module.</label>
                <div class="col-lg-12 form-group">
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio7" id="r36" value="Poor"  >
                        <label for="r36" class="font-weight-400"><span></span>Poor</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio7" id="r37" value="Average">
                        <label for="r37" class="font-weight-400"><span></span>Average</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio7" id="r38" value="Satisfactory">
                        <label for="r38" class="font-weight-400"><span></span>Satisfactory</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio7" id="r39" value="Good">
                        <label for="r39" class="font-weight-400"><span></span>Good</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio7" id="r40" value="Excellent" checked>
                        <label for="r40" class="font-weight-400"><span></span>Excellent</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="templatemo-content-container" style="height: 110px;">
            <div class="templatemo-content-widget white-bg" style="height: 100px;">
                <label class="control-label templatemo-block">
                    9.You are able to complete all Machine Room/Practice sessions on time.</label>
                <div class="col-lg-12 form-group">
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio8" id="r41" value="Poor"    >
                        <label for="r41" class="font-weight-400"><span></span>Poor</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio8" id="r42" value="Average">
                        <label for="r42" class="font-weight-400"><span></span>Average</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio8" id="r43" value="Satisfactory">
                        <label for="r43" class="font-weight-400"><span></span>Satisfactory</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio8" id="r44" value="Good">
                        <label for="r44" class="font-weight-400"><span></span>Good</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="radio8" id="r45" value="Excellent" checked>
                        <label for="r45" class="font-weight-400"><span></span>Excellent</label>
                    </div>
                </div>
            </div>
            <div class="form-group text-right">
                <button type="submit" class="templatemo-blue-button">Submit</button>
                <button type="reset" class="templatemo-white-button">Reset</button>
            </div>
        </div>

    </div>
    </form>
</div>

<!-- JS -->
<script src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
<script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->

</body>
</html>