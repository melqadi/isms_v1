<?php 
$id_insurance=$_GET["id_insurance"];
include $control.'insurance_setup_c.php';

                                   $file_name="Update"." ".$_GET["mod"];
                                                $file_db=$_GET["action"];
                                                $file_x=$_GET["mod"];
                                                 $ok=$ok["edit"];
                                                  
$text=str_replace('_', ' ', $file_name);
$text=ucwords($text);
    if($ok=="no")
        {
?>
<meta http-equiv="refresh" content="0;url=./index.php?sec=hr&mod=<?php echo $file_x;?>&action=<?php echo $file_x;?>"/>
       
            <?php $message = 'not approve';

echo "<SCRIPT> 
alert('$message');
</SCRIPT>";
die();
   
        }


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
									<!--<i class="ace-icon fa fa-angle-double-right"></i>-->
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

<div class="col-sm-6" style="width: 100%">
    <label>
                <span class="lbl"> Insurance Paid By

</span>
        </label>
<div class="tabbable">
    
        <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
            <?php  $paid=$res[0]["paid_insurance"];
/******************************/
if($paid=="employer"){echo "employer";
$employer="in active";

?>
            <li  >
                        <a data-toggle="tab" href="#home4">Employee</a>
                </li>

                <li class="active">
                        <a data-toggle="tab" href="#profile4">Employer</a>
                </li>

                <li >
                        <a data-toggle="tab" href="#dropdown14">Both</a>
                </li>
            
<?php


}
/**********************************/
if($paid=="employee"){echo "employee";
$employee="in active";

?>
            <li class="active" >
                        <a data-toggle="tab" href="#home4">Employee</a>
                </li>

                <li>
                        <a data-toggle="tab" href="#profile4">Employer</a>
                </li>

                <li >
                        <a data-toggle="tab" href="#dropdown14">Both</a>
                </li>
            
<?php
}
/***********************************/
if($paid=="both"){echo "both";
$both="in active";
?>   
            <li >
                        <a data-toggle="tab" href="#home4">Employee</a>
                </li>

                <li>
                        <a data-toggle="tab" href="#profile4">Employer</a>
                </li>

                <li class="active">
                        <a data-toggle="tab" href="#dropdown14">Both</a>
                </li>
                <?php

}
?>
                
        </ul>

        <div class="tab-content">
                <div id="home4" class="tab-pane <?php echo $employee ;?>">

<!--/****************Employee****************/-->
<form id="validate"  class="form-horizontal" action="<?php echo $control;?>insurance_setup_c.php" method="POST" >
<!--``, ``, `paid_insurance`, ``, `value_employer`, ``,
`type_value_employer`, `insurance_From`, ``-->
<input type="hidden"name="id_insurance" value="<?php echo $id_insurance;?>">
<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Insurance Name  </label>

        <div class="col-sm-9">
            <input value="<?php echo $res[0]["name_insurance"];?>" type="text" name="name_insurance" id="form-field-1" class="col-xs-10 col-sm-5">
        </div>
</div>								
<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">  Insurance Code </label>

        <div class="col-sm-9">
            <input value="<?php echo $res[0]["code_insurance"];?>" type="text" name="code_insurance" id="form-field-1"  class="col-xs-10 col-sm-5">
        </div>
</div>
<input type="hidden" value="employee" name="paid">    
<div class="form-group">
        <label  class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Insurance From</label>
  <?php
   $i_f=$res[0]["insurance_from"];
   if($i_f=="basic"){?>
       <div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="insurance_from" value="basic" type="radio" class="ace" checked>
                <span class="lbl"> Basic Salary
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="insurance_from" value="net" type="radio" class="ace">
                <span class="lbl">Net Salary
 </span>
        </label>
</div>
<?php
   } 
   elseif ($i_f=="net")  {?>
       <div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="insurance_from" value="basic" type="radio" class="ace" >
                <span class="lbl"> Basic Salary
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="insurance_from" value="net" type="radio" class="ace" checked>
                <span class="lbl">Net Salary
 </span>
        </label>
</div>
<?php
   }
  

   else  {?>
       <div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="insurance_from" value="basic" type="radio" class="ace" >
                <span class="lbl"> Basic Salary
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="insurance_from" value="net" type="radio" class="ace" >
                <span class="lbl">Net Salary
 </span>
        </label>
</div>
<?php
   }
  ?>
    </div>   

<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Employee Value  </label>

        <div class="col-sm-9">
            <input value="<?php echo $res[0]["value_employee"];?>" type="text" name="value_employee" id="form-field-1"  class="col-xs-10 col-sm-5">
        </div>
</div>
     
