<?php  
                                                $file_name="Update"." ".$_GET["mod"];
                                                $file_db=$_GET["action"];
                                                $file_x=$_GET["mod"];
                                                 $ok=$ok["addrelion"];
                                                                                  
$text=str_replace('_', ' ', $file_name);
$text=ucwords($text);
if($ok=="no")
    {
     ?> 
<meta http-equiv="refresh" content="0;url=./index.php?sec=hr&mod=<?php echo $file_x ?>&action=<?php echo $file_x ?>"/>
              <?php $message = 'not approve';

echo "<SCRIPT> 
alert('$message');
</SCRIPT>";
die();
    }
                                             echo   $group=$_GET["id_payroll_groups"];

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
							<li class="active"> <?php echo $text;?></li>
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
Add New Payroll Category                                                            <small>
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


<form id="validate"  class="form-horizontal" action="<?php echo $control;?><?php echo $file_x;?>_c.php" method="POST" >
			

    <label for="form-field-select-2">Multiple (Ctrl+)</label>
    <input type="hidden" name="id_group" value="<?php echo $group;?>">
    <select name="categoru[]" class="form-control" id="form-field-select-2" multiple="multiple" size="5">
            <?php
include $control.'payroll_categoies_c.php';
foreach($res as $output){

                                ?>
                                
        <option value="<?php echo $output["id_payroll_value"];?>"><?php echo $output["name"];?></option>
<?php

}?>
        
    </select>


<div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-success " type="submit" name="add_cat" value="add_cat" onclick='return confirm(<?php echo $confirm_add;?>)'>
                        <i class="ace-icon fa fa-floppy-o bigger-120"></i>
                        Save
                </button>

                &nbsp; &nbsp; &nbsp;
                <a class="btn btn-primary" href="?sec=hr&mod=payroll_groups&action=payroll_groups_by_id&id_payroll_groups=<?php echo $group;?>">
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
				