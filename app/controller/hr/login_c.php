<?php

if(!isset($_GET["mod"])){  include '../IndexController.php';     }
/**********************************/
if (isset($_POST['username']) && $_POST['password'] )
    {
    

      
/*1*/$username = $_POST['username'];
/*2*/$password = $_POST['password'];
 $username;
 $password;
$db = new Database();
$db->connect();
$db->select("user",'*',null,'code_user="'.$username.'" AND `pass` = "'.$password.'"'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
$count = $db->numRows();
 if ($count>0) {
//     echo '<pre>';
//     print_r($res);
//          echo '<pre>';

          $name =       $res[0]['f_name_user']." ".$res[0]['m_name_user']." ".$res[0]['l_name_user'];
          $pass =       $res[0]['pass'];
          $id_account =       $res[0]['id_user'];
          $img =       $res[0]['img'];


          ob_start(); session_start(); 
          $_SESSION['username']= $name;
          $_SESSION['password']=$pass;
          $_SESSION['id_account']=$id_account;
          $_SESSION['img']=$img;
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>"/>
              <?php



echo $done; 
        }
 else{
    ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>"/>
              <?php 

echo $not; 
 }

    
    
    
    
}





  

    


       
      
?>