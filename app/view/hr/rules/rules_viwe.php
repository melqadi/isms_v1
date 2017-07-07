<?php  
$id_rules=$_GET["id_rules"];

                                                $file_name="View"." ".$_GET["mod"];
                                                $file_db=$_GET["action"];
                                                $file_x=$_GET["mod"];
                                                 $ok=$ok["view_by_id"];
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
Status                                                            <small>
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
<?php
include $control.'rules_c.php';
    
foreach($res as $x => $x_value){
        
    
     

?>

<!--<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Id </label>
<div class="col-sm-9">
    <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
//echo $x_value["id_rules"];
?>" disabled="disabled">
</div>
</div>-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Status Name  </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["name_rules"];
?>" disabled="disabled">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> FullDay Working Hours </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["full_day_rules"];
?>" disabled="disabled">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> HalfDay Working Hours </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $x_value["half_day_rules"];
?>" disabled="disabled">
</div>
</div>

    <?php }
        $count=  count($res);
$full=[];
    $hulf=[];
    $end=[];

    foreach ($res[0] as $x => $x_value)
{
      if($x_value=="weekend")
        {
            $end[]=$x;

        }if($x_value=="fullday")
        {
            $full[]=$x;

        }if($x_value=="hulffay")
        {
            $hulf[]=$x;

        }
    
}  
    $countf=  count($full);
    $counth=  count($hulf);
    $counte=  count($end);
   $max= max($countf,$counth,$counte);
?>

                &nbsp; &nbsp; &nbsp;
<div class="form-group">
    <table class="table table-striped table-bordered">
            <thead>
            <tr>
    <th style="text-align: center;" >Full Day</th>
    <th style="text-align: center;" >Hulf Day</th>
    <th style="text-align: center;" >WeekEnd</th>
  </tr>
     
            
            </thead>
            <tbody>
      <?php
      for($xix=0; $xix<$max;$xix++)
{

      ?>     
  <tr>
    <td style="text-align: center;" align="right"><?php
    if(isset($full[$xix])){
       $rty= substr($full[$xix],0,-4) ;
        echo $rty; }  else {
    
}
    ?></td>
    <td style="text-align: center;" align="right"><?php if(isset($hulf[$xix])){
               $rty= substr($hulf[$xix],0,-4) ;
        echo $rty;}  else {
    
}?></td>
        <td style="text-align: center;" align="right"><?php if(isset($end[$xix])){
            $rty= substr($end[$xix],0,-4) ;
        echo $rty;}  else {
    
}?></td>

  </tr>  
      <?php 
}
      ?>
            </tbody>

    <footer>
        <tr>
      <td style="text-align: center;" ><?php
      $rty=$countf*$res[0]["full_day_rules"];
      echo "total hour in full day = ".$rty;
      ?></td>
      <td style="text-align: center;" ><?php
      $rtyy=$counth*$res[0]["half_day_rules"];
      echo "total hour in hulf day = ".$rtyy;
      ?></td>
      <td style="text-align: center;" ><?php
      $rtryy=$rtyy+$rty;
      echo "total hour in a week = ".$rtryy;
      ?></td>
    </tr>
    </footer>
            
            
    </table>
    </div>
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
