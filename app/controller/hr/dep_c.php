<?php
//echo "ahmed ayman";
                                               
    include '../../../model/mysql_crud.php';

//include_once  '../../IndexController.php'; 
//    echo "hi";



if(isset($id_categorie))
    {
$dxx = new Database();
$dxx->connect();
$dxx->select("pr_cat_dep",'*',null,'id_categories='.$id_categorie); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$catss= $dxx->getResult();
//echo "<pre>";
//print_r($catss);
//echo "<pre>";

$i=0;
foreach ($catss as $val)
    {
     $m=$catss[$i]["id_departments"];
$i=$i+1;
$dxxx = new Database();
$dxxx->connect();
$dxxx->select("departments",'*',null,'id_departments='.$m); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$catsss= $dxxx->getResult();
    $is[$i]=$catsss[0]["id_departments"];
    $namedeb[$i]=$catsss[0]["name_departments"];


    }
//    print_r($namedeb);
//    print_r($is);
   
    }
if(isset($id_dep))
    {
$dxx = new Database();
$dxx->connect();
$dxx->select("pr_dep_pos",'*',null,'id_departments='.$id_dep); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$catss= $dxx->getResult();

$i=0;
foreach ($catss as $val)
    {
     $m=$catss[$i]["id_positions"];
$i=$i+1;
$dxxx = new Database();
$dxxx->connect();
$dxxx->select("positions",'*',null,'id_positions='.$m); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$catsss= $dxxx->getResult();
    $is[$i]=$catsss[0]["id_positions"];
    $namedeb[$i]=$catsss[0]["name_positions"];


    }
//    echo "<pre>";
//    print_r($namedeb);
//    echo "<pre>";
//    exit();   
    }
