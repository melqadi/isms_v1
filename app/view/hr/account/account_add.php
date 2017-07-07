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
<form id="vauh"  class="control-group form-horizontal" action="<?php echo $control;?><?php echo $file_x;?>_c.php" method="POST" >

<div id="tabol">
  <div  >
      
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">First Name *  </label>

<div class="col-sm-9">
    <input   type="text" name="f_name"    class="col-xs-10 col-sm-5">
</div>
</div>
<!--/******************************Middle***************************************/-->

<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Middle Name *  </label>

<div class="col-sm-9">
    <input  type="text" name="m_name"   class="col-xs-10 col-sm-5">
</div>
</div>
<!--/*************************************Last********************************/-->
    <div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Last Name *  </label>

<div class="col-sm-9">
    <input  type="text" name="l_name"   class="col-xs-10 col-sm-5">
</div>
</div>
<!--/****************************Gender****************************************/-->
    <div class="form-group">
        <label class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Gender * </label>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input required   name="gender" value="male" type="radio" class="ace">
                <span class="lbl"> male
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input   name="gender" value="Female" type="radio" class="ace">
                <span class="lbl">Female
 </span>
        </label>
</div>

    </div>
<!--/*****************************religion*****************************************/-->
    <div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Religion *</label>

<div class="col-sm-9">
    <select required style="  width: 42%;" class="form-control" id="form-field-select-1" name="religion" >
      <option value=""></option>       	

      <option value="Muslim">Muslim</option>       	
  <option value="Christian">Christian</option>       	
  <option value="Other">Other</option>       	
          
</select>
</div>
</div>
<!--/*****************************birthday*****************************************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Date of Birth * </label>

<div class="col-sm-9">
    <input  type="date"  name="birthday"   class="col-xs-10 col-sm-5">
</div>
</div>
<!--/*****************************Nationality list  *****************************************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Nationality</label>

<div class="col-sm-9">
    <select style="  width: 42%;" class="form-control" id="form-field-select-1" name="nationality" >
      <option value=""></option>       	
				<?php
          include $control.'account_rel_c.php';

foreach($res as $output){
    

                                ?>

      <option value="<?php
echo $output["id_nationalities"];
?>"><?php
echo $output["name_nationalities"];
?></option>       	
          <?php
}
          ?>
</select>
</div>
</div>
<!--/*****************************national*****************************************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">National ID  </label>

<div class="col-sm-9">
    <input id="noval" type="number"  name="national"   class="col-xs-10 col-sm-5">
</div>
</div>
<!--/*****************************marrital status*****************************************/-->
 <div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Marital Status </label>

<div class="col-sm-9">
    <select style="  width: 42%;" class="form-control" id="form-field-select-1" name="marrital" >
      <option value=""></option>       	

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
      <option value=""></option>       	
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
<hr>    
<!--/*****************************email *****************************************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Email Address * </label>

<div class="col-sm-9">
    <input   type="email"  name="email"   class="col-xs-10 col-sm-5">
</div>
</div>
<!--/*****************************mopile number *****************************************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Mobile Number * </label>

<div class="col-sm-9">
    <input  type="text"  name="mobile"   class="col-xs-10 col-sm-5">
</div>
</div>
<!--/*****************************fax number *****************************************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Fax Number  </label>

<div class="col-sm-9">
    <input id="noval"  type="text" name="fax"   class="col-xs-10 col-sm-5">
</div>
</div>
<!--/*****************************landline number *****************************************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Landline Number  </label>

<div class="col-sm-9">
    <input id="noval"  type="text" name="landline"   class="col-xs-10 col-sm-5">
</div>
</div>
<!--/*****************************address  *****************************************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Address *   </label>

<div class="col-sm-9">
    <input  type="text"  name="address" class="col-xs-10 col-sm-5">
</div>
</div>
<!--/*****************************Other address  *****************************************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Other Address   </label>

<div class="col-sm-9">
    <input id="noval"  type="text" name="other" class="col-xs-10 col-sm-5">
</div>
</div>
<div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            
                &nbsp; &nbsp; &nbsp;
                <a class="btn btn-primary" href="?sec=hr&mod=<?php echo $file_x;?>&action=<?php echo $file_x;?>">
                         <i class="ace-icon fa fa-share "></i>
                        <!--class="ace-icon fa fa-share bigger-200"-->
												Back to List
                </a>&nbsp; &nbsp; &nbsp;
                <a id="next" class=" next1 btn btn-primary" >
                         <i class="ace-icon fa fa-share "></i>
                        <!--class="ace-icon fa fa-share bigger-200"-->
next                </a>


        </div>
</div>


</div>
       
</div>
<!--/************************************.**********qualifications_c.php****************************************************/-->
<div id="taboll" style="display:none ">
    <!--/*******************joining*********************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date of Joining   </label>

<div class="col-sm-9">
    <input   type="date" name="join"   class="col-xs-10 col-sm-5">
</div>
</div>
<!--/****************code***************************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">User Id   </label>

<div class="col-sm-9">
    <input   type="text" name="code"   class="col-xs-10 col-sm-5">
</div>
</div>

    <!--/******************rules***************/-->
    
    <div class="form-group">
        <label  class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Employment status</label>

