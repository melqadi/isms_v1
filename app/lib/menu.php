<?php
class menu{
     
public function sub($ag)
        { 
    $hr=[];
    $student_affairs=[];

   $hr["Employment Setup"]=array(
        "Categories"=>array("mod"=>"categories","action"=>"categories")
       ,"Departments"=>array("mod"=>"departments","action"=>"departments")
       ,"Positions"=>array("mod"=>"positions","action"=>"positions")
       ,"Nationalities"=>array("mod"=>"nationalities","action"=>"nationalities"));
   
   $hr["Qualification Setup"]=array(
        "Skills"=>array("mod"=>"skills","action"=>"skills")
       ,"Licenses"=>array("mod"=>"licenses","action"=>"licenses")
       ,"Languages"=>array("mod"=>"languages","action"=>"languages"));
   
   $hr["Employment Status"]=array("Employment Status"=>array("mod"=>"rules","action"=>"rules"));
  
   $hr["Payroll Setup"]=array(
        "Payroll Categories"=>array("mod"=>"payroll_categories","action"=>"payroll_categories")
       ,"Payroll Groups"=>array("mod"=>"payroll_groups","action"=>"payroll_groups"));
   
   $hr["Insurance Setup"]=array("Insurance Setup"=>array("mod"=>"insurance_setup","action"=>"insurance_setup"));
   
   $hr["Taxes Setup"]=array("Taxes Setup"=>array("mod"=>"tax","action"=>"tax"));

   $hr["Leaves Rules Setup"]=array("Leaves Rules Setup"=>array("mod"=>"leaves_rules","action"=>"leaves_rules"));

   $hr["User Application"]=array(
        "User Application"=>array("mod"=>"application","action"=>"application")
       ,"Appointment"=>array("mod"=>"appointment","action"=>"appointment")
       ,"Archived Application"=>array("mod"=>"application_archived","action"=>"application_archived"));
 
   $hr["User Account"]=array(
        "User Account"=>array("mod"=>"account","action"=>"account")
       ,"Import / Export Data"=>array("mod"=>"data","action"=>"data")
       ,"First Approve Probation Period"=>array("mod"=>"period","action"=>"period")
       ,"Second  Approve Probation Period"=>array("mod"=>"periodnd","action"=>"periodnd"));

   $hr["Leaves"]=array(
        "My Leaves"=>array("mod"=>"leaves","action"=>"leaves_view")
       ,"Users Leaves"=>array("mod"=>"leaves","action"=>"leaves")
       ,"Leaves Requests"=>array("mod"=>"leaves","action"=>"regest"));

   $hr["privileges"]=array(
        "My privileges"=>array("mod"=>"privileges","action"=>"privileges"));

   $hr["Attendance & Time Sheet"]=array(
       "Attendance"=>array("mod"=>"attendance","action"=>"attendance")
       , "Time Sheet"=>array("mod"=>"timesheet","action"=>"timesheet")
       );
   
   $hr["PaySilp"]=array(
        "Generate Payslip"=>array("mod"=>"payslip","action"=>"payslip_generate")
       ,"Second Approve Payslip"=>array("mod"=>"payslip","action"=>"payslip_second")
       ,"Stop Payslip"=>array("mod"=>"payslip","action"=>"stop")
       ,"View Payslip"=>array("mod"=>"payslip","action"=>"view"));
   
   
   
   
   
   $student_affairs["SA Setup"]=array(
        "Grades & classes"=>array("mod"=>"setup_grades_classes","action"=>"grades_classes"),
        "School Type"=>array("mod"=>"privileges","action"=>"privileges"),
        "Status for Current students"=>array("mod"=>"privileges","action"=>"privileges"),
        "Application Setup"=>array("mod"=>"privileges","action"=>"privileges"),
        "Reference Type"=>array("mod"=>"privileges","action"=>"privileges"),
        "Students Transportation Setup"=>array("mod"=>"privileges","action"=>"privileges"));
	$student_affairs["Application"]=array(
       "Add/Edit Application"=>array("mod"=>"privileges","action"=>"privileges"),
        "View Archived Application"=>array("mod"=>"privileges","action"=>"privileges"));
  $student_affairs["Current Student Records"]=array(
         "Add/Edit Admission Forms"=>array("mod"=>"privileges","action"=>"privileges"),
        "Import/Export Students Data"=>array("mod"=>"privileges","action"=>"privileges"));
 $student_affairs["Class List"]=array(
         "Update Students Status"=>array("mod"=>"privileges","action"=>"privileges"),
        "View Archived Students"=>array("mod"=>"privileges","action"=>"privileges"));
 $student_affairs["Withdraw Student Documents"]=array(
         "Withdraw student file"=>array("mod"=>"privileges","action"=>"privileges"),
         "View Withdrawn files"=>array("mod"=>"privileges","action"=>"privileges"));
 $student_affairs["Parents & Sibling Accounts"]=array(
         "Add/Edit Parent Account"=>array("mod"=>"privileges","action"=>"privileges"),
         "Sibling Accounts"=>array("mod"=>"privileges","action"=>"privileges"));
   
   
$menu=[];
$menu["HR"]=$hr;
$menu["student_affairs"]=$student_affairs;

   
   
   return $menu;
     
        }   
}
