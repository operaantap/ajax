<?php

    // Create a new cURL resource and set the file URL to fetch through cURL

    $curl = curl_init('https://swapi.dev/api/planets/');

    if (!$curl) {

        die("Couldn't initialize a cURL handle");

    };

    // carry out the request

    $result = curl_exec($curl);

    // check for any errors

    if (curl_errno($curl)) {

        echo(curl_error($curl));

        die();

    };

    // close cURL resource to free up system resources

    curl_close($curl);  

// output the content of the fetched data

   echo($result);

?>