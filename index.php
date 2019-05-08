<?php
require 'TimeTravel.php';


$start = new DateTime('1985-12-31 12:05:24');
$end = new DateTime('2019-06-08 11:03:45');

$timeTravel = new TimeTravel($start, $end);

$sec = 1000000000;

echo $timeTravel->getTravelInfo();

echo '<br>';

echo  $timeTravel->findDate($sec);

echo '<br>';

$interval = new DateInterval('P1M7DT24H');
$step = new DatePeriod($start, $interval, $end);
$results = $timeTravel->backToFutureStepByStep($step);

foreach ($results as $result) {
    echo "$result  <br>";
}


