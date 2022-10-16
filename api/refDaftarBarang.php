<?php
include "db.php";

$dataREF = $db->query("SELECT * FROM referensi_kode_barang ORDER BY ID DESC", 0);
$cek = $dataREF->num_rows;

if ($cek > 0) {
    $data = [];

    while ($result = $dataREF->fetch_assoc()) {
        $data[] = [
            'ID' => $result['ID'],
            'BARANG_KE' => $result['BARANG_KE'],
            'KODE_BARANG' => $result['KODE_BARANG'],
            'MERK' => $result['MERK'],
            'NOHS' => $result['NOHS'],
            'SERI' => $result['SERI'],
            'SPESIFIKASI_LAIN' => $result['SPESIFIKASI_LAIN'],
            'TIPE' => $result['TIPE'],
            'URAIAN_BARANG' => preg_replace('/[^A-Za-z0-9\-]/', ' ', $result['URAIAN_BARANG'])
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