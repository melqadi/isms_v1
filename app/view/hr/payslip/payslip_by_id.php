<?php
$id_user=$_GET["id_user"];
$from=$_GET["from"];
$to=$_GET["to"];

$deu="groos";
$deu="basic";

$ev="0";
$ef="0";

$dv="0";
$df="0";


$payslip = $pay->slip($id_user,$from,$to,$deu,$ev,$ef,$dv,$df);

 
         
//echo"<pre>";
//print_r($payslip["over_timee"]);
//echo"<pre>";


                                                $file_name="Update"." ".$_GET["mod"];
                                                $file_db=$_GET["action"];
                                                $file_x=$_GET["mod"];
//                                    echo  $hi= $ok["deleterelion"];
                                                                        


?>
						     <div class="main-content-inner">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">
Employment Setup</a>
							</li>
							<li class="active"> <?php echo $text;?></li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search" style="display:none;" >
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>
	
					
                                <div class="page-content">
                                    
				<div class="page-header">
							<h1>
<?php echo $text;?>
                                                            <small>
												</small>
							</h1>
						</div><!-- /.page-header -->
                                                
                                                
                                                    <!--/************************/-->
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
						
								<div class="row">
									<div class="col-xs-12">
										
										<div class="clearfix">
                                                                                    <div class="pull-right tableTools-container">
                                                                                        
                                                                                    </div>
										</div>
<!--/*****************************************************************************************************/-->										
<div class="form-horizontal">
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Name </label>
<div class="col-sm-9">
    <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php echo $payslip["all_data"][0]["f_name_user"]." ".$payslip["all_data"][0]["m_name_user"]." ".$payslip["all_data"][0]["l_name_user"]?>" disabled="disabled">
</div>
</div> 
    <!--//////////////////-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> ID </label>
<div class="col-sm-9">
    <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php echo $payslip["all_data"][0]["code_user"];?>" disabled="disabled">
</div>
</div> 
    <!--//////////////////-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Category </label>
<div class="col-sm-9">
    <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php echo $payslip["all_data"][0]["id_categories"]["name_categories"];?>" disabled="disabled">
</div>
</div>
    <!--//////////////////-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Departments </label>
<div class="col-sm-9">
    <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php echo $payslip["all_data"][0]["id_departments"]["name_departments"];?>" disabled="disabled">
</div>
</div>
    <!--//////////////////-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Positions </label>
<div class="col-sm-9">
    <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php echo $payslip["all_data"][0]["id_positions"]["name_positions"];?>" disabled="disabled">
</div>
</div>
    <!--//////////////////-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">rules </label>
<div class="col-sm-9">
    <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php echo $payslip["all_data"][0]["id_rules"]["name_rules"];?>" disabled="disabled">
</div>
</div>
    <!--//////////////////-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Month </label>
<div class="col-sm-9">
    <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
    
     $mounth=$payslip["all_data"][1][1][0];
    echo date("F",  strtotime($mounth));
    
    ?>" disabled="disabled">
</div>
</div>
    <!--//////////////////-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="margin-right: 1.2%">  Total Working </label>

<div class="input-daterange input-group" style="width: 30%">
<input value="<?php echo $payslip["all_data"][2]." Hours"; ?>"  type="text" class="input-sm form-control" disabled="disabled">
        <span class="input-group-addon">
                <i class="fa fa-exchange"></i>
        </span>

<input value="<?php echo count($payslip["all_data"][5])." Days"; ?>"  type="text" class="input-sm form-control" disabled="disabled">
</div>
</div>
    <!--//////////////////-->
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="margin-right: 1.2%">  Actual Working </label>
<div class="input-daterange input-group" style="width: 30%">
<input value="<?php echo $payslip["all_data"][6]." Hours" ;?>"  type="text" class="input-sm form-control" disabled="disabled">
        <span class="input-group-addon">
                <i class="fa fa-exchange"></i>
        </span>
<?php
$levs=0;
$apsent=0;
$apsentt=0;
foreach ($payslip["all_data"][5] as $aa)
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
?> 

