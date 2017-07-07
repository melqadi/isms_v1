<?php
error_reporting(0);

   $id_dep = $_REQUEST['str'];
  echo $id_dep ;
  echo $month = $_REQUEST['month'];
  echo $year = $_REQUEST['year'];
  
  if($month<=9)
      {
      $month="0".$month;
      }
   $start_munth = $year."-".$month."-01"; 
   $end_munth =date("Y-m-t", strtotime($start_munth));
$second_approve="second";
   if(empty($year))
       {
              echo 'ahmed';

exit();
       }
       if(empty($month))
       {
              echo 'ahmed';

exit();
       }
       if($id_dep=="")
       {
           echo 'ahmed';
exit();
       }
   include_once '../../../controller/hr/payslip_c.php';
   include_once '../../../lib/all_data_m.php';              
   include_once '../../../lib/weekend.php';              
   include_once '../../../lib/timesheet_m.php';              
   include_once '../../../lib/payslip_m.php';              
   include_once '../../../lib/payslip_mysql.php';              

?>
<hr>
<div class="row">
							<div class="col-xs-12">
						
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
    foreach ($output as $key=>$vlso)
        {
        if($vlso["name_filde"]=="first aprove")
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
         <?php echo "from: ".$start_munth." => to: ".$end_munth;?>           
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
                <form action="./app/controller/hr/payslip_c_mysq.php" method="post"> 
                    <input type="hidden" name="data" value="<?php echo htmlentities(serialize($second_aprov_all));?>">
                    <input type="submit" value="second" name="second">
                </form>  
                                                                                    
                                                                                    
                                                                                </div>
									</div>
								</div>

								
							</div> 
						</div>