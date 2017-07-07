<?php
class weekend
{
//The function returns the no. of business days between two dates and it skips the holidays
function getWorkingDays($startDate,$endDate,$holidays){
          $return = [];

 $start = new DateTime($startDate);
$end = new DateTime($endDate);
// otherwise the  end date is excluded (bug?)
$end->modify('+1 day');

$interval = $end->diff($start);

// total days
$days = $interval->days;

// create an iterateable period of date (P1D equates to 1 day)
$period = new DatePeriod($start, new DateInterval('P1D'), $end);

// best stored as array, so you can add more than one
//$holidays = array('2012-09-07');
//echo $holidays[0];
//exit();
$i=0;
foreach($period as $dt) {
    $curr = $dt->format('D');
//echo $holidays[0];
//exit();
    // substract if Saturday or Sunday
    
    
    if ($curr == $holidays[0] || $curr == $holidays[1]|| $curr == $holidays[2]|| $curr == $holidays[3]|| $curr == $holidays[4]|| $curr == $holidays[5]|| $curr == $holidays[6]) {
        $days--;
    
        
    }  else {
    $hjh[$i]= $curr;   
    $dd = $dt->format('Y-m-d');
    $tar[$i]= $dd;   
    $i=$i+1;

    
    }

    // (optional) for the updated question
//    elseif (in_array($dt->format('Y-m-d'), $holidays)) {
//        $days--;
//    }
}
$return[] = $hjh;
    $return[] = $tar;
    return $return;

}

//Example:

// => will return 7
}

?>
