<?php
include "db.php";

if (function_exists($_GET['function'])) {
    $_GET['function']();
}

// BARANG TOTAL
function get_BarangTotal()
{
    global $db;
    $getData = $db->query("SELECT COUNT(*) AS total FROM plb_barang WHERE NOMOR_AJU='" . $_GET['AJU'] . "' ORDER BY SERI_BARANG ASC", 0);
    $cek = $getData->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $getData->fetch_assoc()) {
            $data[] = [
                'total' => $result['total']
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

// BARANG CEK
function get_BarangCek()
{
    global $db;
    $getData = $db->query("SELECT COUNT(*) AS total_cek FROM plb_barang WHERE status IS NOT NULL AND NOMOR_AJU='" . $_GET['AJU'] . "' ORDER BY SERI_BARANG ASC", 0);
    $cek = $getData->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $getData->fetch_assoc()) {
            $data[] = [
                'total' => $result['total']
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

// BARANG
function get_Barang()
{
    global $db;
    $getData = $db->query("SELECT * FROM plb_barang WHERE NOMOR_AJU='" . $_GET['AJU'] . "' ORDER BY SERI_BARANG ASC", 0);
    $cek = $getData->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $getData->fetch_assoc()) {
            $data[] = [
                'ID' => $result['ID'],
                'NOMOR_AJU' => $result['NOMOR_AJU'],
                'SERI_BARANG' => $result['SERI_BARANG'],
                'ASURANSI' => $result['ASURANSI'],
                'CIF' => $result['CIF'],
                'CIF_RUPIAH' => $result['CIF_RUPIAH'],
                'DISKON' => $result['DISKON'],
                'FLAG_KENDARAAN' => $result['FLAG_KENDARAAN'],
                'FOB' => $result['FOB'],
                'FREIGHT' => $result['FREIGHT'],
                'BARANG_BARANG_LDP' => $result['BARANG_BARANG_LDP'],
                'HARGA_INVOICE' => $result['HARGA_INVOICE'],
                'HARGA_PENYERAHAN' => $result['HARGA_PENYERAHAN'],
                'HARGA_SATUAN' => $result['HARGA_SATUAN'],
                'JENIS_KENDARAAN' => $result['JENIS_KENDARAAN'],
                'JUMLAH_BAHAN_BAKU' => $result['JUMLAH_BAHAN_BAKU'],
                'JUMLAH_KEMASAN' => $result['JUMLAH_KEMASAN'],
                'JUMLAH_SATUAN' => $result['JUMLAH_SATUAN'],
                'KAPASITAS_SILINDER' => $result['KAPASITAS_SILINDER'],
                'KATEGORI_BARANG' => $result['KATEGORI_BARANG'],
                'KODE_ASAL_BARANG' => $result['KODE_ASAL_BARANG'],
                'KODE_BARANG' => $result['KODE_BARANG'],
                'KODE_FASILITAS' => $result['KODE_FASILITAS'],
                'KODE_GUNA' => $result['KODE_GUNA'],
                'KODE_JENIS_NILAI' => $result['KODE_JENIS_NILAI'],
                'KODE_KEMASAN' => $result['KODE_KEMASAN'],
                'KODE_LEBIH_DARI_4_TAHUN' => $result['KODE_LEBIH_DARI_4_TAHUN'],
                'KODE_NEGARA_ASAL' => $result['KODE_NEGARA_ASAL'],
                'KODE_SATUAN' => $result['KODE_SATUAN'],
                'KODE_SKEMA_TARIF' => $result['KODE_SKEMA_TARIF'],
                'KODE_STATUS' => $result['KODE_STATUS'],
                'KONDISI_BARANG' => $result['KONDISI_BARANG'],
                'MERK' => $result['MERK'],
                'NETTO' => $result['NETTO'],
                'NILAI_INCOTERM' => $result['NILAI_INCOTERM'],
                'NILAI_PABEAN' => $result['NILAI_PABEAN'],
                'NOMOR_MESIN' => $result['NOMOR_MESIN'],
                'POS_TARIF' => $result['POS_TARIF'],
                'SERI_POS_TARIF' => $result['SERI_POS_TARIF'],
                'SPESIFIKASI_LAIN' => $result['SPESIFIKASI_LAIN'],
                'TAHUN_PEMBUATAN' => $result['TAHUN_PEMBUATAN'],
                'TIPE' => $result['TIPE'],
                'UKURAN' => $result['UKURAN'],
                'URAIAN' => $result['URAIAN'],
                'VOLUME' => $result['VOLUME'],
                'SERI_IJIN' => $result['SERI_IJIN'],
                'ID_EKSPORTIR' => $result['ID_EKSPORTIR'],
                'NAMA_EKSPORTIR' => $result['NAMA_EKSPORTIR'],
                'ALAMAT_EKSPORTIR' => $result['ALAMAT_EKSPORTIR'],
                'KODE_PERHITUNGAN' => $result['KODE_PERHITUNGAN'],
                'SERI_BARANG_DOK_ASAL' => $result['SERI_BARANG_DOK_ASAL']
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