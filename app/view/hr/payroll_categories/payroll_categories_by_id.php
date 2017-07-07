<?php 
$id_payroll_value=$_GET["id_payroll_value"];
include $control.'payroll_categoies_c.php';


                                                $file_name="Update"." ".$_GET["mod"];
                                                $file_db=$_GET["action"];
                                                $file_x=$_GET["mod"];
                                                 $ok=$ok["edit"];
                                                                                  
$text=str_replace('_', ' ', $file_name);
$text=ucwords($text);
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



<form id="validate"  class="form-horizontal" action="<?php echo $control;?>payroll_categoies_c.php" method="POST" >
<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Category Name  </label>

        <div class="col-sm-9">
            <input type="text" value="<?php echo $res[0]["name"];?>" name="name" id="form-field-1"  class="col-xs-10 col-sm-5">
        </div>
</div>
        <input type="hidden"  name="id_payroll_value" value="<?php echo $id_payroll_value;?>">

<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Category Code </label>

        <div class="col-sm-9">
            <input type="text" value="<?php echo $res[0]["code"];?>" name="code" id="form-field-1"  class="col-xs-10 col-sm-5">
        </div>
</div>
    <div class="form-group">
        <label  class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Category Type</label>
  <?php
        $gory=$res[0]["gory"];

  if($gory=="earning"){
    ?><div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="gory" value="earning" type="radio" class="ace" checked>
                <span class="lbl"> Earning</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="gory" value="deduction" type="radio" class="ace">
                <span class="lbl">Deduction </span>
        </label>
</div>  
      <?php
  }else 
      {
    ?>
        <div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="gory" value="earning" type="radio" class="ace" >
                <span class="lbl"> Earning</span>
        </label>
</div>
        
        
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="gory" value="deduction" type="radio" class="ace" checked>
                <span class="lbl">Deduction </span>
        </label>
</div>
        
        <?php
}
  ?>


    </div>  
<div class="form-group">
        <label  class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Value Type</label>
<?php
        $type=$res[0]["type"];

  if($type=="Formula"){
    ?>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="type" value="Formula" type="radio" class="ace" checked>
                <span class="lbl"> Formula</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="type" value="Value" type="radio" class="ace">
                <span class="lbl">Value </span>
        </label>
</div>


    <?php
  }else 
      {
    ?>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="type" value="Formula" type="radio" class="ace" >
                <span class="lbl"> Formula</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="type" value="Value" type="radio" class="ace" checked>
                <span class="lbl">Value </span>
        </label>
</div>
        
        <?php
}
  ?>


    
    
    </div>   

<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Value </label>

        <div class="col-sm-9">
            <input type="text" value="<?php echo $res[0]["value"];?>" name="value" id="form-field-1"  class="col-xs-10 col-sm-5">
        </div>
</div>

<div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-success " type="submit" name="update" value="update" onclick='return confirm(<?php echo $confirm_add;?>)'>
                        <i class="ace-icon fa fa-floppy-o bigger-120"></i>
                        Save
                </button>

                &nbsp; &nbsp; &nbsp;
                <a class="btn btn-primary" href="?sec=hr&mod=<?php echo $file_x;?>&action=<?php echo $file_x;?>">
                         <i class="ace-icon fa fa-share "></i>
                        <!--class="ace-icon fa fa-share bigger-200"-->
												Back to List
                </a>
        </div>
</div>

									
								</form><!--/*****************************************************************************************************/-->										

                                                                        </div>
								</div>

								
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
				
