<?php
// API - 
include "get_api.php";
$content = get_content('https://itinventory-sarinah.com/api/databases.php');
$data = json_decode($content, true);

foreach ($data['result'] as $row) {

  if ($data['status'] == 404) {
    $apiDB = 'tpbdb';
  } else {
    $apiDB = $row['data'];
  }
}

$dbhost = "localhost";
// Local Main
$dbusername = "beacukai";
$dbpassword = "beacukai";
$dbname = $apiDB;

// Local Dev
// $dbusername = "root";
// $dbpassword = "";
// $dbname = "tpb";
$db = new mysqli($dbhost, $dbusername, $dbpassword, $dbname) or die(mysqli_connect_errno());

if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

// QUERY SETTING API
$dataAPI = $db->query("SELECT * FROM api_cloud ORDER BY id ASC LIMIT 1");
$resultAPI = mysqli_fetch_array($dataAPI);
