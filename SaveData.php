<?php
include "Dbconnection.php";

// $ID = $_POST["ID"];
$Name  = $_POST['Name'];
$Username  = $_POST['Username'];
$Email  = $_POST['Email'];
$Password  = md5($_POST['Password']);  // Ensure you're hashing the password for security

// SQL query to insert data
$SqlData = "INSERT INTO myData(Name, Username, Email, Password) VALUES ('$Name', '$Username', '$Email', '$Password')";

// Execute the query
$result = mysqli_query($Connection, $SqlData);

if ($result) {
    echo "Data Stored Successfully";
} else {
    echo "Error: " . mysqli_error($Connection);
}

// Close the database connection
mysqli_close($Connection);
?>
