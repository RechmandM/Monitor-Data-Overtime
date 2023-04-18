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
                    <h2 class="list-inline-item text-primary fw-bold text-uppercase">Data Karyawan</h2>
                    <button <?php if ($level != 3) {
                                echo "hidden";
                            } ?> onclick="tambah()" id="tb" class="btn-primary rounded-2 float-end w-25 p-2 my-1 fw-bold" data-bs-toggle="collapse" data-bs-target="#colTB">Tambahkan Pegawai</button>
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
                <div class="accordion-item bg-transparent">
                    <div id="colTB2" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#data">
                        <div class="accordion-body">
                            <h2>karyawan</h2>
                            <?php
                            ?>
                        </div>
                    </div>
                </div>
                <?php
                $row = mysqli_query($conn, "SELECT * from user order by lv ASC");
                $row_data = mysqli_fetch_array($row);
                ?>
                <div <?php if ($row_data != null) {
                            echo "hidden";
                        } ?> class="table-size table-scroll table-responsive bg-white" style="overflow-x: auto">
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
                        } ?> class="table-size table-scroll table-responsive bg-white" style="height: 270px">
                    <table <?php if ($level != 3) {
                                echo "hidden";
                            } ?> class="table table-bordered table-hover table-striped table-sm w-100" style="width:auto">
                        <thead style="background-color: rgba(0, 0, 0, 0.2);">
                            <tr>
                                <th scope="col" rowspan="3" class="text-primary">No</th>
                                <th scope="col" rowspan="3" class="text-primary">NIK</th>
                                <th scope="col" rowspan="3" class="text-primary">Nama</th>
                                <th scope="col" rowspan="3" class="text-primary">Jabatan</th>
                                <th scope="col" rowspan="3" class="text-primary">Alamat</th>
                                <th scope="col" rowspan="3" class="text-primary">Nomor Telepon</th>
                                <th scope="col" rowspan="3" class="text-primary">Email</th>
                                <th scope="col" rowspan="3" class="text-primary">Tgl Masuk</th>
                                <th scope="col" rowspan="3" class="text-primary">Plant</th>
                                <th scope="col" rowspan="3" class="text-primary">Departement</th>
                                <th scope="col" rowspan="3" class="text-primary">Group</th>
                                <th scope="col" rowspan="3" class="text-primary">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $row = mysqli_query($conn, "SELECT * from user u order by lv DESC");
                            $no = 1;
                            foreach ($row as $row_array) { ?>
                                <tr>
                                    <td class="fw-bolder"><?= $no; ?></td>
                                    <td><?= $row_array['id']; ?></td>
                                    <!-- <td><?= "*****" ?></td> -->
                                    <td><?= $row_array['nama']; ?></td>
                                    <td class="fw-bold"><?php if ($row_array['lv'] == 1) {
                                                            echo "<span style='color:green;'>Karyawan</span>";
                                                        } else if ($row_array['lv'] == 2) {
                                                            echo "<span style='color:blue;'>HRD</span>";
                                                        } else {
                                                            echo "<span style='color:red;'>Administrator</span>";
                                                        } ?></td>
                                    <td><?= $row_array['alamat']; ?></td>
                                    <td><?= $row_array['nom']; ?></td>
                                    <td><?= $row_array['email']; ?></td>
                                    <td><?= $row_array['tglmasuk']; ?></td>
                                    <td><?= $row_array['plant']; ?></td>
                                    <td><?= $row_array['departeman']; ?></td>
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
                                    <td>
                                        <a class="text-white text-decoration-none" href="?mi=data_user_edit&id=<?php echo $row_array['id']; ?>"><button class="btn-primary w-100">Edit</button></a>
                                        <a class="text-white text-decoration-none" href="?mi=data_user_delete&id=<?php echo $row_array['id']; ?>"><button <?php if ($row_array['lv'] == 3) {
                                                                                                                                                                echo "hidden";
                                                                                                                                                            } ?> class="btn-danger w-100">Delete</button></a>
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

                    <table <?php if ($level != 2) {
                                echo "hidden";
                            } ?> class="table table-bordered table-hover table-striped table-sm w-100" style="width:auto">
                        <thead style="background-color: rgba(0, 0, 0, 0.2);">
                            <tr>
                                <th scope="col" rowspan="3" class="text-primary">No</th>
                                <th scope="col" rowspan="3" class="text-primary">Status</th>
                                <th scope="col" rowspan="3" class="text-primary">NIK</th>
                                <th scope="col" rowspan="3" class="text-primary">Nama</th>
                                <th scope="col" rowspan="3" class="text-primary">Plant</th>
                                <th scope="col" rowspan="3" class="text-primary">Departement</th>
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
                            $row = mysqli_query($conn, "SELECT * from user u where lv=1 and grub='$grub' order by id ASC");
                            $no = 1;
                            foreach ($row as $row_array) { ?>
                                <tr>
                                    <td class="fw-bolder"><?= $no; ?></td>
                                    <td class="fw-bold"><?php if ($row_array['lv'] == 1) {
                                                            echo "<span style='color:green;'>Karyawan</span>";
                                                        } else if ($row_array['lv'] == 2) {
                                                            echo "<span style='color:blue;'>HRD</span>";
                                                        } else {
                                                            echo "<span style='color:red;'>Administrator</span>";
                                                        } ?></td>
                                    <td><?= $row_array['id']; ?></td>
                                    <td><?= $row_array['nama']; ?></td>
                                    <td><?= $row_array['plant']; ?></td>
                                    <td><?= $row_array['bagian']; ?></td>
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
        </div>
    </main>
<?php } ?>