<?php
                                               

if(!isset($_GET["mod"])){  include '../IndexController.php';     } 
  

$tab="application";
/**************************ADD*********************************/
/***************************DROP*******************************/
if (isset($_GET['drop']) && $_GET['drop'] == 1)
    {
     $id_cat=$_GET["id_application"];

    $db = new Database();
$db->connect();
 $f='id_application='.$id_cat;

$db->delete($tab,$f);  // Table name, WHERE conditions
$res = $db->getResult(); 

if ($res[0] == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=appointment&action=appointment"/>
              <?php 

echo $done; 
        }
 else{
     

echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=appointment&action=appointment"/>

              <?php

 }

    }
    

    /**************************update********************************/
    if (isset($_POST['update']) && $_POST['update'] == 'update')
    {
     $f_name= $_POST['f_name'];
/*1*/$m_name = $_POST['m_name'];
/*1*/$l_name = $_POST['l_name'];
/*1*/$gender = $_POST['gender'];
/*1*/$religion = $_POST['religion'];
/*1*/$birthday = $_POST['birthday'];
/*1*/$national = $_POST['national'];
/*1*/$marrital = $_POST['marrital'];
/*1*/$blood = $_POST['blood'];
/*1*/$email = $_POST['email'];
/*1*/$mobile = $_POST['mobile'];
/*1*/$fax = $_POST['fax'];
/*1*/$landline = $_POST['landline'];
/*1*/$address = $_POST['address'];
/*1*/$other = $_POST['other'];
/*1*/$code = $_POST['code'];


/*1*/$date = $_POST['date'];
/*1*/$id_categories = $_POST['id_categories'];
/*1*/$date = $_POST['date'];
/*1*/$id_categories = $_POST['id_categories'];
/*1*/$id_pos = $_POST['id_pos'];
/*1*/$id_departments = $_POST['id_departments'];
/*1*/$a_school = $_POST['school'];
/*1*/$a_postion = $_POST['a_pos'];
/*1*/$a_start = $_POST['start'];
/*1*/$p_salary = $_POST['p_s'];
/*1*/$e_salary = $_POST['e_s'];
/*1*/$status = $_POST['status'];
/*1*/$id_applicationer = $_POST['id_application'];
    $db = new Database();
$db->connect();
         $conditions='id_application='.$id_applicationer;
/*****************************************/
$cx=$db->update( $tab,array('date'=>$date,'f_name_application'=>$f_name,'m_name_application'=>$m_name,'l_name_application'=>$l_name,
    'gender_application'=>$gender,'religion_application'=>$religion,'birthday_application'=>$birthday,
    'national_application'=>$national,'marrital_application'=>$marrital,
    'blood_application'=>$blood,'email_application'=>$email,'mobile_application'=>$mobile,'fax_application'=>$fax,
    'landline_application'=>$landline,
    'address_application'=>$address,'other_address_application'=>$other,'code_application'=>$code,
    'pass'=>$code."123",
    'id_categories'=>$id_categories,'id_departments'=>$id_pos,'id_position'=>$id_departments,'school'=>$a_school,
    'about_pos'=>$a_postion,'start'=>$a_start,'per_salary'=>$p_salary,'exp_salary'=>$e_salary),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();

$tab="application";
$id_application=$_POST["id_application"];
$conditions='id_application='.$id_application;

 $status=$_POST["status"];
if(!empty($status))
    {
$db = new Database();
$db->connect();
$db->update( $tab,array('status'=>$status),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();
if($status=="Pass")
    {
    
    $db = new Database();
$db->connect();
$db->select($tab,'*',null,$conditions); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();

foreach($res as $x => $x_value){
 /***************************************/

     $id_applications= $x_value['id_application'];
     $id_applications = $db->escapeString($id_applications); // Escape any input before insert

/*1*/$f_name_application = $x_value['f_name_application'];
$f_name_application = $db->escapeString($f_name_application); // Escape any input before insert

/*1*/$m_name_application = $x_value['m_name_application'];
$m_name_application = $db->escapeString($m_name_application); // Escape any input before insert

/*1*/$l_name_application = $x_value['l_name_application'];
$l_name_application = $db->escapeString($l_name_application); // Escape any input before insert

/*1*/$gender_application = $x_value['gender_application'];
$gender_application = $db->escapeString($gender_application); // Escape any input before insert

/*1*/$religion_application = $x_value['religion_application'];
$religion_application = $db->escapeString($religion_application); // Escape any input before insert

/*1*/$birthday_application = $x_value['birthday_application'];
$birthday_application = $db->escapeString($birthday_application); // Escape any input before insert

/*1*/$national_application = $x_value['national_application'];
$national_application = $db->escapeString($national_application); // Escape any input before insert

/*1*/$marrital_application = $x_value['marrital_application'];
$marrital_application = $db->escapeString($marrital_application); // Escape any input before insert

/*1*/$blood_application = $x_value['blood_application'];
$blood_application = $db->escapeString($blood_application); // Escape any input before insert

/*1*/$email_application = $x_value['email_application'];
$email_application = $db->escapeString($email_application); // Escape any input before insert

/*1*/$mobile_application = $x_value['mobile_application'];
$mobile_application = $db->escapeString($mobile_application); // Escape any input before insert

/*1*/$fax_application = $x_value['fax_application'];
$fax_application = $db->escapeString($fax_application); // Escape any input before insert

/*1*/$landline_application = $x_value['landline_application'];
$landline_application = $db->escapeString($landline_application); // Escape any input before insert

/*1*/$address_application = $x_value['address_application'];
$address_application = $db->escapeString($address_application); // Escape any input before insert

/*1*/$other_address_application = $x_value['other_address_application'];
$other_address_application = $db->escapeString($other_address_application); // Escape any input before insert

/*1*/$code_application = $x_value['code_application'];
$code_application = $db->escapeString($code_application); // Escape any input before insert

/*1*/$pass = $x_value['pass'];
$pass = $db->escapeString($pass); // Escape any input before insert

/*1*/$img = $x_value['img'];
$img = $db->escapeString($img); // Escape any input before insert

/*1*/$id_categories = $x_value['id_categories'];
$id_categories = $db->escapeString($id_categories); // Escape any input before insert

/*1*/$id_departments = $x_value['id_departments'];
$id_departments = $db->escapeString($id_departments); // Escape any input before insert

/*1*/ $id_position = $x_value['id_position'];
$id_position = $db->escapeString($id_position); // Escape any input before insert



$dbs = new Database();
$dbs->connect();

 $cxa=$dbs->insert("user",array('pass'=>$pass,'code_user'=>$code_application,
    'f_name_user'=>$f_name_application,'m_name_user'=>$m_name_application,'l_name_user'=>$l_name_application,
    'gender_user'=>$gender_application,'religion_user'=>$religion_application,'birthday_user'=>$birthday_application,
    'national_user'=>$national_application,'id_categories'=>$id_categories,'id_departments'=>$id_departments,'id_positions'=>$id_position,
    'marrital_user'=>$marrital_application,'blood_user'=>$blood_application,'email_user'=>$email_application,'mobile_user'=>$mobile_application,
    'fax_user'=>$fax_application,'landline_user'=>$landline_application,'address_user'=>$address_application,'other_address_user'=>$other_address_application));  // Table name, column names and respective values
    $raess = $dbs->getResult();  
 $id_user=$raess[0];

$db = new Database();
$db->connect();
$db->select("educational",'*',null,'id_application='.$id_applications); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
    
foreach($res as $x => $x_value){
 /***************************************/

echo $id_educational= $x_value['id_educational'];
    
$conditions='id_educational='.$id_educational;

$db = new Database();
$db->connect();
$db->update( "educational",array('id_user'=>$id_user,'id_application'=>""),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();


}

$db = new Database();
$db->connect();
$db->select("previuos",'*',null,'id_application='.$id_applications); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
    
foreach($res as $x => $x_value){
 /***************************************/

$id_previuos= $x_value['id_previuos'];
         $conditions='id_previuos='.$id_previuos;

$db = new Database();
$db->connect();
$db->update( "previuos",array('id_user'=>$id_user,'id_application'=>""),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();


}
    
    
}
    
    
    
}elseif($status=="pending") {
    $db = new Database();
$db->connect();
$db->update( $tab,array('date'=>""),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();
}elseif($status=="Fail") {
    $db = new Database();
$db->connect();
$db->update( $tab,array('action'=>"desactive"),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();
}
    }  

  
if ($cx == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=appointment&action=appointment"/>
             
 <?php 
echo $done; 
        }
 else{
      

echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=appointment&action=appointment"/>

              <?php

 }

    }
    
/**************************viwe&******************************/
    if(!isset($id_application))
        {
$db = new Database();
$db->connect();
$db->select("application",'*',null,"`status` = 'Appointment'"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
       } 
        else
            {
 /****************************viwe_by_id***********************************/
$db = new Database();
$db->connect();
$db->select($tab,'*',null,'id_'.$tab.'='.$id_application); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();

foreach($res as $x => $x_value){
 /***************************************/
  
  $id_categories=$x_value["id_categories"];
  $db = new Database();
$db->connect();
$db->select("categories",'*',null,'id_categories='.$id_categories); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
 $name_categories=$res[0]["name_categories"];
 /***************************************/
  
  $id_departments=$x_value["id_departments"];
  $db = new Database();
$db->connect();
$db->select("departments",'*',null,'id_departments='.$id_departments); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
 $name_departments=$res[0]["name_departments"];
 /***************************************/
  
  $id_positions=$x_value["id_position"];
  $db = new Database();
$db->connect();
$db->select("positions",'*',null,'id_positions='.$id_positions); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
 $name_positions=$res[0]["name_positions"];
 /***************************************/
 
/*************************/
 

}
//$dbbc = new Database();
//$dbbc->connect();
//$dbbc->select("application"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
//$application = $dbbc->getResult();
//
//$dx = new Database();
//$dx->connect();
//$dx->select("categories"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
//$cats= $dx->getResult();




          

}
if(isset($appointment))
        {
       }