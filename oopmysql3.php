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

//setting up a new table (learncodetable3) in our database using a query method.

if ($conn->query("CREATE TABLE learncodetable3(id int, name varchar(20))")) {

    echo "New Learncode Table successfully created";

}

// using mysql query to add data into the learncodetable3.

if ($conn->query("insert into learncodetable3 values (1,'Irene')")) {

    echo "record created successfully"."<br/>";

}

if ($conn->query("insert into learncodetable3 values (2,'Alex')")) {

    echo "record created successfully";

}



$result = $conn->query("SELECT id, name FROM learncodetable3");


// Displaying data already in the database


if ($result->num_rows > 0) {

    echo "<table><tr><th>ID</th><th>Name</th></tr>";

    // output data of each row

    while($row = $result->fetch_assoc()) 

 // the fetch_assoc() is a function used to FETCH a result row from database

{

      echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td></tr>";

    }

    echo "</table>";

  } else {

    echo "0 results";

  }

  $conn->close();
?>