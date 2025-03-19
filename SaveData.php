<?php
include "Dbconnection.php";

$Name  = $_POST['Name'];
$Username  = $_POST['Username'];
$Email  = $_POST['Email'];
$Password  = $_POST['Password'];  

$SqlData = "INSERT INTO myData(Name, Username, Email, Password) VALUES ('$Name', '$Username', '$Email', '$Password')";

$result = mysqli_query($Connection, $SqlData);

if ($result) {
    echo "Data Stored Successfully";
} else {
    echo "Error: " . mysqli_error($Connection);
}

mysqli_close($Connection);
?>
