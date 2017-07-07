<?php
  include '../../../model/mysql_crud.php';
if(!isset($_GET["mod"])){  include '../IndexController.php';     } 

$tab="attendance";
$db = new Database();
$db->connect();
//***********************************
     if(isset($id_dep))
        {
        $db->select("user",'*',null,'id_departments='.$id_dep); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
        $userdepp = $db->getResult();
        $month;$year;
        $userdep=[];
        foreach ($userdepp as $key=> $arr){
        $user_id =$arr["id_user"];
        $db->select("payslip",'*',null,'id_user='.$user_id." AND month='".$month."'AND year='".$year."'"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
        $userss = $db->getResult();
         $count=count($userss);
        if($count==0)
            {
            $userdep[]=$arr;
            }
        
        
        }
        
      
//        echo '<pre>';
//        print_r($userdep);
//        echo '<pre>';
//        exit();

        }



if(isset($second_approve))
    {
        $db->select("user",'*',null,'id_departments='.$id_dep); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
        $userdepp = $db->getResult();
        $month;$year;
        $userdep=[];
        foreach ($userdepp as $key=> $arr){
        $user_id =$arr["id_user"];
        $db->select("payslip",'*',null,'id_user='.$user_id." AND month='".$month."'AND year='".$year."'"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
        $userss = $db->getResult();
         $count=count($userss);
        if($count>=0)
            {
//            $userdep[]=$arr;
            $con=0;
           $fri=0;
            foreach ($userss as $keyy=>$vals)
                {
                if($vals["name_filde"]=="second aprove")
                    {
                    $con=$con+1;

                    }
                    if($vals["name_filde"]=="stop")
                    {
                    $con=$con+1;

                    }
                    if($vals["name_filde"]=="first aprove")
                    {
                        $fri=$fri+1;
                    }
               }
               if($con==0)
                   {
                   if($fri>=1)
                       {
                      $userdep[]=$userss;
 
                       }
                      
                   }
//                echo '<pre>';
//                print_r($userdep);
//                echo '<pre>';
//                
            }
        
        }
         
//         echo '<pre>';
//        print_r($userdep);
//        echo '<pre>';

    }


if(isset($view_second))
{
    $db->select("payslip",'*',null,'id_user='.$id_user." AND month='".$month."'AND year='".$year."'"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
        $userss = $db->getResult();
        
}
