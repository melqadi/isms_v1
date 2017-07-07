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
                                                include_once $control.'departments_c.php';


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
Add Positions                                                            <small>
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

if(!isset($_GET["id_departments"]))
    {
    
    ?>
<label for="form-field-select-1">Select Department</label>

<select class="form-control" id="form-field-select-1"   name="id_departments" onchange="showCustomer(this.value)" >
      <option value=""></option>       	

    <?php
    foreach($res as $output){
        ?>
  <option value="<?php echo $output["id_departments"] ;?>"><?php echo $output["name_departments"] ;?></option>       	
<?php
  }

?>
          
</select> 


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
  xhttp.open("GET", "<?php echo $view;?>positions/txthint.php?str="+str, true);
  xhttp.send();
}
</script>

<?php 
    
    
    
    
    
    
    }
else
{
                include 'txthint.php';   
}

?>


<div id="txthint">
    
</div>

<!--/*****************************************************************************************************/-->										

                                                                        </div>
								</div>

								
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
				