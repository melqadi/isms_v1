<!DOCTYPE html>
<?php

ob_start(); 
session_start(); 
error_reporting(0);
require_once 'conf.php';
require_once 'init.php';



if(!isset($_SESSION['id_account']))
{
   include './login.php';
   die();
}
$name_page=$_GET["mod"];
$name=  $_SESSION['username'];
$pass= $_SESSION['password'];
$id_account= $_SESSION['id_account'];
$img= $_SESSION['img'];
$total=3;
$first=1;
$th=2;

require_once 'app/lib/role_setup.php';
require_once 'app/lib/weekend.php';
require_once 'app/lib/all_data_m.php';
require_once 'app/lib/timesheet_m.php';
require_once 'app/lib/payslip_m.php';
require_once 'app/lib/payslip_mysql.php';
require_once 'app/lib/shalp.php';
require_once 'app/lib/menu.php';


$t=new test;
$payslips = new payslip();
$pay = new pay();
$data_user = new alldata();
$timesheet = new time();
$add = new role();
$ok = $add->rolesetup($id_account,$name_page);
$menu = new menu();
$sub = $menu->sub($ok);
//echo '<pre>';
//print_r($sub);
//echo '<pre>';
//exit();
?>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>IStudent SMS HR </title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.2.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/select2.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/fonts/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
<script src="<?php echo $jq;?>jquery-1.11.3.min.js"></script>
<script src="<?php echo $jq;?>validat.js"></script>

		<div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
SMS HR						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						
<li class="purple">
<a data-toggle="dropdown" class="dropdown-toggle" href="#">
        <i class="ace-icon fa fa-bell icon-animated-bell"></i>
        <span class="badge badge-important"><?php
        echo $total;
        ?></span>
</a>

<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
        <li class="dropdown-header">
                <i class="ace-icon fa fa-exclamation-triangle"></i>
                <?php
        echo $total." "." Notifications";
        ?> 
        </li>

        <li class="dropdown-content">
                <ul class="dropdown-menu dropdown-navbar navbar-pink">
                        <li>
                                <a href="#">
                                        <div class="clearfix">
                                                <span class="pull-left">
                                                        <i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
                                                       Firts  Approve Probation Period 
                  
                                                </span>
                                                <span class="pull-right badge badge-info">+2</span>
                                        </div>
                                </a>
                        </li>

                </ul>
        </li>
<li class="dropdown-content">
                <ul class="dropdown-menu dropdown-navbar navbar-pink">
                        <li>
                                <a href="#">
                                        <div class="clearfix">
                                                <span class="pull-left">
                                                        <i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
                                                       Second Approve Probation Period 
                                                </span>
                                                <span class="pull-right badge badge-info">+1</span>
                                        </div>
                                </a>
                        </li>

                </ul>
        </li>

            </ul>
    </li>

						
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
<?php  if(empty($_SESSION['img'])){
?>
                                                            <img class="nav-user-photo" src="assets/avatars/portrait.png" alt="Jason's Photo" />

<?php
}  else {
?>
                                                            <img class="nav-user-photo" src="<?php echo $upload_file_conf;?><?php echo $id_account;?>/<?php echo $img; ?>" alt="Jason's Photo" />

<?php
}
?>

								<span class="user-info">
									<small>Welcome,</small>
									<?php  
                                                                        echo $name;
                                                                        
                                                                        

                                                                        ?>
						
                                                                </span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="?sec=hr&mod=user&action=profile">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
                                                                    <a href="<?php echo $control;?>logout_c.php">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>
<div id="sidebar" class="sidebar                  responsive">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->
<!--///////////////////////////////////////////////////////////////////////////////////-->

				<ul class="nav nav-list">
<!--/****************1*******************/-->
<li class="">
<a href="#" class="dropdown-toggle">
<i class="ace-icon fa fa-users" style="
    margin-left: 15px;
"></i>
<span class="menu-text">
                SMS-HR
        </span>

        <b class="arrow fa fa-angle-down"></b>
