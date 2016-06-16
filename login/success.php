
<?php
session_start();
?>
<html class="">
<meta charset="utf-8" content="text/html"/>
<head>
    <style class="cp-pen-styles">
        body
        {
            background: #f7f7f7 url("images/successback.jpg") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            font-family: "Roboto";
            font-size: 14px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        body::before
        {
            content: '';
            position: fixed;
            z-index: -1;
            top: 0;
            left: 0;
            background: #34495e; /* IE Fallback */
            background: rgba(52, 73, 94, 0.8);
            width: 100%;
            height: 100%;
        }
        nav
        {
            position: absolute;
            top: 30%;
            left: 50%;
            width: 360px;
            margin: -78px 0 100px -180px;
            -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
        }
        nav ul
        {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        nav ul li
        {
            /* Sub Menu */
        }
        nav ul li a
        {
            display: block;
            background: #3498db;
            padding: 10px 15px;
            color: #fff;
            text-decoration: none;
            -webkit-transition: 0.2s linear;
            -moz-transition: 0.2s linear;
            -ms-transition: 0.2s linear;
            -o-transition: 0.2s linear;
            transition: 0.2s linear;
        }
        nav ul li a:hover
        {
            background: #2980b9;
        }
        nav ul li a .fa
        {
            width: 16px;
            text-align: center;
            margin-right: 5px;
        }
        nav ul li a .badge
        {
            display: inline-block;
            background: #fff; /* IE Fallback */
            background: rgba(255, 255, 255, 0.2);
            padding: 3px 7px;
            color: #fff;
            font-size: 12px;
            font-weight: 800;
        }
        nav ul li ul li a
        {
            background: #444;
            border-left: 4px solid transparent;
            padding: 10px 20px;
        }
        nav ul li ul li a:hover
        {
            background: #333;
            border-left: 4px solid #3498db;
        }
        /* Float Right/Left */
        .right
        {
            float: right;
        }
        .left
        {
            float: left;
        }
    </style>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: Y480
 * Date: 2016/1/5
 * Time: 16:55
 */

$Ch_Name=$_POST['ch_name'];
$Tel_Num=$_POST['tel_num'];
$Gender=$_POST['radio'];
$dfb=$_POST['dfb'];
$Address=$_POST['address'];
$Province=$_POST['province'];
$Career=$_POST['obj_of_Career'];
$AD=$_POST['AD'];
$track=$_POST['trackOptions'];
$Note=$_POST['inputNote'];
$cl1=$_POST['city_love1'];
$cl2=$_POST['city_love2'];
$cl3=$_POST['city_love3'];
$file=$_FILES['ff']['name'];
//$identity=$_POST['re_identity'];
//$newname=$_POST['new_username'];
//$newpwd=$_POST['newpassword'];

include_once('conn.php');
$sql = "Update niit_" . $_SESSION['user_identity'] .
    " set Chinese_name = '" . $Ch_Name . "'
    , tele_num = '" . $Tel_Num . "'
    , gender = '" . $Gender . "'
    , Date_of_birth = '" . $dfb . "'
    , Email_address = '" . $Address . "'
    , City = '" . $Province . "'
    , Ob_of_Career= '" . $Career . "'
    ,Ac_Degree = '" . $Career . "'
    ,Train_Lab_Track ='" . $track . "'
    ,IT_Skill = '" . $Note . "'
    ,Des_Job_Location_1 = '" . $cl1 . "'
    ,Des_Job_Location_2 = '" . $cl2 . "'
    ,Des_Job_Location_3 = '" . $cl3 . "'
    where id = " .$_SESSION['user_id'] .";";
if (mysqli_query($db, $sql)) {
    echo "<p>ok</p>";
}else {
    echo "<p>Error</p>";
}
?>
    <nav class="animated bounceInDown">
        <ul>
            <li class="sub-menu"><a href="#settings">
                <div class="fa fa-gear">
                </div>
                Message Update
                <div class="fa right fa-caret-up">
                </div>
            </a>
                <ul style="display: block;">
                    <li><a href="#"><?php  echo "Name : " . $_POST['ch_name'] ?> </a></li>
                    <li><a href="#"><?php  echo "Phone : " .  $_POST['tel_num'] ?>  </a></li>
                    <li><a href="#"><?php  echo "Gender : " . $_POST['radio'] ?>  </a></li>
                    <li><a href="#"><?php  echo "Date Of Birth" .  $_POST['dfb'] ?>  </a></li>
                    <li><a href="#"><?php  echo  "Emails : " . $_POST['address'] ?>  </a></li>
                    <li><a href="#"><?php  echo  "Adress : " . $_POST['province'] ?> </a></li>
                    <li><a href="#"><?php  echo  "Career : " . $_POST['obj_of_Career'] ?>  </a></li>
                    <li><a href="#"><?php  echo  "Degree : " . $_POST['AD'] ?>  </a></li>
                    <li><a href="#"><?php  echo  "Training Lab Tracks : " . $_POST['trackOptions'] ?>  </a></li>
                    <li><a href="#"><?php  echo  "IT Skills : " . $_POST['inputNote'] ?>  </a></li>
                    <li><a href="#"><?php  echo  "City Love 1 : " . $_POST['city_love1'] ?>  </a></li>
                    <li><a href="#"><?php  echo  "City Love 2 : " . $_POST['city_love2'] ?>  </a></li>
                    <li><a href="#"><?php  echo  "City Love 3 ：" . $_POST['city_love3'] ?>  </a></li>
                </ul>
            </li>
            <li class="sub-menu"><a href="#message">
                <div class="fa fa-question-circle">
                </div>
                <center><p style="font-size: 20px">Update Success!</p></center>
            </a>
            </li>
            <li><a href="#message">
                <div class="fa fa-sign-out">
                </div>
                    <center><a href="Student_page.php"> < Back </a></center></li>
        </ul>
    </nav>
    <script  type="text/javascript"></script>
    <script>
        $('.sub-menu ul').hide();
        $(".sub-menu").click(function () {
            $(this).children("ul").slideToggle("100");
            $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
        }); //@ sourceURL=pen.js
    </script>
</body>
</html>
