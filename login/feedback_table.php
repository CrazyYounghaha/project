
<?php
session_start();
$id=$_GET['id'];
include_once('conn.php');
Header( "Content-type: utf-8");
$result=mysqli_query($db,"select * from feedback where id=".$id);
if($row=mysqli_fetch_array($result))
{
    $_SESSION['Q1']=$row['Q1'];
    $_SESSION['Q2']=$row['Q2'];
    $_SESSION['Q3']=$row['Q3'];
    $_SESSION['Q4']=$row['Q4'];
    $_SESSION['Q5']=$row['Q5'];
    $_SESSION['Q6']=$row['Q6'];
    $_SESSION['Q7']=$row['Q7'];
    $_SESSION['Q8']=$row['Q8'];
    $_SESSION['Q9']=$row['Q9'];
}
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <style type="text/css">
        body{
            width:80%;
            height:80%;
            font-size:12px;
            background-color:#FCF;
            text-align:center;
        }
        #tab{
            width:100%;
            height:100%;
            font-size:12px;
            font-family:Verdana, Geneva, sans-serif Georgia, "Times New Roman", Times, serif;
            font-weight:bolder;
            background-color:white;
        }
    </style>
</head>
<body>
<table id="tab" cellpadding="1" cellspacing="1" border="1">
    <tr>
        <th rowspan="2">No.</th>
        <th rowspan="2">Questions</th>
        <th rowspan="2">Result</th>
    </tr>
    <tr>
<!--        <th>语文</th>-->
<!--        <th>数学</th>-->
<!--        <th>语文</th>-->
<!--        <th>数学</th>-->
<!--        <th>语文</th>-->
<!--        <th>数学</th>-->
<!--        <th>语文</th>-->
<!--        <th>数学</th>-->
    </tr>

    <tr>
        <th>1</th>
        <th>You are satisfied with the faculty member’s ability to draw participation from the class.</th>
        <th><?php  echo $_SESSION['Q1'];?></th>
    </tr>
    <tr>
        <th>2</th>
        <th>Your sessions begin and end on time.</th>
        <th><?php  echo $_SESSION['Q2'];?></th>
    </tr>
    <tr>
        <th>3</th>
        <th>You are satisfied with the presentation skills of your faculty.</th>
        <th><?php  echo $_SESSION['Q3'];?></th>
    </tr>
    <tr>
        <th>4</th>
        <th>You are given satisfactory answer to your queries related to the course in this module.</th>
        <th><?php  echo $_SESSION['Q4'];?></th>
    </tr>
    <tr>
        <th>5</th>
        <th>The faculty has thorough knowledge of the contents of the module.</th>
        <th><?php echo  $_SESSION['Q5'];?></th>
    </tr>
    <tr>
        <th>6</th>
        <th>You are able to understand what your faculty communicates to you.</th>
        <th><?php  echo $_SESSION['Q6'];?></th>
    </tr>
    <tr>
        <th>7</th>
        <th>You are satisfied with the attitude of your faculty.</th>
        <th><?php  echo $_SESSION['Q7'];?></th>
    </tr>
    <tr>
        <th>8</th>
        <th>You are confident about your grasp of the contents of the module.</th>
        <th><?php  echo $_SESSION['Q8'];?></th>

    </tr>
    <tr>
        <th>9</th>
        <th>You are able to complete all Machine Room/Practice sessions on time.</th>
        <th><?php echo  $_SESSION['Q9'];?></th>

    </tr>
</table>
</body>
</html>