<div class="form-group">
        <label  class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Type Value</label>
 <?php $t_v_e=$res[0]["type_value_employee"];
 if($t_v_e=="value"){
     ?>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="type_employee" value="value" type="radio" class="ace" checked>
                <span class="lbl"> Value
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="type_employee" value="Percentage" type="radio" class="ace">
                <span class="lbl">Percentage 
 </span>
        </label>
</div>
<?php
     
 }elseif ($t_v_e=="Percentage") {
     ?>
         
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="type_employee" value="value" type="radio" class="ace" >
                <span class="lbl"> Value
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="type_employee" value="Percentage" type="radio" class="ace" checked >
                <span class="lbl">Percentage 
 </span>
        </label>
</div>
         <?php
 }  
 else {
     ?>
    
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="type_employee" value="value" type="radio" class="ace" >
                <span class="lbl"> Value
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="type_employee" value="Percentage" type="radio" class="ace" >
                <span class="lbl">Percentage 
 </span>
        </label>
</div>
         <?php
     
 }
   ?>
    </div>   
                &nbsp; &nbsp; &nbsp;

<!--/*****************************************/-->

<div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-success " type="submit" name="update" value="update" onclick='return confirm(<?php echo $confirm_add;?>)'>
                        <i class="ace-icon fa fa-floppy-o bigger-120"></i>
                        Save
                </button>

                &nbsp; &nbsp; &nbsp;
                <a class="btn btn-primary" href="?sec=hr&mod=<?php echo $file_x;?>&action=<?php echo $file_x;?>">
                         <i class="ace-icon fa fa-share "></i>
                        <!--class="ace-icon fa fa-share bigger-200"-->
												Back to List
                </a>
        </div>
</div>

									
								</form>

<!--/******************Employer******************/-->                </div>

                <div id="profile4" class="tab-pane <?php echo $employer ;?>">
                    <form id="validateing"  class="form-horizontal" action="<?php echo $control;?>insurance_setup_c.php" method="POST" >

<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Insurance Name  </label>

        <div class="col-sm-9">
            <input value="<?php echo $res[0]["name_insurance"];?>" type="text" name="name_insurance" id="form-field-1" class="col-xs-10 col-sm-5">
        </div>
</div>								
<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">  Insurance Code </label>

        <div class="col-sm-9">
            <input value="<?php echo $res[0]["code_insurance"];?>" type="text" name="code_insurance" id="form-field-1"  class="col-xs-10 col-sm-5">
        </div>
</div>
<input type="hidden"name="id_insurance" value="<?php echo $id_insurance;?>">

<input type="hidden" value="employer" name="paid">    
<!--<div class="form-group">
        <label  class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Insurance From</label>
  <?php
   $i_f=$res[0]["insurance_from"];
   if($i_f=="basic"){?>
       <div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="insurance_from" value="basic" type="radio" class="ace" checked>
                <span class="lbl"> Basic Salary
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="insurance_from" value="net" type="radio" class="ace">
                <span class="lbl">Net Salary
 </span>
        </label>
</div>
<?php
   } 
   else {?>
       <div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="insurance_from" value="basic" type="radio" class="ace" >
                <span class="lbl"> Basic Salary
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="insurance_from" value="net" type="radio" class="ace" checked>
                <span class="lbl">Net Salary
 </span>
        </label>
</div>
<?php
   }
  ?>

    </div>   -->

<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Employer Value </label>

        <div class="col-sm-9">
            <input value="<?php echo $res[0]["value_employer"];?>" type="text" name="value_employer" id="form-field-1"  class="col-xs-10 col-sm-5">
        </div>
</div>

<div class="form-group">
        <label  class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Type Value</label>
 <?php $t_v_e=$res[0]["type_value_employer"];
 if($t_v_e=="value"){
     ?>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="type_employer" value="value" type="radio" class="ace" checked>
                <span class="lbl"> Value
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="type_employer" value="Percentage" type="radio" class="ace">
                <span class="lbl">Percentage 
 </span>
        </label>
</div>
<?php
     
 }elseif ($t_v_e=="Percentage") {
     ?>
            
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="type_employer" value="value" type="radio" class="ace" >
                <span class="lbl"> Value
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="type_employer" value="Percentage" type="radio" class="ace" checked >
                <span class="lbl">Percentage 
 </span>
        </label>
</div>
 
         <?php
 }
 else {
     ?>
    
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="type_employer" value="value" type="radio" class="ace" >
                <span class="lbl"> Value
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="type_employer" value="Percentage" type="radio" class="ace" >
                <span class="lbl">Percentage 
 </span>
        </label>
</div>
         <?php
     
 }
   ?>
    </div> 
           &nbsp; &nbsp; &nbsp;

<!--/*****************************************/-->

<div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-success " type="submit" name="update" value="update" onclick='return confirm(<?php echo $confirm_add;?>)'>
                        <i class="ace-icon fa fa-floppy-o bigger-120"></i>
                        Save
                </button>

                &nbsp; &nbsp; &nbsp;
                <a class="btn btn-primary" href="?sec=hr&mod=<?php echo $file_x;?>&action=<?php echo $file_x;?>">
                         <i class="ace-icon fa fa-share "></i>
                        <!--class="ace-icon fa fa-share bigger-200"-->
												Back to List
                </a>
        </div>
</div>

									
								</form>

                </div>

                <div id="dropdown14" class="tab-pane <?php echo $both ;?>">
                    <form id="vali"  class="form-horizontal" action="<?php echo $control;?>insurance_setup_c.php" method="POST" >

<!--/****************Both****************/-->

