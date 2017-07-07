<?php
                                               

if(!isset($_GET["mod"])){  include '../IndexController.php';     } 
  


$tab="positions";
/**************************ADD*********************************/
if (isset($_POST['add']) && $_POST['add'] == 'add')
    {
    

      
/*1*/$name_positions = $_POST['name_'.$tab];
/*1*/$id_departments = $_POST['id_departments'];
 $id_departments;

    $db = new Database();
$db->connect();
$name = $db->escapeString($name_positions); // Escape any input before insert
 $cx=$db->insert($tab,array('name_'.$tab=>$name));  // Table name, column names and respective values
$res = $db->getResult(); 
$id_dp=$res[0];
$duplicate="Duplicate entry '".$name."' for key 'name_positions'";
if ($res[0] == $duplicate)
    {
        $conditions='name_positions="'.$name.'"';

$db = new Database();
$db->connect();
$db->selectall($tab,'*',null,'name_positions="'.$name.'"'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
$id_dp=$res[0]["id_positions"];

 $dfgh=$res[0]["action"];

if($dfgh=="")
    {
    
    ?> 
<meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=positions&action=positions"/>
              <?php 


echo $dupli; 
exit();
    }
    
    $conditions='name_positions="'.$name.'"';
/*****************************************/
  $db = new Database();
$db->connect();
 $cx=$db->update( $tab,array('action'=>""),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();


    }


/***************/
$dbb = new Database();
$dbb->connect();

$id_c = $dbb->escapeString($id_departments); // Escape any input before insert
$id_d = $dbb->escapeString($id_dp); // Escape any input before insert
 $cxx=$dbb->insert("pr_dep_pos",array('id_departments'=>$id_c,'id_positions'=>$id_d));  // Table name, column names and respective values
$ress = $dbb->getResult(); 
$rtyu="index.php?sec=hr&mod=positions&action=positions_add&id_departments=". $id_c;
if ($cxx == 1) {
    ?> 
<meta http-equiv="refresh" content="0;url=../../../<?php echo $rtyu;?>"/>
              <?php



echo $done; 
        }
 else{
   

echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=positions&action=positions_add"/>

              <?php

 }

    
    
    
}
/***************************DROP*******************************/
if (isset($_GET['drop']) && $_GET['drop'] == 1)
    {
     $id_cat=$_GET["id_".$tab];

       $db = new Database();
$db->connect();
$db->select("user",'*',null,'id_positions='.$id_cat); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
if(empty($res)){
    
    $db = new Database();
$db->connect();
 $f='id_positions='.$id_cat;

$db->delete($tab,$f);  // Table name, WHERE conditions pr_dep_pos
$res = $db->getResult(); 
    $db = new Database();
$db->connect();
 $f='id_positions='.$id_cat;

$db->deleteall("pr_dep_pos",$f);  // Table name, WHERE conditions 
$res = $db->getResult(); 

if ($res[0] == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=positions&action=positions"/>
              <?php

 

echo $done; 
        }
 else{
 

echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=positions&action=positions"/>

              <?php

 }
}else{
    
      

echo $rel; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=positions&action=positions"/>

              <?php

}
     
     
     

    }
/**************************update********************************/
    if (isset($_POST['update']) && $_POST['update'] == 'update')
    {
         $id_positions = $_POST['id_positions'];
         $name_positions = $_POST['name_positions'];
         $conditions='id_positions='.$id_positions;
/*****************************************/
  $db = new Database();
$db->connect();
$cx=$db->update( $tab,array('name_'.$tab=>$name_positions),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();
if ($cx == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=positions&action=positions"/>
             
 <?php

  

echo $done; 
        }
 else{
     

echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=positions&action=positions"/>

              <?php

 }


    }
/**************************viwe&******************************/
    if(!isset($id_positions))
        {
$db = new Database();
$db->connect();
$db->select($tab); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
    $ii=0;  

foreach ($res as $selected){

   $id= $res[$ii]["id_positions"];
   $ii=$ii+1;
$dbb = new Database();
$dbb->connect();
$dbb->select("pr_dep_pos",'*',null,'id_positions'.'='.$id); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$ress = $dbb->getResult();
$i=0;
foreach ($ress as $selecteda){
 $idd= $ress[$i]["id_departments"];
          $dbbb = new Database();
          $dbbb->connect();
          $dbbb->select("departments",'*',null,'id_departments'.'='.$idd); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
          $resss = $dbbb->getResult();
          $fg= $resss[0]["name_departments"];
$m["$ii"]=$fg;
$iddd["$ii"]=$resss[0]["id_departments"];
//          $resss[0];     
//          $ahmed["key"]["name"]=[$i][$fg];
                    $i=$i+1;
//
          
}

}
//echo '<pre>';
//          print_r($m);
//                    echo '<pre>';
                    $irt=0;
                    foreach ($iddd as $key => $v)
                        {
                        $dbbbs = new Database();
                        $dbbbs->connect();
                        $dbbbs->select("pr_cat_dep",'*',null,'id_departments'.'='.$v); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
                        $ressf = $dbbbs->getResult();
                                       $fggh= $ressf[0]["id_categories"];
                        $dbbbss = new Database();
                        $dbbbss->connect();
                        $dbbbss->select("categories",'*',null,'id_categories'.'='.$fggh); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
                        $ressff = $dbbbss->getResult();
                        $fmmg= $ressff[0]["name_categories"];
                        $mgv["$irt"]=$fmmg;
                        $irt=$irt+1;
                         $v;
                        }
//                        echo '<pre>';
//          print_r($mgv);
//                    echo '<pre>';

//                                            exit();

        } 
        else
            {
 /****************************viwe_by_id***********************************/
$db = new Database();
$db->connect();
$db->select($tab,'*',null,'id_'.$tab.'='.$id_positions); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
            
            

}
