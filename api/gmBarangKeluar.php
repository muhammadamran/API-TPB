<?php
include "db.php";

if (function_exists($_GET['function'])) {
    $_GET['function']();
}

function get_auto_noAJU()
{
    global $db;
    $dataGet = $db->query("SELECT tpb.NOMOR_AJU FROM tpb_header AS tpb
                           LEFT OUTER JOIN rcd_status AS rcd ON tpb.NOMOR_AJU=rcd.bk_no_aju_sarinah
                           WHERE tpb.NOMOR_AJU LIKE '%" . $_GET['AJU'] . "%'", 0);
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
    $dataGet = $db->query("SELECT hdr.ID,hdr.NOMOR_AJU,SUBSTR(hdr.NOMOR_AJU,13,8) AS TGL_AJU,SUBSTR(rcd.bm_no_aju_plb,13,8) AS TGL_AJU_PLB,hdr.NAMA_PEMASOK,hdr.KODE_NEGARA_PEMASOK,hdr.NOMOR_DAFTAR,hdr.NAMA_PENGUSAHA,hdr.JUMLAH_BARANG,plb.JUMLAH_BARANG AS JUMLAH_BARANG_PLB,
                        rcd.status,rcd.keterangan,
                        rcd.rcd_id,
                        rcd.bm_no_aju_plb,
                        rcd.bm_tgl_masuk,
                        rcd.bm_nama_operator,
                        rcd.bm_remarks,
                        rcd.bk_no_aju_sarinah,
                        rcd.bk_tgl_keluar,
                        rcd.bk_nama_operator,
                        rcd.bk_remarks,
                        rcd.keterangan,
                        rcd.upload_beritaAcara_PLB,
                        rcd.upload_beritaAcara_GB,
                        plb.KODE_NEGARA_PEMASOK AS KODE_NEGARA_PEMASOK_PLB,
                        plb.NOMOR_DAFTAR AS NOMOR_DAFTAR_PLB,
                        plb.PERUSAHAAN,
                        -- PLB
                        (SELECT COUNT(NOMOR_AJU) FROM plb_barang WHERE STATUS='Sesuai' AND NOMOR_AJU=rcd.bm_no_aju_plb) AS plb_total_Sesuai,
                        (SELECT COUNT(NOMOR_AJU) FROM plb_barang WHERE STATUS='Kurang' AND NOMOR_AJU=rcd.bm_no_aju_plb) AS plb_total_Kurang,
                        (SELECT COUNT(NOMOR_AJU) FROM plb_barang WHERE STATUS='Lebih' AND NOMOR_AJU=rcd.bm_no_aju_plb) AS plb_total_Lebih,
                        (SELECT COUNT(NOMOR_AJU) FROM plb_barang WHERE STATUS='Pecah' AND NOMOR_AJU=rcd.bm_no_aju_plb) AS plb_total_Pecah,
                        (SELECT COUNT(NOMOR_AJU) FROM plb_barang WHERE STATUS='Rusak' AND NOMOR_AJU=rcd.bm_no_aju_plb) AS plb_total_Rusak,
                        (SELECT COUNT(NOMOR_AJU) FROM plb_barang WHERE STATUS IS NOT NULL AND NOMOR_AJU=rcd.bm_no_aju_plb) AS plb_total_All,
                        -- TPB
                        (SELECT COUNT(ID_HEADER) FROM tpb_barang WHERE STATUS='Sesuai' AND ID_HEADER=hdr.ID) AS tpb_total_Sesuai,
                        (SELECT COUNT(ID_HEADER) FROM tpb_barang WHERE STATUS='Kurang' AND ID_HEADER=hdr.ID) AS tpb_total_Kurang,
                        (SELECT COUNT(ID_HEADER) FROM tpb_barang WHERE STATUS='Lebih' AND ID_HEADER=hdr.ID) AS tpb_total_Lebih,
                        (SELECT COUNT(ID_HEADER) FROM tpb_barang WHERE STATUS='Pecah' AND ID_HEADER=hdr.ID) AS tpb_total_Pecah,
                        (SELECT COUNT(ID_HEADER) FROM tpb_barang WHERE STATUS='Rusak' AND ID_HEADER=hdr.ID) AS tpb_total_Rusak,
                        (SELECT COUNT(ID_HEADER) FROM tpb_barang WHERE STATUS IS NOT NULL AND ID_HEADER=hdr.ID) AS tpb_total_All
                        FROM tpb_header AS hdr
                        LEFT OUTER JOIN rcd_status AS rcd ON hdr.NOMOR_AJU=rcd.bk_no_aju_sarinah 
                        LEFT OUTER JOIN plb_header AS plb ON rcd.bm_no_aju_plb=plb.NOMOR_AJU
                        WHERE hdr.NOMOR_AJU LIKE '%" . $_GET['AJU_GB'] . "%' GROUP BY hdr.NOMOR_AJU ", 0);
    $cek = $dataGet->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $dataGet->fetch_assoc()) {
            $data[] = [
                // HEADER
                'ID' => $result['ID'],
                'NOMOR_AJU' => $result['NOMOR_AJU'],
                'TGL_AJU' => $result['TGL_AJU'],
                'TGL_AJU_PLB' => $result['TGL_AJU_PLB'],
                'NAMA_PEMASOK' => $result['NAMA_PEMASOK'],
                'KODE_NEGARA_PEMASOK' => $result['KODE_NEGARA_PEMASOK'],
                'KODE_NEGARA_PEMASOK_PLB' => $result['KODE_NEGARA_PEMASOK_PLB'],
                'NOMOR_DAFTAR' => $result['NOMOR_DAFTAR'],
                'NOMOR_DAFTAR_PLB' => $result['NOMOR_DAFTAR_PLB'],
                'NAMA_PENGUSAHA' => $result['NAMA_PENGUSAHA'],
                'JUMLAH_BARANG' => $result['JUMLAH_BARANG'],
                'JUMLAH_BARANG_PLB' => $result['JUMLAH_BARANG_PLB'],
                'PERUSAHAAN' => $result['PERUSAHAAN'],
                // STATUS
                'status' => $result['status'],
                'keterangan' => $result['keterangan'],
                // STATUS
                // PLB
                'plb_total_Sesuai' => $result['plb_total_Sesuai'],
                'plb_total_Kurang' => $result['plb_total_Kurang'],
                'plb_total_Lebih' => $result['plb_total_Lebih'],
                'plb_total_Pecah' => $result['plb_total_Pecah'],
                'plb_total_Rusak' => $result['plb_total_Rusak'],
                'plb_total_All' => $result['plb_total_All'],
                // TPB
                'tpb_total_Sesuai' => $result['tpb_total_Sesuai'],
                'tpb_total_Kurang' => $result['tpb_total_Kurang'],
                'tpb_total_Lebih' => $result['tpb_total_Lebih'],
                'tpb_total_Pecah' => $result['tpb_total_Pecah'],
                'tpb_total_Rusak' => $result['tpb_total_Rusak'],
                'tpb_total_All' => $result['tpb_total_All'],
                // RCD
                'rcd_id' => $result['rcd_id'],
                'bm_no_aju_plb' => $result['bm_no_aju_plb'],
                'bm_tgl_masuk' => $result['bm_tgl_masuk'],
                'bm_nama_operator' => $result['bm_nama_operator'],
                'bm_remarks' => $result['bm_remarks'],
                'bk_no_aju_sarinah' => $result['bk_no_aju_sarinah'],
                'bk_tgl_keluar' => $result['bk_tgl_keluar'],
                'bk_nama_operator' => $result['bk_nama_operator'],
                'bk_remarks' => $result['bk_remarks'],
                'keterangan' => $result['keterangan'],
                'upload_beritaAcara_PLB' => $result['upload_beritaAcara_PLB'],
                'upload_beritaAcara_GB' => $result['upload_beritaAcara_GB'],
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
    $dataGet = $db->query("SELECT hdr.ID,hdr.NOMOR_AJU,SUBSTR(hdr.NOMOR_AJU,13,8) AS TGL_AJU,SUBSTR(rcd.bm_no_aju_plb,13,8) AS TGL_AJU_PLB,hdr.NAMA_PEMASOK,hdr.KODE_NEGARA_PEMASOK,hdr.NOMOR_DAFTAR,hdr.NAMA_PENGUSAHA,hdr.JUMLAH_BARANG,plb.JUMLAH_BARANG AS JUMLAH_BARANG_PLB,
                        rcd.status,rcd.keterangan,
                        rcd.rcd_id,
                        rcd.bm_no_aju_plb,
                        rcd.bm_tgl_masuk,
                        rcd.bm_nama_operator,
                        rcd.bm_remarks,
                        rcd.bk_no_aju_sarinah,
                        rcd.bk_tgl_keluar,
                        rcd.bk_nama_operator,
                        rcd.bk_remarks,
                        rcd.keterangan,
                        rcd.upload_beritaAcara_PLB,
                        rcd.upload_beritaAcara_GB,
                        plb.KODE_NEGARA_PEMASOK AS KODE_NEGARA_PEMASOK_PLB,
                        plb.NOMOR_DAFTAR AS NOMOR_DAFTAR_PLB,
                        plb.PERUSAHAAN,
                        -- PLB
                        (SELECT COUNT(NOMOR_AJU) FROM plb_barang WHERE STATUS='Sesuai' AND NOMOR_AJU=rcd.bm_no_aju_plb) AS plb_total_Sesuai,
                        (SELECT COUNT(NOMOR_AJU) FROM plb_barang WHERE STATUS='Kurang' AND NOMOR_AJU=rcd.bm_no_aju_plb) AS plb_total_Kurang,
                        (SELECT COUNT(NOMOR_AJU) FROM plb_barang WHERE STATUS='Lebih' AND NOMOR_AJU=rcd.bm_no_aju_plb) AS plb_total_Lebih,
                        (SELECT COUNT(NOMOR_AJU) FROM plb_barang WHERE STATUS='Pecah' AND NOMOR_AJU=rcd.bm_no_aju_plb) AS plb_total_Pecah,
                        (SELECT COUNT(NOMOR_AJU) FROM plb_barang WHERE STATUS='Rusak' AND NOMOR_AJU=rcd.bm_no_aju_plb) AS plb_total_Rusak,
                        (SELECT COUNT(NOMOR_AJU) FROM plb_barang WHERE STATUS IS NOT NULL AND NOMOR_AJU=rcd.bm_no_aju_plb) AS plb_total_All,
                        -- TPB
                        (SELECT COUNT(ID_HEADER) FROM tpb_barang WHERE STATUS='Sesuai' AND ID_HEADER=hdr.ID) AS tpb_total_Sesuai,
                        (SELECT COUNT(ID_HEADER) FROM tpb_barang WHERE STATUS='Kurang' AND ID_HEADER=hdr.ID) AS tpb_total_Kurang,
                        (SELECT COUNT(ID_HEADER) FROM tpb_barang WHERE STATUS='Lebih' AND ID_HEADER=hdr.ID) AS tpb_total_Lebih,
                        (SELECT COUNT(ID_HEADER) FROM tpb_barang WHERE STATUS='Pecah' AND ID_HEADER=hdr.ID) AS tpb_total_Pecah,
                        (SELECT COUNT(ID_HEADER) FROM tpb_barang WHERE STATUS='Rusak' AND ID_HEADER=hdr.ID) AS tpb_total_Rusak,
                        (SELECT COUNT(ID_HEADER) FROM tpb_barang WHERE STATUS IS NOT NULL AND ID_HEADER=hdr.ID) AS tpb_total_All
                        FROM tpb_header AS hdr
                        LEFT OUTER JOIN rcd_status AS rcd ON hdr.NOMOR_AJU=rcd.bk_no_aju_sarinah 
                        LEFT OUTER JOIN plb_header AS plb ON rcd.bm_no_aju_plb=plb.NOMOR_AJU
                        GROUP BY hdr.NOMOR_AJU", 0);
    $cek = $dataGet->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $dataGet->fetch_assoc()) {
            $data[] = [
                // HEADER
                'ID' => $result['ID'],
                'NOMOR_AJU' => $result['NOMOR_AJU'],
                'TGL_AJU' => $result['TGL_AJU'],
                'TGL_AJU_PLB' => $result['TGL_AJU_PLB'],
                'NAMA_PEMASOK' => $result['NAMA_PEMASOK'],
                'KODE_NEGARA_PEMASOK' => $result['KODE_NEGARA_PEMASOK'],
                'KODE_NEGARA_PEMASOK_PLB' => $result['KODE_NEGARA_PEMASOK_PLB'],
                'NOMOR_DAFTAR' => $result['NOMOR_DAFTAR'],
                'NOMOR_DAFTAR_PLB' => $result['NOMOR_DAFTAR_PLB'],
                'NAMA_PENGUSAHA' => $result['NAMA_PENGUSAHA'],
                'JUMLAH_BARANG' => $result['JUMLAH_BARANG'],
                'JUMLAH_BARANG_PLB' => $result['JUMLAH_BARANG_PLB'],
                'PERUSAHAAN' => $result['PERUSAHAAN'],
                // STATUS
                'status' => $result['status'],
                'keterangan' => $result['keterangan'],
                // STATUS
                // PLB
                'plb_total_Sesuai' => $result['plb_total_Sesuai'],
                'plb_total_Kurang' => $result['plb_total_Kurang'],
                'plb_total_Lebih' => $result['plb_total_Lebih'],
                'plb_total_Pecah' => $result['plb_total_Pecah'],
                'plb_total_Rusak' => $result['plb_total_Rusak'],
                'plb_total_All' => $result['plb_total_All'],
                // TPB
                'tpb_total_Sesuai' => $result['tpb_total_Sesuai'],
                'tpb_total_Kurang' => $result['tpb_total_Kurang'],
                'tpb_total_Lebih' => $result['tpb_total_Lebih'],
                'tpb_total_Pecah' => $result['tpb_total_Pecah'],
                'tpb_total_Rusak' => $result['tpb_total_Rusak'],
                'tpb_total_All' => $result['tpb_total_All'],
                // RCD
                'rcd_id' => $result['rcd_id'],
                'bm_no_aju_plb' => $result['bm_no_aju_plb'],
                'bm_tgl_masuk' => $result['bm_tgl_masuk'],
                'bm_nama_operator' => $result['bm_nama_operator'],
                'bm_remarks' => $result['bm_remarks'],
                'bk_no_aju_sarinah' => $result['bk_no_aju_sarinah'],
                'bk_tgl_keluar' => $result['bk_tgl_keluar'],
                'bk_nama_operator' => $result['bk_nama_operator'],
                'bk_remarks' => $result['bk_remarks'],
                'keterangan' => $result['keterangan'],
                'upload_beritaAcara_PLB' => $result['upload_beritaAcara_PLB'],
                'upload_beritaAcara_GB' => $result['upload_beritaAcara_GB'],
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