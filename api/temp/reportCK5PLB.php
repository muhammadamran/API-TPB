<?php
include "db.php";

if (function_exists($_GET['function'])) {
    $_GET['function']();
}

// HEADER
function get_Header()
{
    global $db;
    $getData = $db->query("SELECT * FROM plb_header ORDER BY ID DESC", 0);
    $cek = $getData->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $getData->fetch_assoc()) {
            $data[] = [
                'ID' => $result['ID'],
                'NOMOR_AJU' => $result['NOMOR_AJU'],
                'KPPBC' => $result['KPPBC'],
                'PERUSAHAAN' => $result['PERUSAHAAN'],
                'PEMASOK' => $result['PEMASOK'],
                'STATUS' => $result['STATUS'],
                'KODE_DOKUMEN_PABEAN' => $result['KODE_DOKUMEN_PABEAN'],
                'NPPJK' => $result['NPPJK'],
                'ALAMAT_PEMASOK' => $result['ALAMAT_PEMASOK'],
                'ALAMAT_PEMILIK' => $result['ALAMAT_PEMILIK'],
                'ALAMAT_PENERIMA_BARANG' => $result['ALAMAT_PENERIMA_BARANG'],
                'ALAMAT_PENGIRIM' => $result['ALAMAT_PENGIRIM'],
                'ALAMAT_PENGUSAHA' => $result['ALAMAT_PENGUSAHA'],
                'ALAMAT_PPJK' => $result['ALAMAT_PPJK'],
                'API_PEMILIK' => $result['API_PEMILIK'],
                'API_PENERIMA' => $result['API_PENERIMA'],
                'API_PENGUSAHA' => $result['API_PENGUSAHA'],
                'ASAL_DATA' => $result['ASAL_DATA'],
                'ASURANSI' => $result['ASURANSI'],
                'BIAYA_TAMBAHAN' => $result['BIAYA_TAMBAHAN'],
                'BRUTO' => $result['BRUTO'],
                'CIF' => $result['CIF'],
                'CIF_RUPIAH' => $result['CIF_RUPIAH'],
                'DISKON' => $result['DISKON'],
                'FLAG_PEMILIK' => $result['FLAG_PEMILIK'],
                'URL_DOKUMEN_PABEAN' => $result['URL_DOKUMEN_PABEAN'],
                'FOB' => $result['FOB'],
                'FREIGHT' => $result['FREIGHT'],
                'HARGA_BARANG_LDP' => $result['HARGA_BARANG_LDP'],
                'HARGA_INVOICE' => $result['HARGA_INVOICE'],
                'HARGA_PENYERAHAN' => $result['HARGA_PENYERAHAN'],
                'HARGA_TOTAL' => $result['HARGA_TOTAL'],
                'ID_MODUL' => $result['ID_MODUL'],
                'ID_PEMASOK' => $result['ID_PEMASOK'],
                'ID_PEMILIK' => $result['ID_PEMILIK'],
                'ID_PENERIMA_BARANG' => $result['ID_PENERIMA_BARANG'],
                'ID_PENGIRIM' => $result['ID_PENGIRIM'],
                'ID_PENGUSAHA' => $result['ID_PENGUSAHA'],
                'ID_PPJK' => $result['ID_PPJK'],
                'JABATAN_TTD' => $result['JABATAN_TTD'],
                'JUMLAH_BARANG' => $result['JUMLAH_BARANG'],
                'JUMLAH_KEMASAN' => $result['JUMLAH_KEMASAN'],
                'JUMLAH_KONTAINER' => $result['JUMLAH_KONTAINER'],
                'KESESUAIAN_DOKUMEN' => $result['KESESUAIAN_DOKUMEN'],
                'KETERANGAN' => $result['KETERANGAN'],
                'KODE_ASAL_BARANG' => $result['KODE_ASAL_BARANG'],
                'KODE_ASURANSI' => $result['KODE_ASURANSI'],
                'KODE_BENDERA' => $result['KODE_BENDERA'],
                'KODE_CARA_ANGKUT' => $result['KODE_CARA_ANGKUT'],
                'KODE_CARA_BAYAR' => $result['KODE_CARA_BAYAR'],
                'KODE_DAERAH_ASAL' => $result['KODE_DAERAH_ASAL'],
                'KODE_FASILITAS' => $result['KODE_FASILITAS'],
                'KODE_FTZ' => $result['KODE_FTZ'],
                'KODE_HARGA' => $result['KODE_HARGA'],
                'KODE_ID_PEMASOK' => $result['KODE_ID_PEMASOK'],
                'KODE_ID_PEMILIK' => $result['KODE_ID_PEMILIK'],
                'KODE_ID_PENERIMA_BARANG' => $result['KODE_ID_PENERIMA_BARANG'],
                'KODE_ID_PENGIRIM' => $result['KODE_ID_PENGIRIM'],
                'KODE_ID_PENGUSAHA' => $result['KODE_ID_PENGUSAHA'],
                'KODE_ID_PPJK' => $result['KODE_ID_PPJK'],
                'KODE_JENIS_API' => $result['KODE_JENIS_API'],
                'KODE_JENIS_API_PEMILIK' => $result['KODE_JENIS_API_PEMILIK'],
                'KODE_JENIS_API_PENERIMA' => $result['KODE_JENIS_API_PENERIMA'],
                'KODE_JENIS_API_PENGUSAHA' => $result['KODE_JENIS_API_PENGUSAHA'],
                'KODE_JENIS_BARANG' => $result['KODE_JENIS_BARANG'],
                'KODE_JENIS_BC25' => $result['KODE_JENIS_BC25'],
                'KODE_JENIS_NILAI' => $result['KODE_JENIS_NILAI'],
                'KODE_JENIS_PEMASUKAN01' => $result['KODE_JENIS_PEMASUKAN01'],
                'KODE_JENIS_PEMASUKAN_02' => $result['KODE_JENIS_PEMASUKAN_02'],
                'KODE_JENIS_TPB' => $result['KODE_JENIS_TPB'],
                'KODE_KANTOR_BONGKAR' => $result['KODE_KANTOR_BONGKAR'],
                'KODE_KANTOR_TUJUAN' => $result['KODE_KANTOR_TUJUAN'],
                'KODE_LOKASI_BAYAR' => $result['KODE_LOKASI_BAYAR'],
                'KODE_NEGARA_PEMASOK' => $result['KODE_NEGARA_PEMASOK'],
                'KODE_NEGARA_PENGIRIM' => $result['KODE_NEGARA_PENGIRIM'],
                'KODE_NEGARA_PEMILIK' => $result['KODE_NEGARA_PEMILIK'],
                'KODE_NEGARA_TUJUAN' => $result['KODE_NEGARA_TUJUAN'],
                'KODE_PEL_BONGKAR' => $result['KODE_PEL_BONGKAR'],
                'KODE_PEL_MUAT' => $result['KODE_PEL_MUAT'],
                'KODE_PEL_TRANSIT' => $result['KODE_PEL_TRANSIT'],
                'KODE_PEMBAYAR' => $result['KODE_PEMBAYAR'],
                'KODE_STATUS_PENGUSAHA' => $result['KODE_STATUS_PENGUSAHA'],
                'STATUS_PERBAIKAN' => $result['STATUS_PERBAIKAN'],
                'KODE_TPS' => $result['KODE_TPS'],
                'KODE_TUJUAN_PEMASUKAN' => $result['KODE_TUJUAN_PEMASUKAN'],
                'KODE_TUJUAN_PENGIRIMAN' => $result['KODE_TUJUAN_PENGIRIMAN'],
                'KODE_TUJUAN_TPB' => $result['KODE_TUJUAN_TPB'],
                'KODE_TUTUP_PU' => $result['KODE_TUTUP_PU'],
                'KODE_VALUTA' => $result['KODE_VALUTA'],
                'KOTA_TTD' => $result['KOTA_TTD'],
                'NAMA_PEMILIK' => $result['NAMA_PEMILIK'],
                'NAMA_PENERIMA_BARANG' => $result['NAMA_PENERIMA_BARANG'],
                'NAMA_PENGANGKUT' => $result['NAMA_PENGANGKUT'],
                'NAMA_PENGIRIM' => $result['NAMA_PENGIRIM'],
                'NAMA_PPJK' => $result['NAMA_PPJK'],
                'NAMA_TTD' => $result['NAMA_TTD'],
                'NDPBM' => $result['NDPBM'],
                'NETTO' => $result['NETTO'],
                'NILAI_INCOTERM' => $result['NILAI_INCOTERM'],
                'NIPER_PENERIMA' => $result['NIPER_PENERIMA'],
                'NOMOR_API' => $result['NOMOR_API'],
                'NOMOR_BC11' => $result['NOMOR_BC11'],
                'NOMOR_BILLING' => $result['NOMOR_BILLING'],
                'NOMOR_DAFTAR' => $result['NOMOR_DAFTAR'],
                'NOMOR_IJIN_BPK_PEMASOK' => $result['NOMOR_IJIN_BPK_PEMASOK'],
                'NOMOR_IJIN_BPK_PENGUSAHA' => $result['NOMOR_IJIN_BPK_PENGUSAHA'],
                'NOMOR_IJIN_TPB' => $result['NOMOR_IJIN_TPB'],
                'NOMOR_IJIN_TPB_PENERIMA' => $result['NOMOR_IJIN_TPB_PENERIMA'],
                'NOMOR_VOYV_FLIGHT' => $result['NOMOR_VOYV_FLIGHT'],
                'NPWP_BILLING' => $result['NPWP_BILLING'],
                'POS_BC11' => $result['POS_BC11'],
                'SERI' => $result['SERI'],
                'SUBPOS_BC11' => $result['SUBPOS_BC11'],
                'SUB_SUBPOS_BC11' => $result['SUB_SUBPOS_BC11'],
                'TANGGAL_BC11' => $result['TANGGAL_BC11'],
                'TANGGAL_BERANGKAT' => $result['TANGGAL_BERANGKAT'],
                'TANGGAL_BILLING' => $result['TANGGAL_BILLING'],
                'TANGGAL_DAFTAR' => $result['TANGGAL_DAFTAR'],
                'TANGGAL_IJIN_BPK_PEMASOK' => $result['TANGGAL_IJIN_BPK_PEMASOK'],
                'TANGGAL_IJIN_BPK_PENGUSAHA' => $result['TANGGAL_IJIN_BPK_PENGUSAHA'],
                'TANGGAL_IJIN_TPB' => $result['TANGGAL_IJIN_TPB'],
                'TANGGAL_NPPPJK' => $result['TANGGAL_NPPPJK'],
                'TANGGAL_TIBA' => $result['TANGGAL_TIBA'],
                'TANGGAL_TTD' => $result['TANGGAL_TTD'],
                'TANGGAL_JATUH_TEMPO' => $result['TANGGAL_JATUH_TEMPO'],
                'TOTAL_BAYAR' => $result['TOTAL_BAYAR'],
                'TOTAL_BEBAS' => $result['TOTAL_BEBAS'],
                'TOTAL_DILUNASI' => $result['TOTAL_DILUNASI'],
                'TOTAL_JAMIN' => $result['TOTAL_JAMIN'],
                'TOTAL_SUDAH_DILUNASI' => $result['TOTAL_SUDAH_DILUNASI'],
                'TOTAL_TANGGUH' => $result['TOTAL_TANGGUH'],
                'TOTAL_TANGGUNG' => $result['TOTAL_TANGGUNG'],
                'TOTAL_TIDAK_DIPUNGUT' => $result['TOTAL_TIDAK_DIPUNGUT'],
                'URL_DOKUMEN_PABEAN_2' => $result['URL_DOKUMEN_PABEAN_2'],
                'VERSI_MODUL' => $result['VERSI_MODUL'],
                'VOLUME' => $result['VOLUME'],
                'WAKTU_BONGKAR' => $result['WAKTU_BONGKAR'],
                'WAKTU_STUFFING' => $result['WAKTU_STUFFING'],
                'NOMOR_POLISI' => $result['NOMOR_POLISI'],
                'CALL_SIGN' => $result['CALL_SIGN'],
                'JUMLAH_TANDA_PENGAMAN' => $result['JUMLAH_TANDA_PENGAMAN'],
                'KODE_JENIS_TANDA_PENGAMAN' => $result['KODE_JENIS_TANDA_PENGAMAN'],
                'KODE_KANTOR_MUAT' => $result['KODE_KANTOR_MUAT'],
                'KODE_PEL_TUJUAN' => $result['KODE_PEL_TUJUAN'],
                'TANGGAL_STUFFING' => $result['TANGGAL_STUFFING'],
                'TANGGAL_MUAT' => $result['TANGGAL_MUAT'],
                'KODE_GUDANG_ASAL' => $result['KODE_GUDANG_ASAL'],
                'KODE_GUDANG_TUJUAN' => $result['KODE_GUDANG_TUJUAN']
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

// BAHAN BAKU
function get_BahanBaku()
{
    global $db;
    $getData = $db->query("SELECT * FROM plb_bahanbaku ORDER BY ID DESC", 0);
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
    $getData = $db->query("SELECT * FROM plb_bahanbakutarif ORDER BY ID DESC", 0);
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
    $getData = $db->query("SELECT * FROM plb_bahanbakudokumen ORDER BY ID DESC", 0);
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
    $getData = $db->query("SELECT * FROM plb_barang ORDER BY ID DESC", 0);
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
    $getData = $db->query("SELECT * FROM plb_barangtarif ORDER BY ID DESC", 0);
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
    $getData = $db->query("SELECT * FROM plb_barangdokumen ORDER BY ID DESC", 0);
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
    $getData = $db->query("SELECT * FROM plb_dokumen ORDER BY ID DESC", 0);
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
    $getData = $db->query("SELECT * FROM plb_kemasan ORDER BY ID DESC", 0);
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
    $getData = $db->query("SELECT * FROM plb_kontainer ORDER BY ID DESC", 0);
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

// RESPON
function get_Respon()
{
    global $db;
    $getData = $db->query("SELECT * FROM plb_respon ORDER BY ID DESC", 0);
    $cek = $getData->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $getData->fetch_assoc()) {
            $data[] = [
                'ID' => $result['ID'],
                'NOMOR_AJU' => $result['NOMOR_AJU'],
                'KODE_RESPON' => $result['KODE_RESPON'],
                'NOMOR_RESPON' => $result['NOMOR_RESPON'],
                'TANGGAL_RESPON' => $result['TANGGAL_RESPON'],
                'WAKTU_RESPON' => $result['WAKTU_RESPON'],
                'BYTE_STRAM_PDF' => $result['BYTE_STRAM_PDF']
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

// STATUS
function get_Status()
{
    global $db;
    $getData = $db->query("SELECT * FROM plb_status ORDER BY ID DESC", 0);
    $cek = $getData->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $getData->fetch_assoc()) {
            $data[] = [
                'ID' => $result['ID'],
                'NOMOR_AJU' => $result['NOMOR_AJU_PLB'],
                'KODE_RESPON' => $result['KODE_RESPON'],
                'NOMOR_RESPON' => $result['NOMOR_RESPON'],
                'ck5_plb_submit' => $result['ck5_plb_submit'],
                'ck5_plb_export' => $result['ck5_plb_export']
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

// LOG
function get_Log()
{
    global $db;
    $getData = $db->query("SELECT * FROM plb_log ORDER BY ID DESC", 0);
    $cek = $getData->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $getData->fetch_assoc()) {
            $data[] = [
                'ID' => $result['ID'],
                'username' => $result['username'],
                'filename' => $result['filename'],
                'totalupload' => $result['totalupload'],
                'dateupload' => $result['dateupload'],
                'status' => $result['status']
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

// LOG UPLOAD
function get_LogUpload()
{
    global $db;
    $getData = $db->query("SELECT * FROM plb_log ORDER BY ID DESC LIMIT 1", 0);
    $cek = $getData->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $getData->fetch_assoc()) {
            $data[] = [
                'ID' => $result['ID'],
                'username' => $result['username'],
                'filename' => $result['filename'],
                'totalupload' => $result['totalupload'],
                'dateupload' => $result['dateupload'],
                'status' => $result['status']
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