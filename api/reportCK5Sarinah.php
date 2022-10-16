<?php
include "db.php";

$dataGet = $db->query("SELECT * FROM tpb_header ORDER BY ID ASC", 0);
$cek = $dataGet->num_rows;

if ($cek > 0) {
    $data = [];

    while ($result = $dataGet->fetch_assoc()) {
        $data[] = [
            'ID' => $result['ID'],
            'NOMOR_AJU' => $result['NOMOR_AJU'],
            'KODE_DOKUMEN_PABEAN' => $result['KODE_DOKUMEN_PABEAN'],
            'NOMOR_BC11' => $result['NOMOR_BC11'],
            'ID_PENERIMA_BARANG' => $result['ID_PENERIMA_BARANG'],
            'NAMA_PENERIMA_BARANG' => $result['NAMA_PENERIMA_BARANG'],
            'NAMA_PEMASOK' => $result['NAMA_PEMASOK'],
            'NAMA_PEMILIK' => $result['NAMA_PEMILIK'],
            'NAMA_PENGANGKUT' => $result['NAMA_PENGANGKUT']
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
// header("Content-Type: application/json; charset=UTF-8");
// echo $response;