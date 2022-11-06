<?php
include "db.php";

if ($_GET["LimitRow"] == 0 || $_GET["LimitRow"] == '' || $_GET["LimitRow"] == NULL) {
    $dataREF = $db->query("SELECT * FROM view_ref_pln ORDER BY ID ASC LIMIT 50", 0);
} else {
    $dataREF = $db->query("SELECT * FROM view_ref_pln ORDER BY ID ASC LIMIT " . $_GET['LimitRow'] . "", 0);
}
$cek = $dataREF->num_rows;

if ($cek > 0) {
    $data = [];

    while ($result = $dataREF->fetch_assoc()) {
        $data[] = [
            'ID' => $result['ID'],
            'KETERANGAN' => $result['KETERANGAN'],
            'KODE_KANTOR' => $result['KODE_KANTOR'],
            'KODE_PELABUHAN' => $result['KODE_PELABUHAN'],
            'URAIAN_PELABUHAN' => preg_replace('/[^a-zA-Z0-9]/', ' ', $result['URAIAN_PELABUHAN'])
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
