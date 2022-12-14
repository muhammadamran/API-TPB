<?php
include "db.php";

if ($_GET["StartTanggal"] == 0 || $_GET["StartTanggal"] == '' || $_GET["StartTanggal"] == NULL) {
    $dataGet = $db->query("SELECT hdr.NOMOR_BC11 AS PLB_NOMOR_BC11,hdr.TANGGAL_BC11 AS tpb_TANGGAL_BC11,hdr.NAM_PEMASOK,hdr.NOMOR_BC11 AS TPB_NOMOR_BC11,hdr.TANGGAL_BC11 AS TPB_TANGGAL_BC11,
                         brg.KODE_BARANG,brg.URAIAN,brg.KODE_SATUAN,brg.JUMLAH_SATUAN,hdr.KODE_VALUTA,brg.CIF,brg.SERI_BARANG
                         FROM plb_header AS hdr
                         LEFT OUTER JOIN tpb_barang AS brg ON hdr.ID=brg.ID_HEADER
                         WHERE hdr.TANGGAL_BC11 BETWEEN " . $_GET['StartTanggal'] . " AND " . $_GET['EndTanggal'] . "
                         ORDER BY hdr.TANGGAL_BC11 ASC", 0);
} else {
    $dataGet = $db->query("SELECT hdr.NOMOR_BC11 AS tpb_NOMOR_BC11,hdr.TANGGAL_BC11 AS tpb_TANGGAL_BC11,hdr.NAMA_PEMASOK,hdr.NOMOR_BC11 AS TPB_NOMOR_BC11,hdr.TANGGAL_BC11 AS TPB_TANGGAL_BC11,
                        brg.KODE_BARANG,brg.URAIAN,brg.KODE_SATUAN,brg.JUMLAH_SATUAN,hdr.KODE_VALUTA,brg.CIF,brg.SERI_BARANG
                        FROM tpb_header AS hdr
                        LEFT OUTER JOIN tpb_barang AS brg ON hdr.ID=brg.ID_HEADER
                        ORDER BY hdr.TANGGAL_BC11 ASC", 0);
}
$cek = $dataGet->num_rows;

if ($cek > 0) {
    $data = [];

    while ($result = $dataGet->fetch_assoc()) {
        $data[] = [
            'NOMOR_AJU' => $result['NOMOR_AJU'],
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
            'CIF' => $result['CIF']
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