<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="index.php" class="simple-text logo-mini">
            <!-- <div class="logo-image-small">
                <img src="assets/logo/logo.png">
            </div> -->
            <div class="sidebar-tpb">
                <font class="text-sidebar-tpb">TPB</font>
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
        <div class="line-page"></div>
        <ul class="nav">
            <li class="nav-header">NAVIGATION</li>
            <li class="<?= empty($_GET['m']) ? 'active' : '' ?>">
                <a href="index.php">
                    <i class="fas fa-chart-pie"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-header">MENU MODULES</li>
            <li class="nav-header"></li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'DokumenPabean' ? 'active' : '' ?>">
                <a href="index.php?m=DokumenPabean&s=DokumenPabean">
                    <i class="fas fa-file-import"></i>
                    <p>Dokumen Pabean</p>
                </a>
            </li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'GateMandiri' ? 'active' : '' ?>">
                <a href="index.php?m=GateMandiri&s=GateMandiri">
                    <i class="fas fa-university"></i>
                    <p>Gate Mandiri</p>
                </a>
            </li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'Komunikasi' ? 'active' : '' ?>">
                <a href="index.php?m=Komunikasi&s=Komunikasi">
                    <i class="fas fa-window-restore"></i>
                    <p>Komunikasi</p>
                </a>
            </li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'Referensi' ? 'active' : '' ?>">
                <a href="index.php?m=Referensi&s=Referensi">
                    <i class="fas fa-table"></i>
                    <p>Referensi</p>
                </a>
            </li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'Utility' ? 'active' : '' ?>">
                <a href="index.php?m=Utility&s=Utility">
                    <i class="fas fa-cogs"></i>
                    <p>Utility</p>
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