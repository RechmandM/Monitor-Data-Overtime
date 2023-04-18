<?php
if (isset($_GET['mi'])) {
    $page = $_GET['mi'];
    $tam = "cek";
    switch ($page) {
        case 'data_user':
            include "data_user.php";
            break;
        case 'data_karyawan':
            include "data_karyawan.php";
            break;
        case 'data_user_edit':
            include "data_user_edit.php";
            break;
        case 'data_user_delete':
            include "data_user_delete.php";
            break;
        case 'data_absen':
            include "data_absen.php";
            break;
        case 'data_lembur':
            include "data_lembur.php";
            break;
        case 'data_lembur_edit':
            include "data_lembur_edit.php";
            break;
        case 'data_lembur_delete':
            include "data_lembur_delete.php";
            break;
        case 'ubah_password':
            include "ubah_password.php";
            break;
        case 'data_cetak':
            include "data_cetak.php";
            break;
        case 'cetak':
            include "cetak.php";
            break;
        default:
            include "dashboard.php";
            break;
    }
} else {
    include "dashboard.php";
}
?>
