<?php
include "db/db.php";
include "db/dbmain.php";
// ---------------ROLE DATABASE-------------------------
// $db      = LOCAL DATABASE CONNECTION
// $dbmain  = DOMAIN DATABASE CONNECTION
// ---------------END ROLE DATABASE---------------------

// ------------------DATETIME & USERS----------------------
// SHOW LOCAL SERVER DATETIME
$InputDate  = date('Y-m-d h:m:i');
// ------------------END DATETIME & USERS------------------

// CHECK DATABASE LOCAL tpb_header
// ROLE SYNC: BASE ON ID
// SHOW VALUE TABLE tpb_header
$dataTPB_L = $db->query("SELECT * FROM tpb_header", 0);
// LIST COUNT TABLE  tpb_header
foreach ($dataTPB_L as $row_L) {
    if (@$row_L['ID']) {
        $ID = $row_L['ID'];
        // CHECK DATABASE DOMAIN tpb_header
        $dataTPB_D = $dbmain->query("SELECT * FROM tpb_header WHERE ID='$ID'");
        $row_D = mysqli_fetch_array($dataTPB_D);
        // IF DATA ID ALREADY INSERT ON DATABASE DOMAIN
        if ($row_D['ID'] == NULL) {
            // COUNT ROW TABLES tpb_header FROM DATABASE LOCAL
            $CountTPB_L_to_D    = $db->query("SELECT COUNT(*) total_row FROM tpb_header WHERE ID='$ID'");
            $row_Count_L_to_D   = $CountTPB_L_to_D->fetch_assoc();
            $pcs                = $row_Count_L_to_D['total_row'];
            // ROW TABLES tpb_header FROM DATABASE LOCAL
            $dataTPB_L_to_D     = $db->query("SELECT * FROM tpb_header WHERE ID='$ID'");
            while ($list_L_to_D = $dataTPB_L_to_D->fetch_assoc()) {
                $query = $dbmain->query("INSERT INTO tpb_header
                                        (ID,ALAMAT_PEMASOK,ALAMAT_PEMILIK,ALAMAT_PENERIMA_BARANG,ALAMAT_PENGIRIM,ALAMAT_PENGUSAHA,ALAMAT_PPJK,API_PEMILIK,API_PENERIMA,API_PENGUSAHA,ASAL_DATA,ASURANSI,BIAYA_TAMBAHAN,BRUTO,CIF,CIF_RUPIAH,DISKON,FLAG_PEMILIK,FLAG_URL_DOKUMEN_PABEAN,FOB,FREIGHT,HARGA_BARANG_LDP,HARGA_INVOICE,HARGA_PENYERAHAN,HARGA_TOTAL,ID_MODUL,ID_PEMASOK,ID_PEMILIK,ID_PENERIMA_BARANG,ID_PENGIRIM,ID_PENGUSAHA,ID_PPJK,JABATAN_TTD,JUMLAH_BARANG,JUMLAH_KEMASAN,JUMLAH_KONTAINER,KESESUAIAN_DOKUMEN,KETERANGAN,KODE_ASAL_BARANG,KODE_ASURANSI,KODE_BENDERA,KODE_CARA_ANGKUT,KODE_CARA_BAYAR,KODE_DAERAH_ASAL,KODE_DOKUMEN_PABEAN,KODE_FASILITAS,KODE_FTZ,KODE_HARGA,KODE_ID_PEMASOK,KODE_ID_PEMILIK,KODE_ID_PENERIMA_BARANG,KODE_ID_PENGIRIM,KODE_ID_PENGUSAHA,KODE_ID_PPJK,KODE_JENIS_API,KODE_JENIS_API_PEMILIK,KODE_JENIS_API_PENERIMA,KODE_JENIS_API_PENGUSAHA,KODE_JENIS_BARANG,KODE_JENIS_BC25,KODE_JENIS_NILAI,KODE_JENIS_PEMASUKAN01,KODE_JENIS_PEMASUKAN02,KODE_JENIS_TPB,KODE_KANTOR,KODE_KANTOR_BONGKAR,KODE_KANTOR_TUJUAN,KODE_LOKASI_BAYAR,KODE_NEGARA_PEMASOK,KODE_NEGARA_PEMILIK,KODE_NEGARA_PENGIRIM,KODE_NEGARA_TUJUAN,KODE_PEL_BONGKAR,KODE_PEL_MUAT,KODE_PEL_TRANSIT,KODE_PEMBAYAR,KODE_STATUS,KODE_STATUS_PENGUSAHA,KODE_STATUS_PERBAIKAN,KODE_TPS,KODE_TUJUAN_PEMASUKAN,KODE_TUJUAN_PENGIRIMAN,KODE_TUJUAN_TPB,KODE_TUTUP_PU,KODE_VALUTA,KOTA_TTD,LOKASI_ASAL,LOKASI_TUJUAN,NAMA_PEMASOK,NAMA_PEMILIK,NAMA_PENERIMA_BARANG,NAMA_PENGANGKUT,NAMA_PENGIRIM,NAMA_PENGUSAHA,NAMA_PPJK,NAMA_TTD,NDPBM,NETTO,NILAI_INCOTERM,NIPER_PENERIMA,NOMOR_AJU,NOMOR_API,NOMOR_BC11,NOMOR_BILLING,NOMOR_DAFTAR,NOMOR_IJIN_BPK_PEMASOK,NOMOR_IJIN_BPK_PENGUSAHA,NOMOR_IJIN_TPB,NOMOR_IJIN_TPB_PENERIMA,NOMOR_POLISI,NOMOR_VOY_FLIGHT,NPPPJK,NPWP_BILLING,POS_BC11,SERI,SUBPOS_BC11,SUBSUBPOS_BC11,TANGGAL_AJU,TANGGAL_BC11,TANGGAL_BERANGKAT,TANGGAL_BILLING,TANGGAL_DAFTAR,TANGGAL_IJIN_BPK_PEMASOK,TANGGAL_IJIN_BPK_PENGUSAHA,TANGGAL_IJIN_TPB,TANGGAL_NPPPJK,TANGGAL_TIBA,TANGGAL_TTD,TGL_JATUH_TEMPO_BILLING,TOTAL_BAYAR,TOTAL_BEBAS,TOTAL_DILUNASI,TOTAL_JAMIN,TOTAL_SUDAH_DILUNASI,TOTAL_TANGGUH,TOTAL_TANGGUNG,TOTAL_TIDAK_DIPUNGUT,URL_DOKUMEN_PABEAN,VERSI_MODUL,VOLUME,WAKTU_BONGKAR,WAKTU_STUFFING,TANGGAL_MUAT,TEMPAT_STUFFING,CALL_SIGN,JUMLAH_TANDA_PENGAMAN,KODE_JENIS_TANDA_PENGAMAN,KODE_KANTOR_MUAT,KODE_PEL_TUJUAN,TANGGAL_STUFFING,KODE_GUDANG_ASAL,KODE_GUDANG_TUJUAN)
                                        VALUES
                                        ('$list_L_to_D[ID]','$list_L_to_D[ALAMAT_PEMASOK]','$list_L_to_D[ALAMAT_PEMILIK]','$list_L_to_D[ALAMAT_PENERIMA_BARANG]','$list_L_to_D[ALAMAT_PENGIRIM]','$list_L_to_D[ALAMAT_PENGUSAHA]','$list_L_to_D[ALAMAT_PPJK]','$list_L_to_D[API_PEMILIK]','$list_L_to_D[API_PENERIMA]','$list_L_to_D[API_PENGUSAHA]','$list_L_to_D[ASAL_DATA]','$list_L_to_D[ASURANSI]','$list_L_to_D[BIAYA_TAMBAHAN]','$list_L_to_D[BRUTO]','$list_L_to_D[CIF]','$list_L_to_D[CIF_RUPIAH]','$list_L_to_D[DISKON]','$list_L_to_D[FLAG_PEMILIK]','$list_L_to_D[FLAG_URL_DOKUMEN_PABEAN]','$list_L_to_D[FOB]','$list_L_to_D[FREIGHT]','$list_L_to_D[HARGA_BARANG_LDP]','$list_L_to_D[HARGA_INVOICE]','$list_L_to_D[HARGA_PENYERAHAN]','$list_L_to_D[HARGA_TOTAL]','$list_L_to_D[ID_MODUL]','$list_L_to_D[ID_PEMASOK]','$list_L_to_D[ID_PEMILIK]','$list_L_to_D[ID_PENERIMA_BARANG]','$list_L_to_D[ID_PENGIRIM]','$list_L_to_D[ID_PENGUSAHA]','$list_L_to_D[ID_PPJK]','$list_L_to_D[JABATAN_TTD]','$list_L_to_D[JUMLAH_BARANG]','$list_L_to_D[JUMLAH_KEMASAN]','$list_L_to_D[JUMLAH_KONTAINER]','$list_L_to_D[KESESUAIAN_DOKUMEN]','$list_L_to_D[KETERANGAN]','$list_L_to_D[KODE_ASAL_BARANG]','$list_L_to_D[KODE_ASURANSI]','$list_L_to_D[KODE_BENDERA]','$list_L_to_D[KODE_CARA_ANGKUT]','$list_L_to_D[KODE_CARA_BAYAR]','$list_L_to_D[KODE_DAERAH_ASAL]','$list_L_to_D[KODE_DOKUMEN_PABEAN]','$list_L_to_D[KODE_FASILITAS]','$list_L_to_D[KODE_FTZ]','$list_L_to_D[KODE_HARGA]','$list_L_to_D[KODE_ID_PEMASOK]','$list_L_to_D[KODE_ID_PEMILIK]','$list_L_to_D[KODE_ID_PENERIMA_BARANG]','$list_L_to_D[KODE_ID_PENGIRIM]','$list_L_to_D[KODE_ID_PENGUSAHA]','$list_L_to_D[KODE_ID_PPJK]','$list_L_to_D[KODE_JENIS_API]','$list_L_to_D[KODE_JENIS_API_PEMILIK]','$list_L_to_D[KODE_JENIS_API_PENERIMA]','$list_L_to_D[KODE_JENIS_API_PENGUSAHA]','$list_L_to_D[KODE_JENIS_BARANG]','$list_L_to_D[KODE_JENIS_BC25]','$list_L_to_D[KODE_JENIS_NILAI]','$list_L_to_D[KODE_JENIS_PEMASUKAN01]','$list_L_to_D[KODE_JENIS_PEMASUKAN02]','$list_L_to_D[KODE_JENIS_TPB]','$list_L_to_D[KODE_KANTOR]','$list_L_to_D[KODE_KANTOR_BONGKAR]','$list_L_to_D[KODE_KANTOR_TUJUAN]','$list_L_to_D[KODE_LOKASI_BAYAR]','$list_L_to_D[KODE_NEGARA_PEMASOK]','$list_L_to_D[KODE_NEGARA_PEMILIK]','$list_L_to_D[KODE_NEGARA_PENGIRIM]','$list_L_to_D[KODE_NEGARA_TUJUAN]','$list_L_to_D[KODE_PEL_BONGKAR]','$list_L_to_D[KODE_PEL_MUAT]','$list_L_to_D[KODE_PEL_TRANSIT]','$list_L_to_D[KODE_PEMBAYAR]','$list_L_to_D[KODE_STATUS]','$list_L_to_D[KODE_STATUS_PENGUSAHA]','$list_L_to_D[KODE_STATUS_PERBAIKAN]','$list_L_to_D[KODE_TPS]','$list_L_to_D[KODE_TUJUAN_PEMASUKAN]','$list_L_to_D[KODE_TUJUAN_PENGIRIMAN]','$list_L_to_D[KODE_TUJUAN_TPB]','$list_L_to_D[KODE_TUTUP_PU]','$list_L_to_D[KODE_VALUTA]','$list_L_to_D[KOTA_TTD]','$list_L_to_D[LOKASI_ASAL]','$list_L_to_D[LOKASI_TUJUAN]','$list_L_to_D[NAMA_PEMASOK]','$list_L_to_D[NAMA_PEMILIK]','$list_L_to_D[NAMA_PENERIMA_BARANG]','$list_L_to_D[NAMA_PENGANGKUT]','$list_L_to_D[NAMA_PENGIRIM]','$list_L_to_D[NAMA_PENGUSAHA]','$list_L_to_D[NAMA_PPJK]','$list_L_to_D[NAMA_TTD]','$list_L_to_D[NDPBM]','$list_L_to_D[NETTO]','$list_L_to_D[NILAI_INCOTERM]','$list_L_to_D[NIPER_PENERIMA]','$list_L_to_D[NOMOR_AJU]','$list_L_to_D[NOMOR_API]','$list_L_to_D[NOMOR_BC11]','$list_L_to_D[NOMOR_BILLING]','$list_L_to_D[NOMOR_DAFTAR]','$list_L_to_D[NOMOR_IJIN_BPK_PEMASOK]','$list_L_to_D[NOMOR_IJIN_BPK_PENGUSAHA]','$list_L_to_D[NOMOR_IJIN_TPB]','$list_L_to_D[NOMOR_IJIN_TPB_PENERIMA]','$list_L_to_D[NOMOR_POLISI]','$list_L_to_D[NOMOR_VOY_FLIGHT]','$list_L_to_D[NPPPJK]','$list_L_to_D[NPWP_BILLING]','$list_L_to_D[POS_BC11]','$list_L_to_D[SERI]','$list_L_to_D[SUBPOS_BC11]','$list_L_to_D[SUBSUBPOS_BC11]','$list_L_to_D[TANGGAL_AJU]','$list_L_to_D[TANGGAL_BC11]','$list_L_to_D[TANGGAL_BERANGKAT]','$list_L_to_D[TANGGAL_BILLING]','$list_L_to_D[TANGGAL_DAFTAR]','$list_L_to_D[TANGGAL_IJIN_BPK_PEMASOK]','$list_L_to_D[TANGGAL_IJIN_BPK_PENGUSAHA]','$list_L_to_D[TANGGAL_IJIN_TPB]','$list_L_to_D[TANGGAL_NPPPJK]','$list_L_to_D[TANGGAL_TIBA]','$list_L_to_D[TANGGAL_TTD]','$list_L_to_D[TGL_JATUH_TEMPO_BILLING]','$list_L_to_D[TOTAL_BAYAR]','$list_L_to_D[TOTAL_BEBAS]','$list_L_to_D[TOTAL_DILUNASI]','$list_L_to_D[TOTAL_JAMIN]','$list_L_to_D[TOTAL_SUDAH_DILUNASI]','$list_L_to_D[TOTAL_TANGGUH]','$list_L_to_D[TOTAL_TANGGUNG]','$list_L_to_D[TOTAL_TIDAK_DIPUNGUT]','$list_L_to_D[URL_DOKUMEN_PABEAN]','$list_L_to_D[VERSI_MODUL]','$list_L_to_D[VOLUME]','$list_L_to_D[WAKTU_BONGKAR]','$list_L_to_D[WAKTU_STUFFING]','$list_L_to_D[TANGGAL_MUAT]','$list_L_to_D[TEMPAT_STUFFING]','$list_L_to_D[CALL_SIGN]','$list_L_to_D[JUMLAH_TANDA_PENGAMAN]','$list_L_to_D[KODE_JENIS_TANDA_PENGAMAN]','$list_L_to_D[KODE_KANTOR_MUAT]','$list_L_to_D[KODE_PEL_TUJUAN]','$list_L_to_D[TANGGAL_STUFFING]','$list_L_to_D[KODE_GUDANG_ASAL]','$list_L_to_D[KODE_GUDANG_TUJUAN]')
                                    ");
            }
        } else {
            // IF ALREADY SYNC CHECK UPDATE DATA
            // COUNT ROW TABLES tpb_header FROM DATABASE LOCAL
            $UpdateCountTPB_L_to_D    = $db->query("SELECT COUNT(*) total_row FROM tpb_header WHERE ID='$ID'");
            $Updaterow_Count_L_to_D   = $UpdateCountTPB_L_to_D->fetch_assoc();
            $Updatepcs                = $Updaterow_Count_L_to_D['total_row'];
            // ROW TABLES tpb_header FROM DATABASE LOCAL
            $UpdatedataTPB_L_to_D     = $db->query("SELECT * FROM tpb_header WHERE ID='$ID'");
            while ($Updatelist_L_to_D = $UpdatedataTPB_L_to_D->fetch_assoc()) {
                $query = $dbmain->query("UPDATE tpb_header SET 
                                                ALAMAT_PEMASOK='$Updatelist_L_to_D[ALAMAT_PEMASOK]',
                                                ALAMAT_PEMILIK='$Updatelist_L_to_D[ALAMAT_PEMILIK]',
                                                ALAMAT_PENERIMA_BARANG='$Updatelist_L_to_D[ALAMAT_PENERIMA_BARANG]',
                                                ALAMAT_PENGIRIM='$Updatelist_L_to_D[ALAMAT_PENGIRIM]',
                                                ALAMAT_PENGUSAHA='$Updatelist_L_to_D[ALAMAT_PENGUSAHA]',
                                                ALAMAT_PPJK='$Updatelist_L_to_D[ALAMAT_PPJK]',
                                                API_PEMILIK='$Updatelist_L_to_D[API_PEMILIK]',
                                                API_PENERIMA='$Updatelist_L_to_D[API_PENERIMA]',
                                                API_PENGUSAHA='$Updatelist_L_to_D[API_PENGUSAHA]',
                                                ASAL_DATA='$Updatelist_L_to_D[ASAL_DATA]',
                                                ASURANSI='$Updatelist_L_to_D[ASURANSI]',
                                                BIAYA_TAMBAHAN='$Updatelist_L_to_D[BIAYA_TAMBAHAN]',
                                                BRUTO='$Updatelist_L_to_D[BRUTO]',
                                                CIF='$Updatelist_L_to_D[CIF]',
                                                CIF_RUPIAH='$Updatelist_L_to_D[CIF_RUPIAH]',
                                                DISKON='$Updatelist_L_to_D[DISKON]',
                                                FLAG_PEMILIK='$Updatelist_L_to_D[FLAG_PEMILIK]',
                                                FLAG_URL_DOKUMEN_PABEAN='$Updatelist_L_to_D[FLAG_URL_DOKUMEN_PABEAN]',
                                                FOB='$Updatelist_L_to_D[FOB]',
                                                FREIGHT='$Updatelist_L_to_D[FREIGHT]',
                                                HARGA_BARANG_LDP='$Updatelist_L_to_D[HARGA_BARANG_LDP]',
                                                HARGA_INVOICE='$Updatelist_L_to_D[HARGA_INVOICE]',
                                                HARGA_PENYERAHAN='$Updatelist_L_to_D[HARGA_PENYERAHAN]',
                                                HARGA_TOTAL='$Updatelist_L_to_D[HARGA_TOTAL]',
                                                ID_MODUL='$Updatelist_L_to_D[ID_MODUL]',
                                                ID_PEMASOK='$Updatelist_L_to_D[ID_PEMASOK]',
                                                ID_PEMILIK='$Updatelist_L_to_D[ID_PEMILIK]',
                                                ID_PENERIMA_BARANG='$Updatelist_L_to_D[ID_PENERIMA_BARANG]',
                                                ID_PENGIRIM='$Updatelist_L_to_D[ID_PENGIRIM]',
                                                ID_PENGUSAHA='$Updatelist_L_to_D[ID_PENGUSAHA]',
                                                ID_PPJK='$Updatelist_L_to_D[ID_PPJK]',
                                                JABATAN_TTD='$Updatelist_L_to_D[JABATAN_TTD]',
                                                JUMLAH_BARANG='$Updatelist_L_to_D[JUMLAH_BARANG]',
                                                JUMLAH_KEMASAN='$Updatelist_L_to_D[JUMLAH_KEMASAN]',
                                                JUMLAH_KONTAINER='$Updatelist_L_to_D[JUMLAH_KONTAINER]',
                                                KESESUAIAN_DOKUMEN='$Updatelist_L_to_D[KESESUAIAN_DOKUMEN]',
                                                KETERANGAN='$Updatelist_L_to_D[KETERANGAN]',
                                                KODE_ASAL_BARANG='$Updatelist_L_to_D[KODE_ASAL_BARANG]',
                                                KODE_ASURANSI='$Updatelist_L_to_D[KODE_ASURANSI]',
                                                KODE_BENDERA='$Updatelist_L_to_D[KODE_BENDERA]',
                                                KODE_CARA_ANGKUT='$Updatelist_L_to_D[KODE_CARA_ANGKUT]',
                                                KODE_CARA_BAYAR='$Updatelist_L_to_D[KODE_CARA_BAYAR]',
                                                KODE_DAERAH_ASAL='$Updatelist_L_to_D[KODE_DAERAH_ASAL]',
                                                KODE_DOKUMEN_PABEAN='$Updatelist_L_to_D[KODE_DOKUMEN_PABEAN]',
                                                KODE_FASILITAS='$Updatelist_L_to_D[KODE_FASILITAS]',
                                                KODE_FTZ='$Updatelist_L_to_D[KODE_FTZ]',
                                                KODE_HARGA='$Updatelist_L_to_D[KODE_HARGA]',
                                                KODE_ID_PEMASOK='$Updatelist_L_to_D[KODE_ID_PEMASOK]',
                                                KODE_ID_PEMILIK='$Updatelist_L_to_D[KODE_ID_PEMILIK]',
                                                KODE_ID_PENERIMA_BARANG='$Updatelist_L_to_D[KODE_ID_PENERIMA_BARANG]',
                                                KODE_ID_PENGIRIM='$Updatelist_L_to_D[KODE_ID_PENGIRIM]',
                                                KODE_ID_PENGUSAHA='$Updatelist_L_to_D[KODE_ID_PENGUSAHA]',
                                                KODE_ID_PPJK='$Updatelist_L_to_D[KODE_ID_PPJK]',
                                                KODE_JENIS_API='$Updatelist_L_to_D[KODE_JENIS_API]',
                                                KODE_JENIS_API_PEMILIK='$Updatelist_L_to_D[KODE_JENIS_API_PEMILIK]',
                                                KODE_JENIS_API_PENERIMA='$Updatelist_L_to_D[KODE_JENIS_API_PENERIMA]',
                                                KODE_JENIS_API_PENGUSAHA='$Updatelist_L_to_D[KODE_JENIS_API_PENGUSAHA]',
                                                KODE_JENIS_BARANG='$Updatelist_L_to_D[KODE_JENIS_BARANG]',
                                                KODE_JENIS_BC25='$Updatelist_L_to_D[KODE_JENIS_BC25]',
                                                KODE_JENIS_NILAI='$Updatelist_L_to_D[KODE_JENIS_NILAI]',
                                                KODE_JENIS_PEMASUKAN01='$Updatelist_L_to_D[KODE_JENIS_PEMASUKAN01]',
                                                KODE_JENIS_PEMASUKAN02='$Updatelist_L_to_D[KODE_JENIS_PEMASUKAN02]',
                                                KODE_JENIS_TPB='$Updatelist_L_to_D[KODE_JENIS_TPB]',
                                                KODE_KANTOR='$Updatelist_L_to_D[KODE_KANTOR]',
                                                KODE_KANTOR_BONGKAR='$Updatelist_L_to_D[KODE_KANTOR_BONGKAR]',
                                                KODE_KANTOR_TUJUAN='$Updatelist_L_to_D[KODE_KANTOR_TUJUAN]',
                                                KODE_LOKASI_BAYAR='$Updatelist_L_to_D[KODE_LOKASI_BAYAR]',
                                                KODE_NEGARA_PEMASOK='$Updatelist_L_to_D[KODE_NEGARA_PEMASOK]',
                                                KODE_NEGARA_PEMILIK='$Updatelist_L_to_D[KODE_NEGARA_PEMILIK]',
                                                KODE_NEGARA_PENGIRIM='$Updatelist_L_to_D[KODE_NEGARA_PENGIRIM]',
                                                KODE_NEGARA_TUJUAN='$Updatelist_L_to_D[KODE_NEGARA_TUJUAN]',
                                                KODE_PEL_BONGKAR='$Updatelist_L_to_D[KODE_PEL_BONGKAR]',
                                                KODE_PEL_MUAT='$Updatelist_L_to_D[KODE_PEL_MUAT]',
                                                KODE_PEL_TRANSIT='$Updatelist_L_to_D[KODE_PEL_TRANSIT]',
                                                KODE_PEMBAYAR='$Updatelist_L_to_D[KODE_PEMBAYAR]',
                                                KODE_STATUS='$Updatelist_L_to_D[KODE_STATUS]',
                                                KODE_STATUS_PENGUSAHA='$Updatelist_L_to_D[KODE_STATUS_PENGUSAHA]',
                                                KODE_STATUS_PERBAIKAN='$Updatelist_L_to_D[KODE_STATUS_PERBAIKAN]',
                                                KODE_TPS='$Updatelist_L_to_D[KODE_TPS]',
                                                KODE_TUJUAN_PEMASUKAN='$Updatelist_L_to_D[KODE_TUJUAN_PEMASUKAN]',
                                                KODE_TUJUAN_PENGIRIMAN='$Updatelist_L_to_D[KODE_TUJUAN_PENGIRIMAN]',
                                                KODE_TUJUAN_TPB='$Updatelist_L_to_D[KODE_TUJUAN_TPB]',
                                                KODE_TUTUP_PU='$Updatelist_L_to_D[KODE_TUTUP_PU]',
                                                KODE_VALUTA='$Updatelist_L_to_D[KODE_VALUTA]',
                                                KOTA_TTD='$Updatelist_L_to_D[KOTA_TTD]',
                                                LOKASI_ASAL='$Updatelist_L_to_D[LOKASI_ASAL]',
                                                LOKASI_TUJUAN='$Updatelist_L_to_D[LOKASI_TUJUAN]',
                                                NAMA_PEMASOK='$Updatelist_L_to_D[NAMA_PEMASOK]',
                                                NAMA_PEMILIK='$Updatelist_L_to_D[NAMA_PEMILIK]',
                                                NAMA_PENERIMA_BARANG='$Updatelist_L_to_D[NAMA_PENERIMA_BARANG]',
                                                NAMA_PENGANGKUT='$Updatelist_L_to_D[NAMA_PENGANGKUT]',
                                                NAMA_PENGIRIM='$Updatelist_L_to_D[NAMA_PENGIRIM]',
                                                NAMA_PENGUSAHA='$Updatelist_L_to_D[NAMA_PENGUSAHA]',
                                                NAMA_PPJK='$Updatelist_L_to_D[NAMA_PPJK]',
                                                NAMA_TTD='$Updatelist_L_to_D[NAMA_TTD]',
                                                NDPBM='$Updatelist_L_to_D[NDPBM]',
                                                NETTO='$Updatelist_L_to_D[NETTO]',
                                                NILAI_INCOTERM='$Updatelist_L_to_D[NILAI_INCOTERM]',
                                                NIPER_PENERIMA='$Updatelist_L_to_D[NIPER_PENERIMA]',
                                                NOMOR_AJU='$Updatelist_L_to_D[NOMOR_AJU]',
                                                NOMOR_API='$Updatelist_L_to_D[NOMOR_API]',
                                                NOMOR_BC11='$Updatelist_L_to_D[NOMOR_BC11]',
                                                NOMOR_BILLING='$Updatelist_L_to_D[NOMOR_BILLING]',
                                                NOMOR_DAFTAR='$Updatelist_L_to_D[NOMOR_DAFTAR]',
                                                NOMOR_IJIN_BPK_PEMASOK='$Updatelist_L_to_D[NOMOR_IJIN_BPK_PEMASOK]',
                                                NOMOR_IJIN_BPK_PENGUSAHA='$Updatelist_L_to_D[NOMOR_IJIN_BPK_PENGUSAHA]',
                                                NOMOR_IJIN_TPB='$Updatelist_L_to_D[NOMOR_IJIN_TPB]',
                                                NOMOR_IJIN_TPB_PENERIMA='$Updatelist_L_to_D[NOMOR_IJIN_TPB_PENERIMA]',
                                                NOMOR_POLISI='$Updatelist_L_to_D[NOMOR_POLISI]',
                                                NOMOR_VOY_FLIGHT='$Updatelist_L_to_D[NOMOR_VOY_FLIGHT]',
                                                NPPPJK='$Updatelist_L_to_D[NPPPJK]',
                                                NPWP_BILLING='$Updatelist_L_to_D[NPWP_BILLING]',
                                                POS_BC11='$Updatelist_L_to_D[POS_BC11]',
                                                SERI='$Updatelist_L_to_D[SERI]',
                                                SUBPOS_BC11='$Updatelist_L_to_D[SUBPOS_BC11]',
                                                SUBSUBPOS_BC11='$Updatelist_L_to_D[SUBSUBPOS_BC11]',
                                                TANGGAL_AJU='$Updatelist_L_to_D[TANGGAL_AJU]',
                                                TANGGAL_BC11='$Updatelist_L_to_D[TANGGAL_BC11]',
                                                TANGGAL_BERANGKAT='$Updatelist_L_to_D[TANGGAL_BERANGKAT]',
                                                TANGGAL_BILLING='$Updatelist_L_to_D[TANGGAL_BILLING]',
                                                TANGGAL_DAFTAR='$Updatelist_L_to_D[TANGGAL_DAFTAR]',
                                                TANGGAL_IJIN_BPK_PEMASOK='$Updatelist_L_to_D[TANGGAL_IJIN_BPK_PEMASOK]',
                                                TANGGAL_IJIN_BPK_PENGUSAHA='$Updatelist_L_to_D[TANGGAL_IJIN_BPK_PENGUSAHA]',
                                                TANGGAL_IJIN_TPB='$Updatelist_L_to_D[TANGGAL_IJIN_TPB]',
                                                TANGGAL_NPPPJK='$Updatelist_L_to_D[TANGGAL_NPPPJK]',
                                                TANGGAL_TIBA='$Updatelist_L_to_D[TANGGAL_TIBA]',
                                                TANGGAL_TTD='$Updatelist_L_to_D[TANGGAL_TTD]',
                                                TGL_JATUH_TEMPO_BILLING='$Updatelist_L_to_D[TGL_JATUH_TEMPO_BILLING]',
                                                TOTAL_BAYAR='$Updatelist_L_to_D[TOTAL_BAYAR]',
                                                TOTAL_BEBAS='$Updatelist_L_to_D[TOTAL_BEBAS]',
                                                TOTAL_DILUNASI='$Updatelist_L_to_D[TOTAL_DILUNASI]',
                                                TOTAL_JAMIN='$Updatelist_L_to_D[TOTAL_JAMIN]',
                                                TOTAL_SUDAH_DILUNASI='$Updatelist_L_to_D[TOTAL_SUDAH_DILUNASI]',
                                                TOTAL_TANGGUH='$Updatelist_L_to_D[TOTAL_TANGGUH]',
                                                TOTAL_TANGGUNG='$Updatelist_L_to_D[TOTAL_TANGGUNG]',
                                                TOTAL_TIDAK_DIPUNGUT='$Updatelist_L_to_D[TOTAL_TIDAK_DIPUNGUT]',
                                                URL_DOKUMEN_PABEAN='$Updatelist_L_to_D[URL_DOKUMEN_PABEAN]',
                                                VERSI_MODUL='$Updatelist_L_to_D[VERSI_MODUL]',
                                                VOLUME='$Updatelist_L_to_D[VOLUME]',
                                                WAKTU_BONGKAR='$Updatelist_L_to_D[WAKTU_BONGKAR]',
                                                WAKTU_STUFFING='$Updatelist_L_to_D[WAKTU_STUFFING]',
                                                TANGGAL_MUAT='$Updatelist_L_to_D[TANGGAL_MUAT]',
                                                TEMPAT_STUFFING='$Updatelist_L_to_D[TEMPAT_STUFFING]',
                                                CALL_SIGN='$Updatelist_L_to_D[CALL_SIGN]',
                                                JUMLAH_TANDA_PENGAMAN='$Updatelist_L_to_D[JUMLAH_TANDA_PENGAMAN]',
                                                KODE_JENIS_TANDA_PENGAMAN='$Updatelist_L_to_D[KODE_JENIS_TANDA_PENGAMAN]',
                                                KODE_KANTOR_MUAT='$Updatelist_L_to_D[KODE_KANTOR_MUAT]',
                                                KODE_PEL_TUJUAN='$Updatelist_L_to_D[KODE_PEL_TUJUAN]',
                                                TANGGAL_STUFFING='$Updatelist_L_to_D[TANGGAL_STUFFING]',
                                                KODE_GUDANG_ASAL='$Updatelist_L_to_D[KODE_GUDANG_ASAL]',
                                                KODE_GUDANG_TUJUAN='$Updatelist_L_to_D[KODE_GUDANG_TUJUAN]'
                                        WHERE ID='$Updatelist_L_to_D[ID]'");
            }
        }
    }
}
if ($query) {
} else {
}
