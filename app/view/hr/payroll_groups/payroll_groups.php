<?php 
                                                $file_name=$_GET["mod"];
                                                  $file_db=$_GET["action"];
$all=$ok["view_all"];
if($all=="no")
    {
     ?> 
<meta http-equiv="refresh" content="0;url=./index.php?sec=hr&mod=privileges&action=privileges"/>
              <?php $message = 'not approve';

echo "<SCRIPT> 
alert('$message');
</SCRIPT>";
die();
    }

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
Payroll Groups                                                            <small>
												</small>
							</h1>
						</div><!-- /.page-header -->
                                               <?php
                                               $add=$ok["add"];
                                               if($add == "yes"){
                                               ?> 
                                                <a href="?sec=hr&mod=<?php echo $file_name ;?>&action=<?php echo $file_name ;?>_add"> 
                                                    <button class="btn btn-lg btn-success" >Add New Payroll Groups </button>
                                                </a>
                                                <?php
                                               }
                                                ?>
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
include $control.'payroll_groups_c.php';

                                ?>
                                                                                            <thead>
                                                                                                    <!--/*********db*************/-->
<tr>
        <th>ID </th>
        <th> Payroll Groups Name</th>
        <th>action</th>
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
echo $output["id_".$file_name];
?></a>
                </td>
                <td>
<?php
echo $output["name_".$file_name];
?></td>

                
                
                <td>
<div class="hidden-sm hidden-xs action-buttons">
     <?php
 $add_pos=$ok["view_by_id"];

                                               if($add_pos == "yes"){
 
 ?>   

            <a class="blue" href="?sec=hr&mod=<?php echo $file_name ;?>&action=<?php echo $file_name ;?>_viwe&id_<?php echo $file_name ;?>=<?php echo $output["id_".$file_name] ;?>">
                    <i class="ace-icon fa fa-search-plus bigger-130"></i>
            </a>
<?php
}                                        
 $edit=$ok["edit"];

                                               if($edit == "yes"){
                                               ?>

            <a class="green" href="?sec=hr&mod=<?php echo $file_name ;?>&action=<?php echo $file_name ;?>_by_id&id_<?php echo $file_name ;?>=<?php echo $output["id_".$file_name] ;?>">
                    <i class="ace-icon fa fa-pencil bigger-130"></i>
            </a>
<?php
                                               }
                                                $delete=$ok["delete"];

                                               if($delete == "yes"){
?>

    <a class="red" onclick='return confirm(<?php echo $confirm_delete;?>)' href="<?php echo $control;?><?php echo $file_name ;?>_c.php?id_<?php echo $file_name ;?>=<?php echo $output['id_'.$file_name]; ?>&drop=1">
                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
            </a>
<?php
                                               }
?>
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
				