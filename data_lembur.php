<?php
$nama = $_SESSION['id'];
$level = $_SESSION['lv'];
$grub = $_SESSION['grub'];
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
                <h2 class="list-inline-item text-primary fw-bold text-uppercase">Data Lembur</h2>
                <button <?php if ($level != 3) {
                            echo "hidden";
                        } ?> onclick="tambah()" id="tb" class="btn-primary rounded-2 float-end w-25 p-2 my-1 fw-bold" data-bs-toggle="collapse" data-bs-target="#baru">Tambahkan Data Lembur</button>
            </div>
            <div class="accordion-item">
                <div id="baru" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#data">
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
            $row = mysqli_query($conn, "SELECT * from datalembur order by tgl DESC");
            $row_data = mysqli_fetch_array($row);
            ?>
            <div <?php if ($row_data != null) {
                        echo "hidden";
                    } ?> class="table-size table-scroll table-responsive bg-white" style="overflow-x: auto">
                <table class="table table-bordered table-hover table-striped table-sm w-100" style="width:auto">
                    <thead style="background-color: rgba(0, 0, 0, 0.2);">
                        <tr>
                            <th scope="col" rowspan="3" class="text-primary">No</th>
                            <th scope="col" rowspan="3" class="text-primary">Id</th>
                            <th scope="col" rowspan="3" class="text-primary">Status</th>
                            <th scope="col" rowspan="3" class="text-primary">NIK</th>
                            <!-- <th scope="col" rowspan="3" class="text-primary">Password</th> -->
                            <th scope="col" rowspan="3" class="text-primary">Nama</th>
                            <th scope="col" rowspan="3" class="text-primary">Grub</th>
                            <th scope="col" rowspan="3" class="text-primary">Tanggal</th>
                            <!-- <th scope="col" rowspan="3" class="text-primary">Nomor Telepon</th>
                                <th scope="col" rowspan="3" class="text-primary">Plant</th>
                                <th scope="col" rowspan="3" class="text-primary">Bagian</th>
                                <th scope="col" rowspan="3" class="text-primary">Group</th> -->
                            <th scope="col" colspan="2" class="text-center text-primary">Overtime</th>
                            <th scope="col" rowspan="3" class="text-primary">#</th>
                            <!-- <th scope="col">Matang</th>
                                <th scope="col">Aktual</th>
                                <th scope="col">Matang</th> -->
                            <!-- <th scope="col" rowspan="3" class="text-primary">Kupon</th> -->

                        </tr>
                        <tr>
                            <th scope="col" class="text-center text-primary">Normal</th>
                            <!-- <th scope="col">Matang</th> -->
                            <th scope="col" class="text-center text-primary">Holiday</th>
                            <!-- <th scope="col">Matang</th> -->
                            <!-- <th scope="col">Kupon</th> -->
                            <!-- <th scope="col">#</th> -->
                        </tr>
                        <tr>
                            <th scope="col" class="text-primary">Aktual</th>
                            <th scope="col" class="text-primary">Aktual</th>
                            <!-- <th scope="col">Kupon</th> -->
                            <!-- <th scope="col">#</th> -->
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
                        </tr>
                    </tbody>
                </table>
            </div>
            <div <?php
                    /////// Admin
                    if ($row_data == null) {
                        echo "hidden";
                    } ?> class="table-size table-scroll table-responsive bg-white" style="height: 270px">
                <table <?php if ($level != 3) {
                            echo "hidden";
                        } ?> class="table table-bordered table-hover table-striped table-sm w-100" style="width:auto">
                    <thead style="background-color: rgba(0, 0, 0, 0.2);">
                        <tr>
                            <th scope="col" rowspan="3" class="text-primary">No</th>
                            <th scope="col" rowspan="3" class="text-primary">Id</th>
                            <th scope="col" rowspan="3" class="text-primary">Status</th>
                            <th scope="col" rowspan="3" class="text-primary">NIK</th>
                            <!-- <th scope="col" rowspan="3" class="text-primary">Password</th> -->
                            <th scope="col" rowspan="3" class="text-primary">Nama</th>
                            <th scope="col" rowspan="3" class="text-primary">Group</th>
                            <th scope="col" rowspan="3" class="text-primary">Tanggal</th>
                            <!-- <th scope="col" rowspan="3" class="text-primary">Nomor Telepon</th>
                                <th scope="col" rowspan="3" class="text-primary">Plant</th>
                                <th scope="col" rowspan="3" class="text-primary">Bagian</th>
                                <th scope="col" rowspan="3" class="text-primary">Group</th> -->
                            <th scope="col" colspan="2" class="text-center text-primary">Overtime</th>
                            <th scope="col" rowspan="3" class="text-primary">#</th>
                            <!-- <th scope="col">Matang</th>
                                <th scope="col">Aktual</th>
                                <th scope="col">Matang</th> -->
                            <!-- <th scope="col" rowspan="3" class="text-primary">Kupon</th> -->

                        </tr>
                        <tr>
                            <th scope="col" class="text-center text-primary">Normal</th>
                            <!-- <th scope="col">Matang</th> -->
                            <th scope="col" class="text-center text-primary">Holiday</th>
                            <!-- <th scope="col">Matang</th> -->
                            <!-- <th scope="col">Kupon</th> -->
                            <!-- <th scope="col">#</th> -->
                        </tr>
                        <tr>
                            <th scope="col" class="text-primary">Aktual</th>
                            <th scope="col" class="text-primary">Aktual</th>
                            <!-- <th scope="col">Kupon</th> -->
                            <!-- <th scope="col">#</th> -->
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
                        $row = mysqli_query($conn, "SELECT * from datalembur LEFT JOIN user ON datalembur.nik = user.id order by tgl DESC");
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
                                <td>
                                    <a class="text-white text-decoration-none" href="?mi=data_lembur_edit&id=<?php echo $row_array['iddl']; ?>&idlem=<?php echo $row_array['idlem']; ?>"><button class="btn-primary w-100">Edit</button></a>
                                    <a class="text-white text-decoration-none" href="?mi=data_lembur_delete&id=<?php echo $row_array['iddl']; ?>&idlem=<?php echo $row_array['idlem']; ?>"><button class="btn-danger w-100">Delete</button></a>
                                </td>
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
                        </tr>
                    </tbody>
                </table>
                <!-- ======= Ketua -->
                <table <?php if ($level != 2) {
                            echo "hidden";
                        } ?> class="table table-bordered table-hover table-striped table-sm w-100" style="width:auto">
                    <thead style="background-color: rgba(0, 0, 0, 0.2);">
                        <tr>
                            <th scope="col" rowspan="3" class="text-primary">No</th>
                            <th scope="col" rowspan="3" class="text-primary">Id</th>
                            <th scope="col" rowspan="3" class="text-primary">Status</th>
                            <th scope="col" rowspan="3" class="text-primary">NIK</th>
                            <!-- <th scope="col" rowspan="3" class="text-primary">Password</th> -->
                            <th scope="col" rowspan="3" class="text-primary">Nama</th>
                            <th scope="col" rowspan="3" class="text-primary">Group</th>
                            <th scope="col" rowspan="3" class="text-primary">Tanggal</th>
                            <!-- <th scope="col" rowspan="3" class="text-primary">Nomor Telepon</th>
                                <th scope="col" rowspan="3" class="text-primary">Plant</th>
                                <th scope="col" rowspan="3" class="text-primary">Bagian</th>
                                <th scope="col" rowspan="3" class="text-primary">Group</th> -->
                            <th scope="col" colspan="2" class="text-center text-primary">Overtime</th>
                            <!-- <th scope="col" rowspan="3" class="text-primary">#</th> -->
                            <!-- <th scope="col">Matang</th>
                                <th scope="col">Aktual</th>
                                <th scope="col">Matang</th> -->
                            <!-- <th scope="col" rowspan="3" class="text-primary">Kupon</th> -->

                        </tr>
                        <tr>
                            <th scope="col" class="text-center text-primary">Normal</th>
                            <!-- <th scope="col">Matang</th> -->
                            <th scope="col" class="text-center text-primary">Holiday</th>
                            <!-- <th scope="col">Matang</th> -->
                            <!-- <th scope="col">Kupon</th> -->
                            <!-- <th scope="col">#</th> -->
                        </tr>
                        <tr>
                            <th scope="col" class="text-primary">Aktual</th>
                            <th scope="col" class="text-primary">Aktual</th>
                            <!-- <th scope="col">Kupon</th> -->
                            <!-- <th scope="col">#</th> -->
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
                        // $row = mysqli_query($conn, "SELECT * from datalembur LEFT JOIN user ON datalembur.nik = user.id where grub='$grub' order by tgl DESC");
                        $row = mysqli_query($conn, "SELECT * from datalembur LEFT JOIN user ON datalembur.nik = user.id order by tgl DESC");
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
                        </tr>
                    </tbody>
                </table>

                <table <?php if ($level == 2 || $level == 3) {
                            echo "hidden";
                        } ?> class="table table-bordered table-hover table-striped table-sm w-100" style="width:auto">
                    <thead style="background-color: rgba(0, 0, 0, 0.2);">
                        <tr>
                            <th scope="col" rowspan="3" class="text-primary">No</th>
                            <th scope="col" rowspan="3" class="text-primary">Id</th>
                            <th scope="col" rowspan="3" class="text-primary">Status</th>
                            <th scope="col" rowspan="3" class="text-primary">NIK</th>
                            <!-- <th scope="col" rowspan="3" class="text-primary">Password</th> -->
                            <th scope="col" rowspan="3" class="text-primary">Nama</th>
                            <th scope="col" rowspan="3" class="text-primary">Group</th>
                            <th scope="col" rowspan="3" class="text-primary">Tanggal</th>
                            <!-- <th scope="col" rowspan="3" class="text-primary">Nomor Telepon</th>
                                <th scope="col" rowspan="3" class="text-primary">Plant</th>
                                <th scope="col" rowspan="3" class="text-primary">Bagian</th>
                                <th scope="col" rowspan="3" class="text-primary">Group</th> -->
                            <th scope="col" colspan="2" class="text-center text-primary">Overtime</th>
                            <!-- <th scope="col" rowspan="3" class="text-primary">#</th> -->
                            <!-- <th scope="col">Matang</th>
                                <th scope="col">Aktual</th>
                                <th scope="col">Matang</th> -->
                            <!-- <th scope="col" rowspan="3" class="text-primary">Kupon</th> -->

                        </tr>
                        <tr>
                            <th scope="col" class="text-center text-primary">Normal</th>
                            <!-- <th scope="col">Matang</th> -->
                            <th scope="col" class="text-center text-primary">Holiday</th>
                            <!-- <th scope="col">Matang</th> -->
                            <!-- <th scope="col">Kupon</th> -->
                            <!-- <th scope="col">#</th> -->
                        </tr>
                        <tr>
                            <th scope="col" class="text-primary">Aktual</th>
                            <th scope="col" class="text-primary">Aktual</th>
                            <!-- <th scope="col">Kupon</th> -->
                            <!-- <th scope="col">#</th> -->
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
                        $row = mysqli_query($conn, "SELECT * from datalembur LEFT JOIN user ON datalembur.nik = user.id where grub='$grub' and id='$nama' order by tgl DESC");
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
                        </tr>
                    </tbody>
                </table>
            </div>

        </section>

        <form action="" method="POST" class="row mb-2">

            <div class="list-group-item">
                <label class="h6" for="">Cari Berdasarkan Nama & Periode</label>
                <div class="row">
                    <div class="col">
                        <div class="input-group">
                            <div class="px-3">
                                <select class="form-control" name="namanik" id="niku">
                                    <option <?php if ($level == 1) {
                                                echo "hidden disabled";
                                            } ?> value="0">-- Pilih Semua Karyawan --</option>
                                    <?php
                                    if ($level == 1) {
                                        $row = mysqli_query($conn, "SELECT * from user u where id='$nama' order by lv DESC");
                                    } else {
                                        $row = mysqli_query($conn, "SELECT * from user u where lv=1 order by lv DESC");
                                    }
                                    foreach ($row as $row_array) {
                                    ?>
                                        <option value="<?= $row_array['id'] ?>"><?= $row_array['id'] . " (" . $row_array['nama'] . ")"  ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <input type="date" class="form-control list-inline-item" name="caritanggal" value="<?= date('Y-m-d'); ?>">
                            <label class="h6 list-inline-item col-form-label px-2" for="">Sampai</label>
                            <input type="date" class="form-control list-inline-item" name="caritanggal2" value="<?= date('Y-m-d'); ?>">
                            <button  class="btn btn-primary tombolku <?php if ($level == 1) {
                                                echo "s";
                                            }?>disabled <?php if ($level == 1) {
                                                echo "s";
                                            }?>d-none" type="submit" name="cari" id="carian">CARI</button>
                            <button <?php if ($level == 1) {
                                                echo "hidden";
                                            }?> class="btn btn-primary tombolku2" type="submit2" name="caris" id="carian">CARI</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>

<?php
if (isset($_POST['cari'])) {
    $caritgl = $_POST['caritanggal'];
    $caritgl2 = $_POST['caritanggal2'];
    $namanik = $_POST['namanik'];
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
                        $row = mysqli_query($conn, "SELECT * from datalembur LEFT JOIN user ON datalembur.nik = user.id where nik='$namanik' and tgl between '$caritgl' and '$caritgl2' order by tgl ASC");
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