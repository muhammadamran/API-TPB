<?php
// ---------------ROLE DATABASE-------------------------
// $db      = LOCAL DATABASE CONNECTION
// $dbmain  = DOMAIN DATABASE CONNECTION
// ---------------END ROLE DATABASE---------------------

// ------------------DATETIME & USERS----------------------
// SHOW LOCAL SERVER DATETIME
$InputDate  = date('Y-m-d h:m:i');
// SHOW USERS
$meOK       = $_SESSION['nama'];
// ------------------END DATETIME & USERS------------------

// CHECK DATABASE LOCAL tpb_barang
// ROLE SYNC: BASE ON ID_HEADER
// SHOW VALUE TABLE tpb_barang
$dataTPB_L = $db->query("SELECT * FROM tpb_barang", 0);
// LIST COUNT TABLE  tpb_barang
foreach ($dataTPB_L as $row_L) {
    if (@$row_L['ID_HEADER']) {
        $ID_HEADER = $row_L['ID_HEADER'];
        // CHECK DATABASE DOMAIN tpb_barang
        $dataTPB_D = $dbmain->query("SELECT * FROM tpb_barang WHERE ID_HEADER='$ID_HEADER'");
        $row_D = mysqli_fetch_array($dataTPB_D);
        // IF DATA ID_HEADER ALREADY INSERT ON DATABASE DOMAIN
        if ($row_D['ID_HEADER'] == NULL) {
            // COUNT ROW TABLES tpb_barang FROM DATABASE LOCAL
            $CountTPB_L_to_D    = $db->query("SELECT COUNT(*) total_row FROM tpb_barang WHERE ID_HEADER='$ID_HEADER'");
            $row_Count_L_to_D   = $CountTPB_L_to_D->fetch_assoc();
            $pcs                = $row_Count_L_to_D['total_row'];
            // ROW TABLES tpb_barang FROM DATABASE LOCAL
            $dataTPB_L_to_D     = $db->query("SELECT * FROM tpb_barang WHERE ID_HEADER='$ID_HEADER'");
            while ($list_L_to_D = $dataTPB_L_to_D->fetch_assoc()) {
                $query = $dbmain->query("INSERT INTO tpb_barang
                                        (ID,ID_HEADER,ASURANSI,CIF,CIF_RUPIAH,DISKON,FLAG_KENDARAAN,FOB,FREIGHT,HARGA_BARANG_LDP,HARGA_INVOICE,HARGA_PENYERAHAN,HARGA_SATUAN,JENIS_KENDARAAN,JUMLAH_BAHAN_BAKU,JUMLAH_KEMASAN,JUMLAH_SATUAN,KAPASITAS_SILINDER,KATEGORI_BARANG,KODE_ASAL_BARANG,KODE_BARANG,KODE_FASILITAS_DOKUMEN,KODE_GUNA,KODE_JENIS_NILAI,KODE_KEMASAN,KODE_LEBIH_DARI4TAHUN,KODE_NEGARA_ASAL,KODE_SATUAN,KODE_SKEMA_TARIF,KODE_STATUS,KONDISI_BARANG,MERK,NETTO,NILAI_INCOTERM,NILAI_PABEAN,NOMOR_MESIN,NOMOR_RANGKA,POS_TARIF,SERI_BARANG,SERI_IJIN,SERI_POS_TARIF,SPESIFIKASI_LAIN,TAHUN_PEMBUATAN,TIPE,UKURAN,URAIAN,VOLUME,ID_EKSPORTIR,NAMA_EKSPORTIR,ALAMAT_EKSPORTIR,KODE_PERHITUNGAN,SERI_BARANG_DOK_ASAL,STATUS,OPERATOR_ONE,OPERATOR_TWO,TGL_CEK,CHECKING,STATUS_CT,DATE_CT,BOTOL,TOTAL_BOTOL_AKHIR,LITER,TOTAL_LITER_AKHIR,TOTAL_CT_AKHIR,NETTO_AKHIR,STATUS_GB,OPERATOR_ONE_GB,OPERATOR_TWO_GB,TGL_CEK_GB,CHECKING_GB,STATUS_CT_GB,DATE_CT_GB,BOTOL_GB,TOTAL_BOTOL_AKHIR_GB,LITER_GB,TOTAL_LITER_AKHIR_GB,TOTAL_CT_AKHIR_GB,NETTO_AKHIR_GB)
                                        VALUES
                                        ('','$list_L_to_D[ID_HEADER]','$list_L_to_D[ASURANSI]','$list_L_to_D[CIF]','$list_L_to_D[CIF_RUPIAH]','$list_L_to_D[DISKON]','$list_L_to_D[FLAG_KENDARAAN]','$list_L_to_D[FOB]','$list_L_to_D[FREIGHT]','$list_L_to_D[HARGA_BARANG_LDP]','$list_L_to_D[HARGA_INVOICE]','$list_L_to_D[HARGA_PENYERAHAN]','$list_L_to_D[HARGA_SATUAN]','$list_L_to_D[JENIS_KENDARAAN]','$list_L_to_D[JUMLAH_BAHAN_BAKU]','$list_L_to_D[JUMLAH_KEMASAN]','$list_L_to_D[JUMLAH_SATUAN]','$list_L_to_D[KAPASITAS_SILINDER]','$list_L_to_D[KATEGORI_BARANG]','$list_L_to_D[KODE_ASAL_BARANG]','$list_L_to_D[KODE_BARANG]','$list_L_to_D[KODE_FASILITAS_DOKUMEN]','$list_L_to_D[KODE_GUNA]','$list_L_to_D[KODE_JENIS_NILAI]','$list_L_to_D[KODE_KEMASAN]','$list_L_to_D[KODE_LEBIH_DARI4TAHUN]','$list_L_to_D[KODE_NEGARA_ASAL]','$list_L_to_D[KODE_SATUAN]','$list_L_to_D[KODE_SKEMA_TARIF]','$list_L_to_D[KODE_STATUS]','$list_L_to_D[KONDISI_BARANG]','$list_L_to_D[MERK]','$list_L_to_D[NETTO]','$list_L_to_D[NILAI_INCOTERM]','$list_L_to_D[NILAI_PABEAN]','$list_L_to_D[NOMOR_MESIN]','$list_L_to_D[NOMOR_RANGKA]','$list_L_to_D[POS_TARIF]','$list_L_to_D[SERI_BARANG]','$list_L_to_D[SERI_IJIN]','$list_L_to_D[SERI_POS_TARIF]','$list_L_to_D[SPESIFIKASI_LAIN]','$list_L_to_D[TAHUN_PEMBUATAN]','$list_L_to_D[TIPE]','$list_L_to_D[UKURAN]','$list_L_to_D[URAIAN]','$list_L_to_D[VOLUME]','$list_L_to_D[ID_EKSPORTIR]','$list_L_to_D[NAMA_EKSPORTIR]','$list_L_to_D[ALAMAT_EKSPORTIR]','$list_L_to_D[KODE_PERHITUNGAN]','$list_L_to_D[SERI_BARANG_DOK_ASAL]','$list_L_to_D[STATUS]','$list_L_to_D[OPERATOR_ONE]','$list_L_to_D[OPERATOR_TWO]','$list_L_to_D[TGL_CEK]','$list_L_to_D[CHECKING]','$list_L_to_D[STATUS_CT]','$list_L_to_D[DATE_CT]','$list_L_to_D[BOTOL]','$list_L_to_D[TOTAL_BOTOL_AKHIR]','$list_L_to_D[LITER]','$list_L_to_D[TOTAL_LITER_AKHIR]','$list_L_to_D[TOTAL_CT_AKHIR]','$list_L_to_D[NETTO_AKHIR]','$list_L_to_D[STATUS_GB]','$list_L_to_D[OPERATOR_ONE_GB]','$list_L_to_D[OPERATOR_TWO_GB]','$list_L_to_D[TGL_CEK_GB]','$list_L_to_D[CHECKING_GB]','$list_L_to_D[STATUS_CT_GB]','$list_L_to_D[DATE_CT_GB]','$list_L_to_D[BOTOL_GB]','$list_L_to_D[TOTAL_BOTOL_AKHIR_GB]','$list_L_to_D[LITER_GB]','$list_L_to_D[TOTAL_LITER_AKHIR_GB]','$list_L_to_D[TOTAL_CT_AKHIR_GB]','$list_L_to_D[NETTO_AKHIR_GB]')
                                    ");
            }
        }
        // IF ALREADY SYNC NO ACTION
    }
}
if ($query) {
    echo '<script>alert("Data has been Added");location.href = "../../index.php?m=api&s=tpb_barang&t=Data TPB Barang"</script>';
} else {
    echo '<script>alert("Data failed Added");location.href = "../../index.php?m=api&s=tpb_barang&t=Data TPB Barang"</script>';
}
