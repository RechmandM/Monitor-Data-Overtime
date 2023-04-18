<?php
$nama = $_SESSION['id'];
$level = $_SESSION['lv'];
$grub = $_SESSION['grub'];
if ($level == 1) {
    include "./dashboard2.php";
    return;
} else {
?>


    <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style=" height:600px"> -->
    <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style=" height:auto "> -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="overflow-x: auto;">

        <!----------------------------- CONTENT ----------------------------->
        <script>
            function tambah() {
                var tom = document.getElementById('tb');
                if (tom.innerHTML == "Tambahkan Pegawai") {
                    tom.innerHTML = "Close";
                } else {
                    tom.innerHTML = "Tambahkan Pegawai";
                }

            }
        </script>
        <div class="col">
            <div class="py-3">
            </div>
            <section id="data" class="py-3">
                <div class="list-group-item mb-3 text-center" style="background-color: rgba(0, 0, 0, 0.2);">
                    <h2 class="list-inline-item text-primary fw-bold text-uppercase">Cetak Data Overtime</h2>
                </div>
                <div class="accordion-item">
                    <div id="colTB" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#data">
                        <div class="accordion-body">
                            <?php
                            include "./form_biodata.php";
                            ?>
                        </div>
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
                ?>
                <div class="text-center">
                    <!-- <h4>Periode Bulan <?= $bulann ?></h4> -->
                    <h4>Periode Bulan Ini</h4>
                </div>
                <div class="accordion-item bg-transparent">
                    <div id="colTB2" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#data">
                        <div class="accordion-body">
                            <h2>karyawan</h2>

                        </div>
                    </div>
                </div>
                <?php
                $row = mysqli_query($conn, "SELECT * from user order by lv ASC");
                $row_data = mysqli_fetch_array($row);
                ?>
                <div <?php if ($row_data != null) {
                            echo "hidden";
                        } ?> class="table-size table-scroll table-responsive bg-white">
                    <table class="table table-bordered table-hover table-striped table-sm w-100" style="width:auto">
                        <thead style="background-color: rgba(0, 0, 0, 0.2);">
                            <tr>
                                <th scope="col" rowspan="3" class="">No</th>
                                <th scope="col" rowspan="3" class="">Status</th>
                                <th scope="col" rowspan="3" class="">NIK</th>
                                <th scope="col" rowspan="3" class="">Password</th>
                                <th scope="col" rowspan="3" class="">Nama</th>
                                <th scope="col" rowspan="3" class="">Alamat</th>
                                <th scope="col" rowspan="3" class="">Nomor Telepon</th>
                                <th scope="col" rowspan="3" class="">Plant</th>
                                <th scope="col" rowspan="3" class="">Bagian</th>
                                <th scope="col" rowspan="3" class="">Group</th>
                                <th scope="col" colspan="4" class="text-center">Overtime</th>
                                <th scope="col" rowspan="3" class="">Kupon</th>
                                <th scope="col" rowspan="3" class="">#</th>
                            </tr>
                            <tr>
                                <th scope="col" colspan="2" class="text-center">Normal</th>
                                <th scope="col" colspan="2" class="text-center">Holiday</th>
                            </tr>
                            <tr>
                                <th scope="col">Aktual</th>
                                <th scope="col">Matang</th>
                                <th scope="col">Aktual</th>
                                <th scope="col">Matang</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div <?php
                        if ($row_data == null) {
                            echo "hidden";
                        } ?> class="table-size table-scroll table-responsive bg-white" style="height: 300px">
                    <?php
                    include './config/koneksi.php';
                    ?>
                    <table <?php if ($level != 3) {
                                echo "hidden";
                            } ?> class="table table-bordered table-hover table-striped table-sm w-100" style="width:auto">
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
                            // $row = mysqli_query($conn, "SELECT * from datalembur LEFT JOIN user ON datalembur.nik = user.id where grub='$grub' and id='$nama' order by tgl DESC");
                            $bulan = date('m');
                            $tahun = date('Y');
                            $row = mysqli_query($conn, "SELECT * from user_laporan u  where lv=1 and bulan='$bulan' and tahun='$tahun' order by nama DESC");
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
                            } ?><tr>
                                <td>
                                    <p>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <div class="mb-3">
                <div class="row">
                    <div class="col-3">
                        <a class="text-white text-decoration-none" target="_blank" href="cetaka.php?b=<?= $bulan ?>&t=<?= substr($tahun, 0, 4) ?>"><button class="btn w-100 fw-bold" style='background-color:darkorange;'>Export Group A</button></a>
                    </div>
                    <div class="col-3">
                        <a class="text-white text-decoration-none" target="_blank" href="cetakb.php?b=<?= $bulan ?>&t=<?= substr($tahun, 0, 4) ?>"><button class="btn w-100 fw-bold" style='background-color:DarkViolet;'>Export Group B</button></a>
                    </div>
                    <div class="col-3">
                        <a class="text-white text-decoration-none" target="_blank" href="cetakc.php?b=<?= $bulan ?>&t=<?= substr($tahun, 0, 4) ?>"><button class="btn w-100 fw-bold" style='background-color:Yellow;'>Export Group C</button></a>
                    </div>
                    <div class="col-3">
                        <a class="text-white text-decoration-none" target="_blank" href="cetakd.php?b=<?= $bulan ?>&t=<?= substr($tahun, 0, 4) ?>"><button class="btn w-100 fw-bold" style='background-color:Deeppink;'>Export Group D</button></a>
                    </div>
                </div>
            </div>
            <form action="" method="POST" class="row mb-2">

                <div class="list-group-item">
                    <label class="h6" for="">Cari Berdasarkan Periode Bulan & Tahun</label>
                    <di class="row">
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
                                        <option value="12">November</option>
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
                                    $row = mysqli_query($conn, "SELECT * from user_laporan where bulan='$bulan' and tahun='$tahun'");
                                    $row_array = mysqli_fetch_array($row);
                                    if ($row_array['idlap'] == null) {
                                        echo "n";
                                    } ?> class="col">
                            <button class="btn btn-danger float-end text-uppercase fw-bold" type="submit" name="tambah" id="carian" style="margin-top: 26px;">Buat Periode Baru Untuk Bulan Ini</button>
                        </div>
                </div>
        </div>
        </form>
        <hr class="garis">

        </div>

        </div>
    </main>
