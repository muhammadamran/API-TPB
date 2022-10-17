<?php
include "db.php";

if (function_exists($_GET['function'])) {
    $_GET['function']();
}

// Header
function get_Header()
{
    global $db;
    $dataGetBC = $db->query("SELECT *,SUBSTR(NOMOR_AJU,13,8) AS TGL_AJU FROM tpb_header WHERE NOMOR_AJU='" . $_GET['AJU'] . "'", 0);
    $cek = $dataGetBC->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $dataGetBC->fetch_assoc()) {
            $data[] = [
                'ID' => $result['ID'],
                'TGL_AJU' => $result['TGL_AJU'],
                'KODE_DOKUMEN_PABEAN' => $result['KODE_DOKUMEN_PABEAN'],
                'NAMA_PENERIMA_BARANG' => $result['NAMA_PENERIMA_BARANG'],
                'NOMOR_IJIN_TPB_PENERIMA' => $result['NOMOR_IJIN_TPB_PENERIMA'],
                'ID_PENERIMA_BARANG' => $result['ID_PENERIMA_BARANG'],
                'ALAMAT_PENERIMA_BARANG' => $result['ALAMAT_PENERIMA_BARANG'],
                'KODE_NEGARA_PEMASOK' => $result['KODE_NEGARA_PEMASOK'],
                'NOMOR_AJU' => $result['NOMOR_AJU'],
                'TANGGAL_AJU' => $result['TANGGAL_AJU']
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

// Kontainer
function get_Kontainer()
{
    global $db;
    $dataGetBC = $db->query("SELECT * FROM tpb_kontainer WHERE ID_HEADER='" . $_GET['ID_HEADER'] . "'", 0);
    $cek = $dataGetBC->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $dataGetBC->fetch_assoc()) {
            $data[] = [
                'ID' => $result['ID'],
                'NOMOR_KONTAINER' => $result['NOMOR_KONTAINER']
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

// Dokumen
function get_Dokumen()
{
    global $db;
    $dataGetBC = $db->query("SELECT * FROM tpb_dokumen WHERE ID_HEADER='" . $_GET['ID_HEADER'] . "'", 0);
    $cek = $dataGetBC->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $dataGetBC->fetch_assoc()) {
            $data[] = [
                'ID' => $result['ID'],
                'NOMOR_DOKUMEN' => $result['NOMOR_DOKUMEN']
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

// Barang
function get_Barang()
{
    global $db;
    $dataGetBC = $db->query("SELECT * FROM tpb_barang WHERE ID_HEADER='" . $_GET['ID_HEADER'] . "'", 0);
    $cek = $dataGetBC->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $dataGetBC->fetch_assoc()) {
            $data[] = [
                'ID' => $result['ID'],
                'URAIAN' => preg_replace('/[^a-zA-Z0-9]/', ' ', $result['URAIAN']),
                'KODE_BARANG' => $result['KODE_BARANG'],
                'UKURAN' => $result['UKURAN'],
                'JUMLAH_SATUAN' => $result['JUMLAH_SATUAN']
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



// Barang
function get_BarangTarif()
{
    global $db;
    $dataGetBC = $db->query("SELECT * FROM tpb_barang_tarif WHERE ID_BARANG='" . $_GET['ID_BARANG'] . "' AND JENIS_TARIF = 'CUKAI'", 0);
    $cek = $dataGetBC->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $dataGetBC->fetch_assoc()) {
            $data[] = [
                'ID' => $result['ID'],
                'JUMLAH_SATUAN' => $result['KODE_BARANG']
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