<?php
                                               

if(!isset($_GET["mod"])){  include '../IndexController.php';     } 
  


$tab="nationalities";
/**************************ADD*********************************/
if (isset($_POST['add']) && $_POST['add'] == 'add')
    {
    

      
/*1*/$name_nationalities = $_POST['name_'.$tab];
 
    $db = new Database();
$db->connect();
$name = $db->escapeString($name_nationalities); // Escape any input before insert
 $cx=$db->insert($tab,array('name_'.$tab=>$name));  // Table name, column names and respective values
$res = $db->getResult();  
  
$duplicate="Duplicate entry '".$name_nationalities."' for key 'name_nationalities'";
if ($res[0] == $duplicate)
    {
    $conditions='name_nationalities="'.$name_nationalities.'"';
/*****************************************/
  $db = new Database();
$db->connect();
 $cx=$db->update( $tab,array('action'=>""),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();
    
    }



if ($cx == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=nationalities&action=nationalities_add"/>
              <?php



echo $done; 
        }
 else{
     
echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=nationalities&action=nationalities_add"/>

              <?php

 }

    
    
    
}
/***************************DROP*******************************/
if (isset($_GET['drop']) && $_GET['drop'] == 1)
    {
     $id_cat=$_GET["id_".$tab];
 $db = new Database();
$db->connect();
$db->select("user",'*',null,'id_nationality='.$id_cat); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
if(empty($res)){
    $db = new Database();
$db->connect();
 $f='id_nationalities='.$id_cat;

$db->delete($tab,$f);  // Table name, WHERE conditions
$res = $db->getResult(); 
if ($res[0] == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=nationalities&action=nationalities"/>
              <?php

 

echo $done; 
        }
 else{
    
echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=nationalities&action=nationalities"/>

              <?php

 }
}  else {
    
    
echo $rel_user; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=nationalities&action=nationalities"/>

              <?php

}
    }
/**************************update********************************/
    if (isset($_POST['update']) && $_POST['update'] == 'update')
    {
         $id_nationalities = $_POST['id_nationalities'];
         $name_nationalities = $_POST['name_nationalities'];
         $conditions='id_nationalities='.$id_nationalities;
/*****************************************/
  $db = new Database();
$db->connect();
$cx=$db->update( $tab,array('name_'.$tab=>$name_nationalities),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();
if ($cx == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=nationalities&action=nationalities"/>
             
 <?php

  

echo $done; 
        }
 else{
    
echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=nationalities&action=nationalities"/>

              <?php

 }


    }
/**************************viwe&******************************/
    if(!isset($id_nationalities))
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
$db->select($tab,'*',null,'id_'.$tab.'='.$id_nationalities); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
            
            

}
