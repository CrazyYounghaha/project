<?php
/**
 * Created by PhpStorm.
 * User: Zy
 * Date: 2016/6/13
 * Time: 20:24
 */
$hostname = "localhost";
$database = "test";
$dbusername ="root";
$dbpassword = "";
$con = mysqli_connect($hostname,$dbusername,$dbpassword,$database);
if (!$con) {
    die('Could not connect: ' . mysqli_error());
}
?>