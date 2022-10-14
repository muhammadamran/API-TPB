<?php
$api_url = 'http://127.0.0.1/tpbbackend/api/apidataUsers.php?id_user';
$content = file_get_contents($api_url);
$data = json_decode($content, true);

$response = $data['status'];
echo $response;
echo "<br>";

foreach ($data['result'] as $row) {
    echo $row['id'];
    echo "<br>";
}