<?php
include "db.php";

if ($_GET["StartTanggal"] == 0 || $_GET["StartTanggal"] == '' || $_GET["StartTanggal"] == NULL) {
    $dataGet = $db->query("SELECT plb.NOMOR_BC11 AS PLB_NOMOR_BC11,plb.TANGGAL_BC11 AS PLB_TANGGAL_BC11,hdr.NOMOR_BC11,hdr.TANGGAL_BC11,hdr.NAMA_PEMASOK,
                            brg.ID,brg.KODE_BARANG,brg.URAIAN,brg.KODE_SATUAN,brg.JUMLAH_SATUAN,hdr.KODE_VALUTA,brg.CIF,hdr.ID_PENERIMA_BARANG,hdr.KODE_DOKUMEN_PABEAN,hdr.TANGGAL_TTD,SUBSTR(hdr.NOMOR_AJU,13,8) AS TGL_AJU,hdr.NOMOR_AJU,brg.POS_TARIF
                            FROM tpb_header AS hdr
                            LEFT JOIN plb_header AS plb ON hdr.NOMOR_DAFTAR=plb.NOMOR_DAFTAR
                            LEFT OUTER JOIN tpb_barang AS brg ON hdr.ID=brg.ID_HEADER
                            ORDER BY SUBSTR(hdr.NOMOR_AJU,13,8) ASC, brg.ID ASC", 0);
} else {
    $dataGet = $db->query("SELECT plb.NOMOR_BC11 AS PLB_NOMOR_BC11,plb.TANGGAL_BC11 AS PLB_TANGGAL_BC11,hdr.NOMOR_BC11,hdr.TANGGAL_BC11,hdr.NAMA_PEMASOK,
                            brg.ID,brg.KODE_BARANG,brg.URAIAN,brg.KODE_SATUAN,brg.JUMLAH_SATUAN,hdr.KODE_VALUTA,brg.CIF,hdr.ID_PENERIMA_BARANG,hdr.KODE_DOKUMEN_PABEAN,hdr.TANGGAL_TTD,SUBSTR(hdr.NOMOR_AJU,13,8) AS TGL_AJU,hdr.NOMOR_AJU,brg.POS_TARIF
                            FROM tpb_header AS hdr
                            LEFT JOIN plb_header AS plb ON hdr.NOMOR_DAFTAR=plb.NOMOR_DAFTAR
                            LEFT OUTER JOIN tpb_barang AS brg ON hdr.ID=brg.ID_HEADER
                            -- WHERE SUBSTR(hdr.NOMOR_AJU,13,8) BETWEEN " . $_GET['StartTanggal'] . " AND " . $_GET['EndTanggal'] . "
                            WHERE pst.TANGGAL_BC11 BETWEEN '" . $_GET['StartTanggal'] . "' AND '" . $_GET['EndTanggal'] . "'
                            ORDER BY SUBSTR(hdr.NOMOR_AJU,13,8) ASC, brg.ID ASC", 0);
}
$cek = $dataGet->num_rows;

if ($cek > 0) {
    $data = [];

    while ($result = $dataGet->fetch_assoc()) {
        $data[] = [
            'POS_TARIF' => $result['POS_TARIF'],
            'KODE_SATUAN' => $result['KODE_SATUAN'],
            'JUMLAH_SATUAN' => $result['JUMLAH_SATUAN'],
            'KODE_VALUTA' => $result['KODE_VALUTA'],
            'CIF' => $result['CIF'],
            'NOMOR_AJU' => $result['NOMOR_AJU'],
            'TGL_AJU' => $result['TGL_AJU'],
            'TANGGAL_TTD' => $result['TANGGAL_TTD'],
            'KODE_DOKUMEN_PABEAN' => $result['KODE_DOKUMEN_PABEAN'],
            'NOMOR_BC11' => $result['NOMOR_BC11'],
            'TANGGAL_BC11' => $result['TANGGAL_BC11'],
            'NAMA_PEMASOK' => $result['NAMA_PEMASOK'],
            'KODE_BARANG' => $result['KODE_BARANG'],
            'URAIAN' => preg_replace('/[^a-zA-Z0-9]/', ' ', $result['URAIAN'])
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