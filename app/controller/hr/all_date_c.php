<?php
if(!isset($_GET["mod"])){  include '../IndexController.php';     } 
$id=$_GET["id"];
$db = new Database();
$db->connect();
$db->select("user",'*',null,'id_user ='.$id); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();

foreach($res as $x => $x_value){
    /****************************/
$id_nationality=$x_value["id_nationality"];
$db = new Database();
$db->connect();
$db->select("nationalities",'*',null,'id_nationalities='.$id_nationality); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$nationalities = $db->getResult();
 $res[0]["id_nationality"]=$nationalities[0];
 
  /*************************/
 $id_rules=$x_value["id_rules"];
 $db = new Database();
$db->connect();
$db->select("rules",'*',null,'id_rules='.$id_rules); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$rules = $db->getResult();
 $res[0]["id_rules"]=$rules[0];
 

 
 /********************************/
  $id_direct_manger=$x_value["id_direct_manger"];
  $db = new Database();
$db->connect();
$db->select("user",'*',null,'id_user='.$id_direct_manger); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$direct = $db->getResult();
 $name_user=$direct[0]["f_name_user"]." ".$direct[0]["m_name_user"]." ".$direct[0]["l_name_user"];
 $res[0]["id_direct_manger"]=$name_user;
 

 /***************************************/
  $id_payroll_groups=$x_value["id_payroll_groups"];
$db = new Database();
$db->connect();
$db->select("payroll_groups",'*',null,'id_payroll_groups='.$id_payroll_groups); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$payroll_groups = $db->getResult();
$res[0]["payroll_groups"]=$payroll_groups[0];

$db = new Database();
$db->connect();
$db->select("pay_grou_valu",'*',null,'id_payroll_groups='.$id_payroll_groups); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$pay_grou_valu = $db->getResult();
$res[0]["payroll_groups"]=$pay_grou_valu;


foreach($pay_grou_valu as $xx => $x_valuee)
    {
    $db = new Database();
$db->connect();
 $db->select("payroll_value",'*',null,'id_payroll_value='.$res[0]["payroll_groups"][$xx]["id_payroll_value"]); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$payroll_value = $db->getResult();
//echo $xx;
    $res[0]["payroll_groups"][$xx]["id_payroll_value"]=$payroll_value[0];

    }


 



 
 
 /***************************************/
  
  $id_categories=$x_value["id_categories"];
  $db = new Database();
$db->connect();
$db->select("categories",'*',null,'id_categories='.$id_categories); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$categories = $db->getResult();
 $res[0]["id_categories"]=$categories[0];

 /***************************************/
  
  $id_departments=$x_value["id_departments"];
  $db = new Database();
$db->connect();
$db->select("departments",'*',null,'id_departments='.$id_departments); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$departments = $db->getResult();
 $res[0]["id_departments"]=$departments[0];

 /***************************************/
  
  $id_positions=$x_value["id_positions"];
  $db = new Database();
$db->connect();
$db->select("positions",'*',null,'id_positions='.$id_positions); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$positions = $db->getResult();
$res[0]["id_positions"]=$positions[0];
//echo '<pre>';
//print_r($res[0]);
//echo '<pre>';
 /***************************************/
  
  $id_user=$x_value["id_user"];
  $db = new Database();
$db->connect();
$db->select("pr_user_insurance",'*',null,'id_user='.$id_user); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$pr_user_insurance = $db->getResult();

foreach ($pr_user_insurance as $key => $valu){
  $valu["id_insurance"];
   
    $db = new Database();
$db->connect();
 $db->select("insurance_setup",'*',null,"`name_insurance`='".$valu["id_insurance"]."'"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$insurance_setup = $db->getResult();
//echo $xx;
    $res[0]["insurance"][$key]=$insurance_setup[0];
   
};

/*************************/
 $db = new Database();
$db->connect();
$db->select("pr_user_languages",'*',null,'id_user='.$id_user); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$pr_user_languages = $db->getResult();
$i=0;
foreach ($pr_user_languages as $key => $valu){
   $valu["id_languages"];
   $db = new Database();
$db->connect();
 $db->select("languages",'*',null,"`name_languages`='".$valu["id_languages"]."'"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$languages = $db->getResult();
//echo $xx;
    $res[0]["languages"][$key]=$languages[0];
   
};

/*************************/
 $db = new Database();
$db->connect();
$db->select("pr_user_licenes",'*',null,'id_user='.$id_user); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$pr_user_licenes = $db->getResult();
$i=0;
foreach ($pr_user_licenes as $key => $valu){
   $valu["id_licenes"];
   $db = new Database();
$db->connect();
 $db->select("licenses",'*',null,"`name_licenses`='".$valu["id_licenes"]."'"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$licenes = $db->getResult();
//echo $xx;
    $res[0]["licenses"][$key]=$licenes[0];
   
};

/*************************/
 $db = new Database();
$db->connect();
$db->select("pr_user_skills",'*',null,'id_user='.$id_user); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$pr_user_skills = $db->getResult();
$i=0;
foreach ($pr_user_skills as $key => $valu){
   $valu["id_skills"];
   $db = new Database();
$db->connect();
 $db->select("skills",'*',null,"`name_skills`='".$valu["id_skills"]."'"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$skills = $db->getResult();
//echo $xx;
    $res[0]["skills"][$key]=$skills[0];
   
};
 
/*************************/
$db = new Database();
$db->connect();
$db->select("pr_user_tax",'*',null,'id_user='.$id_user); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$pr_user_tax = $db->getResult();
$i=0;
foreach ($pr_user_tax as $key => $valu){
   $valu["id_tax"];

   $db = new Database();
$db->connect();
 $db->select("tax",'*',null,"`name_tax`='".$valu["id_tax"]."'"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$tax = $db->getResult();
//echo $xx;
    $res[0]["tax"][$key]=$tax[0];
   
};
/*************************/
$db = new Database();
$db->connect();
$db->select("pr_user_leaves",'*',null,'id_user='.$id_user); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$pr_user_leaves = $db->getResult();
$i=0;
foreach ($pr_user_leaves as $key => $valu){
   $valu["id_leaves"];

   $db = new Database();
$db->connect();
 $db->select("leaves_rules",'*',null,"`name`='".$valu["id_leaves"]."'"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$leaves = $db->getResult();
//echo $xx;
    $res[0]["leaves"][$key]=$leaves[0];
   $leaves[0]["name"];
   
  $db = new Database();
$db->connect();
 $db->select("my_leaves",'*',null,"`id_leaves`='".$leaves[0]["name"]."' AND `id_user`='".$res[0]["id_user"]."'"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$my_leaves = $db->getResult();
foreach ($my_leaves as $keys => $valus){
    
       $res[0]["leaves"][$key]["my_leaves"][$keys]=$valus;

}
};






}
echo '<pre>';
print_r($res[0]);
echo '<pre>';