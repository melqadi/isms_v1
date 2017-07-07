<?php
if(!isset($_GET["mod"])){  include '../IndexController.php';     } 
$tab="user";
/**************************ADD*********************************/
if (isset($_POST['add']) && $_POST['add'] == 'add')
    {


/*1*/$period= $_POST['period'];
/*1*/$f_name= $_POST['f_name'];
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
/*1*/$id_nationality = $_POST['nationality'];
/*1*/$code = $_POST['code'];
/*1*/$join = $_POST['join'];
    $db = new Database();
$db->connect();

$joine = $db->escapeString($join); // Escape any input before insert
$periode = $db->escapeString($period); // Escape any input before insert
$codee = $db->escapeString($code); // Escape any input before insert
$f_namee = $db->escapeString($f_name); // Escape any input before insert
$m_namee = $db->escapeString($m_name); // Escape any input before insert
$l_namee = $db->escapeString($l_name); // Escape any input before insert
$gendere = $db->escapeString($gender); // Escape any input before insert
$religione = $db->escapeString($religion); // Escape any input before insert
$birthdaye = $db->escapeString($birthday); // Escape any input before insert
$nationale = $db->escapeString($national); // Escape any input before insert
$marritale = $db->escapeString($marrital); // Escape any input before insert
$bloode = $db->escapeString($blood); // Escape any input before insert
$emaile = $db->escapeString($email); // Escape any input before insert
$mobilee = $db->escapeString($mobile); // Escape any input before insert
$faxe = $db->escapeString($fax); // Escape any input before insert
$landlinee = $db->escapeString($landline); // Escape any input before insert
$addresse = $db->escapeString($address); // Escape any input before insert
$othere = $db->escapeString($other); // Escape any input before insert
$id_nationalitye = $db->escapeString($id_nationality); // Escape any input before insert
$cx=$db->insert($tab,array('pass'=>$codee."123",'code_user'=>$codee,'periode'=>$periode,'joining'=>$joine,'f_name_user'=>$f_namee,'m_name_user'=>$m_namee,'l_name_user'=>$l_namee,'gender_user'=>$gendere,'religion_user'=>$religione,'birthday_user'=>$birthdaye,'national_user'=>$nationale,'marrital_user'=>$marritale,'blood_user'=>$bloode,'email_user'=>$emaile,'mobile_user'=>$mobilee,'fax_user'=>$faxe,'landline_user'=>$landlinee,'address_user'=>$addresse,'other_address_user'=>$othere,'id_nationality'=>$id_nationalitye));  // Table name, column names and respective values

$res = $db->getResult();
$id_user=$res[0];

if ($cx == 1) {
$tab="user";
//$id_user=$_POST["id_user"];
$conditions='id_user='.$id_user;

 $rules=$_POST["rules"];
if(!empty($rules))
    {
$db = new Database();
$db->connect();
$db->update( $tab,array('id_rules'=>$rules),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();

    }

$user=$_POST["user"];
if(!empty($user))
    {
     $db = new Database();
$db->connect();
$db->update( $tab,array('id_direct_manger'=>$user),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();

    }

$payroll_groups=$_POST["payroll_groups"];
if(!empty($payroll_groups))
    {
$db = new Database();
$db->connect();
$db->update( $tab,array('id_payroll_groups'=>$payroll_groups),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();

    }

$id_categories=$_POST["id_categories"];
if(!empty($id_categories))
    {
       $db = new Database();
$db->connect();
$db->update( $tab,array('id_categories'=>$id_categories),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();

    }

$id_departments=$_POST["id_departments"];
if(!empty($id_departments))
    {
       $db = new Database();
$db->connect();
$db->update( $tab,array('id_departments'=>$id_departments),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();

    }

$id_pos=$_POST["id_pos"];
if(!empty($id_pos))
    {
      $db = new Database();
$db->connect();
$db->update( $tab,array('id_positions'=>$id_pos),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();

    }

$languages=$_POST["languages"];/**m*/
if(!empty($languages))
    {
          foreach ($languages as $selectedOption)
{
$dbx = new Database();
$dbx->connect();
 $languagess = $dbx->escapeString($selectedOption); // Escape any input before insert
 $id_userr = $dbx->escapeString($id_user); // Escape any input before insert

//$dbx->insert("pr_user_languages",array("id_user"=>$id_userr,"id_languages"=>$languagess));
$cxx=$dbx->insert("pr_user_languages",array('id_user'=>$id_userr,'id_languages'=>$languagess));  // Table name, column names and respective values
// Table name, column names and values, WHERE conditions
$ress = $dbx->getResult();
}
}
/********************************************************/
$skills=$_POST["skills"];/**m*/
if(!empty($skills))
    {
          foreach ($skills as $selected)
{
$dbxj = new Database();
$dbxj->connect();
$skillss=$dbxj->escapeString($selected); // Escape any input before insert
$id_userr=$dbxj->escapeString($id_user); // Escape any input before insert
$dbxj->insert("pr_user_skills",array('id_user'=>$id_userr,'id_skills'=>$skillss));  // Table name, column names and respective values
$ress=$dbxj->getResult();


}
}
$priv=$_POST["priv"];/**m*/
if(!empty($priv))
    {

$dbxj = new Database();
$dbxj->connect();
$skillss=$dbxj->escapeString($selected); // Escape any input before insert
$id_userr=$dbxj->escapeString($id_user); // Escape any input before insert
$dbxj->insert("pr_user_role",array('id_user'=>$id_userr,'name_role'=>$priv));  // Table name, column names and respective values
$ress=$dbxj->getResult();


}
/********************************************************/
$licenes=$_POST["licenes"];/**m*/
if(!empty($licenes))
    {
          foreach ($licenes as $selected)
{
$dbxj = new Database();
$dbxj->connect();
$liceness=$dbxj->escapeString($selected); // Escape any input before insert
$id_userr=$dbxj->escapeString($id_user); // Escape any input before insert
$dbxj->insert("pr_user_licenes",array('id_user'=>$id_userr,'id_licenes'=>$liceness));  // Table name, column names and respective values
$ress=$dbxj->getResult();


}
}
/********************************************************/

$insurance=$_POST["insurance"];/**m*/
if(!empty($insurance))
    {
          foreach ($insurance as $selected)
{
$dbxj = new Database();
$dbxj->connect();
 $insurances=$dbxj->escapeString($selected); // Escape any input before insert
 $id_userr=$dbxj->escapeString($id_user); // Escape any input before insert
$dbxj->insert("pr_user_insurance",array('id_user'=>$id_userr,'id_insurance'=>$insurances));  // Table name, column names and respective values
$ress=$dbxj->getResult();


}
}
/********************************************************/

$taxx=$_POST["tax"];/**m*/
if(!empty($taxx))
    {
          foreach ($taxx as $selected)
{
$dbxj = new Database();
$dbxj->connect();
$taxs=$dbxj->escapeString($selected); // Escape any input before insert
$id_userr=$dbxj->escapeString($id_user); // Escape any input before insert
$dbxj->insert("pr_user_tax",array('id_user'=>$id_userr,'id_tax'=>$taxs));  // Table name, column names and respective values
$ress=$dbxj->getResult();


}
}
$leave=$_POST["leave"];/**m*/
if(!empty($leave))
    {
          foreach ($leave as $selected)
{
$dbxj = new Database();
$dbxj->connect();
$leaves=$dbxj->escapeString($selected); // Escape any input before insert
$id_userr=$dbxj->escapeString($id_user); // Escape any input before insert
$dbxj->insert("pr_user_leaves",array('id_user'=>$id_userr,'id_leaves'=>$leaves));  // Table name, column names and respective values
$ress=$dbxj->getResult();


}
}
    ?>

        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=account&action=account"/>
              <?php 

echo $done; 
        }
 else{
    

echo $not; 
?>
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=account&action=account"/>

              <?php

 }




}
/***************************DROP*******************************/
if (isset($_GET['drop']) && $_GET['drop'] == 1)
    {
     $id_cat=$_GET["id_user"];

    $db = new Database();
$db->connect();
 $f='id_user='.$id_cat;

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
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=account&action=account"/>

              <?php

 }

    }

if (isset($_GET['dropp']) && $_GET['dropp'] == 2)
    {
     $id_cat=$_GET["id_user"];
     $name=$_GET["name"];

    $db = new Database();
$db->connect();
  $g="`id_user` = ".$id_cat." AND `id_insurance` = '".$name."'";

$db->deleteall("pr_user_insurance",$g);  // Table name, WHERE conditions
$res = $db->getResult();

if ($res[0] == 1) {
    ?>
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=account&action=payroll&id_user=<?php echo $id_cat; ?>"/>
              <?php 

echo $done; 
        }
 else{
     

echo $not; 
?>
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=account&action=payroll&id_user=<?php echo $id_cat; ?>"/>

              <?php

 }

    }
if (isset($_GET['dropp']) && $_GET['dropp'] == 3)
    {
     $id_cat=$_GET["id_user"];
     $name=$_GET["name"];

    $db = new Database();
$db->connect();
  $g="`id_user` = ".$id_cat." AND `id_languages` = '".$name."'";

$db->deleteall("pr_user_languages",$g);  // Table name, WHERE conditions
$res = $db->getResult();

if ($res[0] == 1) {
    ?>
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=account&action=account_viwe&id_user=<?php echo $id_cat; ?>"/>
              <?php 


echo $done; 
        }
 else{
     

echo $not; 
?>
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=account&action=account_viwe&id_user=<?php echo $id_cat; ?>"/>

              <?php

 }

    }
if (isset($_GET['dropp']) && $_GET['dropp'] == 4)
    {
     $id_cat=$_GET["id_user"];
     $name=$_GET["name"];

    $db = new Database();
$db->connect();
  $g="`id_user` = ".$id_cat." AND `id_licenes` = '".$name."'";

$db->deleteall("pr_user_licenes",$g);  // Table name, WHERE conditions
$res = $db->getResult();

if ($res[0] == 1) {
    ?>
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=account&action=account_viwe&id_user=<?php echo $id_cat; ?>"/>
              <?php 

echo $done; 
        }
 else{

echo $not; 
?>
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=account&action=account_viwe&id_user=<?php echo $id_cat; ?>"/>

              <?php

 }

    }
if (isset($_GET['dropp']) && $_GET['dropp'] == 5)
    {
     $id_cat=$_GET["id_user"];
     $name=$_GET["name"];

    $db = new Database();
$db->connect();
  $g="`id_user` = ".$id_cat." AND `id_skills` = '".$name."'";

$db->deleteall("pr_user_skills",$g);  // Table name, WHERE conditions
$res = $db->getResult();

if ($res[0] == 1) {
    ?>
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=account&action=account_viwe&id_user=<?php echo $id_cat; ?>"/>
              <?php 

echo $done; 
        }
 else{

echo $not; 
?>
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=account&action=account_viwe&id_user=<?php echo $id_cat; ?>"/>

              <?php

 }

    }
if (isset($_GET['dropp']) && $_GET['dropp'] == 6)
    {
     $id_cat=$_GET["id_user"];
     $name=$_GET["name"];

    $db = new Database();
$db->connect();
  $g="`id_user` = ".$id_cat." AND `id_tax` = '".$name."'";

$db->deleteall("pr_user_tax",$g);  // Table name, WHERE conditions
$res = $db->getResult();

if ($res[0] == 1) {
    ?>
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=account&action=payroll&id_user=<?php echo $id_cat; ?>"/>
              <?php 

echo $done; 
        }
 else{
     

echo $not; 
?>
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=account&action=payroll&id_user=<?php echo $id_cat; ?>"/>

              <?php

 }

    }
if (isset($_GET['dropp']) && $_GET['dropp'] == 7)
    {
     $id_cat=$_GET["id_user"];
     $name=$_GET["name"];

    $db = new Database();
$db->connect();
  $g="`id_user` = ".$id_cat." AND `id_leaves` = '".$name."'";

$db->deleteall("pr_user_leaves",$g);  // Table name, WHERE conditions
$res = $db->getResult();

if ($res[0] == 1) {
    ?>
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=account&action=account_viwe&id_user=<?php echo $id_cat; ?>"/>
              <?php 

echo $done; 
        }
 else{

echo $not; 
?>
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=account&action=account_viwe&id_user=<?php echo $id_cat; ?>"/>

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
/*1*/$id_nationality = $_POST['nationality'];
/*1*/$code = $_POST['code'];
/*1*/$join = $_POST['join'];
/*1*/$id_userer = $_POST['id_user'];

    $db = new Database();
$db->connect();

         $conditions='id_user='.$id_userer;
/*****************************************/

$cx=$db->update( $tab,array('code_user'=>$code,'joining'=>$join,'f_name_user'=>$f_name,'m_name_user'=>$m_name,'l_name_user'=>$l_name,'gender_user'=>$gender,
    'religion_user'=>$religion,'birthday_user'=>$birthday,'national_user'=>$national,'marrital_user'=>$marrital,'blood_user'=>$blood,'email_user'=>$email,'mobile_user'=>$mobile,'fax_user'=>$fax,'landline_user'=>$landline,'address_user'=>$address,'other_address_user'=>$other,'id_nationality'=>$id_nationality),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();

$tab="user";
$id_user=$_POST["id_user"];
$conditions='id_user='.$id_user;


$rules=$_POST["rules"];
if(!empty($rules))
    {
$db = new Database();
$db->connect();
$db->update( $tab,array('id_rules'=>$rules),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();

    }
       $periode= $_POST['periode'];
if(!empty($periode))
    {
$db = new Database();
$db->connect();
$db->update( $tab,array('periode'=>$periode,'id_rules'=>""),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();

    }else{
$db = new Database();
$db->connect();
$db->update( $tab,array('periode'=>"approve"),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();
       }

$user=$_POST["user"];
if(!empty($user))
    {
     $db = new Database();
$db->connect();
$db->update( $tab,array('id_direct_manger'=>$user),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();

    }

$payroll_groups=$_POST["payroll_groups"];
if(!empty($payroll_groups))
    {
$db = new Database();
$db->connect();
$db->update( $tab,array('id_payroll_groups'=>$payroll_groups),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();

    }
    $salry=$_POST["salaryy"];
if(!empty($salry))
    {
$db = new Database();
$db->connect();
$db->update( $tab,array('salary'=>$salry),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();

    }

$id_categories=$_POST["id_categories"];
if(!empty($id_categories))
    {
       $db = new Database();
$db->connect();
$db->update( $tab,array('id_categories'=>$id_categories),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();

    }

$id_departments=$_POST["id_departments"];
if(!empty($id_departments))
    {
       $db = new Database();
$db->connect();
$db->update( $tab,array('id_departments'=>$id_departments),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();

    }

$id_pos=$_POST["id_pos"];
if(!empty($id_pos))
    {
      $db = new Database();
$db->connect();
$db->update( $tab,array('id_positions'=>$id_pos),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();

    }

$languages=$_POST["languages"];/**m*/
if(!empty($languages))
    {
          foreach ($languages as $selectedOption)
{
$dbx = new Database();
$dbx->connect();
 $languagess = $dbx->escapeString($selectedOption); // Escape any input before insert
 $id_userr = $dbx->escapeString($id_user); // Escape any input before insert

//$dbx->insert("pr_user_languages",array("id_user"=>$id_userr,"id_languages"=>$languagess));
$cxx=$dbx->insert("pr_user_languages",array('id_user'=>$id_userr,'id_languages'=>$languagess));  // Table name, column names and respective values
// Table name, column names and values, WHERE conditions
$ress = $dbx->getResult();
}
}
/********************************************************/
$skills=$_POST["skills"];/**m*/
if(!empty($skills))
    {
          foreach ($skills as $selected)
{
$dbxj = new Database();
$dbxj->connect();
$skillss=$dbxj->escapeString($selected); // Escape any input before insert
$id_userr=$dbxj->escapeString($id_user); // Escape any input before insert
$dbxj->insert("pr_user_skills",array('id_user'=>$id_userr,'id_skills'=>$skillss));  // Table name, column names and respective values
$ress=$dbxj->getResult();


}
}
/********************************************************/
$licenes=$_POST["licenes"];/**m*/
if(!empty($licenes))
    {
          foreach ($licenes as $selected)
{
$dbxj = new Database();
$dbxj->connect();
$liceness=$dbxj->escapeString($selected); // Escape any input before insert
$id_userr=$dbxj->escapeString($id_user); // Escape any input before insert
$dbxj->insert("pr_user_licenes",array('id_user'=>$id_userr,'id_licenes'=>$liceness));  // Table name, column names and respective values
$ress=$dbxj->getResult();


}
}
/********************************************************/

$insurance=$_POST["insurance"];/**m*/
if(!empty($insurance))
    {
          foreach ($insurance as $selected)
{
$dbxj = new Database();
$dbxj->connect();
 $insurances=$dbxj->escapeString($selected); // Escape any input before insert
 $id_userr=$dbxj->escapeString($id_user); // Escape any input before insert
$dbxj->insert("pr_user_insurance",array('id_user'=>$id_userr,'id_insurance'=>$insurances));  // Table name, column names and respective values
$ress=$dbxj->getResult();


}
}
/********************************************************/

$tax=$_POST["tax"];/**m*/
if(!empty($tax))
    {
          foreach ($tax as $selected)
{
$dbxj = new Database();
$dbxj->connect();
$taxs=$dbxj->escapeString($selected); // Escape any input before insert
$id_userr=$dbxj->escapeString($id_user); // Escape any input before insert
$dbxj->insert("pr_user_tax",array('id_user'=>$id_userr,'id_tax'=>$taxs));  // Table name, column names and respective values
$ress=$dbxj->getResult();


}
}
$leauvs=$_POST["leavs"];/**m*/
if(!empty($leauvs))
    {
          foreach ($leauvs as $selected)
{
$dbxj = new Database();
$dbxj->connect();
$leauvss=$dbxj->escapeString($selected); // Escape any input before insert
$id_userr=$dbxj->escapeString($id_user); // Escape any input before insert
$dbxj->insert("pr_user_leaves",array('id_user'=>$id_userr,'id_leaves'=>$leauvss));  // Table name, column names and respective values
$ress=$dbxj->getResult();


}
}



if ($cx == 1) {
    ?>
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=account&action=account"/>

 <?php 

echo $done; 
        }
 else{
    

echo $not; 
?>
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=account&action=account"/>

              <?php

 }


    }
    /**************************pyrool*********************************/
        if (isset($_POST['pyrool']) && $_POST['pyrool'] == 'pyrool')
        {
            /*1*/$id_userer = $_POST['id_user'];

                     $conditions='id_user='.$id_userer;
                     /********************************************************/

$tax=$_POST["tax"];/**m*/
if(!empty($tax))
    {
          foreach ($tax as $selected)
{
$dbxj = new Database();
$dbxj->connect();
$taxs=$dbxj->escapeString($selected); // Escape any input before insert
$id_userr=$dbxj->escapeString($id_userer); // Escape any input before insert
$dbxj->insert("pr_user_tax",array('id_user'=>$id_userr,'id_tax'=>$taxs));  // Table name, column names and respective values
$ress=$dbxj->getResult();


}
}
/**********************************/
$insurance=$_POST["insurance"];/**m*/
if(!empty($insurance))
    {
          foreach ($insurance as $selected)
{
$dbxj = new Database();
$dbxj->connect();
 $insurances=$dbxj->escapeString($selected); // Escape any input before insert
 $id_userr=$dbxj->escapeString($id_userer); // Escape any input before insert
$dbxj->insert("pr_user_insurance",array('id_user'=>$id_userr,'id_insurance'=>$insurances));  // Table name, column names and respective values
$ress=$dbxj->getResult();


}
}
/****************************************/
$salry=$_POST["salaryy"];
if(!empty($salry))
    {
$db = new Database();
$db->connect();
$cx=$db->update( $tab,array('salary'=>$salry),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();

    }
    
    /**********************************/
    
$payroll_groups=$_POST["payroll_groups"];
if(!empty($payroll_groups))
    {
$db = new Database();
$db->connect();
$db->update( $tab,array('id_payroll_groups'=>$payroll_groups),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();

    }
    
if ($cx == 1) {
    ?>
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=account&action=account"/>

 <?php 

echo $done; 
        }
 else{
    

echo $not; 
?>
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=account&action=account"/>

              <?php

 }


        }
/**************************viwe&******************************/
    if(!isset($id_user))
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
$db->select($tab,'*',null,'id_'.$tab.'='.$id_user); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();

foreach($res as $x => $x_value){
    /****************************/
$id_nationality=$x_value["id_nationality"];
$db = new Database();
$db->connect();
$db->select("nationalities",'*',null,'id_nationalities='.$id_nationality); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
 $name_nationalities=$res[0]["name_nationalities"];
  /*************************/
 $id_rules=$x_value["id_rules"];
 $db = new Database();
$db->connect();
$db->select("rules",'*',null,'id_rules='.$id_rules); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
 $name_rules=$res[0]["name_rules"];
 /********************************/
  $id_direct_manger=$x_value["id_direct_manger"];
  $db = new Database();
$db->connect();
$db->select("user",'*',null,'id_user='.$id_direct_manger); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
 $name_user=$res[0]["f_name_user"]." ".$res[0]["m_name_user"]." ".$res[0]["l_name_user"];
 /***************************************/
  $id_payroll_groups=$x_value["id_payroll_groups"];
  $db = new Database();
$db->connect();
$db->select("payroll_groups",'*',null,'id_payroll_groups='.$id_payroll_groups); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
 $name_payroll_groups=$res[0]["name_payroll_groups"];
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

  $id_positions=$x_value["id_positions"];
  $db = new Database();
$db->connect();
$db->select("positions",'*',null,'id_positions='.$id_positions); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
 $name_positions=$res[0]["name_positions"];
 /***************************************/

  $id_user=$x_value["id_user"];
  $db = new Database();
$db->connect();
$db->select("pr_user_insurance",'*',null,'id_user='.$id_user); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$pr_user_insurance = $db->getResult();
$i=0;
foreach ($pr_user_insurance as $key => $valu){
   $in[$i] =$valu["id_insurance"];
   $i=$i+1;
};
//  echo"<pre>";
//print_r($in);
//echo"<pre>";

/*************************/
 $db = new Database();
$db->connect();
$db->select("pr_user_languages",'*',null,'id_user='.$id_user); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$pr_user_languages = $db->getResult();
$i=0;
foreach ($pr_user_languages as $key => $valu){
   $langes[$i] =$valu["id_languages"];
   $i=$i+1;
};
//  echo"<pre>";
//print_r($langes);
//echo"<pre>";
/*************************/
 $db = new Database();
$db->connect();
$db->select("pr_user_licenes",'*',null,'id_user='.$id_user); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$pr_user_licenes = $db->getResult();
$i=0;
foreach ($pr_user_licenes as $key => $valu){
   $lices[$i] =$valu["id_licenes"];
   $i=$i+1;
};
//  echo"<pre>";
//print_r($lices);
//echo"<pre>";

/*************************/
 $db = new Database();
$db->connect();
$db->select("pr_user_skills",'*',null,'id_user='.$id_user); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$pr_user_skills = $db->getResult();
$i=0;
foreach ($pr_user_skills as $key => $valu){
   $skill[$i] =$valu["id_skills"];
   $i=$i+1;
};
//  echo"<pre>";
//print_r($skil);
//echo"<pre>";
/*************************/
$db = new Database();
$db->connect();
$db->select("pr_user_tax",'*',null,'id_user='.$id_user); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$pr_user_tax = $db->getResult();
$i=0;
foreach ($pr_user_tax as $key => $valu){
   $taxd[$i] =$valu["id_tax"];
   $i=$i+1;
};
//  echo"<pre>";
//print_r($tax);
//echo"<pre>";

/*************************/
$db = new Database();
$db->connect();
$db->select("pr_user_leaves",'*',null,'id_user='.$id_user); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$pr_user_leaves = $db->getResult();
$i=0;
foreach ($pr_user_leaves as $key => $valu){
   $leav[$i] =$valu["id_leaves"];
   $i=$i+1;
};
//  echo"<pre>";
//print_r($tax);
//echo"<pre>";






}
  $db = new Database();
$db->connect();
$db->select("nationalities"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();

$dbb = new Database();
$dbb->connect();
$dbb->select("rules"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$rules = $dbb->getResult();



$dbbc = new Database();
$dbbc->connect();
$dbbc->select("user"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$user = $dbbc->getResult();



$dbc = new Database();
$dbc->connect();
$dbc->select("payroll_groups"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$payroll_groups = $dbc->getResult();


$dbccc = new Database();
$dbccc->connect();
$dbccc->select("skills"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$skil = $dbccc->getResult();


$dbsc = new Database();
$dbsc->connect();
$dbsc->select("languages"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$lan= $dbsc->getResult();


$dbct = new Database();
$dbct->connect();
$dbct->select("licenses"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$lain = $dbct->getResult();


$dbccct = new Database();
$dbccct->connect();
$dbccct->select("insurance_setup"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$ins = $dbccct->getResult();


$dbsct = new Database();
$dbsct->connect();
$dbsct->select("tax"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$tax= $dbsct->getResult();

$dbsct = new Database();
$dbsct->connect();
$dbsct->select("leaves_dep",'*',null,'`id` = "'.$name_departments.'" AND `type` = "departments" or `id` = "'.$name_positions.'" AND `type` = "positions" or `id` = "'.$name_rules.'" AND `type` = "rules"'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$lea= $dbsct->getResult();

$i=0;
foreach($lea as $leai){

$db = new Database();
$db->connect();
$db->select("leaves_rules",'*',null,'id_leaves_rules='.$leai["id_leaves_rules"]); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$pr_user_leaves = $db->getResult();

   $lesrt[$i] =$pr_user_leaves[0];
   $i=$i+1;


}
$db = new Database();
$db->connect();
$db->select("leaves_rules",'*',null,'applied="All"'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$all_lev = $db->getResult();
$result = count($all_lev);

foreach($all_lev as $all_levv){
    $result=$result+1;
    $lesrt[$result]=$all_levv;
}


//echo '<pre>';
//print_r($lesrt);
//echo '<pre>';
//exit();
$dx = new Database();
$dx->connect();
$dx->select("categories"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$cats= $dx->getResult();

$dx = new Database();
$dx->connect();
$dx->selectall("role_setup","DISTINCT `name_role`"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$privled= $dx->getResult();






}