<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;font-weight: lighter;">
        <label>
            <input id="ep" name="g" value="Period" type="radio" class="ace">
                <span class="lbl"> Probation Period</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;font-weight: lighter;">
        <label>
                <input id="epp" name="g" value="status" type="radio" class="ace">
                <span class="lbl">Employment status </span>
        </label>
</div>

</div>  

    
<div id="ghj" style="display: none;" class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Employment Status </label>

<div class="col-sm-9">
    <select style="  width: 42%;" class="form-control" id="form-field-select-1" name="rules" >
      <option value=""></option> 
      <?php
          foreach ($rules as $se){

      ?>
          <option value="<?php
          echo $se["id_rules"]
          ?>"><?php
          echo $se["name_rules"]
          ?></option>
<?php
          }
?>
</select>
</div>
</div>
<div id="ghjj" style="display: none;"><div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Ends on.   </label>

<div class="col-sm-9">
    <input id="noval"   type="date" name="period"   class="col-xs-10 col-sm-5">
</div>
</div>
</div>
 <!--/******************Direct Manager***********/-->   
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Direct Manager </label>

<div class="col-sm-9">
    <select   style="  width: 42%;" class="form-control" id="form-field-select-1" name="user" >
      <option value=""></option> 
      <?php
          foreach ($user as $cted){

      ?>
          <option value="<?php
          echo $cted["id_user"];
          ?>"><?php
          echo $cted["f_name_user"]." ".$cted["m_name_user"]." ".$cted["l_name_user"];
          ?></option>
<?php
          }
?>
</select>
</div>
</div>
 <!--***************************************************-->
 <div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">priv *</label>

<div class="col-sm-9">
    <select style="  width: 42%;" class="form-control" id="form-field-select-1" name="priv" >
      <option value=""></option>       	
<?php

foreach ($privled as $pri=>$val){
    echo $pri;
?>
      <option value="<?php  echo $val["name_role"];?>"><?php  echo $val["name_role"];?></option>   
          <?php
}
          ?>
