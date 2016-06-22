<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/21
 * Time: 21:08
 */
session_start();

//echo $_SESSION['student_id'];
if($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["c_name"]) && isset($_GET["c_des"])) {
        include_once("mysql_connect.php");
        $sql = "Insert into niit_attendance (time, stu_id, cou_id) values
            ('".date('y-m-d h:m:s',time())."',".$_SESSION['user_id'].",".$_SESSION['course_id'].")";
        if ( mysqli_query($con,$sql)) {
//            $url = "detail.php?id=".$_SESSION['course_id'];
//            echo "<script language=\"javascript\">";
//            echo "location.href=\"$url\"";
//            echo "</script>";
            echo "Sign Successfully!" . "<br>";
            echo "<a href='detail.php?id=".$_SESSION['course_id']."'>Click here jump to personal page</a>";
        }
        else{
            echo mysqli_error($con);
        }
    }
}
?>