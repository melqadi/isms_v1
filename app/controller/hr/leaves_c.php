<?php
                                               

if(!isset($_GET["mod"])){  include '../IndexController.php';     } 
  
  

$tab="user";
/**************************ADD*********************************/
if (isset($_POST['add']) && $_POST['add'] == 'add')
    {
//echo '<pre>';
//print_r($array);
//echo '<pre>';

// $holidays=array("Sun","Mon","Fri");
/*1*/$id_user = $_POST['id_user']; 
$last = $_POST['last'];
$last;
$db = new Database();
$db->connect();
$db->select("user",'*',null,'id_user='.$id_user ); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$resah = $db->getResult();
$id_rules=$resah[0]["id_rules"];
$db = new Database();
$db->connect();
$db->select("rules",'*',null,'id_rules='.$id_rules ); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$resah = $db->getResult();

/*1*/$start = $_POST['start'];
/*1*/$end = $_POST['end'];
//
//
/*1*/$array_name = $_POST['arrname'];
$array_name=explode(";",$array_name);
//
//echo '<pre>';
//print_r($array_name);
//echo '<pre>';
 $as_w=$array_name[12];
 $name=$array_name[2];
 $totalll=$array_name[3];
 
//exit();

if($as_w=="w_as")
    {
    
if($resah[0]["fri_day"]=="weekend"){
    $holidays[0]="Fri";
}else{$holidays[0]="";}

if($resah[0]["sat_day"]=="weekend"){
    $holidays[1]="Sat";
}else{$holidays[1]="";}

if($resah[0]["sun_day"]=="weekend"){
    $holidays[2]="Sun";
}else{$holidays[2]="";}

if($resah[0]["mon_day"]=="weekend"){
    $holidays[3]="Mon";
}else{$holidays[3]="";}

if($resah[0]["tue_day"]=="weekend"){
    $holidays[4]="Tue";
}else{$holidays[4]="";}

if($resah[0]["wed_day"]=="weekend"){
    $holidays[5]="Wed";
}else{$holidays[5]="";}
if($resah[0]["thu_day"]=="weekend"){
    $holidays[6]="Thu";
}else{$holidays[6]="";}
    }  else {
        $holidays=array(0 => "",1 => "",2 => "",3 => "",4 => "",5 => "",6 => "" );
    }

$add = new weekend();
$ok = $add->getWorkingDays($start,$end,$holidays);
//echo '<pre>';
//print_r($ok);
//echo '<pre>';
//exit();
if($totalll >= $last){
    $ok=count($ok[0]);
  echo  $ty= $last+$ok;
  echo '<hr>';
   echo $can=$totalll-$last;
 
    if($totalll>=$ty){

$db = new Database();
$db->connect();
$id_rules = $db->escapeString($name); // Escape any input before insert
$id_user = $db->escapeString($id_user); // Escape any input before insert
$ok = $db->escapeString($ok); // Escape any input before insert
$start = $db->escapeString($start); // Escape any input before insert
$end = $db->escapeString($end); // Escape any input before insert
 $cx=$db->insert("my_leaves",array('regest'=>"wait",'id_leaves'=>$id_rules,'id_user'=>$id_user,'day'=>$ok,'start'=>$start,'end'=>$end));  // Table name, column names and respective values
$res = $db->getResult();  
if ($cx == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=leaves&action=leaves_add&id_user=<?php echo $id_user;?>&id_leaves=<?php echo $id_rules;?>"/>
              <?php



echo $done; 
        }
 else{
 

echo $not; 
?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=leaves&action=leaves_add&id_user=<?php echo $id_user;?>&id_leaves=<?php echo $name;?>"/>

              <?php

 }

    
        
        
    }  else {
              
     $message = 'can use '. $can;
 
     echo "<SCRIPT> alert('$message');</SCRIPT>";
?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=leaves&action=leaves_add&id_user=<?php echo $id_user;?>&id_leaves=<?php echo $name;?>"/>

              <?php

}
    
    
    
    
}  else {
     $message = 'can use '.$can;
 

     echo "<SCRIPT> alert('$message');</SCRIPT>";
?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=leaves&action=leaves_add&id_user=<?php echo $id_user;?>&id_leaves=<?php echo $name;?>"/>

              <?php


}
    
    
}
/***************************DROP*******************************/
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
$db->select("pr_user_leaves",'*',null,'id_user='.$id_user); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
$i=0;

foreach($res as $x => $x_value){
    
$name=$x_value["id_leaves"];
$m[$i]=$name;
   $i=$i+1;             
}
$ii=0;
foreach($m as $xx => $x_valuee){
$dbc = new Database();
$dbc->connect();
$dbc->select("leaves_rules",'*',null,'name='.'"'.$x_valuee.'" '); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$leaves = $dbc->getResult();
$mm[$ii]=$leaves[0];
   $ii=$ii+1;  
    
}
    


            
      

}


        if(isset($id_leaves))
        {
    
$db = new Database();
$db->connect();
$db->select("pr_user_leaves",'*',null,'id_user='.$id_user ."  AND id_leaves="."'".$id_leaves."'"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$resah = $db->getResult();

$dbc = new Database();
$dbc->connect();
$dbc->select("leaves_rules",'*',null,'name='.'"'.$id_leaves.'"'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$leaves = $dbc->getResult();

$dbc = new Database();
$dbc->connect();
$dbc->select("my_leaves",'*',null,'id_user='.$id_user ."  AND id_leaves="."'".$id_leaves."' AND `regest` != 'rejact'"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$lea = $dbc->getResult();

        }
        
            if($id_all_rgss==10)
            {
    
$dbc = new Database();
$dbc->connect();
$dbc->select("my_leaves",'*',null," `regest` = 'wait'"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$lea = $dbc->getResult();


$db = new Database();
$db->connect();
$db->select("pr_user_leaves",'*',null,'id_user='.$id_user ."  AND id_leaves="."'".$id_leaves."'"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$resah = $db->getResult();

$dbc = new Database();
$dbc->connect();
$dbc->select("leaves_rules",'*',null,'name='.'"'.$id_leaves.'"'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$leaves = $dbc->getResult();


        }
            if($_GET["approve"]==1)
            {     $id_user=$_GET["id_user"];

                        $conditions='id_my_leaves='.$id_user;

        $db = new Database();
$db->connect();
$cx=$db->update( "my_leaves",array('regest'=>"approve"),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();

if ($cx == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=leaves&action=regest"/>
              <?php



echo $done; 
        }
 else{
 

echo $not; 
?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=leaves&action=regest"/>

              <?php

 }


            }
            
            if($_GET["drop"]==1)
            {
             $id_user=$_GET["id_user"];

                        $conditions='id_my_leaves='.$id_user;

        $db = new Database();
$db->connect();
$cx=$db->update( "my_leaves",array('regest'=>"rejact"),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();

if ($cx == 1) {
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=leaves&action=regest"/>
              <?php



echo $done; 
        }
 else{
 

echo $not; 
?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=leaves&action=regest"/>

              <?php

 }



            }