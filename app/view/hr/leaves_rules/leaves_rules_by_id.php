
<?php 
$id_leaves_rules=$_GET["id_leaves_rules"];
include $control.'leaves_rules_c.php';


?>
<?php  
                                                $file_name="Update"." ".$_GET["mod"];
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
<script src="<?php echo $jq;?>jquery-1.11.3.min.js"></script>

<script src="<?php echo $jq;?>style.js"></script>

<form id="validate"  class="control-group form-horizontal" action="<?php echo $control;?><?php echo $file_x;?>_c.php" method="POST" >
    <input type="hidden"  name="id_l" value="<?php echo $id_leaves_rules;?>">

    <div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Leaves Name  </label>

<div class="col-sm-9">
    <input type="text" name="name" id="form-field-1" value="<?php echo $res[0]["name"]?>"  class="col-xs-10 col-sm-5">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">No. of Days   </label>

<div class="col-sm-9">
    <input type="number" name="days" id="form-field-1" value="<?php echo $res[0]["days"]?>" class="col-xs-10 col-sm-5">
</div>
</div>

  
<div class="form-group">
        <label  class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Leave Type</label>
<?php   $type=$res[0]["type"];
if($type=="full")
    {?>
    <div class="radio" style="float: left;margin-left: 100px;font-size: 16px;font-weight: lighter;">
        <label>
            <input id="fff" name="type" value="full" type="radio" class="ace" checked>
                <span class="lbl"> Full Day</span>
        </label>
</div>
<?php
    }else {
    ?>
    <div class="radio" style="float: left;margin-left: 100px;font-size: 16px;font-weight: lighter;">
        <label>
            <input id="fff" name="type" value="full" type="radio" class="ace" >
                <span class="lbl"> Full Day</span>
        </label>
</div>
<?php
}
?>
<!--<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;font-weight: lighter;">
        <label>
                <input id="ff" name="type" value="hulf" type="radio" class="ace">
                <span class="lbl">Hulf Day </span>
        </label>
</div>-->
<?php
if($type=="permission"){
?>
    <div class="radio" style="float: left;margin-left: 100px;font-size: 16px;font-weight: lighter;">
        <label>
            <input id="f" name="type" value="permission"type="radio" class="ace" checked>
                <span class="lbl"> Leave Permission</span>
        </label>
</div>

    <?php    
}  else {
    ?><div class="radio" style="float: left;margin-left: 100px;font-size: 16px;font-weight: lighter;">
        <label>
            <input id="f" name="type" value="permission"type="radio" class="ace" >
                <span class="lbl"> Leave Permission</span>
        </label>
</div>

        <?php
}
?>


</div>  
<?php
if($type=="permission"){
    ?>
<div  id="g" style=" margin: auto;text-align: center;" >
<?php
$permission=$res[0]["permission"];
$ex=explode(",",$permission);

if($ex[0]=="Early"){
    ?>

    <div class="checkbox">
<label>
    <input value="Early" name="early" type="checkbox" class="ace" checked>
        <span class="lbl"> Early Permission </span>
</label>
</div>
    <?php
}  else {
    ?>

    <div class="checkbox">
<label>
    <input value="Early" name="early" type="checkbox" class="ace" >
        <span class="lbl"> Early Permission </span>
</label>
</div>
    <?php    
}
    
    
    if($ex[1]=="Late"){
    ?>

<div class="checkbox">
<label>
    <input value="Late" name="late" type="checkbox" class="ace" checked>
        <span class="lbl"> Late Permission </span>
</label>
</div>
    <?php
}  else {
    ?>

<div class="checkbox">
<label>
        <input value="Late" name="late" type="checkbox" class="ace">
        <span class="lbl"> Late Permission </span>
</label>
</div>
    <?php    
}
    ?>
    
    
    
    
    
<?php 
}else{?>
    <div  id="g" style="display: none; margin: auto;text-align: center;" >
<div class="checkbox">
<label>
    <input value="Early" name="early" type="checkbox" class="ace">
        <span class="lbl"> Early Permission </span>
</label>
</div>
    
<div class="checkbox">
<label>
        <input value="Late" name="late" type="checkbox" class="ace">
        <span class="lbl"> Late Permission </span>
</label>
</div>

    <?php 
    
}
?>




