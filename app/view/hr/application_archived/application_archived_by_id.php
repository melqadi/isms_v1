<?php  
$id_application=$_GET["id_application"];

                                                $file_name="Add"." ".$_GET["mod"];
                                                $file_db=$_GET["action"];
                                                $file_x=$_GET["mod"];
 $ok=$ok["edit"];
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
Account Setup</a>
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
Add Account                  					</h1>
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
<script src="<?php echo $jq;?>jquery-1.11.3.min.js"></script>

<script src="<?php echo $jq;?>style.js"></script>
<?php
 $id_application=$_GET["id_application"];

          include $control.'application_archived_c.php';
?>
<form id="validate"  class="control-group form-horizontal" action="<?php echo $control;?>application_archived_c.php" method="POST" >
    <input type="hidden" name="id_application" value="<?php echo $id_application;?>">
<!--/************************************.**************************************************************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Status</label>

<div class="col-sm-9">
    <select style="  width: 42%;" class="form-control" id="form-field-select-1" name="status" >
    
        <option value="<?php echo $x_value["status"];?>"><?php echo $x_value["status"];?></option>       	


        <option value="pending">Pending </option>       	
          
</select>
</div>
</div>

<!--<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">date  </label>

<div class="col-sm-9">
    <input id="noval" value="<?php // echo $x_value["date"];?>" type="date" name="date" id="form-field-1"  class="col-xs-10 col-sm-5">
</div>
</div>-->


<!--/************************************.**************************************************************/-->


<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">How Did You Hear About Our School?   </label>

<div class="col-sm-9">
    <input id="noval" value="<?php echo $x_value["school"];?>" type="text" name="school" id="form-field-1"  class="col-xs-10 col-sm-5">
</div>
</div>
<!--/************************************.**************************************************************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">How Did You Hear About This Position ?  </label>

<div class="col-sm-9">
    <input id="noval" value="<?php echo $x_value["about_pos"];?>" type="text" name="a_pos" id="form-field-1"  class="col-xs-10 col-sm-5">
</div>
</div>
<!--/************************************.**************************************************************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">When Will You Be Available To Start Work ?  </label>

<div class="col-sm-9">
    <input id="noval" value="<?php echo $x_value["start"];?>" type="text" name="start" id="form-field-1"  class="col-xs-10 col-sm-5">
</div>
</div>
<!--/************************************.**************************************************************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Previous Salary  </label>

<div class="col-sm-9">
    <input id="noval" value="<?php echo $x_value["per_salary"];?>" type="text" name="p_s" id="form-field-1"  class="col-xs-10 col-sm-5">
</div>
</div>
<!--/************************************.**************************************************************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Expected Salary  </label>

<div class="col-sm-9">
    <input id="noval" value="<?php echo $x_value["exp_salary"];?>" type="text" name="e_s" id="form-field-1"  class="col-xs-10 col-sm-5">
</div>
</div>
<hr>
<!--/************************************.**************************************************************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">First Name  </label>

<div class="col-sm-9">
    <input value="<?php echo $x_value["f_name_application"];?>" type="text" name="f_name" id="form-field-1"  class="col-xs-10 col-sm-5">
</div>
</div>
<!--/******************************Middle***************************************/-->

<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Middle Name  </label>

<div class="col-sm-9">
    <input value="<?php echo $x_value["m_name_application"];?>" type="text" name="m_name" id="form-field-1"  class="col-xs-10 col-sm-5">
</div>
</div>
<!--/*************************************Last********************************/-->
    <div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Last Name  </label>

<div class="col-sm-9">
    <input value="<?php echo $x_value["l_name_application"];?>" type="text" name="l_name" id="form-field-1"  class="col-xs-10 col-sm-5">
