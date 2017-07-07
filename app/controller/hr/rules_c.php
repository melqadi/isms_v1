<?php
                                               

if(!isset($_GET["mod"])){  include '../IndexController.php';     } 
  


$tab="rules";
/**************************ADD*********************************/
if (isset($_POST['add']) && $_POST['add'] == 'add')
    {
  
      
/*1*/$name_rules= $_POST['name'];
$db = new Database();
$db->connect();
$db->select("rules",'*',null,'name_rules="'.$name_rules.'"'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();

if($res[0]["name_rules"]==$name_rules)
    {
    
    ?> 
<meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=rules&action=rules"/>
              <?php 


echo $dupli; 
exit();

    }
/*1*/$full_day_rules = $_POST['f'];
/*1*/$start_day = $_POST['start_day'];
/*1*/$half_day_rules = $_POST['h'];
/*1*/$fri_day = $_POST['friday'];
/*1*/$sat_day = $_POST['sat'];
/*1*/$sun_day = $_POST['sun'];
/*1*/$mon_day = $_POST['mon'];
/*1*/$tue_day = $_POST['tue'];
/*1*/$wed_day = $_POST['wed'];
/*1*/$thu_day = $_POST['thu'];
 
    $db = new Database();
$db->connect();
$name_ruless = $db->escapeString($name_rules); // Escape any input before insert
$start_day = $db->escapeString($start_day); // Escape any input before insert
$full_day_ruless = $db->escapeString($full_day_rules); // Escape any input before insert
$half_day_ruless = $db->escapeString($half_day_rules); // Escape any input before insert
$fri_dayy = $db->escapeString($fri_day); // Escape any input before insert
$sat_dayy = $db->escapeString($sat_day); // Escape any input before insert
$sun_dayy = $db->escapeString($sun_day); // Escape any input before insert
$mon_dayy = $db->escapeString($mon_day); // Escape any input before insert
$tue_dayy = $db->escapeString($tue_day); // Escape any input before insert
$wed_dayy = $db->escapeString($wed_day); // Escape any input before insert
$thu_dayy = $db->escapeString($thu_day); // Escape any input before insert
 
$cx=$db->insert($tab,array('start_day'=>$start_day,'name_rules'=>$name_rules,'full_day_rules'=>$full_day_rules,'half_day_rules'=>$half_day_rules,'fri_day'=>$fri_day,'sat_day'=>$sat_day,'sun_day'=>$sun_day,'mon_day'=>$mon_day,'tue_day'=>$tue_day,'wed_day'=>$wed_day,'thu_day'=>$thu_day,));  // Table name, column names and respective values
$res = $db->getResult();  

if ($cx == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=rules&action=rules_add"/>
              <?php



echo $done; 
        }
 else{
     

echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=rules&action=rules_add"/>

              <?php

 }

    
    
    
}
/***************************DROP*******************************/
if (isset($_GET['drop']) && $_GET['drop'] == 1)
    {
     $id_cat=$_GET["id_".$tab];
$db = new Database();
$db->connect();
$db->select("user",'*',null,'id_rules='.$id_cat); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
if(empty($res)){
    $db = new Database();
$db->connect();
 $f='id_rules='.$id_cat;

$db->delete($tab,$f);  // Table name, WHERE conditions
$res = $db->getResult(); 
if ($res[0] == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=rules&action=rules"/>
              <?php

 

echo $done; 
        }
 else{
   

echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=rules&action=rules"/>

              <?php

}

 }  else {
    
     

echo $rel_user; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=rules&action=rules"/>

              <?php

}

    }
/**************************update********************************/
    if (isset($_POST['update']) && $_POST['update'] == 'update')
    {
         $id_rules = $_POST['id_rules'];
$db = new Database();
$db->connect();
$db->select("user",'*',null,'id_rules='.$id_rules); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
if(empty($res)){
         $name_rules = $_POST['name_rules'];
         $full_day = $_POST['full_day'];
         $half_day = $_POST['half_day'];
         $friday = $_POST['friday'];
         $sat = $_POST['sat'];
         $sun = $_POST['sun'];
         $mon = $_POST['mon'];
         $tue = $_POST['tue'];
         $wed = $_POST['wed'];
         $thu = $_POST['thu'];
         $conditions='id_rules='.$id_rules;
/*****************************************/
  $db = new Database();
$db->connect();
$cx=$db->update( $tab,array('name_rules'=>$name_rules,'full_day_rules'=>$full_day,'half_day_rules'=>$half_day,
    'fri_day'=>$friday,'sat_day'=>$sat,'sun_day'=>$sun,'mon_day'=>$mon,
    'tue_day'=>$tue,'wed_day'=>$wed,'thu_day'=>$thu,),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();
if ($cx == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=rules&action=rules"/>
             
 <?php

  

echo $done; 
        }
 else{
   
echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=rules&action=rules"/>

              <?php

 }

 }  else {
    
    

echo $rel_user; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=rules&action=rules"/>

              <?php

}

         
    

    }
/**************************viwe&******************************/
    if(!isset($id_rules))
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
$db->select($tab,'*',null,'id_'.$tab.'='.$id_rules); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
            
            

}
