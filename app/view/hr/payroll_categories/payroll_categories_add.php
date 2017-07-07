<?php  
                                                $file_name="Add"." ".$_GET["mod"];
                                                $file_db=$_GET["action"];
                                                $file_x=$_GET["mod"];
                                                      $ok=$ok["add"];
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
							<li class="active"> <?php echo "Add Payroll Categories  ";?></li>
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
Add Payroll Categories  
                                                            
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
<form id="validate"  class="form-horizontal" action="<?php echo $control;?>payroll_categoies_c.php" method="POST" >
<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Category Name  </label>

        <div class="col-sm-9">
            <input type="text" name="name" id="form-field-1"  class="col-xs-10 col-sm-5">
        </div>
</div>								
<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">  Category Code </label>

        <div class="col-sm-9">
            <input type="text" name="code" id="form-field-1"  class="col-xs-10 col-sm-5">
        </div>
</div>
    <div class="form-group">
        <label  class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Category Type</label>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="gory" value="earning" type="radio" class="ace">
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

    </div>  
<div class="form-group">
        <label  class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Value Type</label>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="type" value="Formula" type="radio" class="ace">
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

    </div>   

<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Value </label>

        <div class="col-sm-9">
            <input type="text" name="value" id="form-field-1"  class="col-xs-10 col-sm-5">
        </div>
</div>

<div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-success " type="submit" name="add_value" value="add_value" onclick='return confirm(<?php echo $confirm_add;?>)'>
                        <i class="ace-icon fa fa-floppy-o bigger-120"></i>
                        Save & Add New
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
<!--/**********************************/-->
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

<form id="validate"  class="form-horizontal" action="<?php echo $control;?>payroll_categoies_c.php" method="POST" >
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
<form id="validate"  class="form-horizontal" action="<?php echo $control;?>payroll_categoies_c.php" method="POST" >
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
                        Save
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
				