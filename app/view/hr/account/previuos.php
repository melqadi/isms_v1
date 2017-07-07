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
Employment previuos 
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

    }?>
<form   class="control-group form-horizontal" action="<?php echo $control;?>previuos_c.php" method="POST" >
    <input type="hidden" name="id_user" value="<?php echo $id_user;?>">
        <input type="hidden" name="id_application" value="<?php echo $id_application;?>">

<!--/************************************.**************************************************************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">  Company / School Name </label>

<div class="col-sm-9">
    <input type="text" name="company_previuos" id="form-field-1"  class="col-xs-10 col-sm-5">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Position   </label>

<div class="col-sm-9">
    <input type="text" name="position_previuos" id="form-field-1"  class="col-xs-10 col-sm-5">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Joining Date  </label>

<div class="col-sm-9">
    
    <select style="  width: 42%;" class="form-control" id="form-field-select-1" name="joining_previuos" onchange="showCustomer(this.value)">
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
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Leaving Date  </label>

<div class="col-sm-9">
    
    <select style="  width: 42%;" class="form-control" id="form-field-select-1" name="leaving_previuos" onchange="showCustomer(this.value)">
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
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Reason of Leaving   </label>

<div class="col-sm-9">
    <input type="text" name="reason_previuos" id="form-field-1"  class="col-xs-10 col-sm-5">
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
include $control.'previuos_c.php';

                                ?>
                                                                                            <thead>
                                                                                                    <!--/*********db*************/-->
<tr>
     
<!--    <th>Id Previuos </th>-->
        <th>Previuos Company  </th>
        <th>Previuos Joining </th>
        <th>Previuos Leaving </th>
        <th>Previuos Position </th>
        <th>Previuos Reason </th>
        <th>actions</th>
        
</tr>

                                                                                                    <!--/**********db************/-->
												</thead>

<tbody>
    <?php 
foreach($res as $output){
    ?>
        <tr>
<!--                <td>
<a href="#"><?php
//echo $output["id_previuos"];
?></a>
                </td>-->
                <td>
<?php
echo $output["company_previuos"];
?></td>
<td>
<?php
echo $output["joining_previuos"];
?></td>

<td>
<?php
echo $output["leaving_previuos"];
?></td>
<td>
<?php
echo $output["position_previuos"];
?></td>

<td>
<?php
echo $output["reason_previuos"];
?></td>





                <td>
<div class="hidden-sm hidden-xs action-buttons">
            
    <a class="red" onclick='return confirm(<?php echo $confirm_delete;?>)' href="<?php echo $control;?>previuos_c.php?id_previuos=<?php echo $output['id_previuos']; ?>&drop=1">
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
				