</a>

<b class="arrow"></b>

<ul class="submenu">
    
    <?php
                                                      $departments = new role();
 $dep = $departments->rolesetup($id_account,"departments");
 $dep=$dep["view_all"];
                                                              $categories = new role();
 $return = $categories->rolesetup($id_account,"categories");
 $return=$return["view_all"];
                                                             $positions = new role();
 $pos = $positions->rolesetup($id_account,"positions");
 $pos=$pos["view_all"];
                                                              $nationalities= new role();
 $national = $nationalities->rolesetup($id_account,"nationalities");
 $national=$national["view_all"];
 if($dep=="yes"||$return=="yes"||$pos=="yes"||$national=="yes"){  
 ?>	
<li class="">
						<a href="#" class="dropdown-toggle">
							               <i class="menu-icon fa fa-caret-right"></i> 
							<span class="menu-text"> 
Employment Setup </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
                                                    <!--/***************/-->
                                                    <?php
 if($return == "yes"){
                                              
                                                    ?>
							<li class="">
								<a href="?sec=hr&mod=categories&action=categories">
									<i class="menu-icon fa fa-caret-right"></i>
Categories
                                                                </a>

								<b class="arrow"></b>
							</li>
<?php
 }
?>
                                                    <!--/***************/-->
						<?php
        
 if($dep == "yes"){
                                              
                                                    ?>	
                                                    <li class="">
								<a href="?sec=hr&mod=departments&action=departments">
									<i class="menu-icon fa fa-caret-right"></i>
Departments
                                                                </a>

								<b class="arrow"></b>
							</li>
<?php
 }
?>

                                                        <!--/***************/-->
						<?php
 if($pos == "yes"){
                                              
                                                    ?>	
                                        
                                                        <li class="">
								<a href="?sec=hr&mod=positions&action=positions">
									<i class="menu-icon fa fa-caret-right"></i>
Positions
                                                                </a>

								<b class="arrow"></b>
							</li>
                                                        <?php
 }
?>
                                                        <!--/***************/-->
						<?php
 if($national == "yes"){
                                              
                                                    ?>	
                                        
                                                        <li class="">
								<a href="?sec=hr&mod=nationalities&action=nationalities">
									<i class="menu-icon fa fa-caret-right"></i>
Nationalities
                                                                </a>

								<b class="arrow"></b>
							</li>
                                                                                          <?php
 }
?>
						
                                                </ul>
					</li>
                                        <?php
                                        }
                                        ?>
<!--/****************2********************/-->

<?php
                                                      $skills = new role();
 $ski = $skills->rolesetup($id_account,"skills");
 $ski=$ski["view_all"];
                                                              $licenses = new role();
 $lic = $licenses->rolesetup($id_account,"licenses");
 $lic=$lic["view_all"];
                                                             $languages = new role();
 $lan = $languages->rolesetup($id_account,"languages");
 $lan=$lan["view_all"];
                                                    
 if($ski=="yes"||$lic=="yes"||$lan=="yes"){  
 ?>	
					<li class="">
						<a href="#" class="dropdown-toggle">
							               <i class="menu-icon fa fa-caret-right"></i> 
							<span class="menu-text"> 
Qualification Setup
 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
                                                    <!--/***************/-->
                                                    			<?php
 if($ski == "yes"){
                                              
                                                    ?>	
                          
							<li class="">
								<a href="?sec=hr&mod=skills&action=skills">
									<i class="menu-icon fa fa-caret-right"></i>
Skills
                                                                </a>

								<b class="arrow"></b>
							</li>

                                                    <!--/***************/-->
			<?php
 }
 if($lic == "yes"){
                                              
                                                    ?>	
                          
                                                    <li class="">
								<a href="?sec=hr&mod=licenses&action=licenses">
									<i class="menu-icon fa fa-caret-right"></i>
Licenses
                                                                </a>

								<b class="arrow"></b>
							</li>
                                                    <!--/***************/-->
                                                    			<?php
 }
 if($lan == "yes"){
                                              
                                                    ?>	
                          
							<li class="">
								<a href="?sec=hr&mod=languages&action=languages">
									<i class="menu-icon fa fa-caret-right"></i>
Languages
                                                                </a>

								<b class="arrow"></b>
							</li>
                                                        <?php
 }
                                                        ?>
                                                        
                                                </ul>
					</li>
<?php
 }
