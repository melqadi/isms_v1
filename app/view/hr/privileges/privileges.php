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
Add Category                                                            <small>
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


<form id="validate"  class="form-horizontal" action="<?php echo $control;?>privileges_c.php" method="POST" >
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Privileges Name </label>

        <div class="col-sm-9">
            <input type="text" name="Name" id="form-field-1"  class="col-xs-10 col-sm-5">
        </div>
</div>								
<!--/*******************************categores*************************************/-->
<div class="form-group" style="width: 100%">
        <label class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Categoris</label>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input  name="c_add_cat" value="yes" type="radio" class="ace">
                <span class="lbl"> Add New Category
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="c_delete" value="yes" type="radio" class="ace">
                <span class="lbl">Delete Category
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="c_all" value="yes" type="radio" class="ace">
                <span class="lbl">Viwe All Category
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="c_edite" value="yes" type="radio" class="ace">
                <span class="lbl">Edite Category
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="c_add_dep" value="yes" type="radio" class="ace">
                <span class="lbl">ADD New Department
 </span>
        </label>
</div>

    </div>
<hr>
<!--/*******************************department*******************************************/-->
<div class="form-group" style="width: 100%">
        <label class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Departments</label>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input  name="d_add_dep" value="yes" type="radio" class="ace">
                <span class="lbl"> Add New Department
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="d_delete" value="yes" type="radio" class="ace">
                <span class="lbl">Delete Department
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="d_all" value="yes" type="radio" class="ace">
                <span class="lbl">Viwe All Department
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="d_edite" value="yes" type="radio" class="ace">
                <span class="lbl">Edite Department
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="d_add_pos" value="yes" type="radio" class="ace">
                <span class="lbl">ADD New Position
 </span>
        </label>
</div>

    </div>
<hr>
<!--/*******************************position*******************************************/-->
<div class="form-group" style="width: 100%">
        <label class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Positions</label>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input  name="p_add_pos" value="yes" type="radio" class="ace">
                <span class="lbl"> Add New Position
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="p_delete" value="yes" type="radio" class="ace">
                <span class="lbl">Delete Position
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="p_all" value="yes" type="radio" class="ace">
                <span class="lbl">Viwe All Position
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="p_edite" value="yes" type="radio" class="ace">
                <span class="lbl">Edite Position
 </span>
        </label>
</div>

    </div>
<hr>
<!--/*******************************Nationalities*******************************************/-->
<div class="form-group" style="width: 100%">
        <label class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Nationalities</label>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input  name="n_add_nat" value="yes" type="radio" class="ace">
                <span class="lbl"> Add New Nationalitiey
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="n_delete" value="yes" type="radio" class="ace">
                <span class="lbl">Delete Nationalitiey
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="n_all" value="yes" type="radio" class="ace">
                <span class="lbl">Viwe All Nationalitiey
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="n_edite" value="yes" type="radio" class="ace">
                <span class="lbl">Edite Nationalitiey
 </span>
        </label>
</div>

    </div>
<hr>
<!--/***********************skills***************************************************/-->
<div class="form-group" style="width: 100%">
        <label class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Skills</label>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input  name="s_add_ski" value="yes" type="radio" class="ace">
                <span class="lbl"> Add New Skills
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="s_delete" value="yes" type="radio" class="ace">
                <span class="lbl">Delete Skills
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="s_all" value="yes" type="radio" class="ace">
                <span class="lbl">Viwe All Skills
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="s_edite" value="yes" type="radio" class="ace">
                <span class="lbl">Edite Skills
 </span>
        </label>
</div>
    </div>
<hr>
<!--/*******************************Licesnes*******************************************/-->
<div class="form-group" style="width: 100%">
        <label class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Licesnes</label>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input  name="l_add_lic" value="yes" type="radio" class="ace">
                <span class="lbl"> Add New Licesnes
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="l_delete" value="yes" type="radio" class="ace">
                <span class="lbl">Delete Licesnes
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="l_all" value="yes" type="radio" class="ace">
                <span class="lbl">Viwe All Licesnes
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input name="l_edite" value="yes" type="radio" class="ace">
                <span class="lbl">Edite Licesnes
 </span>
        </label>
</div>

    </div>
<hr>
<!--/******************************Languages********************************************/-->
<div class="form-group" style="width: 100%">
        <label class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Languages</label>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input  name="g_add_lan" value="yes" type="radio" class="ace">
                <span class="lbl"> Add New Category
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="g_delete" value="yes" type="radio" class="ace">
                <span class="lbl">Delete Category
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="g_all" value="yes" type="radio" class="ace">
                <span class="lbl">Viwe All Category
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="g_edite" value="yes" type="radio" class="ace">
                <span class="lbl">Edite Category
 </span>
        </label>
</div>

    </div>
<!--/*********************************Status*****************************************/-->
<hr>
<div class="form-group" style="width: 100%">
        <label class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Status</label>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input  name="es_add_Sta" value="yes" type="radio" class="ace">
                <span class="lbl"> Add New Status
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="es_delete" value="yes" type="radio" class="ace">
                <span class="lbl">Delete Status
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="es_all" value="yes" type="radio" class="ace">
                <span class="lbl">Viwe All Status
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="es_edite" value="yes" type="radio" class="ace">
                <span class="lbl">Edite Status
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="es_view_id" value="yes" type="radio" class="ace">
                <span class="lbl">View By Id
 </span>
        </label>
</div>

    </div>
