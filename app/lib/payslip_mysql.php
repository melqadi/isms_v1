<?php

include_once 'app/model/mysql_crud.php';
include_once 'app/lib/weekend.php';
include_once 'app/lib/all_data_m.php';
include_once 'app/lib/timesheet_m.php';
include_once 'app/lib/payslip_m.php';


class payslip
{
    
//The function returns the no. of business days between two dates and it skips the holidays
function mysql($data,$month,$year,$dlay,$leavs,$over){
              $return = [];
// `id_user`, `month`, `year`, `name_field`, `result_field`
$id=$data["all_data"][0]["id_user"];
$name= $data["all_data"][0]["f_name_user"]." ".$data["all_data"][0]["m_name_user"]." ".$data["all_data"][0]["l_name_user"];
$name_categories=$data["all_data"][0]["id_categories"]["name_categories"];
$name_departments=$data["all_data"][0]["id_departments"]["name_departments"];
$name_positions=$data["all_data"][0]["id_positions"]["name_positions"];
$name_rules=$data["all_data"][0]["id_rules"]["name_rules"];
    
$levs=0;
$apsent=0;
$apsentt=0;
foreach ($data["all_data"][5] as $aa)
    {
    if($aa["stat"]=="leavs")
        {
        $levs=$levs+1;
        }  elseif ($aa["stat"]=="empty") {
        $apsent=$apsent+1;
            
        }  elseif ($aa["stat"]=="apsent") {
            $apsentt=$apsentt+1;
        }
    }
$return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>"User Name","result_field"=>$name);
$return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>"ID","result_field"=>$id);
$return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>"Categories Name","result_field"=>$name_categories);
$return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>"Departments Name","result_field"=>$name_departments);
 $return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>"Positions Name","result_field"=>$name_positions);
$return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>"Rules Name","result_field"=>$name_rules);
 $return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>"Total Working Hours","result_field"=>$data["all_data"][2]);
$return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>"Total Working Day","result_field"=>count($data["all_data"][5]));

 $return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>"Actual Working Hours","result_field"=>$data["all_data"][6]);
$return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>"Actual Working Day","result_field"=>$apsentt);

 $return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>"Absence Hours","result_field"=>$data["all_data"][8]);
$return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>"Absence Day","result_field"=>$apsent);


 $return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>"Leaves Hours","result_field"=>$data["all_data"][9]);
$return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>"Leaves Day","result_field"=>$levs);


 $return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>"Delay Hours","result_field"=>$data["all_data"][7]);
$return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>"Delay Day","result_field"=>$data["all_data"][10]);

$return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>$data[0][1],"result_field"=>$data[1]);

$return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>"Basic Salary","result_field"=>$data["basic"]);
foreach ($data["earning_payroll"]as $key => $val){
$return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>$val["name"],"result_field"=>$val["value"]);
}
$return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>"Total earning","result_field"=>$data["sum_earnig"]);
$return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>"Total Gross Salary","result_field"=>$data["groos"]);
 foreach ($data["deduction_payroll"] as $key=>$val){
$return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>$val["name"],"result_field"=>$val["value"]);
 }
$return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>"Total Deduction Payroll","result_field"=>$data["sum_deduction_cat"]);
foreach ($data["insurance_employee"] as $key => $val){
$return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>$val["name_insurance"],"result_field"=>$val["value_employee"]);
}
$return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>"Total Deduction Insurance","result_field"=>$data["sum_deduction_insurance"]);
foreach ($data["tax_emp"] as $key => $val){
        $return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>$val["name_tax"],"result_field"=>$val["val_employee"]);
}

$return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>"Total Deduction Taxes","result_field"=>$data["sum_deduction_tax"]);
$return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>"Total Deduction","result_field"=>$data["sum_deduction"]);
$return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>"Net Salary","result_field"=>$data["net_salary"]);
$return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>"Salary of Hour ","result_field"=>$data["salary_of_hour"]);
$return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>"Salary of Absence","result_field"=>$data["absence_salary"]);
$return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>"Net Salary of Absence","result_field"=>$data["net_salary_of_absence"]);

$net=$data["net_salary_of_absence"];
if($dlay=="true")
{
    $return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>"Salary of delay","result_field"=>$data["dlay"]);

 $net=$net-$data["dlay"];   
} 
if ($leavs=="true") {
    if($data[0][1]=="delay"){
    $return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>"Salary of earnig leves","result_field"=>$data[0][0]);

     $net=$net-$data[0][0];  
    }
} 
if ($over=="true") {
    if($data[0][1]=="over"){
            $return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>"Salary of Over Time","result_field"=>$data[0][0]);
     $net=$net+$data[0][0];  
    }
}        
echo $net;
$return[]=array("id_user"=>$id,"month"=>$month,"year"=>$year,"name_field"=>"Actual Salary","result_field"=>$net);

  

    return $return;
    
 

 
}

//Example:

// => will return 7

}
?>
