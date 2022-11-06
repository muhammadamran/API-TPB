<?php
include "db.php";

$dataREF = $db->query("SELECT * FROM referensi_negara ORDER BY URAIAN_NEGARA ASC", 0);
$cek = $dataREF->num_rows;

if ($cek > 0) {
    $data = [];

    while ($result = $dataREF->fetch_assoc()) {
        $data[] = [
            'ID' => $result['ID'],
            'KODE_NEGARA' => $result['KODE_NEGARA'],
            'URAIAN_NEGARA' => preg_replace('/[^a-zA-Z0-9]/', ' ', $result['URAIAN_NEGARA'])
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
