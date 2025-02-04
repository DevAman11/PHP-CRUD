<?php 
$Server = "localhost";
$User = "root";
$password = "abizhere09";
$Database = "phpdata";

$Connection = mysqli_connect($Server,$User,$password,$Database);

if(!$Connection){
  die("my error is :" .mysqli_connect_error());
}



?>