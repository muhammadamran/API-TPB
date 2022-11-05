<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="index.php" class="simple-text logo-mini">
            <!-- <div class="logo-image-small">
                <img src="assets/logo/logo.png">
            </div> -->
            <div class="sidebar-tpb">
                <font class="text-sidebar-tpb">LTE</font>
            </div>
        </a>
        <a href="index.php" class="simple-text logo-normal">
            TPB Backend
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="profile-user-tpb">
            <div>
                <i class="fa-solid fa-circle-user"></i> <?= $_SESSION['nama']; ?>
            </div>
            <div>
                <code class="code-profile"><?= $_SESSION['role']; ?></code>
            </div>
        </div>
        <div class="sidebar-line-page"></div>
        <ul class="nav">
            <li class="nav-header">NAVIGATION</li>
            <li class="<?= empty($_GET['m']) ? 'active' : '' ?>">
                <a href="index.php">
                    <i class="fas fa-chart-pie"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-header">MODULES</li>
            <li class="nav-header"></li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'dokumen-pabean' ? 'active' : '' ?>">
                <a href="index.php?m=dokumen-pabean&s=dokumen-pabean">
                    <i class="fas fa-file-import"></i>
                    <p>Dokumen Pabean</p>
                </a>
            </li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'gate-mandiri' ? 'active' : '' ?>">
                <a href="index.php?m=gate-mandiri&s=gate-mandiri">
                    <i class="fas fa-university"></i>
                    <p>Gate Mandiri</p>
                </a>
            </li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'komunikasi' ? 'active' : '' ?>">
                <a href="index.php?m=komunikasi&s=komunikasi">
                    <i class="fas fa-window-restore"></i>
                    <p>Komunikasi</p>
                </a>
            </li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'referensi' ? 'active' : '' ?>">
                <a href="index.php?m=referensi&s=referensi">
                    <i class="fas fa-table"></i>
                    <p>Referensi</p>
                </a>
            </li>
            <li class="nav-header">SINKRONISASI</li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'api' ? 'active' : '' ?>">
                <a href="index.php?m=api&s=api">
                    <i class="fa-solid fa-code"></i>
                    <p>API</p>
                </a>
            </li>

            <!-- 1 -->
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'TPBBahanBaku' ? 'active' : '' ?>">
                <a href="index.php?m=TPBBahanBaku&s=TPBBahanBaku">
                    <i class="fa-solid fa-code"></i>
                    <p>TPBBahanBaku</p>
                </a>
            </li>
            <!-- 2 -->
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'TPBBahanBakuDokumen' ? 'active' : '' ?>">
                <a href="index.php?m=TPBBahanBakuDokumen&s=TPBBahanBakuDokumen">
                    <i class="fa-solid fa-code"></i>
                    <p>TPBBahanBakuDokumen</p>
                </a>
            </li>
            <!-- 3 -->
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'TPBBahanBakuTarif' ? 'active' : '' ?>">
                <a href="index.php?m=TPBBahanBakuTarif&s=TPBBahanBakuTarif">
                    <i class="fa-solid fa-code"></i>
                    <p>TPBBahanBakuTarif</p>
                </a>
            </li>
            <!-- 4 -->
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'TPBBarang' ? 'active' : '' ?>">
                <a href="index.php?m=TPBBarang&s=TPBBarang">
                    <i class="fa-solid fa-code"></i>
                    <p>TPBBarang</p>
                </a>
            </li>
            <!-- 5 -->
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'TPBBarangDokumen' ? 'active' : '' ?>">
                <a href="index.php?m=TPBBarangDokumen&s=TPBBarangDokumen">
                    <i class="fa-solid fa-code"></i>
                    <p>TPBBarangDokumen</p>
                </a>
            </li>
            <!-- 6 -->
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'TPBBarangPenerima' ? 'active' : '' ?>">
                <a href="index.php?m=TPBBarangPenerima&s=TPBBarangPenerima">
                    <i class="fa-solid fa-code"></i>
                    <p>TPBBarangPenerima</p>
                </a>
            </li>
            <!-- 7 -->
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'TPBBarangTarif' ? 'active' : '' ?>">
                <a href="index.php?m=TPBBarangTarif&s=TPBBarangTarif">
                    <i class="fa-solid fa-code"></i>
                    <p>TPBBarangTarif</p>
                </a>
            </li>
            <!-- 8 -->
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'TPBDetilStatus' ? 'active' : '' ?>">
                <a href="index.php?m=TPBDetilStatus&s=TPBDetilStatus">
                    <i class="fa-solid fa-code"></i>
                    <p>TPBDetilStatus</p>
                </a>
            </li>
            <!-- 9 -->
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'TPBDokumen' ? 'active' : '' ?>">
                <a href="index.php?m=TPBDokumen&s=TPBDokumen">
                    <i class="fa-solid fa-code"></i>
                    <p>TPBDokumen</p>
                </a>
            </li>
            <!-- 10 -->
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'TPBHeader' ? 'active' : '' ?>">
                <a href="index.php?m=TPBHeader&s=TPBHeader">
                    <i class="fa-solid fa-code"></i>
                    <p>TPBHeader</p>
                </a>
            </li>
            <!-- 11 -->
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'TPBJaminan' ? 'active' : '' ?>">
                <a href="index.php?m=TPBJaminan&s=TPBJaminan">
                    <i class="fa-solid fa-code"></i>
                    <p>TPBJaminan</p>
                </a>
            </li>
            <!-- 12 -->
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'TPBKemasan' ? 'active' : '' ?>">
                <a href="index.php?m=TPBKemasan&s=TPBKemasan">
                    <i class="fa-solid fa-code"></i>
                    <p>TPBKemasan</p>
                </a>
            </li>
            <!-- 13 -->
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'TPBKontainer' ? 'active' : '' ?>">
                <a href="index.php?m=TPBKontainer&s=TPBKontainer">
                    <i class="fa-solid fa-code"></i>
                    <p>TPBKontainer</p>
                </a>
            </li>
            <!-- 14 -->
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'TPBNPWPBilling' ? 'active' : '' ?>">
                <a href="index.php?m=TPBNPWPBilling&s=TPBNPWPBilling">
                    <i class="fa-solid fa-code"></i>
                    <p>TPBNPWPBilling</p>
                </a>
            </li>
            <!-- 15 -->
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'TPBPenerima' ? 'active' : '' ?>">
                <a href="index.php?m=TPBPenerima&s=TPBPenerima">
                    <i class="fa-solid fa-code"></i>
                    <p>TPBPenerima</p>
                </a>
            </li>
            <!-- 16 -->
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'TPBPungutan' ? 'active' : '' ?>">
                <a href="index.php?m=TPBPungutan&s=TPBPungutan">
                    <i class="fa-solid fa-code"></i>
                    <p>TPBPungutan</p>
                </a>
            </li>
            <!-- 17 -->
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'TPBPenerima' ? 'active' : '' ?>">
                <a href="index.php?m=TPBPenerima&s=TPBPenerima">
                    <i class="fa-solid fa-code"></i>
                    <p>TPBPenerima</p>
                </a>
            </li>
            <li class="nav-header">ADMINISTRATOR</li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'user' ? 'active' : '' ?>">
                <a href="index.php?m=user&s=user">
                    <i class="fas fa-users-cog"></i>
                    <p>Users</p>
                </a>
            </li>
            <hr>
            <li>
                <a href="logout.php">
                    <i class="fas fa-power-off"></i>
                    <p>Logout</p>
                </a>
            </li>
            <hr>
            <div>
                <img src="assets/gif/3.gif" alt="" srcset="">
            </div>
        </ul>
    </div>
</div>