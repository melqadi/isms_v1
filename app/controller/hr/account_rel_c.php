<?php

if(!isset($_GET["mod"])){  include '../IndexController.php';     } 
echo "hi i am here";
$db = new Database();
$db->connect();
$db->select("nationalities"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();

$dbb = new Database();
$dbb->connect();
$dbb->select("rules"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$rules = $dbb->getResult();



$dbbc = new Database();
$dbbc->connect();
$dbbc->select("user"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$user = $dbbc->getResult();



$dbc = new Database();
$dbc->connect();
$dbc->select("payroll_groups"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$payroll_groups = $dbc->getResult();


$dbccc = new Database();
$dbccc->connect();
$dbccc->select("skills"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$skil = $dbccc->getResult();


$dbsc = new Database();
$dbsc->connect();
$dbsc->select("languages"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$lan= $dbsc->getResult();


$dbct = new Database();
$dbct->connect();
$dbct->select("licenses"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$lain = $dbct->getResult();


$dbccct = new Database();
$dbccct->connect();
$dbccct->select("insurance_setup"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$ins = $dbccct->getResult();


$dbsct = new Database();
$dbsct->connect();
$dbsct->select("tax"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$tax= $dbsct->getResult();

$dx = new Database();
$dx->connect();
$dx->select("categories"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$cats= $dx->getResult();



$dx = new Database();
$dx->connect();
$dx->select("leaves_rules"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$leave= $dx->getResult();


$dx = new Database();
$dx->connect();
$dx->selectall("role_setup","DISTINCT `name_role`"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$privled= $dx->getResult();
//echo "<pre>";
//print_r($privled) ;
//echo "<pre>";










//
//$dtb = new Database();
//$dtb->connect();
//$dtb->select("categories"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
//$categories = $dtb->getResult();
//    $ii=0;  
///*********************************************/
//if(isset($id_dep))
//        {
//    foreach ($categories as $selected){
//   $id= $categories[$ii]["id_categories"];
//   $ii=$ii+1;
//
// /****************************viwe_by_id***********************************/
//
//    $dbb = new Database();
//$dbb->connect();
//$dbb->select("pr_cat_dep",'*',null,'id_categories='.$id); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
//$dep = $dbb->getResult();
//    $i=0;  
//
//     foreach ($dep as $sel){
//   $idd= $dep[$i]["id_departments"];
//   $i=$i+1;
//
// /****************************viwe_by_id***********************************/
//
//    $dbbb = new Database();
//$dbbb->connect();
//$dbbb->select("departments",'*',null,'id_departments='.$idd); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
//$depp = $dbbb->getResult();
//            $fg= $depp[0]["name_departments"];
//$m["$i"]=$fg;
//    }       
//    }
//    } 
//   /*************************************/ 