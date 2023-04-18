<?php
$level = $_SESSION['lv'];
if ($level == 1 || $level == 2) {
    include "./dashboard2.php";
    return;
} else {
?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="height: 700px;">
        <section id="data" class="py-3">
            <div class="list-group-item mb-3 text-center" style="background-color: rgba(0, 0, 0, 0.2);">
                <h2 class="list-inline-item text-primary fw-bold text-uppercase" style="color:blue">Data User</h2>
            </div>
            <div class="text-center">
            </div>
            <div class="row">
                <div class="col">
                    <?php
                    $id = $_GET['id'];
                    $data = mysqli_query($conn, "SELECT * from datalembur LEFT JOIN user ON datalembur.nik= user.id where iddl='$id'");
                    while ($row_data = mysqli_fetch_array($data)) {
                    ?>
                        <form method="POST" class="needs-validation" novalidate style="font-size: larger;">
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="pekerjaan" class="form-label col-form-label fw-bold">NIK Karyawan</label>
                                    <!-- <input readonly type="text" class="form-control" id="nik" name="nik" value="<?= date("ymd") . date("His"); ?>" placeholder="Otomatis Terisi.." required> -->

                                    <input readonly type="text" class="form-control" value="<?= $row_data['nik'] . " (" . $row_data['nama'] . ")"  ?>">
                                    </select>
                                    <div class="invalid-feedback">
                                        Please enter your Work.
                                    </div>
                                    <!-- </div> -->
                                </div>
                                <div class="col-md-4">
                                    <!-- <div class="input-group mb-4"> -->
                                    <label for="namal" class="form-label col-form-label fw-bold">Group</label>
                                    <input readonly type="text" class="form-control" id="nama" name="nama" value="<?php if ($row_data['grub'] == "4A") {
                                                                                                                        echo "A";
                                                                                                                    } else if ($row_data['grub'] == "4B") {
                                                                                                                        echo "B";
                                                                                                                    } else if ($row_data['grub'] == "4C") {
                                                                                                                        echo "C";
                                                                                                                    } else {
                                                                                                                        echo "D";
                                                                                                                    } ?>" placeholder="Otomatis Terisi" required>
                                    <div class="invalid-feedback">
                                        Please enter your Name.
                                    </div>
                                    <!-- </div> -->
                                </div>
                                <div class="col-md-4">
                                    <!-- <div class="input-group mb-4"> -->
                                    <label for="namal" class="form-label col-form-label fw-bold">Departement</label>
                                    <input readonly type="text" class="form-control" id="grub" name="grub" value="<?= $row_data['departeman'] ?>" placeholder="Otomatis Terisi" required>
                                    <div class="invalid-feedback">
                                        Please enter your Name.
                                    </div>
                                    <!-- </div> -->
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <label for="pekerjaan" class="form-label col-form-label fw-bold">Tanggal</label></label>
                                    <input type="date" class="form-control" id="tgl" name="tgl" value="<?= date('Y-m-d'); ?>" placeholder="Tanggal.." required>
                                    <div class="invalid-feedback">
                                        Please enter your Work.
                                    </div>
                                </div>


                                <div class="col-md-4 <?php if ($row_data['naktuald'] == 0) {
                                                            echo "d-none";
                                                        } ?> hari-normal">
                                    <label for="pekerjaan" class="form-label fw-bold">Hari Normal</label>
                                    <div class="input-group">
                                        <label for="pekerjaan" class="form-label col-form-label fw-bold col-3">Aktual</label>
                                        <input type="text" class="form-control" id="naktual" name="naktual" value="<?= $row_data['naktuald'] ?>" placeholder="..." required>
                                        <input readonly type="text" class="form-control" value="Jam" placeholder="..." required>
                                    </div>
                                    <!-- </div> -->
                                </div>
                                <div class="col-md-4 <?php if ($row_data['haktuald'] == 0) {
                                                            echo "d-none";
                                                        } ?> hari-holiday">
                                    <label for="pekerjaan" class="form-label fw-bold">Hari Holiday</label>
                                    <div class="input-group">
                                        <label for="pekerjaan" class="form-label col-form-label fw-bold col-3">Aktual</label>
                                        <input type="text" class="form-control" id="haktual" name="haktual" value="<?= $row_data['haktuald'] ?>" placeholder="..." required>
                                        <input readonly type="text" class="form-control" value="Jam" placeholder="..." required>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <button class="w-100 btn btn-danger btn-md text-uppercase fw-bold btn-datalembur" name="submit" type="submit">Simpan</button>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </section>
    </main>
