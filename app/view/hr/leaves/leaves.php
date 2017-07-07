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
    Create Employee Leaves
</a>
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
    Create Employee Leaves
  
							</h1>
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
										
										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
				<?php
include $control.'account_c.php';

                                ?>
                                                                                            <thead>
                                                                                                    <!--/*********db*************/-->
<tr>
     
    <th>ID </th>
        <th> Name </th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
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
echo $output["code_user"];
?></a>
                </td>
                <td>
<?php
echo $output["f_name_user"]." ".$output["m_name_user"]." ".$output["l_name_user"];
?></td>

<td>
<?php
echo $output["email_user"];
?></td>

<td>
<?php
echo $output["mobile_user"]."/".$output["fax_user"]."/".$output["landline_user"];
?></td>

<td>
<?php
echo $output["address_user"];
?></td>



                <td>
<div class="hidden-sm hidden-xs action-buttons">
            <a class="blue" href="?sec=hr&mod=<?php echo $file_name ;?>&action=<?php echo $file_name ;?>_view&id_user=<?php echo $output["id_user"] ;?>">
                    <i class="ace-icon fa fa-search-plus bigger-130"></i>
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
				