<?php
if(isset($_REQUEST['id_cat']))
    {
    $id_categorie = $_REQUEST['id_cat'];
     $id_categorie ;

    }
 
    include_once '../../../controller/hr/dep_c.php';              
?>
<!---->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Select Department * </label>

<div class="col-sm-9">

    <select required style="  width: 42%;" class="form-control" id="form-field-select-1"   name="id_departments" onchange="showdep(this.value)" >
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