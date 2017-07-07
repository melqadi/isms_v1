<?php 
$id_rules=$_GET["id_rules"];
include $control.'rules_c.php';


                                                $file_name="Update"." ".$_GET["mod"];
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
<?php echo "Update Status";?>
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
<form id="validate"  class="control-group form-horizontal" action="<?php echo $control;?><?php echo $file_x;?>_c.php" method="POST" >

<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name <?php echo $file_x;  ?> </label>

<div class="col-sm-9">
    <input type="text" value="<?php echo $res[0]["name_".$file_x];?>" name="name_rules" id="form-field-1"  class="col-xs-10 col-sm-5">
</div>
</div>
<div class="col-xs-6  center">

<div class="knob-container inline">
    <input type="text" name="full_day" class="input-small knob" value="<?php echo $res[0]["full_day_".$file_x];?>" data-min="0" 
       data-max="24" data-width="120" data-height="120" data-thickness=".2"
       data-fgcolor="#87B87F" data-displayprevious="true" data-anglearc="250" data-angleoffset="-125" />
</div>
</div>
<div class="col-xs-6  center">

<div class="knob-container inline">
    <input type="text" name="half_day" class="input-small knob" value="<?php echo $res[0]["half_day_".$file_x];?>" data-min="0" 
       data-max="24" data-width="120" data-height="120" data-thickness=".2"
       data-fgcolor="#87B87F" data-displayprevious="true" data-anglearc="250" data-angleoffset="-125" />
</div>
</div> 


    
    
    
    <div style="text-align: center">
    <hr>

    <div class="form-group">
        <label  class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Friday</label>
  <?php
//    ``, `sat_day`, `sun_day`, `mon_day`, `tue_day`, `wed_day`, `thu_day`

   $fir=$res[0]["fri_day"];
   if($fir == "fullday")
       {
       ?>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="friday" value="fullday" type="radio" class="ace" checked>
                <span class="lbl"> Full Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="friday" value="hulffay" type="radio" class="ace">
                <span class="lbl">Half Day </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="friday" value="weekend"type="radio" class="ace" >
                <span class="lbl"> Weekend</span>
        </label>
</div>
<?php
       }
   if($fir == "hulffay")
       {
       ?>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="friday" value="fullday" type="radio" class="ace" >
                <span class="lbl">Full Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="friday" value="hulffay" type="radio" class="ace" checked>
                <span class="lbl">Half Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="friday" value="weekend"type="radio" class="ace" >
                <span class="lbl"> Weekend</span>
        </label>
</div>
<?php
       }
     if($fir == "weekend")
       {
       ?>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="friday" value="fullday" type="radio" class="ace" >
                <span class="lbl">Full Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="friday" value="hulffay" type="radio" class="ace" >
                <span class="lbl">Half Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="friday" value="weekend"type="radio" class="ace" checked>
                <span class="lbl"> Weekend</span>
        </label>
</div>
<?php
       }
  ?>
    </div> 
    
    <hr>

<div class="form-group">
    <label  class="control-label bolder blue" style="float: left;margin-left: 10%;
width: 10%;
text-align: center;
font-size: 16px;
font-weight: lighter;
color: #2679b5;">sat</label>
<?php

$sat=$res[0]["sat_day"];
if($sat== "fullday")
   {
   ?>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
font-weight: lighter;
">
    <label>
        <input name="sat" value="fullday" type="radio" class="ace" checked>
            <span class="lbl">Full Day</span>
    </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
font-weight: lighter;
">
    <label>
            <input name="sat" value="hulffay" type="radio" class="ace">
            <span class="lbl">Half Day</span>
    </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
font-weight: lighter;
">
    <label>
            <input name="sat" value="weekend"type="radio" class="ace" >
            <span class="lbl"> Weekend</span>
    </label>
</div>
<?php
   }
if($sat== "hulffay")
   {
   ?>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
font-weight: lighter;
">
    <label>
        <input name="sat" value="fullday" type="radio" class="ace" >
            <span class="lbl">Full Day</span>
    </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
font-weight: lighter;
">
    <label>
            <input name="sat" value="hulffay" type="radio" class="ace" checked>
            <span class="lbl">Half Day</span>
    </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
font-weight: lighter;
">
    <label>
            <input name="sat" value="weekend"type="radio" class="ace" >
            <span class="lbl"> Weekend</span>
    </label>
</div>
<?php
   }
 if($sat== "weekend")
   {
   ?>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
font-weight: lighter;
">
    <label>
        <input name="sat" value="fullday" type="radio" class="ace" >
            <span class="lbl">Full Day</span>
    </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
font-weight: lighter;
">
    <label>
            <input name="sat" value="hulffay" type="radio" class="ace" >
            <span class="lbl">Half Day</span>
    </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
font-weight: lighter;
">
    <label>
            <input name="sat" value="weekend"type="radio" class="ace" checked>
            <span class="lbl"> Weekend</span>
    </label>
</div>
<?php
   }
?>
</div>   <hr>

<div class="form-group">
        <label  class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">sun</label>
  <?php
