<?php
include "db.php";

$dataREF = $db->query("SELECT * FROM referensi_kapal", 0);
$cek = $dataREF->num_rows;

if ($cek > 0) {
    $data = [];

    while ($result = $dataREF->fetch_assoc()) {
        $data[] = [
            'ID' => $result['ID'],
            'KODE_BENDERA' => $result['KODE_BENDERA'],
            'NAMA_KAPAL' => $result['NAMA_KAPAL']
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