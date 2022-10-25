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

    $update = $db->query('UPDATE plb_barang SET STATUS="' . $STATUS . '",
                                                OPERATOR_ONE="' . $OPERATOR_ONE . '",
                                                TGL_CEK="' . $TGL_CEK . '"
                                                WHERE ID="' . $ID . '"');

    if ($update) {
        echo
        "<script>window.location.href='https://itinventory-sarinah.com/gm_pemasukan_detail.php?AJU=$AJU;</script>";
    } else {
        echo
        "<script>window.location.href = 'https://itinventory-sarinah.com/gm_pemasukan_detail.php?SaveFailed=true';</script>";
    }
}

// Barang Kurang
function PostBarangKurang()
{
    global $db;
}

// Barang Lebih
function PostBarangLebih()
{
    global $db;
}

// Barang Pecah
function PostBarangPecah()
{
    global $db;
}

// Barang Rusak
function PostBarangRusak()
{
    global $db;
}