?>
<!--/****************3********************/-->
<?php
                                                             $rules = new role();
 $rul = $rules->rolesetup($id_account,"rules");
 $rul=$rul["view_all"];
                                                    
 if($rul=="yes"){  
 ?>	
					<li class="">
						<a href="#" class="dropdown-toggle">
							               <i class="menu-icon fa fa-caret-right"></i> 
							<span class="menu-text"> 
Employment Status 
 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
                                                    <!--/***************/-->
							<li class="">
								<a href="?sec=hr&mod=rules&action=rules">
									<i class="menu-icon fa fa-caret-right"></i>
Employment Status 
                                                                </a>

								<b class="arrow"></b>
							</li>

                                                        
                                                </ul>
					</li>
                                        <?php
 }
                                        ?>
<!--/****************4********************/-->
<?php
                                                             $payroll_categories = new role();
 $pc = $payroll_categories->rolesetup($id_account,"payroll_categories");
 $pc=$pc["view_all"];
                                                             $payroll_groups = new role();
 $pg = $payroll_groups->rolesetup($id_account,"payroll_groups");
 $pg=$pg["view_all"];
                                                    
 if($pc=="yes"||$pg=="yes"){?>
					<li class="">
						<a href="#" class="dropdown-toggle">
							               <i class="menu-icon fa fa-caret-right"></i> 
							<span class="menu-text"> 
Payroll Setup
 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
                                                    <!--/***************/-->
							
                                                                                                      			<?php
 if($pc == "yes"){
                                              
                                                    ?>	
  
                                                    <li class="">
								<a href="?sec=hr&mod=payroll_categories&action=payroll_categories">
									<i class="menu-icon fa fa-caret-right"></i>
Payroll Categories
                                                                </a>

								<b class="arrow"></b>
							</li>
<?php
 }
   if($pg == "yes"){
  
?>
                                                    <!--/***************/-->
							<li class="">
								<a href="?sec=hr&mod=payroll_groups&action=payroll_groups">
									<i class="menu-icon fa fa-caret-right"></i>

Payroll Groups
                                                                </a>

								<b class="arrow"></b>
							</li>
                                                        <?php
   }
                                                        ?>
                                                    <!--/***************/-->
<!--							<li class="">
								<a href="?sec=hr&mod=pay_slip&action=pay_slip">
									<i class="menu-icon fa fa-caret-right"></i>
Pay Slip Setup

                                                                </a>

								<b class="arrow"></b>
							</li>-->
                                                        
                                                </ul>
					</li>
<?php
 }
?>
                                        
                                        <!--/************************************/-->
                             <?php
                                                             $insurance_setup = new role();
 $is = $insurance_setup->rolesetup($id_account,"insurance_setup");
 $is=$is["view_all"];
                                                    
 if($is=="yes"){  
 ?>	
           
					<li class="">
						<a href="#" class="dropdown-toggle">
							               <i class="menu-icon fa fa-caret-right"></i> 
							<span class="menu-text"> 
Insurance Setup
 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
                                                    <!--/***************/-->
							<li class="">
								<a href="?sec=hr&mod=insurance_setup&action=insurance_setup">
									<i class="menu-icon fa fa-caret-right"></i>
Insurance Setup                                                                </a>

								<b class="arrow"></b>
							</li>

                                                    <!--/***************/-->
							        
                                                </ul>
					</li>
                                        <?php
 }
                                        ?>