<input value="<?php echo $apsentt." Days" ;?>"  type="text" class="input-sm form-control" disabled="disabled">
</div>

</div>
    <!--//////////////////-->
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="margin-right: 1.2%">  Absence  </label>
<div class="input-daterange input-group" style="width: 30%">
<input value="<?php echo $payslip["all_data"][8]." Hours" ;?>"  type="text" class="input-sm form-control" disabled="disabled">
        <span class="input-group-addon">
                <i class="fa fa-exchange"></i>
        </span>

<input value="<?php echo $apsent." Days" ;?>"  type="text" class="input-sm form-control" disabled="disabled">
</div>

</div>
    <!--//////////////////-->
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="margin-right: 1.2%">  Leaves </label>
<div class="input-daterange input-group" style="width: 30%">
<input value="<?php echo $payslip["all_data"][9]." Hours" ;?>"  type="text" class="input-sm form-control" disabled="disabled">
        <span class="input-group-addon">
                <i class="fa fa-exchange"></i>
        </span>

<input  value="<?php echo $levs." Days" ;?>" type="text" class="input-sm form-control" disabled="disabled">
</div>

</div>
    <!--//////////////////-->
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="margin-right: 1.2%">  Delay </label>
<div class="input-daterange input-group" style="width: 30%">
<input value="<?php echo $payslip["all_data"][7]." Hours" ;?>"  type="text" class="input-sm form-control" disabled="disabled">
        <span class="input-group-addon">
                <i class="fa fa-exchange"></i>
        </span>

<input value="<?php echo $payslip["all_data"][10]." Days" ;?>"    type="text" class="input-sm form-control" disabled="disabled">
</div>

</div>
    <!--//////////////////-->

    
    <!--//////////////////-->

    <!--//////////////////-->
    <?php
    if($payslip["over_timee"]["how"]=="delay")
        {
?>
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="margin-right: 1.2%">  early leaves Working </label>
<div class="input-daterange input-group" style="width: 30%">
<input value="<?php
     $de=( strtotime($payslip["over_timee"]["time"]) - strtotime($payslip["all_data"][7]) ) / 60; 
$acdcdc = $de/60;
$h=floor($de / 60); 
$fds=($acdcdc-$h)*60;
if($fds>9){$fds=$fds;}  else {$fds="0".$fds;}
$over_time = $h.':'.$fds;
                echo $over_time." Hours";
    ?>"  type="text" class="input-sm form-control" disabled="disabled">
</div>

</div>

    
    
    <?php        
        }else
            {
?>
    
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="margin-right: 1.2%">  Over Time Working </label>
<div class="input-daterange input-group" style="width: 30%">
<input value="<?php

    $i_o=date("i", strtotime($payslip["over_timee"]["time"])); 
    $i_a=date("i", strtotime($payslip["all_data"][7])); 
    $h_o=date("H", strtotime($payslip["over_timee"]["time"])); 
    $h_a=date("H", strtotime($payslip["all_data"][7])); 
 $h=$h_o+$h_a;
 $i=$i_a+$i_o;
 $f=floor($i / 60)+$h;
$fds=($i -floor($i / 60) * 60);
if($fds>9){$fds=$fds;}  else {$fds="0".$fds;}
if($f>9){$f=$f;}  else {$f="0".$f;}
 $over = $f.':'.$fds;
 
 
                echo $over." Hours";

    ?>"  type="text" class="input-sm form-control" disabled="disabled">
</div>

</div>

    
    

    
    <?php        
            
            }
    ?>
    <!--///////////////////-->
    <hr>
  <!--//////////////////-->
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="margin-right: 1.2%">  Basic Salary </label>
<div class="input-daterange input-group" style="width: 30%">
<input value="<?php echo $payslip["basic"]." L.E" ;?>"  type="text"style="background-color: #D5E3F0!important;" class="input-sm form-control" disabled="disabled">
</div>

</div>
    <!--//////////////////-->
   <?php
