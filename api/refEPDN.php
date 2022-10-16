<?php
include "db.php";

$dataREF = $db->query("SELECT *,b.ID AS ID_KBC, b.KODE_KANTOR AS KODE_KANTOR_KBC FROM referensi_pelabuhan AS a
                        LEFT OUTER JOIN referensi_kantor_pabean AS b ON a.KODE_KANTOR=b.KODE_KANTOR
                        WHERE LEFT(a.KODE_PELABUHAN,2)='ID' ORDER BY a.ID ASC", 0);
$cek = $dataREF->num_rows;

if ($cek > 0) {
    $data = [];

    while ($result = $dataREF->fetch_assoc()) {
        $data[] = [
            'ID' => $result['ID'],
            'KETERANGAN' => $result['KETERANGAN'],
            'KODE_KANTOR' => $result['KODE_KANTOR'],
            'KODE_PELABUHAN' => $result['KODE_PELABUHAN'],
            'URAIAN_PELABUHAN' => $result['URAIAN_PELABUHAN'],
            'ID_KBC' => $result['ID_KBC'],
            'KODE_KANTOR_KBC' => $result['KODE_KANTOR_KBC'],
            'URAIAN_KANTOR' => $result['URAIAN_KANTOR']
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