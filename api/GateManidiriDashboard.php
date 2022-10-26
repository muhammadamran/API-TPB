<?php
include "db.php";

if (function_exists($_GET['function'])) {
    $_GET['function']();
}

function get_T_BRG_ANTRIAN_PLB()
{
    global $db;
    $dataGet = $db->query("SELECT COUNT(STATUS) AS T_BRG_ANTRIAN_PLB FROM plb_barang WHERE STATUS IS NULL", 0);
    $cek = $dataGet->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $dataGet->fetch_assoc()) {
            $data[] = [
                'T_BRG_ANTRIAN_PLB' => $result['T_BRG_ANTRIAN_PLB'],
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

function get_T_BRG_MASUK_PLB()
{
    global $db;
    $dataGet = $db->query("SELECT COUNT(STATUS) AS T_BRG_MASUK_PLB FROM plb_barang WHERE STATUS IS NOT NULL", 0);
    $cek = $dataGet->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $dataGet->fetch_assoc()) {
            $data[] = [
                'T_BRG_MASUK_PLB' => $result['T_BRG_MASUK_PLB'],
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
// BARANG 
// BARANG KELUAR
function get_T_BRG_KELUAR_TPB()
{
    global $db;
    $dataGet = $db->query("SELECT COUNT(STATUS) AS T_BRG_MASUK_PLB FROM plb_barang WHERE STATUS IS NOT NULL", 0);
    $cek = $dataGet->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $dataGet->fetch_assoc()) {
            $data[] = [
                'T_BRG_MASUK_PLB' => $result['T_BRG_MASUK_PLB'],
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