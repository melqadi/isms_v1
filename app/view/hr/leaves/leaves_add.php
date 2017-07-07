<!DOCTYPE html>
<?php  
$id_user=$_GET["id_user"];
if($id_user=="")
    {
      $id_user=$id_account;
      }
      $id_leaves=$_GET["id_leaves"];
   
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
Leaves                                                          			</h1>
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
<tr>
     
    <th>Id User </th>
        <th>start</th>
        <th> end </th>
            <th>Request</th>

</tr>

                                                                                                    <!--/**********db************/-->
												</thead>

<tbody>
   <?php
   $i=0;
foreach ($lea as $vall){
  $i=$i+$vall["day"]; 
    ?>
        <tr>
         
            <td>
<a href="#"><?php
echo $vall["day"] ;
?></a>
                </td>
                <td>
                    <a href="#">
                        <?php
echo $vall["start"] ;
?>
                        
                    </a>
                </td>
                <td>
    <a href="#">
                        <?php
echo $vall["end"] ;
?>
                        
                    </a>
                
                </td>
 <td>
    <a href="#">
                        <?php
echo $vall["regest"] ;
?>
                        
                    </a>
                
                </td>




                   </tr>

<?php
}
?>


</tbody>
											</table>
										</div>
    
    
    
                
<hr>
&nbsp; &nbsp; &nbsp
    <h3 class="header blue lighter smaller">
<i class="ace-icon fa fa-list-alt smaller-90"></i>
    Add Request

</h3>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Leaves Name </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $resah[0]["id_leaves"];
?>" disabled="disabled">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Total Days </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $leaves[0]["days"];
?>" disabled="disabled">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Available Day </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $leaves[0]["days"]-$i." days";
?>" disabled="disabled">
</div>
</div>
<?php
$rrrt=$leaves[0];
//echo gettype($rrrt);
$rules="0";
foreach ($rrrt as $key => $vall)
    {
    $rules=$rules.";".$vall;
    
    }
?>
                
<form id="validate"  action="<?php echo $control;?>leaves_c.php" method="Post">
    <input name="arrname" type="hidden" value="<?php echo $rules   ;  ?>" >
    <input name="last" type="hidden" value="<?php echo $i;  ?>" >
    <input name="id_user" type="hidden" value="<?php echo $id_user;?>" >
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Start Date </label>
<div class="col-sm-9">
    <input name="start" type="date" class="col-xs-10 col-sm-5" id="form-input-readonly"  >
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> End Date </label>
<div class="col-sm-9">
    <input name="end" type="date" class="col-xs-10 col-sm-5" id="form-input-readonly"  >
</div>
</div>
    <div class="form-group">
        <div style="margin-left:25%;text-align: center;" class="col-sm-9">
            <input value="add" name="add" type="submit" class="col-xs-10 col-sm-5" id="form-input-readonly"  >
</div>
</div>
</form>
                &nbsp; &nbsp; &nbsp;
<hr>
<div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            
                <a class="btn btn-primary" href="?sec=hr&mod=<?php echo $file_x;?>&action=leaves_view">
                         <i class="ace-icon fa fa-share "></i>
                        <!--class="ace-icon fa fa-share bigger-200"-->
												Back to List        </a>
        </div>
</div>

<!--/*****************************************************************************************************/-->										

                                                                        </div>
								</div>

								
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
				

	</body>
</html>
