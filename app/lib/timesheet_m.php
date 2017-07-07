<?php

include_once 'app/model/mysql_crud.php';
include_once 'app/lib/weekend.php';
include_once 'app/lib/all_data_m.php';


class time
{
    
//The function returns the no. of business days between two dates and it skips the holidays
function sheet($id_user,$from,$to){
              $return = [];
$data_user = new alldata();
$all_data = $data_user->user($id_user);

    /*********************************************/
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
/********************************************************/
$hhahah=$enddd;
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
    /*********************************************************/
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
    /***********************************************************/
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

/*******************************************************/
$arr=[];
$worning=[];
$wor_leav=[];
foreach ($datecoloum as $key=>$val)
    {
    $coun=count($all_data["attendance"]);
    $coo=0;
    foreach ($all_data["attendance"] as $keyy=>$vall)
        {
        if($val ==$vall["date"])
            {
              $timestamp = strtotime($val);
                                $uhnk= date("D", $timestamp);
                                $low=strtolower($uhnk);
                          $rang=$all_data["id_rules"][$low."_day"];
if($rang=="fullday"){$wowos=$all_data["id_rules"]["full_day_rules"];}elseif ($rang=="hulffay") {
                        $wowos=$all_data["id_rules"]["half_day_rules"];
                    }
            $ddd=(strtotime($vall["end"])-strtotime($vall["start"]))/60;
            $min=date('H:i', mktime(0,$ddd));
            $start_day=$all_data["id_rules"]["start_day"];
            $dlay=(strtotime($vall["start"])-strtotime($start_day))/60;
            $dl=date('H:i', mktime(0,$dlay));

            $arr[$key]=array("date"=>$vall["date"],"start"=>$vall["start"],"end"=>$vall["end"],"tot"=>$min,"stat"=>"apsent","dlay"=>$dl,"woek"=>$wowos );


                    
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
           $timestamp = strtotime($val);
                                $uhnk= date("D", $timestamp);
                                $low=strtolower($uhnk);
                          $rang=$all_data["id_rules"][$low."_day"];
                    if($rang=="fullday")
                    {
                       $wow=$all_data["id_rules"]["full_day_rules"];
                       
                    }
                    elseif ($rang=="hulffay") 
                    {
                        $wow=$all_data["id_rules"]["half_day_rules"];
                    }
                                $arr[$key]=array("date"=>$val,"start"=>"","end"=>"","tot"=>"","stat"=>"leavs","woek"=>$wow);
                               $wor_leav[]=$wow;
                                }else {
                $cd=$cd+1;
            } 
                            }
                            if($couns==$cd)
            {
                                $timestamp = strtotime($val);
                                $uhnk= date("D", $timestamp);
                                $low=strtolower($uhnk);
                          $rang=$all_data["id_rules"][$low."_day"];
if($rang=="fullday"){$wowo=$all_data["id_rules"]["full_day_rules"];}elseif ($rang=="hulffay") {
                        $wowo=$all_data["id_rules"]["half_day_rules"];
                    }
//                           $all_data["id_rules"][];

                        $arr[$key]=array("date"=>$val,"start"=>"","end"=>"","tot"=>"","stat"=>"empty","woek"=>$wowo);
                        $worning[]=$wowo;
                        }
            }  
    }
 /******************************************************/
    $fe=0;
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

if($val["dlay"]!="")
{
 $dlay=$val["dlay"];
 $dtyu=date("i", strtotime($dlay)); 
 $dtsu=date("H", strtotime($dlay)); 
 $dh=$dtyu+$dh;
 $dgg=$dtsu+$dgg;
$fe=$fe+1; 
}

}

 $f=floor($dh / 60)+$dgg;
$fds=($dh -   floor($dh / 60) * 60);
if($fds>9){$fds=$fds;}  else {$fds="0".$fds;}
if($f>9){$f=$f;}  else {$f="0".$f;}
 $dlayyy = $f.':'.$fds;
 
$fd=floor($dhu / 60)+$dhd;
$fdds=($dhu -   floor($dhu / 60) * 60);
if($fdds>9){$fdds=$fdds;}  else {$fdds="0".$fdds;}
if($fd>9){$fd=$fd;}  else {$fd="0".$fd;}

 $hours = $fd.':'.$fdds;
/*******************************************/
$kjfhbdkjv=array_sum($worning);
$kjfh=array_sum($wor_leav);

    $return[] = $all_data;  //all data of user
    $return[] = $hhahah;    //all day word mn 3'er al agzat al rsmya
    $return[] = $total_hours; //3dd s3at al sho3l al mfroda
    $return[] = $leav;      //agzat al atwaf2 3leha fe al mda dh
    $return[] = $v;         //ayam al levs al 5dha
    $return[] = $arr;       //time sheet
    $return[] = $hours;     //kam sa3a sho3'l f3ly
    $return[] = $dlayyy;    //kam sa3a sho3'l f3ly
    $return[] = $kjfhbdkjv; //kam sa3a sho3'l f3ly
    $return[] = $kjfh;      //kam sa3a sho3'l f3ly
    $return[] = $fe;      //kam sa3a sho3'l f3ly

    return $return;
    
 

 
}

//Example:

// => will return 7

}
?>
