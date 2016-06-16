<?php
session_start();
?>
<html>
<body>
<?php
$batch_num=$_POST['batch_num'];
$Date=date('Y-m-d',time());
$name=$_SESSION['username'];
$Q1=$_POST['radio'];
$Q2=$_POST['radio1'];
$Q3=$_POST['radio2'];
$Q4=$_POST['radio3'];
$Q5=$_POST['radio4'];
$Q6=$_POST['radio5'];
$Q7=$_POST['radio6'];
$Q8=$_POST['radio7'];
$Q9=$_POST['radio8'];
include('conn.php');
$sql = "Insert into feedback (batch_num,Datetime,user_name,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9 ) values
('".$batch_num."','".$Date."','".$name."','".$Q1."','".$Q2."','".$Q3."','".$Q4."','".$Q5."','".$Q6."','".$Q7."','".$Q8."','".$Q9."')";
if (mysqli_query($db, $sql)) {
//    弹窗
    echo "Feedback Successfully!" . "<br>";
    echo "<a href='Stu_feedback.php'>Click here jump to personal page</a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
    echo "<a href='Stu_feedback.php'>Submit Again!</a>";
}
?>
</body>
</html>