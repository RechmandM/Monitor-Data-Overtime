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
                <?php
                // $bulan = date('m');
                if ($bulan == '01') {
                    $bulann = "Januari";
                } else if ($bulan == '02') {
                    $bulann = "Februari";
                } else if ($bulan == '03') {
                    $bulann = "Maret";
                } else if ($bulan == '04') {
                    $bulann = "April";
                } else if ($bulan == '05') {
                    $bulann = "Mei";
                } else if ($bulan == '06') {
                    $bulann = "Juni";
                } else if ($bulan == '07') {
                    $bulann = "Juli";
                } else if ($bulan == '08') {
                    $bulann = "Agustus";
                } else if ($bulan == '09') {
                    $bulann = "September";
                } else if ($bulan == '10') {
                    $bulann = "Oktober";
                } else if ($bulan == '11') {
                    $bulann = "November";
                } else if ($bulan == '12') {
                    $bulann = "Desember";
                }
                ?>
                <h3 class="text-center py-3 fw-bold text-primary">Data Absensi Bulan <?= $bulann ?></h3>
                <section id="data" class="">


                    <div class="table-size table-responsive bg-white w-100">
                        <?php
                        include './config/koneksi.php';
                        ?>
                        <table class="table table-bordered table-hover table-striped table-sm w-100" style="width:auto">
                            <thead style="background-color: rgba(0, 0, 0, 0.2);">
                                <tr>
                                    <th scope="col" rowspan="2" class="text-primary">No</th>
                                    <th scope="col" rowspan="2" class="text-primary">Username</th>
                                    <th scope="col" rowspan="2" class="text-primary">Nama</th>
                                    <th scope="col" colspan="31" class="text-primary text-center">Tanggal</th>
                                </tr>
                                <tr>
                                    <th scope="col" rowspan="" class="text-primary">1</th>
                                    <th scope="col" rowspan="" class="text-primary">2</th>
                                    <th scope="col" rowspan="" class="text-primary">3</th>
                                    <th scope="col" rowspan="" class="text-primary">4</th>
                                    <th scope="col" rowspan="" class="text-primary">5</th>
                                    <th scope="col" rowspan="" class="text-primary">6</th>
                                    <th scope="col" rowspan="" class="text-primary">7</th>
                                    <th scope="col" rowspan="" class="text-primary">8</th>
                                    <th scope="col" rowspan="" class="text-primary">9</th>
                                    <th scope="col" rowspan="" class="text-primary">10</th>
                                    <th scope="col" rowspan="" class="text-primary">11</th>
                                    <th scope="col" rowspan="" class="text-primary">12</th>
                                    <th scope="col" rowspan="" class="text-primary">13</th>
                                    <th scope="col" rowspan="" class="text-primary">14</th>
                                    <th scope="col" rowspan="" class="text-primary">15</th>
                                    <th scope="col" rowspan="" class="text-primary">16</th>
                                    <th scope="col" rowspan="" class="text-primary">17</th>
                                    <th scope="col" rowspan="" class="text-primary">18</th>
                                    <th scope="col" rowspan="" class="text-primary">19</th>
                                    <th scope="col" rowspan="" class="text-primary">20</th>
                                    <th scope="col" rowspan="" class="text-primary">21</th>
                                    <th scope="col" rowspan="" class="text-primary">22</th>
                                    <th scope="col" rowspan="" class="text-primary">23</th>
                                    <th scope="col" rowspan="" class="text-primary">24</th>
                                    <th scope="col" rowspan="" class="text-primary">25</th>
                                    <th scope="col" rowspan="" class="text-primary">26</th>
                                    <th scope="col" rowspan="" class="text-primary">27</th>
                                    <th scope="col" rowspan="" class="text-primary">28</th>
                                    <th scope="col" rowspan="" class="text-primary">29</th>
                                    <th scope="col" rowspan="" class="text-primary">30</th>
                                    <th scope="col" rowspan="" class="text-primary">31</th>
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
                                $row = mysqli_query($conn, "SELECT * from dataabsenbulanan LEFT JOIN user ON dataabsenbulanan.username = user.id where bulan='$bulan' and tahun='$tahun'order by id DESC");
                                // $row = mysqli_query($conn, "SELECT * from user_laporan where grub='4A' and bulan='$bulan' and tahun='$tahun'");
                                $no = 1;
                                foreach ($row as $row_array) { ?>
                                    <tr>
                                        <td class="fw-bolder"><?= $no; ?></td>
                                        <!-- <td class="fw-bold"><?php if ($row_array['lv'] == 1) {
                                                                        echo "<span style='color:green;'>Karyawan</span>";
                                                                    } else if ($row_array['lv'] == 2) {
                                                                        echo "<span style='color:blue;'>Ketua Grub</span>";
                                                                    } else {
                                                                        echo "<span style='color:red;'>Administrator</span>";
                                                                    } ?></td> -->
                                        <td><?= $row_array['username']; ?></td>
                                        <td class=" text-nowrap"><?= $row_array['nama']; ?></td>
                                        <td class="fw-bold"><?php if ($row_array['tg01'] == '1') {
                                                                echo "<span style='color:Green;'>Masuk</span>";
                                                            } else if ($row_array['tg01'] == '0') {
                                                                echo "<span style='color:Red;'>Tidak</span>";
                                                            } else {
                                                                echo "-";
                                                            } ?></td>
                                        <td class="fw-bold"><?php if ($row_array['tg02'] == '1') {
                                                                echo "<span style='color:Green;'>Masuk</span>";
                                                            } else if ($row_array['tg02'] == '0') {
                                                                echo "<span style='color:Red;'>Tidak</span>";
                                                            } else {
                                                                echo "-";
                                                            } ?></td>
                                        <td class="fw-bold"><?php if ($row_array['tg03'] == '1') {
                                                                echo "<span style='color:Green;'>Masuk</span>";
                                                            } else if ($row_array['tg03'] == '0') {
                                                                echo "<span style='color:Red;'>Tidak</span>";
                                                            } else {
                                                                echo "-";
                                                            } ?></td>
                                        <td class="fw-bold"><?php if ($row_array['tg04'] == '1') {
                                                                echo "<span style='color:Green;'>Masuk</span>";
                                                            } else if ($row_array['tg04'] == '0') {
                                                                echo "<span style='color:Red;'>Tidak</span>";
                                                            } else {
                                                                echo "-";
                                                            } ?></td>
                                        <td class="fw-bold"><?php if ($row_array['tg05'] == '1') {
                                                                echo "<span style='color:Green;'>Masuk</span>";
                                                            } else if ($row_array['tg05'] == '0') {
                                                                echo "<span style='color:Red;'>Tidak</span>";
                                                            } else {
                                                                echo "-";
                                                            } ?></td>
                                        <td class="fw-bold"><?php if ($row_array['tg06'] == '1') {
                                                                echo "<span style='color:Green;'>Masuk</span>";
                                                            } else if ($row_array['tg06'] == '0') {
                                                                echo "<span style='color:Red;'>Tidak</span>";
                                                            } else {
                                                                echo "-";
                                                            } ?></td>
                                        <td class="fw-bold"><?php if ($row_array['tg07'] == '1') {
                                                                echo "<span style='color:Green;'>Masuk</span>";
                                                            } else if ($row_array['tg07'] == '0') {
                                                                echo "<span style='color:Red;'>Tidak</span>";
                                                            } else {
                                                                echo "-";
                                                            } ?></td>
                                        <td class="fw-bold"><?php if ($row_array['tg08'] == '1') {
                                                                echo "<span style='color:Green;'>Masuk</span>";
                                                            } else if ($row_array['tg08'] == '0') {
                                                                echo "<span style='color:Red;'>Tidak</span>";
                                                            } else {
                                                                echo "-";
                                                            } ?></td>
                                        <td class="fw-bold"><?php if ($row_array['tg09'] == '1') {
                                                                echo "<span style='color:Green;'>Masuk</span>";
                                                            } else if ($row_array['tg09'] == '0') {
                                                                echo "<span style='color:Red;'>Tidak</span>";
                                                            } else {
                                                                echo "-";
                                                            } ?></td>
                                        <td class="fw-bold"><?php if ($row_array['tg10'] == '1') {
                                                                echo "<span style='color:Green;'>Masuk</span>";
                                                            } else if ($row_array['tg10'] == '0') {
                                                                echo "<span style='color:Red;'>Tidak</span>";
                                                            } else {
                                                                echo "-";
                                                            } ?></td>
                                        <td class="fw-bold"><?php if ($row_array['tg11'] == '1') {
                                                                echo "<span style='color:Green;'>Masuk</span>";
                                                            } else if ($row_array['tg11'] == '0') {
                                                                echo "<span style='color:Red;'>Tidak</span>";
                                                            } else {
                                                                echo "-";
                                                            } ?></td>
                                        <td class="fw-bold"><?php if ($row_array['tg12'] == '1') {
                                                                echo "<span style='color:Green;'>Masuk</span>";
                                                            } else if ($row_array['tg12'] == '0') {
                                                                echo "<span style='color:Red;'>Tidak</span>";
                                                            } else {
                                                                echo "-";
                                                            } ?></td>
                                        <td class="fw-bold"><?php if ($row_array['tg13'] == '1') {
                                                                echo "<span style='color:Green;'>Masuk</span>";
                                                            } else if ($row_array['tg13'] == '0') {
                                                                echo "<span style='color:Red;'>Tidak</span>";
                                                            } else {
                                                                echo "-";
                                                            } ?></td>
                                        <td class="fw-bold"><?php if ($row_array['tg14'] == '1') {
                                                                echo "<span style='color:Green;'>Masuk</span>";
                                                            } else if ($row_array['tg14'] == '0') {
                                                                echo "<span style='color:Red;'>Tidak</span>";
                                                            } else {
                                                                echo "-";
                                                            } ?></td>
                                        <td class="fw-bold"><?php if ($row_array['tg15'] == '1') {
                                                                echo "<span style='color:Green;'>Masuk</span>";
                                                            } else if ($row_array['tg15'] == '0') {
                                                                echo "<span style='color:Red;'>Tidak</span>";
                                                            } else {
                                                                echo "-";
                                                            } ?></td>
                                        <td class="fw-bold"><?php if ($row_array['tg16'] == '1') {
                                                                echo "<span style='color:Green;'>Masuk</span>";
                                                            } else if ($row_array['tg16'] == '0') {
                                                                echo "<span style='color:Red;'>Tidak</span>";
                                                            } else {
                                                                echo "-";
                                                            } ?></td>
                                        <td class="fw-bold"><?php if ($row_array['tg17'] == '1') {
                                                                echo "<span style='color:Green;'>Masuk</span>";
                                                            } else if ($row_array['tg17'] == '0') {
                                                                echo "<span style='color:Red;'>Tidak</span>";
                                                            } else {
                                                                echo "-";
                                                            } ?></td>
                                        <td class="fw-bold"><?php if ($row_array['tg18'] == '1') {
                                                                echo "<span style='color:Green;'>Masuk</span>";
                                                            } else if ($row_array['tg18'] == '0') {
                                                                echo "<span style='color:Red;'>Tidak</span>";
                                                            } else {
                                                                echo "-";
                                                            } ?></td>
                                        <td class="fw-bold"><?php if ($row_array['tg19'] == '1') {
                                                                echo "<span style='color:Green;'>Masuk</span>";
                                                            } else if ($row_array['tg19'] == '0') {
                                                                echo "<span style='color:Red;'>Tidak</span>";
                                                            } else {
                                                                echo "-";
                                                            } ?></td>
                                        <td class="fw-bold"><?php if ($row_array['tg20'] == '1') {
                                                                echo "<span style='color:Green;'>Masuk</span>";
                                                            } else if ($row_array['tg20'] == '0') {
                                                                echo "<span style='color:Red;'>Tidak</span>";
                                                            } else {
                                                                echo "-";
                                                            } ?></td>
                                        <td class="fw-bold"><?php if ($row_array['tg21'] == '1') {
                                                                echo "<span style='color:Green;'>Masuk</span>";
                                                            } else if ($row_array['tg21'] == '0') {
                                                                echo "<span style='color:Red;'>Tidak</span>";
                                                            } else {
                                                                echo "-";
                                                            } ?></td>
                                        <td class="fw-bold"><?php if ($row_array['tg22'] == '1') {
                                                                echo "<span style='color:Green;'>Masuk</span>";
                                                            } else if ($row_array['tg22'] == '0') {
                                                                echo "<span style='color:Red;'>Tidak</span>";
                                                            } else {
                                                                echo "-";
                                                            } ?></td>
                                        <td class="fw-bold"><?php if ($row_array['tg23'] == '1') {
                                                                echo "<span style='color:Green;'>Masuk</span>";
                                                            } else if ($row_array['tg23'] == '0') {
                                                                echo "<span style='color:Red;'>Tidak</span>";
                                                            } else {
                                                                echo "-";
                                                            } ?></td>
                                        <td class="fw-bold"><?php if ($row_array['tg24'] == '1') {
                                                                echo "<span style='color:Green;'>Masuk</span>";
                                                            } else if ($row_array['tg24'] == '0') {
                                                                echo "<span style='color:Red;'>Tidak</span>";
                                                            } else {
                                                                echo "-";
                                                            } ?></td>
                                        <td class="fw-bold"><?php if ($row_array['tg25'] == '1') {
                                                                echo "<span style='color:Green;'>Masuk</span>";
                                                            } else if ($row_array['tg25'] == '0') {
                                                                echo "<span style='color:Red;'>Tidak</span>";
                                                            } else {
                                                                echo "-";
                                                            } ?></td>
                                        <td class="fw-bold"><?php if ($row_array['tg26'] == '1') {
                                                                echo "<span style='color:Green;'>Masuk</span>";
                                                            } else if ($row_array['tg26'] == '0') {
                                                                echo "<span style='color:Red;'>Tidak</span>";
                                                            } else {
                                                                echo "-";
                                                            } ?></td>
                                        <td class="fw-bold"><?php if ($row_array['tg27'] == '1') {
                                                                echo "<span style='color:Green;'>Masuk</span>";
                                                            } else if ($row_array['tg27'] == '0') {
                                                                echo "<span style='color:Red;'>Tidak</span>";
                                                            } else {
                                                                echo "-";
                                                            } ?></td>
                                        <td class="fw-bold"><?php if ($row_array['tg28'] == '1') {
                                                                echo "<span style='color:Green;'>Masuk</span>";
                                                            } else if ($row_array['tg28'] == '0') {
                                                                echo "<span style='color:Red;'>Tidak</span>";
                                                            } else {
                                                                echo "-";
                                                            } ?></td>
                                        <td class="fw-bold"><?php if ($row_array['tg29'] == '1') {
                                                                echo "<span style='color:Green;'>Masuk</span>";
                                                            } else if ($row_array['tg29'] == '0') {
                                                                echo "<span style='color:Red;'>Tidak</span>";
                                                            } else {
                                                                echo "-";
                                                            } ?></td>
                                        <td class="fw-bold"><?php if ($row_array['tg30'] == '1') {
                                                                echo "<span style='color:Green;'>Masuk</span>";
                                                            } else if ($row_array['tg30'] == '0') {
                                                                echo "<span style='color:Red;'>Tidak</span>";
                                                            } else {
                                                                echo "-";
                                                            } ?></td>
                                        <td class="fw-bold"><?php if ($row_array['tg31'] == '1') {
                                                                echo "<span style='color:Green;'>Masuk</span>";
                                                            } else if ($row_array['tg31'] == '0') {
                                                                echo "<span style='color:Red;'>Tidak</span>";
                                                            } else {
                                                                echo "-";
                                                            } ?></td>

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