</select>
</div>
</div>
 <hr>    
  <!--/****************cat******************-->
    <div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Select Category </label>

<div class="col-sm-9">
    <select style="  width: 42%;" class="form-control" id="form-field-select-1" name="id_categories" onchange="showCustomer(this.value)">
      <option value=""></option> 
     
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

 <hr>   
 <!--/************payroll*****************/-->  
 
    <!--/********************langots***********************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Languages  </label>
<div class="col-sm-9">
    <select  style="width: 396px;" name="languages[]" class="form-control" id="form-field-select-2" multiple="multiple" size="5">
           <?php
foreach($lan as $out){
                                ?>                                       
        <option value="<?php echo $out["name_languages"];?>"><?php echo $out["name_languages"];?></option>
<?php } ?>
    </select>
</div>
</div>
    <!--/******************skils***********************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Skills  </label>
<div class="col-sm-9">
    <select style="width: 396px;" name="skills[]" class="form-control" id="form-field-select-2" multiple="multiple" size="5">
           <?php
foreach($skil as $output){

                                ?>
                                                                 
        <option value="<?php echo $output["name_skills"];?>"><?php echo $output["name_skills"];?></option>
<?php } ?>
    </select>
</div>
</div>
 <!--/********************licenes*********************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Licenses  </label>
<div class="col-sm-9">
    <select style="width: 396px;" name="licenes[]" class="form-control" id="form-field-select-2" multiple="multiple" size="5">
           <?php
foreach($lain as $outtt){

                                ?>
                                                                 
        <option value="<?php echo $outtt["name_licenses"];?>"><?php echo $outtt["name_licenses"];?></option>
<?php } ?>
    </select>
</div>
</div>
 <hr>
        
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Payroll Group </label>

<div class="col-sm-9">
    <select style="  width: 42%;" class="form-control" id="form-field-select-1" name="payroll_groups" >
      <option value=""></option> 
      <?php
          foreach ($payroll_groups as $cited){

      ?>
          <option value="<?php
          echo $cited["id_payroll_groups"];
          ?>"><?php
          echo $cited["name_payroll_groups"];
          ?></option>
<?php
          }
?>
</select>
</div>
</div>
  
 <!--/*****************************************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">   Insurance Setup
  </label>
<div class="col-sm-9">
    <select style="width: 396px;" name="insurance[]" class="form-control" id="form-field-select-2" multiple="multiple" size="5">
           <?php
foreach($ins as $outpr){

                                ?>
                                                                 
        <option value="<?php echo $outpr["name_insurance"];?>"><?php echo $outpr["name_insurance"];?></option>
<?php } ?>
    </select>
</div>
</div>
 <!--/*****************************************/-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">   Taxes Setup
  </label>
<div class="col-sm-9">
    <select style="width: 396px;" name="tax[]" class="form-control" id="form-field-select-2" multiple="multiple" size="5">
           <?php
foreach($tax as $otax){

                                ?>
                                                                 
        <option value="<?php echo $otax["name_tax"];?>"><?php echo $otax["name_tax"];?></option>
<?php } ?>
    </select>
</div>
</div>
<!--/*****************************************/-->
<!--<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">   Leaves Setup
  </label>
<div class="col-sm-9">
    <select style="width: 396px;" name="leave[]" class="form-control" id="form-field-select-2" multiple="multiple" size="5">
           <?php
foreach($leave as $leaves){

                                ?>
                                                                 
        <option value="<?php // echo $leaves["name"];?>"><?php // echo $leaves["name"];?></option>
<?php } ?>
    </select>
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
<button id="vsal" class="btn btn-success " type="submit" name="add" value="add" onclick='return confirm(<?php echo $confirm_add;?>)'>
                        <i class="ace-icon fa fa-floppy-o bigger-120"></i>
                        Save & Add New
                </button>
<a id="back" class="btn btn-primary" >
                         <i class="ace-icon fa fa-share "></i>
                        <!--class="ace-icon fa fa-share bigger-200"-->
					Back							
                </a>&nbsp; &nbsp; &nbsp;



        </div>
</div>
    
<!--<a id="nextt">next2</a>
<a id="back">back</a>-->

</div>
<!--/************************************************************************************************************/-->
<div id="tabolll" style="display: none">
    
    
    
<a id="nexttt">3</a>
 <a id="backk">back</a>

</div>

<!--/************************************************************************************************************/-->
<div id="tabollll" style="display: none">
<a id="nextttt">4</a>
 <a id="backkk">back</a>
<div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-success " type="submit" name="add" value="add" onclick='return confirm(<?php echo $confirm_add;?>)'>
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

</div>

<!--/************************************************************************************************************/-->
   
    
        
</form>


<!--/*****************************************************************************************************/-->										

                                                                        </div>
								</div>

								
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
				