foreach ($payslip["earning_payroll"]as $key => $val){
   ?> 
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="margin-right: 1.2%">  <?php echo $val["name"]?> </label>
<div class="input-daterange input-group" style="width: 30%">
<input value="<?php echo $val["value"]." L.E" ;?>"  type="text" class="input-sm form-control" disabled="disabled">
</div>
</div>
  <?php
  }
  ?>
  <div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="margin-right: 1.2%">  Total earning </label>
<div class="input-daterange input-group" style="width: 30%">
<input value="<?php echo $payslip["sum_earnig"]." L.E" ;?>"  type="text" class="input-sm form-control"style="background-color: #D5E3F0!important;" disabled="disabled">
</div>
</div>  
  <div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="margin-right: 1.2%">  Total Gross Salary </label>
<div class="input-daterange input-group" style="width: 30%">
<input value="<?php echo $payslip["groos"]." L.E" ;?>"  type="text"style="background-color: #D5E3F0!important;" class="input-sm form-control" disabled="disabled">
</div>
</div>  
   <hr>
  <?php
 foreach ($payslip["deduction_payroll"] as $key=>$val){
  ?>
   <div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="margin-right: 1.2%">  <?php echo $val["name"];?> </label>
<div class="input-daterange input-group" style="width: 30%">
<input value="<?php echo $val["value"]." L.E" ;?>"  type="text" class="input-sm form-control" disabled="disabled">
</div>
</div>
  <?php
  }
  ?> 
   <div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="margin-right: 1.2%">  Total Deduction Payroll </label>
<div class="input-daterange input-group" style="width: 30%">
<input value="<?php echo $payslip["sum_deduction_cat"]." L.E" ;?>" style="background-color: #D5E3F0!important;" type="text" class="input-sm form-control" disabled="disabled">
</div>
</div>
   <?php
  foreach ($payslip["insurance_employee"] as $key => $val){
   ?>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="margin-right: 1.2%">  <?php echo $val["name_insurance"];?> </label>
<div class="input-daterange input-group" style="width: 30%">
<input value="<?php echo $val["value_employee"]." L.E" ;?>"  type="text" class="input-sm form-control" disabled="disabled">
</div>
</div>
   <?php
   }
   ?>
   <div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="margin-right: 1.2%">  Total Deduction Insurance </label>
<div class="input-daterange input-group" style="width: 30%">
<input value="<?php echo $payslip["sum_deduction_insurance"]." L.E" ;?>" style="background-color: #D5E3F0!important;" type="text" class="input-sm form-control" disabled="disabled">
</div>
</div>
    <?php
  foreach ($payslip["tax_emp"] as $key => $val){
   ?>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="margin-right: 1.2%">  <?php echo $val["name_tax"];?> </label>
<div class="input-daterange input-group" style="width: 30%">
<input value="<?php echo $val["val_employee"]." L.E" ;?>"  type="text" class="input-sm form-control" disabled="disabled" >
</div>
</div>
   <?php
   }
   ?>
   <div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="margin-right: 1.2%">  Total Deduction Taxes </label>
<div class="input-daterange input-group" style="width: 30%">
    <input value="<?php echo $payslip["sum_deduction_tax"]." L.E" ;?>" style="background-color: #D5E3F0!important;" type="text" class="input-sm form-control" disabled="disabled">
</div>
</div>
   <div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="margin-right: 1.2%">  Total Deduction  </label>
<div class="input-daterange input-group" style="width: 30%">
    <input value="<?php echo $payslip["sum_deduction"]." L.E" ;?>" style="background-color: #D5E3F0!important;" type="text" class="input-sm form-control" disabled="disabled">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="margin-right: 1.2%"> Net Salary  </label>
<div class="input-daterange input-group" style="width: 30%">
    <input value="<?php echo $payslip["net_salary"]." L.E" ;?>" style="background-color: #D5E3F0!important;" type="text" class="input-sm form-control" disabled="disabled">
</div>
</div>
   <hr>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="margin-right: 1.2%">Salary of Hour  </label>
<div class="input-daterange input-group" style="width: 30%">
    <input value="<?php echo $hours_salary=$payslip["net_salary"]/$payslip["all_data"][2]." L.E" ;?>" style="background-color: #D5E3F0!important;" type="text" class="input-sm form-control" disabled="disabled">
