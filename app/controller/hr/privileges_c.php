<?php
                                               

if(!isset($_GET["mod"])){  include '../IndexController.php';     } 
  


$tab="user";
if (isset($_POST['add']) && $_POST['add'] == 'add')
    {
      
    $db = new Database();
$db->connect();
/*0*/$name= $_POST['Name'];
/***********************cat*******/
                                           /*1*/ $c_add_cat= $_POST['c_add_cat'];
if($c_add_cat==""){$c_add_cat="no";}
$c_add_cat = $db->escapeString($c_add_cat); // Escape any input before insert
                                          /*2*/ $c_delete = $_POST['c_delete'];
if($c_delete==""){$c_delete="no";}
$c_delete = $db->escapeString($c_delete); // Escape any input before insert
                                         /*3*/ $c_all = $_POST['c_all'];
if($c_all==""){$c_all="no";}
$c_all = $db->escapeString($c_all); // Escape any input before insert
                                        /*4*/ $c_edite = $_POST['c_edite'];
if($c_edite==""){$c_edite="no";}
$c_edite = $db->escapeString($c_edite); // Escape any input before insert
                                       /*5*/ $c_add_dep = $_POST['c_add_dep'];
if($c_add_dep==""){$c_add_dep="no";}
$c_add_dep = $db->escapeString($c_add_dep); // Escape any input before insert





// Table name, column names and respective values
/********************dep*********************/
                                           /*1*/ $d_add_dep= $_POST['d_add_dep'];
if($d_add_dep==""){$d_add_dep="no";}
$d_add_dep = $db->escapeString($d_add_dep); // Escape any input before insert

                                          /*2*/ $d_delete = $_POST['d_delete'];
if($d_delete==""){$d_delete="no";}
$d_delete = $db->escapeString($d_delete); // Escape any input before insert
                                         /*3*/ $d_all = $_POST['d_all'];
if($d_all==""){$d_all="no";}
$d_all = $db->escapeString($d_all); // Escape any input before insert
                                        /*4*/ $d_edite = $_POST['d_edite'];
if($d_edite==""){$d_edite="no";}
$d_edite = $db->escapeString($d_edite); // Escape any input before insert
                                       /*5*/ $d_add_pos = $_POST['d_add_pos'];
if($d_add_pos==""){$d_add_pos="no";}
$d_add_pos = $db->escapeString($d_add_pos); // Escape any input before insert



/*****************pos************************/
                                           /*1*/ $p_add_pos= $_POST['p_add_pos'];
if($p_add_pos==""){$p_add_pos="no";}
$p_add_pos = $db->escapeString($p_add_pos); // Escape any input before insert
                                          /*2*/ $p_delete = $_POST['p_delete'];
if($p_delete==""){$p_delete="no";}
$p_delete = $db->escapeString($p_delete); // Escape any input before insert
                                         /*3*/ $p_all = $_POST['p_all'];
if($p_all==""){$p_all="no";}
$p_all = $db->escapeString($p_all); // Escape any input before insert
                                        /*4*/ $p_edite = $_POST['p_edite'];
if($p_edite==""){$p_edite="no";}
$p_edite = $db->escapeString($p_edite); // Escape any input before insert


/*******************nat**********************/
                                           /*1*/ $n_add_nat= $_POST['n_add_nat'];
if($n_add_nat==""){$n_add_nat="no";}
$n_add_nat = $db->escapeString($n_add_nat); // Escape any input before insert
                                          /*2*/ $n_delete = $_POST['n_delete'];
if($n_delete==""){$n_delete="no";}
$n_delete = $db->escapeString($n_delete); // Escape any input before insert
                                         /*3*/ $n_all = $_POST['n_all'];
if($n_all==""){$n_all="no";}
$n_all = $db->escapeString($n_all); // Escape any input before insert
                                        /*4*/ $n_edite = $_POST['n_edite'];
if($n_edite==""){$n_edite="no";}
$n_edite = $db->escapeString($n_edite); // Escape any input before insert

/*****************ski************************/
                                           /*1*/ $s_add_ski= $_POST['s_add_ski'];
if($s_add_ski==""){$s_add_ski="no";}
$s_add_ski = $db->escapeString($s_add_ski); // Escape any input before insert
                                             /*2*/ $s_delete = $_POST['s_delete'];
if($s_delete==""){$s_delete="no";}
$s_delete = $db->escapeString($s_delete); // Escape any input before insert
                                                 /*3*/ $s_all = $_POST['s_all'];
if($s_all==""){$s_all="no";}
$s_all = $db->escapeString($s_all); // Escape any input before insert
                                          /*4*/ $s_edite = $_POST['s_edite'];
if($s_edite==""){$s_edite="no";}
$s_edite = $db->escapeString($s_edite); // Escape any input before insert



/*********************licens********************/
                                           /*1*/ $l_add_lic= $_POST['l_add_lic'];
if($l_add_lic==""){$l_add_lic="no";}
$l_add_lic = $db->escapeString($l_add_lic); // Escape any input before insert
                                          /*2*/ $l_delete = $_POST['l_delete'];
if($l_delete==""){$l_delete="no";}
$l_delete = $db->escapeString($l_delete); // Escape any input before insert
                                         /*3*/ $l_all = $_POST['l_all'];
if($l_all==""){$l_all="no";}
$l_all = $db->escapeString($l_all); // Escape any input before insert
                                        /*4*/ $l_edite = $_POST['l_edite'];
if($l_edite==""){$l_edite="no";}
$l_edite = $db->escapeString($l_edite); // Escape any input before insert
                                      


/********************lan*********************/
                                           /*1*/ $g_add_lan= $_POST['g_add_lan'];
if($g_add_lan==""){$g_add_lan="no";}
$g_add_lan = $db->escapeString($g_add_lan); // Escape any input before insert
                                          /*2*/ $g_delete = $_POST['g_delete'];
if($g_delete==""){$g_delete="no";}
$g_delete = $db->escapeString($g_delete); // Escape any input before insert
                                         /*3*/ $g_all = $_POST['g_all'];
if($g_all==""){$g_all="no";}
$g_all = $db->escapeString($g_all); // Escape any input before insert
                                        /*4*/ $g_edite = $_POST['g_edite'];
if($g_edite==""){$g_edite="no";}
$g_edite = $db->escapeString($g_edite); // Escape any input before insert






/*****************stat************************/
                                           /*1*/ $es_add_Sta= $_POST['es_add_Sta'];
if($es_add_Sta==""){$es_add_Sta="no";}
$es_add_Sta = $db->escapeString($es_add_Sta); // Escape any input before insert
                                          /*2*/ $es_delete = $_POST['es_delete'];
if($es_delete==""){$es_delete="no";}
$es_delete = $db->escapeString($es_delete); // Escape any input before insert
                                         /*3*/ $es_all = $_POST['es_all'];
if($es_all==""){$es_all="no";}
$es_all = $db->escapeString($es_all); // Escape any input before insert
                                        /*4*/ $es_edite = $_POST['es_edite'];
if($es_edite==""){$es_edite="no";}
$es_edite = $db->escapeString($es_edite); // Escape any input before insert
                                       /*5*/ $es_view_id = $_POST['es_view_id'];
if($es_view_id==""){$es_view_id="no";}
$es_view_id = $db->escapeString($es_view_id); // Escape any input before insert



/******************paycat***********************/
                                           /*1*/ $pc_add_pay= $_POST['pc_add_pay'];
if($pc_add_pay==""){$pc_add_pay="no";}
$pc_add_pay = $db->escapeString($pc_add_pay); // Escape any input before insert
                                          /*2*/ $pc_delete = $_POST['pc_delete'];
if($pc_delete==""){$pc_delete="no";}
$pc_delete = $db->escapeString($pc_delete); // Escape any input before insert
                                         /*3*/ $pc_all = $_POST['pc_all'];
if($pc_all==""){$pc_all="no";}
$pc_all = $db->escapeString($pc_all); // Escape any input before insert
                                        /*4*/ $pc_edite = $_POST['pc_edite'];
if($pc_edite==""){$pc_edite="no";}
$pc_edite = $db->escapeString($pc_edite); // Escape any input before insert




/**********************payroll group*******************/
                                           /*1*/ $pg_add_gr= $_POST['pg_add_gr'];
if($pg_add_gr==""){$pg_add_gr="no";}
$pg_add_gr = $db->escapeString($pg_add_gr); // Escape any input before insert
                                          /*2*/ $pg_delete = $_POST['pg_delete'];
if($pg_delete==""){$pg_delete="no";}
$pg_delete = $db->escapeString($pg_delete); // Escape any input before insert
                                         /*3*/ $pg_all = $_POST['pg_all'];
if($pg_all==""){$pg_all="no";}
$pg_all = $db->escapeString($pg_all); // Escape any input before insert
                                        /*4*/ $pg_edite = $_POST['pg_edite'];
if($pg_edite==""){$pg_edite="no";}
$pg_edite = $db->escapeString($pg_edite); // Escape any input before insert
                                       /*5*/ $pg_viwe_id = $_POST['pg_viwe_id'];
if($pg_viwe_id==""){$pg_viwe_id="no";}   
$pg_viwe_id = $db->escapeString($pg_viwe_id); // Escape any input before insert
                                       /*6*/ $pg_delete_rel = $_POST['pg_delete_rel'];
if($pg_delete_rel==""){$pg_delete_rel="no";}
$pg_delete_rel = $db->escapeString($pg_delete_rel); // Escape any input before insert
                                       /*7*/ $pg_add_rel = $_POST['pg_add_rel'];
if($pg_add_rel==""){$pg_add_rel="no";}
$pg_add_rel = $db->escapeString($pg_add_rel); // Escape any input before insert





/*****************ins************************/
                                           /*1*/ $i_add_ins= $_POST['i_add_ins'];
if($i_add_ins==""){$i_add_ins="no";}
 $i_add_ins = $db->escapeString($i_add_ins); // Escape any input before insert
                                         /*2*/ $i_delete = $_POST['i_delete'];
if($i_delete==""){$i_delete="no";}
$i_delete = $db->escapeString($i_delete); // Escape any input before insert
                                         /*3*/ $i_all = $_POST['i_all'];
if($i_all==""){$i_all="no";}
$i_all = $db->escapeString($i_all); // Escape any input before insert
                                        /*4*/ $i_edite = $_POST['i_edite'];
if($i_edite==""){$i_edite="no";}
$i_edite = $db->escapeString($i_edite); // Escape any input before insert

/*****************tax************************/
                                           /*1*/ $t_add_tax= $_POST['t_add_tax'];
if($t_add_tax==""){$t_add_tax="no";}
 $t_add_tax = $db->escapeString($t_add_tax); // Escape any input before insert
                                         /*2*/ $t_delete = $_POST['t_delete'];
if($t_delete==""){$t_delete="no";}
$t_delete = $db->escapeString($t_delete); // Escape any input before insert
                                         /*3*/ $t_all = $_POST['t_all'];
if($t_all==""){$t_all="no";}
$t_all = $db->escapeString($t_all); // Escape any input before insert
                                        /*4*/ $t_edite = $_POST['t_edite'];
if($t_edite==""){$t_edite="no";}
$t_edite = $db->escapeString($t_edite); // Escape any input before insert

/*****************app************************/
                                           /*1*/ $add_app= $_POST['add_app'];
if($add_app==""){$add_app="no";}
$add_app = $db->escapeString($add_app); // Escape any input before insert
                                         /*1*/ $app_add= $_POST['app_add'];
if($app_add==""){$app_add="no";}
$app_add = $db->escapeString($app_add); // Escape any input before insert
                                          /*2*/ $app_delete = $_POST['app_delete'];
if($app_delete==""){$app_delete="no";}
$app_delete = $db->escapeString($app_delete); // Escape any input before insert
                                         /*3*/ $app_all = $_POST['app_all'];
if($app_all==""){$app_all="no";}
$app_all = $db->escapeString($app_all); // Escape any input before insert
                                        /*4*/ $app_edite = $_POST['app_edite'];
if($app_edite==""){$app_edite="no";}
$app_edite = $db->escapeString($app_edite); // Escape any input before insert
                                       /*5*/ $app_view_id = $_POST['app_view_id'];
if($app_view_id==""){$app_view_id="no";}
$app_view_id = $db->escapeString($app_view_id); // Escape any input before insert
/*****************ment************************/
                                          /*1*/ $add_ment= $_POST['add_ment'];
if($add_ment==""){$add_ment="no";}
$add_ment = $db->escapeString($add_ment); // Escape any input before insert
                                           /*1*/ $ment_add= $_POST['ment_add'];
if($ment_add==""){$ment_add="no";}
$ment_add = $db->escapeString($ment_add); // Escape any input before insert
                                          /*2*/ $ment_delete = $_POST['ment_delete'];
if($ment_delete==""){$ment_delete="no";}
$ment_delete = $db->escapeString($ment_delete); // Escape any input before insert
                                         /*3*/ $ment_all = $_POST['ment_all'];
if($ment_all==""){$ment_all="no";}
$ment_all = $db->escapeString($ment_all); // Escape any input before insert
                                        /*4*/ $ment_edite = $_POST['ment_edite'];
if($ment_edite==""){$ment_edite="no";}
$ment_edite = $db->escapeString($ment_edite); // Escape any input before insert
                                       /*5*/ $ment_view_id = $_POST['ment_view_id'];
if($ment_view_id==""){$ment_view_id="no";}
$ment_view_id = $db->escapeString($ment_view_id); // Escape any input before insert

/*****************ment************************/
                                          /*2*/ $arc_delete = $_POST['arc_delete'];
if($arc_delete==""){$arc_delete="no";}
$arc_delete = $db->escapeString($arc_delete); // Escape any input before insert
                                         /*3*/ $arc_all = $_POST['arc_all'];
if($arc_all==""){$arc_all="no";}
$arc_all = $db->escapeString($arc_all); // Escape any input before insert
                                        /*4*/ $arc_edite = $_POST['arc_edite'];
if($arc_edite==""){$arc_edite="no";}
$arc_edite = $db->escapeString($arc_edite); // Escape any input before insert
                                       /*5*/ $arc_view_id = $_POST['arc_view_id'];
if($arc_view_id==""){$arc_view_id="no";}
$arc_view_id = $db->escapeString($arc_view_id); // Escape any input before insert


$sql="INSERT INTO `role_setup` "
        . "( `name_role`, `name_page`, `add`, `edit`, `view_all`, `view_by_id`, `delete`, `deleterelion`, `addrelion`, `add_edu`, `delet_edu`, `add_pre`, `delet_pre`)"
. " VALUES ('$name', 'categories', '$c_add_cat', '$c_edite', '$c_all', '$c_add_dep', '$c_delete', 'null', 'null', 'null', 'null', 'null', 'null'),"
        . "('$name', 'positions', '$p_add_pos', '$p_edite', '$p_all', 'null', '$p_delete', 'null', 'null', 'null', 'null', 'null', 'null'),"
    . "('$name', 'nationalities', '$n_add_nat', '$n_edite', '$n_all', 'null', '$n_delete', 'null', 'null', 'null', 'null', 'null', 'null'),"
        . "('$name', 'skills', '$s_add_ski', '$s_edite', '$s_all', 'null', '$s_delete', 'null', 'null', 'null', 'null', 'null', 'null'),"
        . "('$name', 'licenses', '$l_add_lic', '$l_edite', '$l_all', 'null', '$l_delete', 'null', 'null', 'null', 'null', 'null', 'null'),"
        . "('$name', 'languages', '$g_add_lan', '$g_edite', '$g_all', 'null', '$g_delete', 'null', 'null', 'null', 'null', 'null', 'null'),"
        . "('$name', 'rules', '$es_add_Sta', '$es_edite', '$es_all', '$es_view_id', '$es_delete', 'null', 'null', 'null', 'null', 'null', 'null'),"
        . "('$name', 'payroll_categories', '$pc_add_pay', '$pc_edite', '$pc_all', 'null', '$pc_delete', 'null', 'null', 'null', 'null', 'null', 'null'),"
        . "('$name', 'payroll_groups', '$pg_add_gr', '$pg_edite', '$pg_all', '$pg_viwe_id', '$pg_delete', '$pg_delete_rel', '$pg_add_rel', 'null', 'null', 'null', 'null'),"
        . "('$name', 'insurance_setup', '$i_add_ins', '$i_edite', '$i_all', 'null', '$i_delete', 'null', 'null', 'null', 'null', 'null', 'null'),"
        . "('$name', 'tax', '$t_add_tax', '$t_edite', '$t_all', 'null', '$t_delete', 'null', 'null', 'null', 'null', 'null', 'null'),"
        . "('$name', 'application', '$app_add', '$app_edite', '$app_all', '$app_view_id', '$app_delete', 'null', '$add_app', 'null', 'null', 'null', 'null'),"
        . "('$name', 'appointment', '$ment_add', '$ment_edite', '$ment_all', '$ment_view_id', '$ment_delete', 'null', '$add_ment', 'null', 'null', 'null', 'null'),"
        . "('$name', 'application_archived', 'null', '$arc_edite', '$arc_all', '$arc_view_id', '$arc_delete', 'null', 'null', 'null', 'null', 'null', 'null'),"
        . "('$name', 'departments', '$d_add_dep', '$d_edite', '$d_all', '$d_add_pos', '$d_delete', 'null', 'null', 'null', 'null', 'null', 'null');";
$cx=$db->insertnew($sql);


/************************application_archived*****************/
$res = $db->getResult();  
$id_user=$res[0];

if ($cx == 1) {
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
/***************************DROP*******************************/



?>