<?php

$hostname= "localhost";
$username= "root";
$password= "";
$dname = "calendar";

$con = mysqli_connect($hostname,$username,$password,$dname);

if($con -> connect_error)
{
    die("Connection Failed" . $con->connect_error);
}



?>