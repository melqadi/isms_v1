<?php
if(isset($_REQUEST['str']))
    {
    $id_categorie = $_REQUEST['str'];
     $id_categorie ;
include '../../../../conf.php';

    }  
    else {
       $id_categorie= $_REQUEST['id_categories'];
     $id_categorie ;

}
?>
<hr>
 <script src="<?php echo $jq;?>jquery-1.11.3.min.js"></script>

<script src="<?php echo $jq;?>validat.js"></script>

<form id="validate" class="form-horizontal" action="<?php echo $control;?>departments_c.php" method="POST" >
<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Department Name </label>

        <div class="col-sm-9">
            <input required type="text" name="name_departments" id="form-field-1"  class="col-xs-10 col-sm-5">
        </div>
</div>								

            <input type="hidden" name="id_categorie" value="<?php echo $id_categorie?>" />

<div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button id="val"  class="btn btn-success " type="submit" name="add" value="add" onclick='return confirm(<?php echo $confirm_add;?>)'>
                        <i class="ace-icon fa fa-floppy-o bigger-120"></i>
                        Save
                </button>

                &nbsp; &nbsp; &nbsp;
                <a class="btn btn-primary" href="?sec=hr&mod=departments&action=departments">
                <i class="ace-icon fa fa-share "></i>
                        <!--class="ace-icon fa fa-share bigger-200"-->
												Back to List </a>
        </div>
</div>

									
								</form>