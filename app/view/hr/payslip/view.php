<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$id_user=$_GET["id_user"];
$view="view";
include $control.'payslip_c_mysq.php';

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

										<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                                                                            <thead>
<tr>
        <th>ID</th>
        <th> Name</th>
        <th> Date</th>
        <th> Position</th>
        <th>Total Working Days</th>
    
</tr>
												</thead>

<tbody>
    <?php 
$second_aprov_all=[];
    foreach($userdep as $output){
//        echo '<pre>';
//        print_r($userdep);
//        echo '<pre>';
//    exit();
    $id_now= $output[0]["id_user"];
    $month= $output[0]["month"];
    $year= $output[0]["year"];
    foreach ($output as $key=>$vlso)
        {
        if($vlso["name_filde"]=="stop")
            {
            $first_aprove=$vlso["resalt_filde"];
            }
            if($vlso["name_filde"]=="Positions Name")
            {
            $Positions_Name=$vlso["resalt_filde"];
            }
            if($vlso["name_filde"]=="User Name")
            {
            $User_Name=$vlso["resalt_filde"];
            }
            if($vlso["name_filde"]=="Actual Salary")
            {
            $Actual_Salary=$vlso["resalt_filde"];
            }
            
        }
     ob_start(); session_start();
        $id_account = $_SESSION['id_account'];
          $name=$_SESSION['username'];

$second_aprov_all[]=array("id_user"=>$id_now,"month"=>$month,"year"=>$year,"name_filde"=>"second aprove","resalt_filde"=>$name,"id_mack"=>$id_account,"count"=>"0");
 
    ?>
        <tr>
                <td>
<?php
echo $id_now;
?>
                </td>
                               <td>
<a href="?sec=hr&mod=payslip&action=view_payslip_second&id_user=<?php echo $id_now;?>&month=<?php echo $month ;?>&year=<?php echo $year ;?>" >
<?php
echo $User_Name;
?></a></td>
                <td>
         <?php echo "from: ".$month." - ".$year;?>           
                </td>
                 <td>
         <?php echo $Positions_Name; ?>           
                </td>
                <td>
                  <?php
echo $Actual_Salary;
?>
                </td>
                <td>
                  <?php
echo $first_aprove;
?>
                </td> 

                
        </tr>

<?php
   }
?>



</tbody>
											</table>
	<?php
//         echo '<pre>';
//    print_r($second_aprov_all);
//    echo '<pre>';
        ?>		
<!--                <form action="./app/controller/hr/payslip_c_mysq.php" method="post"> 
                    <input type="hidden" name="data" value="<?php // echo htmlentities(serialize($second_aprov_all));?>">
                    <input type="submit" value="second" name="second">
                </form>  -->
                                                                                    
                                                                                </div>
									</div>
								</div>

								
							</div> 
						</div>

                                                                        </div>
								</div>