<!--/************************************/-->
                           <?php
                                                             $tax = new role();
 $taxxf = $tax->rolesetup($id_account,"tax");
 $taxxf=$taxxf["view_all"];
                                                    
 if($taxxf=="yes"){  
 ?>
<li class="">
						<a href="#" class="dropdown-toggle">
							               <i class="menu-icon fa fa-caret-right"></i> 
							<span class="menu-text"> 
Taxes Setup

 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
                                                    <!--/***************/-->
							<li class="">
								<a href="?sec=hr&mod=tax&action=tax">
									<i class="menu-icon fa fa-caret-right"></i>
Taxes Setup
                                                                </a>

								<b class="arrow"></b>
							</li>

                                                    <!--/***************/-->
							        
                                                </ul>
					</li>
                                        <?php
 }
                                        ?>
<!--/************************************/-->
					<li class="">
						<a href="#" class="dropdown-toggle">
							               <i class="menu-icon fa fa-caret-right"></i> 
							<span class="menu-text"> 
Leaves Rules Setup
 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
                                                    <!--/***************/-->
							<li class="">
								<a href="?sec=hr&mod=leaves_rules&action=leaves_rules">
									<i class="menu-icon fa fa-caret-right"></i>
Leaves Rules Setup
                                          </a>

								<b class="arrow"></b>
							</li>

                                                    <!--/***************/-->
							        
                                                </ul>
					</li>

                                        
<!--/************************************/-->

<?php
                                                      $application = new role();
 $appl = $application->rolesetup($id_account,"application");
 $appl=$appl["view_all"];
                                                              $application_1 = new role();
 $ati = $application_1->rolesetup($id_account,"appointment");
 $ati=$ati["view_all"];
                                                             $application_archived= new role();
 $archi= $application_archived->rolesetup($id_account,"application_archived");
 $archi=$archi["view_all"];
                                                    
 if($appl=="yes"||$ati=="yes"||$archi=="yes"){  
 ?>		
<li class="">
						<a href="#" class="dropdown-toggle">
							               <i class="menu-icon fa fa-caret-right"></i> 
							<span class="menu-text"> 
User Application </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
                                                    <!--/***************/-->
<?php
 if($appl == "yes"){
                                              
                                                    ?>	
	
                                                    <li class="">
								<a href="?sec=hr&mod=application&action=application">
									<i class="menu-icon fa fa-caret-right"></i>
User Application                                          </a>

								<b class="arrow"></b>
							</li>
                                                        <?php
 }
 if($ati == "yes"){
 
                                                        ?>
                                                        <li class="">
								<a href="?sec=hr&mod=appointment&action=appointment">
									<i class="menu-icon fa fa-caret-right"></i>
Appointment                                         </a>

								<b class="arrow"></b>
							</li>
                                                    <?php
 } if($archi == "yes"){

                                                    ?>
                                                        <li class="">
								<a href="?sec=hr&mod=application_archived&action=application_archived">
									<i class="menu-icon fa fa-caret-right"></i>
Archived Application                                    </a>

								<b class="arrow"></b>
							</li>
                                                        <?php
 }
                                                        ?>
                                                    <!--/***************/-->
							        
                                                </ul>
					</li>
<?php
}
?>
                                        
<!--/************************************/-->
					<li class="">
						<a href="#" class="dropdown-toggle">
							               <i class="menu-icon fa fa-caret-right"></i> 
							<span class="menu-text"> 
User Account </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
                                                    <!--/***************/-->
							<li class="">
								<a href="?sec=hr&mod=account&action=account">
									<i class="menu-icon fa fa-caret-right"></i>
User Account                                          </a>

								<b class="arrow"></b>
							</li>
                                                        
	<li class="">
								<a href="?sec=hr&mod=data&action=data">
									<i class="menu-icon fa fa-caret-right"></i>
Import / Export Data                                          </a>

								<b class="arrow"></b>
							</li>

                                                    <!--/***************/-->
	<li class="">
								<a href="?sec=hr&mod=period&action=period">
									<i class="menu-icon fa fa-caret-right"></i>
