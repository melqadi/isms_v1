<?php
ob_start();
session_start();

@$sec=$_GET['sec'];
@$mod = $_GET['mod'];
@$action = $_GET['action'];
@$action_crud=$_SESSION['action'];
@$controller_name=$mod.'_c.php';
@$id = $_GET['id'];
@$pageId = intval($_GET['page']);

// Medhat El-Qadi
//initialize controller and view and controller file name
$controller_path="./app/controller/";
$view_path="./app/view/";

$alert_msg='<script> alert("index done");</script>';

$controller_file_path=$controller_path. $sec.'/'.$controller_name;
@$submit_url="?sec=".$sec."&mod=".$mod."&action=";

?>
