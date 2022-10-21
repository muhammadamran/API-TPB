<?php
include "db.php";

if (function_exists($_GET['function'])) {
    $_GET['function']();
}

// AJU
function get_NomorPengajuan()
{
    global $db;
    $getData = $db->query("SELECT *,tpb.ID AS ID_HDR,tpb.CIF AS CIF_HDR,brg.ID AS ID_BARANG,pgs.NAMA,pgs.NPWP AS nm_pengusaha
                            FROM tpb_header AS tpb 
                            LEFT OUTER JOIN tpb_barang AS brg ON tpb.ID=brg.ID_HEADER
                            LEFT OUTER JOIN tpb_bahan_baku AS bk ON brg.ID=bk.ID_BARANG
                            LEFT OUTER JOIN plb_status AS psts ON bk.NOMOR_AJU_DOK_ASAL=psts.NOMOR_AJU_PLB
                            LEFT OUTER JOIN referensi_pengusaha AS pgs ON tpb.NAMA_PENERIMA_BARANG=pgs.NAMA
                            WHERE tpb.NOMOR_AJU LIKE '%" . $_GET['NomorPengajuan'] . "%'
                            GROUP BY tpb.ID", 0);
    $cek = $getData->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $getData->fetch_assoc()) {
            $data[] = [
                // TPB_HEADER
                'ID_HDR' => $result['ID_HDR'],
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
                'CIF_HDR' => $result['CIF_HDR'],
                'CIF_RUPIAH' => $result['CIF_RUPIAH'],
                'DISKON' => $result['DISKON'],
                'FLAG_PEMILIK' => $result['FLAG_PEMILIK'],
                'FLAG_URL_DOKUMEN_PABEAN' => $result['FLAG_URL_DOKUMEN_PABEAN'],
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
                'KODE_DOKUMEN_PABEAN' => $result['KODE_DOKUMEN_PABEAN'],
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
                'KODE_JENIS_PEMASUKAN02' => $result['KODE_JENIS_PEMASUKAN02'],
                'KODE_JENIS_TPB' => $result['KODE_JENIS_TPB'],
                'KODE_KANTOR' => $result['KODE_KANTOR'],
                'KODE_KANTOR_BONGKAR' => $result['KODE_KANTOR_BONGKAR'],
                'KODE_KANTOR_TUJUAN' => $result['KODE_KANTOR_TUJUAN'],
                'KODE_LOKASI_BAYAR' => $result['KODE_LOKASI_BAYAR'],
                'KODE_NEGARA_PEMASOK' => $result['KODE_NEGARA_PEMASOK'],
                'KODE_NEGARA_PEMILIK' => $result['KODE_NEGARA_PEMILIK'],
                'KODE_NEGARA_PENGIRIM' => $result['KODE_NEGARA_PENGIRIM'],
                'KODE_NEGARA_TUJUAN' => $result['KODE_NEGARA_TUJUAN'],
                'KODE_PEL_BONGKAR' => $result['KODE_PEL_BONGKAR'],
                'KODE_PEL_MUAT' => $result['KODE_PEL_MUAT'],
                'KODE_PEL_TRANSIT' => $result['KODE_PEL_TRANSIT'],
                'KODE_PEMBAYAR' => $result['KODE_PEMBAYAR'],
                'KODE_STATUS' => $result['KODE_STATUS'],
                'KODE_STATUS_PENGUSAHA' => $result['KODE_STATUS_PENGUSAHA'],
                'KODE_STATUS_PERBAIKAN' => $result['KODE_STATUS_PERBAIKAN'],
                'KODE_TPS' => $result['KODE_TPS'],
                'KODE_TUJUAN_PEMASUKAN' => $result['KODE_TUJUAN_PEMASUKAN'],
                'KODE_TUJUAN_PENGIRIMAN' => $result['KODE_TUJUAN_PENGIRIMAN'],
                'KODE_TUJUAN_TPB' => $result['KODE_TUJUAN_TPB'],
                'KODE_TUTUP_PU' => $result['KODE_TUTUP_PU'],
                'KODE_VALUTA' => $result['KODE_VALUTA'],
                'KOTA_TTD' => $result['KOTA_TTD'],
                'LOKASI_ASAL' => $result['LOKASI_ASAL'],
                'LOKASI_TUJUAN' => $result['LOKASI_TUJUAN'],
                'NAMA_PEMASOK' => $result['NAMA_PEMASOK'],
                'NAMA_PEMILIK' => $result['NAMA_PEMILIK'],
                'NAMA_PENERIMA_BARANG' => $result['NAMA_PENERIMA_BARANG'],
                'NAMA_PENGANGKUT' => $result['NAMA_PENGANGKUT'],
                'NAMA_PENGIRIM' => $result['NAMA_PENGIRIM'],
                'NAMA_PENGUSAHA' => $result['NAMA_PENGUSAHA'],
                'NAMA_PPJK' => $result['NAMA_PPJK'],
                'NAMA_TTD' => $result['NAMA_TTD'],
                'NDPBM' => $result['NDPBM'],
                'NETTO' => $result['NETTO'],
                'NILAI_INCOTERM' => $result['NILAI_INCOTERM'],
                'NIPER_PENERIMA' => $result['NIPER_PENERIMA'],
                'NOMOR_AJU' => $result['NOMOR_AJU'],
                'NOMOR_API' => $result['NOMOR_API'],
                'NOMOR_BC11' => $result['NOMOR_BC11'],
                'NOMOR_BILLING' => $result['NOMOR_BILLING'],
                'NOMOR_DAFTAR' => $result['NOMOR_DAFTAR'],
                'NOMOR_IJIN_BPK_PEMASOK' => $result['NOMOR_IJIN_BPK_PEMASOK'],
                'NOMOR_IJIN_BPK_PENGUSAHA' => $result['NOMOR_IJIN_BPK_PENGUSAHA'],
                'NOMOR_IJIN_TPB' => $result['NOMOR_IJIN_TPB'],
                'NOMOR_IJIN_TPB_PENERIMA' => $result['NOMOR_IJIN_TPB_PENERIMA'],
                'NOMOR_POLISI' => $result['NOMOR_POLISI'],
                'NOMOR_VOY_FLIGHT' => $result['NOMOR_VOY_FLIGHT'],
                'NPPPJK' => $result['NPPPJK'],
                'NPWP_BILLING' => $result['NPWP_BILLING'],
                'POS_BC11' => $result['POS_BC11'],
                'SERI' => $result['SERI'],
                'SUBPOS_BC11' => $result['SUBPOS_BC11'],
                'SUBSUBPOS_BC11' => $result['SUBSUBPOS_BC11'],
                'TANGGAL_AJU' => $result['TANGGAL_AJU'],
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
                'TGL_JATUH_TEMPO_BILLING' => $result['TGL_JATUH_TEMPO_BILLING'],
                'TOTAL_BAYAR' => $result['TOTAL_BAYAR'],
                'TOTAL_BEBAS' => $result['TOTAL_BEBAS'],
                'TOTAL_DILUNASI' => $result['TOTAL_DILUNASI'],
                'TOTAL_JAMIN' => $result['TOTAL_JAMIN'],
                'TOTAL_SUDAH_DILUNASI' => $result['TOTAL_SUDAH_DILUNASI'],
                'TOTAL_TANGGUH' => $result['TOTAL_TANGGUH'],
                'TOTAL_TANGGUNG' => $result['TOTAL_TANGGUNG'],
                'TOTAL_TIDAK_DIPUNGUT' => $result['TOTAL_TIDAK_DIPUNGUT'],
                'URL_DOKUMEN_PABEAN' => $result['URL_DOKUMEN_PABEAN'],
                'VERSI_MODUL' => $result['VERSI_MODUL'],
                'VOLUME' => $result['VOLUME'],
                'WAKTU_BONGKAR' => $result['WAKTU_BONGKAR'],
                'WAKTU_STUFFING' => $result['WAKTU_STUFFING'],
                'TANGGAL_MUAT' => $result['TANGGAL_MUAT'],
                'TEMPAT_STUFFING' => $result['TEMPAT_STUFFING'],
                'CALL_SIGN' => $result['CALL_SIGN'],
                'JUMLAH_TANDA_PENGAMAN' => $result['JUMLAH_TANDA_PENGAMAN'],
                'KODE_JENIS_TANDA_PENGAMAN' => $result['KODE_JENIS_TANDA_PENGAMAN'],
                'KODE_KANTOR_MUAT' => $result['KODE_KANTOR_MUAT'],
                'KODE_PEL_TUJUAN' => $result['KODE_PEL_TUJUAN'],
                'TANGGAL_STUFFING' => $result['TANGGAL_STUFFING'],
                'KODE_GUDANG_ASAL' => $result['KODE_GUDANG_ASAL'],
                'KODE_GUDANG_TUJUAN' => $result['KODE_GUDANG_TUJUAN'],
                // TPB_BARANG
                'ID_BARANG' => $result['ID_BARANG'],
                'ASURANSI' => $result['ASURANSI'],
                'CIF' => $result['CIF'],
                'CIF_RUPIAH' => $result['CIF_RUPIAH'],
                'DISKON' => $result['DISKON'],
                'FLAG_KENDARAAN' => $result['FLAG_KENDARAAN'],
                'FOB' => $result['FOB'],
                'FREIGHT' => $result['FREIGHT'],
                'HARGA_BARANG_LDP' => $result['HARGA_BARANG_LDP'],
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
                'KODE_FASILITAS_DOKUMEN' => $result['KODE_FASILITAS_DOKUMEN'],
                'KODE_GUNA' => $result['KODE_GUNA'],
                'KODE_JENIS_NILAI' => $result['KODE_JENIS_NILAI'],
                'KODE_KEMASAN' => $result['KODE_KEMASAN'],
                'KODE_LEBIH_DARI4TAHUN' => $result['KODE_LEBIH_DARI4TAHUN'],
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
                'NOMOR_RANGKA' => $result['NOMOR_RANGKA'],
                'POS_TARIF' => $result['POS_TARIF'],
                'SERI_BARANG' => $result['SERI_BARANG'],
                'SERI_IJIN' => $result['SERI_IJIN'],
                'SERI_POS_TARIF' => $result['SERI_POS_TARIF'],
                'SPESIFIKASI_LAIN' => $result['SPESIFIKASI_LAIN'],
                'TAHUN_PEMBUATAN' => $result['TAHUN_PEMBUATAN'],
                'TIPE' => $result['TIPE'],
                'UKURAN' => $result['UKURAN'],
                'URAIAN' => $result['URAIAN'],
                'VOLUME' => $result['VOLUME'],
                'ID_HEADER' => $result['ID_HEADER'],
                'ID_EKSPORTIR' => $result['ID_EKSPORTIR'],
                'NAMA_EKSPORTIR' => $result['NAMA_EKSPORTIR'],
                'ALAMAT_EKSPORTIR' => $result['ALAMAT_EKSPORTIR'],
                'KODE_PERHITUNGAN' => $result['KODE_PERHITUNGAN'],
                'SERI_BARANG_DOK_ASAL' => $result['SERI_BARANG_DOK_ASAL'],
                'nm_pengusaha' => $result['nm_pengusaha'],
                'NPWP' => $result['NPWP'],
                // TPB_BAHAN_BAKU
                'KODE_JENIS_DOK_ASAL' => $result['KODE_JENIS_DOK_ASAL'],
                'NOMOR_AJU_DOK_ASAL' => $result['NOMOR_AJU_DOK_ASAL'],
                'NOMOR_DAFTAR_DOK_ASAL' => $result['NOMOR_DAFTAR_DOK_ASAL'],
                'TANGGAL_DAFTAR_DOK_ASAL' => $result['TANGGAL_DAFTAR_DOK_ASAL'],
                // PLB_STATUS
                'ck5_plb_submit' => $result['ck5_plb_submit'],
                'ck5_plb_export' => $result['ck5_plb_export'],
                'ck5_gb_submit' => $result['ck5_gb_submit'],
                'ck_gb_export' => $result['ck_gb_export']

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

// Detail Kontainer
function get_NomorPengajuanKon()
{
    global $db;
    $getData = $db->query("SELECT * FROM tpb_kontainer WHERE ID_HEADER=" . $_GET['ID'] . "", 0);
    $cek = $getData->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $getData->fetch_assoc()) {
            $data[] = [
                'ID' => $result['ID'],
                'KESESUAIAN_DOKUMEN' => $result['KESESUAIAN_DOKUMEN'],
                'KETERANGAN' => $result['KETERANGAN'],
                'KODE_STUFFING' => $result['KODE_STUFFING'],
                'KODE_TIPE_KONTAINER' => $result['KODE_TIPE_KONTAINER'],
                'KODE_UKURAN_KONTAINER' => $result['KODE_UKURAN_KONTAINER'],
                'FLAG_GATE_IN' => $result['FLAG_GATE_IN'],
                'FLAG_GATE_OUT' => $result['FLAG_GATE_OUT'],
                'NO_POLISI' => $result['NO_POLISI'],
                'NOMOR_KONTAINER' => $result['NOMOR_KONTAINER'],
                'NOMOR_SEGEL' => $result['NOMOR_SEGEL'],
                'SERI_KONTAINER' => $result['SERI_KONTAINER'],
                'WAKTU_GATE_IN' => $result['WAKTU_GATE_IN'],
                'WAKTU_GATE_OUT' => $result['WAKTU_GATE_OUT'],
                'ID_HEADER' => $result['ID_HEADER']
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

// AJU
function get_MataUang()
{
    global $db;
    $getData = $db->query("SELECT *,tpb.ID AS ID_HDR,tpb.CIF AS CIF_HDR,brg.ID AS ID_BARANG,pgs.NAMA,pgs.NPWP AS nm_pengusaha
                            FROM tpb_header AS tpb 
                            LEFT OUTER JOIN tpb_barang AS brg ON tpb.ID=brg.ID_HEADER
                            LEFT OUTER JOIN tpb_bahan_baku AS bk ON brg.ID=bk.ID_BARANG
                            LEFT OUTER JOIN plb_status AS psts ON bk.NOMOR_AJU_DOK_ASAL=psts.NOMOR_AJU_PLB
                            LEFT OUTER JOIN referensi_pengusaha AS pgs ON tpb.NAMA_PENERIMA_BARANG=pgs.NAMA
                            WHERE tpb.KODE_VALUTA LIKE '%" . $_GET['MataUang'] . "%'
                            GROUP BY tpb.ID", 0);
    $cek = $getData->num_rows;

    if ($cek > 0) {
        $data = [];

        while ($result = $getData->fetch_assoc()) {
            $data[] = [
                // TPB_HEADER
                'ID_HDR' => $result['ID_HDR'],
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
                'CIF_HDR' => $result['CIF_HDR'],
                'CIF_RUPIAH' => $result['CIF_RUPIAH'],
                'DISKON' => $result['DISKON'],
                'FLAG_PEMILIK' => $result['FLAG_PEMILIK'],
                'FLAG_URL_DOKUMEN_PABEAN' => $result['FLAG_URL_DOKUMEN_PABEAN'],
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
                'KODE_DOKUMEN_PABEAN' => $result['KODE_DOKUMEN_PABEAN'],
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
                'KODE_JENIS_PEMASUKAN02' => $result['KODE_JENIS_PEMASUKAN02'],
                'KODE_JENIS_TPB' => $result['KODE_JENIS_TPB'],
                'KODE_KANTOR' => $result['KODE_KANTOR'],
                'KODE_KANTOR_BONGKAR' => $result['KODE_KANTOR_BONGKAR'],
                'KODE_KANTOR_TUJUAN' => $result['KODE_KANTOR_TUJUAN'],
                'KODE_LOKASI_BAYAR' => $result['KODE_LOKASI_BAYAR'],
                'KODE_NEGARA_PEMASOK' => $result['KODE_NEGARA_PEMASOK'],
                'KODE_NEGARA_PEMILIK' => $result['KODE_NEGARA_PEMILIK'],
                'KODE_NEGARA_PENGIRIM' => $result['KODE_NEGARA_PENGIRIM'],
                'KODE_NEGARA_TUJUAN' => $result['KODE_NEGARA_TUJUAN'],
                'KODE_PEL_BONGKAR' => $result['KODE_PEL_BONGKAR'],
                'KODE_PEL_MUAT' => $result['KODE_PEL_MUAT'],
                'KODE_PEL_TRANSIT' => $result['KODE_PEL_TRANSIT'],
                'KODE_PEMBAYAR' => $result['KODE_PEMBAYAR'],
                'KODE_STATUS' => $result['KODE_STATUS'],
                'KODE_STATUS_PENGUSAHA' => $result['KODE_STATUS_PENGUSAHA'],
                'KODE_STATUS_PERBAIKAN' => $result['KODE_STATUS_PERBAIKAN'],
                'KODE_TPS' => $result['KODE_TPS'],
                'KODE_TUJUAN_PEMASUKAN' => $result['KODE_TUJUAN_PEMASUKAN'],
                'KODE_TUJUAN_PENGIRIMAN' => $result['KODE_TUJUAN_PENGIRIMAN'],
                'KODE_TUJUAN_TPB' => $result['KODE_TUJUAN_TPB'],
                'KODE_TUTUP_PU' => $result['KODE_TUTUP_PU'],
                'KODE_VALUTA' => $result['KODE_VALUTA'],
                'KOTA_TTD' => $result['KOTA_TTD'],
                'LOKASI_ASAL' => $result['LOKASI_ASAL'],
                'LOKASI_TUJUAN' => $result['LOKASI_TUJUAN'],
                'NAMA_PEMASOK' => $result['NAMA_PEMASOK'],
                'NAMA_PEMILIK' => $result['NAMA_PEMILIK'],
                'NAMA_PENERIMA_BARANG' => $result['NAMA_PENERIMA_BARANG'],
                'NAMA_PENGANGKUT' => $result['NAMA_PENGANGKUT'],
                'NAMA_PENGIRIM' => $result['NAMA_PENGIRIM'],
                'NAMA_PENGUSAHA' => $result['NAMA_PENGUSAHA'],
                'NAMA_PPJK' => $result['NAMA_PPJK'],
                'NAMA_TTD' => $result['NAMA_TTD'],
                'NDPBM' => $result['NDPBM'],
                'NETTO' => $result['NETTO'],
                'NILAI_INCOTERM' => $result['NILAI_INCOTERM'],
                'NIPER_PENERIMA' => $result['NIPER_PENERIMA'],
                'NOMOR_AJU' => $result['NOMOR_AJU'],
                'NOMOR_API' => $result['NOMOR_API'],
                'NOMOR_BC11' => $result['NOMOR_BC11'],
                'NOMOR_BILLING' => $result['NOMOR_BILLING'],
                'NOMOR_DAFTAR' => $result['NOMOR_DAFTAR'],
                'NOMOR_IJIN_BPK_PEMASOK' => $result['NOMOR_IJIN_BPK_PEMASOK'],
                'NOMOR_IJIN_BPK_PENGUSAHA' => $result['NOMOR_IJIN_BPK_PENGUSAHA'],
                'NOMOR_IJIN_TPB' => $result['NOMOR_IJIN_TPB'],
                'NOMOR_IJIN_TPB_PENERIMA' => $result['NOMOR_IJIN_TPB_PENERIMA'],
                'NOMOR_POLISI' => $result['NOMOR_POLISI'],
                'NOMOR_VOY_FLIGHT' => $result['NOMOR_VOY_FLIGHT'],
                'NPPPJK' => $result['NPPPJK'],
                'NPWP_BILLING' => $result['NPWP_BILLING'],
                'POS_BC11' => $result['POS_BC11'],
                'SERI' => $result['SERI'],
                'SUBPOS_BC11' => $result['SUBPOS_BC11'],
                'SUBSUBPOS_BC11' => $result['SUBSUBPOS_BC11'],
                'TANGGAL_AJU' => $result['TANGGAL_AJU'],
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
                'TGL_JATUH_TEMPO_BILLING' => $result['TGL_JATUH_TEMPO_BILLING'],
                'TOTAL_BAYAR' => $result['TOTAL_BAYAR'],
                'TOTAL_BEBAS' => $result['TOTAL_BEBAS'],
                'TOTAL_DILUNASI' => $result['TOTAL_DILUNASI'],
                'TOTAL_JAMIN' => $result['TOTAL_JAMIN'],
                'TOTAL_SUDAH_DILUNASI' => $result['TOTAL_SUDAH_DILUNASI'],
                'TOTAL_TANGGUH' => $result['TOTAL_TANGGUH'],
                'TOTAL_TANGGUNG' => $result['TOTAL_TANGGUNG'],
                'TOTAL_TIDAK_DIPUNGUT' => $result['TOTAL_TIDAK_DIPUNGUT'],
                'URL_DOKUMEN_PABEAN' => $result['URL_DOKUMEN_PABEAN'],
                'VERSI_MODUL' => $result['VERSI_MODUL'],
                'VOLUME' => $result['VOLUME'],
                'WAKTU_BONGKAR' => $result['WAKTU_BONGKAR'],
                'WAKTU_STUFFING' => $result['WAKTU_STUFFING'],
                'TANGGAL_MUAT' => $result['TANGGAL_MUAT'],
                'TEMPAT_STUFFING' => $result['TEMPAT_STUFFING'],
                'CALL_SIGN' => $result['CALL_SIGN'],
                'JUMLAH_TANDA_PENGAMAN' => $result['JUMLAH_TANDA_PENGAMAN'],
                'KODE_JENIS_TANDA_PENGAMAN' => $result['KODE_JENIS_TANDA_PENGAMAN'],
                'KODE_KANTOR_MUAT' => $result['KODE_KANTOR_MUAT'],
                'KODE_PEL_TUJUAN' => $result['KODE_PEL_TUJUAN'],
                'TANGGAL_STUFFING' => $result['TANGGAL_STUFFING'],
                'KODE_GUDANG_ASAL' => $result['KODE_GUDANG_ASAL'],
                'KODE_GUDANG_TUJUAN' => $result['KODE_GUDANG_TUJUAN'],
                // TPB_BARANG
                'ID_BARANG' => $result['ID_BARANG'],
                'ASURANSI' => $result['ASURANSI'],
                'CIF' => $result['CIF'],
                'CIF_RUPIAH' => $result['CIF_RUPIAH'],
                'DISKON' => $result['DISKON'],
                'FLAG_KENDARAAN' => $result['FLAG_KENDARAAN'],
                'FOB' => $result['FOB'],
                'FREIGHT' => $result['FREIGHT'],
                'HARGA_BARANG_LDP' => $result['HARGA_BARANG_LDP'],
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
                'KODE_FASILITAS_DOKUMEN' => $result['KODE_FASILITAS_DOKUMEN'],
                'KODE_GUNA' => $result['KODE_GUNA'],
                'KODE_JENIS_NILAI' => $result['KODE_JENIS_NILAI'],
                'KODE_KEMASAN' => $result['KODE_KEMASAN'],
                'KODE_LEBIH_DARI4TAHUN' => $result['KODE_LEBIH_DARI4TAHUN'],
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
                'NOMOR_RANGKA' => $result['NOMOR_RANGKA'],
                'POS_TARIF' => $result['POS_TARIF'],
                'SERI_BARANG' => $result['SERI_BARANG'],
                'SERI_IJIN' => $result['SERI_IJIN'],
                'SERI_POS_TARIF' => $result['SERI_POS_TARIF'],
                'SPESIFIKASI_LAIN' => $result['SPESIFIKASI_LAIN'],
                'TAHUN_PEMBUATAN' => $result['TAHUN_PEMBUATAN'],
                'TIPE' => $result['TIPE'],
                'UKURAN' => $result['UKURAN'],
                'URAIAN' => $result['URAIAN'],
                'VOLUME' => $result['VOLUME'],
                'ID_HEADER' => $result['ID_HEADER'],
                'ID_EKSPORTIR' => $result['ID_EKSPORTIR'],
                'NAMA_EKSPORTIR' => $result['NAMA_EKSPORTIR'],
                'ALAMAT_EKSPORTIR' => $result['ALAMAT_EKSPORTIR'],
                'KODE_PERHITUNGAN' => $result['KODE_PERHITUNGAN'],
                'SERI_BARANG_DOK_ASAL' => $result['SERI_BARANG_DOK_ASAL'],
                'nm_pengusaha' => $result['nm_pengusaha'],
                'NPWP' => $result['NPWP'],
                // TPB_BAHAN_BAKU
                'KODE_JENIS_DOK_ASAL' => $result['KODE_JENIS_DOK_ASAL'],
                'NOMOR_AJU_DOK_ASAL' => $result['NOMOR_AJU_DOK_ASAL'],
                'NOMOR_DAFTAR_DOK_ASAL' => $result['NOMOR_DAFTAR_DOK_ASAL'],
                'TANGGAL_DAFTAR_DOK_ASAL' => $result['TANGGAL_DAFTAR_DOK_ASAL'],
                // PLB_STATUS
                'ck5_plb_submit' => $result['ck5_plb_submit'],
                'ck5_plb_export' => $result['ck5_plb_export'],
                'ck5_gb_submit' => $result['ck5_gb_submit'],
                'ck_gb_export' => $result['ck_gb_export']

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