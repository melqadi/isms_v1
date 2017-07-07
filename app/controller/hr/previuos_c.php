<?php
                                               

if(!isset($_GET["mod"])){  include '../IndexController.php';     } 
  


$tab="previuos";
/**************************ADD*********************************/
$ed=$_POST["ed"];/**m*/

if (!empty($ed))
    {
  $id_application=$_POST["id_application"];

    $company_previuos=$_POST["company_previuos"];
    $joining_previuos=$_POST["joining_previuos"];
    $leaving_previuos=$_POST["leaving_previuos"];
    $position_previuos=$_POST["position_previuos"];
    $reason_previuos=$_POST["reason_previuos"];
    $id_user=$_POST["id_user"];
    $db = new Database();
$db->connect();
$id_applications=$db->escapeString($id_application); // Escape any input before insert

$company_previuoss=$db->escapeString($company_previuos); // Escape any input before insert
$joining_previuoss=$db->escapeString($joining_previuos); // Escape any input before insert
$leaving_previuoss=$db->escapeString($leaving_previuos); // Escape any input before insert
$position_previuoss=$db->escapeString($position_previuos); // Escape any input before insert
$reason_previuoss=$db->escapeString($reason_previuos); // Escape any input before insert
$id_users=$db->escapeString($id_user); // Escape any input before insert
$cx=$db->insert("previuos",array('id_application'=>$id_applications,'company_previuos'=>$company_previuoss,'joining_previuos'=>$joining_previuoss,'leaving_previuos'=>$leaving_previuoss,'position_previuos'=>$position_previuoss,'reason_previuos'=>$reason_previuoss,'id_user'=>$id_users));  // Table name, column names and respective values
$ress=$db->getResult(); 
    

      

if ($cx == 1) {
        if ($id_application!=""){
        ?> 
<meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=account&action=previuos&id_application=<?php echo $id_application ;?>"/>
              <?php



echo $done; 
        
    }elseif ($id_user!="") {
            ?> 
<meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=account&action=previuos&id_user=<?php echo $id_user ;?>"/>
              <?php



echo $done; 
        }

    
        }
 else{
        if (isset($id_application)){
        ?> 
<meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=account&action=previuos&id_application=<?php echo $id_application ;?>"/>
              <?php 


echo $not; 
        
    }elseif (isset($id_user)) {
            ?> 
<meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=account&action=previuos&id_user=<?php echo $id_user ;?>"/>
              <?php 


echo $not; 
        }

 }

    
    
    
}
/***************************DROP*******************************/
if (isset($_GET['drop']) && $_GET['drop'] == 1)
    {
     $id_cat=$_GET["id_previuos"];

    $db = new Database();
$db->connect();
 $f='id_previuos='.$id_cat;

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
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=account&action=previuos"/>

              <?php

 }

    }
/**************************update********************************/
      if(isset($id_user))
        {
        $db = new Database();
$db->connect();
$db->select($tab,'*',null,'id_user='.$id_user); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
        } 
        elseif (isset($id_application)) 
            {
            
        $db = new Database();
$db->connect();
$db->select($tab,'*',null,'id_application='.$id_application); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();

}

