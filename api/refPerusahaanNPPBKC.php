<?php
include "db.php";

$dataREF = $db->query("SELECT a.ID AS ID_REF,a.ALAMAT,a.CONTACT_PERSON,a.EMAIL,a.FAX,a.ID_PENGENAL,a.JENISTPB,a.KODE_ID,a.KODE_KANTOR,a.NAMA,a.NOMOR_PENGENAL,a.NOMOR_SKEP,a.NPWP,a.STATUS_IMPORTIR,
                        a.TANGGAL_SKEP,a.TELEPON,a.NPPBKC,
                        b.KODE_STATUS_PENGUSAHA,b.URAIAN_STATUS_PENGUSAHA
                        FROM referensi_pengusaha AS a
                        LEFT JOIN referensi_status_pengusaha AS b ON a.KODE_ID=b.KODE_STATUS_PENGUSAHA 
                        WHERE ID_REF=" . $_GET['id'] . "
                        AND NPWP=" . $_GET['NPWP'] . "
                        ORDER BY ID_REF ASC", 0);
$cek = $dataREF->num_rows;

if ($cek > 0) {
    $data = [];

    while ($result = $dataREF->fetch_assoc()) {
        $data[] = [
            'ID' => $result['ID_REF'],
            'ALAMAT' => $result['ALAMAT'],
            'CONTACT_PERSON' => $result['CONTACT_PERSON'],
            'EMAIL' => $result['EMAIL'],
            'FAX' => $result['FAX'],
            'ID_PENGENAL' => $result['ID_PENGENAL'],
            'JENISTPB' => $result['JENISTPB'],
            'KODE_ID' => $result['KODE_ID'],
            'KODE_KANTOR' => $result['KODE_KANTOR'],
            'NAMA' => $result['NAMA'],
            'NOMOR_PENGENAL' => $result['NOMOR_PENGENAL'],
            'NOMOR_SKEP' => $result['NOMOR_SKEP'],
            'NPWP' => $result['NPWP'],
            'STATUS_IMPORTIR' => $result['STATUS_IMPORTIR'],
            'TANGGAL_SKEP' => $result['TANGGAL_SKEP'],
            'TELEPON' => $result['TELEPON'],
            'NPPBKC' => $result['NPPBKC'],
            'KODE_STATUS_PENGUSAHA' => $result['KODE_STATUS_PENGUSAHA'],
            'URAIAN_STATUS_PENGUSAHA' => $result['URAIAN_STATUS_PENGUSAHA']
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