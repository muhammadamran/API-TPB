<?php
include "db.php";

if ($_GET['Month'] == 0 || $_GET['Month'] == '' || $_GET['Month'] == NULL) {
    $dataGet = $db->query("SELECT brg.KODE_BARANG,brg.URAIAN,brg.UKURAN,brg.SPESIFIKASI_LAIN,brg.KODE_SATUAN,hdr.KODE_DOKUMEN_PABEAN,brg.POS_TARIF,
                            hdr.NOMOR_BC11,hdr.TANGGAL_BC11
                            FROM tpb_header AS hdr
                            LEFT OUTER JOIN tpb_barang AS brg ON hdr.ID=brg.ID_HEADER
                            ORDER BY hdr.TANGGAL_BC11 ASC", 0);
} else {
    $dataGet = $db->query("SELECT brg.KODE_BARANG,brg.URAIAN,brg.UKURAN,brg.SPESIFIKASI_LAIN,brg.KODE_SATUAN,hdr.KODE_DOKUMEN_PABEAN,brg.POS_TARIF,
                            hdr.NOMOR_BC11,hdr.TANGGAL_BC11
                            FROM tpb_header AS hdr
                            LEFT OUTER JOIN tpb_barang AS brg ON hdr.ID=brg.ID_HEADER
                            WHERE SUBSTR(hdr.TANGGAL_BC11,6,2) LIKE '%" .$_GET['Month']."%'
                            AND SUBSTR(hdr.TANGGAL_BC11,1,4) LIKE '%" .$_GET['Years']."%'
                            ORDER BY hdr.TANGGAL_BC11 ASC", 0);
}
$cek = $dataGet->num_rows;

if ($cek > 0) {
    $data = [];

    while ($result = $dataGet->fetch_assoc()) {
        $data[] = [
            'POS_TARIF' => $result['POS_TARIF'],
            'KODE_DOKUMEN_PABEAN' => $result['KODE_DOKUMEN_PABEAN'],
            'TANGGAL_BC11' => $result['TANGGAL_BC11'],
            'KODE_BARANG' => $result['KODE_BARANG'],
            'URAIAN' => preg_replace('/[^a-zA-Z0-9]/', ' ', $result['URAIAN']),
            'UKURAN' => $result['UKURAN'],
            'SPESIFIKASI_LAIN' => $result['SPESIFIKASI_LAIN'],
            'KODE_SATUAN' => $result['KODE_SATUAN']
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