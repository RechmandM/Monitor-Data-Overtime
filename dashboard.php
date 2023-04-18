<?php
$data = $_SESSION['id'];
$level = $_SESSION['lv'];
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <!----------------------------- CONTENT ----------------------------->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <?php
        $row = mysqli_query($conn, "SELECT * from user where id='$data'");
        $row_array = mysqli_fetch_array($row);
        ?>
    </div>
    <div class="p-3 mb-3 text-center" style="background-color: rgba(0, 0, 0, 0.2);">
        <p class="h1 text-center fw-bold text-capitalize" style="color:blue;">
            Selamat Datang <?= $row_array['nama'] ?>
        </p>
    </div>
    <div class="col">
        <div class="">
        </div>
        <section <?php if ($level != 3) {
                        echo "hidden";
                    } ?> id="data" class="">
            <div class="p-3 mb-3 text-center" style="background-color: rgba(0, 0, 0, 0.2);">
                <h1 class="list-inline-item fw-bold text-capitalize" style="color:blue;">Monitoring Data Overtime</h1>
            </div>
            <div class="accordion-item">
                <div id="colTB" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#data">
                    <div class="accordion-body">
                    </div>
                </div>
            </div>
            <?php
            $dataku = mysqli_query($conn, "SELECT * from user");
            $siswa = 0;
            $guru = 0;
            $admin = 0;
            foreach ($dataku as $table) {
                if ($table['lv'] == 1) {
                    $siswa += 1;
                }
                if ($table['lv'] == 2) {
                    $guru += 1;
                }
                if ($table['lv'] == 3) {
                    $admin += 1;
                }
            }

            $row = mysqli_query($conn, "SELECT * from user");
            $row_data = mysqli_fetch_array($row);
            ?>
            <div <?php if ($row_data == null) {
                        echo "hidden";
                    } ?> class="table-size table-scroll table-responsive bg-white" style="overflow-x: auto">
                <div class="container">
                    <div class="row">
                        <div class="row row-cols-2 row-cols-md-3 g-4 mx-auto my-3">
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body bg-danger">
                                        <h1 class="py-3 card-title text-center text-uppercase fw-bold text-white" style="font-size: 90px;"><?= $admin; ?></h1>
                                        <h4 class="card-title text-center text-uppercase fw-bold">Member</h4>
                                    </div>
                                    <div class="card-footer">
                                        <h5 class="fw-bold text-center text-danger text-uppercase">Administrator</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body bg-primary">
                                        <h1 class=" py-3 card-title text-center text-uppercase fw-bold text-white" style="font-size: 90px;"><?= $guru; ?></h1>
                                        <h4 class="card-title text-center text-uppercase fw-bold">Member</h4>
                                    </div>
                                    <div class="card-footer">
                                        <h5 class="fw-bold text-center text-primary text-uppercase">HRD</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body bg-success">
                                        <h1 class=" py-3 card-title text-center text-uppercase fw-bold text-white" style="font-size: 90px;"><?= $siswa; ?></h1>
                                        <h4 class="card-title text-center text-uppercase fw-bold">Member</h4>
                                    </div>
                                    <div class="card-footer">
                                        <h5 class="fw-bold text-center text-success text-uppercase">Karyawan</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section <?php if ($level == 3) {
                        echo "hidden";
                    } ?> id="data" class="">
            <div class="accordion-item">
                <div id="colTB" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#data">
                    <div class="accordion-body">
                    </div>
                </div>
            </div>
            <div>
                <div class="container">
                    <div class="col py-3">
                        <div class="row shadow">
                            <div class="<?php if ($level == 2) {
                                            echo "col-6";
                                        } else {
                                            echo "col-6 col-md-4";
                                        } ?>  border-2">
                                <div class="table-size table-scroll table-responsive bg-white" style="overflow-x: auto">
                                    <table class="table table-bordered table-hover table-striped table-sm w-100" style="width:auto">
                                        <thead style="background-color: rgba(0, 0, 0, 0.2);">
                                            <tr>
                                                <th scope="col" colspan="2" class="text-center h4 text-primary">Biodata Anda</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Nama Lengkap</td>
                                                <td><?= $row_array['nama']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td><?= $row_array['alamat']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Nomor Telepon</td>
                                                <td><?= $row_array['nom']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat Email</td>
                                                <td><?= $row_array['email']; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="<?php if ($level == 2) {
                                            echo "col-6";
                                        } else {
                                            echo "col-6 col-md-4";
                                        } ?> border-2">
                                <div class="table-size table-scroll table-responsive bg-white">
                                    <table class="table table-bordered table-hover table-striped table-sm w-100">
                                        <thead style="background-color: rgba(0, 0, 0, 0.2);">
                                            <tr>
                                                <th scope="col" colspan="2" class="text-center h4 text-primary">Bagian Group</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Plant</td>
                                                <td><?= $row_array['plant']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Departement</td>
                                                <td><?= $row_array['departeman']; ?></td>
                                            </tr>
                                            <tr <?php if ($level == 2) {
                                                    echo "hidden";
                                                } ?>>
                                                <td>Group</td>
                                                <td><?= $row_array['grub']; ?></td>
                                            <tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div <?php if ($level == 2) {
                                        echo "hidden";
                                    } ?> class="<?php if ($level != 2) {
                                                    echo "col-6 col-md-4";
                                                } ?>  border-2">
                                <div class="table-size table-scroll table-responsive bg-white" style="overflow-x: auto">
                                    <table class="table table-bordered table-hover table-striped table-sm w-100" style="width:auto">
                                        <thead style="background-color: rgba(0, 0, 0, 0.2);">
                                            <tr>
                                                <th scope="col" colspan="2" class="text-center h4 text-primary">Overtime</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $bulan = date('m');
                                        $tahun = date('Y');
                                        // $row = mysqli_query($conn, "SELECT * from user_laporan where id='$data' and bulan='$bulan' and tahun='$tahun'");
                                        $row = mysqli_query($conn, "SELECT * from user_laporan where id='$data' and bulan='$bulan' and tahun='$tahun'");
                                        $row_array = mysqli_fetch_array($row);
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td colspan="2" class="fw-bold text-center text-primary">Hari Normal</td>
                                            </tr>
                                            <tr>
                                                <td>Aktual</td>
                                                <td><?= $row_array['naktual']; ?> Jam</td>
                                            </tr>
                                            <tr>
                                                <td>Matang</td>
                                                <td><?= $row_array['naktual'] * 3; ?> Jam</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="fw-bold text-center text-primary">Hari Holiday</td>
                                            </tr>
                                            <tr>
                                                <td>Aktual</td>
                                                <td><?= $row_array['haktual']; ?> Jam</td>
                                            </tr>
                                            <tr>
                                                <td>Matang</td>
                                                <td><?= $row_array['haktual'] * 2; ?> Jam</td>
                                            </tr>
                                            <tr>
                                                <td>Kupon</td>
                                                <td><?= $row_array['kupon']; ?> Hari</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="garis">
</main>