//    ``, ``, `sun_day`, `mon_day`, `tue_day`, `wed_day`, `thu_day`

   $sun=$res[0]["sun_day"];
   if($sun== "fullday")
       {
       ?>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="sun" value="fullday" type="radio" class="ace" checked>
                <span class="lbl">Full Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="sun" value="hulffay" type="radio" class="ace">
                <span class="lbl">Half Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="sun" value="weekend"type="radio" class="ace" >
                <span class="lbl"> Weekend</span>
        </label>
</div>
<?php
       }
   if($sun== "hulffay")
       {
       ?>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="sun" value="fullday" type="radio" class="ace" >
                <span class="lbl">Full Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="sun" value="hulffay" type="radio" class="ace" checked>
                <span class="lbl">Half Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="sun" value="weekend"type="radio" class="ace" >
                <span class="lbl"> Weekend</span>
        </label>
</div>
<?php
       }
     if($sun== "weekend")
       {
       ?>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="sun" value="fullday" type="radio" class="ace" >
                <span class="lbl">Full Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="sun" value="hulffay" type="radio" class="ace" >
                <span class="lbl">Half Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="sun" value="weekend"type="radio" class="ace" checked>
                <span class="lbl"> Weekend</span>
        </label>
</div>
<?php
       }
  ?>
  
  

    </div>   <hr>
    
<div class="form-group">
        <label  class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">mon</label>
  <?php
//    ``, ``, `sun_day`, `mon_day`, `tue_day`, `wed_day`, `thu_day`

   $mon=$res[0]["mon_day"];
   if($mon== "fullday")
       {
       ?>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="mon" value="fullday" type="radio" class="ace" checked>
                <span class="lbl">Full Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="mon" value="hulffay" type="radio" class="ace">
                <span class="lbl">Half Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="mon" value="weekend"type="radio" class="ace" >
                <span class="lbl"> Weekend</span>
        </label>
</div>
<?php
       }
   if($mon== "hulffay")
       {
       ?>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="mon" value="fullday" type="radio" class="ace" >
                <span class="lbl">Full Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="mon" value="hulffay" type="radio" class="ace" checked>
                <span class="lbl">Half Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="mon" value="weekend"type="radio" class="ace" >
                <span class="lbl"> Weekend</span>
        </label>
</div>
<?php
       }
     if($mon== "weekend")
       {
       ?>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="mon" value="fullday" type="radio" class="ace" >
                <span class="lbl">Full Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="mon" value="hulffay" type="radio" class="ace" >
                <span class="lbl">Half Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="mon" value="weekend"type="radio" class="ace" checked>
                <span class="lbl"> Weekend</span>
        </label>
</div>
<?php
       }
  ?>
  
  

    </div>   <hr>
    
<div class="form-group">
        <label  class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">tue</label>
  <?php
//    ``, ``, `sun_day`, `mon_day`, `tue_day`, `wed_day`, `thu_day`

   $tue=$res[0]["tue_day"];
   if($tue== "fullday")
       {
       ?>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="tue" value="fullday" type="radio" class="ace" checked>
                <span class="lbl">Full Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="tue" value="hulffay" type="radio" class="ace">
                <span class="lbl">Half Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="tue" value="weekend"type="radio" class="ace" >
                <span class="lbl"> Weekend</span>
        </label>
</div>
<?php
       }
   if($tue== "hulffay")
       {
       ?>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="tue" value="fullday" type="radio" class="ace" >
                <span class="lbl">Full Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="tue" value="hulffay" type="radio" class="ace" checked>
                <span class="lbl">Half Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="tue" value="weekend"type="radio" class="ace" >
                <span class="lbl"> Weekend</span>
        </label>
</div>
<?php
       }
     if($tue== "weekend")
       {
       ?>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="tue" value="fullday" type="radio" class="ace" >
                <span class="lbl">Full Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="tue" value="hulffay" type="radio" class="ace" >
                <span class="lbl">Half Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="tue" value="weekend"type="radio" class="ace" checked>
                <span class="lbl"> Weekend</span>
        </label>
</div>
<?php
       }
  ?>
  
  

    </div>   <hr>

    <!--/***wed****/-->   
<div class="form-group">
        <label  class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">wed</label>
  <?php
//    ``, ``, `sun_day`, `mon_day`, `tue_day`, `wed_day`, `thu_day`

   $wed=$res[0]["wed_day"];
   if($wed== "fullday")
       {
       ?>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="wed" value="fullday" type="radio" class="ace" checked>
                <span class="lbl">Full Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="wed" value="hulffay" type="radio" class="ace">
                <span class="lbl">Half Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="wed" value="weekend"type="radio" class="ace" >
                <span class="lbl"> Weekend</span>
        </label>
</div>
<?php
       }
   if($wed== "hulffay")
       {
       ?>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="wed" value="fullday" type="radio" class="ace" >
                <span class="lbl">Full Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="wed" value="hulffay" type="radio" class="ace" checked>
                <span class="lbl">Half Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="wed" value="weekend"type="radio" class="ace" >
                <span class="lbl"> Weekend</span>
        </label>
</div>
<?php
       }
     if($wed== "weekend")
       {
       ?>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="wed" value="fullday" type="radio" class="ace" >
                <span class="lbl">Full Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="wed" value="hulffay" type="radio" class="ace" >
                <span class="lbl">Half Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="wed" value="weekend"type="radio" class="ace" checked>
                <span class="lbl"> Weekend</span>
        </label>
</div>
<?php
       }
  ?>
  
  

    </div>   <hr>
   <!--thu--> 
