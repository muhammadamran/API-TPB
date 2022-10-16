<?php
include "db.php";

$dataREF = $db->query("SELECT * FROM referensi_valuta ORDER BY KODE_VALUTA ASC", 0);
$cek = $dataREF->num_rows;

if ($cek > 0) {
    $data = [];

    while ($result = $dataREF->fetch_assoc()) {
        $data[] = [
            'ID' => $result['ID'],
            'KODE_VALUTA' => $result['KODE_VALUTA'],
            'URAIAN_VALUTA' => $result['URAIAN_VALUTA']
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