<!--/********************************Payroll Categories******************************************/-->
<hr>
<div class="form-group" style="width: 100%">
        <label class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Payroll Categories</label>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input  name="pc_add_pay" value="yes" type="radio" class="ace">
                <span class="lbl"> Add New Payroll Categories
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="pc_delete" value="yes" type="radio" class="ace">
                <span class="lbl">Delete Payroll Categories
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="pc_all" value="yes" type="radio" class="ace">
                <span class="lbl">Viwe All Payroll Categories
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="pc_edite" value="yes" type="radio" class="ace">
                <span class="lbl">Edite Payroll Categories
 </span>
        </label>
</div>

    </div>
<!--/***************************Payroll Groups  ***********************************************/-->
<hr>
<div class="form-group" style="width: 100%">
        <label class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 5%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Payroll Groups</label>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input  name="pg_add_gr" value="yes" type="radio" class="ace">
                <span class="lbl"> Add New Payroll Groups
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="pg_delete" value="yes" type="radio" class="ace">
                <span class="lbl">Delete Payroll Groups
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="pg_all" value="yes" type="radio" class="ace">
                <span class="lbl">Viwe All Payroll Groups
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="pg_edite" value="yes" type="radio" class="ace">
                <span class="lbl">Edite Payroll Groups
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="pg_viwe_id" value="yes" type="radio" class="ace">
                <span class="lbl">ADD View Id
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="pg_delete_rel" value="yes" type="radio" class="ace">
                <span class="lbl">delete Payroll cat
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="pg_add_rel" value="yes" type="radio" class="ace">
                <span class="lbl">ADD Rel
 </span>
        </label>
</div>

    </div>
<!--/***********************Insurance ***************************************************/-->
<hr>
<div class="form-group" style="width: 100%">
        <label class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 5%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Insurance</label>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input  name="i_add_ins" value="yes" type="radio" class="ace">
                <span class="lbl"> Add New Insurance
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="i_delete" value="yes" type="radio" class="ace">
                <span class="lbl">Delete Insurance
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="i_all" value="yes" type="radio" class="ace">
                <span class="lbl">Viwe All Insurance
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="i_edite" value="yes" type="radio" class="ace">
                <span class="lbl">Edite Insurance
 </span>
        </label>
</div>

    </div>
<!--/**************************Tax ************************************************/-->
<hr>
<div class="form-group" style="width: 100%">
        <label class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 5%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Tax </label>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input  name="t_add_tax" value="yes" type="radio" class="ace">
                <span class="lbl"> Add New Tax 
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="t_delete" value="yes" type="radio" class="ace">
                <span class="lbl">Delete Tax 
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="t_all" value="yes" type="radio" class="ace">
                <span class="lbl">Viwe All Tax 
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="t_edite" value="yes" type="radio" class="ace">
                <span class="lbl">Edite Tax 
 </span>
        </label>
</div>

    </div>
<hr>
<!--/*********************************app*****************************************/-->
<div class="form-group" style="width: 100%">
        <label class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">application</label>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input  name="app_add" value="yes" type="radio" class="ace">
                <span class="lbl"> Add New Status
</span>
        </label>
</div>
    <div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input  name="add_app" value="yes" type="radio" class="ace">
                <span class="lbl"> set app
</span>
        </label>
</div>
    
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="app_delete" value="yes" type="radio" class="ace">
                <span class="lbl">Delete Status
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="app_all" value="yes" type="radio" class="ace">
                <span class="lbl">Viwe All Status
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="app_edite" value="yes" type="radio" class="ace">
                <span class="lbl">Edite Status
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="app_view_id" value="yes" type="radio" class="ace">
                <span class="lbl">View By Id
 </span>
        </label>
</div>

    </div>
<hr>
<!--/*********************************Appointment*****************************************/-->
<div class="form-group" style="width: 100%">
        <label class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">Appointment</label>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input  name="ment_add" value="yes" type="radio" class="ace">
                <span class="lbl"> Add New Status
</span>
        </label>
</div>
    <div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
            <input  name="add_ment" value="yes" type="radio" class="ace">
                <span class="lbl"> set app
</span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="ment_delete" value="yes" type="radio" class="ace">
                <span class="lbl">Delete Status
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="ment_all" value="yes" type="radio" class="ace">
                <span class="lbl">Viwe All Status
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="ment_edite" value="yes" type="radio" class="ace">
                <span class="lbl">Edite Status
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="ment_view_id" value="yes" type="radio" class="ace">
                <span class="lbl">View By Id
 </span>
        </label>
</div>

    </div>
<hr>
<!--/*********************************application_archived*****************************************/-->
<div class="form-group" style="width: 100%">
        <label class="control-label bolder blue" style="float: left;margin-left: 10%;
  width: 10%;
  text-align: center;
  font-size: 16px;
  font-weight: lighter;
  color: #2679b5;">application_archived</label>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="arc_delete" value="yes" type="radio" class="ace">
                <span class="lbl">Delete Status
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="arc_all" value="yes" type="radio" class="ace">
                <span class="lbl">Viwe All Status
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="arc_edite" value="yes" type="radio" class="ace">
                <span class="lbl">Edite Status
 </span>
        </label>
</div>
<div class="radio" style="float: left;margin-left: 20px;font-size: 16px;
  font-weight: lighter;
  ">
        <label>
                <input  name="arc_view_id" value="yes" type="radio" class="ace">
                <span class="lbl">View By Id
 </span>
        </label>
</div>

    </div>
<hr>


<div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-success " type="submit" name="add" value="add" onclick='return confirm(<?php echo $confirm_add;?>)'>
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
<!--/*****************************************************************************************************/-->										

                                                                        </div>
								</div>

								
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
				