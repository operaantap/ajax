<?php

    $servername = "localhost";

    $username = "root";

    $password = "";

    $dbname = "store_data";


    // Create connection

    $conn = new mysqli($servername, $username, $password, $dbname); //variables can be used


    // Check connection

    if ($conn->connect_error) {

        die("Connection failed: " . $conn->connect_error);

    } else {

        echo "connected succesfully" . "<br/>";

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

 
    //Print out the array format of the data from the Star Wars API

    echo('<pre>');

    print_r($response_data);

    echo('</pre>');

    echo('<br>');

 
    for ($i = 0; $i < count($response_data['results']); $i++) {

        $query = "INSERT INTO starwarstable (name, rotation_period, orbital_period, diameter, climate, gravity, terrain, surface_water, population, created, edited, url) 
        VALUES (\"".$response_data['results'][$i]['name']."\", \"".$response_data['results'][$i]['rotation_period']."\", \"".$response_data['results'][$i]['orbital_period']."\", \"".$response_data['results'][$i]['diameter']."\", \"".$response_data['results'][$i]['climate']."\", \"".$response_data['results'][$i]['gravity']."\", \"".$response_data['results'][$i]['terrain']."\", \"".$response_data['results'][$i]['surface_water']."\", \"".$response_data['results'][$i]['population']."\", \"".$response_data['results'][$i]['created']."\", \"".$response_data['results'][$i]['edited']."\", \"".$response_data['results'][$i]['url']."\")";
        
        $conn->query($query);
        
        if ($conn->errno){
        
        echo($conn->error); die();
        
        }
        
        }
        echo('All queries executed successfully!');
        

    

?>