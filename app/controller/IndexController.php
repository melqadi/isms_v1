<?php
ob_start();
session_start();

@$action_crud="";
@$submit_url="";
include_once 'alert_msgs.php';
if(!isset($_GET["mod"])){

if (is_file('../../model/mysql_crud.php')){
  include_once '../../model/mysql_crud.php';
  include_once '../../lib/weekend.php';
}elseif(is_file('./../model/mysql_crud.php')) {

  include './../model/mysql_crud.php';
  include './../lib/weekend.php';
}  else {
    include '../../../model/mysql_crud.php';
    include '../../../lib/weekend.php';

}

}
$uploads_file="../../../assets/uploads/";
$dir="../../../index.php";


 

?>