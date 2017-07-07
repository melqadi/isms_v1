	<?php  
$id_user=$id_account;

                                                $file_name="Add"." ".$_GET["mod"];
                                                $file_db=$_GET["action"];
                                                $file_x=$_GET["mod"];

?>

	<body class="no-skin">
		
		<div class="main-container" id="main-container">
			
			
			<div class="main-content">
				<div class="main-content-inner">
					
					<div class="page-content">
						
						<div class="page-header">
							<h1>
								User Profile Page
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									3 styles with inline editable feature
								</small>
							</h1>
						</div><!-- /.page-header -->
<!--/***************************************************************************************/-->
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
    <?php
include $control.'account_c.php';
?>

								<div>
									<div id="user-profile-1" class="user-profile">
										<div class="tabbable">
											<ul class="nav nav-tabs padding-18">
												<li class="active">
													<a data-toggle="tab" href="#home">
														<i class="green ace-icon fa fa-user bigger-120"></i>
														Profile
													</a>
												</li>

												<li>
													<a data-toggle="tab" href="#feed">
														<i class="orange ace-icon fa fa-rss bigger-120"></i>
														Educational 
													</a>
												</li>

												<li>
													<a data-toggle="tab" href="#friends">
														<i class="blue ace-icon fa fa-users bigger-120"></i>
														Previuos
													</a>
												</li>

												<li>
													<a data-toggle="tab" href="#pictures">
														<i class="pink ace-icon fa fa-picture-o bigger-120"></i>
														Pictures
													</a>
												</li>
											</ul>

											<div class="tab-content no-border padding-24">
<div id="home" class="tab-pane in active">
        <div class="row">
<div class="col-xs-12 col-sm-3 center">
        <span class="profile-picture">
            
       <?php  if(empty($_SESSION['img'])){
?>
                                                            <img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" src="assets/avatars/portrait.png" alt="Jason's Photo" />

<?php
}  else {
?>
                                                            <img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" src="<?php echo $upload_file_conf;?><?php echo $id_user;?>/<?php echo $x_value["img"]; ?>" alt="Jason's Photo" />

<?php
}
?>

        </span>

        <div class="space space-4"></div>

        <a href="#" class="btn btn-sm btn-block btn-success">
                <i class="ace-icon fa fa-plus-circle bigger-120"></i>
                <span class="bigger-110">Upload Documents</span>
        </a>
  <a href="#" class="btn btn-sm btn-block btn-primary">
                <i class="ace-icon fa fa-plus-circle bigger-120"></i>
                <span class="bigger-110">Upload Profile Pic</span>
        </a>

        
</div><!-- /.col -->

<div class="col-xs-12 col-sm-9">
        <h4 class="blue">
                <span class="middle"><?php
echo $x_value["f_name_user"]." ".$x_value["m_name_user"]." ".$x_value["l_name_user"];
?></span>

                <span class="label label-purple arrowed-in-right">
                        <i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
                        <?php
     if($x_value["active"]=="")
         {echo "Active";}else{
             echo $x_value["active"];
         }                 

?>
                </span>
        </h4>

        <div class="profile-user-info">
 <!--//////////////////////////user/////////////////////////////////////////-->
<div class="profile-info-row">
        <div class="profile-info-name"> Username </div>

        <div class="profile-info-value">
                <span><?php
echo $x_value["f_name_user"]." ".$x_value["m_name_user"]." ".$x_value["l_name_user"];
?></span>
        </div>
</div>
 <!--/////////////////////address//////////////////////////////////////////////-->
<div class="profile-info-row">
        <div class="profile-info-name"> Address </div>

        <div class="profile-info-value">
                <i class="fa fa-map-marker light-orange bigger-110"></i>
                <span><?php
echo $x_value["address_user"];
?></span>
                <span><?php
echo $x_value["other_address_user"];
?></span>
        </div>
</div>
<!--///////////////////Gender/////////////////-->
<div class="profile-info-row">
        <div class="profile-info-name"> Gender </div>

        <div class="profile-info-value">
                <span><?php
echo $x_value["gender_user"];
?></span>
        </div>
</div>
<!--///////////////////Religion/////////////////-->
<div class="profile-info-row">
        <div class="profile-info-name"> Religion </div>

        <div class="profile-info-value">
                <span><?php
echo $x_value["religion_user"];
?></span>
        </div>
</div>

<div class="profile-info-row">
        <div class="profile-info-name"> Date of Birth </div>

        <div class="profile-info-value">
                <span><?php
echo $x_value["birthday_user"];
?></span>
        </div>
</div>

<div class="profile-info-row">
        <div class="profile-info-name"> National ID </div>

        <div class="profile-info-value">
                <span><?php
