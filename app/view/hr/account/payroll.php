<?php  
$id_user=$_GET["id_user"];

                                                $file_name="Add"." ".$_GET["mod"];
                                                $file_db=$_GET["action"];
                                                $file_x=$_GET["mod"];

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
Account Setup</a>
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
Add Account                  					</h1>
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
<script src="<?php echo $jq;?>jquery-1.11.3.min.js"></script>

<script src="<?php echo $jq;?>style.js"></script>
<?php
echo $id_user=$_GET["id_user"];

          include $control.'account_c.php';
?>
 &nbsp; &nbsp; &nbsp;
<h3 class="header blue lighter smaller">
<i class="ace-icon fa fa-list-alt smaller-90"></i>
Taxes
</h3>
<?php
foreach ($taxd as $key=> $vald){
       ?>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">  </label>

        <div class="col-sm-9">
  
            <input type="text" value="<?php 
           
          echo  $vald;

            ?>" id="form-field-1"  name="" id="form-field-1" disabled="disabled" class="col-xs-10 col-sm-5">
<span class="input-group-btn">
    <a onclick='return confirm(<?php echo $confirm_delete;?>)' href="<?php echo $control;?>account_c.php?id_user=<?php echo $id_user; ?>&dropp=6&name=<?php echo $vald;?>"  class="btn btn-danger btn-sm">
        <span class="ace-icon fa fa-trash-o bigger-120 "></span>
        delete
</a>
</span>
        </div>
</div>
<?php
}
?>
 <!--/************************/-->
 <hr>
  &nbsp; &nbsp; &nbsp;
<h3 class="header blue lighter smaller">
<i class="ace-icon fa fa-list-alt smaller-90"></i>
Insurance
</h3>
<?php
foreach ($in as $key=> $vald){
       ?>
    <div  class="form-group">
        <label  class="col-sm-3 control-label no-padding-right" for="form-field-1">  </label>

        <div class="col-sm-9">
  
            <input type="text" value="<?php 
           
          echo  $vald;

            ?>" id="form-field-1"  name="" id="form-field-1" disabled="disabled" class="col-xs-10 col-sm-5">
<span class="input-group-btn">
    <a onclick='return confirm(<?php echo $confirm_delete;?>)' href="<?php echo $control;?>account_c.php?id_user=<?php echo $id_user; ?>&dropp=2&name=<?php echo "$vald";?>"  class="btn btn-danger btn-sm">
        <span class="ace-icon fa fa-trash-o bigger-120 "></span>
        delete
</a>
</span>
        </div>
</div>
<?php
}
?>
<!--/***********************************************/-->
   <hr>
  &nbsp; &nbsp; &nbsp;
<h3 class="header blue lighter smaller">
<i class="ace-icon fa fa-list-alt smaller-90"></i>
update payroll
</h3>

<form id="validate"  class="control-group form-horizontal" action="<?php echo $control;?>account_c.php" method="POST" >
    <input type="hidden" name="id_user" value="<?php echo $id_user;?>">
<!--/************************************.**************************************************************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Basic Salary  </label>

<div class="col-sm-9">
    <input value="<?php echo $x_value["salary"];?>" type="text" name="salaryy" id="form-field-1"  class="col-xs-10 col-sm-5">
</div>
</div>
    <!--/*************payrooll****************/-->   
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Payroll Group </label>
<?php 
if(empty($x_value["id_payroll_groups"]))
    {$name_payroll_groups="select payroll groups";}
?>
<div class="col-sm-9">
    <select style="  width: 42%;" class="form-control" id="form-field-select-1" name="payroll_groups" >
        <option value="<?php echo $x_value["id_payroll_groups"];?>"><?php echo $name_payroll_groups;?></option>
<option disabled="disabled" >---------------------------------</option>
      <?php
          foreach ($payroll_groups as $cited){

      ?>
          <option value="<?php
          echo $cited["id_payroll_groups"];
          ?>"><?php
          echo $cited["name_payroll_groups"];
          ?></option>
<?php
          }
?>
</select>
</div>
</div>
     <!--/*****************Insurance************************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Insurance Setup  </label>
<div class="col-sm-9">
    <select name="insurance[]" class="form-control" id="form-field-select-2" multiple="multiple" size="5">
           <?php
foreach($ins as $outpr){

                                ?>
                                                                 
        <option value="<?php echo $outpr["name_insurance"];?>"><?php echo $outpr["name_insurance"];?></option>
<?php } ?>
    </select>
</div>
</div>
 <!--/*********************Taxes********************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Taxes Setup  </label>
<div class="col-sm-9">
    <select name="tax[]" class="form-control" id="form-field-select-2" multiple="multiple" size="5">
           <?php
foreach($tax as $otax){

                                ?>
                                                                 
        <option value="<?php echo $otax["name_tax"];?>"><?php echo $otax["name_tax"];?></option>
<?php } ?>
    </select>
</div>
</div>
<hr>    
<!--/*****************************email *****************************************/-->

<div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            
                &nbsp; &nbsp; &nbsp;
                <a class="btn btn-primary" href="?sec=hr&mod=<?php echo $file_x;?>&action=<?php echo $file_x;?>">
                         <i class="ace-icon fa fa-share "></i>
                        <!--class="ace-icon fa fa-share bigger-200"-->
												Back to List
                </a>&nbsp; &nbsp; &nbsp;
<!--                <a id="next" class=" next1 btn btn-primary" >
                         <i class="ace-icon fa fa-share "></i>
                        class="ace-icon fa fa-share bigger-200"
next                </a>-->
<button class="btn btn-success " type="submit" name="pyrool" value="pyrool" onclick='return confirm(<?php echo $confirm_add;?>)'>
                        <i class="ace-icon fa fa-floppy-o bigger-120"></i>
                        Save
                </button>


        </div>
</div>


       
    <!--/******************rules***************/-->

<!--/***********************************************************/-->


<!--/********************************//******************************/-->

<!--/**************************************/-->
    
<!--<a id="nextt">next2</a>
<a id="back">back</a>-->

<!--/************************************************************************************************************/-->
<!--/************************************************************************************************************/-->
   
    
        
</form>


<!--/*****************************************************************************************************/-->										

                                                                        </div>
								</div>

								
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
				