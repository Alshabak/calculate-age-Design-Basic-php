<?php

$years =$_POST['years'];
$months =$_POST['months'];
$days =$_POST['days'];

$age_in_years=date('Y')-(int)$_POST['years'];
$age_in_months=date('m')-(int)$_POST['months'];
$age_in_days=30-(int)$_POST['days'];


$result="Your age is: ".$age_in_years." "."year"." ". "and ".$age_in_months ." " ." month and " ." ". $age_in_days." days";

echo $result;