</div>
</div>
<input type="hidden" name="id_application" value="<?php echo $id_application;?>">
<!--/****************************Gender****************************************/-->
    <div class="form-group">
        <label class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Gender </label>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <?php  
            $gender=$x_value["gender_application"];
            if($gender=="male")
                { ?>
            <input name="gender" value="male" type="radio" class="ace" checked>
                
               <?php }else
                   {?>
                               <input name="gender" value="male" type="radio" class="ace" >

               <?php    }
            ?>
                <span class="lbl"> male
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
             <?php  
            $gender=$x_value["gender_application"];
            if($gender=="Female")
                { ?>
            <input name="gender" value="Female" type="radio" class="ace" checked>
                
               <?php }else
                   {?>
                <input name="gender" value="Female" type="radio" class="ace">

               <?php    }
            ?>
           
                <span class="lbl">Female
 </span>
        </label>
</div>

    </div>
<!--/*****************************religion*****************************************/-->
    <div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Religion</label>

<div class="col-sm-9">
    <select style="  width: 42%;" class="form-control" id="form-field-select-1" name="religion" >
    
        <option value="<?php echo $x_value["religion_application"];?>"><?php echo $x_value["religion_application"];?></option>       	

      <option value="Muslim">Muslim</option>       	
  <option value="Christian">Christian</option>       	
  <option value="Other">Other</option>       	
          
</select>
</div>
</div>
<!--/*****************************birthday*****************************************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Birthday  </label>

<div class="col-sm-9">
    <input value="<?php echo $x_value["birthday_application"];?>" type="date" name="birthday" id="form-field-1"  class="col-xs-10 col-sm-5">
</div>
</div>
<!--/*****************************national*****************************************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">National  </label>

<div class="col-sm-9">
    <input value="<?php echo $x_value["national_application"];?>" type="number" name="national" id="form-field-1"  class="col-xs-10 col-sm-5">
</div>
</div>
<!--/*****************************marrital status*****************************************/-->
 <div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Marrital Status </label>

<div class="col-sm-9">
    <select style="  width: 42%;" class="form-control" id="form-field-select-1" name="marrital" >
      <option value="<?php echo $x_value["marrital_application"];?>"><?php echo $x_value["marrital_application"];?></option>       	

      <option value="Married">Married</option>       	
  <option value="Single">Single</option>       	
  <option value="Widow">Widow</option>       	
          
</select>
</div>
</div>
<!--/*****************************blood group*****************************************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Blood Group </label>

<div class="col-sm-9">
    <select style="  width: 42%;" class="form-control" id="form-field-select-1" name="blood" >
      <option value="<?php echo $x_value["blood_application"];?>"><?php echo $x_value["blood_application"];?></option>       	
          <option value="O">&nbsp;&nbsp; O</option>
          <option value="O(+ve)">&nbsp;&nbsp; O(+ve)</option>
          <option value="O(-ve)">&nbsp;&nbsp; O(-ve)</option>
          <option value="A">&nbsp;&nbsp; A</option>
          <option value="A(+ve)">&nbsp;&nbsp; A(+ve)</option>
          <option value="A(-ve)">&nbsp;&nbsp; A(-ve)</option>
          <option value="B">&nbsp;&nbsp; B</option>
          <option value="B+">&nbsp;&nbsp; B+</option>
          <option value="B(-ve)">&nbsp;&nbsp; B(-ve)</option>
          <option value="AB">&nbsp;&nbsp; AB</option>
          <option value="AB+">&nbsp;&nbsp; AB+</option>
          <option value="AB(-ve)">&nbsp;&nbsp; AB(-ve)</option>
          
</select>
</div>
</div>
<!--/*****************************blood group*****************************************/-->
<hr>    
<!--<--/****************cat******************-->
    <div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Select cat </label>

<div class="col-sm-9">
    <select style="  width: 42%;" class="form-control" id="form-field-select-1" name="id_categories" onchange="showCustomer(this.value)">
      <option value="<?php echo $x_value["id_categories"];?>"><?php echo $name_categories;?></option> 
     
    <?php

    foreach($cats as $output){
        ?>
  <option value="<?php echo $output["id_categories"] ;?>"><?php echo $output["name_categories"] ;?></option>       	
  
        	
<?php
  }

?>
          

</select>
</div>
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
    document.getElementById("step").innerHTML = "";
    return ;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("step").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "<?php echo $view;?>account/step.php?id_cat="+str, true);
  xhttp.send();
}
</script>

<div id="step"></div>

<script>
   
function showdep(str) {
  var xhttp;    
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  if (str == "") {
    document.getElementById("pos").innerHTML = "";
    return ;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("pos").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "<?php echo $view;?>account/pos.php?iddep="+str, true);
  xhttp.send();
}
</script>
<div id="pos"></div>

   <!--*********************email *****************************************/-->
 
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Email  </label>

