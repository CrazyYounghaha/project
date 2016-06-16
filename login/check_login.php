<?php
/**
 * Created by PhpStorm.
 * User: Y480
 * Date: 2015/12/31
 * Time: 19:11
 */
session_start();
?>
<html>
<body>
<?php
$user_identity = $_POST['identity'];
$name = $_POST['username'];
$pwd = $_POST['password'];

include_once("conn.php");
$check_query = mysqli_query
($db, "select * from niit_" . $user_identity . " where name='$name' and pwd='$pwd' limit 1");
if ($result = mysqli_fetch_array($check_query)) {
    $_SESSION['username'] = $name;
    $_SESSION['user_identity'] = $user_identity;
    $_SESSION['user_id'] =$result['id'];
    if ($user_identity == "Student") {
        header("Location:Student_page.php");
    } else
        if ($user_identity == "Teacher") {
            header("Location:Teacher_page.php");
        } else if ($user_identity == "HR") {
            header("Location:HR_page.php");
        }
    exit;
} else {
    exit('Username not exist or password is wrong! <a href="javascript:history.back(-1);">Back</a> Try again');
}





//logout
//if($_GET['action'] == "logout"){
////    unset($_SESSION['userid']);
//    unset($_SESSION['username']);
//    echo 'Logout Successfully!Click here <a href="login.php">Login</a>';
//    exit;
//}

?>
</body>
</html>
