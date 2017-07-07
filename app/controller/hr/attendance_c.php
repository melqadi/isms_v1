<?php
include '../../../model/mysql_crud.php';
include '../IndexController.php'; 

$tab="attendance";
$db = new Database();
$db->connect();

/**************************start*********************************/
if (isset($_POST['start']) && $_POST['start'] == 'start')
    {
    

      
/*1*/$id_user = $_POST['id_user'];
/*1*/$name_user = $_POST['name_user'];
/*1*/$date = $_POST['date'];
/*1*/$start = $_POST['time'];


$cx=$db->insert("attendance",array('user_id'=>$id_user,'name_id'=>$name_user,'date'=>$date,'start'=>$start,));  // Table name, column names and respective values
$res = $db->getResult(); 
 $duplicate="Duplicate entry '".$id_user."-".$date."' for key 'PRIMARY'";

if($duplicate===$res[0])
    {
  
    ?> 
<meta http-equiv="refresh" content="0;url=<?php echo $dir;?>?mod=attendance&action=attendance_add"/>
              <?php 
              echo $dupli;
              exit();

    }
$rtyu="?sec=hr&mod=attendance&action=attendance_add";
if ($cx == 1) {
    ?> 
<meta http-equiv="refresh" content="0;url=<?php echo $dir;?><?php echo $rtyu;?>"/>
              <?php 
              echo $done;
        }
 else{
     
     echo $not;
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir;?>?sec=hr&mod=attendance&action=attendance_add"/>

              <?php

 }

    
    
    
}
/**************************end*********************************/
if (isset($_POST['end']) && $_POST['end'] == 'end')
    {
    

      
/*1*/$id_user = $_POST['id_user'];
/*1*/$name_user = $_POST['name_user'];
/*1*/$date = $_POST['date'];
/*1*/$end = $_POST['time'];

$db->select("attendance",'*',null,'user_id='.$id_user." AND date='".$date."'"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult(); 
if($res[0]["end"]==="")
    {
$conditions='user_id='.$id_user." AND date='".$date."'";

$cx=$db->update("attendance",array('end'=>$end),$conditions);  // Table name, column names and respective values
$res = $db->getResult(); 
if ($cx == 1) {
$rtyu="?sec=hr&mod=attendance&action=attendance_add";

    ?> 
<meta http-equiv="refresh" content="0;url=<?php echo $dir;?><?php echo $rtyu;?>"/>
              <?php echo $done;
        }
 else{
     echo $not;
?> 
                <meta http-equiv="refresh" content="0;url=<?php echo $dir;?>?sec=hr&mod=attendance&action=attendance_add"/>

              <?php

 }

    }  else {
        $rtyu="?sec=hr&mod=attendance&action=attendance_add";

        ?>
<meta http-equiv="refresh" content="0;url=<?php echo $dir;?><?php echo $rtyu;?>"/>
              <?php 
              echo $dupli;

    }
    
    
}

/**************************viwe&******************************/
    if(!isset($id_attendance))
        {
$db->select("departments"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$departmentty = $db->getResult();

        } 
        else
            {
 /****************************viwe_by_id***********************************/
$db->select($tab,'*',null,'id_'.$tab.'='.$id_attendance); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
            
            

}
    if(isset($id_dep))
        {
        $db->select("user",'*',null,'id_departments='.$id_dep); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
        $userdep = $db->getResult();
        
        foreach ($userdep as $key=> $arr){
        
            $user_id =$arr["id_user"];
        $db->select("attendance",'*',null,'user_id='.$user_id." AND date='".$date."'"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
        $userss = $db->getResult();
        
        $userdep[$key]["start"]=$userss[0]["start"];
        $userdep[$key]["end"]=$userss[0]["end"];
        
        }
        

//        echo '<pre>';
//        print_r($userdep);
//        echo '<pre>';
//        exit();

        }
if(isset($from))
        {
        $db->select("attendance",'DISTINCT `user_id`, `name_id`',null,"`date` >= '".$from."' AND `date` <= '".$to."'"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
        $userdep = $db->getResult();
        
                
        }