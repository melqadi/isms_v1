<?php
                                               

if(!isset($_GET["mod"])){  include '../IndexController.php';     } 
  


$tab="licenses";
/**************************ADD*********************************/
if (isset($_POST['add']) && $_POST['add'] == 'add')
    {
    

      
/*1*/$name_licenses = $_POST['name_'.$tab];
 
    $db = new Database();
$db->connect();
$name = $db->escapeString($name_licenses); // Escape any input before insert
 $cx=$db->insert($tab,array('name_'.$tab=>$name));  // Table name, column names and respective values
$res = $db->getResult();  
$duplicate="Duplicate entry '".$name_licenses."' for key 'name_licenses'";
if ($res[0] == $duplicate)
    {
    $conditions='name_licenses="'.$name_licenses.'"';
/*****************************************/
  $db = new Database();
$db->connect();
 $cx=$db->update( $tab,array('action'=>""),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();
    
    }

if ($cx == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=licenses&action=licenses_add"/>
              <?php



echo $done; 
        }
 else{
 

echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=licenses&action=licenses_add"/>

              <?php

 }

    
    
    
}
/***************************DROP*******************************/
if (isset($_GET['drop']) && $_GET['drop'] == 1)
    {
     $id_cat=$_GET["id_".$tab];
      $name_cat=$_GET["name_".$tab];
     $db = new Database();
$db->connect();
$db->select("pr_user_licenes",'*',null,'id_licenes="'.$name_cat.'"'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
if(empty($res)){
   

    $db = new Database();
$db->connect();
 $f='id_licenses='.$id_cat;

$db->delete($tab,$f);  // Table name, WHERE conditions
$res = $db->getResult(); 
if ($res[0] == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=licenses&action=licenses"/>
              <?php

 

echo $done; 
        }
 else{
 

echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=licenses&action=licenses"/>

              <?php

 }

}  else {

 

echo $rel_user; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=licenses&action=licenses"/>

              <?php
    
}
    }
/**************************update********************************/
    if (isset($_POST['update']) && $_POST['update'] == 'update')
    {
         $id_licenses = $_POST['id_licenses'];
         $name_licenses = $_POST['name_licenses'];
         $conditions='id_licenses='.$id_licenses;
/*****************************************/
  $db = new Database();
$db->connect();
$cx=$db->update( $tab,array('name_'.$tab=>$name_licenses),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();
if ($cx == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=licenses&action=licenses"/>
             
 <?php

  

echo $done; 
        }
 else{
 

echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=licenses&action=licenses"/>

              <?php

 }


    }
/**************************viwe&******************************/
    if(!isset($id_licenses))
        {
$db = new Database();
$db->connect();
$db->select($tab); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
        } 
        else
            {
 /****************************viwe_by_id***********************************/
$db = new Database();
$db->connect();
$db->select($tab,'*',null,'id_'.$tab.'='.$id_licenses); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
            
            

}
