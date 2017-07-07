<?php
                                               

if(!isset($_GET["mod"])){  include '../IndexController.php';     } 
  


$tab="skills";
/**************************ADD*********************************/
if (isset($_POST['add']) && $_POST['add'] == 'add')
    {
    

      
/*1*/$name_skills = $_POST['name_'.$tab];
 
    $db = new Database();
$db->connect();
$name = $db->escapeString($name_skills); // Escape any input before insert
 $cx=$db->insert($tab,array('name_'.$tab=>$name));  // Table name, column names and respective values
$res = $db->getResult(); 

$duplicate="Duplicate entry '".$name_skills."' for key 'name_skills'";
if ($res[0] == $duplicate)
    {
    $conditions='name_skills="'.$name_skills.'"';
/*****************************************/
  $db = new Database();
$db->connect();
 $cx=$db->update( $tab,array('action'=>""),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();
    
    }

if ($cx == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=skills&action=skills_add"/>
              <?php



echo $done; 
        }
 else{
     

echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=skills&action=skills_add"/>

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
$db->select("pr_user_skills",'*',null,'id_skills="'.$name_cat.'"'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
if(empty($res)){
    

    $db = new Database();
$db->connect();
 $f='id_skills='.$id_cat;

$db->delete($tab,$f);  // Table name, WHERE conditions
$res = $db->getResult(); 
if ($res[0] == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=skills&action=skills"/>
              <?php

 

echo $done; 
        }
 else{
    

echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=skills&action=skills"/>

              <?php

 }
}  else {

    

echo $rel_user; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=skills&action=skills"/>

              <?php
    
}
    }
/**************************update********************************/
    if (isset($_POST['update']) && $_POST['update'] == 'update')
    {
         $id_skills = $_POST['id_skills'];
         $name_skills = $_POST['name_skills'];
         $conditions='id_skills='.$id_skills;
/*****************************************/
  $db = new Database();
$db->connect();
$cx=$db->update( $tab,array('name_'.$tab=>$name_skills),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();
if ($cx == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=skills&action=skills"/>
             
 <?php

  

echo $done; 
        }
 else{
    

echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=skills&action=skills"/>

              <?php

 }


    }
/**************************viwe&******************************/
    if(!isset($id_skills))
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
$db->select($tab,'*',null,'id_'.$tab.'='.$id_skills); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
            
            

}
