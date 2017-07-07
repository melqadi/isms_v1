<?php
                                               

if(!isset($_GET["mod"])){  include '../IndexController.php';     } 
//    echo "hi";
  


    $dbp = new Database();
$dbp->connect();
$dbp->select("positions"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$resp = $dbp->getResult();

    $dbd = new Database();
$dbd->connect();
$dbd->select("departments"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$resd = $dbd->getResult();

    
    $dbs = new Database();
$dbs->connect();
$dbs->select("rules"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$ress = $dbs->getResult();

    if (isset($_POST['depdep']) && $_POST['depdep'] == 'depdep')
    
        {
        $dep=$_POST["dep"];/**m*/
      
if(!empty($dep))
    {
    $cion;
          foreach ($dep as $seleced)
{
$cion=$cion.$seleced.",";
             
}
 
    $tap=  substr($cion, 0, -1);    

    
    $condeshan="`id_departments` in (".$tap.")";
$db = new Database();
$db->connect();
$db->select("user",'*',null,$condeshan); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
 
//echo '<pre>';
//print_r($res);
//    echo '<pre>';

    $m[0]=array('f_name_user;m_name_user;l_name_user;gender_user;religion_user;birthday_user;'
        . 'national_user;marrital_user;blood_user;email_user;'
        . 'mobile_user;fax_user;landline_user;address_user;'
        . 'other_address_user;code_user;joining;');

    $xix=1;
    foreach ($res as $vaal)
        {
        $m[$xix]=array($vaal["f_name_user"].";".$vaal["m_name_user"].";".$vaal["l_name_user"].";".
            $vaal["gender_user"].";".$vaal["religion_user"].";".$vaal["birthday_user"].";".
            $vaal["national_user"].";".$vaal["marrital_user"].";".$vaal["blood_user"].";".
            $vaal["email_user"].";".$vaal["mobile_user"].";".$vaal["fax_user"].";".
            $vaal["landline_user"].";".$vaal["address_user"].";".$vaal["other_address_user"].";".
            $vaal["code_user"].";".$vaal["joining"].";");
$xix=$xix+1;
        }


$fp = fopen($uploads_file.'export/departments.csv', 'w');
//
foreach ($m as $fields) {
$replace=str_replace(" ", "-", $fields);   
$rcf=fputcsv($fp, $replace);
}
//echo '<pre>';
//print_r($fp);
//echo '<pre>';
// exit();
//
fclose($fp);
    
}  
?>
            <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=data&action=data&dl=1"/>

    <?php
        }
 /*******************************************************/ 
    if (isset($_POST['pospos']) && $_POST['pospos'] == 'pospos')
    
        {
$pos=$_POST["pos"];/**m*/
if(!empty($pos))
    {
    $connmn;
          foreach ($pos as $selected)
{
$connmn=$connmn.$selected.",";
             
}
//`id_positions` in (24,23)
//ECHO      $rty=substr($con,-1,0);
     $connmn;
    $tap=  substr($connmn, 0, -1); 
    $hh="ahmed ayman";
    
    $condeshan="`id_positions` in (".$tap.")";

$db = new Database();
$db->connect();
$db->select("user",'*',null,$condeshan); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
//echo '<pre>';
//print_r($res);
//    echo '<pre>';

    $m[0]=array('f_name_user;m_name_user;l_name_user;gender_user;religion_user;birthday_user;'
        . 'national_user;marrital_user;blood_user;email_user;'
        . 'mobile_user;fax_user;landline_user;address_user;'
        . 'other_address_user;code_user;joining;');

    $xix=1;
    foreach ($res as $val)
        {
        $m[$xix]=array($val["f_name_user"].";".$val["m_name_user"].";".$val["l_name_user"].";".
            $val["gender_user"].";".$val["religion_user"].";".$val["birthday_user"].";".
            $val["national_user"].";".$val["marrital_user"].";".$val["blood_user"].";".
            $val["email_user"].";".$val["mobile_user"].";".$val["fax_user"].";".
            $val["landline_user"].";".$val["address_user"].";".$val["other_address_user"].";".
            $val["code_user"].";".$val["joining"].";");
$xix=$xix+1;

        }
   
$fp = fopen($uploads_file.'export/positions.csv', 'w');
//
foreach ($m as $fields) {
//    echo '<pre>';
//print_r($fields);
//echo '<pre>';
$replace=str_replace(" ", "-", $fields);   
fputcsv($fp, $replace);
}
//
fclose($fp);







}  

?>
            <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=data&action=data&dl=2"/>

    <?php
        }
 /*******************************************************/ 
    if (isset($_POST['rulrul']) && $_POST['rulrul'] == 'rulrul')
    
        {
        $stat=$_POST["stat"];/**m*/
if(!empty($stat))
    {
    $con;
          foreach ($stat as $selected)
{
$con=$con.$selected.",";
             
}
//`id_positions` in (24,23)
//ECHO      $rty=substr($con,-1,0);
    echo $con;
    $tap=  substr($con, 0, -1);    
 echo   $condeshan="`id_rules` in (".$tap.")";
$db = new Database();
$db->connect();
$db->select("user",'*',null,$condeshan); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
//echo '<pre>';
//print_r($res);
//    echo '<pre>';

    $m[0]=array('f_name_user;m_name_user;l_name_user;gender_user;religion_user;birthday_user;'
        . 'national_user;marrital_user;blood_user;email_user;'
        . 'mobile_user;fax_user;landline_user;address_user;'
        . 'other_address_user;code_user;joining;');

    $xix=1;
    foreach ($res as $val)
        {
        $m[$xix]=array($val["f_name_user"].";".$val["m_name_user"].";".$val["l_name_user"].";".
            $val["gender_user"].";".$val["religion_user"].";".$val["birthday_user"].";".
            $val["national_user"].";".$val["marrital_user"].";".$val["blood_user"].";".
            $val["email_user"].";".$val["mobile_user"].";".$val["fax_user"].";".
            $val["landline_user"].";".$val["address_user"].";".$val["other_address_user"].";".
            $val["code_user"].";".$val["joining"].";");
$xix=$xix+1;
        }
    echo '<pre>';
print_r($m);
echo '<pre>';
$fp = fopen($uploads_file.'export/rules.csv', 'w');
//
foreach ($m as $fields) {
$replace=str_replace(" ", "-", $fields);   
fputcsv($fp, $replace);
}
//exit();

fclose($fp);
        

}
?>
            <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=data&action=data&dl=3"/>

    <?php
        }
 /*******************************************************/ 


