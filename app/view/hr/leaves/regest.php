<!DOCTYPE html>
<?php  
$id_all_rgss=10;

                                                $file_name="Add"." ".$_GET["mod"];
                                                $file_db=$_GET["action"];
                                                $file_x=$_GET["mod"];
                                include $control.'leaves_c.php';
                
        
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
Leaves Setup</a>
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
Leaves						</h1>
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
<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                                                                        <thead>
                                                                                                    <!--/*********db*************/-->
<tr> <th>id_leaves </th>
        <th>id_user</th>
        <th> day </th>
        <th> start </th>
        <th> end </th>
        <th>Actions</th>
</tr>

                                                                                                    <!--/**********db************/-->
												</thead>

<tbody>
    <?php 
  foreach($lea as $keys => $x_values){
    ?>
        <tr>
                <td> 
<a href="#"><?php
echo $x_values["id_leaves"];
?></a>
                </td>
                <td>
<a href="#"><?php
echo $x_values["id_user"];
?></a>
                </td>
                <td>
<?php
echo $x_values["day"];
?></td>
<td>
<?php
echo $x_values["start"];
?></td>
<td>
<?php
echo $x_values["end"];
?></td>




                <td>
<div class="hidden-sm hidden-xs action-buttons">
            
    <a class="green"  href="<?php echo $control;?>leaves_c.php?id_user=<?php echo $x_values["id_my_leaves"]; ?>&approve=1">
                    <i class="ace-icon glyphicon glyphicon-ok"></i>
            </a>

    <a class="red" onclick='return confirm(<?php echo $confirm_delete;?>)' href="<?php echo $control;?>leaves_c.php?id_user=<?php echo $x_values["id_my_leaves"]; ?>&drop=1">
                    <i class="ace-icon glyphicon glyphicon-remove"></i>
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
    
    
    
                &nbsp; &nbsp; &nbsp;
<div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            
                &nbsp; &nbsp; &nbsp;
                <a class="btn btn-primary" href="?sec=hr&mod=<?php echo $file_x;?>&action=<?php echo $file_x;?>">
                         <i class="ace-icon fa fa-share "></i>
                        <!--class="ace-icon fa fa-share bigger-200"-->
												Back to List        </a>
        </div>
</div>

<?php
?>
<!--/*****************************************************************************************************/-->										

                                                                        </div>
								</div>

								
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
				

	</body>
</html>
