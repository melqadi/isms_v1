<?php
                                               

if(!isset($_GET["mod"])){  include '../IndexController.php';     } 
  


$tab="leaves_rules";

/**************************ADD*********************************/
if (isset($_POST['add']) && $_POST['add'] == 'add')
    {
//    
/*1*/$name= $_POST['name'];
$db = new Database();
$db->connect();
$db->select("leaves_rules",'*',null,'name="'.$name.'"'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();

if($res[0]["name"]==$name)
    {
    
    ?> 
<meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=leaves_rules&action=leaves_rules"/>
              <?php 


echo $dupli; 
exit();

    }
/*1*/$days = $_POST['days'];
/*1*/$type = $_POST['type'];
if($type=="permission")
    {
    /*1*/$early = $_POST['early'];
    /*1*/$late = $_POST['late'];
$permission=$early.",".$late;
    }
/*1*/$applied = $_POST['applied'];
if($applied=="selected")
    {
    $selected = $_POST['selected'];
    
    }
/*1*/  $department = $_POST['department'];
/*1*/  $position = $_POST['position'];
/*1*/  $status = $_POST['status'];
/*1*/  $start = $_POST['start'];
if($start=="")
    {
    /*1*/  $start = $_POST['startt'];

    }
/*1*/  $end = $_POST['end'];


/*1*/  $reset = $_POST['reset'];
/*1*/  $forward = $_POST['forward'];
/*1*/  $w_as = $_POST['w_as'];
/*1*/  $w_form = $_POST['w_from'];
/*1*/  $h_as = $_POST['h_as'];
/*1*/  $h_form = $_POST['h_from'];
    $db = new Database();
$db->connect();
$name = $db->escapeString($name); // Escape any input before insert
$days = $db->escapeString($days); // Escape any input before insert
$type = $db->escapeString($type); // Escape any input before insert
$permission = $db->escapeString($permission); // Escape any input before insert
$applied = $db->escapeString($applied); // Escape any input before insert
$selected = $db->escapeString($selected); // Escape any input before insert
//echo '<pre>';
//print_r($selected); 
//echo '<pre>';
//exit();

$cx=$db->insert($tab,array('name'=>$name,'days'=>$days,'type'=>$type,'permission'=>$permission,
    'applied'=>$applied,'select'=>$selected,'rang_start'=>$start,'rang_end'=>$end,'reset'=>$reset,
    'forward'=>$forward,'w_as'=>$w_as,'w_form'=>$w_form,'h_as'=>$h_as,'h_form'=>$h_form,
    'action'=>"active",));  // Table name, column names and respective values
$res = $db->getResult();  
$id_leaves_rules=$res[0];

//if($applied=="All")
//    {
//    $db = new Database();
//$db->connect();
//$db->select("user"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
//$res = $db->getResult();
//
//foreach ($res as $keyys=>$valyu)
//{
//    $id_leaves_rules;
//     $idkll=$valyu["id_user"];
// $dbx = new Database();
// $dbx->connect();
// $oou = $dbx->escapeString($oou); // Escape any input before insert
// $id_userr = $dbx->escapeString($id_leaves_rules); // Escape any input before insert
//
////$dbx->insert("pr_user_languages",array("id_user"=>$id_userr,"id_languages"=>$languagess)); 
//$cxx=$dbx->insert("pr_user_leaves",array('id_user'=>$idkll,'id_leaves'=>$name));  // Table name, column names and respective values
//// Table name, column names and values, WHERE conditions
//$ress = $dbx->getResult();
//
//
//}
//    }
//
//
//
//
if($selected=="department")  {
    $key="id";
    $val=$department;
           $tabls="leaves_dep" ;
           $tabsl="departments";

    }
elseif ($selected=="position") {
    
    $key="id";
    $val=$position;
           $tabls="leaves_dep" ;
           $tabsl="positions";

}   
elseif ($selected=="status")   {
$key="id";
    $val=$status;
       $tabls="leaves_dep" ;
                  $tabsl="rules";

    }
//
   foreach ($val as $oou)
{
 $dbx = new Database();
 $dbx->connect();
 $oou = $dbx->escapeString($oou); // Escape any input before insert
 $id_userr = $dbx->escapeString($id_leaves_rules); // Escape any input before insert

$cxx=$dbx->insert($tabls,array('id_leaves_rules'=>$id_userr,$key=>$oou,'type'=>$tabsl));  // Table name, column names and respective values
// Table name, column names and values, WHERE conditions
$ress = $dbx->getResult();

//$db = new Database();
//$db->connect();
//$db->select($tabsl,'*',null,'`name_'.$tabsl.'`="'.$oou.'"'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
//$res = $db->getResult();
// $idt=$res[0]["id_".$tabsl];
// $db = new Database();
//$db->connect();
//$db->select("user",'*',null,'`id_'.$tabsl.'`="'.$idt.'"'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
//$res = $db->getResult();
//echo "<pre>";
//print_r($res);
//echo "<pre>";
//foreach ($res as $keyys=>$valyu)
//{
//    $id_leaves_rules;
//     $idkll=$valyu["id_user"];
// $dbx = new Database();
// $dbx->connect();
// $oou = $dbx->escapeString($oou); // Escape any input before insert
// $id_userr = $dbx->escapeString($id_leaves_rules); // Escape any input before insert
//
////$dbx->insert("pr_user_languages",array("id_user"=>$id_userr,"id_languages"=>$languagess)); 
//$cxx=$dbx->insert("pr_user_leaves",array('id_user'=>$idkll,'id_leaves'=>$name));  // Table name, column names and respective values
//// Table name, column names and values, WHERE conditions
//$ress = $dbx->getResult();
//
//
//}

} 
//    
if ($cx == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=leaves_rules&action=leaves_rules_add"/>
              <?php



echo $done; 
        }
 else{
 

echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=leaves_rules&action=leaves_rules_add"/>

              <?php

 }

    
    
    
}
/***************************DROP*******************************/
if (isset($_GET['drop']) && $_GET['drop'] == 1)
    {
     $id_cat=$_GET["id_".$tab];

$db = new Database();
$db->connect();
$db->select("leaves_rules",'*',null,'id_leaves_rules='.$id_cat); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
$nameee=$res[0]["name"];
$db = new Database();
$db->connect();
$db->select("pr_user_leaves",'*',null,'id_leaves="'.$nameee.'"'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
if(empty($res)){
    $db = new Database();
$db->connect();
 $f='id_leaves_rules='.$id_cat;

$db->delete($tab,$f);  // Table name, WHERE conditions
$res = $db->getResult(); 
if ($res[0] == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=leaves_rules&action=leaves_rules"/>
              <?php

 

echo $done; 
        }
 else{
 

echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=leaves_rules&action=leaves_rules"/>

              <?php

 }
}else {
    
 

echo $rel_user; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=leaves_rules&action=leaves_rules"/>

              <?php

}

    }
/**************************update********************************/
    if (isset($_POST['update']) && $_POST['update'] == 'update')
    {
        $id_l=$_POST['id_l'];
        
$db = new Database();
$db->connect();
$db->select("leaves_rules",'*',null,'id_leaves_rules='.$id_l); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
$nameee=$res[0]["name"];
$db = new Database();
$db->connect();
$db->select("pr_user_leaves",'*',null,'id_leaves="'.$nameee.'"'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
if(empty($res)){
        $name= $_POST['name'];
/*1*/$days = $_POST['days'];
/*1*/$type = $_POST['type'];
if($type=="permission")
    {
    /*1*/$early = $_POST['early'];
    /*1*/$late = $_POST['late'];
$permission=$early.",".$late;
    }  $start = $_POST['start'];
if($start=="")
    {
    /*1*/  $start = $_POST['startt'];

    }
/*1*/  $end = $_POST['end'];


/*1*/  $reset = $_POST['reset'];
/*1*/  $forward = $_POST['forward'];
/*1*/  $w_as = $_POST['w_as'];
/*1*/  $w_form = $_POST['w_from'];
/*1*/  $h_as = $_POST['h_as'];
/*1*/  $h_form = $_POST['h_from'];
        
        
        $conditions='id_leaves_rules='.$id_l;
/*****************************************/
  $db = new Database();
$db->connect();
$cx=$db->update( $tab,array('name'=>$name,'days'=>$days,'type'=>$type,'permission'=>$permission,
    'rang_start'=>$start,'rang_end'=>$end,'reset'=>$reset,
    'forward'=>$forward,'w_as'=>$w_as,'w_form'=>$w_form,'h_as'=>$h_as,'h_form'=>$h_form,
    'action'=>"active"),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();
if ($cx == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=leaves_rules&action=leaves_rules"/>
             
 <?php

  

echo $done; 
        }
 else{
 

echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=leaves_rules&action=leaves_rules"/>

              <?php

 }
}else {
    
 

echo $rel_user; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=leaves_rules&action=leaves_rules"/>

              <?php

}


    }
/**************************viwe&******************************/
    if(!isset($id_leaves_rules))
        {
$db = new Database();
$db->connect();
$db->select($tab); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();

$db = new Database();
$db->connect();
$db->select("departments"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$depart = $db->getResult();

$db = new Database();
$db->connect();
$db->select("positions"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$posit = $db->getResult();

$db = new Database();
$db->connect();
$db->select("rules"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$stat = $db->getResult();
        } 
        else
            {
 /****************************viwe_by_id***********************************/
$db = new Database();
$db->connect();
$db->select($tab,'*',null,'id_'.$tab.'='.$id_leaves_rules); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
            
            

}
