<?php

if(!isset($_GET["mod"])){
include  '../IndexController.php';
}
$tab="categories";
/********************************Initilaization ************************************/

$db = new Database();
$db->connect();


/**************************ADD*********************************/
if (isset($_POST['add']) && $_POST['add'] == 'add')
    {



/*1*/$name_categories = $_POST['name_'.$tab];


$name = $db->escapeString($name_categories); // Escape any input before insert
 $cx=$db->insert($tab,array('name_'.$tab=>$name));  // Table name, column names and respective values
$res = $db->getResult();

$duplicate="Duplicate entry '".$name."' for key 'name_categories'";
if ($res[0] == $duplicate)
    {
    $conditions='name_categories="'.$name.'"';
/*****************************************/

 $cx=$db->update( $tab,array('action'=>""),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();

    }
if ($cx == 1) {
    ?>
<meta http-equiv='refresh' content='0;url=<?php echo $dir?>?sec=hr&mod=categories&action=categories_add'/>
              <?php 
echo $done;
        }
 else{
echo $not;
?> <meta http-equiv='refresh' content='0;url=<?php echo $dir?>?sec=hr&mod=categories&action=categories_add'/>

              <?php

 }




}
/***************************DROP*******************************/
if (isset($_GET['drop']) && $_GET['drop'] == 1)
    {
         $id_cat=$_GET["id_".$tab];


$db->select("pr_cat_dep",'*',null,'id_'.$tab.'='.$id_cat); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
if(empty($res)){

 $f='id_categories='.$id_cat;

$db->delete($tab,$f);  // Table name, WHERE conditions
$res = $db->getResult();
if ($res[0] == 1) {
    ?>
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=categories&action=categories"/>
              <?php 
echo $done;
        }
 else{
echo $not;
?>
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=categories&action=categories"/>

              <?php

 }
}else{
    
echo $rel;
?>
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=categories&action=categories"/>

              <?php
}
    }
/**************************update********************************/
    if (isset($_POST['update']) && $_POST['update'] == 'update')
    {
         $id_categories = $_POST['id_categories'];
         $name_categories = $_POST['name_categories'];
         $conditions='id_categories='.$id_categories;
/*****************************************/

$cx=$db->update( $tab,array('name_'.$tab=>$name_categories),$conditions); // Table name, column names and values, WHERE conditions
$res = $db->getResult();
if ($cx == 1) {
    ?>
        <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=categories&action=categories"/>

 <?php 

echo $done;
        }
 else{
echo $not;
?>
                <meta http-equiv="refresh" content="0;url=<?php echo $dir?>?sec=hr&mod=categories&action=categories"/>

              <?php

 }


    }
/**************************viwe&******************************/
    if(!isset($id_categories))
        {

$db->select($tab); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
        }
        else
            {
 /****************************viwe_by_id***********************************/

$db->select($tab,'*',null,'id_'.$tab.'='.$id_categories); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();



}
