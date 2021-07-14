<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "mydatabase";



// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

} 

 
// assigning variables to the ids from the HTML Form

$name = $_POST['name'];

$email = $_POST['email'];

$phone = $_POST['tel'];




$sql = "INSERT INTO formtable (name, email, phone) 

 VALUES (\"".$name."\", \"".$email."\", \"".$phone."\")";




if ($conn->query($sql) === TRUE) {

    echo "Submitted Successfully";

} else {

    echo "Submission Error" . $sql . "<br>" . $conn->error;

}



$conn->close();

?>