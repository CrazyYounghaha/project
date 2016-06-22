<?php
/**
 * Created by PhpStorm.
 * User: WangYi
 * Date: 2016/6/15
 * Time: 18:15
 */
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once("mysql_connect.php");
    //$userid = $_SESSION['student_id'];
    //$student = $_SESSION['name'];
    $sql = "SELECT * FROM niit_course";
    $result = mysqli_query($con, $sql);

    $list1 = "<div class=\"container\">
		        <div class=\"row\">";

	$list3 = "
		        </div>
	           </div>";
    $index = 0;
    while ($row = mysqli_fetch_array($result)) {
        $index++;
        $course_id = $row[0];
        $course_name = $row[1];
        $course_description = $row[2];
        $img = $row[3];
        $list1 .= "
			<div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
                <a href=\"detail.php\" id='$course_id' class='course'>
                    <div class=\"thumbnail\">
                        <img src='$img' alt=\"\">
                        <div class=\"caption\">
                            <h4>$course_name</h4>
                            <p>$course_description </p>
                        </div>
                    </div>
                </a>
			</div>";
//        $_SESSION["course_id"] = $course_id ;
//        $_SESSION["course_name"] = $course_name ;
//        $_SESSION["course_description"] = $course_description ;
    }
    $event = "<script>
                var courselist = document.getElementById(\"case\").firstElementChild.firstElementChild;
                var childDiv = courselist.children;
                for(var i = 0;i < childDiv.length;i++)
                {
                    var tDiv = childDiv[i];
                    var aObj = tDiv.firstElementChild;
                    aObj.onclick = function(){
                       this.href = 'detail.php?id='+this.id;
                    }
                }
        </script>";

}
echo $list1.$list3.$event;
?>