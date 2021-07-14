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



//creating a new table and cheking for errors or duplicates.

$check = "CREATE TABLE learncodetableplanets(Name text, API varchar(40))";

if ($conn->query($check) === TRUE) {

    echo "learncodetablepla created successfully";

} else {

    echo "Error creating table: " . $conn->error;

}



// Create a new cURL resource and set the file URL to fetch through cURL

$curl = curl_init('https://swapi.dev/api/planets/');

if (!$curl) {

    die("Couldn't initialize a cURL handle");

};

//This option will return data as a string instead of direct output

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// carry out the request

$result = curl_exec($curl);

// check for any errors

if (curl_errno($curl)) {

    echo (curl_error($curl));

    die();

};

// close cURL resource to free up system resources

curl_close($curl);

//Convert data into a JSON format, with Arrays

$response_data = json_decode($result, true);

 print_r($response_data); 

//Print out the array format of the data from the Star Wars API



foreach ($response_data as $name => $api) {

    echo "$name=$api<br />";}


?>