<?php

$hostname= "localhost";
$username= "root";
$password= "";
$dname = "calendar";

$conn = mysqli_connect($hostname,$username,$password,$dname);

if($conn -> connect_error)
{
    die("Connection Failed" . $conn->connect_error);
}
else
{
    echo "Successfully Connect";
}


?>