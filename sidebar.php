<?php
$level = $_SESSION['lv'];
$id = $_SESSION['id'];
if ($level == 1) {
    $desc = "KARYAWAN";
} else if ($level == 2) {
    $desc = "HRD";
} else {
    $desc = "ADMINISTRATOR";
}
?><nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color:#eae7e7;">
    <div class="position-sticky pt-5">
        <div class="container fw-bold" style="color:blue;">
            <h4><?= $desc; ?></h4>
        </div>
        <?php if ($level == 1) { ?>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link <?php
                                        $dat = $_GET['mi'];
                                        if ($dat == null) {
                                            echo "active";
                                        }
                                        ?>" aria-current="page" href="./">
                        <span data-feather="home"></span>
                        Dashboard
                    </a>
                </li>
                <a class="nav-link <?php
                                        $dat = $_GET['mi'];
                                        if ($dat == "data_lembur") {
                                            echo "active";
                                        }
                                        ?>" href="?mi=data_lembur">
                        <span data-feather="bar-chart-2"></span>
                        Overtime
                    </a>
            </ul>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link <?php
                                        $dat = $_GET['mi'];
                                        if ($dat == "ubah_password") {
                                            echo "active";
                                        }
                                        ?>" aria-current="page" href="?mi=ubah_password">
                        <span data-feather="key"></span>
                        Ubah Password
                    </a>
                </li>
            </ul>
        <?php } else if ($level == 2) { ?>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link <?php
                                        $dat = $_GET['mi'];
                                        if ($dat == null) {
                                            echo "active";
                                        }
                                        ?>" aria-current="page" href="./">
                        <span data-feather="home"></span>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php
                                        $dat = $_GET['mi'];
                                        if ($dat == "data_user") {
                                            echo "active";
                                        }
                                        ?>" href="?mi=data_user">
                        <span data-feather="bar-chart-2"></span>
                        Data Karyawan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php
                                        $dat = $_GET['mi'];
                                        if ($dat == "data_absen") {
                                            echo "active";
                                        }
                                        ?>" href="?mi=data_absen">
                        <span data-feather="bar-chart-2"></span>
                        Absensi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php
                                        $dat = $_GET['mi'];
                                        if ($dat == "data_lembur") {
                                            echo "active";
                                        }
                                        ?>" href="?mi=data_lembur">
                        <span data-feather="bar-chart-2"></span>
                        Overtime
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php
                                        $dat = $_GET['mi'];
                                        if ($dat == "ubah_password") {
                                            echo "active";
                                        }
                                        ?>" aria-current="page" href="?mi=ubah_password">
                        <span data-feather="key"></span>
                        Ubah Password
                    </a>
                </li>
            </ul>
        <?php } else { ?>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link <?php
                                        $dat = $_GET['mi'];
                                        if ($dat == null) {
                                            echo "active";
                                        }
                                        ?>" aria-current="page" href="./">
                        <span data-feather="home"></span>
                        Menu Utama
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php
                                        $dat = $_GET['mi'];
                                        if ($dat == "data_user") {
                                            echo "active";
                                        }
                                        ?>" >
                        <span data-feather="bar-chart-2"></span>
                        Master Data
                    </a>
                    <a class="nav-link px-5 <?php
                                        $dat = $_GET['mi'];
                                        if ($dat == "data_user") {
                                            echo "active";
                                        }
                                        ?>" href="?mi=data_karyawan">
                        <span data-feather="bar-chart-2"></span>
                        Data Karyawan
                    </a>
                    <a class="nav-link px-5 <?php
                                        $dat = $_GET['mi'];
                                        if ($dat == "data_user") {
                                            echo "active";
                                        }
                                        ?>" href="?mi=data_user">
                        <span data-feather="bar-chart-2"></span>
                        Data User
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php
                                        $dat = $_GET['mi'];
                                        if ($dat == "data_absen") {
                                            echo "active";
                                        }
                                        ?>" href="?mi=data_absen">
                        <span data-feather="bar-chart-2"></span>
                        Absensi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php
                                        $dat = $_GET['mi'];
                                        if ($dat == "data_lembur") {
                                            echo "active";
                                        }
                                        ?>" href="?mi=data_lembur">
                        <span data-feather="bar-chart-2"></span>
                        Overtime
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php
                                        $dat = $_GET['mi'];
                                        if ($dat == "data_cetak") {
                                            echo "active";
                                        }
                                        ?>" href="?mi=data_cetak">
                        <span data-feather="printer"></span>
                        Laporan
                    </a>
                </li>
            </ul>
        <?php } ?>
    </div>
</nav>