<?php
/**
 * Created by PhpStorm.
 * User: WangYi
 * Date: 2016/6/14
 * Time: 21:01
 */
    session_start();
    $info = array();
    $info["islogin"] = isset($_SESSION["student_id"])?true:false;

    echo json_encode($info);

?>