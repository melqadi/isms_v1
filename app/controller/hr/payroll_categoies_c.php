<?php
                                               

if(!isset($_GET["mod"])){  include '../IndexController.php';     } 
  


$tab="payroll_value";
/**************************ADD*********************************/
if (isset($_POST['add_value']) && $_POST['add_value'] == 'add_value')
    {
    

      
/*1*/$name = $_POST['name'];
$db = new Database();
$db->connect();
$db->select("payroll_value",'*',null,'name="'.$name.'"'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();

if($res[0]["name"]==$name)
    {
    
    ?> 
<meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=payroll_categories&action=payroll_categories"/>
              <?php 


echo $dupli; 
exit();

    }
 $code = $_POST['code'];
 $gory = $_POST['gory'];
 $value = $_POST['value'];
 $type =$_POST['type'] ;    
  
    $db = new Database();
$db->connect();
$namee = $db->escapeString($name); // Escape any input before insert
$codee = $db->escapeString($code); // Escape any input before insert
$gorye = $db->escapeString($gory); // Escape any input before insert
$valuee = $db->escapeString($value); // Escape any input before insert
$typee = $db->escapeString($type); // Escape any input before insert
 $cx=$db->insert($tab,array('name'=>$namee,'code'=>$codee,'gory'=>$gorye,'value'=>$valuee,'type'=>$typee));  // Table name, column names and respective values
$res = $db->getResult();  

if ($cx == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=payroll_categories&action=payroll_categories_add"/>
              <?php



echo $done; 
        }
 else{
    
echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=payroll_categories&action=payroll_categories_add"/>

              <?php

 }

    
    
    
}
/***************************DROP*******************************/
if (isset($_GET['drop']) && $_GET['drop'] == 1)
    {
     $id_cat=$_GET["id_".$tab];
$db = new Database();
$db->connect();
$db->select("pay_grou_valu",'*',null,'id_payroll_value='.$id_cat); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
if(empty($res)){
    
    $db = new Database();
$db->connect();
 $f='id_payroll_value='.$id_cat;

$db->delete($tab,$f);  // Table name, WHERE conditions
$res = $db->getResult(); 
if ($res[0] == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=payroll_categories&action=payroll_categories"/>
              <?php

 

echo $done; 
        }
 else{
    

echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=payroll_categories&action=payroll_categories"/>

              <?php

 }

    
 }  else {
    
 

echo $rel_user; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=payroll_categories&action=payroll_categories"/>

              <?php

}

    }
/**************************update********************************/
    if (isset($_POST['update']) && $_POST['update'] == 'update')
    {
            
         $id_payroll_value = $_POST['id_payroll_value'];
         $db = new Database();
$db->connect();
$db->select("pay_grou_valu",'*',null,'id_payroll_value='.$id_payroll_value); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
if(empty($res)){
         
         $code = $_POST['code'];
         $name = $_POST['name'];
         $gory = $_POST['gory'];
         $type = $_POST['type'];
         $value = $_POST['value'];
         
         
         $conditions='id_payroll_value='.$id_payroll_value;
/*****************************************/
  $db = new Database();
$db->connect();
$cx=$db->update( $tab,array('name'=>$name,'code'=>$code,'gory'=>$gory,'type'=>$type,'value'=>$value),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();



if ($cx == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=payroll_categories&action=payroll_categories"/>
             
 <?php

  

echo $done; 
        }
 else{
    

echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=payroll_categories&action=payroll_categories"/>

              <?php

 }
}else {
    
     

echo $rel_user; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=payroll_categories&action=payroll_categories"/>

              <?php

}

    }
/**************************viwe&******************************/
    if(!isset($id_payroll_value))
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
$db->select($tab,'*',null,'id_'.$tab.'='.$id_payroll_value); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
            
            

}
