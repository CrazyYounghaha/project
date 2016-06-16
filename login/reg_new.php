<?php
session_start();
?>
<html>
<body>
<?php
$identity = $_POST['identity'];
$newname = $_POST['new_username'];
$newpwd = $_POST['newpassword'];
//$c_pwd  = $_POST['confirm-password'];
//echo "$identity"."<br>";
//echo "$newname"."<br>";
//echo "$newpwd"."<br>";
//echo "$c_pwd"."<br>";
include_once('conn.php');
$sql = "Insert into niit_" . $identity . " (name , pwd ) values ('" . $newname . "', '" . $newpwd . "')";
if (mysqli_query($db, $sql)) {
    $_SESSION['username'] = $newname;
    $_SESSION['user_identity'] = $identity;
    echo "Register Successfully!" . "<br>";
    echo "<a href='" . $identity . "_page.php'>Click here jump to personal page</a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
    echo "<a href='register.php'>Register Again!</a>";
}

?>
</body>
</html>