<div class="form-group">
        <label  class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">thu</label>
  <?php
//    ``, ``, `sun_day`, `mon_day`, `tue_day`, `wed_day`, `thu_day`

   $thu=$res[0]["thu_day"];
   if($thu== "fullday")
       {
       ?>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="thu" value="fullday" type="radio" class="ace" checked>
                <span class="lbl">Full Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="thu" value="hulffay" type="radio" class="ace">
                <span class="lbl">Half Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="thu" value="weekend"type="radio" class="ace" >
                <span class="lbl"> Weekend</span>
        </label>
</div>
<?php
       }
   if($thu== "hulffay")
       {
       ?>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="thu" value="fullday" type="radio" class="ace" >
                <span class="lbl">Full Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="thu" value="hulffay" type="radio" class="ace" checked>
                <span class="lbl">Half Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="thu" value="weekend"type="radio" class="ace" >
                <span class="lbl"> Weekend</span>
        </label>
</div>
<?php
       }
     if($thu== "weekend")
       {
       ?>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input name="thu" value="fullday" type="radio" class="ace" >
                <span class="lbl">Full Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="thu" value="hulffay" type="radio" class="ace" >
                <span class="lbl">Half Day</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 100px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="thu" value="weekend"type="radio" class="ace" checked>
                <span class="lbl"> Weekend</span>
        </label>
</div>
<?php
       }
  ?>
  
  

    </div>   <hr>
    

    
    
    </div>    
        <input type="hidden"  name="id_<?php echo $file_x;  ?>" value="<?php echo $id_rules;?>">

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

</form>


<!--<form id="validate"  class="form-horizontal" action="<?php echo $control;?><?php // echo $file_x;?>_c.php" method="POST">
<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <?php // echo $file_name;?> </label>

        <div class="col-sm-9">
            
            <input type="text" value="<?php // echo $res[0]["name_".$file_x];?>" id="form-field-1"  name="name_<?php echo $file_x;  ?>" id="form-field-1" class="col-xs-10 col-sm-5">
        </div>
</div>								


<div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-success " name="update" value="update" onclick='return confirm(<?php echo $confirm_add;?>)' type="submit">
                        <i class="ace-icon fa fa-floppy-o bigger-120"></i>
                        Update
                </button>

                &nbsp; &nbsp; &nbsp;
                <a class="btn btn-danger" href="?sec=hr&mod=<?php // echo $file_x;?>&action=<?php echo $file_x;?>">
                        <i class="ace-icon fa fa-times "></i>
												Cancel
                </a>
        </div>
</div>

									
								</form>-->
<!--/*****************************************************************************************************/-->										

                                                                        </div>
								</div>

								
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
				

<script src="assets/js/jquery.2.1.1.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/chosen.jquery.min.js"></script>
		<script src="assets/js/fuelux.spinner.min.js"></script>
		<script src="assets/js/bootstrap-datepicker.min.js"></script>
		<script src="assets/js/bootstrap-timepicker.min.js"></script>
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/daterangepicker.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		<script src="assets/js/bootstrap-colorpicker.min.js"></script>
		<script src="assets/js/jquery.knob.min.js"></script>
		<script src="assets/js/jquery.autosize.min.js"></script>
		<script src="assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="assets/js/jquery.maskedinput.min.js"></script>
		<script src="assets/js/bootstrap-tag.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				
			
				//$('#id-input-file-3')
				//.ace_file_input('show_file_list', [
					//{type: 'image', name: 'name of image', path: 'http://path/to/image/for/preview'},
					//{type: 'file', name: 'hello.txt'}
				//]);
			
				//$('#spinner1').ace_spinner('disable').ace_spinner('value', 11);
				//or
				//$('#spinner1').closest('.ace-spinner').spinner('disable').spinner('enable').spinner('value', 11);//disable, enable or change value
				//$('#spinner1').closest('.ace-spinner').spinner('value', 0);//reset to 0
			
			
				
			
			
			
				$('#colorpicker1').colorpicker();
			
				$('#simple-colorpicker-1').ace_colorpicker();
				//$('#simple-colorpicker-1').ace_colorpicker('pick', 2);//select 2nd color
				//$('#simple-colorpicker-1').ace_colorpicker('pick', '#fbe983');//select #fbe983 color
				//var picker = $('#simple-colorpicker-1').data('ace_colorpicker')
				//picker.pick('red', true);//insert the color if it doesn't exist
			
			
				$(".knob").knob();
				
				
				
				
			
			});
		</script>
