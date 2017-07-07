<?php 
                                                $file_name=$_GET["mod"];
                                                  $file_db=$_GET["action"];

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
							<li class="active"><?php echo $file_name;?></li>
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
Employment Status 
							</h1>
						</div><!-- /.page-header -->
                                               <?php

                                               $id_user=$_GET["id_user"];
 $id_application=$_GET["id_application"];
if($id_user==""){
   $id_user =$id_application;
   $ws="id_application";
   $aa="application";
}else
    {
       $id_user =$id_user;
$aa="account";
       $ws="id_user";

    }
 ?>
<form   class="control-group form-horizontal" action="<?php echo $control;?>edu_c.php" method="POST" >
    <input type="hidden" name="id_user" value="<?php echo $id_user;?>">
    <input type="hidden" name="id_application" value="<?php echo $id_application;?>">
<!--/************************************.**************************************************************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Educational Type</label>

<div class="col-sm-9">
    <select style="  width: 42%;" class="form-control" id="form-field-select-1" name="type" onchange="showCustomer(this.value)">
      <option value=""></option>       	

      <option value="High School">High School</option>       	
  <option value="College">College</option>       	
  <option value="Post Graduate">Post Graduate</option>       	
  <option value="Other Studies">Other Studies</option>       	
          
</select>
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Instituion Name   </label>

<div class="col-sm-9">
    <input type="text" name="name" id="form-field-1"  class="col-xs-10 col-sm-5">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Year Entered   </label>

<div class="col-sm-9">
    
    <select style="  width: 42%;" class="form-control" id="form-field-select-1" name="entered" onchange="showCustomer(this.value)">
      <option value=""></option>       	
<?php
$yaermin="1960";
for ($x = 0; $x <= 60; $x++) {
    $yaermin=$yaermin+1;
    ?>
      <option value="<?php echo $yaermin;?> "><?php echo $yaermin ;?> </option>       	
<?php
}
?>          
</select>
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Year Completed   </label>

<div class="col-sm-9">
    
    <select style="  width: 42%;" class="form-control" id="form-field-select-1" name="completed" onchange="showCustomer(this.value)">
      <option value=""></option>       	
<?php
$yaermin="1960";
for ($x = 0; $x <= 60; $x++) {
    $yaermin=$yaermin+1;
    ?>
      <option value="<?php echo $yaermin;?> "><?php echo $yaermin ;?> </option>       	
<?php
}
?>          
</select>
</div>
</div>
 <div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Degree   </label>

<div class="col-sm-9">
    <input type="text" name="degree" id="form-field-1"  class="col-xs-10 col-sm-5">
</div>
</div>
    <input name="ed" type="hidden"value="<?php echo $id_user;?>"> 
    
    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            
                &nbsp; &nbsp; &nbsp;
                <a class="btn btn-primary" href="?sec=hr&mod=<?php echo $aa;?>&action=<?php echo $aa;?>_viwe&<?php echo $ws."=".$id_user;?>">
                         <i class="ace-icon fa fa-share "></i>
                        <!--class="ace-icon fa fa-share bigger-200"-->
												Back to List
                </a>&nbsp; &nbsp; &nbsp;
<!--                <a id="next" class=" next1 btn btn-primary" >
                         <i class="ace-icon fa fa-share "></i>
                        class="ace-icon fa fa-share bigger-200"
next                </a>-->
<button class="btn btn-success " type="submit" name="ed" value="ed" onclick='return confirm(<?php echo $confirm_add;?>)'>
                        <i class="ace-icon fa fa-floppy-o bigger-120"></i>
                        Save
                </button>


        </div>
</div>

</form>
 
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
										
										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
				<?php
include $control.'edu_c.php';

                                ?>
                                                                                            <thead>
                                                                                                    <!--/*********db*************/-->
<tr>
     
    <th>Id </th>
        <th>Educational Name  </th>
        <th>Educational Type</th>
        <th>Educational Entered</th>
        <th>Educational Completed</th>
        <th>Educational Degree</th>
        <th>Actions</th>
        
</tr>

                                                                                                    <!--/**********db************/-->
												</thead>

<tbody>
    <?php 
foreach($res as $output){
    ?>
        <tr>
                <td>
<a href="#"><?php
echo $output["id_educational"];
?></a>
                </td>
                <td>
<?php
echo $output["name_educational"];
?></td>
<td>
<?php
echo $output["type_educational"];
?></td>

<td>
<?php
echo $output["entered_educational"];
?></td>
<td>
<?php
echo $output["completed_educational"];
?></td>

<td>
<?php
echo $output["degree_educational"];
?></td>



                <td>
<div class="hidden-sm hidden-xs action-buttons">
            
    <a class="red" onclick='return confirm(<?php echo $confirm_delete;?>)' href="<?php echo $control;?>edu_c.php?id_educational=<?php echo $output['id_educational']; ?>&drop=1">
                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
            </a>
    </div>

                        <div class="hidden-md hidden-lg">
                                <div class="inline pos-rel">
                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                        </button>

                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                <li>
                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                <span class="blue">
                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                </span>
                                                        </a>
                                                </li>

                                                <li>
                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                <span class="green">
                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                </span>
                                                        </a>
                                                </li>

                                                <li>
                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                <span class="red">
                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                </span>
                                                        </a>
                                                </li>
                                        </ul>
                                </div>
                        </div>

                                                                                                                        </td>
        </tr>

<?php
          }
?>



</tbody>
											</table>
										</div>
									</div>
								</div>

								
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
				