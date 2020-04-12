<?php 
$vspace = "\n\n";

$currentDate = new DateTime('2020-03-31');
echo $currentDate->format('Y-m-d').$vspace;

$monthAgo = clone $currentDate;
echo $monthAgo->sub( new DateInterval('P1M') )->format('Y-m-d').$vspace;

$monthAgo = clone $currentDate;
echo $monthAgo->modify('first day of previous month')->format('Y-m-d').$vspace;


