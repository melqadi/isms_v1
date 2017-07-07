<?php
                                               

if(!isset($_GET["mod"])){  include '../IndexController.php';     } 
  


$tab="payroll_groups";
/**************************ADD*********************************/
if (isset($_POST['add']) && $_POST['add'] == 'add')
    {
  

      
/*1*/$name_payroll_groups = $_POST['name_payroll_groups'];
 $code_payroll_groups = $_POST['code_payroll_groups'];
 $db = new Database();
$db->connect();
$name = $db->escapeString($name_payroll_groups); // Escape any input before insert
$code = $db->escapeString($code_payroll_groups); // Escape any input before insert
 $cx=$db->insert($tab,array('name_payroll_groups'=>$name,'code_payroll_groups'=>$code));  // Table name, column names and respective values
$res = $db->getResult();  
 $id_g=$res[0];

$duplicate="Duplicate entry '".$name."' for key 'name_payroll_groups'";
if ($res[0] == $duplicate)
    {
        $conditions='name_payroll_groups="'.$name.'"';

$db = new Database();
$db->connect();
$db->selectall($tab,'*',null,'name_payroll_groups="'.$name.'"'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
$id_g=$res[0]["id_payroll_groups"];

 $dfgh=$res[0]["action"];

if($dfgh=="")
    {
    
    ?> 
<meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=payroll_groups&action=payroll_groups"/>
              <?php 


echo $dupli; 
exit();
    }
    
    $conditions='name_payroll_groups="'.$name.'"';
/*****************************************/
  $db = new Database();
$db->connect();
 $cx=$db->update( $tab,array('action'=>""),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();


    }


 $gory = $_POST['categoru'];
      foreach ($gory as $selectedOption)
{
          
         $selectedOption."\n";
$dbb = new Database();
$dbb->connect();
$id_c = $dbb->escapeString($selectedOption); // Escape any input before insert
$id_d = $dbb->escapeString($id_g); // Escape any input before insert
 $cxx=$dbb->insert("pay_grou_valu",array('id_payroll_groups'=>$id_d,'id_payroll_value'=>$id_c));  // Table name, column names and respective values
$ress = $dbb->getResult(); 

}
    
if ($cxx == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=payroll_groups&action=payroll_groups_add"/>
              <?php



echo $done; 
        }
 else{
 

echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=payroll_groups&action=payroll_groups_add"/>

              <?php

 }

    
    
    
}
/***************************DROP*******************************/
if (isset($_GET['drop']) && $_GET['drop'] == 1)
    {
     $id_cat=$_GET["id_".$tab];

     
    $db = new Database();
$db->connect();
$db->select("user",'*',null,'id_payroll_groups='.$id_cat); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
if(empty($res)){
     
    $db = new Database();
$db->connect();
 $f='id_payroll_groups='.$id_cat;
$db->delete($tab,$f);  // Table name, WHERE conditions
$res = $db->getResult();

$db = new Database();
$db->connect();
 $f='id_payroll_groups='.$id_cat;

$db->deleteall("pay_grou_valu",$f);  // Table name, WHERE conditions
$res = $db->getResult();
if (empty($res)) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=payroll_groups&action=payroll_groups"/>
              <?php 
 

echo $not; 
        }
 else{
    

echo $done; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=payroll_groups&action=payroll_groups"/>

              <?php

 }

}  else {
     

echo $rel; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=payroll_groups&action=payroll_groups"/>

              <?php
  
}

    }
    
    /**************************ADD_cat*********************************/
if (isset($_POST['add_cat']) && $_POST['add_cat'] == 'add_cat')
    {
  

      
/*1*/$id_group = $_POST['id_group'];
   $db = new Database();
$db->connect();
$db->select("user",'*',null,'id_payroll_groups='.$id_group); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
if(empty($res)){
 $id_g=$id_group;

 $gory = $_POST['categoru'];
      foreach ($gory as $selectedOption)
{
          
         $selectedOption."\n";
$dbb = new Database();
$dbb->connect();
$id_c = $dbb->escapeString($selectedOption); // Escape any input before insert
$id_d = $dbb->escapeString($id_g); // Escape any input before insert
 $cxx=$dbb->insert("pay_grou_valu",array('id_payroll_groups'=>$id_d,'id_payroll_value'=>$id_c));  // Table name, column names and respective values
$ress = $dbb->getResult(); 

}
    
if ($cxx == 1) {
    ?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=payroll_groups&action=payroll_groups_by_id&id_payroll_groups=<?php echo $id_d;?>"/>
              <?php



echo $done; 
        }
 else{


echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=payroll_groups&action=payroll_groups_add"/>

              <?php

 }
}

else {
    
echo $rel; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=payroll_groups&action=payroll_groups"/>

              <?php
  
}

    
    
    
}
    
/***************************DROP_rel_pridg*******************************/
if (isset($_GET['dropp']) && $_GET['dropp'] == 2)
    {
     $id_group=$_GET["id_".$tab];
      $db = new Database();
$db->connect();
$db->select("user",'*',null,'id_payroll_groups='.$id_group); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
if(empty($res)){

     $id_valu=$_GET["id_payroll_value"];
     

    $db = new Database();
$db->connect();
 $f='id_payroll_groups='.$id_group.' AND id_payroll_value='.$id_valu;

$db->deleteall("pay_grou_valu",$f);  // Table name, WHERE conditions
$res = $db->getResult(); 
if ($res[0] == 1) {
    ?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=payroll_groups&action=payroll_groups_by_id&id_payroll_groups=<?php echo $id_group ;?>"/>
              <?php

 

echo $done; 
        }
 else{
  

echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=payroll_groups&action=payroll_groups"/>

              <?php

 }
}
else {
    

echo $rel; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=payroll_groups&action=payroll_groups"/>

              <?php
  
}

    }
/**************************update********************************/
    if (isset($_POST['update']) && $_POST['update'] == 'update')
    {
         $id_payroll_groups = $_POST['id_payroll_groups'];
         $name_payroll_groups = $_POST['name_payroll_groups'];
         $conditions='id_payroll_groups='.$id_payroll_groups;
/*****************************************/
  $db = new Database();
$db->connect();
$cx=$db->update( $tab,array('name_'.$tab=>$name_payroll_groups),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();

if ($cx == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=payroll_groups&action=payroll_groups"/>
             
 <?php

  

echo $done; 
        }
 else{
     

echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=payroll_groups&action=payroll_groups"/>

              <?php

 }


    }
/**************************viwe&******************************/
    if(!isset($id_payroll_groups))
        {
$db = new Database();
$db->connect();
$db->select($tab); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();

foreach ($res as $selected){

   $id= $res[0]["id_payroll_groups"];
$dbb = new Database();
$dbb->connect();
$dbb->select("pay_grou_valu",'*',null,'id_payroll_groups'.'='.$id); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$ress = $dbb->getResult();
$i=0;
$ahmed=[];
foreach ($ress as $selected){
 $idd= $ress[$i]["id_payroll_value"];
          $i=$i+1;
          $dbbb = new Database();
          $dbbb->connect();
          $dbbb->select("payroll_value",'*',null,'id_payroll_value'.'='.$idd); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
          $resss = $dbbb->getResult();
          $fg=$resss[0];     
          $m[$i]=$fg;
//           $ahmed=$ahmed+$fg;
    
}

}

} 

else
            {
 /****************************viwe_by_id***********************************/
$db = new Database();
$db->connect();
$db->select($tab,'*',null,'id_'.$tab.'='.$id_payroll_groups); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
           

   $id= $res[0]["id_payroll_groups"];
$dbb = new Database();
$dbb->connect();
$dbb->select("pay_grou_valu",'*',null,'id_payroll_groups'.'='.$id); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$ress = $dbb->getResult();
$i=0;
$ahmed=[];
foreach ($ress as $selected){
 $idd= $ress[$i]["id_payroll_value"];
          $i=$i+1;
          $dbbb = new Database();
          $dbbb->connect();
          $dbbb->select("payroll_value",'*',null,'id_payroll_value'.'='.$idd); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
          $resss = $dbbb->getResult();
          $fg=$resss[0];     
          $m[$i]=$fg;
//           $ahmed=$ahmed+$fg;
    
}
//echo '<pre>';
//print_r($m);
//echo '<pre>';
//exit();
}
