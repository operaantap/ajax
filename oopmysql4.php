<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "learncode";



// Create connection

$conn = new mysqli("localhost", "root", "", "learncode"); //variables can be used

// Check connection

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

} else {

    echo "connected succesfully" . "<br/>";

}

//creating a new table

if ($conn->query("CREATE TABLE learncodetable4(id int, name varchar(30))")) {

    echo "New Learncode Table successfully created"."<br/>";

}

//inserting data into the newly created table

if ($conn->query("insert into learncodetable4 values (1,'Obinna')")) {

    echo "record created successfully"."<br/>";

}

if ($conn->query("insert into learncodetable4 values (2,'Melissa')")) {

    echo "record created successfully"."<br/>";

}

//fetching data from database

$result = $conn->query("SELECT id, name FROM learncodetable4");



if ($result->num_rows > 0) {

    echo "<table><tr><th>ID</th><th>Name</th></tr>";

    // output data of each row

    while($row = $result->fetch_assoc()) {

      echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td></tr>";

    }

    echo "</table>";

  } else {

    echo "0 results";

  }

  $conn->close();

?>