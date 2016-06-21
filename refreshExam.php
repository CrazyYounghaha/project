<?php
/**
 * Created by PhpStorm.
 * User: WangYi
 * Date: 2016/6/14
 * Time: 16:05
 */
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once("mysql_connect.php");
    if(isset($_SESSION['user_id'])) {
        //$userid = $_SESSION['student_id'];
        //$student = $_SESSION['name'];
        $sql = "SELECT * FROM niit_exam";
        $result = mysqli_query($con, $sql);
        $list = "";
        while ($row = mysqli_fetch_array($result)) {
            $list .= "
        <div class=\"row info-content\">
                        <h4>".$row[1]."</h4>
                        <p>".$row[2]."</p>
                        <a href=\"examing.html\" class=\"btn btn-danger btn-md pull-right\" role=\"button\">Start Test</a>
                </div>";

        }
        mysqli_close($con);
        echo $list;
    }else{
        /*
        $url = "login/login.php";
        echo "<script language=\"javascript\">";
        echo "location.href=\"$url\"";
        echo "</script>";
        */
        $sql = "SELECT * FROM niit_exam";
        $result = mysqli_query($con, $sql);

        $list = "";
        while ($row = mysqli_fetch_array($result)) {
            $examid = $row[0];
            $list .= "
                <div class=\"row info-content\">
                        <h4>还没登录能看到的考试内容</h4>
                        <p>小婊砸一定是还没有登录。</p>
                        <a href=\"confirmExam.html#".$examid."\" class=\"btn btn-danger btn-md pull-right\" role=\"button\" id=\"".$examid.
                        "\">Start Test</a>
                </div>";

        }

        $event = "<script>
           // window.onload=function(){
                var examlist = document.getElementById(\"examlist\");
                var childDiv = examlist.children;
                for(var i = 0;i < childDiv.length;i++)
                {
                    var tDiv = childDiv[i];
                    var aObj = tDiv.lastElementChild;
                    aObj.onclick = function(){
                        alert(\"click\");
                    }
                }
           // }
        </script>";
        mysqli_close($con);
        echo $list.$event;
    }
}

?>