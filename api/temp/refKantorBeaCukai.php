<?php
include "db.php";

$dataREF = $db->query("SELECT * FROM referensi_kantor_pabean ORDER BY ID DESC", 0);
$cek = $dataREF->num_rows;

if ($cek > 0) {
    $data = [];

    while ($result = $dataREF->fetch_assoc()) {
        $data[] = [
            'ID' => $result['ID'],
            'KODE_KANTOR' => $result['KODE_KANTOR'],
            'URAIAN_KANTOR' => $result['URAIAN_KANTOR']
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
