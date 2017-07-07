<?php
  echo $id_user = $_GET['id_user'];
   echo $month = $_GET['month'];
   echo $year = $_GET['year'];
   echo $deu = $_GET['deu'];
   echo $dlay = $_GET['dlay'];
   echo $leavs = $_GET['leavs'];
   echo $over = $_GET['over'];
   
   echo $e_f = $_POST['e_f'];
   echo $e_v = $_POST['e_v'];
   echo $d_f = $_POST['d_f'];
   echo $d_v = $_POST['d_v'];
 if($e_f==""){$e_f=0;}if($e_v==""){$e_v=0;}if($d_f==""){$d_f=0;}if($d_v==""){$d_v=0;}
   $start_munth = $year."-".$month."-01"; 
   $end_munth =date("Y-m-t", strtotime($start_munth));
    $slip = $pay->slip($id_user,$start_munth,$end_munth,$deu,$e_v,$e_f,$d_v,$d_f);
    $mys = $payslips->mysql($slip,$month,$year,$dlay,$leavs,$over);
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
<form id="validate"  class="form-horizontal" action="#" method="POST">

<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Exp Earning Formula </label>
<div class="col-sm-9">
    <input type="text" name="e_f" value="<?php echo $e_f;?>" class="col-xs-10 col-sm-5" id="form-input-readonly" >
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Exp Earning Value </label>
<div class="col-sm-9">
    <input type="text" name="e_v" value="<?php echo $e_v;?>" class="col-xs-10 col-sm-5" id="form-input-readonly" >
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Exp Deduction Formula </label>
<div class="col-sm-9">
    <input type="text" name="d_f" value="<?php echo $d_f;?>" class="col-xs-10 col-sm-5" id="form-input-readonly" >
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Exp Deduction Value </label>
<div class="col-sm-9">
    <input type="text" name="d_v" value="<?php echo $d_v;?>" class="col-xs-10 col-sm-5" id="form-input-readonly" >
</div>
</div> 
    
    
    
    
<div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            
            <button class="btn btn-success " name="update" value="update" onclick='return confirm(<?php echo $confirm_add;?>)' type="submit">
                        <i class="ace-icon fa fa-floppy-o bigger-120"></i>
                        Update
                </button>

                
        </div>
</div>

									
								</form>


<?php
foreach ($mys as $key=>$val){
    ?>
  
<div class="form-horizontal">
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> <?php echo $val["name_filde"] ;?> </label>
<div class="col-sm-9">
<input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php echo $val["resalt_filde"] ?>" disabled="disabled">
</div>
</div> 

</div>
  
    <?php
}
$frist_aprov_all[]=$mys;

?>
<form action="<?php echo $control?>payslip_c_mysq.php" method="post"> 
                    <input type="hidden" name="data" value="<?php echo htmlentities(serialize($frist_aprov_all));?>">
                    <input type="hidden" value="aproveall" name="aproveall">
                    <input type="submit" value="First Appeove" >
                </form>  
  
<!--/*****************************************************************************************************/-->										

                                                                        </div>
								</div>

								
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
				








	<?php
//         echo '<pre>';
//    print_r($mys);
//    echo '<pre>';
        ?>		
  

