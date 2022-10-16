<?php
include "db.php";

$dataREF = $db->query("SELECT * FROM referensi_tps ORDER BY ID", 0);
$cek = $dataREF->num_rows;

if ($cek > 0) {
    $data = [];

    while ($result = $dataREF->fetch_assoc()) {
        $data[] = [
            'ID' => $result['ID'],
            'FL_AKTIF' => $result['FL_AKTIF'],
            'JNS_GUDANG' => $result['JNS_GUDANG'],
            'KD_KANTOR' => $result['KD_KANTOR'],
            'KODE_TPS' => $result['KODE_TPS'],
            'URAIAN_TPS' => $result['URAIAN_TPS']
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