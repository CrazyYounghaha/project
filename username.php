<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
//    echo $_SESSION["user_id"];
    $sessionInfoArray = array();
    $sessionInfoArray["student_id"] = $_SESSION["user_id"];
    $sessionInfoArray["name"] = $_SESSION["username"];
//    $sessionInfoArray["password"] = $_SESSION["pwd"];
    $sessionInfoArray["identity"] = $_SESSION["user_identity"];
//    $sessionInfoArray["email"] = $_SESSION["email"];
//    $sessionInfoArray["phone"] = $_SESSION["phone"];
//    $sessionInfoArray["batch"] = $_SESSION["batch"];
    echo json_encode($sessionInfoArray);
    //echo "result";
}
elseif($_SERVER["REQUEST_METHOD"] == "GET")
{
    session_unset();
    session_destroy();
}
//$info = array();
//$info["index"] = "test";
//echo "hjh";
?>