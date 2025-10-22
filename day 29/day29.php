<!-- //unix timestamp 
  -->
<?php
$ts = time();
echo $ts;


//diff between two times
$start = strtotime("2025-10-01 09:00:00");
$end = strtotime("2025-10-01 10:30:00");
$sec = $end-$start;
echo "difference of two times : $sec";


// date( )
echo date("Y-m-d H:i:s");




$dt = new Datetime();
$dt2 = new Datetime("2025-12-25 09:00:00");


$tz = new DateTimeZone('America/new_york');
$dt3 = new dateTime('now',$tz);


$immut = new DateTimeImmutable('2025-12-25 09:00:00');

echo $dt->format('Y-m-d H:i:s');


echo $dt2->format('Y-m-d H:i:s');

echo $dt3->format('Y-m-d H:i:s');



//conversion
$dateStr = '2025-12-25 09:00:00';
$source = new DateTimeZone('Asia/Kolkata');
$target = new DateTimeZone('America/New_York');

$dt = new DateTime($dateStr, $source);
$dt->setTimezone($target);
echo $dt->format('Y-m-d H:i:s T');







//set app timezone 
date_default_timezone_set("UTC");


// /cirrent timeatamp
$nowts = time();
$Nowformatted = date('Y-m-md H:i:s', $nowts);

//parse a date string and convert to another timezone


$dateStr = '2025-12-25 09:00:00';
$source = new DateTimeZone('Asia/Kolkata');
$target = new DateTimeZone('America/New_York');

$dt = new DateTime($dateStr, $source);
$dt->setTimezone($target);
echo $dt->format('Y-m-d H:i:s T');

//add interval
$dtadd=$dt->add(new DateInterval('P10D'));

echo "current (UTC) : $Nowformatted\n";
echo "after adding 10 days: ".$dtadd->format('Y-m-d H:i:s')."\n";