</div>
</div>
   <hr>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="margin-right: 1.2%"> Salary of Absence  </label>
<div class="input-daterange input-group" style="width: 30%">
    <input value="<?php echo $Absence_salary=$payslip["all_data"][8]*$hours_salary." L.E" ;?>" style="background-color: #D5E3F0!important;" type="text" class="input-sm form-control" disabled="disabled">
</div>
</div>   <hr>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="margin-right: 1.2%">Net Salary of Absence  </label>
<div class="input-daterange input-group" style="width: 30%">
    <input value="<?php echo $payslip["net_salary"]-$Absence_salary." L.E" ;?>" style="background-color: #D5E3F0!important;" type="text" class="input-sm form-control" disabled="disabled">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="margin-right: 1.2%"> Salary of delay  </label>
<div class="input-daterange input-group" style="width: 30%">
    <input value="<?php  $Absence_salary=date("i",strtotime($payslip["all_data"][7]));
  $Absence_salary= ($Absence_salary*1.666666667)/100;
 $Absence_salary=date("H",strtotime($payslip["all_data"][7]))+$Absence_salary;
  echo $totsal= $Absence_salary*$hours_salary;

  
  
    ?>" style="background-color: #D5E3F0!important;" type="text" class="input-sm form-control" disabled="disabled">
</div>
</div>
   <?php
       if($payslip["over_timee"]["how"]=="delay")
       {
   ?>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="margin-right: 1.2%"> Salary of earnig leves  </label>
<div class="input-daterange input-group" style="width: 30%">
    <input value="<?php  $Absence_salary=date("i",strtotime($over_time));
  $Absence_salary= ($Absence_salary*1.666666667)/100;
 $Absence_salary=date("H",strtotime($over_time))+$Absence_salary;
  echo $totsal= $Absence_salary*$hours_salary;

  
  
    ?>" style="background-color: #D5E3F0!important;" type="text" class="input-sm form-control" disabled="disabled">
</div>
</div>
   <?php
       }else{
   ?>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="margin-right: 1.2%"> Salary of over time  </label>
<div class="input-daterange input-group" style="width: 30%">
    <input value="<?php  $Absence_salary=date("i",strtotime($over));
  $Absence_salary= ($Absence_salary*1.666666667)/100;
 $Absence_salary=date("H",strtotime($over))+$Absence_salary;
  echo $totsal= $Absence_salary*$hours_salary;

  
  
    ?>" style="background-color: #D5E3F0!important;" type="text" class="input-sm form-control" disabled="disabled">
</div>
</div>
   <?php
       }
   ?>
   <hr>
   
</div>

<form id="validate"  class="form-horizontal" action="<?php echo $control;?><?php echo $file_x;?>_c.php" method="POST">
    

<div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            
            <button class="btn btn-success " name="update" value="update" onclick='return confirm(<?php echo $confirm_add;?>)' type="submit">
                        <i class="ace-icon fa fa-floppy-o bigger-120"></i>
                        Update
                </button>

                &nbsp; &nbsp; &nbsp;
                <a class="btn btn-primary" href="?sec=hr&mod=<?php echo $file_x;?>&action=<?php echo $file_x;?>">
                         <i class="ace-icon fa fa-share "></i>
                        <!--class="ace-icon fa fa-share bigger-200"-->
												Back to List
                </a>
                                &nbsp; &nbsp; &nbsp;
 <?php
 $addrelion=$ok["addrelion"];

                                               if($addrelion == "yes"){
 
 ?>   

    <a class="btn btn-primary" href="?sec=hr&mod=<?php echo $file_x;?>&action=add_cat&id_payroll_groups=<?php echo $id_payroll_groups; ?>">
                         <i class="ace-icon fa fa-pencil-square-o  "></i>
                        <!--class="ace-icon fa fa-share bigger-200"-->
												Add New Category
                </a>
                                <?php
                                               }
                                ?>
        </div>
</div>

									
								</form>
<!--/*****************************************************************************************************/-->										

                                                                        </div>
								</div>

								
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
				
