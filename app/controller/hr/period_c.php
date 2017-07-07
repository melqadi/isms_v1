<?php
                                               

if(!isset($_GET["mod"])){  include '../IndexController.php';     } 
  


$tab="categories";
ob_start(); session_start(); 
        $name_session=$_SESSION['username'];

/****period**********************ADD*********************************/
if (isset($_GET['drop']) && $_GET['drop'] == 1)
    {
     $id_user=$_GET["id_user"];
$conditions='id_user='.$id_user;
        
$db = new Database();
$db->connect();
$db->select("user",'*',null,'id_user='.$id_user); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
foreach($res as $output){

     $f_approve=$output["f_approve"];
    if($f_approve==""){
        
        $db = new Database();
$db->connect();
$db->update( "user",array('f_approve'=>$name_session),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();
    }
}
$dbb = new Database();
$dbb->connect();
$dbb->delete("user",$conditions);  // Table name, WHERE conditions
$ress = $dbb->getResult();

if ($ress[0] == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=period&action=period"/>
              <?php

 

echo $done; 
        }
 else{
    

echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=period&action=period"/>

              <?php

 }

    }
/**************************update********************************/
if (isset($_GET['approve']) && $_GET['approve'] == 1)
    {
     $id_user=$_GET["id_user"];
            $conditions='id_user='.$id_user;
        
$db = new Database();
$db->connect();
$db->select("user",'*',null,'id_user='.$id_user); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
foreach($res as $output){

     $f_approve=$output["f_approve"];
    if($f_approve==""){
        
        $db = new Database();
$db->connect();
$cx=$db->update( "user",array('f_approve'=>$name_session),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();
    }  
     
}
     
     
     
     
if ($cx == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=period&action=period"/>
              <?php

 

echo $done; 
        }
 else{
   
echo $not; 
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=period&action=period"/>

              <?php

 }

    }
/**************************update********************************/
    if(!isset($id_user))
        {
        
$db = new Database();
$db->connect();
$db->select("user",'*',null,"`periode` != 'approve' ORDER BY `periode` ASC"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
        

        } 
        
