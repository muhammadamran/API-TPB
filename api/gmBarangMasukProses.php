<?php
include "db.php";

if (function_exists($_GET['function'])) {
    $_GET['function']();
}

// Barang Sesuai
function PostBarangSesuai()
{
    global $db;
    $ID             = $_GET['ID'];
    $STATUS         = $_GET['STATUS'];
    $OPERATOR_ONE   = $_GET['OPERATOR_ONE'];
    $TGL_CEK        = $_GET['TGL_CEK'];

    $update = $db->query('UPDATE plb_barang SET STATUS="' . $STATUS . '",
                                                OPERATOR_ONE="' . $OPERATOR_ONE . '",
                                                TGL_CEK="' . $TGL_CEK . '"
                                                WHERE ID="' . $ID . '"');
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