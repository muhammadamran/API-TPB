<?php

$api_url = 'http://127.0.0.1/tpbbackend/api/users.php?id_user=';
// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);












// All user data exists in 'data' object
$user_data = $response_data;
// var_dump($user_data);
// exit;
// Cut long data into small & select only first 10 records

// Print data if need to debug
//print_r($user_data);

// Traverse array and display user data
foreach ($response_data as $user) {
    echo "name: " . $user['nama'];
    echo "<br />";
    echo "name: " . $user->id;
    echo "<br /> <br />";
}