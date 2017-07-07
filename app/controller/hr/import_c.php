<?php
                                               

if(!isset($_GET["mod"])){  include '../IndexController.php';     } 
  



ini_set('max_execution_time', 0);
if(isset($_POST["submit"]))  
 { 
      if($_FILES['file']['name'])  
      {  
           $filename = explode('.',$_FILES['file']['name']);  

           if($filename[1] == 'csv' && $filename[0] == 'blank')  
           {   
               $file = fopen($_FILES['file']['tmp_name'],"r");
                  function multiexplode ($delimiters,$string) {
    
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}
$age=array("0"=>"f_name_user","1"=>"m_name_user","2"=>"l_name_user","3"=>"gender_user","4"=>"religion_user",
    "5"=>"birthday_user(0000-00-00)","6"=>"national_user","7"=>"marrital_user","8"=>"blood_user","9"=>"email_user",
    "10"=>"mobile_user","11"=>"fax_user","12"=>"landline_user","13"=>"address_user","14"=>"other_address_user",
    "15"=>"id_user","16"=>"joining(0000-00-00)");

$rr=fgetcsv($file);
  $r=$rr[0];
  $exploded = multiexplode(array(";"),$r);
//echo'<pre>' ;
//   print_r($exploded);
//echo'<pre>' ;


$i=1;
$m;$h;
if($exploded==$age){
 while(! feof($file))
  {
     $i=$i+1;

     $rr=fgetcsv($file);
    $r=$rr[0];
   $exploded = multiexplode(array(";"),$r);
//   echo'<pre>' ;
//   print_r($exploded);
//echo'<pre>' ;
   
 $item0 = $exploded[0];
 $item1 = $exploded[1];  
 $item2 = $exploded[2];  
 $item3 = $exploded[3];  
 $item4 = $exploded[4];  
 $item5 = $exploded[5];  
 $item6 = $exploded[6];  
 $item7 = $exploded[7];  
 $item8 = $exploded[8];  
 $item9 = $exploded[9];  
 $item10 = $exploded[10];  
 $item11 = $exploded[11];  
 $item12 = $exploded[12];  
 $item13 = $exploded[13];  
 $item14 = $exploded[14];  
 $item15 = $exploded[15];  
 $item16 = $exploded[16];  


     if ($item1=="f_name_user" )
         {
         
         }
 else {
     if ($item0=="" || $item3=="")
         {
                    echo "empty rec"." ".$i ; 
                   $m=$m."/".$i;


         }  else {
$db = new Database();
$db->connect();

$f_namee = $db->escapeString($item0); // Escape any input before insert
$m_namee = $db->escapeString($item1); // Escape any input before insert
$l_namee = $db->escapeString($item2); // Escape any input before insert
$gendere = $db->escapeString($item3); // Escape any input before insert
$religione = $db->escapeString($item4); // Escape any input before insert
$birthdaye = $db->escapeString($item5); // Escape any input before insert
$nationale = $db->escapeString($item6); // Escape any input before insert
$marritale = $db->escapeString($item7); // Escape any input before insert
$bloode = $db->escapeString($item8); // Escape any input before insert
$emaile = $db->escapeString($item9); // Escape any input before insert
$mobilee = $db->escapeString($item10); // Escape any input before insert
$faxe = $db->escapeString($item11); // Escape any input before insert
$landlinee = $db->escapeString($item12); // Escape any input before insert
$addresse = $db->escapeString($item13); // Escape any input before insert
$othere = $db->escapeString($item14); // Escape any input before insert
$joine = $db->escapeString($item16); // Escape any input before insert
$codee = $db->escapeString($item15); // Escape any input before insert

$cx=$db->insert("user",array('pass'=>$codee."123",'code_user'=>$codee,'joining'=>$joine,'f_name_user'=>$f_namee,'m_name_user'=>$m_namee,'l_name_user'=>$l_namee,'gender_user'=>$gendere,'religion_user'=>$religione,'birthday_user'=>$birthdaye,'national_user'=>$nationale,'marrital_user'=>$marritale,'blood_user'=>$bloode,'email_user'=>$emaile,'mobile_user'=>$mobilee,'fax_user'=>$faxe,'landline_user'=>$landlinee,'address_user'=>$addresse,'other_address_user'=>$othere));  // Table name, column names and respective values

$res = $db->getResult();
       if ($cx == 1) {
       echo "done";
           
       }  else {
                  $hh= "not save in data base ".$f_namee." ".$m_namee." ".$l_namee;
$h=$h."/".$hh;
       }      
             }

     
     
     
     }
 
    }
    
    ?>
            <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=data&action=data"/>

        
        <?php
    $message = 'notdone'." $m"."$h";
echo "<SCRIPT> alert('$message');</SCRIPT>";

 
  }  else {
    echo "file not obligatory";
}

               
               
      } else {
          
    ?>
            <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=data&action=data"/>

        
        <?php
     $message = 'this file not mat';

echo "<SCRIPT> alert('$message ');</SCRIPT>";
      }
 }}  

 
 
 