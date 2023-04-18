<?php
$nama = $_SESSION['id'];
$level = $_SESSION['lv'];
$grub = $_SESSION['grub'];
if ($level == 1) {
    include "./dashboard2.php";
    return;
} else {
?>


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="overflow-x: auto;">

        <!----------------------------- CONTENT ----------------------------->
        <!----------------------------- CONTENT ----------------------------->
        <!----------------------------- CONTENT ----------------------------->
        <!-- <script>
            function check() {
                var switer = document.getElementById("flexS");
                var tombol = document.getElementById("tb");
                var tombol2 = document.getElementById("tb2");
                if (switer.checked == true) {
                    // tombol.style.display = "block";
                    tombol.hidden = true;
                    tombol.innerHTML = "TAMBAH";
                    tombol2.hidden = false;
                    document.getElementById("colTB").className = "accordion-collapse collapse hide";
                } else {
                    // tombol.style.display = "none";
                    tombol.hidden = false;
                    tombol2.hidden = true;
                }
            }
        </script> -->
        <script>
            function tambah() {
                var tom = document.getElementById('tb');
                // var tom2 = document.getElementById('tb2');
                if (tom.innerHTML == "Tambahkan Data Lembur") {
                    tom.innerHTML = "Close";
                    // tom2.disabled = true;
                } else {
                    tom.innerHTML = "Tambahkan Data Lembur";
                    // tom2.disabled = false;
                }

            }
        </script>
        <div class="col">
            <div class="py-3">
            </div>
            <section id="data" class="py-3">
                <div class="list-group-item mb-3 text-center" style="background-color: rgba(0, 0, 0, 0.2);">
                    <!-- <h2 class=" list-inline-item text-info fw-bold text-uppercase" style="-webkit-text-stroke: 2px rgb(0, 0, 0);">Data Member</h2> -->
                    <h2 class="list-inline-item text-primary fw-bold text-uppercase">Data Absensi hari ini</h2>

                </div>
                <div class="accordion-item">
                    <div id="colTB" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#data">
                        <div class="accordion-body">
                            <?php
                            include "./form_biodata_data_lembur.php";
                            ?>
                        </div>
                    </div>
                </div>
                <div class="accordion-item bg-transparent">
                    <div id="colTB2" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#data">
                        <div class="accordion-body">
                            <h2>karyawan</h2>
                            <?php
                            // include "./form_mapel.php";
                            ?>
                        </div>
                    </div>
                </div>
                <?php
                // $row = mysqli_query($conn, "SELECT * from dataabsen order by idabsen ASC");
                // $row_data = mysqli_fetch_array($row);
                ?>
                <div class="table-size table-scroll table-responsive bg-white" style="overflow-x: auto">
                    <main class="col">
                        <div class="text-center mb-4 py-3">
                            <!-- <img style="margin-top: -70px; margin-bottom: -40px;" class="mx-auto" src="https://i.pinimg.com/736x/ce/56/99/ce5699233cbc0f142250b520d967dff7.jpg" alt="logo" width="300"> -->
                            <!-- <h2 class="text-uppercase">New Produk</h2> -->
                            <?php
                            //  $tanggal = date('l, d-m-Y  h:i:s a');
                            function getHari($date)
                            {

                                $datetime = DateTime::createFromFormat('Y-m-d', $date);
                                $day = $datetime->format('l');

                                switch ($day) {
                                    case 'Sunday':
                                        $hari = 'Minggu';
                                        break;
                                    case 'Monday':
                                        $hari = 'Senin';
                                        break;
                                    case 'Tuesday':
                                        $hari = 'Selasa';
                                        break;
                                    case 'Wednesday':
                                        $hari = 'Rabu';
                                        break;
                                    case 'Thursday':
                                        $hari = 'Kamis';
                                        break;
                                    case 'Friday':
                                        $hari = 'Jum\'at';
                                        break;
                                    case 'Saturday':
                                        $hari = 'Sabtu';
                                        break;
                                    default:
                                        $hari = 'Tidak ada';
                                        break;
                                }
                                return $hari;
                            }
                            $tanggalku = date('Y-m-d');
                            // $date = null ;
                            // echo getHari($date);
                            $hariku = getHari($tanggalku);

                            $tanggal = date(' d-m-Y');
                            $jam = date('H:i');

                            ?>
                            <h2><?= $hariku . $tanggal ?></h2>

                            <!-- <h2>Jam <?= $jam ?></h2> -->
                            <script>
                                window.setTimeout("waktu()", 1000);

                                function waktu() {
                                    var waktu = new Date();
                                    setTimeout("waktu()", 1000);
                                    document.getElementById("jam").innerHTML = waktu.getHours();
                                    document.getElementById("menit").innerHTML = waktu.getMinutes();
                                    document.getElementById("detik").innerHTML = waktu.getSeconds();
                                }
                            </script>
                            <div class="jam-digital-malasngoding">
                                <div class="kotak">
                                    <h2 class=" list-inline-item">Jam </h2>
                                    <h2 id="jam" class=" list-inline-item"></h2>
                                    <h2 class=" list-inline-item">:</h2>
                                    <h2 id="menit" class=" list-inline-item"></h2>
                                    <h2 class=" list-inline-item">:</h2>
                                    <h2 id="detik" class=" list-inline-item"></h2>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col">
                                <form <?php if ($hariku == "Minggu") {
                                            echo "hidden";
                                        }  ?> method="POST" class="needs-validation" novalidate style="font-size: larger;">
                                    <div <?php if ($level == 2) {
                                echo "hidden";
                            } ?> class="row shadow-sm" style="background-color: rgba(0, 0, 0, 0.2);">
                                        <div class="col-md-3 px-4">
                                            <div class="text-center h5">
                                                <label for="pekerjaan" class="form-label col-form-label fw-bold">Nama (NIK)</label>
                                                <label for="pekerjaan" class="form-label col-form-label fw-bold" style="color:DarkOrange;"> Group A</label>
                                            </div>
                                            <hr>
                                            <br>
                                            <!-- data absensin -->
                                            <?php
                                            // $row = mysqli_query($conn, "SELECT * from dataabsen LEFT JOIN user_laporan ON dataabsen.nik = user_laporan.id where grub='4A' order by idabsen DESC");
                                            $row = mysqli_query($conn, "SELECT * from dataabsen  where grub='4A' order by idabsen DESC");
                                            foreach ($row as $row_array) {
                                            ?>
                                                <div class="row">
                                                    <div class="col">
                                                        <input checked class="" type="checkbox" name="ce<?= $row_array['idabsen'] ?>" id="ce<?= $row_array['idabsen'] ?>">
                                                        <label for="ce<?= $row_array['idabsen'] ?>" class="form-label fw-bold text-capitalize"><?= $row_array['nama'] ?></label>
                                                    </div>

                                                    <!-- <label for="pekerjaan" class="form-label fw-bold">(<?= $row_array['nik'] ?>)</label> -->
                                                    <!-- <div class="col-2"> -->
                                                    <!-- <input class="" type="checkbox" name="ce<?= $row_array['idabsen'] ?>" id="ce<?= $row_array['idabsen'] ?>"> -->
                                                    <!-- </div> -->
                                                </div>
                                                <input hidden type="text" name="in<?= $row_array['idabsen'] ?>" id="in<?= $row_array['idabsen'] ?>" value="1">
                                                <!-- <p><?= $row_array['idabsen'] ?></p> -->
                                            <?php } ?>
                                        </div>
                                        <div class="col-md-3 px-4">
                                            <div class="text-center h5">
                                                <label for="pekerjaan" class="form-label col-form-label fw-bold">Nama (NIK)</label>
                                                <label for="pekerjaan" class="form-label col-form-label fw-bold" style="color:DarkViolet;"> Group B</label>
                                            </div>
                                            <hr>
                                            <br>
                                            <!-- data absensin -->
                                            <?php
                                            $row = mysqli_query($conn, "SELECT * from dataabsen where grub='4B' order by idabsen DESC");
                                            foreach ($row as $row_array) {
                                            ?>
                                                <div class="row">
                                                    <div class="col">
                                                        <input checked class="" type="checkbox" name="ce<?= $row_array['idabsen'] ?>" id="ce<?= $row_array['idabsen'] ?>">
                                                        <label for="ce<?= $row_array['idabsen'] ?>" class="form-label fw-bold text-capitalize"><?= $row_array['nama'] ?></label>

                                                        <!-- <label for="pekerjaan" class="form-label fw-bold">(<?= $row_array['nik'] ?>)</label> -->
                                                    </div>
                                                    <!-- <div class="col-2">
                                                    </div> -->
                                                </div>
                                                <input hidden type="number" name="in<?= $row_array['idabsen'] ?>" id="in<?= $row_array['idabsen'] ?>" value="1">
                                            <?php } ?>
                                        </div>
                                        <div class="col-md-3 px-4">
                                            <div class="text-center h5">
                                                <label for="pekerjaan" class="form-label col-form-label fw-bold">Nama (NIK)</label>
                                                <label for="pekerjaan" class="form-label col-form-label fw-bold" style="color:yellow;"> Group C</label>
                                            </div>
                                            <hr>
                                            <br>
                                            <!-- data absensin -->
                                            <?php
                                            $row = mysqli_query($conn, "SELECT * from dataabsen where grub='4C' order by idabsen DESC");
                                            foreach ($row as $row_array) {
                                            ?>
                                                <div class="row">
                                                    <div class="col">
                                                        <input checked class="" type="checkbox" name="ce<?= $row_array['idabsen'] ?>" id="ce<?= $row_array['idabsen'] ?>">
                                                        <label for="ce<?= $row_array['idabsen'] ?>" class="form-label fw-bold text-capitalize"><?= $row_array['nama'] ?></label>

                                                        <!-- <label for="pekerjaan" class="form-label fw-bold">(<?= $row_array['nik'] ?>)</label> -->
                                                    </div>
                                                    <!-- <div class="col-2">
                                                    </div> -->
                                                </div>
                                                <input hidden type="text" name="in<?= $row_array['idabsen'] ?>" id="in<?= $row_array['idabsen'] ?>" value="1">
                                            <?php } ?>
                                        </div>
                                        <div class="col-md-3 px-4">
                                            <div class="text-center h5">
                                                <label for="pekerjaan" class="form-label col-form-label fw-bold">Nama (NIK)</label>
                                                <label for="pekerjaan" class="form-label col-form-label fw-bold" style="color:deeppink;"> Group D</label>
                                            </div>
                                            <hr>
                                            <br>
                                            <!-- data absensin -->
                                            <?php
                                            $row = mysqli_query($conn, "SELECT * from dataabsen where grub='4D' order by idabsen DESC");
                                            foreach ($row as $row_array) {
                                            ?>
                                                <div class="row">
                                                    <div class="col">
                                                        <input checked class="" type="checkbox" name="ce<?= $row_array['idabsen'] ?>" id="ce<?= $row_array['idabsen'] ?>">
                                                        <label for="ce<?= $row_array['idabsen'] ?>" class="form-label fw-bold text-capitalize"><?= $row_array['nama'] ?></label>

                                                        <!-- <label for="pekerjaan" class="form-label fw-bold">(<?= $row_array['nik'] ?>)</label> -->
                                                    </div>
                                                    <!-- <div class="col-2">
                                                    </div> -->
                                                </div>
                                                <input hidden type="text" name="in<?= $row_array['idabsen'] ?>" id="in<?= $row_array['idabsen'] ?>" value="1">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    
                                    <hr <?php if ($level == 2) {
                                echo "hidden";
                            } ?> class="my-4">
                                    <!-- <button class="w-100 btn btn-danger btn-md text-uppercase fw-bold bt-satu d-none" name="submit2" type="submit2">Simpan</button> -->
                                    <button <?php if ($level == 2) {
                                echo "hidden";
                            } ?> class="w-100 btn btn-danger btn-md text-uppercase fw-bold btn-datalembur" name="submit3" type="submit">Simpan</button>
                                </form>
                            </div>

                            <div <?php if ($level == 2) {
                                echo "hidden";
                            } ?> <?php if ($hariku != "Minggu") {
                                        echo "hidden";
                                    }  ?> class="text-center card">
                                <h2 class="text-uppercase">Hari Libur Tidak Ada Absensi</h2>
                                <h3>Karyawan yang masuk lembur silahkan ke Overtime</h3>
                                <h3 class="">Terima Kasih</h3>
                            </div>
                        </div>





                        <?php
                        $bulan = date('m');
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

                        $bulanskr = date('m');
                        $tahunslr = date('Y');
                        ?>
                        <h2 class="text-center panel-group">Laporan Absensi Bulan <?= $bulann ?></h2>
                        <div class="table-size table-scroll table-responsive bg-white" style="overflow-x: auto">
                            <!-- <div class="table-size table-scroll table-responsive bg-white" style="height: 270px"> -->
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
                                    $bulan = date('m');
                                    $tahun = date('Y');
                                    $row = mysqli_query($conn, "SELECT * from dataabsenbulanan LEFT JOIN user ON dataabsenbulanan.username = user.id where bulan='$bulan' and tahun='$tahun'order by id DESC");
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
                            <!-- <button class="w-100 btn btn-danger btn-md text-uppercase fw-bold btn-datalembur" target="_blank" href="cetakabsen.php?b=<?= $bulan ?>&t=<?= substr($tahun, 0, 4) ?>" type="submit">CETAKddd</button> -->
                            <div>
                                <a class="text-white text-decoration-none w-100" target="_blank" href="cetakabsen.php?b=<?= $bulan ?>&t=<?= substr($tahun, 0, 4) ?>"><button class="w-100 btn btn-danger btn-md text-uppercase fw-bold btn-datalembur">Cetak</button></a>
                            </div>
                        </div>




                    </main>
                </div>

                <form action="" method="POST" class="row mb-2">
                    <div class="list-group-item">
                        <label class="h6" for="">Cari Berdasarkan Periode Bulan & Tahun</label>
                        <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <div class="px-3">
                                        <label class="h6" for="">Bulan</label>
                                        <select class="form-control" name="bulan" id="niku">
                                            <option hidden value="00">-- Pilih Bulan --</option>
                                            <option value="01">Januari</option>
                                            <option value="02">Februari</option>
                                            <option value="03">Maret</option>
                                            <option value="04">April</option>
                                            <option value="05">Mei</option>
                                            <option value="06">Juni</option>
                                            <option value="07">Juli</option>
                                            <option value="08">Agustus</option>
                                            <option value="09">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                        </select>

                                    </div>
                                    <div class="px-3">
                                        <label class="h6" for="">Tahun</label>
                                        <select class="form-control" name="tahun" id="tglku">
                                            <option value="00">-- Pilih Tahun -- </option>
                                            <?php
                                            $mulai = date('Y') - 50;
                                            for ($i = $mulai; $i < $mulai + 100; $i++) {
                                                $sel = $i == date('Y') ? ' selected="selected"' : '';
                                            ?>
                                                <option value="<?= $i . $sel; ?>"><?= $i ?></option>

                                            <?php }
                                            ?>
                                        </select>
                                    </div>
                                    <button class="btn btn-primary w-25 float-right" type="submit" name="cari" id="carian" style="margin-top: 26px;">CARI</button>
                                </div>
                            </div>
                            <div hidden<?php
                                        $row = mysqli_query($conn, "SELECT * from dataabsenbulanan where bulan='$bulan' and tahun='$tahun'");
                                        $row_array = mysqli_fetch_array($row);
                                        if ($row_array['username'] == null) {
                                            echo "n";
                                        } ?> class="col">
                                <form action="" method="POST">
                                    <button class="btn btn-danger float-end text-uppercase fw-bold" type="submit" name="tambahbaru" style="margin-top: 26px;">Buat Periode Baru Untuk Bulan Ini</button>
                                </form>
                            </div>
                        </div>
            </section>

        </div>
        </form>

        </div>
    </main>
<?php } ?>

<?php
if (isset($_POST['cari'])) {
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="overflow-x: auto;">
        <div class="table-size table-scroll table-responsive bg-white" style="height: auto">
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
                    $row = mysqli_query($conn, "SELECT * from dataabsenbulanan LEFT JOIN user ON dataabsenbulanan.username = user.id where bulan='$bulan' and tahun='$tahun'order by id DESC");
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
            <div>
                <a class="text-white text-decoration-none w-100" target="_blank" href="cetakabsen.php?b=<?= $bulan ?>&t=<?= substr($tahun, 0, 4) ?>"><button class="w-100 btn btn-danger btn-md text-uppercase fw-bold btn-datalembur">Cetak</button></a>
            </div>
        </div>
    </main>
    </div>
<?php }
?>

<?php
if (isset($_POST['submit3'])) {
    // $row = mysqli_query($conn, "SELECT * from dataabsen LEFT JOIN user_laporan ON dataabsen.nik = user_laporan.id order by idabsen DESC");
    $row = mysqli_query($conn, "SELECT * from dataabsen  order by idabsen DESC");
    foreach ($row as $row_array) {
        // $nama = $_POST['nama'];
        // $tgl = $_POST['tgl'];
        // $naktual = $_POST['naktual'];
        // $haktual = $_POST['haktual'];
        $nik = $row_array['nik'];
        $idabsen = $row_array['idabsen'];
        $inputan = $_POST["in$row_array[idabsen]"];


        $bulan = date('m');
        $tahun = date('Y');
        $tanggalskr = date('d');
        $idlap = $nik . $bulan . $tahun;


        mysqli_query($conn, "UPDATE dataabsen set absensi='$inputan' where idabsen='$idabsen'");

        $rows = mysqli_query($conn, "SELECT * from user_laporan where idlap='$idlap'");
        $rowku = mysqli_fetch_array($rows);
        $kupon = $inputan + $rowku['kupon'];
        mysqli_query($conn, "UPDATE user_laporan set kupon='$kupon' where idlap='$idlap'");

        if ($inputan == 1) {
            mysqli_query($conn, "UPDATE dataabsenbulanan set tg$tanggalskr=1 where username='$nik' and bulan='$bulan' and tahun='$tahun'");
        } else {
            mysqli_query($conn, "UPDATE dataabsenbulanan set tg$tanggalskr=0 where username='$nik' and bulan='$bulan' and tahun='$tahun'");
        }
        // values('$nik','$nama','$tgl','$naktual','$haktual')");
    }
    usleep(500000);
    $msg = 'Absensi Hari ini berhasil diupdate..';
    echo "<script type='text/javascript'>alert('$msg');</script>";
    echo "<script>window.location = '?mi=data_absen'</script>";
    // echo "<script>window.location = '?mi=data_absen'</script>";
    // echo "<script>window.location.reload(</script>";
    // echo "<script>history.back(1);</script>";
}
?>

<?php
if (isset($_POST['tambahbaru'])) {

    $rows = mysqli_query($conn, "SELECT * from user u where lv='1' order by id DESC");

    foreach ($rows as $row_array) {

        $username = $row_array['id'];
        $bulan = date('m');
        $tahun = date('Y');
        // $idlap = $nik . $bulan . $tahun;

        mysqli_query($conn, "INSERT into dataabsenbulanan (username,bulan,tahun) values('$username','$bulan','$tahun')");
        usleep(200000);
    }
    // mysqli_query($conn, "INSERT into user_laporan (id,lv)
    // values('$nik','$bagi')");

    $msg = 'Data berhasil ditambahkan di Periode Bulan Ini';
    echo "<script type='text/javascript'>alert('$msg');</script>";
    echo "<script>window.location = '?mi=data_absen'</script>";
}
?>

<script src="assets/js/jquery/jquery.min.js"></script>
<!-- <script src="./jquery/jquery.min.js"></script> -->
<script>
    $('#nik').on('change', function() {
        var selectedPackage = $('#nik').val();
        if (selectedPackage != '0') {
            $(".btn-datalembur").removeClass("d-none");
            // $(".bt-dua").addClass("d-none");
            // $(".overtime").addClass("d-none");
            // $("#asal").val("");
        }
    })
    <?php
    $row = mysqli_query($conn, "SELECT * from user_laporan where lv=1 order by lv DESC");
    foreach ($row as $row_array) {
    ?>
        $('#nik').on('change', function() {
            var selectedPackage = $('#nik').val();
            if (selectedPackage == <?= $row_array['id'] ?>) {
                $("#nama").val("<?= $row_array['nama'] ?>");
                $("#grub").val("<?= $row_array['grub'] ?>");
                // $(".bt-dua").removeClass("d-none");
                // $(".overtime").removeClass("d-none");
                // $("#nip").val("");
            }
        })
    <?php } ?>

    <?php
    $row = mysqli_query($conn, "SELECT * from dataabsen order by idabsen DESC");
    foreach ($row as $row_array) {
    ?>
        $('#ce<?= $row_array['idabsen'] ?>').on('change', function() {
            var selectedPackage = $('#ce<?= $row_array['idabsen'] ?>').is(':checked');
            if ($('#ce<?= $row_array['idabsen'] ?>').is(':checked')) {
                // alert('it works');
                $("#in<?= $row_array['idabsen'] ?>").val('1');
                // $(".btn-datalembur").removeClass("d-none");
                // $("#nip").val("");

            } else {
                // alert('Not works');
                $("#in<?= $row_array['idabsen'] ?>").val('0');

            }
        })
    <?php } ?>
    // $('#grub').on('change', function() {
    //     var selectedPackage = $('#grub').val();
    //     if (selectedPackage == '4A') {
    //         $("#grub2").val('A');
    //         // $("#nip").val("");
    //     } else if (selectedPackage == '4B') {
    //         $("#grub2").val('B');
    //         // $("#nip").val("");
    //     } else if (selectedPackage == '4C') {
    //         $("#grub2").val('C');
    //         // $("#nip").val("");
    //     } else {
    //         $("#grub2").val('D');
    //         // $("#nip").val("");
    //     }
    // })
</script>