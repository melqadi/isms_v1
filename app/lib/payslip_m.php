<?php

include_once 'app/model/mysql_crud.php';
include_once 'app/lib/weekend.php';
include_once 'app/lib/all_data_m.php';
include_once 'app/lib/timesheet_m.php';


class pay
{
    
//The function returns the no. of business days between two dates and it skips the holidays
function slip($id_user,$from,$to,$deu,$ev,$ef,$dv,$df){
              $return = [];
              
$timesheet = new time();
$all_data = $timesheet->sheet($id_user,$from,$to);
//////////////////////salary////////////////
$basic=$all_data[0]["salary"];
/////////////////////////////////payroll_groups////
$payroll_groups=$all_data[0]["payroll_groups"];
$earning_payroll=[];
$deduction_payroll=[];
foreach ($payroll_groups as $key=>$val)
{
    if($val["id_payroll_value"]["gory"]=="earning")
    {
        $earning_payroll[]=array("type"=>$val["id_payroll_value"]["type"],"value"=>$val["id_payroll_value"]["value"],"name"=>$val["id_payroll_value"]["name"]);
    }elseif ($val["id_payroll_value"]["gory"]=="deduction") {
        $deduction_payroll[]=array("type"=>$val["id_payroll_value"]["type"],"value"=>$val["id_payroll_value"]["value"],"name"=>$val["id_payroll_value"]["name"]);
    }


}
//////////////////////////////////add exipion///////////////////////////////////////////////
        $earning_payroll[]=array("type"=>"Value","value"=>$ev,"name"=>"Exp Earning Value");
        $earning_payroll[]=array("type"=>"Formula","value"=>$ef,"name"=>"Exp Earning Formula");
        $deduction_payroll[]=array("type"=>"Formula","value"=>$df,"name"=>"Exp Deduction Value");
        $deduction_payroll[]=array("type"=>"Value","value"=>$dv,"name"=>"Exp Deduction Formula");

///////////////////////////chang formla to value $earning_payroll////////////////////////////
foreach ($earning_payroll as $key=>$val)
    {
    if($val["type"]=="Formula")
        {
        $formla=$basic/100;
        $f_v=$val["value"]*$formla;
        $earning_payroll[$key]["value"]=$f_v;
        }

    }
    $total_earning = array_column($earning_payroll, 'value');
     $sum_earnig=array_sum($total_earning);
////////////////////$sum_earnig/////////////////////////////////
     $groos=$basic+$sum_earnig;
/////////////////////////////////////////////////////////////
foreach ($deduction_payroll as $key=>$val)
    {
    if($val["type"]=="Formula")
        {
        if($deu=="basic")
        {
        $formla=$basic/100;
        $f_v=$val["value"]*$formla;
        $deduction_payroll[$key]["value"]=$f_v;

        }
   elseif($deu=="groos") 
        {
        $formla=$groos/100;
        $f_v=$val["value"]*$formla;
        $deduction_payroll[$key]["value"]=$f_v;

        }
        }

    }
////////////////////////////////////////////////////////////////     
$total_deduction = array_column($deduction_payroll, 'value');
     $sum_deduction_cat=array_sum($total_deduction);
//////////////////Employee//////////////////////////////////////////////
$insurance=$all_data[0]["insurance"];
////////////////////////////////////////////
$insurance_employee=[];
foreach ($insurance as $key=>$val)
    {
    if($val["value_employee"]!="")
        {
        $insurance_employee[]=$insurance[$key];
        }
    }
//    */////////////////////////////////////////
foreach ($insurance_employee as $key=>$val)
    {
    if($val["type_value_employee"]=="Percentage")
        {
        if($val["value_employee"]!="")
        {
        if($val["insurance_from"]=="basic")
        {
        $formla=$basic/100;
        $f_v=$val["value_employee"]*$formla;
        $insurance_employee[$key]["value_employee"]=$f_v;

        }
   elseif($val["insurance_from"]=="net") 
        {
        $formla=$groos/100;
        $f_v=$val["value_employee"]*$formla;
        $insurance_employee[$key]["value_employee"]=$f_v;

        }
        }
        }
    }

//////////////////////$sum_deduction_insurance//////////////////
$total_insurance = array_column($insurance_employee, 'value_employee');
     $sum_deduction_insurance=array_sum($total_insurance);
////////////////////////////////////////////////////////////////
$tax=$all_data[0]["tax"];
$tax_employee=[];
foreach ($tax as $key=>$val)
    {
    if($val["val_employee"]!="")
        {
        $tax_employee[]=$tax[$key];
        }
    }
//////////////////////////
    $tax_emp=[];
    foreach ($tax_employee as $key=>$val)
    {

        if($val["tax_from"]=="basic")
        {
            if($val["range_from"] <= $basic && $basic <=$val["range_to"])
            {
        $formla=$basic/100;
        $f_v=$val["val_employee"]*$formla;
        $tax_employee[$key]["val_employee"]=$f_v;
        $tax_emp[]=$tax_employee[$key];
            }
        }

   elseif($val["tax_from"]=="net") 
        {
       if($val["range_from"] <= $groos && $groos <=$val["range_to"])
            {
        $formla=$groos/100;
        $f_v=$val["val_employee"]*$formla;
        $tax_employee[$key]["val_employee"]=$f_v;
        $tax_emp[]=$tax_employee[$key];
            }     
        }


    }
/////////////////////////////////////////
$total_tax = array_column($tax_emp, 'val_employee');
     $sum_deduction_tax=array_sum($total_tax);
///////////////////////////////////////////////
     $sum_deduction=$sum_deduction_cat+$sum_deduction_insurance+$sum_deduction_tax;
     ////////////////////////////////////////
     $net_salary=$groos-$sum_deduction;
     //////////////////////////////////////
     $over_time=$all_data[2]-$all_data[8]-$all_data[9];
//     $over_time=10;
     if($over_time>=$all_data[6])
         {
$over_time=$over_time.":00";
 $o_i=( strtotime($over_time) - strtotime($all_data[6]) ) / 60; 


         $how= "delay"    ;     
         }elseif ($over_time<=$all_data[6]) {
    $over_time=$over_time.":00";
 $o_i=( strtotime($all_data[6]) - strtotime($over_time) ) / 60; 

               $how="over_time";    ;
             }
$acdcdc = $o_i/60;
$h=floor($o_i / 60); 
$fds=($acdcdc-$h)*60;
if($fds>9){$fds=$fds;}  else {$fds="0".$fds;}
$over_time = $h.':'.$fds;
$over_timee=  array("time"=>$over_time,"how"=>$how);



$salary_of_hour=$net_salary/$all_data[2];
$absence_salary=$all_data[8]*$salary_of_hour;
$net_salary_of_absence=$net_salary-$absence_salary;
/**********************************************/
$Absence_dlaysalary=date("i",strtotime($all_data[7]));
  $Absence_dlaysalary= ($Absence_dlaysalary*1.666666667)/100;
 $Absence_dlaysalary=date("H",strtotime($all_data[7]))+$Absence_dlaysalary;
   $totsal= $Absence_dlaysalary*$salary_of_hour;

/*********************************************/
       $de=( strtotime($over_timee["time"]) - strtotime($all_data[7]) ) / 60; 
$acdcdc = $de/60;
$h=floor($de / 60); 
$fds=($acdcdc-$h)*60;
if($fds>9){$fds=$fds;}  else {$fds="0".$fds;}
$over_ti = $h.':'.$fds;
/********************************************/
$i_o=date("i", strtotime($over_timee["time"])); 
    $i_a=date("i", strtotime($all_data[7])); 
    $h_o=date("H", strtotime($over_timee["time"])); 
    $h_a=date("H", strtotime($all_data[7])); 
 $h=$h_o+$h_a;
 $i=$i_a+$i_o;
 $f=floor($i / 60)+$h;
$fds=($i -floor($i / 60) * 60);
if($fds>9){$fds=$fds;}  else {$fds="0".$fds;}
if($f>9){$f=$f;}  else {$f="0".$f;}
 $over = $f.':'.$fds;
/**********************************************/
       if($over_timee["how"]=="delay")
       {
$Absence_salary=date("i",strtotime($over_ti));
  $Absence_salary= ($Absence_salary*1.666666667)/100;
 $Absence_salary=date("H",strtotime($over_ti))+$Absence_salary;
   $dddde=array("0"=>$Absence_salary*$salary_of_hour,"1"=>"delay") ;
   $kkk=$over_ti;
       }else{

 $Absence_salary=date("i",strtotime($over));
  $Absence_salary= ($Absence_salary*1.666666667)/100;
 $Absence_salary=date("H",strtotime($over))+$Absence_salary;
   $dddde=array("0"=>$Absence_salary*$salary_of_hour,"1"=>"over") ;
   $kkk=$over;

       }
  /*******************************************/
    $return["basic"] = $basic;  //basic
    $return["earning_payroll"] = $earning_payroll;  //all data of user
    $return["deduction_payroll"] = $deduction_payroll;  //all data of user
    $return["sum_earnig"] = $sum_earnig;  //all data of user
    $return["groos"] = $groos;  //all data of user
    $return["sum_deduction_cat"] = $sum_deduction_cat;  //all data of user
    $return["insurance_employee"] = $insurance_employee;  //all data of user
    $return["sum_deduction_insurance"] = $sum_deduction_insurance;  //all data of user
    $return["tax_emp"] = $tax_emp;  //all data of user
    $return["sum_deduction_tax"] = $sum_deduction_tax;  //all data of user
    $return["sum_deduction"] = $sum_deduction;  //all data of user
    $return["net_salary"] = $net_salary;  //all data of user
    $return["over_timee"] = $over_timee;  //all data of user
    $return["salary_of_hour"] = $salary_of_hour;  //all data of user
    $return["absence_salary"] = $absence_salary;  //all data of user
    $return["net_salary_of_absence"] = $net_salary_of_absence;  //all data of user
    $return["dlay"] = $totsal;  //all data of user
    $return[] = $dddde;  //all data of user
    $return[] = $kkk;  //all data of user

    $return["all_data"] = $all_data;  //all data of user

    return $return;
    
 

 
}

//Example:

// => will return 7

}
?>