</div>
    <hr>
    
     
    <div id="tow" style="display: none;">
<?php 
$startts=$res[0]["rang_start"];
$endsas=$res[0]["rang_end"];

?>

<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Start Date  </label>

<div class="col-sm-9">
    <input id="noval" type="date" value="<?php echo $startts;?>" name="start" id="form-field-1"  class="col-xs-10 col-sm-5">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">End Date   </label>

<div class="col-sm-9">
    <input id="noval" type="date" value="<?php echo $endsas;?>"  name="end" id="form-field-1"  class="col-xs-10 col-sm-5">
</div>
</div>
    </div>
    <hr>
    <div style="margin-left: 20%;">
    <div class="checkbox">
<label>
    <?php 
$sreset=$res[0]["reset"];
if($sreset=="reset"){
    ?>
    <input name="reset" value="reset" type="checkbox" class="ace" checked>

        <?php
    
}  else {
    
?>
        <input name="reset" value="reset" type="checkbox" class="ace">

    <?php    
}
?>
        <span class="lbl"> Reset the leave by start next year</span>
</label>
</div>

<div class="checkbox">
<label>
    <?php 
$sreset=$res[0]["forward"];
if($sreset=="forward"){
    ?>
    <input name="forward" value="forward" type="checkbox" class="ace" checked>

        <?php
    
}  else {
    
?>
    <input name="forward" value="forward" type="checkbox" class="ace">

    <?php    
}
?>

        <span class="lbl"> Enable Leave carried forward (unused balance can be added to user's next year balance)
</span>
</label>
</div>
      <?php 
$sreset=$res[0]["w_as"];
if($sreset=="w_as"){
    ?>
<div class="checkbox">
<label>
    
    <input name="w_as" value="w_as" type="radio" class="ace" checked>
        <span class="lbl"> Consider in between weekends as working days
</span>
</label>
</div>
    <div class="checkbox">
<label>
    <input name="w_as" value="w_from" type="radio" class="ace">
        <span class="lbl"> Consider in between weekends from the leave days
</span>
</label>
</div>
        <?php
    
}  else 
    {
    
?><div class="checkbox">
<label>
    
    <input name="w_as" value="w_as" type="radio" class="ace">
        <span class="lbl"> Consider in between weekends as working days
</span>
</label>
</div>
    <div class="checkbox">
<label>
    <input name="w_as" value="w_from" type="radio" class="ace" checked>
        <span class="lbl"> Consider in between weekends from the leave days
</span>
</label>
</div>
    <?php    
}
?>
      <?php 
$sreset=$res[0]["h_as"];
if($sreset=="h_as"){
    ?>
 <div class="checkbox">
<label>
    <input name="h_as" value="h_as" type="radio" class="ace" checked>
        <span class="lbl"> Consider in between holidays as working days
</span>
</label>
</div>
<div class="checkbox">
<label>
    <input name="h_as" value="h_from" type="radio" class="ace">
        <span class="lbl"> Consider in between holiadys from the leave days
</span>
</label>
</div>
        
        <?php
    
}  else {
    
?>
        <div class="checkbox">
<label>
    <input name="h_as" value="h_as" type="radio" class="ace">
        <span class="lbl"> Consider in between holidays as working days
</span>
</label>
</div>
<div class="checkbox">
<label>
    <input name="h_as" value="h_from" type="radio" class="ace" checked>
        <span class="lbl"> Consider in between holiadys from the leave days
</span>
</label>
</div>
        
    <?php    
}
?>  
   
        
        </div>

<div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-success " type="submit" name="update" value="update" onclick='return confirm(<?php echo $confirm_add;?>)'>
                        <i class="ace-icon fa fa-floppy-o bigger-120"></i>
                        Save & Add New
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

<!--/*****************************************************************************************************/-->										

                                                                        </div>
								</div>

								
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
				

