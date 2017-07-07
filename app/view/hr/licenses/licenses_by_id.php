<?php 
$id_licenses=$_GET["id_licenses"];
include $control.'licenses_c.php';


                                                $file_name="Update"." ".$_GET["mod"];
                                                $file_db=$_GET["action"];
                                                $file_x=$_GET["mod"];
                                                 $ok=$ok["edit"];
    if($ok=="no")
        {
?>
<meta http-equiv="refresh" content="0;url=./index.php?sec=hr&mod=<?php echo $file_x;?>&action=<?php echo $file_x;?>"/>
       
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
Update Licenses                                                            <small>
											</small>
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
<!--/*****************************************************************************************************/-->										


<form id="validate"  class="form-horizontal" action="<?php echo $control;?><?php echo $file_x;?>_c.php" method="POST">
<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Update Licenses </label>

        <div class="col-sm-9">
            
            <input type="text" value="<?php echo $res[0]["name_".$file_x];?>" id="form-field-1"  name="name_<?php echo $file_x;  ?>" id="form-field-1" class="col-xs-10 col-sm-5">
        </div>
</div>								
    <input type="hidden"  name="id_<?php echo $file_x;  ?>" value="<?php echo $id_licenses;?>">


<div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-success " name="update" value="update" onclick='return confirm(<?php echo $confirm_add;?>)' type="submit">
                        <i class="ace-icon fa fa-floppy-o bigger-120"></i>
                        Update
                </button>

                &nbsp; &nbsp; &nbsp;
                <a class="btn btn-primary" href="?sec=hr&mod=<?php echo $file_x;?>&action=<?php echo $file_x;?>">
                         <i class="ace-icon fa fa-share "></i>
                        <!--class="ace-icon fa fa-share bigger-200"-->
												Back to List
                </a>
        </div>
</div>

									
								</form>
<!--/*****************************************************************************************************/-->										

                                                                        </div>
								</div>

								
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
				
