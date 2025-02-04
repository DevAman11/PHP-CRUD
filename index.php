<?php 
include "Navbar.php";


$Server = "localhost";
$User = "root";
$password = "abizhere09";
$Database = "phpdata";

$Connection = mysqli_connect($Server,$User,$password,$Database);

if(!$Connection){
  die("my error is :" .mysqli_connect_error());
}

$SqlData = "Insert into myData(ID,Name,Username,Email,Password) Values('1','Aman','Aman@1999','amank450232@gmail.com','aman@11')";

$result = mysqli_query($Connection,$Sql);

echo $result,"Data Stored SuccessFully";



mysqli_close($Connection);

?>