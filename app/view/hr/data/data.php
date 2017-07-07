<?php  
                                                $file_name="Add"." ".$_GET["mod"];
                                                $file_db=$_GET["action"];
                                                $file_x=$_GET["mod"];


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
User Accounts</a>
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
Import / Export Data                                                            
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
<!--<div class="col-sm-6" style="  width: 100%;
">
<div class="tabbable">
<ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
        <li class="active">
                <a data-toggle="tab" href="#profile4" aria-expanded="false">Formula</a>
        </li>

        <li class="">
                <a data-toggle="tab" href="#home4" aria-expanded="true">value</a>
        </li>

        
</ul>

<div class="tab-content">-->
    <!--/*************************************valu***********-->
        <div id="home4" class="tab-pane">
        <!--/***********************************/-->
<!--/***********************************/-->
<div class="col-sm-6" style="width: 100%">
    <label>
                <span class="lbl"> 

</span>
        </label>
<div class="tabbable">
    
        <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
                

                <li>
                        <a data-toggle="tab" href="#profile4">Import</a>
                </li>

                <li class="active">
                        <a data-toggle="tab" href="#dropdown14">Export</a>
                </li>
        </ul>

        <div class="tab-content">

                <div id="profile4" class="tab-pane">
                    <form enctype='multipart/form-data' class="form-horizontal" action="<?php echo $control;?>import_c.php" method="POST" >

                        <a href="<?php echo $view;;?>data/blank.csv" class="btn btn-primary">Download File Blank.csv</a>
                <div align="center">  
                     <p>Upload CSV: <input type='file' name='file' /></p>  
                </div>  
    
                &nbsp; &nbsp; &nbsp;

<!--/*****************************************/-->

<div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-success " type="submit" name="submit" value="Import" onclick='return confirm(<?php echo $confirm_add;?>)'>
                        <i class="ace-icon fa fa-floppy-o bigger-120"></i>
                        Import
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

                </div>

                <div id="dropdown14" class="tab-pane in active">
                    
                    <?php
                    include $control.'export_c.php';

                    ?>
                  <?php
                        $dl=$_GET["dl"];
                        if($dl==1)
                            {
                            ?>
                        
                        <a href="<?php echo $upload_export_conf;?>departments.csv" class="btn btn-primary">departments.csv</a>
                                <?php
                            }elseif($dl==2)
                            {
                            ?>
                        
                        <a href="<?php echo $upload_export_conf;?>positions.csv" class="btn btn-primary">positions.csv</a>
                                <?php
                            }elseif($dl==3)
                            {
                            ?>
                        
                        <a href="<?php echo $upload_export_conf;?>rules.csv" class="btn btn-primary">rules.csv</a>
                                <?php
                            }

                            ?>
<script src="<?php echo $jq;?>jquery-1.11.3.min.js"></script>

<script src="<?php echo $jq;?>style.js"></script>
<hr>
                &nbsp; &nbsp; &nbsp;
<div class="control-group form-horizontal">
        <div class="form-group">
<label  class="control-label bolder blue" style="float: left;margin-left: 10%;
width: 10%;
text-align: center;
font-size: 16px;
font-weight: lighter;
color: #2679b5;">Select By</label>

<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;font-weight: lighter;">
<label>
<input id="rs" name="type" value="full" type="radio" class="ace">
<span class="lbl"> Positions</span>
</label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;font-weight: lighter;">
<label>
<input id="rss" name="type" value="hulf" type="radio" class="ace">
<span class="lbl">Status </span>
</label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;font-weight: lighter;">
<label>
<input id="rsss" name="type" value="permission"type="radio" class="ace" >
<span class="lbl"> Department</span>
</label>
</div>

</div>
 </div>               

                &nbsp; &nbsp; &nbsp;
<hr>

<div id="s" style="display: none">
    <form class="form-horizontal" action="<?php echo $control;?>export_c.php" method="POST" >
                        

<label for="form-field-select-1">Select Positions</label>

<select class="form-control" id="form-field-select-1" name="pos[]"multiple="multiple" size="5"  >
      <option value=""></option>       	
     
      
      <?php
      foreach($resp as $outputtp)
    {
          ?>
<option value="<?php echo $outputtp["id_positions"];?>"><?php echo $outputtp["name_positions"];?></option>       	
     <?php
}
     ?>
      
      
      
</select> 

<div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-success " type="submit" name="pospos" value="pospos" onclick='return confirm(<?php echo $confirm_add;?>)'>
                        <i class="ace-icon fa fa-floppy-o bigger-120"></i>
                        Save & Add New
                </button>

                &nbsp; &nbsp; &nbsp;
                <a class="btn btn-primary" href="?sec=hr&mod=departments&action=departments">
                <i class="ace-icon fa fa-share "></i>
                        <!--class="ace-icon fa fa-share bigger-200"-->
												Back to List </a>
        </div>
</div>

									
								</form>

</div>
<div id="ss" style="display: none">
    <form class="form-horizontal" action="<?php echo $control;?>export_c.php" method="POST" >
<label for="form-field-select-1">Select rules</label>

<select class="form-control" id="form-field-select-1" name="stat[]"multiple="multiple" size="5"  >
      <option value=""></option>       	
     
      
      <?php
      foreach($ress as $outputts)
    {
          ?>
<option value="<?php echo $outputts["id_rules"];?>"><?php echo $outputts["name_rules"];?></option>       	
     <?php
}
     ?>
      
      
      
</select> 

