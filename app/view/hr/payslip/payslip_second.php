<?php 
                                                $file_name=$_GET["mod"];
                                                  $file_db=$_GET["action"];
//$all=$ok["view_all"];
//if($all=="no")
//    {
//     ?> 
<!--<meta http-equiv="refresh" content="0;url=./index.php?mod=privileges&action=privileges"/>-->
              <?php // $message = 'not approve';
//
//echo "<SCRIPT> 
//alert('$message');
//</SCRIPT>";
//die();
//    }
include $control.'attendance_c.php';
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
Department                                                            <small>
									<!--<i class="ace-icon fa fa-angle-double-right"></i>-->
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
<div class="col-xs-8 col-sm-11">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="margin-right: 2.3%">  Date  </label>

<div class="input-daterange input-group" style="width: 38%">
<input min="1" max="12" step="1" value="1" id="month" name="month"  type="number" class="input-sm form-control" >
        <span class="input-group-addon">
                <i class="fa fa-exchange"></i>
        </span>
<input min="2015" max="2030"  step="1" value="2017" id="year" name="year"  type="number" class="input-sm form-control" >
</div>
</div>
<hr>
                &nbsp; &nbsp; &nbsp;


<label for="form-field-select-1">Select Departments</label>


<select class="form-control" id="form-field-select-1"   name="id_departments" onclick="showCustomer(this.value,$('#month').val(),$('#year').val())" >
      <option value=""></option>       	

    <?php
    foreach($departmentty as $output){
        ?>
  <option value="<?php echo $output["id_departments"] ;?>"><?php echo $output["name_departments"] ;?></option>       	
<?php
  }

?>
          
</select> 


    <script>
   
function showCustomer(str,month,year) {
  var xhttp;    
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
//  if (str == "" || int == "") {
//    document.getElementById("txthint").innerHTML = "";
//    return ;
//  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("payslipsecond").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "<?php echo $view;?>payslip/second_paysilp_txthint.php?str="+str+"&month="+month+"&year="+year, true);
  xhttp.send();
}
</script>




<div id="payslipsecond">
    
</div>

<!--/*****************************************************************************************************/-->										

                                                                        </div>
								</div>

								
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
				