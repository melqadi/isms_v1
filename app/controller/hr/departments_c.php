<?php


if(!isset($_GET["mod"])){  include '../IndexController.php';     } 
  


$tab="departments";
/**************************ADD*********************************/
if (isset($_POST['add']) && $_POST['add'] == 'add')
    {



/*1*/$name_departments = $_POST['name_'.$tab];
/*1*/$id_categorie = $_POST['id_categorie'];
 $id_categorie;

    $db = new Database();
$db->connect();
$name = $db->escapeString($name_departments); // Escape any input before insert
 $cx=$db->insert($tab,array('name_'.$tab=>$name));  // Table name, column names and respective values
$res = $db->getResult();
 $id_dp=$res[0];

$duplicate="Duplicate entry '".$name."' for key 'name_departments'";
if ($res[0] == $duplicate)
    {
        $conditions='name_departments="'.$name.'"';

$db = new Database();
$db->connect();
$db->selectall($tab,'*',null,'name_departments="'.$name.'"'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
$id_dp=$res[0]["id_departments"];

 $dfgh=$res[0]["action"];

if($dfgh=="")
    {

    ?>
<meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=departments&action=departments"/>
              <?php 

echo $dupli; 
exit();
    }

    $conditions='name_departments="'.$name.'"';
/*****************************************/
  $db = new Database();
$db->connect();
 $cx=$db->update( $tab,array('action'=>""),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();


    }

/***************/
$dbb = new Database();
$dbb->connect();

 $id_c = $dbb->escapeString($id_categorie); // Escape any input before insert
 $id_d = $dbb->escapeString($id_dp); // Escape any input before insert
 $cxx=$dbb->insert("pr_cat_dep",array('id_categories'=>$id_c,'id_departments'=>$id_d));  // Table name, column names and respective values
$ress = $dbb->getResult();
$rtyu="index.php?sec=hr&mod=departments&action=departments_add&id_categories=". $id_c;
if ($cxx == 1) {
    ?>
<meta http-equiv="refresh" content="0;url=../../../<?php echo $rtyu;?>"/>
              <?php 



echo $done; 
        }
 else{


echo $not; 
?>
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=departments&action=departments_add"/>

              <?php

 }




}
/***************************DROP*******************************/
if (isset($_GET['drop']) && $_GET['drop'] == 1)
    {
         $id_cat=$_GET["id_".$tab];


    $db = new Database();
$db->connect();
$db->select("pr_dep_pos",'*',null,'id_'.$tab.'='.$id_cat); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
if(empty($res)){

    $db = new Database();
$db->connect();
 $f='id_departments='.$id_cat;

$db->delete($tab,$f);  // Table name, WHERE conditions
$res = $db->getResult();
    $db = new Database();
$db->connect();
 $f='id_departments='.$id_cat;

$db->deleteall("pr_cat_dep",$f);  // Table name, WHERE conditions
$res = $db->getResult();
if ($res[0] == 1) {
    ?>
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=departments&action=departments"/>
              <?php 

echo $done; 
        }
 else{
    
echo $not; 
?>
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=departments&action=departments"/>

              <?php

 }
}  else {


echo $rel; 
?>
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=departments&action=departments"/>

              <?php

}



    }
/**************************update********************************/
    if (isset($_POST['update']) && $_POST['update'] == 'update')
    {
         $id_departments = $_POST['id_departments'];
         $name_departments = $_POST['name_departments'];
         $conditions='id_departments='.$id_departments;
/*****************************************/
  $db = new Database();
$db->connect();
$cx=$db->update( $tab,array('name_'.$tab=>$name_departments),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();
if ($cx == 1) {
    ?>
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=departments&action=departments"/>

 <?php 

echo $done; 
        }
 else{
    
echo $not; 
?>
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=departments&action=departments"/>

              <?php

 }


    }
/**************************viwe&******************************/
    if(!isset($id_departments))
        {
$db = new Database();
$db->connect();
$db->select($tab); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
    $ii=0;

foreach ($res as $selected){

   $id= $res[$ii]["id_departments"];
   $ii=$ii+1;
$dbb = new Database();
$dbb->connect();
$dbb->select("pr_cat_dep",'*',null,'id_departments'.'='.$id); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$ress = $dbb->getResult();
$i=0;
foreach ($ress as $selecteda){
 $idd= $ress[$i]["id_categories"];
          $dbbb = new Database();
          $dbbb->connect();
          $dbbb->select("categories",'*',null,'id_categories'.'='.$idd); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
          $resss = $dbbb->getResult();
          $fg= $resss[0]["name_categories"];
$m["$ii"]=$fg;
//          $resss[0];
//          $ahmed["key"]["name"]=[$i][$fg];
                    $i=$i+1;
//

}

}
//echo '<pre>';
//          print_r($m);
//                    echo '<pre>';

        }
        else
            {
 /****************************viwe_by_id***********************************/
$db = new Database();
$db->connect();
$db->select($tab,'*',null,'id_'.$tab.'='.$id_departments); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();



}
