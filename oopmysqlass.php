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

if ($conn->query("CREATE TABLE studenttable(id int, name varchar(30), matricNumber varchar(30), department text)")) {

    echo "New student Table successfully created"."<br/>";

}

//inserting data into the newly created table

if ($conn->query("insert into studenttable values (1,'Victor Moses','MCB/2017/124','Microbiology')")) {

    echo "record created successfully"."<br/>";

}

if ($conn->query("insert into studenttable values (2,'Victoria williams','MCB/2017/007','Microbiology')")) {

    echo "record created successfully"."<br/>";

}

//fetching data from database

$result = $conn->query("SELECT id, name, matricNumber, department FROM studenttable");



if ($result->num_rows > 0) {

    echo "<table><tr><th>ID</th><th>Name</th><th>Matric Number</th><th>Department</th></tr>";

    // output data of each row

    while($row = $result->fetch_assoc()) {

      echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["matricNumber"]."</td><td>".$row["department"]."</td></tr>";

    }

    echo "</table>";

  } else {

    echo "0 results";

  }

  $conn->close();

?>