<?php } ?>

<?php
if (isset($_POST['cari'])) {
    $namanik = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $ayam = $tahun;
    // $row = mysqli_query($conn, "SELECT * from datalembur where='$caritgl'");
    // foreach($row as $row_array){
    //     
?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="overflow-x: auto;">
        <section class="py-3">
            <div class="table-size table-scroll table-responsive bg-white container" style="height: 270px">
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
                        $row = mysqli_query($conn, "SELECT * from user_laporan where bulan='$namanik' and tahun='$tahun' order by id DESC");
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
                        } ?><tr>
                            <td>
                                <p>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <div class="mb-3">
            <div class="row">
                <div class="col-3">
                    <a class="text-white text-decoration-none" target="_blank" href="cetaka.php?b=<?= $namanik ?>&t=<?= substr($tahun, 0, 4) ?>"><button class="btn w-100 fw-bold" style='background-color:darkorange;'>Export Group A</button></a>
                </div>
                <div class="col-3">
                    <a class="text-white text-decoration-none" target="_blank" href="cetakb.php?b=<?= $namanik ?>&t=<?= substr($tahun, 0, 4) ?>"><button class="btn w-100 fw-bold" style='background-color:DarkViolet;'>Export Group B</button></a>
                </div>
                <div class="col-3">
                    <a class="text-white text-decoration-none" target="_blank" href="cetakc.php?b=<?= $namanik ?>&t=<?= substr($tahun, 0, 4) ?>"><button class="btn w-100 fw-bold" style='background-color:Yellow;'>Export Group C</button></a>
                </div>
                <div class="col-3">
                    <a class="text-white text-decoration-none" target="_blank" href="cetakd.php?b=<?= $namanik ?>&t=<?= substr($tahun, 0, 4) ?>"><button class="btn w-100 fw-bold" style='background-color:Deeppink;'>Export Group D</button></a>
                </div>
            </div>
        </div>
    </main>

