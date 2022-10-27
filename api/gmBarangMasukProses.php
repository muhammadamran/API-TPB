<?php
include "db.php";

if (function_exists($_GET['function'])) {
    $_GET['function']();
}

function PostBarangUpdate()
{
    global $db;
    $ID                = $_GET['ID'];
    $AJU               = $_GET['AJU'];
    $STATUS            = 'Sudah DiCek!';
    $OPERATOR_ONE      = $_GET['OPERATOR_ONE'];
    $TGL_CEK           = date('Y-m-d H:m:i');
    $Sesuai            = $_GET['Sesuai'];
    $Kurang            = $_GET['Kurang'];
    $Lebih             = $_GET['Lebih'];
    $Pecah             = $_GET['Pecah'];
    $Rusak             = $_GET['Rusak'];

    $update = $db->query("UPDATE plb_barang SET STATUS='"  . $STATUS . "',
                                                OPERATOR_ONE='" . $OPERATOR_ONE . "',
                                                TGL_CEK='" . $TGL_CEK . "',
                                                Sesuai='" . $Sesuai . "',
                                                Kurang='" . $Kurang . "',
                                                Lebih='" . $Lebih . "',
                                                Pecah='" . $Pecah . "',
                                                Rusak='" . $Rusak . "'
                                                WHERE ID='" . $ID . "' AND NOMOR_AJU='" . $AJU . "'");
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

// Add
function PostADD()
{
    global $db;
    $bm_no_aju_plb          = $_GET['bm_no_aju_plb'];
    $bk_no_aju_sarinah      = $_GET['bk_no_aju_sarinah'];
    $bm_tgl_masuk           = $_GET['bm_tgl_masuk'] . ' ' . date('H:m:i');
    $bm_nama_operator       = $_GET['bm_nama_operator'];

    $insert = $db->query("INSERT INTO rcd_status
                            (rcd_id,bm_no_aju_plb,bk_no_aju_sarinah,bm_tgl_masuk,bm_nama_operator)
                            VALUES
                            ('','$bm_no_aju_plb','$bk_no_aju_sarinah','$bm_tgl_masuk','$bm_nama_operator')");

    if ($insert) {
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
    $bm_no_aju_plb          = $_GET['bm_no_aju_plb'];
    $bk_no_aju_sarinah      = $_GET['bk_no_aju_sarinah'];
    $bm_tgl_masuk           = $_GET['bm_tgl_masuk'] . ' ' . date('H:m:i');
    $bm_nama_operator       = $_GET['bm_nama_operator'];

    $edit = $db->query("UPDATE rcd_status SET bm_no_aju_plb='" . $bm_no_aju_plb . "',
                                                bk_no_aju_sarinah='" . $bk_no_aju_sarinah . "',
                                                bm_tgl_masuk='" . $bm_tgl_masuk . "',
                                                bm_nama_operator='" . $bm_nama_operator . "'
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

    $edit = $db->query("UPDATE rcd_status SET upload_beritaAcara_PLB='" . $newname . "'
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