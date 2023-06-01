<?php
//  1Y1M1D
$start_date = "2023-01-01";
$end_date = "2025-02-03";

$date_diff = abs(strtotime($end_date) - strtotime($start_date));
 
$years = floor($date_diff / (365*60*60*24));
$months = floor(($date_diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($date_diff - $years * 365*60*60*24 - $months*30*60*60*24) / (60*60*24));
echo $years .' Years '. $months. 'Months and '. $days.' Days' ;
?>