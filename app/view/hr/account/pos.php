<?php
if(isset($_REQUEST['iddep']))
    {
//    echo "ahmed";
    $id_dep = $_REQUEST['iddep'];
     $id_dep ;

    }  
// echo "hi ahmed";
    include_once '../../../controller/hr/dep_c.php';              
?>
<!---->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Select Positions * </label>

<div class="col-sm-9">

<select required style="  width: 42%;" name="id_pos" class="form-control" id="form-field-select-1" class="form-control" id="form-field-select-1"   name="id_posetion"  >
      <option value=""></option>       	

    <?php
//              print_r($cats);
              $h=1;
    foreach($namedeb as $f){
        ?>
  <option value="<?php echo $is[$h] ;?>"><?php echo $namedeb[$h] ;?></option> 
  
<?php
$h=$h+1;
  }

?>
          
</select> 
</div>
</div>