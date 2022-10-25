<?php
include "db.php";

if (function_exists($_GET['function'])) {
    $_GET['function']();
}

function get_AJU_PLB()
{
    global $db;
    $dataGet = $db->query("SELECT NOMOR_AJU FROM plb_header ORDER BY ID DESC", 0);
    $cek = $dataGet->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $dataGet->fetch_assoc()) {
            $data[] = [
                'NOMOR_AJU' => $result['NOMOR_AJU']
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
    $dataGet = $db->query("SELECT NOMOR_AJU FROM tpb_header ORDER BY ID DESC", 0);
    $cek = $dataGet->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $dataGet->fetch_assoc()) {
            $data[] = [
                'NOMOR_AJU' => $result['NOMOR_AJU']
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