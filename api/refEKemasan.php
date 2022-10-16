<?php
include "db.php";

$dataREF = $db->query("SELECT * FROM referensi_kemasan", 0);
$cek = $dataREF->num_rows;

if ($cek > 0) {
    $data = [];

    while ($result = $dataREF->fetch_assoc()) {
        $data[] = [
            'ID' => $result['ID'],
            'KODE_KEMASAN' => $result['KODE_KEMASAN'],
            'URAIAN_KEMASAN' => $result['URAIAN_KEMASAN']
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