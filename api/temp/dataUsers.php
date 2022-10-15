<?php
$api_url = 'https://itinventory-sarinah.com/test_api_data.php';
$content = file_get_contents($api_url);
$data = json_decode($content, true);

var_dump($data);
exit;

$response = $data['status'];
echo $response;
echo "<br>";

foreach ($data['result'] as $row) {
    echo $row['ID'];
    echo "<br>";
}