<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Insurance Name  </label>

        <div class="col-sm-9">
            <input value="<?php echo $res[0]["name_insurance"];?>" type="text" name="name_insurance" id="form-field-1" class="col-xs-10 col-sm-5">
        </div>
</div>								
<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">  Insurance Code </label>

        <div class="col-sm-9">
            <input value="<?php echo $res[0]["code_insurance"];?>" type="text" name="code_insurance" id="form-field-1"  class="col-xs-10 col-sm-5">
        </div>
</div>
<input type="hidden" name="id_insurance" value="<?php echo $id_insurance;?>">

<input type="hidden" value="both" name="paid">    
<div class="form-group">
        <label  class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Insurance From</label>
  <?php
   $i_f=$res[0]["insurance_from"];
   if($i_f=="basic"){?>
       <div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="insurance_from" value="basic" type="radio" class="ace" checked>
                <span class="lbl"> Basic Salary
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="insurance_from" value="net" type="radio" class="ace">
                <span class="lbl">Net Salary
 </span>
        </label>
</div>
<?php
   } 
   elseif ($i_f=="net")  {?>
       <div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="insurance_from" value="basic" type="radio" class="ace" >
                <span class="lbl"> Basic Salary
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="insurance_from" value="net" type="radio" class="ace" checked>
                <span class="lbl">Net Salary
 </span>
        </label>
</div>
<?php
   }
  

   else  {?>
       <div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="insurance_from" value="basic" type="radio" class="ace" >
                <span class="lbl"> Basic Salary
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="insurance_from" value="net" type="radio" class="ace" >
                <span class="lbl">Net Salary
 </span>
        </label>
</div>
<?php
   }
  ?>
    </div>   


<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Employee Value  </label>

        <div class="col-sm-9">
            <input value="<?php echo $res[0]["value_employee"];?>" type="text" name="value_employee" id="form-field-1"  class="col-xs-10 col-sm-5">
        </div>
</div>
    
<div class="form-group">
        <label  class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Type Value</label>
 <?php $t_v_e=$res[0]["type_value_employee"];
 if($t_v_e=="value"){
     ?>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="type_employee" value="value" type="radio" class="ace" checked>
                <span class="lbl"> Value
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="type_employee" value="Percentage" type="radio" class="ace">
                <span class="lbl">Percentage 
 </span>
        </label>
</div>
<?php
     
 }elseif ($t_v_e=="Percentage") {
     ?>
         
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="type_employee" value="value" type="radio" class="ace" >
                <span class="lbl"> Value
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="type_employee" value="Percentage" type="radio" class="ace" checked >
                <span class="lbl">Percentage 
 </span>
        </label>
</div>
         <?php
 }  
 else {
     ?>
    
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="type_employee" value="value" type="radio" class="ace" >
                <span class="lbl"> Value
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="type_employee" value="Percentage" type="radio" class="ace" >
                <span class="lbl">Percentage 
 </span>
        </label>
</div>
         <?php
     
 }
   ?>
    </div>   


<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Employer Value </label>

        <div class="col-sm-9">
            <input value="<?php echo $res[0]["value_employer"];?>" type="text" name="value_employer" id="form-field-1"  class="col-xs-10 col-sm-5">
        </div>
</div>
<div class="form-group">
        <label  class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Type Value</label>
 <?php $t_v_e=$res[0]["type_value_employer"];
 if($t_v_e=="value"){
     ?>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="type_employer" value="value" type="radio" class="ace" checked>
                <span class="lbl"> Value
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="type_employer" value="Percentage" type="radio" class="ace">
                <span class="lbl">Percentage 
 </span>
        </label>
</div>
<?php
     
 }elseif ($t_v_e=="Percentage") {
     ?>
            
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="type_employer" value="value" type="radio" class="ace" >
                <span class="lbl"> Value
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="type_employer" value="Percentage" type="radio" class="ace" checked >
                <span class="lbl">Percentage 
 </span>
        </label>
</div>
 
         <?php
 }
 else {
     ?>
    
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="type_employer" value="value" type="radio" class="ace" >
                <span class="lbl"> Value
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="type_employer" value="Percentage" type="radio" class="ace" >
                <span class="lbl">Percentage 
 </span>
        </label>
</div>
         <?php
     
 }
   ?>
    </div> 
<!--/************************************/-->
                &nbsp; &nbsp; &nbsp;

<!--/*****************************************/-->

<div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-success " type="submit" name="update" value="update" onclick='return confirm(<?php echo $confirm_add;?>)'>
                        <i class="ace-icon fa fa-floppy-o bigger-120"></i>
                        Save
                </button>

                &nbsp; &nbsp; &nbsp;
                <a class="btn btn-primary" href="?sec=hr&mod=<?php echo $file_x;?>&action=<?php echo $file_x;?>">
                         <i class="ace-icon fa fa-share "></i>
                        <!--class="ace-icon fa fa-share bigger-200"-->
												Back to List
                </a>
        </div>
</div>

									
								</form>

                </div>
        </div>
</div>
</div>

    








<!--/*****************************************************************************************************/-->										

                                                                        </div>
								</div>

								
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
				
