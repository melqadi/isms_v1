<?php  
$id_application=$_GET["id_application"];

                                                $file_name="Add"." ".$_GET["mod"];
                                                $file_db=$_GET["action"];
                                                $file_x=$_GET["mod"];
                                                 $ok=$ok["view_by_id"];
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
Appointment Setup</a>
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
Appointment                                                            		
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
include $control.'application_c.php';
?>
<a href="?sec=hr&mod=account&action=educational&id_application=<?php echo $x_value["id_application"];?>" class="btn btn-primary">Educational Qualifications</a>
<a href="?sec=hr&mod=account&action=previuos&id_application=<?php echo $x_value["id_application"];?>" class="btn btn-primary">Previous Experiences</a>

                


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
echo $x_value["code_application"];
?>" disabled="disabled">
</div>
</div>
                <div style="text-align: right;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> User Name  </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["f_name_application"]." ".$x_value["m_name_application"]." ".$x_value["l_name_application"];
?>" disabled="disabled">
</div>
</div>
<div style="text-align: right;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Gender </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["gender_application"];
?>" disabled="disabled">
</div>
</div>
<div style="text-align: right;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">  Religion </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["religion_application"];
?>" disabled="disabled">
</div>
</div>
<div style="text-align: right;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Date of Birth </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["birthday_application"];
?>" disabled="disabled">
</div>
</div>
<div style="text-align: right;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> National ID </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["national_application"];
?>" disabled="disabled">
</div>
</div>

<div style="text-align: right;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Marrital Status </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["marrital_application"];
?>" disabled="disabled">
</div>
</div>
<div style="text-align: right;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Blood Group </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["blood_application"];
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
echo $x_value["email_application"];
?>" disabled="disabled">
</div>
</div>
<div style="text-align: right;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Mobile Number </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["mobile_application"]."/".$x_value["fax_application"]."/".$x_value["landline_application"];
?>" disabled="disabled">
</div>
</div>
<div  style="text-align: right;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Address </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["address_application"]."/*/".$x_value["other_address_application"];
?>" disabled="disabled">
</div>
</div>
    
<h3 class="header blue lighter smaller">
<i class="ace-icon fa fa-list-alt smaller-90"></i>
    Admission Details

</h3>

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
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> How Did You Hear About Our School?   </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["school"];
?>" disabled="disabled">
</div>
</div>
<div style="text-align: right;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> How Did You Hear About This Position ?   </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["about_pos"];
?>" disabled="disabled">
</div>
</div>
<div style="text-align: right;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> When Will You Be Available To Start Work ?   </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["start"];
?>" disabled="disabled">
</div>
</div>
<div style="text-align: right;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Previous Salary   </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["per_salary"];
?>" disabled="disabled">
</div>
</div>
<div style="text-align: right;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Expected Salary   </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["exp_salary"];
?>" disabled="disabled">
</div>
</div>


<hr>
  &nbsp; &nbsp; &nbsp;


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
				

	</body>
</html>
