<?php

$hname='localhost';
$uname='root';
$pass='';
$db='trainingschools'

$con=mysqli_connect($hname,$uname,$pass,$db);
if(!$con){
    die("cannot coonect");
}
?>

