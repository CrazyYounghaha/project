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
    if(isset($_SESSION['student_id'])) {
        //$userid = $_SESSION['student_id'];
        //$student = $_SESSION['name'];
        $sql = "SELECT * FROM niit_exam";
        $result = mysqli_query($con, $sql);
        $list = "";
        while ($row = mysqli_fetch_array($result)) {
            $list .= "
        <div class=\"row info-content\">
                        <h4>广电总局发布TVOS2.0 华为阿里参与研发</h4>
                        <p>TVOS2.0是在TVOS1.0与华为MediaOS及阿里巴巴YunOS融合的基础上，打造的新一代智能电视操作系统。华为主要承担开发工作，内置的电视购物商城由阿里方面负责。</p>
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
                        <h4>广电总局发布TVOS2.0 华为阿里参与研发</h4>
                        <p>TVOS2.0是在TVOS1.0与华为MediaOS及阿里巴巴YunOS融合的基础上，打造的新一代智能电视操作系统。华为主要承担开发工作，内置的电视购物商城由阿里方面负责。</p>
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