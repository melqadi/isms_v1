
<?php
if(isset($_REQUEST['str']))
    {
    $id_res = $_REQUEST['str'];
    echo $id_res ;

    }  
    else {
       $id_res= $_REQUEST['id_categories'];
    echo $id_res ;

}
if($id_res=="1")
    {
/***************************************/
   ?> 
<form class="form-horizontal" action="../../controller/export_c.php" method="POST" >
<?php
    $id_department=$id_res;
    include '../../controller/export_c.php';

    ?>
<label for="form-field-select-1">Select Department</label>

<select class="form-control" id="form-field-select-1" name="dep[]"multiple="multiple" size="5"  >
      <option value=""></option>       	
     
      
      <?php
      foreach($res as $outputt)
    {
          ?>
<option value="<?php echo $outputt["id_departments"];?>"><?php echo $outputt["name_departments"];?></option>       	
     <?php
}
     ?>
      
      
      
</select> 

<div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
<button class="btn btn-success " type="submit" name="" value="" onclick='return confirm(<?php echo $confirm_add;?>)'>
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

    <?php
/**********************************/
    }
 elseif ($id_res==2) {
/***************************************/
   ?> 
<form class="form-horizontal" action="<?php echo $control;?>export_c.php" method="POST" >
<?php
    $id_position=$id_res;
    include '../../controller/export_c.php';

    ?>
<label for="form-field-select-1">Select Department</label>

<select class="form-control" id="form-field-select-1" name="pos[]"multiple="multiple" size="5"  >
      <option value=""></option>       	
     
      
      <?php
      foreach($res as $outputt)
    {
          ?>
<option value="<?php echo $outputt["id_positions"];?>"><?php echo $outputt["name_positions"];?></option>       	
     <?php
}
     ?>
      
      
      
</select> 

<div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-success " type="submit" name="dep" value="dep" onclick='return confirm(<?php echo $confirm_add;?>)'>
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

    <?php
/**********************************/

     
     
 }
 elseif ($id_res==3) {
/***************************************/
   ?> 
<form class="form-horizontal" action="<?php echo $control;?>export_c.php" method="POST" >
<?php
    $id_status=$id_res;
    include '../../controller/export_c.php';

    ?>
<label for="form-field-select-1">Select Department</label>

<select class="form-control" id="form-field-select-1" name="stat[]"multiple="multiple" size="5"  >
      <option value=""></option>       	
     
      
      <?php
      foreach($res as $outputt)
    {
          ?>
<option value="<?php echo $outputt["id_rules"];?>"><?php echo $outputt["name_rules"];?></option>       	
     <?php
}
     ?>
      
      
      
</select> 

<div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-success " type="submit" name="dep" value="dep" onclick='return confirm(<?php echo $confirm_add;?>)'>
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

    <?php
/**********************************/

     
 }
?>

