<?php
include "db.php";

if (function_exists($_GET['function'])) {
    $_GET['function']();
}

// BAHAN BAKU
function get_BahanBaku()
{
    global $db;
    $getData = $db->query("SELECT * FROM plb_bahanbaku WHERE NOMOR_AJU='" . $_GET['AJU'] . "' ORDER BY ID DESC", 0);
    $cek = $getData->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $getData->fetch_assoc()) {
            $data[] = [
                'ID' => $result['ID'],
                'NOMOR_AJU' => $result['NOMOR_AJU'],
                'SERI_BARANG' => $result['SERI_BARANG'],
                'SERI_BAHAN_BAKU' => $result['SERI_BAHAN_BAKU'],
                'CIF' => $result['CIF'],
                'CIF_RUPIAH' => $result['CIF_RUPIAH'],
                'HARGA_PENYERAHAN' => $result['HARGA_PENYERAHAN'],
                'HARGA_PEROLEHAN' => $result['HARGA_PEROLEHAN'],
                'JENIS_SATUAN' => $result['JENIS_SATUAN'],
                'JUMLAH_SATUAN' => $result['JUMLAH_SATUAN'],
                'JUMLAH_SATUAN' => $result['JUMLAH_SATUAN'],
                'KODE_ASAL_BAHAN_BAKU' => $result['KODE_ASAL_BAHAN_BAKU'],
                'KODE_BARANG' => $result['KODE_BARANG'],
                'KODE_FASILITAS' => $result['KODE_FASILITAS'],
                'KODE_JENIS_DOK_ASAL' => $result['KODE_JENIS_DOK_ASAL'],
                'KODE_KANTOR' => $result['KODE_KANTOR'],
                'KODE_SKEMA_TARIF' => $result['KODE_SKEMA_TARIF'],
                'KODE_STATUS' => $result['KODE_STATUS'],
                'MERK' => $result['MERK'],
                'NDPBM' => $result['NDPBM'],
                'NETTO' => $result['NETTO'],
                'NOMOR_AJU_DOKUMEN_ASAL' => $result['NOMOR_AJU_DOKUMEN_ASAL'],
                'NOMOR_DAFTAR_DOKUMEN_ASAL' => $result['NOMOR_DAFTAR_DOKUMEN_ASAL'],
                'POS_TARIF' => $result['POS_TARIF'],
                'SERI_BARANG_DOKUMEN_ASAL' => $result['SERI_BARANG_DOKUMEN_ASAL'],
                'SPESIFIKASI_LAIN' => $result['SPESIFIKASI_LAIN'],
                'TANGGAL_DAFTAR_DOKUMEN_ASAL' => $result['TANGGAL_DAFTAR_DOKUMEN_ASAL'],
                'TIPE' => $result['TIPE'],
                'UKURAN' => $result['UKURAN'],
                'URAIAN' => $result['URAIAN'],
                'SERI_IJIN' => $result['SERI_IJIN']
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

// BAHAN BAKU TARIF
function get_BahanBakuTarif()
{
    global $db;
    $getData = $db->query("SELECT * FROM plb_bahanbakutarif WHERE NOMOR_AJU='" . $_GET['AJU'] . "' ORDER BY ID DESC", 0);
    $cek = $getData->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $getData->fetch_assoc()) {
            $data[] = [
                'ID' => $result['ID'],
                'NOMOR_AJU' => $result['NOMOR_AJU'],
                'SERI_BARANG' => $result['SERI_BARANG'],
                'SERI_BAHAN_BAKU' => $result['SERI_BAHAN_BAKU'],
                'JENIS_TARIF' => $result['JENIS_TARIF'],
                'JUMLAH_SATUAN' => $result['JUMLAH_SATUAN'],
                'KODE_ASAL_BAHAN_BAKU' => $result['KODE_ASAL_BAHAN_BAKU'],
                'KODE_FASILITAS' => $result['KODE_FASILITAS'],
                'KODE_KOMODITI_CUKAI' => $result['KODE_KOMODITI_CUKAI'],
                'KODE_SATUAN' => $result['KODE_SATUAN'],
                'KODE_TARIF' => $result['KODE_TARIF'],
                'NILAI_BAYAR' => $result['NILAI_BAYAR'],
                'NILAI_FASILITAS' => $result['NILAI_FASILITAS'],
                'NILAI_SUDAH_DILUNASI' => $result['NILAI_SUDAH_DILUNASI'],
                'TARIF' => $result['TARIF'],
                'TARIF_FASILITAS' => $result['TARIF_FASILITAS']
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

// BAHAN BAKU DOKUMEN
function get_BahanBakuDokumen()
{
    global $db;
    $getData = $db->query("SELECT * FROM plb_bahanbakudokumen WHERE NOMOR_AJU='" . $_GET['AJU'] . "' ORDER BY ID DESC", 0);
    $cek = $getData->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $getData->fetch_assoc()) {
            $data[] = [
                'ID' => $result['ID'],
                'NOMOR_AJU' => $result['NOMOR_AJU'],
                'SERI_BARANG' => $result['SERI_BARANG'],
                'SERI_BAHAN_BAKU' => $result['SERI_BAHAN_BAKU'],
                'SERI_DOKUMEN' => $result['SERI_DOKUMEN'],
                'KODE_ASAL_BAHAN_BAKU' => $result['KODE_ASAL_BAHAN_BAKU']
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
    $getData = $db->query("SELECT * FROM plb_barang WHERE NOMOR_AJU='" . $_GET['AJU'] . "' ORDER BY ID DESC", 0);
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

// BARANG TARIF
function get_BarangTarif()
{
    global $db;
    $getData = $db->query("SELECT * FROM plb_barangtarif WHERE NOMOR_AJU='" . $_GET['AJU'] . "' ORDER BY ID DESC", 0);
    $cek = $getData->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $getData->fetch_assoc()) {
            $data[] = [
                'ID' => $result['ID'],
                'NOMOR_AJU' => $result['NOMOR_AJU'],
                'SERI_BARANG' => $result['SERI_BARANG'],
                'JENIS_TARIF' => $result['JENIS_TARIF'],
                'JUMLAH_SATUAN' => $result['JUMLAH_SATUAN'],
                'KODE_FASILITAS' => $result['KODE_FASILITAS'],
                'KODE_KOMODITI_CUKAI' => $result['KODE_KOMODITI_CUKAI'],
                'TARIF_KODE_SATUAN' => $result['TARIF_KODE_SATUAN'],
                'TARIF_KODE_TARIF' => $result['TARIF_KODE_TARIF'],
                'TARIF_NILAI_BAYAR' => $result['TARIF_NILAI_BAYAR'],
                'TARIF_NILAI_FASILITAS' => $result['TARIF_NILAI_FASILITAS'],
                'TARIF_NILAI_SUDAH_DILUNASI' => $result['TARIF_NILAI_SUDAH_DILUNASI'],
                'TARIF' => $result['TARIF'],
                'TARIF_FASILITAS' => $result['TARIF_FASILITAS']
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

// BARANG DOKUMEN
function get_BarangDokumen()
{
    global $db;
    $getData = $db->query("SELECT * FROM plb_barangdokumen WHERE NOMOR_AJU='" . $_GET['AJU'] . "' ORDER BY ID DESC", 0);
    $cek = $getData->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $getData->fetch_assoc()) {
            $data[] = [
                'ID' => $result['ID'],
                'NOMOR_AJU' => $result['NOMOR_AJU'],
                'SERI_BARANG' => $result['SERI_BARANG'],
                'SERI_DOKUMEN' => $result['SERI_DOKUMEN']
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

// DOKUMEN
function get_Dokumen()
{
    global $db;
    $getData = $db->query("SELECT * FROM plb_dokumen WHERE NOMOR_AJU='" . $_GET['AJU'] . "' ORDER BY ID DESC", 0);
    $cek = $getData->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $getData->fetch_assoc()) {
            $data[] = [
                'ID' => $result['ID'],
                'NOMOR_AJU' => $result['NOMOR_AJU'],
                'SERI_DOKUMEN' => $result['SERI_DOKUMEN'],
                'FLAG_URL_DOKUMEN' => $result['FLAG_URL_DOKUMEN'],
                'KODE_JENIS_DOKUMEN' => $result['KODE_JENIS_DOKUMEN'],
                'NOMOR_DOKUMEN' => $result['NOMOR_DOKUMEN'],
                'TANGGAL_DOKUMEN' => $result['TANGGAL_DOKUMEN'],
                'TIPE_DOKUMEN' => $result['TIPE_DOKUMEN'],
                'URL_DOKUMEN' => $result['URL_DOKUMEN']
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

// KEMASAN
function get_Kemasan()
{
    global $db;
    $getData = $db->query("SELECT * FROM plb_kemasan WHERE NOMOR_AJU='" . $_GET['AJU'] . "' ORDER BY ID DESC", 0);
    $cek = $getData->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $getData->fetch_assoc()) {
            $data[] = [
                'ID' => $result['ID'],
                'NOMOR_AJU' => $result['NOMOR_AJU'],
                'SERI_KEMASAN' => $result['SERI_KEMASAN'],
                'JUMLAH_KEMASAN' => $result['JUMLAH_KEMASAN'],
                'KESESUAIAN_DOKUMEN' => $result['KESESUAIAN_DOKUMEN'],
                'KETERANGAN' => $result['KETERANGAN'],
                'KODE_JENIS_KEMASAN' => $result['KODE_JENIS_KEMASAN'],
                'MEREK_KEMASAN' => $result['MEREK_KEMASAN'],
                'NIP_GATE_IN' => $result['NIP_GATE_IN'],
                'NIP_GATE_OUT' => $result['NIP_GATE_OUT'],
                'NOMOR_POLISI' => $result['NOMOR_POLISI'],
                'NOMOR_SEGEL' => $result['NOMOR_SEGEL'],
                'WAKTU_GATE_IN' => $result['WAKTU_GATE_IN'],
                'WAKTU_GATE_OUT' => $result['WAKTU_GATE_OUT']
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

// KONTAINER
function get_Kontainer()
{
    global $db;
    $getData = $db->query("SELECT * FROM plb_kontainer WHERE NOMOR_AJU='" . $_GET['AJU'] . "' ORDER BY ID DESC", 0);
    $cek = $getData->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $getData->fetch_assoc()) {
            $data[] = [
                'ID' => $result['ID'],
                'NOMOR_AJU' => $result['NOMOR_AJU'],
                'SERI_KONTAINER' => $result['SERI_KONTAINER'],
                'KESESUAIAN_DOKUMEN' => $result['KESESUAIAN_DOKUMEN'],
                'KETERANGAN' => $result['KETERANGAN'],
                'KODE_STUFFING' => $result['KODE_STUFFING'],
                'KODE_TIPE_KONTAINER' => $result['KODE_TIPE_KONTAINER'],
                'KODE_UKURAN_KONTAINER' => $result['KODE_UKURAN_KONTAINER'],
                'FLAG_GATE_IN' => $result['FLAG_GATE_IN'],
                'FLAG_GATE_OUT' => $result['FLAG_GATE_OUT'],
                'NOMOR_POLISI' => $result['NOMOR_POLISI'],
                'NOMOR_KONTAINER' => $result['NOMOR_KONTAINER'],
                'NOMOR_SEGEL' => $result['NOMOR_SEGEL'],
                'WAKTU_GATE_IN' => $result['WAKTU_GATE_IN'],
                'WAKTU_GATE_OUT' => $result['WAKTU_GATE_OUT']
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