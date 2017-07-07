<?php
                                               

if(!isset($_GET["mod"])){  include '../IndexController.php';     } 
  

$tab="insurance_setup";
/**************************ADD*********************************/
if (isset($_POST['add_value']) && $_POST['add_value'] == 'add_value')
    {
    

      
/*1*/$name_insurance = $_POST['name_insurance'];
$db = new Database();
$db->connect();
$db->select("insurance_setup",'*',null,'name_insurance="'.$name_insurance.'"'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();

if($res[0]["name_insurance"]==$name_insurance)
    {
    
    ?> 
<meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=insurance_setup&action=insurance_setup"/>
              <?php 
echo $dupli; 
exit();

    }
 $code_insurance = $_POST['code_insurance'];
 $paid = $_POST['paid'];
 $insurance_from = $_POST['insurance_from'];
 $value_employee =$_POST['value_employee'] ;    
 $type_employee =$_POST['type_employee'] ;    
 $value_employer =$_POST['value_employer'] ;    
 $type_employer =$_POST['type_employer'] ;    

    $db = new Database();
$db->connect();
  $name_insurancee = $db->escapeString($name_insurance); // Escape any input before insert
 $code_insurancee = $db->escapeString($code_insurance); // Escape any input before insert
 $paide = $db->escapeString($paid); // Escape any input before insert
 $insurance_frome = $db->escapeString($insurance_from); // Escape any input before insert
 $value_employeee = $db->escapeString($value_employee); // Escape any input before insert
 $type_employeee = $db->escapeString($type_employee); // Escape any input before insert
 $value_employere = $db->escapeString($value_employer); // Escape any input before insert
 $type_employere = $db->escapeString($type_employer); // Escape any input before insert

$cx=$db->insert($tab,array('name_insurance'=>$name_insurancee,'code_insurance'=>$code_insurancee,'paid_insurance'=>$paide,'insurance_from'=>$insurance_frome,'value_employee'=>$value_employeee,'value_employer'=>$value_employere,'type_value_employee'=>$type_employeee,'type_value_employer'=>$type_employere));  // Table name, column names and respective values
$res = $db->getResult();  

if ($cx == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=insurance_setup&action=insurance_setup_add"/>
              <?php



echo $done; 
        }
 else{
 

echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=insurance_setup&action=insurance_setup_add"/>

              <?php

 }

    
    
    
}
/***************************DROP*******************************/
if (isset($_GET['drop']) && $_GET['drop'] == 1)
    {
     $id_cat=$_GET["id_insurance"];
$db = new Database();
$db->connect();
$db->select("insurance_setup",'*',null,'id_insurance='.$id_cat); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
 $nameee=$res[0]["name_insurance"];
$db = new Database();
$db->connect();
$db->select("pr_user_insurance",'*',null,'id_insurance="'.$nameee.'"'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
if(empty($res)){
    $db = new Database();
$db->connect();
 $f='id_insurance='.$id_cat;

$db->delete($tab,$f);  // Table name, WHERE conditions
$res = $db->getResult(); 
if ($res[0] == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=insurance_setup&action=insurance_setup"/>
              <?php

 

echo $done; 
        }
 else{
 

echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=insurance_setup&action=insurance_setup"/>

              <?php

 }
}  else {
    
 

echo $rel_user; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=insurance_setup&action=insurance_setup"/>

              <?php

}

    }
/**************************update********************************/
    if (isset($_POST['update']) && $_POST['update'] == 'update')
    {
         $id_insurance = $_POST['id_insurance'];
        $db = new Database();
$db->connect();
$db->select("insurance_setup",'*',null,'id_insurance='.$id_insurance); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
 $nameee=$res[0]["name_insurance"];
$db = new Database();
$db->connect();
$db->select("pr_user_insurance",'*',null,'id_insurance="'.$nameee.'"'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
if(empty($res)){

         $code_insurance = $_POST['code_insurance'];
         $paid_insurance = $_POST['paid'];
         $value_employee = $_POST['value_employee'];
         $value_employer = $_POST['value_employer'];
         $type_value_employee = $_POST['type_employee'];
         $type_value_employer = $_POST['type_employer'];
         $insurance_from = $_POST['insurance_from'];
         $name_insurance = $_POST['name_insurance'];
         
         
         $conditions='id_insurance='.$id_insurance;
/*****************************************/
  $db = new Database();
$db->connect();
$cx=$db->update( $tab,array('code_insurance'=>$code_insurance,'paid_insurance'=>$paid_insurance,'value_employee'=>$value_employee,'value_employer'=>$value_employer,'type_value_employee'=>$type_value_employee,'type_value_employer'=>$type_value_employer,'insurance_from'=>$insurance_from,'name_insurance'=>$name_insurance),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();



if ($cx == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=insurance_setup&action=insurance_setup"/>
             
 <?php

  

echo $done; 
        }
 else{
 

echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=insurance_setup&action=insurance_setup"/>

              <?php

 }
}
else {
    
 

echo $rel_user; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=insurance_setup&action=insurance_setup"/>

              <?php

}


    }
/**************************viwe&******************************/
    if(!isset($id_insurance))
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
$db->select($tab,'*',null,'id_insurance='.$id_insurance); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
            
            

}
