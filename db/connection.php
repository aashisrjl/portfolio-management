<?php 
$host = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";

$conn= mysqli_connect($host,$username,$password,$dbname);

if(mysqli_connect_errno())
{
    echo "Sorry! You got some error";
}
?>