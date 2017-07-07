<?php 
$id_tax=$_GET["id_tax"];
include $control.'tax_c.php';


  
                                                $file_name="Update"." ".$_GET["mod"];
                                                $file_db=$_GET["action"];
                                                $file_x=$_GET["mod"];
 $ok=$ok["edit"];
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
							<li class="active"> <?php echo $file_name;?></li>
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
<?php echo $file_name;?>
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

<div class="col-sm-6" style="width: 100%">
    <label>
                <span class="lbl"> tax Paid By

</span>
        </label>
<div class="tabbable">
    
        <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
            <?php  $paid=$res[0]["paid_tax"];
/******************************/
if($paid=="employer"){ "employer";
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
if($paid=="employee"){ "employee";
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
if($paid=="both"){ "both";
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
<!--/************************************/-->
        <div class="tab-content">
                <div id="home4" class="tab-pane <?php echo $employee ;?>">

<!--/****************Employee****************/-->
<form id="vali"  class="form-horizontal" action="<?php echo $control;?>tax_c.php" method="POST" >
<!--``, ``, ``, ``, ``,
``, ``, ``, `tax_from`-->
    <input type="hidden"name="id_tax" value="<?php echo $id_tax;?>">
<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Tax Name  </label>

        <div class="col-sm-9">
            <input value="<?php echo $res[0]["name_tax"];?>" type="text" name="name_tax" id="form-field-1" class="col-xs-10 col-sm-5">
        </div>
</div>								
<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">  Tax Code </label>

        <div class="col-sm-9">
            <input value="<?php echo $res[0]["code_tax"];?>" type="text" name="code_tax" id="form-field-1"  class="col-xs-10 col-sm-5">
        </div>
</div>
    <div class="col-xs-8 col-sm-11">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="margin-right: 2.3%">  Salary Range </label>

    <div class="input-daterange input-group" style="width: 38%">
        <input value="<?php echo $res[0]['range_from'];?>" type="text" class="input-sm form-control" name="range_from">
                <span class="input-group-addon">
                        <i class="fa fa-exchange"></i>
                </span>

        <input value="<?php echo $res[0]['range_to'];?>" type="text" class="input-sm form-control" name="range_to">
        </div>
</div>

<input type="hidden" value="employee" name="paid_tax">    
<div class="form-group">
        <label  class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Tax From</label>
  <?php
   $i_f=$res[0]["tax_from"];
   if($i_f=="basic"){?>
       <div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="tax_from" value="basic" type="radio" class="ace" checked>
                <span class="lbl"> Basic Salary
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="tax_from" value="net" type="radio" class="ace">
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
            <input name="tax_from" value="basic" type="radio" class="ace" >
                <span class="lbl"> Basic Salary
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="tax_from" value="net" type="radio" class="ace" checked>
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
            <input name="tax_from" value="basic" type="radio" class="ace" >
                <span class="lbl"> Basic Salary
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="tax_from" value="net" type="radio" class="ace" >
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
            <input value="<?php echo $res[0]["val_employee"];?>" type="text" name="val_employee" id="form-field-1"  class="col-xs-10 col-sm-5">
        </div>
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
                    <form id="validateing"  class="form-horizontal" action="<?php echo $control;?>tax_c.php" method="POST" >
<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">tax Name  </label>

        <div class="col-sm-9">
            <input value="<?php echo $res[0]["name_tax"];?>" type="text" name="name_tax" id="form-field-1" class="col-xs-10 col-sm-5">
        </div>
</div>								
<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">  tax Code </label>

        <div class="col-sm-9">
            <input value="<?php echo $res[0]["code_tax"];?>" type="text" name="code_tax" id="form-field-1"  class="col-xs-10 col-sm-5">
        </div>
</div>
    <div class="col-xs-8 col-sm-11">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="margin-right: 2.3%">  Salary Range </label>

    <div class="input-daterange input-group" style="width: 38%">
        <input value="<?php echo $res[0]['range_from'];?>" type="text" class="input-sm form-control" name="range_from">
                <span class="input-group-addon">
                        <i class="fa fa-exchange"></i>
                </span>

            <input value="<?php echo $res[0]['range_to'];?>" type="text" class="input-sm form-control" name="range_to">
        </div>
</div>

<input type="hidden"name="id_tax" value="<?php echo $id_tax;?>">

<input type="hidden" value="employer" name="paid_tax">    
<!--<div class="form-group">
        <label  class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">tax From</label>
  <?php
   $i_f=$res[0]["tax_From"];
   if($i_f=="basic"){?>
       <div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="tax_From" value="basic" type="radio" class="ace" checked>
                <span class="lbl"> Basic Salary
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="tax_From" value="net" type="radio" class="ace">
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
            <input name="tax_From" value="basic" type="radio" class="ace" >
                <span class="lbl"> Basic Salary
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="tax_From" value="net" type="radio" class="ace" checked>
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
            <input value="<?php echo $res[0]["val_employer"];?>" type="text" name="val_employer" id="form-field-1"  class="col-xs-10 col-sm-5">
        </div>
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
                    <form id="validate"  class="form-horizontal" action="<?php echo $control;?>tax_c.php" method="POST" >

<!--/****************Both****************/-->


<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">tax Name  </label>

        <div class="col-sm-9">
            <input value="<?php echo $res[0]["name_tax"];?>" type="text" name="name_tax" id="form-field-1" class="col-xs-10 col-sm-5">
        </div>
</div>								
<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">  tax Code </label>

        <div class="col-sm-9">
            <input value="<?php echo $res[0]["code_tax"];?>" type="text" name="code_tax" id="form-field-1"  class="col-xs-10 col-sm-5">
        </div>
</div>
    <div class="col-xs-8 col-sm-11">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="margin-right: 2.3%">  Salary Range </label>

    <div class="input-daterange input-group" style="width: 38%">
        <input value="<?php echo $res[0]['range_from'];?>" type="text" class="input-sm form-control" name="range_from">
                <span class="input-group-addon">
                        <i class="fa fa-exchange"></i>
                </span>

        <input value="<?php echo $res[0]['range_to'];?>" type="text" class="input-sm form-control" name="range_to">
        </div>
</div>
<input type="hidden" name="id_tax" value="<?php echo $id_tax;?>">

<input type="hidden" value="both" name="paid_tax">    
<div class="form-group">
        <label  class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Tax From</label>
  <?php
   $i_f=$res[0]["tax_from"];
   if($i_f=="basic"){?>
       <div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="tax_from" value="basic" type="radio" class="ace" checked>
                <span class="lbl"> Basic Salary
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="tax_from" value="net" type="radio" class="ace">
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
            <input name="tax_from" value="basic" type="radio" class="ace" >
                <span class="lbl"> Basic Salary
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="tax_from" value="net" type="radio" class="ace" checked>
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
            <input name="tax_from" value="basic" type="radio" class="ace" >
                <span class="lbl"> Basic Salary
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="tax_from" value="net" type="radio" class="ace" >
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
            <input value="<?php echo $res[0]["val_employee"];?>" type="text" name="val_employee" id="form-field-1"  class="col-xs-10 col-sm-5">
        </div>
</div>
    


<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Employer Value </label>

        <div class="col-sm-9">
            <input value="<?php echo $res[0]["val_employer"];?>" type="text" name="val_employer" id="form-field-1"  class="col-xs-10 col-sm-5">
        </div>
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
				
