<!DOCTYPE html>
<?php  
$id_leaves_rules=$_GET["id_leaves_rules"];

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
							<li class="active"> <?php echo" Leaves";?></li>
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
Leaves											</h1>
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
include $control.'leaves_rules_c.php';
    
foreach($res as $x => $x_value){
        
    
     

?>
<!--``, ``, ``, `type`, `permission`, `applied`, `select`,--> 
<!--`rang_start`, `rang_end`, `reset`, `forward`, `w_as`, `w_form`, `h_as`, `h_form`, `action`-->
<!--<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Id </label>
<div class="col-sm-9">
    <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
//echo $x_value["id_leaves_rules"];
?>" disabled="disabled">
</div>
</div>-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Leave Name  </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["name"];
?>" disabled="disabled">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> No. of Days </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["days"];
?>" disabled="disabled">
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Leave Type</label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["type"];
?>" disabled="disabled">
</div>
</div>
<?php
if($x_value["type"]=="permission"){
?>

<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> permission</label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["permission"];
?>" disabled="disabled">
</div>
</div>
<?php
}
?>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Applied To</label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["applied"];
?>" disabled="disabled">
</div>
</div>
<?php
if($x_value["applied"]=="selected"){
?>

<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Selected Users</label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["select"];
?>" disabled="disabled">
</div>
</div>
<?php
}
?>

<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">  Start Date</label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["rang_start"];
?>" disabled="disabled">
</div>
</div>
<?php

if($x_value["rang_end"]!=""){
?>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> End Date</label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["rang_end"];
?>" disabled="disabled">
</div>
</div>
<?php
}
if($x_value["reset"]!=""){?>

    <div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo "Reset the leave by start next year";
?>" disabled="disabled">
</div>
</div>
    <?php
}
if($x_value["forward"]!=""){?>
    
    <div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> </label>
<div class="col-sm-9">
    <input style="overflow: hidden;
  text-overflow: ellipsis;" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo "Enable Leave carried forward (unused balance can be added to user's next year balance)";
?>" disabled="disabled">
</div>
</div>
    <?php }
if($x_value["w_as"]==""){
    ?>

    <div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo " Consider in between weekends from the leave days";
?>" disabled="disabled">
</div>
</div>
        <?php
}  else {
    ?>

    <div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo "Consider in between weekends as working days";
?>" disabled="disabled">
</div>
</div>
        <?php
}
if($x_value["h_as"]!=""){
    ?>

    <div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo "Consider in between holidays as working days";
?>" disabled="disabled">
</div>
</div>
        <?php
    
} else {?>

    <div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo "Consider in between holiadys from the leave days";
?>" disabled="disabled">
</div>
</div>
        <?php
    
}
?>
    <?php }
  ?>

                &nbsp; &nbsp; &nbsp;
<div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            
                &nbsp; &nbsp; &nbsp;
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
