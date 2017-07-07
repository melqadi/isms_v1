

<?php 
                                                $file_name=$_GET["mod"];
                                                  $file_db=$_GET["action"];
                                                  $id_user=$_GET["id_user"];

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
    Create Employee Profile
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
    Create Employee Profile
  
							</h1>
						</div><!-- /.page-header -->
                                                
                                                    <!--/************************/-->
						
                                
                                
                                
                                
             <div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div>
									<ul class="ace-thumbnails clearfix">
<?php
include $control.'upload_file_c.php';
foreach($res as $output){

?>

<li>
<div>
    <img width="150" height="150" alt="150x150" src="<?php echo $upload_file_conf;?><?php echo $id_user;?>/<?php echo $output["name"]; ?>">
<div class="text">
        <div class="inner">
                <span>    Upload Photo</span>

                <br>
                <a href="<?php echo $upload_file_conf;?><?php echo $id_user;?>/<?php echo $output["name"]; ?>" data-rel="colorbox" class="cboxElement">
                        <i class="ace-icon fa fa-search-plus"></i>
                </a>

                <a href="<?php echo $control;?>upload_file_c.php?id_user=<?php echo $id_user; ?>&pb=pb&name=<?php echo $output["name"]; ?>">
                        <i class="ace-icon fa fa-user"></i>
                </a>

        </div>
</div>
</div>
</li>
<?php } ?>
									</ul>
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div>
                   
                                
                                
                                
                                
                                
                                
                                </div><!-- /.page-content -->
				</div>
				