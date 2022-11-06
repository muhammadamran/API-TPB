<?php
include "db.php";

$dataREF = $db->query("SELECT * FROM referensi_satuan ORDER BY ID ASC", 0);
$cek = $dataREF->num_rows;

if ($cek > 0) {
    $data = [];

    while ($result = $dataREF->fetch_assoc()) {
        $data[] = [
            'ID' => $result['ID'],
            'KODE_SATUAN' => $result['KODE_SATUAN'],
            'URAIAN_SATUAN' => $result['URAIAN_SATUAN']
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