First Approve Probation Period                                       </a>

								<b class="arrow"></b>
							</li>

                                                    <!--/***************/-->
	<li class="">
								<a href="?sec=hr&mod=periodnd&action=periodnd">
									<i class="menu-icon fa fa-caret-right"></i>
Second  Approve Probation Period                                       </a>

								<b class="arrow"></b>
							</li>

                                                    <!--/***************/-->
							        
                                                </ul>
					</li>
<!--/************************************/-->
				<li class="">
						<a href="#" class="dropdown-toggle">
							               <i class="menu-icon fa fa-caret-right"></i> 
							<span class="menu-text"> 
Leaves 
 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
                                                    <!--/***************/-->
							<li class="">
								<a href="?sec=hr&mod=leaves&action=leaves_view">
									<i class="menu-icon fa fa-caret-right"></i>
My Leaves
                                          </a>

								<b class="arrow"></b>
							</li>
<li class="">
								<a href="?sec=hr&mod=leaves&action=leaves">
									<i class="menu-icon fa fa-caret-right"></i>
Users Leaves
                                          </a>

								<b class="arrow"></b>
							</li>
<li class="">
								<a href="?sec=hr&mod=leaves&action=regest">
									<i class="menu-icon fa fa-caret-right"></i>
Leaves Requests
                                          </a>

								<b class="arrow"></b>
							</li>

                                                    <!--/***************/-->
							        
                                                </ul>
					</li>
<!--/************************************/-->
				<li class="">
						<a href="#" class="dropdown-toggle">
							               <i class="menu-icon fa fa-caret-right"></i> 
							<span class="menu-text"> 
privileges 
 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
                                                    <!--/***************/-->
							<li class="">
								<a href="?sec=hr&mod=privileges&action=privileges">
									<i class="menu-icon fa fa-caret-right"></i>
Add privileges
                                          </a>

								<b class="arrow"></b>
							</li>


                                                    <!--/***************/-->
							        
                                                </ul>
					</li>
                                        <!--/****************************/-->
<!--/************************************/-->
				<li class="">
						<a href="#" class="dropdown-toggle">
							               <i class="menu-icon fa fa-caret-right"></i> 
							<span class="menu-text"> 
Attendance & Time Sheet 
 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
                                                    <!--/***************/-->
							<li class="">
								<a href="?sec=hr&mod=attendance&action=attendance">
									<i class="menu-icon fa fa-caret-right"></i>
Time Sheet
                                          </a>

								<b class="arrow"></b>
							</li>
<li class="">
								<a href="?sec=hr&mod=timesheet&action=timesheet">
									<i class="menu-icon fa fa-caret-right"></i>
Attendance
                                          </a>

								<b class="arrow"></b>
							</li>


                                                    <!--/***************/-->
							        
                                                </ul>
					</li>
<!--/************************************/-->
				<li class="">
						<a href="#" class="dropdown-toggle">
							               <i class="menu-icon fa fa-caret-right"></i> 
							<span class="menu-text"> 
PaySilp  
 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
                                                    <!--/***************/-->
							<li class="">
								<a href="?sec=hr&mod=payslip&action=payslip_generate">
									<i class="menu-icon fa fa-caret-right"></i>
Generate Payslip
                                          </a>

								<b class="arrow"></b>
							</li>
<li class="">
								<a href="?sec=hr&mod=payslip&action=payslip_second">
									<i class="menu-icon fa fa-caret-right"></i>
Second Approve Payslip
                                          </a>

								<b class="arrow"></b>
							</li>
<li class="">
								<a href="?sec=hr&mod=payslip&action=stop">
									<i class="menu-icon fa fa-caret-right"></i>
Stop  Payslip
                                          </a>

								<b class="arrow"></b>
							</li>


                                                    <!--/***************/-->
							        
                                                </ul>
					</li>
