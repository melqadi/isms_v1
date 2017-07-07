<?php 
$id_user=$_GET["id_user"];
$from=$_GET["from"];
$to=$_GET["to"];
//$all_data = $timesheet->sheet($id_user,$from,$to);
//echo"<pre>";
//print_r($all_data);
//echo"<pre>";
//exit();
$all_data = $data_user->user($id_user);

    
if($all_data["id_rules"]["fri_day"]=="weekend"){
    $holidays[0]="Fri";
}else{$holidays[0]="";}

if($all_data["id_rules"]["sat_day"]=="weekend"){
    $holidays[1]="Sat";
}else{$holidays[1]="";}

if($all_data["id_rules"]["sun_day"]=="weekend"){
    $holidays[2]="Sun";
}else{$holidays[2]="";}

if($all_data["id_rules"]["mon_day"]=="weekend"){
    $holidays[3]="Mon";
}else{$holidays[3]="";}

if($all_data["id_rules"]["tue_day"]=="weekend"){
    $holidays[4]="Tue";
}else{$holidays[4]="";}

if($all_data["id_rules"]["wed_day"]=="weekend"){
    $holidays[5]="Wed";
}else{$holidays[5]="";}
if($all_data["id_rules"]["thu_day"]=="weekend"){
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
 $rang=$all_data["id_rules"][$lower."_day"];

if($rang=="fullday")
    {
    $hours=$all_data["id_rules"]["full_day_rules"];
    $total_hours=$total_hours+$hours;
    }elseif ($rang=="hulffay") {
                   $hours=$all_data["id_rules"]["half_day_rules"];
    $total_hours=$total_hours+$hours;
      
                 }
     }


  
                                                $file_name="View"." ".$_GET["mod"];
                                                $file_db=$_GET["action"];
                                                $file_x=$_GET["mod"];
//  $ok=$ok["edit"];
//    if($ok=="no")
//        {
//?>
<!--<meta http-equiv="refresh" content="0;url=./index.php?mod=//<?php // echo $file_x;?>&action=<?php // echo $file_x;?>"/>-->
       
            <?php // $message = 'not approve';
//
//echo "<SCRIPT> 
//alert('$message');
//</SCRIPT>";
//die();
//   
//        }


?>
		
<?php
$leav=[];
$ahh=0;
foreach ($all_data["leaves"] as $keys=>$valo)
    {
    foreach ($all_data["leaves"][$keys]["my_leaves"] as $keysh=>$valho)
    {
        if($valho["regest"]=="approve")
            {
            $leav[$ahh]=array("start"=>$valho["start"],"end"=>$valho["end"]);
            $ahh=$ahh+1;
            }
    }
    }
//echo '<pre>';
//print_r($leav);
//echo '<pre>';
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
//echo '<pre>';
//print_r($v);
//echo '<pre>';
$arr=[];
foreach ($datecoloum as $key=>$val)
    {
    $coun=count($all_data["attendance"]);
    $coo=0;
    foreach ($all_data["attendance"] as $keyy=>$vall)
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

//echo '<pre>';
//print_r($arr);
//echo '<pre>';

//echo min($v);
//echo max($v);
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
Categories                                                            <small>
									<!--<i class="ace-icon fa fa-angle-double-right"></i>-->
								</small>
							</h1>
						</div><!-- /.page-header -->
                                              
                                                    <!--/************************/-->
                                               <div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">ID  </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $all_data["id_user"];
?>" disabled="disabled">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Name  </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $all_data["f_name_user"]." ".$all_data["m_name_user"]." ".$all_data["l_name_user"];
?>" disabled="disabled">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Position  </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $all_data["id_positions"]["name_positions"];
?>" disabled="disabled">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Total Woring Days   </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo count($enddd);
?>" disabled="disabled">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Total Woring Hours  </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $total_hours;
?>" disabled="disabled">
</div>
</div><div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">To  </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $to;
?>" disabled="disabled">
</div>
</div>	
                                    
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Form  </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $from;
?>" disabled="disabled">
</div>
</div><div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">total hous work  </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $arr["tott"]["tott"];
?>" disabled="disabled">
</div>
</div>
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
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Form  </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $apsentt;
?>" disabled="disabled">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Form  </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $apsent;
?>" disabled="disabled">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Form  </label>
<div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php
echo $levs;
?>" disabled="disabled">
</div>
</div>
                                                    
                                                    &nbsp; &nbsp; &nbsp;

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
<!--        <th>ID</th>-->
        <th>Category Name</th>
        <th>Actions</th>
        <th>Actions</th>
        <th>Actions</th>
        <th>Actions</th>
</tr>

                                                                                                    <!--/**********db************/-->
												</thead>

<tbody>
    <?php
foreach($arr as $output){
if($output["stat"]!=""){
    ?>
    
        <tr>
<td>
<?php
$string = $output["date"];
$timestamp = strtotime($string);
echo date("l", $timestamp)." - ";
echo $output["date"];
?></td><td>
<?php
echo $output["start"];
?></td><td>
<?php
echo $output["end"];
?></td><td>
<?php
echo $output["tot"];
?></td><td>
<?php
echo $output["stat"];
?></td>

                
        </tr>

<?php
} }
?>



</tbody>
											</table>
										</div>
     
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        </div>
								</div>


							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
