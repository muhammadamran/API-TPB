<?php
include "db.php";

if ($_GET["id_user"] == NULL) {
    $video = $db->query("SELECT * FROM user ORDER BY id DESC", 0);
} else {
    $video = $db->query("SELECT * FROM user WHERE id='" . $_GET['id_user'] . "'", 0);
}

$cek = $video->num_rows;
if ($cek > 0) {
    $data = [];

    while ($result = $video->fetch_assoc()) {
        $data[] = [
            'id' => $result['id'],
            'nama' => $result['nama']
        ];
    }

    echo json_encode([
        'status' => 200,
        'result' => $data
    ]);
} else {
    echo json_encode([
        'status' => 404,
        'result' => 'Data not found'
    ]);
}