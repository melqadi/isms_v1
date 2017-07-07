<!DOCTYPE html>
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
Employment Setup</a>
							</li>
							<li class="active"> <?php echo $file_x;?></li>
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
Status                                                            <small>
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

    <?php
include $control.'account_c.php';
?>
<a href="?sec=hr&mod=account&action=educational&id_user=<?php echo $x_value["id_user"];?>" class="btn btn-primary">Educational Qualifications</a>
<a href="?sec=hr&mod=account&action=previuos&id_user=<?php echo $x_value["id_user"];?>" class="btn btn-primary">Previous Experiences</a>
<a href="?sec=hr&mod=account&action=gallary&id_user=<?php echo $x_value["id_user"];?>" class="btn btn-primary">Documents</a>
<a href="?sec=hr&mod=account&action=payroll&id_user=<?php echo $x_value["id_user"];?>" class="btn btn-primary">payroll</a>
<a href="?sec=hr&mod=payslip&action=view&id_user=<?php echo $x_value["id_user"];?>" class="btn btn-primary">payslip</a>

                <div class="widget-main no-padding">
        </div>
&nbsp; &nbsp; &nbsp;
<div style="text-align: left;width: 250px;">
        <span class="profile-picture">
            
       <?php  if(empty($x_value["img"])){
?>
        <img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" src="assets/avatars/portrait.png" alt="Jason's Photo" />

<?php
}  else 
    {
?>
  <img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" src="<?php echo $upload_file_conf;?><?php echo $id_user;?>/<?php echo $x_value["img"]; ?>" alt="Jason's Photo" />

<?php
}
?>

        </span>
                                
        
        <div class="space space-4"></div>
<form action="<?php echo $control;?>upload_file_c.php" method="post" enctype="multipart/form-data">    

        <div >
<input class="btn btn-sm btn-block btn-success" type="file" name="image[]" multiple="" />
        </div>
        <input type="hidden" name="id_user" value="<?php echo $x_value["id_user"];?>" />

<input class="btn btn-sm btn-block btn-primary" type="submit" value="Upload" name="add"onclick='return confirm(&#34; Are you sure you want to uplod img ? &#34;)'/>
                        </form>

        
</div><!-- /.col -->


&nbsp; &nbsp; &nbsp;
                <hr>

                
<h3 class="header blue lighter smaller">
<i class="ace-icon fa fa-list-alt smaller-90"></i>
    Personal Information

</h3>
                <div style="text-align: right;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> User ID </label>
<div class="col-sm-9">
    <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["code_user"];
?>" disabled="disabled">
</div>
</div>
                <div style="text-align: right;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> User Name  </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["f_name_user"]." ".$x_value["m_name_user"]." ".$x_value["l_name_user"];
?>" disabled="disabled">
</div>
</div>
<div style="text-align: right;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Gender </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["gender_user"];
?>" disabled="disabled">
</div>
</div>
<div style="text-align: right;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">  Religion </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["religion_user"];
?>" disabled="disabled">
</div>
</div>
<div style="text-align: right;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Date of Birth </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["birthday_user"];
?>" disabled="disabled">
</div>
</div>
<div style="text-align: right;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> National ID </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["national_user"];
?>" disabled="disabled">
</div>
</div>
                <div style="text-align: right;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Nationality </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $name_nationalities;
?>" disabled="disabled">
</div>
</div>

<div style="text-align: right;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Marrital Status </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["marrital_user"];
?>" disabled="disabled">
</div>
</div>
<div style="text-align: right;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Blood Group </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["blood_user"];
?>" disabled="disabled">
</div>
</div>
                                <hr>
<h3 class="header blue lighter smaller">
<i class="ace-icon fa fa-list-alt smaller-90"></i>
    Personal Information

