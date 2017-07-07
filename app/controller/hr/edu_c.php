<?php
                                               

if(!isset($_GET["mod"])){  include '../IndexController.php';     } 
  


$tab="educational";
/**************************ADD*********************************/
$ed=$_POST["ed"];/**m*/

if (!empty($ed))
    {
        $id_user=$_POST["id_user"];
    $id_application=$_POST["id_application"];


    $type=$_POST["type"];
    $id_user=$_POST["id_user"];
    $name=$_POST["name"];
    $entered=$_POST["entered"];
    $completed=$_POST["completed"];
    $degree=$_POST["degree"];
    $db = new Database();
$db->connect();

$id_applications=$db->escapeString($id_application); // Escape any input before insert
$types=$db->escapeString($type); // Escape any input before insert
$id_users=$db->escapeString($id_user); // Escape any input before insert
$names=$db->escapeString($name); // Escape any input before insert
$entereds=$db->escapeString($entered); // Escape any input before insert
$completeds=$db->escapeString($completed); // Escape any input before insert
$degrees=$db->escapeString($degree); // Escape any input before insert
$cx=$db->insert("educational",array('id_application'=>$id_applications,'name_educational'=>$names,'type_educational'=>$types,'entered_educational'=>$entereds,'completed_educational'=>$completeds,'degree_educational'=>$degrees,'id_user'=>$id_users));  // Table name, column names and respective values
$ress=$db->getResult(); 
    

      

if ($cx == 1) {
    
    if ($id_application!=""){
        ?> 
<meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=account&action=educational&id_application=<?php echo $id_application ;?>"/>
              <?php 


echo $done; 
        
    }elseif ($id_user!="") {
            ?> 
<meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=account&action=educational&id_user=<?php echo $id_user ;?>"/>
              <?php 

echo $done; 
        }
        }
 else{

    if (isset($id_application)){
        ?> 
<meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=account&action=educational&id_application=<?php echo $id_application ;?>"/>
              <?php 

echo $not; 
        
    }elseif (isset($id_user)) {
            ?> 
<meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=account&action=educational&id_user=<?php echo $id_user ;?>"/>
              <?php 

echo $not; 
        }
 }

    
    
    
}
/***************************DROP*******************************/
if (isset($_GET['drop']) && $_GET['drop'] == 1)
    {
     $id_cat=$_GET["id_".$tab];

    $db = new Database();
$db->connect();
 $f='id_educational='.$id_cat;

$db->delete($tab,$f);  // Table name, WHERE conditions
$res = $db->getResult(); 
if ($res[0] == 1) {
    ?> 
<meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=account&action=account"/>
              <?php

 

echo $done; 
        }
 else{
     
echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=categories&action=categories"/>

              <?php

 }

    }
/**************************update********************************/
    if (isset($_POST['update']) && $_POST['update'] == 'update')
    {
         $id_categories = $_POST['id_categories'];
         $name_categories = $_POST['name_categories'];
         $conditions='id_categories='.$id_categories;
/*****************************************/
  $db = new Database();
$db->connect();
$cx=$db->update( $tab,array('name_'.$tab=>$name_categories),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();
if ($cx == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=categories&action=categories"/>
             
 <?php

  

echo $done; 
        }
 else{
 

echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=categories&action=categories"/>

              <?php

 }


    }
/**************************viwe&******************************/
    if(isset($id_user))
        {
        $db = new Database();
$db->connect();
$db->select($tab,'*',null,'id_user='.$id_user); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
        } 
        elseif (isset($id_application)) 
            {
            
        $db = new Database();
$db->connect();
$db->select($tab,'*',null,'id_application='.$id_application); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();

}
