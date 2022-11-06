<?php
include "db.php";

if (function_exists($_GET['function'])) {
    $_GET['function']();
}

// Barang Sesuai
function PostBarangSesuai()
{
    global $db;
    $AJU            = $_GET['AJU'];
    $ID             = $_GET['ID'];
    $STATUS         = $_GET['STATUS'];
    $OPERATOR_ONE   = $_GET['OPERATOR_ONE'];
    $TGL_CEK        = date('Y-m-d H:m:i');

    $update = $db->query('UPDATE tpb_barang SET STATUS="' . $STATUS . '",
                                                OPERATOR_ONE="' . $OPERATOR_ONE . '",
                                                TGL_CEK="' . $TGL_CEK . '"
                                                WHERE ID="' . $ID . '"');
    if ($update) {
        echo json_encode([
            'status' => 200,
        ]);
    } else {
        echo json_encode([
            'status' => 404,
        ]);
    }
}
// Sesuai All
function PostBarangSesuaiAll()
{
    global $db;
    $AJU            = $_GET['AJU'];
    $STATUS         = 'Sesuai';
    $OPERATOR_ONE   = $_GET['OPERATOR_ONE'];
    $TGL_CEK        = date('Y-m-d H:m:i');

    $update = $db->query('UPDATE tpb_barang SET STATUS="' . $STATUS . '",
                                                OPERATOR_ONE="' . $OPERATOR_ONE . '",
                                                TGL_CEK="' . $TGL_CEK . '"
                                                WHERE ID_HEADER="' . $AJU . '" AND STATUS IS NULL');
    if ($update) {
        echo json_encode([
            'status' => 200,
        ]);
    } else {
        echo json_encode([
            'status' => 404,
        ]);
    }
}

// Barang Kurang
function PostBarangKurang()
{
    global $db;
    $AJU            = $_GET['AJU'];
    $ID             = $_GET['ID'];
    $STATUS         = $_GET['STATUS'];
    $OPERATOR_ONE   = $_GET['OPERATOR_ONE'];
    $TGL_CEK        = date('Y-m-d H:m:i');

    $update = $db->query('UPDATE tpb_barang SET STATUS="' . $STATUS . '",
                                                OPERATOR_ONE="' . $OPERATOR_ONE . '",
                                                TGL_CEK="' . $TGL_CEK . '"
                                                WHERE ID="' . $ID . '"');

    if ($update) {
        echo json_encode([
            'status' => 200,
        ]);
    } else {
        echo json_encode([
            'status' => 404,
        ]);
    }
}
// Kurang All
function PostBarangKurangAll()
{
    global $db;
    $AJU            = $_GET['AJU'];
    $STATUS         = 'Kurang';
    $OPERATOR_ONE   = $_GET['OPERATOR_ONE'];
    $TGL_CEK        = date('Y-m-d H:m:i');

    $update = $db->query('UPDATE tpb_barang SET STATUS="' . $STATUS . '",
                                                OPERATOR_ONE="' . $OPERATOR_ONE . '",
                                                TGL_CEK="' . $TGL_CEK . '"
                                                WHERE ID_HEADER="' . $AJU . '" AND STATUS IS NULL');
    if ($update) {
        echo json_encode([
            'status' => 200,
        ]);
    } else {
        echo json_encode([
            'status' => 404,
        ]);
    }
}

// Barang Lebih
function PostBarangLebih()
{
    global $db;
    $AJU            = $_GET['AJU'];
    $ID             = $_GET['ID'];
    $STATUS         = $_GET['STATUS'];
    $OPERATOR_ONE   = $_GET['OPERATOR_ONE'];
    $TGL_CEK        = date('Y-m-d H:m:i');

    $update = $db->query('UPDATE tpb_barang SET STATUS="' . $STATUS . '",
                                                OPERATOR_ONE="' . $OPERATOR_ONE . '",
                                                TGL_CEK="' . $TGL_CEK . '"
                                                WHERE ID="' . $ID . '"');

    if ($update) {
        echo json_encode([
            'status' => 200,
        ]);
    } else {
        echo json_encode([
            'status' => 404,
        ]);
    }
}
// Lebih All
function PostBarangLebihAll()
{
    global $db;
    $AJU            = $_GET['AJU'];
    $STATUS         = 'Lebih';
    $OPERATOR_ONE   = $_GET['OPERATOR_ONE'];
    $TGL_CEK        = date('Y-m-d H:m:i');

    $update = $db->query('UPDATE tpb_barang SET STATUS="' . $STATUS . '",
                                                OPERATOR_ONE="' . $OPERATOR_ONE . '",
                                                TGL_CEK="' . $TGL_CEK . '"
                                                WHERE ID_HEADER="' . $AJU . '" AND STATUS IS NULL');
    if ($update) {
        echo json_encode([
            'status' => 200,
        ]);
    } else {
        echo json_encode([
            'status' => 404,
        ]);
    }
}

// Barang Pecah
function PostBarangPecah()
{
    global $db;
    $AJU            = $_GET['AJU'];
    $ID             = $_GET['ID'];
    $STATUS         = $_GET['STATUS'];
    $OPERATOR_ONE   = $_GET['OPERATOR_ONE'];
    $TGL_CEK        = date('Y-m-d H:m:i');

    $update = $db->query('UPDATE tpb_barang SET STATUS="' . $STATUS . '",
                                                OPERATOR_ONE="' . $OPERATOR_ONE . '",
                                                TGL_CEK="' . $TGL_CEK . '"
                                                WHERE ID="' . $ID . '"');

    if ($update) {
        echo json_encode([
            'status' => 200,
        ]);
    } else {
        echo json_encode([
            'status' => 404,
        ]);
    }
}
// Pecah All
function PostBarangPecahAll()
{
    global $db;
    $AJU            = $_GET['AJU'];
    $STATUS         = 'Pecah';
    $OPERATOR_ONE   = $_GET['OPERATOR_ONE'];
    $TGL_CEK        = date('Y-m-d H:m:i');

    $update = $db->query('UPDATE tpb_barang SET STATUS="' . $STATUS . '",
                                                OPERATOR_ONE="' . $OPERATOR_ONE . '",
                                                TGL_CEK="' . $TGL_CEK . '"
                                                WHERE ID_HEADER="' . $AJU . '" AND STATUS IS NULL');
    if ($update) {
        echo json_encode([
            'status' => 200,
        ]);
    } else {
        echo json_encode([
            'status' => 404,
        ]);
    }
}

// Barang Rusak
function PostBarangRusak()
{
    global $db;
    $AJU            = $_GET['AJU'];
    $ID             = $_GET['ID'];
    $STATUS         = $_GET['STATUS'];
    $OPERATOR_ONE   = $_GET['OPERATOR_ONE'];
    $TGL_CEK        = date('Y-m-d H:m:i');

    $update = $db->query('UPDATE tpb_barang SET STATUS="' . $STATUS . '",
                                                OPERATOR_ONE="' . $OPERATOR_ONE . '",
                                                TGL_CEK="' . $TGL_CEK . '"
                                                WHERE ID="' . $ID . '"');

    if ($update) {
        echo json_encode([
            'status' => 200,
        ]);
    } else {
        echo json_encode([
            'status' => 404,
        ]);
    }
}
// Rusak All
function PostBarangRusakAll()
{
    global $db;
    $AJU            = $_GET['AJU'];
    $STATUS         = 'Rusak';
    $OPERATOR_ONE   = $_GET['OPERATOR_ONE'];
    $TGL_CEK        = date('Y-m-d H:m:i');

    $update = $db->query('UPDATE tpb_barang SET STATUS="' . $STATUS . '",
                                                OPERATOR_ONE="' . $OPERATOR_ONE . '",
                                                TGL_CEK="' . $TGL_CEK . '"
                                                WHERE ID_HEADER="' . $AJU . '" AND STATUS IS NULL');
    if ($update) {
        echo json_encode([
            'status' => 200,
        ]);
    } else {
        echo json_encode([
            'status' => 404,
        ]);
    }
}

function PostEDIT()
{
    global $db;
    $rcd_id                 = $_GET['rcd_id'];
    $bk_tgl_keluar          = $_GET['bk_tgl_keluar'] . ' ' . date('H:m:i');
    $bk_nama_operator       = $_GET['bk_nama_operator'];

    $edit = $db->query("UPDATE rcd_status SET bk_tgl_keluar='" . $bk_tgl_keluar . "',
                                                bk_nama_operator='" . $bk_nama_operator . "'
                                            WHERE rcd_id='" . $rcd_id . "'");

    if ($edit) {
        echo json_encode([
            'status' => 200,
        ]);
    } else {
        echo json_encode([
            'status' => 404,
        ]);
    }
}

function PostUPLOAD()
{
    global $db;
    $rcd_id                 = $_GET['rcd_id'];
    $newname                = $_GET['newname'];

    $edit = $db->query("UPDATE rcd_status SET upload_beritaAcara_GB='" . $newname . "'
                        WHERE rcd_id='" . $rcd_id . "'");

    if ($edit) {
        echo json_encode([
            'status' => 200,
        ]);
    } else {
        echo json_encode([
            'status' => 404,
        ]);
    }
}