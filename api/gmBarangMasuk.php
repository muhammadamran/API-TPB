<?php
include "db.php";

if (function_exists($_GET['function'])) {
    $_GET['function']();
}

function get_auto_noAJU()
{
    global $db;
    $dataGet = $db->query("SELECT NOMOR_AJU FROM plb_header WHERE NOMOR AJU LIKE '%" . $_GET['AJU'] . "%'", 0);
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

function get_noAJU()
{
    global $db;
    $dataGet = $db->query("SELECT hdr.ID,hdr.NOMOR_AJU,SUBSTR(hdr.NOMOR_AJU,13,8) AS TGL_AJU,hdr.PEMASOK,hdr.KODE_NEGARA_PEMASOK,hdr.NOMOR_DAFTAR,hdr.PERUSAHAAN,hdr.JUMLAH_BARANG,
                        rcd.status,rcd.keterangan,plb.ck5_plb_submit,
                        (SELECT COUNT(*) AS total_bc FROM plb_barang WHERE STATUS='Sesuai') AS total_Sesuai,
                        (SELECT COUNT(*) AS total_bc FROM plb_barang WHERE STATUS='Kurang') AS total_Kurang,
                        (SELECT COUNT(*) AS total_bc FROM plb_barang WHERE STATUS='Lebih') AS total_Lebih,
                        (SELECT COUNT(*) AS total_bc FROM plb_barang WHERE STATUS='Pecah') AS total_Pecah,
                        (SELECT COUNT(*) AS total_bc FROM plb_barang WHERE STATUS='Rusak') AS total_Rusak,
                        (SELECT COUNT(*) AS total_bc FROM plb_barang WHERE STATUS IS NOT NULL) AS total_All
                        FROM plb_header AS hdr
                        LEFT OUTER JOIN rcd_status AS rcd ON hdr.NOMOR_AJU=rcd.bm_no_aju_plb 
                        LEFT OUTER JOIN plb_status AS plb ON hdr.NOMOR_AJU=plb.NOMOR_AJU_PLB 
                        WHERE hdr.NOMOR_AJU LIKE '%" . $_GET['AJU_PLB'] . "%'", 0);
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
                'JUMLAH_BARANG' => $result['JUMLAH_BARANG'],
                // STATUS
                'status' => $result['status'],
                'keterangan' => $result['keterangan'],
                // STATUS
                'total_Sesuai' => $result['total_Sesuai'],
                'total_Kurang' => $result['total_Kurang'],
                'total_Lebih' => $result['total_Lebih'],
                'total_Pecah' => $result['total_Pecah'],
                'total_Rusak' => $result['total_Rusak'],
                'total_All' => $result['total_All'],
                // PLB
                'ck5_plb_submit' => $result['ck5_plb_submit'],
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
    $dataGet = $db->query("SELECT hdr.ID,hdr.NOMOR_AJU,SUBSTR(hdr.NOMOR_AJU,13,8) AS TGL_AJU,hdr.PEMASOK,hdr.KODE_NEGARA_PEMASOK,hdr.NOMOR_DAFTAR,hdr.PERUSAHAAN,hdr.JUMLAH_BARANG,
                        rcd.status,rcd.keterangan,plb.ck5_plb_submit,
                        (SELECT COUNT(*) AS total_bc FROM plb_barang WHERE STATUS='Sesuai') AS total_Sesuai,
                        (SELECT COUNT(*) AS total_bc FROM plb_barang WHERE STATUS='Kurang') AS total_Kurang,
                        (SELECT COUNT(*) AS total_bc FROM plb_barang WHERE STATUS='Lebih') AS total_Lebih,
                        (SELECT COUNT(*) AS total_bc FROM plb_barang WHERE STATUS='Pecah') AS total_Pecah,
                        (SELECT COUNT(*) AS total_bc FROM plb_barang WHERE STATUS='Rusak') AS total_Rusak,
                        (SELECT COUNT(*) AS total_bc FROM plb_barang WHERE STATUS IS NOT NULL) AS total_All
                        FROM plb_header AS hdr
                        LEFT OUTER JOIN rcd_status AS rcd ON hdr.NOMOR_AJU=rcd.bm_no_aju_plb 
                        LEFT OUTER JOIN plb_status AS plb ON hdr.NOMOR_AJU=plb.NOMOR_AJU_PLB 
                        ORDER BY hdr.ID DESC", 0);
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
                'JUMLAH_BARANG' => $result['JUMLAH_BARANG'],
                // STATUS
                'status' => $result['status'],
                'keterangan' => $result['keterangan'],
                // STATUS
                'total_Sesuai' => $result['total_Sesuai'],
                'total_Kurang' => $result['total_Kurang'],
                'total_Lebih' => $result['total_Lebih'],
                'total_Pecah' => $result['total_Pecah'],
                'total_Rusak' => $result['total_Rusak'],
                'total_All' => $result['total_All'],
                // PLB
                'ck5_plb_submit' => $result['ck5_plb_submit'],
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