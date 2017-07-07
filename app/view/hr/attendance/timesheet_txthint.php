<?php
error_reporting(0);

    
   $from = $_REQUEST['from'];
  echo   $from ; 
   $to = $_REQUEST['to'];
  echo   $to ;
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
        <th>Total leaves</th>
        <th>Total empty</th>
        <th>Total work day</th>
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
 
$datecoloum=$enddd[1];
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
$leav=[];
$ahh=0;
foreach ($user_all_data["leaves"] as $keys=>$valo)
    {
    foreach ($user_all_data["leaves"][$keys]["my_leaves"] as $keysh=>$valho)
    {
        if($valho["regest"]=="approve")
            {
            $leav[$ahh]=array("start"=>$valho["start"],"end"=>$valho["end"]);
            $ahh=$ahh+1;
            }
    }
    }
    $i=0;

foreach ($leav as $tgt=>$gbf){
$start = new DateTime($gbf["start"]);
$end = new DateTime($gbf["end"]);
$end->modify('+1 day');
$interval = $end->diff($start);
$days = $interval->days;
$period = new DatePeriod($start, new DateInterval('P1D'), $end);

foreach($period as $dt) {
    $curr = $dt->format('D');
    if ($curr == $holidays[0] || $curr == $holidays[1]|| $curr == $holidays[2]|| $curr == $holidays[3]|| $curr == $holidays[4]|| $curr == $holidays[5]|| $curr == $holidays[6]) {
        $days--;
    
        
    }  else {
    $dd = $dt->format('Y-m-d');
    $tar[$i]= $dd;   
    $i=$i+1;
    }
    
}


}
$result = array_unique($tar);
$r=0;
$v=[];
foreach ($result as $fgdv=>$dvf)
    {
    $v[$r]=$dvf;
    $r=$r+1;
    }
    
    $arr=[];
foreach ($datecoloum as $key=>$val)
    {
    $coun=count($user_all_data["attendance"]);
    $coo=0;
    foreach ($user_all_data["attendance"] as $keyy=>$vall)
        {
        if($val ==$vall["date"])
            {
            $ddd=(strtotime($vall["end"])-strtotime($vall["start"]))/60;
            "<hr>";
            $min=date('H:i', mktime(0,$ddd));
            $arr[$key]=array("date"=>$vall["date"],"start"=>$vall["start"],"end"=>$vall["end"],"tot"=>$min,"stat"=>"apsent" );


                    
            }  else {
                $coo=$coo+1;
            } 
               
            }
                $cd=0;
    $couns=count($v);

        if($coo==$coun)
            {

                        foreach ($v as $fr=>$fv)
                            {
                            if($fv==$val)
                                {
                                  $arr[$key]=array("date"=>$val,"start"=>"","end"=>"","tot"=>"","stat"=>"leavs");
                                }else {
                $cd=$cd+1;
            } 
                            }
                            if($couns==$cd)
            {
                        $arr[$key]=array("date"=>$val,"start"=>"","end"=>"","tot"=>"","stat"=>"empty");
            }
            }  
    }
   
foreach ($arr as $key=>$val)
{ 
if($val["tot"]!="")
{
$tot=$val["tot"];
$rtyu=date("i", strtotime($tot)); 
$rtsu=date("H", strtotime($tot)); 
$dhu=$rtyu+$dhu;
$dhd=$rtsu+$dhd;
}
}
$r=$dhu/60; 
$fd=floor($dhu / 60)+$dhd;
$fdds=($dhu -   floor($dhu / 60) * 60);
if($fdds>9){$fdds=$fdds;}  else {$fdds="0".$fdds;}
 $hours = $fd.':'.$fdds;
$arr["tott"]["tott"]=$hours;

//    
//echo '<pre>';
//print_r($arr);
//echo '<pre>';

//echo '<pre>';
//print_r($leav);
//echo '<pre>';

     
     
//echo '<pre>';
//print_r($user_all_data);
//echo '<pre>';



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
                <?php
$levs=0;
$apsent=0;
$apsentt=0;
foreach ($arr as $aa)
    {
    if($aa["stat"]=="leavs")
        {
        $levs=$levs+1;
        }  elseif ($aa["stat"]=="empty") {
        $apsent=$apsent+1;
            
        }  elseif ($aa["stat"]=="apsent") {
            $apsentt=$apsentt+1;
        }
    }
?> 
                 <td>
         <?php
         
         
         echo $levs; 
         ?>           
                </td>
                 <td>
         <?php  
         
     echo $apsent;
         ?>           
                </td>
                <td>
         <?php  
         
     echo $apsentt;
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