<?php }
// echo "<script>window.location = '?mi=data_lembur&'</script>";
// cari smua karyawan
if (isset($_POST['caris'])) {
    $caritgl = $_POST['caritanggal'];
    $caritgl2 = $_POST['caritanggal2'];
    // $namanik = $_POST['namanik'];
    // $row = mysqli_query($conn, "SELECT * from datalembur where='$caritgl'");
    // foreach($row as $row_array){
    //     
?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="overflow-x: auto;">
        <section class="py-3">
            <div class="table-size table-scroll table-responsive bg-white container" style="height: 270px">
                <table class="table table-bordered table-hover table-striped table-sm w-100" style="width:auto">
                    <thead style="background-color: rgba(0, 0, 0, 0.2);">
                        <tr>
                            <th scope="col" rowspan="3" class="text-primary">No</th>
                            <th scope="col" rowspan="3" class="text-primary">Id</th>
                            <th scope="col" rowspan="3" class="text-primary">Status</th>
                            <th scope="col" rowspan="3" class="text-primary">NIK</th>
                            <th scope="col" rowspan="3" class="text-primary">Nama</th>
                            <th scope="col" rowspan="3" class="text-primary">Group</th>
                            <th scope="col" rowspan="3" class="text-primary">Tanggal</th>
                            <th scope="col" colspan="2" class="text-center text-primary">Overtime</th>

                        </tr>
                        <tr>
                            <th scope="col" class="text-center text-primary">Normal</th>
                            <th scope="col" class="text-center text-primary">Holiday</th>
                        </tr>
                        <tr>
                            <th scope="col" class="text-primary">Aktual</th>
                            <th scope="col" class="text-primary">Aktual</th>
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
                        $row = mysqli_query($conn, "SELECT * from datalembur LEFT JOIN user ON datalembur.nik = user.id WHERE tgl between '$caritgl' and '$caritgl2' order by tgl ASC");
                        $no = 1;
                        foreach ($row as $row_array) { ?>
                            <tr>
                                <td class="fw-bolder"><?= $no; ?></td>
                                <td><?= "#DL" . $row_array['iddl']; ?></td>
                                <td class="fw-bold"><?php echo "<span style='color:green;'>Karyawan</span>"; ?></td>
                                <td><?= $row_array['nik']; ?></td>
                                <td><?= $row_array['nama']; ?></td>
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
                                <td><?= $row_array['tgl']; ?></td>

                                <td><?php if ($row_array['naktuald'] == 0) {
                                        echo "-";
                                    } else {
                                        echo $row_array['naktuald'] . " Jam";
                                    }; ?></td>
                                <td><?php if ($row_array['haktuald'] == 0) {
                                        echo "-";
                                    } else {
                                        echo $row_array['haktuald'] . " Jam";
                                    }; ?></td>

                                <!-- <td><?php if ($row_array['kupon'] == 0) {
                                                echo "-";
                                            } else {
                                                echo $row_array['kupon'] . " Hari";
                                            }; ?></td> -->

                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

<?php }
?>

<?php
if (isset($_POST['tambah'])) {

    $row = mysqli_query($conn, "SELECT * from user u where lv='1' order by lv DESC");
    
    foreach ($row as $row_array) {
        $nama = $row_array['nama'];
        $alamat = $row_array['alamat'];
        $nomor = $row_array['nom'];
        $email = $row_array['email'];
        $masuk = $row_array['tglmasuk'];
        $plant = $row_array['plant'];
        $bagian = $row_array['departeman'];
        $group = $row_array['grub'];
        $nik = $row_array['id'];
        $password = $row_array['pw'];
        $bagi = $row_array['lv'];
        $kupon = $row_array['kupon'];
        $absensi = 0;
        $bulan = date('m');
        $tahun = date('Y');
        $idlap = $nik . $bulan . $tahun;
        
        mysqli_query($conn, "INSERT into user_laporan (idlap,id,lv,nama,plant,departement,grub,naktual,nmatang,haktual,hmatang,kupon,bulan,tahun)
    values('$idlap','$nik','$bagi','$nama','$plant','$bagian','$group','$naktual','$nmatang','$haktual','$hmatang','$kupon','$bulan','$tahun')");

             // mysqli_query($conn, "INSERT into user_laporan (id,lv)
        // values('$nik','$bagi')");
        usleep(500000);
        $msg = 'Data Pegawai berhasil ditambahkan di Periode Bulan Ini';
        echo "<script type='text/javascript'>alert('$msg');</script>";
        echo "<script>window.location = '?mi=data_cetak'</script>";
    }
}
?>

<script src="assets/js/jquery/jquery.min.js"></script>
<script>
    $('#niku').on('change', function() {
        var selectedPackage = $('#niku').val();
        if (selectedPackage != 0) {
            $(".tombolku").removeClass("disabled");
            $(".tombolku").removeClass("d-none");
            $(".tombolku2").addClass("disabled");
            $(".tombolku2").addClass("d-none");
        }
    })
    $('#niku').on('change', function() {
        var selectedPackage = $('#niku').val();
        if (selectedPackage == 0) {
            $(".tombolku").addClass("disabled");
            $(".tombolku").addClass("d-none");
            $(".tombolku2").removeClass("disabled");
            $(".tombolku2").removeClass("d-none");
        }
    })
</script>