echo $x_value["national_user"];
?></span>
        </div>
</div>
<div class="profile-info-row">
        <div class="profile-info-name"> Nationality </div>

        <div class="profile-info-value">
                <span><?php
echo $name_nationalities;
?></span>
        </div>
</div>
<div class="profile-info-row">
        <div class="profile-info-name"> Marrital Status </div>

        <div class="profile-info-value">
                <span><?php
echo $x_value["marrital_user"];
?></span>
        </div>
</div>
<div class="profile-info-row">
        <div class="profile-info-name"> Blood Group </div>

        <div class="profile-info-value">
                <span><?php
echo $x_value["blood_user"];
?></span>
        </div>
</div>
<div class="profile-info-row">
        <div class="profile-info-name"> Email </div>

        <div class="profile-info-value">
                <span><?php
echo $x_value["email_user"];
?></span>
        </div>
</div>
<div class="profile-info-row">
        <div class="profile-info-name"> Mobile Number </div>

        <div class="profile-info-value">
                <span><?php
echo $x_value["mobile_user"]."/ ".$x_value["fax_user"]."/ ".$x_value["landline_user"];
?></span>
        </div>
</div>
</div>


<div class="profile-user-info">
<div class="profile-info-row">
        <div class="profile-info-name"> Website </div>

        <div class="profile-info-value">
                <a href="#" target="_blank">www.Istudent.com</a>
        </div>
</div>


</div>
</div><!-- /.col -->
</div><!-- /.row -->

<div class="space-20"></div>

<div class="row">
<div class="col-xs-12 col-sm-6">
<div class="widget-box transparent">
<div class="widget-header widget-header-small">
        <h4 class="widget-title smaller">
                <i class="ace-icon fa fa-check-square-o bigger-110"></i>
                Little About Me
        </h4>
</div>

<div class="widget-body">
        <div class="widget-main">
                
<div class="profile-info-row">
        <div class="profile-info-name"> Date of Joining </div>

        <div class="profile-info-value">
                <span><?php
echo $x_value["joining"];
?></span>
        </div>
</div>
<div class="profile-info-row">
        <div class="profile-info-name"> Category </div>

        <div class="profile-info-value">
                <span><?php
echo $name_categories;
?></span>
        </div>
</div>
<div class="profile-info-row">
        <div class="profile-info-name"> Department </div>

        <div class="profile-info-value">
                <span><?php
echo $name_departments;
?></span>
        </div>
</div>
<div class="profile-info-row">
        <div class="profile-info-name"> Position </div>

        <div class="profile-info-value">
                <span><?php
echo $name_positions;
?></span>
        </div>
</div>
<div class="profile-info-row">
        <div class="profile-info-name"> Employment Status </div>

        <div class="profile-info-value">
                <span><?php
echo $name_rules;
?></span>
        </div>
</div>
<div class="profile-info-row">
        <div class="profile-info-name"> Direct Manager </div>

        <div class="profile-info-value">
                <span><?php
echo $name_user;
?></span>
        </div>
</div>
<div class="profile-info-row">
        <div class="profile-info-name"> Payroll Groups </div>

        <div class="profile-info-value">
                <span><?php
echo $name_payroll_groups;
?></span>
        </div>
</div>
        </div>
</div>
</div>
</div>

<div class="col-xs-12 col-sm-6">
<div class="widget-box transparent">
<div class="widget-header widget-header-small header-color-blue2">
        <h4 class="widget-title smaller">
                <i class="ace-icon fa fa-lightbulb-o bigger-120"></i>
                My Skills
        </h4>
</div>

<div class="widget-body">
        <div class="widget-main padding-16">
               
<div class="profile-skills">
    <?php
foreach ($langes as $key=> $vald){
       ?>
<div class="progress">
        <div class="progress-bar" style="width:95%">
                <span class="pull-left"><?php 
           
          echo  $vald;

            ?></span>
                <span class="pull-right">Languages</span>
        </div>
</div>
<?php
}
?>
    <?php
foreach ($lices as $key=> $vald){
       ?>
<div class="progress">
        <div class="progress-bar progress-bar-success" style="width:85%">
                <span class="pull-left"><?php 
           
          echo  $vald;

            ?></span>

                <span class="pull-right">Licesens</span>
        </div>
</div>
<?php
}
?>
 
<?php
foreach ($skill as $key=> $vald){
       ?>   
<div class="progress">
        <div class="progress-bar progress-bar-purple" style="width:75%">
                <span class="pull-left"><?php 
           
          echo  $vald;

            ?></span>

                <span class="pull-right">Skills</span>
        </div>
</div>

<?php
}
?>
    <?php
