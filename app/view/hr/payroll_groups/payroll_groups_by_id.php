<?php 
$id_payroll_groups=$_GET["id_payroll_groups"];
include $control.'payroll_groups_c.php';


                                                $file_name="Update"." ".$_GET["mod"];
                                                $file_db=$_GET["action"];
                                                $file_x=$_GET["mod"];
//                                    echo  $hi= $ok["deleterelion"];
                                                                        
$text=str_replace('_', ' ', $file_name);
$text=ucwords($text);
                                      $edit=$ok["edit"];
    if($edit=="no")
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
<?php echo $text;?>
                                                            <small>
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
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <?php echo "Payroll Groups Name";?> </label>

        <div class="col-sm-9">
            
            <input type="text" value="<?php echo $res[0]["name_".$file_x];?>" id="form-field-1"  name="name_<?php echo $file_x;  ?>" id="form-field-1" class="col-xs-10 col-sm-5">
        </div>
</div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <?php echo "Payroll Groups Code";?> </label>

        <div class="col-sm-9">
            
            <input type="text" value="<?php echo $res[0]["code_".$file_x];?>" id="form-field-1"  name="code_<?php echo $file_x;  ?>" id="form-field-1" class="col-xs-10 col-sm-5">
        </div>
</div>
    <?php  
foreach ($m as $x => $x_value){
            
//        print_r($out);
        
     ?> 
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <?php echo "Payroll Category";?> </label>

        <div class="col-sm-9">
  
            <input type="text" value="<?php 
           
          echo  $m[$x]["name"];

            ?>" id="form-field-1"  name="name[]" id="form-field-1" class="col-xs-10 col-sm-5">
<?php
 $deleterelion=$ok["deleterelion"];

                                               if($deleterelion == "yes"){
 
 ?>   
 
            <span class="input-group-btn">
   
    <a onclick='return confirm(<?php echo $confirm_delete;?>)' href="<?php echo $control;?>payroll_groups_c.php?id_payroll_groups=<?php echo $id_payroll_groups; ?>&dropp=2&id_payroll_value=<?php echo $m[$x]["id_payroll_value"];?>"  class="btn btn-danger btn-sm">
        <span class="ace-icon fa fa-trash-o bigger-120 "></span>
        delete
</a>  
</span>
            
 <?php
                                               }
 ?> 
        </div>
</div>
    <?php     
        }
?>  
    <?php
//    
   $id= $res[0]["id_payroll_groups"];
   
    ?>
    
    <input type="hidden"  name="id_<?php echo $file_x;  ?>" value="<?php echo $id_payroll_groups;?>">


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
                                &nbsp; &nbsp; &nbsp;
 <?php
 $addrelion=$ok["addrelion"];

                                               if($addrelion == "yes"){
 
 ?>   

    <a class="btn btn-primary" href="?sec=hr&mod=<?php echo $file_x;?>&action=add_cat&id_payroll_groups=<?php echo $id_payroll_groups; ?>">
                         <i class="ace-icon fa fa-pencil-square-o  "></i>
                        <!--class="ace-icon fa fa-share bigger-200"-->
												Add New Category
                </a>
                                <?php
                                               }
                                ?>
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
				
