
<?php

// Create a new cURL resource

$curl = curl_init();

if (!$curl) {

    die("Couldn't initialize a cURL handle");

} 

// Set the file URL to fetch through cURL

curl_setopt($curl, CURLOPT_URL, 'https://www.google.com');

// Do not check the SSL certificates

curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

// carry out the request

curl_exec($curl);

// close cURL resource to free up system resources

curl_close($curl);

?>