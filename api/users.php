<?php
include "../db/db.php";
$users = $db->query("SELECT * FROM user ORDER BY id DESC", 0);
$cek = $users->num_rows;
$data = [];

while ($row = $users->fetch_assoc()) {
    $data[] = [
        'id' => $row['id']
    ];
}
header("Access-Control-Allow-Origin: *");
header("content-type: application/json");
echo json_encode($data);