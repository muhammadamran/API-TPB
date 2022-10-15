<?php
include "db.php";

$dataBC25 = $db->query("SELECT *,sts.KODE_STATUS,sts.URAIAN_STATUS 
                        FROM tpb_header AS hdr 
                        JOIN referensi_status AS sts ON hdr.KODE_STATUS=sts.KODE_STATUS 
                        WHERE hdr.KODE_DOKUMEN_PABEAN=25 GROUP BY hdr.NOMOR_AJU ORDER BY hdr.NOMOR_AJU", 0);
$cek = $dataBC25->num_rows;

if ($cek > 0) {
    $data = [];

    while ($result = $dataBC25->fetch_assoc()) {
        $data[] = [
            'NOMOR_AJU' => $result['NOMOR_AJU'],
            'NAMA_PEMASOK' => $result['NAMA_PEMASOK'],
            'NAMA_PENGANGKUT' => $result['NAMA_PENGANGKUT'],
            'JUMLAH_BARANG' => $result['JUMLAH_BARANG'],
            'JUMLAH_KONTAINER' => $result['JUMLAH_KONTAINER'],
            'JUMLAH_KEMASAN' => $result['JUMLAH_KEMASAN'],
            'URAIAN_STATUS' => $result['URAIAN_STATUS']
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