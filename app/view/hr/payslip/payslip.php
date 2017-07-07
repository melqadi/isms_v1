<?php
$id_user=$_GET["id_user"];
$from=$_GET["from"];
$to=$_GET["to"];

$deu="groos";
$deu="basic";

$ev="0";
$ef="0";

$dv="0";
$df="0";


$payslip = $pay->slip($id_user,$from,$to,$deu,$ev,$ef,$dv,$df);

 
         
echo"<pre>";
print_r($payslip);
echo"<pre>";

