<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "learncode";


// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);

}

else {

    echo "connected succesfully"."<br/>";

}


$sql = "INSERT INTO learncodetable (name, course)

VALUES ('Michael', 'PHP')";



if ($conn->query($sql) === TRUE) {

  echo "New record created successfully";

} else {

  echo "Error: " . $sql . "<br>" . $conn->error;

}



$conn->close();
?>