<div class="col-sm-9">
    <input id="noval" value="<?php echo $x_value["email_application"];?>" type="email" name="email" id="form-field-1"  class="col-xs-10 col-sm-5">
</div>
</div>
<!--/*****************************mopile number *****************************************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Mobile Number  </label>

<div class="col-sm-9">
    <input id="noval" value="<?php echo $x_value["mobile_application"];?>" type="text" name="mobile" id="form-field-1"  class="col-xs-10 col-sm-5">
</div>
</div>
<!--/*****************************fax number *****************************************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Fax Number  </label>

<div class="col-sm-9">
    <input id="noval" value="<?php echo $x_value["fax_application"];?>" type="text" name="fax" id="form-field-1"  class="col-xs-10 col-sm-5">
</div>
</div>
<!--/*****************************landline number *****************************************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Landline Number  </label>

<div class="col-sm-9">
    <input id="noval" value="<?php echo $x_value["landline_application"];?>" type="text" name="landline" id="form-field-1"  class="col-xs-10 col-sm-5">
</div>
</div>
<!--/*****************************address  *****************************************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Address   </label>

<div class="col-sm-9">
    <input id="noval" value="<?php echo $x_value["address_application"];?>" type="text" name="address" id="form-field-1"  class="col-xs-10 col-sm-5">
</div>
</div>
<!--/*****************************Other address  *****************************************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Other Address   </label>

<div class="col-sm-9">
    <input id="noval" value="<?php echo $x_value["other_address_application"];?>" type="text" name="other" id="form-field-1"  class="col-xs-10 col-sm-5">
</div>
</div>
<!--/*****************************Other address  *****************************************/-->
<!--/****************************************/-->
<!--/*******************************************/-->
<!--<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">code   </label>

<div class="col-sm-9">
    <input value="<?php // echo $x_value["code_application"];?>" type="text" name="code" id="form-field-1"  class="col-xs-10 col-sm-5">
</div>
</div>-->

<div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            
                &nbsp; &nbsp; &nbsp;
                <a class="btn btn-primary" href="?sec=hr&mod=<?php echo $file_x;?>&action=<?php echo $file_x;?>">
                         <i class="ace-icon fa fa-share "></i>
                        <!--class="ace-icon fa fa-share bigger-200"-->
												Back to List
                </a>&nbsp; &nbsp; &nbsp;
<!--                <a id="next" class=" next1 btn btn-primary" >
                         <i class="ace-icon fa fa-share "></i>
                        class="ace-icon fa fa-share bigger-200"
next                </a>-->
<button class="btn btn-success " type="submit" name="update" value="update" onclick='return confirm(<?php echo $confirm_add;?>)'>
                        <i class="ace-icon fa fa-floppy-o bigger-120"></i>
                        Save
                </button>


        </div>
</div>


       
    <!--/******************rules***************/-->

<!--/***********************************************************/-->


<!--/********************************//******************************/-->

<!--/**************************************/-->
    
<!--<a id="nextt">next2</a>
<a id="back">back</a>-->

<!--/************************************************************************************************************/-->
<!--/************************************************************************************************************/-->
   
    
        
</form>


<!--/*****************************************************************************************************/-->										

                                                                        </div>
								</div>

								
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
				
