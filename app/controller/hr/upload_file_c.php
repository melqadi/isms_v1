<?php
                                               

if(!isset($_GET["mod"])){  include '../IndexController.php';     } 
  




$tab="gallary";
/**************************ADD*********************************/
if (isset($_POST['add']) && $_POST['add'] == 'Upload')
    {
    
                               $id_user= $_POST['id_user'];

if (!file_exists($uploads_file . 'users/' . $id_user )) {
            //    echo 'textfile/'.$date.'/'.$timeg.'/'.$txt;
            mkdir($uploads_file . 'users/' . $id_user , 0777, true);
        }

if ($_POST)
  {
      if(isset($_FILES))
          {
          
          $files=$_FILES['image'];
          for ($i=0;$i<count($files['name']);$i++    ){
          
          $allowedexts= array('doc','docx','pdf','xls','xlsx','jpeg','jpg','png');
          $error=array();
         // print_r($_FILES);
          $filename = $files['name'][$i];
         $fileext = strtolower(end(explode('.', $filename)));
//        $str = strtolower($str);

           $filesize = $files['size'][$i];
            $filetmpname = $files['tmp_name'][$i];
              if(in_array($fileext, $allowedexts)=== FALSE)
                {
                  $error[]=  "extension is not allowed!";
                      ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=account&action=account"/>
              <?php 


echo $accouint; 

                }
              
                   if($filesize > 2048000)
                   {
                                         $error[]=  "file size must be less than 2MB!";

                   }
                   if(empty($error))
                       {                      
                       $random=  rand(0,9999);
                       $styr = strtolower($filename);
                     echo  $destination=$uploads_file.'users/'.$id_user."/".$random."_".date("d-m-Y")."_".$styr;
                     IF(  move_uploaded_file($filetmpname, $destination))
                           {
                         
                          echo $destination;
                                 $img = strtolower(end(explode('/', $destination)));
//                                "file uploaded";  
                    $db = new Database();
$db->connect();
$name = $db->escapeString($img); // Escape any input before insert
 $cx=$db->insert("gallary",array('name'=>$name,'id_user'=>$id_user));  // Table name, column names and respective values
$res = $db->getResult();           
//                               
                                 //
//if ($cx==1) {
//        ?> 
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=account&action=account"/>
              //<?php
//
//
//
//echo $done; 
//
//    
//} else {
//    echo "Error creating table: " . mysql_error($conn);
//}
//                         
                         
                           }
                        else {
                                                         echo "file not uploaded";                       

                             }
                       }
                      else 
                          {
                           foreach ($error as $errors) 
                           {
                               echo $errors ."<br/>";   
                           }
                          }
                
          }
          }  
  }



    
    
    
}
/***************************DROP*******************************/

    /*************************pb*********************/
    if (isset($_GET['pb']) && $_GET['pb'] == "pb")
    {
     $name=$_GET["name"];
     $id_user=$_GET["id_user"];
         $conditions='id_user='.$id_user;

      $db = new Database();
$db->connect();
$cx=$db->update( "user",array('img'=>$name),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();
if ($res[0] == 1) {
              ob_start(); session_start(); 

      $_SESSION['img']=$name;
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
    $ii=0;  


        } 
        else
            {
 /****************************viwe_by_id***********************************/
$db = new Database();
$db->connect();
$db->select("gallary",'*',null,'id_user='.$id_user); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
            
            

}


