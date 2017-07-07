<?php
if(isset($_REQUEST['str']))
    {
    $id_departments = $_REQUEST['str'];
     $id_departments ;
include '../../../../conf.php';

    }  
    else {
       $id_departments= $_REQUEST['id_departments'];
     $id_departments ;

}


?>
<hr>
 <script src="<?php echo $jq;?>jquery-1.11.3.min.js"></script>

<script src="<?php echo $jq;?>validat.js"></script>

<form id="vali"  class="form-horizontal" action="<?php echo $control;?>positions_c.php" method="POST" >
    
<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Position Name </label>

        <div class="col-sm-9">
            <input required type="text" name="name_positions" id="form-field-1"  class="col-xs-10 col-sm-5">
        </div>
</div>								

            <input type="hidden" name="id_departments" value="<?php echo $id_departments?>" />

<div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-success " type="submit" name="add" value="add" onclick='return confirm(<?php echo $confirm_add;?>)'>
                        <i class="ace-icon fa fa-floppy-o bigger-120"></i>
                        Save
                </button>

                &nbsp; &nbsp; &nbsp;
                <a class="btn btn-primary" href="?sec=hr&mod=positions&action=positions">
                <i class="ace-icon fa fa-share "></i>
                        <!--class="ace-icon fa fa-share bigger-200"-->
												Back to List </a>
        </div>
</div>

									
								</form>
