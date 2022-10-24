<?php
include "db.php";

if (function_exists($_GET['function'])) {
    $_GET['function']();
}

function get_noAJU()
{
    global $db;
    // $dataGet = $db->query("SELECT ID,NOMOR_AJU,SUBSTR(NOMOR_AJU,13,8) AS TGL_AJU,PEMASOK,KODE_NEGARA_PEMASOK,NOMOR_DAFTAR
    //                     FROM plb_header WHERE NOMOR_AJU LIKE '%" . $_GET['AJU_PLB'] . "%'", 0);
    $dataGet = $db->query("SELECT hdr.ID,hdr.NOMOR_AJU,hdr.SUBSTR(NOMOR_AJU,13,8) AS hdr.TGL_AJU,hdr.PEMASOK,hdr.KODE_NEGARA_PEMASOK,hdr.NOMOR_DAFTAR,hdr.PERUSAHAAN,
                        rcd.status,rcd.keterangan
                        FROM plb_header AS hdr
                        LEFT OUTER JOIN rcd_status AS rcd ON hdr.NOMOR_AJU WHERE hdr.NOMOR_AJU LIKE '%" . $_GET['AJU_PLB'] . "%'", 0);
    $cek = $dataGet->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $dataGet->fetch_assoc()) {
            $data[] = [
                // HEADER
                'ID' => $result['ID'],
                'NOMOR_AJU' => $result['NOMOR_AJU'],
                'TGL_AJU' => $result['TGL_AJU'],
                'PEMASOK' => $result['PEMASOK'],
                'KODE_NEGARA_PEMASOK' => $result['KODE_NEGARA_PEMASOK'],
                'NOMOR_DAFTAR' => $result['NOMOR_DAFTAR'],
                'PERUSAHAAN' => $result['PERUSAHAAN'],
                // STATUS
                'status' => $result['status'],
                'keterangan' => $result['keterangan']
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

function get_all()
{
    global $db;
    // $dataGet = $db->query("SELECT ID,NOMOR_AJU,SUBSTR(NOMOR_AJU,13,8) AS TGL_AJU,PEMASOK,KODE_NEGARA_PEMASOK,NOMOR_DAFTAR 
    //                     FROM plb_header ORDER BY ID DESC", 0);
    $dataGet = $db->query("SELECT hdr.ID,hdr.NOMOR_AJU,hdr.SUBSTR(NOMOR_AJU,13,8) AS hdr.TGL_AJU,hdr.PEMASOK,hdr.KODE_NEGARA_PEMASOK,hdr.NOMOR_DAFTAR,hdr.PERUSAHAAN,
                        rcd.status,rcd.keterangan
                        FROM plb_header AS hdr
                        LEFT OUTER JOIN rcd_status AS rcd ON hdr.NOMOR_AJU ORDER BY hdr.ID DESC", 0);
    $cek = $dataGet->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $dataGet->fetch_assoc()) {
            $data[] = [
                // HEADER
                'ID' => $result['ID'],
                'NOMOR_AJU' => $result['NOMOR_AJU'],
                'TGL_AJU' => $result['TGL_AJU'],
                'PEMASOK' => $result['PEMASOK'],
                'KODE_NEGARA_PEMASOK' => $result['KODE_NEGARA_PEMASOK'],
                'NOMOR_DAFTAR' => $result['NOMOR_DAFTAR'],
                'PERUSAHAAN' => $result['PERUSAHAAN'],
                // STATUS
                'status' => $result['status'],
                'keterangan' => $result['keterangan']
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