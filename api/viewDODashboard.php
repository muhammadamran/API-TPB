<?php
include "db.php";

if (function_exists($_GET['function'])) {
    $_GET['function']();
}

// BC 2.3
function get_bc23()
{
    global $db;
    $dataGetBC23 = $db->query("SELECT NOMOR_AJU,
                            (SELECT COUNT(*) AS total_bc23 FROM tpb_header WHERE KODE_DOKUMEN_PABEAN=23) AS total_bc23
                            FROM tpb_header
                            WHERE KODE_DOKUMEN_PABEAN=23
                            AND KODE_DOKUMEN_PABEAN IS NOT NULL
                            ORDER BY ID DESC LIMIT 1", 0);
    $cek = $dataGetBC23->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $dataGetBC23->fetch_assoc()) {
            $data[] = [
                'NOMOR_AJU' => $result['NOMOR_AJU'],
                'total_bc23' => $result['total_bc23']
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

// BC 2.5
function get_bc25()
{
    global $db;
    $dataGetBC25 = $db->query("SELECT NOMOR_AJU,
                            (SELECT COUNT(*) AS total_bc25 FROM tpb_header WHERE KODE_DOKUMEN_PABEAN=25) AS total_bc25
                            FROM tpb_header
                            WHERE KODE_DOKUMEN_PABEAN=25
                            AND KODE_DOKUMEN_PABEAN IS NOT NULL
                            ORDER BY ID DESC LIMIT 1", 0);
    $cek = $dataGetBC25->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $dataGetBC25->fetch_assoc()) {
            $data[] = [
                'NOMOR_AJU' => $result['NOMOR_AJU'],
                'total_bc25' => $result['total_bc25']
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

// BC 2.6.1
function get_bc261()
{
    global $db;
    $dataGetBC261 = $db->query("SELECT NOMOR_AJU,
                            (SELECT COUNT(*) AS total_bc261 FROM tpb_header WHERE KODE_DOKUMEN_PABEAN=261) AS total_bc261
                            FROM tpb_header
                            WHERE KODE_DOKUMEN_PABEAN=261
                            AND KODE_DOKUMEN_PABEAN IS NOT NULL
                            ORDER BY ID DESC LIMIT 1", 0);
    $cek = $dataGetBC261->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $dataGetBC261->fetch_assoc()) {
            $data[] = [
                'NOMOR_AJU' => $result['NOMOR_AJU'],
                'total_bc261' => $result['total_bc261']
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

// BC 2.7
function get_bc27()
{
    global $db;
    $dataGetBC27 = $db->query("SELECT NOMOR_AJU,
                            (SELECT COUNT(*) AS total_bc27 FROM tpb_header WHERE KODE_DOKUMEN_PABEAN=27) AS total_bc27
                            FROM tpb_header
                            WHERE KODE_DOKUMEN_PABEAN=27
                            AND KODE_DOKUMEN_PABEAN IS NOT NULL
                            ORDER BY ID DESC LIMIT 1", 0);
    $cek = $dataGetBC27->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $dataGetBC27->fetch_assoc()) {
            $data[] = [
                'NOMOR_AJU' => $result['NOMOR_AJU'],
                'total_bc27' => $result['total_bc27']
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

// BC 4.0
function get_bc40()
{
    global $db;
    $dataGetBC40 = $db->query("SELECT NOMOR_AJU,
                            (SELECT COUNT(*) AS total_bc40 FROM tpb_header WHERE KODE_DOKUMEN_PABEAN=40) AS total_bc40
                            FROM tpb_header
                            WHERE KODE_DOKUMEN_PABEAN=40
                            AND KODE_DOKUMEN_PABEAN IS NOT NULL
                            ORDER BY ID DESC LIMIT 1", 0);
    $cek = $dataGetBC40->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $dataGetBC40->fetch_assoc()) {
            $data[] = [
                'NOMOR_AJU' => $result['NOMOR_AJU'],
                'total_bc40' => $result['total_bc40']
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

// BC 4.1
function get_bc41()
{
    global $db;
    $dataGetBC41 = $db->query("SELECT NOMOR_AJU,
                            (SELECT COUNT(*) AS total_bc41 FROM tpb_header WHERE KODE_DOKUMEN_PABEAN=41) AS total_bc41
                            FROM tpb_header
                            WHERE KODE_DOKUMEN_PABEAN=41
                            AND KODE_DOKUMEN_PABEAN IS NOT NULL
                            ORDER BY ID DESC LIMIT 1", 0);
    $cek = $dataGetBC41->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $dataGetBC41->fetch_assoc()) {
            $data[] = [
                'NOMOR_AJU' => $result['NOMOR_AJU'],
                'total_bc41' => $result['total_bc41']
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