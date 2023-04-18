<?php
error_reporting(0);
$nama = $_SESSION['id'];
$level = $_SESSION['lv'];
$grub = $_SESSION['grub'];
$bulan = $_GET['b'];
$tahun = $_GET['t'];
if ($level == 1) {
    include "./dashboard2.php";
    return;
} else {
?>

    <!doctype html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">
        <title>PT. Gajah Tunggal</title>
        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
        <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>

        <link href="assets/css/dashboard.css" rel="stylesheet">
    </head>

    <main class="col-lg-10 px-md-4" style="overflow-x: auto;">

        <div class="col">
            <di class="py-3">
                <h3 class="text-center py-3 fw-bold text-primary">Data Overtime Karyawan</h3>
                <section id="data" class="">


                    <div class="table-size table-responsive bg-white w-100">
                        <?php
                        include './config/koneksi.php';
                        ?>
                        <table class="table table-bordered table-hover table-striped table-sm w-100" style="width:auto">
                            <thead style="background-color: rgba(0, 0, 0, 0.2);">
                                <tr>
                                    <th scope="col" rowspan="3" class="text-primary">No</th>
                                    <th scope="col" rowspan="3" class="text-primary">Jabatan</th>
                                    <th scope="col" rowspan="3" class="text-primary">NIK</th>
                                    <th scope="col" rowspan="3" class="text-primary">Nama</th>
                                    <th scope="col" rowspan="3" class="text-primary">Plant</th>
                                    <th scope="col" rowspan="3" class="text-primary">Bagian</th>
                                    <th scope="col" rowspan="3" class="text-primary">Group</th>
                                    <th scope="col" colspan="4" class="text-center text-primary">Overtime</th>
                                    <th scope="col" rowspan="3" class="text-primary">Kupon</th>
                                </tr>
                                <tr>
                                    <th scope="col" colspan="2" class="text-center text-primary">Normal</th>
                                    <th scope="col" colspan="2" class="text-center text-primary">Holiday</th>
                                </tr>
                                <tr>
                                    <th scope="col" class="text-primary">Aktual</th>
                                    <th scope="col" class="text-primary">Matang</th>
                                    <th scope="col" class="text-primary">Aktual</th>
                                    <th scope="col" class="text-primary">Matang</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // $row = mysqli_query($conn, "SELECT j.*,u.nama from jadwal j 
                                // LEFT JOIN user u on u.hari=j.hari where j.jad_id
                                // order by jad_id ASC");
                                //     $row = mysqli_query($conn, "SELECT u.*,j.mata_pelajaran from user u 
                                // LEFT JOIN jadwal j on j.hari=u.hari where u.id order by lv DESC");
                                //     $no = 1;
                                $row = mysqli_query($conn, "SELECT * from user_laporan where grub='4D' and bulan='$bulan' and tahun='$tahun'");
                                $no = 1;
                                foreach ($row as $row_array) { ?>
                                    <tr>
                                        <td class="fw-bolder"><?= $no; ?></td>
                                        <td class="fw-bold"><?php if ($row_array['lv'] == 1) {
                                                                echo "<span style='color:green;'>Karyawan</span>";
                                                            } else if ($row_array['lv'] == 2) {
                                                                echo "<span style='color:blue;'>Ketua Grub</span>";
                                                            } else {
                                                                echo "<span style='color:red;'>Administrator</span>";
                                                            } ?></td>
                                        <td><?= $row_array['id']; ?></td>
                                        <td><?= $row_array['nama']; ?></td>
                                        <td><?= $row_array['plant']; ?></td>
                                        <td><?= $row_array['departement']; ?></td>
                                        <td class="fw-bold"><?php if ($row_array['grub'] == '4A') {
                                                                echo "<span style='color:DarkOrange;'>A</span>";
                                                            } else if ($row_array['grub'] == '4B') {
                                                                echo "<span style='color:DarkViolet;'>B</span>";
                                                            } else if ($row_array['grub'] == '4C') {
                                                                echo "<span style='color:yellow;'>C</span>";
                                                            } else if ($row_array['grub'] == '4D') {
                                                                echo "<span style='color:deeppink;'>D</span>";
                                                            } else {
                                                                echo "-";
                                                            } ?></td>
                                        <td><?php if ($row_array['naktual'] == 0) {
                                                echo "-";
                                            } else {
                                                echo $row_array['naktual'] . " Jam";
                                            }; ?></td>
                                        <td><?php if ($row_array['naktual'] == 0) {
                                                echo "-";
                                            } else {
                                                echo $row_array['naktual'] *= 3;
                                                echo " Jam";
                                            }; ?></td>
                                        <td><?php if ($row_array['haktual'] == 0) {
                                                echo "-";
                                            } else {
                                                echo $row_array['haktual'] . " Jam";
                                            }; ?></td>
                                        <td><?php if ($row_array['haktual'] == 0) {
                                                echo "-";
                                            } else {
                                                echo $row_array['haktual'] *= 2;
                                                echo " Jam";
                                            }; ?></td>
                                        <td><?php if ($row_array['kupon'] == 0) {
                                                echo "-";
                                            } else {
                                                echo $row_array['kupon'] . " Hari";
                                            }; ?></td>
                                    </tr>
                                <?php $no++;
                                } ?>
                            </tbody>
                        </table>
                        <script>
                            window.print();
                        </script>
                    </div>
                </section>
                </section>
        </div>
    </main>
<?php } ?>

    </html>