<?php
error_reporting(0);

   $id_dep = $_REQUEST['str'];
   $id_dep ;
   $month = $_REQUEST['month'];
   $deu = $_REQUEST['deu'];
if($deu=="false")
      {
       $deu="groos";
      } elseif ($deu=="true") {
      $deu="basic";

}
   $year = $_REQUEST['year'];
  
  echo $dlay = $_REQUEST['dlay'];
  echo $leavs = $_REQUEST['leavs'];
  echo $over = $_REQUEST['over'];
  if($month<=9)
      {
      $month="0".$month;
      }
   $start_munth = $year."-".$month."-01"; 
   $end_munth =date("Y-m-t", strtotime($start_munth));

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
$frist_aprov_all=[];
    foreach($userdep as $output){
    $id_now= $output["id_user"];
    
    $pay = new pay();

    $slip = $pay->slip($id_now,$start_munth,$end_munth,$deu,"0","0","0","0");
$payslips = new payslip();

    $mys = $payslips->mysql($slip,$month,$year,$dlay,$leavs,$over);
$frist_aprov_all[]=$mys;
    
$id_departments=$slip["all_data"][0]["id_departments"]["id_departments"];
if($id_departments==$id_dep){

    ?>
        <tr>
                <td>
<?php
echo $slip["all_data"][0]["id_user"];
?>
                </td>
                               <td>
<a href="?sec=hr&mod=payslip&action=view_payslip&id_user=<?php echo $id_now;?>&month=<?php echo $month ;?>&year=<?php echo $year ;?>&deu=<?php echo $deu ;?>&dlay=<?php echo $dlay ;?>&leavs=<?php echo $leavs ;?>&over=<?php echo $over ;?>" >
<?php
echo $slip["all_data"][0]["f_name_user"]." ".$slip["all_data"][0]["m_name_user"]." ".$slip["all_data"][0]["l_name_user"];
?></a></td>
                <td>
         <?php echo "from: ".$start_munth." => to: ".$end_munth;?>           
                </td>
                 <td>
         <?php echo $slip["all_data"][0]["id_positions"]["name_positions"] ?>           
                </td>
                <td>
                  <?php
$net=$slip["net_salary_of_absence"];
if($dlay=="true")
{
 $net=$net-$slip["dlay"];   
} 
if ($leavs=="true") {
    if($slip[0][1]=="delay"){
     $net=$net-$slip[0][0];  
        
    }
} 
if ($over=="true") {
    if($slip[0][1]=="over"){
     $net=$net+$slip[0][0];  
 
        
    }
}        
echo $net;
?>
                </td>
                 

                
        </tr>

<?php
}   }
?>



</tbody>
											</table>
	<?php
        // echo '<pre>';
//    print_r($frist_aprov_all);
//    echo '<pre>';
        ?>		
                <form action="./app/controller/hr/payslip_c_mysq.php" method="post"> 
                    <input type="hidden" name="data" value="<?php echo htmlentities(serialize($frist_aprov_all));?>">
                    <input type="submit" value="aproveall" name="aproveall">
                </form>  
                                                                                    
                                                                                </div>
									</div>
								</div>

								
							</div> 
						</div>