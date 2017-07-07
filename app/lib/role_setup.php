<?php

include_once 'app/model/mysql_crud.php';


class role
{
    
//The function returns the no. of business days between two dates and it skips the holidays
function rolesetup($id_user,$name_page){
$db = new Database();
$db->connect();
$db->selectall("pr_user_role",'*',null,'id_user='.$id_user); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
      $name_role=$res[0]["name_role"];

$db = new Database();
$db->connect();
$db->selectall("role_setup",'*',null,"`name_role` = '".$name_role."' AND `name_page` = '".$name_page."'"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
      
$return=$res[0];
return $return;

    
 

 
}

//Example:

// => will return 7

}
//$id_user=95;
//$name_page="categories";
// $add = new role();
// $ok = $add->rolesetup($id_user,$name_page);
// echo "<pre>";
// print_r($ok["add"]);
// echo "<pre>";

?>
