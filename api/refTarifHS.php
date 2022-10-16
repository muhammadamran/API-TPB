<?php
include "db.php";

$dataREF = $db->query("SELECT * FROM referensi_pos_tarif ORDER BY ID DESC", 0);
$cek = $dataREF->num_rows;

if ($cek > 0) {
    $data = [];

    while ($result = $dataREF->fetch_assoc()) {
        $data[] = [
            'ID' => $result['ID'],
            'JENIS_TARIF_BM' => $result['JENIS_TARIF_BM'],
            'JENIS_TARIF_CUKAI' => $result['JENIS_TARIF_CUKAI'],
            'KODE_SATUAN_BM' => $result['KODE_SATUAN_BM'],
            'KODE_SATUAN_CUKAI' => $result['KODE_SATUAN_CUKAI'],
            'NOMOR_HS' => $result['NOMOR_HS'],
            'SERI_HS' => $result['SERI_HS'],
            'TARIF_BM' => $result['TARIF_BM'],
            'TARIF_CUKAI' => $result['TARIF_CUKAI'],
            'TARIF_PPH' => $result['TARIF_PPH'],
            'TARIF_PPN' => $result['TARIF_PPN'],
            'TARIF_PPNBM' => $result['TARIF_PPNBM']
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