<!--/************************************/-->
<?php
foreach ($sub as $key=>$val)
{?>
    <li class="">
						<a href="#" class="dropdown-toggle">
							               <i class="menu-icon fa fa-caret-right"></i> 
							<span class="menu-text"> 
<?php echo $key;?>  
 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
                                                    <!--/***************/-->
				
    <?php
    foreach ($val as $keys=>$vals)
        {
        $dep = $add->rolesetup($id_account,$vals["mod"]);
echo $dep=$dep["view_all"];
         if($ski == "yes"){

        
?>
    							<li class="">
                                                            <a href="?sec=hr&mod=<?php echo $vals["mod"]?>&action=<?php echo $vals["action"]?>">
									<i class="menu-icon fa fa-caret-right"></i>
<?php echo $keys?>
                                          </a>

								<b class="arrow"></b>
							</li>

    <?php 
         } 
        } 
       ?>    </ul>
					</li>
                                        <!--/****************************/-->

        <!--//////////-->
</ul>
</li>
        <?php
}
?>


                                                    <!--/***************/-->
							        
                                             
<!--/***********************************************/-->


                                        
                                        <!--/************************************/-->
					
<!--					<li class="">
						<a href="widgets.html">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Widgets </span>
						</a>

						<b class="arrow"></b>
					</li>
-->
					
				</ul><!-- /.nav-list -->
