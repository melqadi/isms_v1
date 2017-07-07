<?php

$table_name = "sa_lkp_grades";
$resultset = "";


if(!isset($_GET["mod"])){  include '../IndexController.php';     } 

var_dump($GLOBALS['alert_msg']);
$db = new Database();
$db->connect();

function get_academic_years()
{
    $GLOBALS['db']->select_active('setting_lkp_years', '*', null, 'year_type="academic"'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
    $academic_years = $GLOBALS['db']->getResult();
    
    return $academic_years;
}

function check_exist_grade($grade_name)
{
    $GLOBALS['db']->select_active($GLOBALS['table_name'], '*', null, 'grade_name="' . $grade_name . '"');
    $num_rows = $GLOBALS['db']->numRows();
    
    if ($num_rows > 0) {
        return true;
    } else {
        return false;
    }
    return true;
}

function view_grade()
{
   
    $GLOBALS['db']->select_active($GLOBALS['table_name']);
    $GLOBALS['resultset'] = $GLOBALS['db']->getResult();
    
    return $GLOBALS['resultset'];
}

function view_grade_byid($grade_id)
{
    $GLOBALS['db']->select_active($GLOBALS['table_name'], '*', null, 'id=' . $grade_id);
    $GLOBALS['resultset'] = $GLOBALS['db']->getResult();
    
    return $GLOBALS['resultset'];
}

if (isset($_POST['action'])) {
    $action_crud = $_POST['action'];
} else 
    if (isset($_GET['action'])) {
        $action_crud = $_GET['action'];
    }

if (isset($action_crud)) {
    
    switch ($action_crud) {
        case "add_grade":
            if ($_POST['academic_year'] != "") {
                if (check_exist_grade($_POST['grade_name']) == 0) {
                    $db_transaction = $db->insert($table_name, array(
                        'grade_name' => $_POST['grade_name'],
                        'academic_year' => $_POST['academic_year']
                    ));
                    if ($db_transaction == 0) {
                        echo $not;
                    } else {
                        echo $done;
                    }
                } else {
                    echo $dupli;
                }
            }
            header("location:" . $dir . $_SESSION['submit_url']);
            break;
        case "view_grade_id":
            view_grade_byid($_GET['id']);
            break;
        case "edit_grade":
            
            
            
                   if ($_POST['academic_year'] != "") {
                if (check_exist_grade($_POST['grade_name']) == 0) {
                    
                    $db_transaction = $db->update($table_name, array(
                        'grade_name' => $_POST['grade_name'],
                        'academic_year' => $_POST['academic_year']
                    ),'id='.$_POST['id'] );
                    if ($db_transaction == false) {
                        echo $not;
                    } else {
                        echo $done;
                    }
                } else {
                    echo $dupli;
                }
            }
            header("location:" . $dir . $_SESSION['submit_url']);            
            break;
        case "delete_grade":
            
            break;
        
        case "add_class":
            
            break;
        
        case "edit_class":
            
            break;
        case "delete_class":
            
            break;
    }
}
?>
