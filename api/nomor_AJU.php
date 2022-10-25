<?php
include "db.php";

if (function_exists($_GET['function'])) {
    $_GET['function']();
}

function get_AJU_PLB()
{
    global $db;
    $dataGet = $db->query("SELECT plb.NOMOR_AJU,rcd.bm_no_aju_plb FROM plb_header AS plb
                           LEFT OUTER JOIN rcd_status AS rcd ON plb.NOMOR_AJU=rcd.bm_no_aju_plb
                           WHERE rcd.bm_no_aju_plb IS NULL
                           ORDER BY plb.ID DESC", 0);
    $cek = $dataGet->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $dataGet->fetch_assoc()) {
            $data[] = [
                'NOMOR_AJU' => $result['NOMOR_AJU'],
                'bk_no_aju_sarinah' => $result['bk_no_aju_sarinah']
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
}

function get_AJU_GB()
{
    global $db;
    $dataGet = $db->query("SELECT plb.NOMOR_AJU,rcd.bk_no_aju_sarinah FROM tpb_header AS plb
                           LEFT JOIN rcd_status AS rcd ON plb.NOMOR_AJU=rcd.bk_no_aju_sarinah
                           WHERE rcd.bk_no_aju_sarinah IS NULL
                           ORDER BY plb.ID DESC", 0);
    $cek = $dataGet->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $dataGet->fetch_assoc()) {
            $data[] = [
                'NOMOR_AJU' => $result['NOMOR_AJU'],
                'bk_no_aju_sarinah' => $result['bk_no_aju_sarinah']
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
}