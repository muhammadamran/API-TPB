<?php
include "db.php";

$dataREF = $db->query("SELECT *,b.ID AS ID_RN, b.KODE_NEGARA AS KODE_NEGARA_RN FROM referensi_pemasok AS a
                        JOIN referensi_negara AS b ON a.KODE_NEGARA=b.KODE_NEGARA", 0);
$cek = $dataREF->num_rows;

if ($cek > 0) {
    $data = [];

    while ($result = $dataREF->fetch_assoc()) {
        $data[] = [
            'ID' => $result['ID'],
            'ALAMAT' => $result['ALAMAT'],
            'KODE_ID' => $result['KODE_ID'],
            'KODE_NEGARA' => $result['KODE_NEGARA'],
            'NAMA' => $result['NAMA'],
            'NPWP' => $result['NPWP'],
            'ID_RN' => $result['ID_RN'],
            'KODE_NEGARA_RN' => $result['KODE_NEGARA_RN'],
            'URAIAN_NEGARA' => $result['URAIAN_NEGARA']
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