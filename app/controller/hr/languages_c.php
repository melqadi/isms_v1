<?php
                                               

if(!isset($_GET["mod"])){  include '../IndexController.php';     } 
  


$tab="languages";
/**************************ADD*********************************/
if (isset($_POST['add']) && $_POST['add'] == 'add')
    {
    

      
/*1*/$name_languages = $_POST['name_'.$tab];
 
    $db = new Database();
$db->connect();
$name = $db->escapeString($name_languages); // Escape any input before insert
 $cx=$db->insert($tab,array('name_'.$tab=>$name));  // Table name, column names and respective values
$res = $db->getResult();  
$duplicate="Duplicate entry '".$name_languages."' for key 'name_languages'";
if ($res[0] == $duplicate)
    {
    $conditions='name_languages="'.$name_languages.'"';
/*****************************************/
  $db = new Database();
$db->connect();
 $cx=$db->update( $tab,array('action'=>""),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();
    
    }

if ($cx == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=languages&action=languages_add"/>
              <?php



echo $done; 
        }
 else{
 

echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=languages&action=languages_add"/>

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
$db->select("pr_user_languages",'*',null,'id_languages="'.$name_cat.'"'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
if(empty($res)){
     
     
    $db = new Database();
$db->connect();
 $f='id_languages='.$id_cat;

$db->delete($tab,$f);  // Table name, WHERE conditions
$res = $db->getResult(); 
if ($res[0] == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=languages&action=languages"/>
              <?php

 

echo $done; 
        }
 else{
 

echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=languages&action=languages"/>

              <?php

 }

}  else {

 

echo $rel_user; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=languages&action=languages"/>

              <?php
    
}
    }
/**************************update********************************/
    if (isset($_POST['update']) && $_POST['update'] == 'update')
    {
         $id_languages = $_POST['id_languages'];
         $name_languages = $_POST['name_languages'];
         $conditions='id_languages='.$id_languages;
/*****************************************/
  $db = new Database();
$db->connect();
$cx=$db->update( $tab,array('name_'.$tab=>$name_languages),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();
if ($cx == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=languages&action=languages"/>
             
 <?php

  

echo $done; 
        }
 else{
 

echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=languages&action=languages"/>

              <?php

 }


    }
/**************************viwe&******************************/
    if(!isset($id_languages))
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
$db->select($tab,'*',null,'id_'.$tab.'='.$id_languages); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
            
            

}
