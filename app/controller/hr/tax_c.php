<?php
                                               

if(!isset($_GET["mod"])){  include '../IndexController.php';     } 
  


$tab="tax";
/**************************ADD*********************************/
if (isset($_POST['add_value']) && $_POST['add_value'] == 'add_value')
    {
    
      
/*1*/$name_tax = $_POST['name_tax'];
$db = new Database();
$db->connect();
$db->select("tax",'*',null,'name_tax="'.$name_tax.'"'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();

if($res[0]["name_tax"]==$name_tax)
    {
    
    ?> 
<meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=tax&action=tax"/>
              <?php

echo $dupli; 
exit();

    }
 $code_tax = $_POST['code_tax'];
 $range_from = $_POST['range_from'];
 $range_to =$_POST['range_to'] ;    
 $paid_tax =$_POST['paid_tax'] ;    
 $val_employee =$_POST['val_employee'] ;    
 $val_employer =$_POST['val_employer'] ;    
 $tax_from =$_POST['tax_from'] ;    

    $db = new Database();
$db->connect();
  $name_taxx = $db->escapeString($name_tax); // Escape any input before insert
 $code_taxx = $db->escapeString($code_tax); // Escape any input before insert
 $range_fromx = $db->escapeString($range_from); // Escape any input before insert
 $range_tox = $db->escapeString($range_to); // Escape any input before insert
 $paid_taxx = $db->escapeString($paid_tax); // Escape any input before insert
 $val_employeex = $db->escapeString($val_employee); // Escape any input before insert
 $val_employerx = $db->escapeString($val_employer); // Escape any input before insert
 $tax_fromx = $db->escapeString($tax_from); // Escape any input before insert

$cx=$db->insert($tab,array('name_tax'=>$name_taxx,'code_tax'=>$code_taxx,'range_from'=>$range_fromx,'range_to'=>$range_tox,'paid_tax'=>$paid_taxx,'val_employee'=>$val_employeex,'val_employer'=>$val_employerx,'tax_from'=>$tax_fromx));  // Table name, column names and respective values
$res = $db->getResult();  

if ($cx == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=tax&action=tax_add"/>
              <?php



echo $done; 
        }
 else{
    
echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=tax&action=tax_add"/>

              <?php

 }

    
    
    
}
/***************************DROP*******************************/
if (isset($_GET['drop']) && $_GET['drop'] == 1)
    {
    
     $id_cat=$_GET["id_tax"];

$db = new Database();
$db->connect();
$db->select("tax",'*',null,'id_tax='.$id_cat); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
 $nameee=$res[0]["name_tax"];
$db = new Database();
$db->connect();
$db->select("pr_user_tax",'*',null,'id_tax="'.$nameee.'"'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
if(empty($res)){
    $db = new Database();
$db->connect();
 $f='id_tax='.$id_cat;

$db->delete($tab,$f);  // Table name, WHERE conditions
$res = $db->getResult(); 
if ($res[0] == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=tax&action=tax"/>
              <?php

 

echo $done; 
        }
 else{
    
echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=tax&action=tax"/>

              <?php

 }
}
else {
    
    

echo $rel_user; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=tax&action=tax"/>

              <?php

}


    }
/**************************update********************************/
    if (isset($_POST['update']) && $_POST['update'] == 'update')
    {
        
        $id_tax = $_POST['id_tax'];
        $db = new Database();
$db->connect();
$db->select("tax",'*',null,'id_tax='.$id_tax); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
 $nameeie=$res[0]["name_tax"];
$db = new Database();
$db->connect();
$db->select("pr_user_tax",'*',null,'id_tax="'.$nameeie.'"'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
if(empty($res)){
        $name_tax = $_POST['name_tax'];
         $code_tax = $_POST['code_tax'];
         $range_from = $_POST['range_from'];
         $range_to = $_POST['range_to'];
         $paid_tax = $_POST['paid_tax'];
         $val_employee = $_POST['val_employee'];
         $val_employer = $_POST['val_employer'];
         $tax_from = $_POST['tax_from'];
         
         
         $conditions='id_tax='.$id_tax;
/*****************************************/
  $db = new Database();
$db->connect();
$cx=$db->update( $tab,array('name_tax'=>$name_tax,'code_tax'=>$code_tax,'range_from'=>$range_from,'range_to'=>$range_to,'paid_tax'=>$paid_tax,'val_employee'=>$val_employee,'val_employer'=>$val_employer,'tax_from'=>$tax_from),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();

    

if ($cx == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=tax&action=tax"/>
             
 <?php

  

echo $done; 
        }
 else{
     

echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=tax&action=tax"/>

              <?php

 }
}

else {
    
    

echo $rel_user; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=tax&action=tax"/>

              <?php

}

    }
/**************************viwe&******************************/
    if(!isset($id_tax))
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
$db->select($tab,'*',null,'id_tax='.$id_tax); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
            
            

}
