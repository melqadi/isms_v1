<?php
class Bar 
{  
    public function total()
    {

        if(!isset($_GET["mod"])){  include '../IndexController.php';     } 
  


      $return = [];

        $expressionnn = getdate();
$day = $expressionnn[mday];
$month = $expressionnn[mon];
$year = $expressionnn[year];
$hours = $expressionnn[hours];
$min = $expressionnn[minutes];
$sic = $expressionnn[seconds];


if (10 > $day) {
    $dayy = "0" . $day;
} else {
    $dayy = $day;
}

if (10 > $month) {
    $monthh = "0" . $month;
} else {
    $monthh = $month;
}

if (10 > $hours) {
    $hourss = "0" . $hours;
    $hoursss = $hourss + 1;
} else {
    $hourss = $hours;
    $hoursss = $hourss + 1;
}

if (10 > $min) {
    $minn = "0" . $min;
} else {
    $minn = $min;
}

if (10 > $sic) {
    $sicc = "0" . $sic;
} else {
    $sicc = $sic;
}


$ha = $year . "-" . $monthh . "-" . $dayy . ' ' . $hoursss . ":" . $minn . ":" . $sicc . ".000000";
$ttt = date('g.i a', strtotime($ha));
$time = $ttt;
$ttgt = date('g a', strtotime($ha));
$timeg = $ttgt;
$y = date('Y', strtotime($ha));
$m = date('m', strtotime($ha));
$d = date('d', strtotime($ha));
$db = new Database();
$db->connect();
$db->select("user",'*',null,"`periode` != 'approve' ORDER BY `periode` ASC"); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();

$i=0; 
foreach($res as $output){
$first=$output["f_approve"];
if($first=="")

{
        $ty=$output["periode"];
$yy = date('Y', strtotime($ty));
$mm = date('m', strtotime($ty));
$dd = date('d', strtotime($ty));

$fg=$mm-$m;
$ft=$dd-$d;

if(   $fg=="0" && $ft<"04" ){

$i=$i+1;

}}}

$i;

$ii=0; 
foreach($res as $output){
$first=$output["f_approve"];
if($first!="")

{
        $ty=$output["periode"];
$yy = date('Y', strtotime($ty));
$mm = date('m', strtotime($ty));
$dd = date('d', strtotime($ty));

$fg=$mm-$m;
$ft=$dd-$d;

if(   $fg=="0" && $ft<"04" ){

$ii=$ii+1;

}}}

$ii;

$total=$i+$ii;
    $return[] = $total;
    $return[] = $i;
    $return[] = $ii;
    return $return;   
       
    }
    }
 $add = new Bar();
      
 $ok = $add->total();
 echo $total=$ok[0];    
 echo $first=$ok[1];    
 echo $th=$ok[2];    

 
 