<?php } ?>

<?php
if (isset($_POST['submit'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tgl = $_POST['tgl'];
    $naktual = $_POST['naktual'];
    $haktual = $_POST['haktual'];
    // $bulan = date('m');
    // $tahun = date('Y');
    // $idlap = $nik . $bulan . $tahun;
    $id = $_GET['id'];
    $row = mysqli_query($conn, "SELECT * from datalembur where iddl='$id'");
    $row_data = mysqli_fetch_array($row);

    $idlap = $_GET['idlem'];
    $rows = mysqli_query($conn, "SELECT * from user_laporan where idlap='$idlap'");
    $row_datas = mysqli_fetch_array($rows);
    $totnors = $row_datas['naktual'] - $row_data['naktuald'];
    $tothols = $row_datas['haktual'] - $row_data['haktuald'];

    $hasil_naktual = $totnors + $naktual;
    $hasil_haktual = $tothols + $haktual;
    mysqli_query($conn, "UPDATE user_laporan set naktual='$hasil_naktual',haktual='$hasil_haktual' where idlap='$idlap'");

    if ($naktual != 0) {
        mysqli_query($conn, "UPDATE datalembur set naktuald='$naktual' where iddl='$id'");
    } else if ($haktual != 0) {
        mysqli_query($conn, "UPDATE datalembur set haktuald='$haktual' where iddl='$id'");
    }



    // if ($haktual != 0) {
    //     $hasil_haktual = $haktual + $row_data['haktual'];
    //     mysqli_query($conn, "UPDATE user_laporan set haktual='$hasil_haktual',kupon='$harilembur',bulan='$bulan',tahun='$tahun' where id='$nik'");
    // }
    // usleep(500000);
    $msg = 'Data Lembur berhasil dibuat..';
    echo "<script type='text/javascript'>alert('$msg');</script>";
    echo "<script>window.location = '?mi=data_lembur'</script>";
}
?>

<script src="assets/js/jquery/jquery.min.js"></script>
<script>
    $('#bagi').on('change', function() {
        var selectedPackage = $('#bagi').val();
        if (selectedPackage == '2') {
            $(".bt-satu").addClass("d-none");
            $(".bt-dua").removeClass("d-none");
            $(".overtime").addClass("d-none");
        }
    })
    $('#bagi').on('change', function() {
        var selectedPackage = $('#bagi').val();
        if (selectedPackage == '1') {
            $(".bt-satu").removeClass("d-none");
            $(".bt-dua").addClass("d-none");
            $(".overtime").removeClass("d-none");
        }
    })
    $('#flexRadioDefault1').on('change', function() {
        var selectedPackage = $('#flexRadioDefault1').is(':checked');
        if ($('#flexRadioDefault1').is(':checked')) {
            $(".hari-normal").removeClass("d-none");
            $(".hari-holiday").addClass("d-none");
            $("#haktual").val(0);
        }
    })
    $('#flexRadioDefault2').on('change', function() {
        var selectedPackage = $('#flexRadioDefault2').is(':checked');
        if ($('#flexRadioDefault2').is(':checked')) {
            $(".hari-normal").addClass("d-none");
            $(".hari-holiday").removeClass("d-none");
            $("#naktual").val(0);
            // $(".bt-dua").addClass("d-none");
            // $(".overtime").addClass("d-none");
            // $("#asal").val("");
        }
    })
</script>