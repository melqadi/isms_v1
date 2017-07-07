<?php
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
							<li class="active"> <?php echo "Add Leaves Rules";?></li>
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
Add Leaves Rules                  					</h1>
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
include $control.'leaves_rules_c.php';
?>
<form id="validate"  class="control-group form-horizontal" action="<?php echo $control;?><?php echo $file_x;?>_c.php" method="POST" >
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Leaves Name  </label>

<div class="col-sm-9">
    <input type="text" name="name" id="form-field-1"  class="col-xs-10 col-sm-5">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">No. of Days   </label>

<div class="col-sm-9">
    <input type="number" name="days" id="form-field-1"  class="col-xs-10 col-sm-5">
</div>
</div>


<div class="form-group">
        <label  class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Leave Type</label>

<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;font-weight: lighter;">
        <label>
            <input id="fff" name="type" value="full" type="radio" class="ace">
                <span class="lbl"> Full Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;font-weight: lighter;">
        <label>
                <input id="ff" name="type" value="hulf" type="radio" class="ace">
                <span class="lbl">Half Day </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;font-weight: lighter;">
        <label>
            <input id="f" name="type" value="permission"type="radio" class="ace" >
                <span class="lbl"> Leave Permission</span>
        </label>
</div>

</div>

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




</div>
     <hr>
<div class="form-group">
        <label  class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Applied For </label>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;font-weight: lighter;">
        <label>
                <input id="cc" name="applied" value="All" type="radio" class="ace">
                <span class="lbl">All Employees </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;font-weight: lighter;">
        <label>
            <input id="c" name="applied" value="selected"type="radio" class="ace" >
                <span class="lbl"> Selected Employees </span>
        </label>
</div>

</div>

<div  id="v" style="display: none; margin: auto;text-align: center;" >
<div class="form-group">
        <label  class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Selected </label>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;font-weight: lighter;">
        <label>
            <input id="p" name="selected"  value="department" type="radio" class="ace">
                <span class="lbl">By Department </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;font-weight: lighter;">
        <label>
            <input id="pp" name="selected" value="position"type="radio" class="ace" >
                <span class="lbl"> By Position</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;font-weight: lighter;">
        <label>
            <input id="ppp" name="selected" value="status"type="radio" class="ace" >
                <span class="lbl"> By Employment Status</span>
        </label>
</div>

</div>

</div>
     <div style="display: none;" id="sp" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Department  </label>
<div class="col-sm-9">
    <select style="width: 396px;" name="department[]" class="form-control" id="form-field-select-2" multiple="multiple" size="5">
           <?php
foreach($depart as $out){
                                ?>
        <option value="<?php echo $out["name_departments"];?>"><?php echo $out["name_departments"];?></option>
<?php } ?>
    </select>
</div>
</div>
     <div style="display: none;" id="spp" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Position  </label>
<div class="col-sm-9">
    <select style="width: 396px;" name="position[]" class="form-control" id="form-field-select-2" multiple="multiple" size="5">
           <?php
foreach($posit as $out){
                                ?>
        <option value="<?php echo $out["name_positions"];?>"><?php echo $out["name_positions"];?></option>
<?php } ?>
    </select>
</div>
</div>
     <div style="display: none;" id="sppp" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Employment Status  </label>
<div class="col-sm-9">
    <select style="width: 396px;" name="status[]" class="form-control" id="form-field-select-2" multiple="multiple" size="5">
           <?php
foreach($stat as $out){
                                ?>
        <option value="<?php echo $out["name_rules"];?>"><?php echo $out["name_rules"];?></option>
<?php } ?>
    </select>
</div>
</div>
    <hr>

<div class="form-group">
        <label  class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Date Range Type </label>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;font-weight: lighter;">
        <label>
                <input id="drt" name="fd" value="hulffay" type="radio" class="ace">
                <span class="lbl"> Whole Year </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;font-weight: lighter;">
        <label>
            <input id="drtt" name="fd" value="weekend"type="radio" class="ace" >
                <span class="lbl"> Date Range </span>
        </label>
</div>

</div>
    <div id="one" style="display: none;">

<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Start Date  </label>

<div class="col-sm-9">
    <input type="date" id="noval" name="startt" id="form-field-1"  class="col-xs-10 col-sm-5">
</div>
</div>
    </div>
    <div id="tow" style="display: none;">

<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Start Date  </label>

<div class="col-sm-9">
    <input id="noval" type="date" name="start" id="form-field-1"  class="col-xs-10 col-sm-5">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">End Date   </label>

<div class="col-sm-9">
    <input id="noval" type="date" name="end" id="form-field-1"  class="col-xs-10 col-sm-5">
</div>
</div>
    </div>
    <hr>
    <div style="margin-left: 20%;">
    <div class="checkbox">
<label>
    <input name="reset" value="reset" type="checkbox" class="ace">
        <span class="lbl"> Reset the leave by start next year</span>
</label>
</div>

<div class="checkbox">
<label>
    <input name="forward" value="forward" type="checkbox" class="ace">
        <span class="lbl"> Enable Leave carried forward (unused balance can be added to user's next year balance)
</span>
</label>
</div>
    <div class="checkbox">
<label>
    <input name="w_as" value="w_as" type="radio" class="ace">
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
    <div class="checkbox">
<label>
    <input name="h_as" value="h_as" type="radio" class="ace">
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
        </div>

<div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-success " type="submit" name="add" value="add" onclick='return confirm(<?php echo $confirm_add;?>)'>
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
