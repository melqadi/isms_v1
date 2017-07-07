<?php
if(isset($_REQUEST['str']))
    {
    $id_categorie = $_REQUEST['str'];
//    echo $id_categorie;
         $totals = strtolower(end(explode(' ', $id_categorie)));
         $id_val = strtolower(current(explode(' ', $id_categorie)));
         echo $id_val;
         echo  "<hr>";
         echo $totals;
    }  
?>
<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name payroll </label>

        <div class="col-sm-9">
            <input type="text" name="name" id="form-field-1"  class="col-xs-10 col-sm-5">
        </div>
</div>								
<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name <?php echo "h";  ?> </label>

        <div class="col-sm-9">
            <input type="text" name="code" id="form-field-1"  class="col-xs-10 col-sm-5">
        </div>
</div>
    <div class="form-group">
        <label  class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">category_type</label>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="gory" value="earning" type="radio" class="ace">
                <span class="lbl"> earning</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="gory" value="deduction" type="radio" class="ace">
                <span class="lbl">deduction </span>
        </label>
</div>

    </div> 
    <!--/***************-->
 
<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name <?php echo "h";  ?> </label>

        <div class="col-sm-9">
            <input type="text" name="value" id="form-field-1"  class="col-xs-10 col-sm-5">
        </div>
</div>

<div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-success " type="submit" name="add_value" value="add_value" onclick='return confirm(<?php echo $confirm_add;?>)'>
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
