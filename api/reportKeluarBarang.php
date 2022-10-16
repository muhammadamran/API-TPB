<?php
include "db.php";

if ($_GET["StartTanggal"] == 0 || $_GET["StartTanggal"] == '' || $_GET["StartTanggal"] == NULL) {
    $dataGet = $db->query("SELECT plb.NOMOR_BC11 AS PLB_NOMOR_BC11,plb.TANGGAL_BC11 AS PLB_TANGGAL_BC11,hdr.NOMOR_BC11,hdr.TANGGAL_BC11,hdr.NAMA_PEMASOK,
                                    brg.KODE_BARANG,brg.URAIAN,brg.KODE_SATUAN,brg.JUMLAH_SATUAN,hdr.KODE_VALUTA,brg.CIF,hdr.ID_PENERIMA_BARANG
                            FROM tpb_header AS hdr
                            LEFT JOIN plb_header AS plb ON hdr.NOMOR_DAFTAR=plb.NOMOR_DAFTAR
                            LEFT OUTER JOIN tpb_barang AS brg ON hdr.ID=brg.ID_HEADER
                            ORDER BY hdr.TANGGAL_BC11 ASC LIMIT 0", 0);
} else {
    $dataGet = $db->query("SELECT plb.NOMOR_BC11 AS PLB_NOMOR_BC11,plb.TANGGAL_BC11 AS PLB_TANGGAL_BC11,hdr.NOMOR_BC11,hdr.TANGGAL_BC11,hdr.NAMA_PEMASOK,
                            brg.KODE_BARANG,brg.URAIAN,brg.KODE_SATUAN,brg.JUMLAH_SATUAN,hdr.KODE_VALUTA,brg.CIF,hdr.ID_PENERIMA_BARANG
                            FROM tpb_header AS hdr
                            LEFT JOIN plb_header AS plb ON hdr.NOMOR_DAFTAR=plb.NOMOR_DAFTAR
                            LEFT OUTER JOIN tpb_barang AS brg ON hdr.ID=brg.ID_HEADER
                            WHERE hdr.TANGGAL_BC11 BETWEEN " . $_GET['StartTanggal'] . " AND " . $_GET['EndTanggal'] . "
                            ORDER BY hdr.TANGGAL_BC11,brg.KODE_BARANG,brg.URAIAN ASC", 0);
}
$cek = $dataGet->num_rows;

if ($cek > 0) {
    $data = [];

    while ($result = $dataGet->fetch_assoc()) {
        $data[] = [
            'NOMOR_BC11' => $result['NOMOR_BC11'],
            'TANGGAL_BC11' => $result['TANGGAL_BC11'],
            'PEMASOK' => $result['PEMASOK'],
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