<!--///////////////////////////////////////////////////////////////////////////////////-->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>
			<div class="main-content">
                            
			<!--/*******************table****************/-->
                            <?php

           if($_GET['sec'])
                            {
                            	$section_name="./app/view/".$_GET['sec']."/";
        if($_GET['mod']){
            $mod_name =$section_name .$_GET['mod']."/";

               if($_GET['action'])
                           {

                                  $url =$mod_name.$_GET['action'].".php";
                                  if(is_file($url))
                                  {

                                            include $url;
                                  }
                             else
                                  {
                                            echo 'requested action is not found !';
                                  }
                           } 
                          }
                      else 
                          {
                          	       echo 'requested mod is not found !';

                          ?>

                              <?php
//                                         

                          }
                }
                else
                {
                	?>
                             <meta http-equiv="refresh" content="0;url=./index.php?sec=hr&mod=user&action=profile"/>

             <?php   }
                  ?>  
                       		<!--/*******************endtabol****************/-->

                        
                        </div><!-- /.main-content -->
                }

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">IStudent SMS HR  </span>
							Application &copy; 2015-2018
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
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
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="assets/js/dataTables.tableTools.min.js"></script>
		<script src="assets/js/dataTables.colVis.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				//initiate dataTables plugin
				var oTable1 = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.dataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,null, null, null,
					  { "bSortable": false }
					],
					"aaSorting": [],
			
					//,
					//"sScrollY": "200px",
					//"bPaginate": false,
			
					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element
			
					//"iDisplayLength": 50
			    } );
				//oTable1.fnAdjustColumnSizing();
			
			
				//TableTools settings
				TableTools.classes.container = "btn-group btn-overlap";
				TableTools.classes.print = {
					"body": "DTTT_Print",
					"info": "tableTools-alert gritter-item-wrapper gritter-info gritter-center white",
					"message": "tableTools-print-navbar"
				}
			
				//initiate TableTools extension
				var tableTools_obj = new $.fn.dataTable.TableTools( oTable1, {
					"sSwfPath": "assets/swf/copy_csv_xls_pdf.swf",
					
					"sRowSelector": "td:not(:last-child)",
					"sRowSelect": "multi",
					"fnRowSelected": function(row) {
						//check checkbox when row is selected
						try { $(row).find('input[type=checkbox]').get(0).checked = true }
						catch(e) {}
					},
					"fnRowDeselected": function(row) {
						//uncheck checkbox
						try { $(row).find('input[type=checkbox]').get(0).checked = false }
						catch(e) {}
					},
			
					"sSelectedClass": "success",
			        "aButtons": [
						{
							"sExtends": "copy",
							"sToolTip": "Copy to clipboard",
							"sButtonClass": "btn btn-white btn-primary btn-bold",
							"sButtonText": "<i class='fa fa-copy bigger-110 pink'></i>",
							"fnComplete": function() {
								this.fnInfo( '<h3 class="no-margin-top smaller">Table copied</h3>\
									<p>Copied '+(oTable1.fnSettings().fnRecordsTotal())+' row(s) to the clipboard.</p>',
									1500
								);
							}
						},
						
						{
							"sExtends": "csv",
							"sToolTip": "Export to CSV",
							"sButtonClass": "btn btn-white btn-primary  btn-bold",
							"sButtonText": "<i class='fa fa-file-excel-o bigger-110 green'></i>"
						},
						
						{
							"sExtends": "pdf",
							"sToolTip": "Export to PDF",
							"sButtonClass": "btn btn-white btn-primary  btn-bold",
							"sButtonText": "<i class='fa fa-file-pdf-o bigger-110 red'></i>"
						},
						
						{
							"sExtends": "print",
							"sToolTip": "Print view",
							"sButtonClass": "btn btn-white btn-primary  btn-bold",
							"sButtonText": "<i class='fa fa-print bigger-110 grey'></i>",
							
							"sMessage": "<div class='navbar navbar-default'><div class='navbar-header pull-left'><a class='navbar-brand' href='#'><small>Optional Navbar &amp; Text</small></a></div></div>",
							
							"sInfo": "<h3 class='no-margin-top'>Print view</h3>\
									  <p>Please use your browser's print function to\
									  print this table.\
									  <br />Press <b>escape</b> when finished.</p>",
						}
			        ]
			    } );
				//we put a container before our table and append TableTools element to it
			    $(tableTools_obj.fnContainer()).appendTo($('.tableTools-container'));
				
				//also add tooltips to table tools buttons
				//addding tooltips directly to "A" buttons results in buttons disappearing (weired! don't know why!)
				//so we add tooltips to the "DIV" child after it becomes inserted
				//flash objects inside table tools buttons are inserted with some delay (100ms) (for some reason)
				setTimeout(function() {
					$(tableTools_obj.fnContainer()).find('a.DTTT_button').each(function() {
						var div = $(this).find('> div');
						if(div.length > 0) div.tooltip({container: 'body'});
						else $(this).tooltip({container: 'body'});
					});
				}, 200);
				
				
				
				//ColVis extension
				var colvis = new $.fn.dataTable.ColVis( oTable1, {
					"buttonText": "<i class='fa fa-search'></i>",
					"aiExclude": [0, 6],
					"bShowAll": true,
					//"bRestore": true,
					"sAlign": "right",
					"fnLabel": function(i, title, th) {
						return $(th).text();//remove icons, etc
					}
					
				}); 
				
				//style it
				$(colvis.button()).addClass('btn-group').find('button').addClass('btn btn-white btn-info btn-bold')
				
				//and append it to our table tools btn-group, also add tooltip
				$(colvis.button())
				.prependTo('.tableTools-container .btn-group')
				.attr('title', 'Show/hide columns').tooltip({container: 'body'});
				
				//and make the list, buttons and checkboxed Ace-like
				$(colvis.dom.collection)
				.addClass('dropdown-menu dropdown-light dropdown-caret dropdown-caret-right')
				.find('li').wrapInner('<a href="javascript:void(0)" />') //'A' tag is required for better styling
				.find('input[type=checkbox]').addClass('ace').next().addClass('lbl padding-8');
			
			
				
				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				
				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) tableTools_obj.fnSelect(row);
						else tableTools_obj.fnDeselect(row);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(!this.checked) tableTools_obj.fnSelect(row);
					else tableTools_obj.fnDeselect($(this).closest('tr').get(0));
				});
				
			
				
				
					$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});
				
				
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});
			
				
			
				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			})
		</script>
	</body>
</html>