<div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-success " type="submit" name="rulrul" value="rulrul" onclick='return confirm(<?php echo $confirm_add;?>)'>
                        <i class="ace-icon fa fa-floppy-o bigger-120"></i>
                        Save & Add New
                </button>

                &nbsp; &nbsp; &nbsp;
                <a class="btn btn-primary" href="?sec=hr&mod=departments&action=departments">
                <i class="ace-icon fa fa-share "></i>
                        <!--class="ace-icon fa fa-share bigger-200"-->
												Back to List </a>
        </div>
</div>

									
								</form>

    
</div>
<div id="sss" style="display: none">         
    <form class="form-horizontal" action="<?php echo $control;?>export_c.php" method="POST" >
                        
<label for="form-field-select-1">Select Department</label>

<select class="form-control" id="form-field-select-1" name="dep[]"multiple="multiple" size="5"  >
      <option value=""></option>       	
     
      
      <?php
      foreach($resd as $outputtd)
    {
          ?>
<option value="<?php echo $outputtd["id_departments"];?>"><?php echo $outputtd["name_departments"];?></option>       	
     <?php
}
     ?>
      
      
      
</select> 

<div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
<button class="btn btn-success " type="submit" name="depdep" value="depdep" onclick='return confirm(<?php echo $confirm_add;?>)'>
                        <i class="ace-icon fa fa-floppy-o bigger-120"></i>
                        Save & Add New
                </button>
            
                &nbsp; &nbsp; &nbsp;
                <a class="btn btn-primary" href="?sec=hr&mod=departments&action=departments">
                <i class="ace-icon fa fa-share "></i>
                        <!--class="ace-icon fa fa-share bigger-200"-->
												Back to List </a>
        </div>
</div>

									
								</form>
</div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    
                    
    
                </div>
        </div>
</div>
</div>

        
        
        </div>
<!--/**********************************/-->
<!--/*********************************************************************************/-->

<!--        <div id="profile4" class="tab-pane active">					
            <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">

    <li>
            <a data-toggle="tab" href="#profile2">cat</a>
    </li>

    <li>
            <a data-toggle="tab" href="#dropdown1">hour</a>
    </li>
    </ul>

	
            <div class="tab-content">
/**********cat2****************
<div id="profile2" class="tab-pane">

<form class="form-horizontal" action="<?php echo $control;?>payroll_categoies_c.php" method="POST" >
   <div>
<label for="form-field-select-1">Default</label>

<select class="form-control" id="form-field-select-1" onchange="showCustomer(this.value)">
        <option value=""></option>
        <?php
//include $control.'payroll_categoies_c.php';
//foreach($res as $output){
//    $rrr=$output["id_payroll_value"];
//    $ttt=$output["name"];
//    $tota=$output["total"];
    
?>
        <option  value="<?php // echo $rrr." ".$tota ;?>">
            <?php // echo $output["name"];?></option>
        <?php
//}
        ?>
</select>
</div>
     <script>
   
function showCustomer(str) {
  var xhttp;    
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  if (str == "") {
    document.getElementById("txthint").innerHTML = "";
    return ;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txthint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "http://localhost/hr_sms/app/viwe/payroll_categories/txthint.php?str="+str, true);
  xhttp.send();
}
</script>

    
    /***************
    <hr>
    <div id="txthint">
        
    </div>

									
								</form>
      
</div>

<div id="dropdown1" class="tab-pane">
/**************hour**************/
<form class="form-horizontal" action="<?php echo $control;?>payroll_categoies_c.php" method="POST" >
<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name <?php // echo $file_x;  ?> </label>

        <div class="col-sm-9">
            <input type="text" name="name" id="form-field-1" placeholder="name" class="col-xs-10 col-sm-5">
        </div>
</div>								
<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name <?php // echo $file_x;  ?> </label>

        <div class="col-sm-9">
            <input type="text" name="code" id="form-field-1" placeholder="name_<?php // echo $file_x;  ?>_code" class="col-xs-10 col-sm-5">
        </div>
</div>
    <div class="form-group">
        <label  class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">category_type</label>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="gory" value="earning" type="radio" class="ace">
                <span class="lbl"> earning</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="gory" value="deduction" type="radio" class="ace">
                <span class="lbl">deduction </span>
        </label>
</div>

    </div> 
    /***************
    <div>
<label for="form-field-select-1">Default</label>

<select class="form-control" id="form-field-select-1">
        <option value=""></option>
        <?php
//foreach($res as $output){

?>
        <option  value="<?php // echo $output["id_payroll_value"].",".$output["name"];?>">
            <?php // echo $output["name"];?></option>
        <?php
//}
        ?>
</select>
</div>
    
    /***************
    <hr>

<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name <?php // echo $file_x;  ?> </label>

        <div class="col-sm-9">
            <input type="text" name="value" id="form-field-1" placeholder="name_<?php // echo $file_x;  ?>" class="col-xs-10 col-sm-5">
        </div>
</div>

<div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-success " type="submit" name="add_value" value="add_value" onclick='return confirm(<?php echo $confirm_add;?>)'>
                        <i class="ace-icon fa fa-floppy-o bigger-120"></i>
                        Save & Add New
                </button>

                &nbsp; &nbsp; &nbsp;
                <a class="btn btn-danger" href="?sec=hr&mod=<?php // echo $file_x;?>&action=<?php // echo $file_x;?>">
                        <i class="ace-icon fa fa-times "></i>
												Cancel
                </a>
        </div>
</div>

									
								</form>
      </div>
</div>



        </div>-->

        <!--/*********************************************************/-->
        </div>
</div>
</div>


<!--/*****************************************************************************************************/-->										

                                                                        </div>
								</div>

								
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
				