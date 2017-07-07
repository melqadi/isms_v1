<?php
error_reporting(0);

    
   $from = $_REQUEST['from'];
     $from ; 
   $to = $_REQUEST['to'];
     $to ;
   $id_dep = $_REQUEST['str'];
     $id_dep ;
   
   if(empty($from))
       {
   
exit();
       }
       if(empty($to))
       {
   
exit();
       }
       if($id_dep=="")
       {
           echo 'ahmed';
exit();
       }
       include_once '../../../controller/hr/attendance_c.php';              
   include_once '../../../lib/all_data_m.php';              
   include_once '../../../lib/weekend.php';              

?>
<hr>
<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
						
								<div class="row">
									<div class="col-xs-12">
										
										<div class="clearfix">
                                                                                    <div class="pull-right tableTools-container">
                                                                                        
                                                                                    </div>
										</div>
										
										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                                                                            <thead>
                                                                                                    <!--/*********db*************/-->
<tr>
        <th>ID</th>
        <th> Name</th>
        <th> Date</th>
        <th> Position</th>
        <th>Total Working Days</th>
        <th>Total Working Hours</th>
</tr>

                                                                                                    <!--/**********db************/-->
												</thead>

<tbody>
    <?php 
foreach($userdep as $output){
    $id_now= $output["user_id"];
    
    $data_user = new alldata();

    $user_all_data = $data_user->user($id_now);
$id_departments=$user_all_data["id_departments"]["id_departments"];
if($id_departments==$id_dep){

    ?>
        <tr>
                <td>
<?php
echo $user_all_data["id_user"];
?>
                </td>
                <?php
                
    
if($user_all_data["id_rules"]["fri_day"]=="weekend"){
    $holidays[0]="Fri";
}else{$holidays[0]="";}

if($user_all_data["id_rules"]["sat_day"]=="weekend"){
    $holidays[1]="Sat";
}else{$holidays[1]="";}

if($user_all_data["id_rules"]["sun_day"]=="weekend"){
    $holidays[2]="Sun";
}else{$holidays[2]="";}

if($user_all_data["id_rules"]["mon_day"]=="weekend"){
    $holidays[3]="Mon";
}else{$holidays[3]="";}

if($user_all_data["id_rules"]["tue_day"]=="weekend"){
    $holidays[4]="Tue";
}else{$holidays[4]="";}

if($user_all_data["id_rules"]["wed_day"]=="weekend"){
    $holidays[5]="Wed";
}else{$holidays[5]="";}
if($user_all_data["id_rules"]["thu_day"]=="weekend"){
    $holidays[6]="Thu";
}else{$holidays[6]="";}
   
    $week = new weekend();
$enddd = $week->getWorkingDays($from,$to,$holidays);
$enddd=$enddd[0];
$total_hours=0;
 foreach ($enddd as $key=>$val)
     {
     $lower=strtolower($val);
 $rang=$user_all_data["id_rules"][$lower."_day"];

if($rang=="fullday")
    {
    $hours=$user_all_data["id_rules"]["full_day_rules"];
    $total_hours=$total_hours+$hours;
    }elseif ($rang=="hulffay") {
                   $hours=$user_all_data["id_rules"]["half_day_rules"];
    $total_hours=$total_hours+$hours;
      
                 }
     }

                ?>
                <td><a href="?sec=hr&mod=timesheet&action=timesheet_by_id&id_user=<?php echo $user_all_data["id_user"] ;?>&from=<?php echo $from ;?>&to=<?php echo $to ;?>">
<?php
echo $user_all_data["f_name_user"]." ".$user_all_data["m_name_user"]." ".$user_all_data["l_name_user"];
?></a></td>
                <td>
         <?php echo "from: ".$from." => to: ".$to;?>           
                </td>
                 <td>
         <?php echo $user_all_data["id_positions"]["name_positions"] ?>           
                </td>
                 <td>
         <?php
         
         
         echo count($enddd); 
         ?>           
                </td>
                 <td>
         <?php  
         
     echo $total_hours;
         ?>           
                </td>
                

                
        </tr>

<?php
}   }
?>



</tbody>
											</table>
										</div>
									</div>
								</div>

								
							</div><!-- /.col -->
						</div>