<?php
include "db.php";

if ($_GET['_where'] != NULL) {
    $_where = $_GET['_where'];
    $dataGet = $db->query("SELECT *
      FROM tpb_header AS tpb
      LEFT OUTER JOIN tpb_kemasan AS kem ON tpb.ID=kem.ID_HEADER
      LEFT OUTER JOIN referensi_kemasan AS ref_kem ON kem.KODE_JENIS_KEMASAN=ref_kem.KODE_KEMASAN
      LEFT OUTER JOIN referensi_negara AS ngr ON tpb.KODE_NEGARA_PEMASOK=ngr.KODE_NEGARA
      LEFT OUTER JOIN referensi_pengusaha AS peng ON tpb.NAMA_PENERIMA_BARANG=peng.NAMA
      LEFT OUTER JOIN tpb_kontainer AS kon ON tpb.ID=kon.ID_HEADER
      $_where
                                                                 -- WHERE tpb.TANGGAL_BC11 BETWEEN '2018-05-18' AND '2022-08-08'
                                                                GROUP BY kon.ID_HEADER
                                                                ORDER BY tpb.NOMOR_AJU ASC", 0);
} else {
    $dataGet = $db->query("SELECT *
       FROM tpb_header AS tpb
       LEFT OUTER JOIN tpb_kemasan AS kem ON tpb.ID=kem.ID_HEADER
       LEFT OUTER JOIN referensi_kemasan AS ref_kem ON kem.KODE_JENIS_KEMASAN=ref_kem.KODE_KEMASAN
       LEFT OUTER JOIN referensi_negara AS ngr ON tpb.KODE_NEGARA_PEMASOK=ngr.KODE_NEGARA
       LEFT OUTER JOIN referensi_pengusaha AS peng ON tpb.NAMA_PENERIMA_BARANG=peng.NAMA
       LEFT OUTER JOIN tpb_kontainer AS kon ON tpb.ID=kon.ID_HEADER
       GROUP BY kon.ID_HEADER
       ORDER BY tpb.NOMOR_AJU ASC", 0);
}
$cek = $dataGet->num_rows;

if ($cek > 0) {
    $data = [];

    while ($result = $dataGet->fetch_assoc()) {
        $data[] = [
            'POS_TARIF' => $result['POS_TARIF'],
            'KODE_DOKUMEN_PABEAN' => $result['KODE_DOKUMEN_PABEAN'],
            'NOMOR_BC11' => $result['NOMOR_BC11'],
            'TANGGAL_BC11' => $result['TANGGAL_BC11'],
            'NAMA_PEMASOK' => $result['NAMA_PEMASOK'],
            'KODE_BARANG' => $result['KODE_BARANG'],
            'URAIAN' => preg_replace('/[^a-zA-Z0-9]/', ' ', $result['URAIAN']),
            'KODE_SATUAN' => $result['KODE_SATUAN'],
            'JUMLAH_SATUAN' => $result['JUMLAH_SATUAN'],
            'KODE_VALUTA' => $result['KODE_VALUTA'],
            'CIF' => $result['CIF'],
            'SERI_BARANG' => $result['SERI_BARANG'],
            'TIPE' => $result['TIPE']
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