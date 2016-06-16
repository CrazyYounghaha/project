<?php
/**
 * Created by PhpStorm.
 * User: Y480
 * Date: 2016/1/3
 * Time: 11:04
 */
$db=mysqli_connect("localhost","root","") or die("Mysql connect error".mysqli_error());
mysqli_select_db($db,"test") or die("Database connect error".mysqli_error());
?>