</h3>
<div style="text-align: right;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Email </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["email_user"];
?>" disabled="disabled">
</div>
</div>
<div style="text-align: right;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Mobile Number </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["mobile_user"]."/".$x_value["fax_user"]."/".$x_value["landline_user"];
?>" disabled="disabled">
</div>
</div>
<div  style="text-align: right;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Address </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["address_user"]."/*/".$x_value["other_address_user"];
?>" disabled="disabled">
</div>
</div>
                &nbsp; &nbsp; &nbsp;
<hr>
<h3 class="header blue lighter smaller">
<i class="ace-icon fa fa-list-alt smaller-90"></i>
    Admission Details

</h3>

<div style="text-align: right;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Date of Joining </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["joining"];
?>" disabled="disabled">
</div>
</div>
<div style="text-align: right;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Category   </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $name_categories;
?>" disabled="disabled">
</div>
</div>
<div style="text-align: right;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Department  </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $name_departments;
?>" disabled="disabled">
</div>
</div>
<div style="text-align: right;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Position   </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $name_positions;
?>" disabled="disabled">
</div>
</div>


<div style="text-align: right;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">     Employment Status  </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $name_rules;
?>" disabled="disabled">
</div>
</div>
<div style="text-align: right;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">     Direct Manager   </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $name_user;
?>" disabled="disabled">
</div>
</div>
             &nbsp; &nbsp; &nbsp;
<hr>
<div style="text-align: right;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Payroll Groups </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $name_payroll_groups;
?>" disabled="disabled">
</div>
</div>

<hr>
  &nbsp; &nbsp; &nbsp;
<h3 class="header blue lighter smaller">
<i class="ace-icon fa fa-list-alt smaller-90"></i>
Languages
</h3>

<?php
foreach ($langes as $key=> $vald){
       ?>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">  </label>

        <div class="col-sm-9">
  
            <input type="text" value="<?php 
           
          echo  $vald;

            ?>" id="form-field-1"  name="" id="form-field-1" disabled="disabled" class="col-xs-10 col-sm-5">
<span class="input-group-btn">
    <a onclick='return confirm(<?php echo $confirm_delete;?>)' href="<?php echo $control;?>account_c.php?id_user=<?php echo $id_user; ?>&dropp=3&name=<?php echo $vald;?>"  class="btn btn-danger btn-sm">
        <span class="ace-icon fa fa-trash-o bigger-120 "></span>
        delete
</a>
</span>
        </div>
</div>
<?php
}
?>
  <hr>
  &nbsp; &nbsp; &nbsp;
<h3 class="header blue lighter smaller">
<i class="ace-icon fa fa-list-alt smaller-90"></i>
Licesens
</h3>

<?php
foreach ($lices as $key=> $vald){
       ?>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">  </label>

        <div class="col-sm-9">
  
            <input type="text" value="<?php 
           
          echo  $vald;

            ?>" id="form-field-1"  name="" id="form-field-1" disabled="disabled" class="col-xs-10 col-sm-5">
<span class="input-group-btn">
    <a onclick='return confirm(<?php echo $confirm_delete;?>)' href="<?php echo $control;?>account_c.php?id_user=<?php echo $id_user; ?>&dropp=4&name=<?php echo $vald;?>"  class="btn btn-danger btn-sm">
        <span class="ace-icon fa fa-trash-o bigger-120 "></span>
        delete
</a>
</span>
        </div>
</div>
<?php
}
?>
  <hr>
  &nbsp; &nbsp; &nbsp;
<h3 class="header blue lighter smaller">
<i class="ace-icon fa fa-list-alt smaller-90"></i>
Skills
</h3>
<?php
foreach ($skill as $key=> $vald){
       ?>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">  </label>

        <div class="col-sm-9">
  
            <input type="text" value="<?php 
           
          echo  $vald;

            ?>" id="form-field-1"  name="" id="form-field-1" disabled="disabled" class="col-xs-10 col-sm-5">
<span class="input-group-btn">
    <a onclick='return confirm(<?php echo $confirm_delete;?>)' href="<?php echo $control;?>account_c.php?id_user=<?php echo $id_user; ?>&dropp=5&name=<?php echo $vald;?>"  class="btn btn-danger btn-sm">
        <span class="ace-icon fa fa-trash-o bigger-120 "></span>
        delete
</a>
</span>
        </div>
</div>
<?php
}
?>
   <hr>
  &nbsp; &nbsp; &nbsp;
<h3 class="header blue lighter smaller">
<i class="ace-icon fa fa-list-alt smaller-90"></i>
Leaves Rules

</h3>
<?php
foreach ($leav as $key=> $vald){
       ?>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">  </label>

        <div class="col-sm-9">
  
            <input type="text" value="<?php 
           
          echo  $vald;

            ?>" id="form-field-1"  name="" id="form-field-1" disabled="disabled" class="col-xs-10 col-sm-5">
<span class="input-group-btn">
    <a onclick='return confirm(<?php echo $confirm_delete;?>)' href="<?php echo $control;?>account_c.php?id_user=<?php echo $id_user; ?>&dropp=7&name=<?php echo $vald;?>"  class="btn btn-danger btn-sm">
        <span class="ace-icon fa fa-trash-o bigger-120 "></span>
        delete
</a>
</span>
        </div>
</div>
<?php
}
?>
 



&nbsp; &nbsp; &nbsp;
<hr>
        <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            
                <a class="btn btn-primary" href="?sec=hr&mod=<?php echo $file_x;?>&action=<?php echo $file_x;?>">
                         <i class="ace-icon fa fa-share "></i>
                        <!--class="ace-icon fa fa-share bigger-200"-->
												Back to List        </a>
        </div>
</div>

<?php
?>
<!--/*****************************************************************************************************/-->										

                                                                        </div>
								</div>

								
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
				

