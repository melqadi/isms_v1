<?php
  
if(!isset($_GET["mod"])){  include '../IndexController.php';     } 

$tab="attendance";
$db = new Database();
$db->connect();
if (isset($_POST['aproveall']) && $_POST['aproveall'] == 'aproveall')
{
              ob_start(); session_start();
        $id_account = $_SESSION['id_account'];
          $name=$_SESSION['username'];

    $data = unserialize($_POST['data']);
    foreach ($data as $key=>$val)
    {
        foreach ($val as $keyy=>$vall)
            {
            
            $vall["id_mack"]=$id_account;
            $vall["count"]=$keyy+2;
    
    
            $db->insert("payslip",$vall);  // Table name, column names and respective values
            $res = $db->getResult();
            }
         

            $id=$val[0]["id_user"];
          $month=$val[0]["month"];
          $year=$val[0]["year"];
          $first="first aprove";
          $f=$id_account;
          $us=$name;
          $return=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_filde"=>$first,"resalt_filde"=>$us,"id_mack"=>$f,"count"=>"1");
             $cx=$db->insert("payslip",$return);  // Table name, column names and respective values
            $res = $db->getResult();
    }
    
    if ($cx >= 1) {
    ?>
<meta http-equiv='refresh' content='0;url=<?php echo $dir?>?sec=hr&mod=payslip&action=payslip_generate'/>
              <?php 
echo $done;
        }
 else{
echo $not;
?> <meta http-equiv='refresh' content='0;url=<?php echo $dir?>?sec=hr&mod=payslip&action=payslip_generate'/>

              <?php

 }

    
   
}

if (isset($_POST['second']) && $_POST['second'] == 'second')
    {
    $data = unserialize($_POST['data']);
    foreach ($data as $key=>$val)
    {
        $db->select("payslip",'*',null,'name_filde="stop" AND id_user='.$val["id_user"]." AND month='".$val["month"]."'AND year='".$val["year"]."'"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
        $userss = $db->getResult();
        $count=count($userss);
     if($count>=0)
    {
   
    $f='`id_user`='.$val["id_user"].' AND `month` ="'.$val["month"].'" AND `year` ="'.$val["year"].'" AND `name_filde` ="stop"';

$db->deleteall("payslip",$f);  // Table name, WHERE conditions
$res = $db->getResult();

    
    }
        
        
        
        
        
      $cx=$db->insert("payslip",$val);  // Table name, column names and respective values
        $res = $db->getResult();
            
        
    }
     if ($cx >= 1) {
    ?>
<meta http-equiv='refresh' content='0;url=<?php echo $dir?>?sec=hr&mod=payslip&action=payslip_second'/>
              <?php 
echo $done;
        }
 else{
echo $not;
?> <meta http-equiv='refresh' content='0;url=<?php echo $dir?>?sec=hr&mod=payslip&action=payslip_second'/>

              <?php

 }

    }
    
if(isset($stop))
{
    $db->select("payslip",'*',null,'name_filde="stop"'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
        $userss = $db->getResult();
        $userdep=[];
        foreach ($userss as $key=>$val)
            {
            $id=$val["id_user"];
            $mounth=$val["month"];
            $year=$val["year"];
            $db->select("payslip",'*',null,'id_user='.$id." AND month='".$mounth."'AND year='".$year."'"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
            $arr = $db->getResult();
            $count=count($arr);
        if($count>=0)
            {
            $userdep[]=$arr;
            }
        
            
            }
        
}
if(isset($view))
{
    if(isset($id_user)){
    $db->select("payslip",'*',null,'name_filde="second aprove" AND id_user='.$id_user); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
        $userss = $db->getResult();
     
    }  else {
    $db->select("payslip",'*',null,'name_filde="second aprove"'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
        $userss = $db->getResult();
     
    }
    
        $userdep=[];
        foreach ($userss as $key=>$val)
            {
            $id=$val["id_user"];
            $mounth=$val["month"];
            $year=$val["year"];
            $db->select("payslip",'*',null,'id_user='.$id." AND month='".$mounth."'AND year='".$year."'"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
            $arr = $db->getResult();
            $count=count($arr);
        if($count>=0)
            {
            $userdep[]=$arr;
            }
        
            
            }
        
}
//echo '<pre>';
//    print_r($userdep);
//    echo '<pre>';
// 