foreach ($leav as $key=> $vald){
       ?>

<div class="progress">
        <div class="progress-bar progress-bar-warning" style="width:65%">
                <span class="pull-left"><?php 
           
          echo  $vald;

            ?></span>

                <span class="pull-right">Leaves Rules</span>
        </div>
</div>
<?php 
}
            ?>
    <?php
foreach ($taxd as $key=> $vald){
       ?>
 
<div class="progress">
        <div class="progress-bar progress-bar-danger" style="width:55%">
                <span class="pull-left"><?php 
           
          echo  $vald;

            ?></span>

                <span class="pull-right">Taxes</span>
        </div>
</div>
      <?php
}

      ?>                                        <?php
foreach ($in as $key=> $vald){
       ?>
 
<div class="progress">
        <div class="progress-bar progress-bar-purple" style="width:45%">
                <span class="pull-left"><?php 
           
          echo  $vald;

            ?></span>

                <span class="pull-right">Incionrens</span>
        </div>
</div>
      <?php
}

      ?>                                          </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</div><!-- /#home -->

<div id="feed" class="tab-pane">
        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
				<?php
include $control.'edu_c.php';

                                ?>
                                                                                            <thead>
                                                                                                    <!--/*********db*************/-->
<tr>
     
    <th>Id </th>
        <th>Educational Name  </th>
        <th>Educational Type</th>
        <th>Educational Entered</th>
        <th>Educational Completed</th>
        <th>Educational Degree</th>
     
</tr>

                                                                                                    <!--/**********db************/-->
												</thead>

<tbody>
    <?php 
foreach($res as $output){
    ?>
        <tr>
                <td>
<a href="#"><?php
echo $output["id_educational"];
?></a>
                </td>
                <td>
<?php
echo $output["name_educational"];
?></td>
<td>
<?php
echo $output["type_educational"];
?></td>

<td>
<?php
echo $output["entered_educational"];
?></td>
<td>
<?php
echo $output["completed_educational"];
?></td>

<td>
<?php
echo $output["degree_educational"];
?></td>



                
        </tr>

<?php
          }
?>



</tbody>
											</table>
										
</div><!-- /#feed -->

<div id="friends" class="tab-pane">
       <table id="dynamic-table" class="table table-striped table-bordered table-hover">
				<?php
include $control.'previuos_c.php';

                                ?>
                                                                                            <thead>
                                                                                                    <!--/*********db*************/-->
<tr>
     
    <th>Id Previuos </th>
        <th> Company Previuos </th>
        <th>Joining Previuos</th>
        <th>Leaving Previuos</th>
        <th>Position Previuos</th>
        <th>Reason Previuos</th>
        
</tr>

                                                                                                    <!--/**********db************/-->
												</thead>

<tbody>
    <?php 
foreach($res as $output){
    ?>
        <tr>
                <td>
<a href="#"><?php
echo $output["id_previuos"];
?></a>
                </td>
                <td>
<?php
echo $output["company_previuos"];
?></td>
<td>
<?php
echo $output["joining_previuos"];
?></td>

<td>
<?php
echo $output["leaving_previuos"];
?></td>
<td>
<?php
echo $output["position_previuos"];
?></td>

<td>
<?php
echo $output["reason_previuos"];
?></td>





                     </tr>

<?php
          }
?>



</tbody>
											</table>
					
</div><!-- /#friends -->

<div id="pictures" class="tab-pane">
                             
             <div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div>
									<ul class="ace-thumbnails clearfix">
<?php
include $control.'upload_file_c.php';
foreach($res as $output){

?>

<li>
<div>
<img width="150" height="150" alt="150x150" src="<?php echo $upload_file_conf;?><?php echo $id_user;?>/<?php echo $output["name"]; ?>">
<div class="text">
        <div class="inner">
                <span>    Upload Photo</span>

                <br>
                <a href="recources/file_upload/<?php echo $id_user;?>/<?php echo $output["name"]; ?>" data-rel="colorbox" class="cboxElement">
                        <i class="ace-icon fa fa-search-plus"></i>
                </a>

                <a href="<?php echo $control;?>upload_file_c.php?id_user=<?php echo $id_user; ?>&pb=pb&name=<?php echo $output["name"]; ?>">
                        <i class="ace-icon fa fa-user"></i>
                </a>

        </div>
</div>
</div>
</li>
<?php } ?>
									</ul>
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div>

</div><!-- /#pictures -->
											</div>
										</div>
									</div>
								</div>

									
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			
			
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		
		<!-- inline scripts related to this page -->
		
	</body>
