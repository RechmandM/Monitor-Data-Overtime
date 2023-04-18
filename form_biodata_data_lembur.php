<main class="col">
    <div class="text-center">
        <!-- <img style="margin-top: -70px; margin-bottom: -40px;" class="mx-auto" src="https://i.pinimg.com/736x/ce/56/99/ce5699233cbc0f142250b520d967dff7.jpg" alt="logo" width="300"> -->
        <!-- <h2 class="text-uppercase">New Produk</h2> -->
    </div>
    <div class="row">
        <div class="col">
            <form method="POST" class="needs-validation" novalidate style="font-size: larger;">
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="pekerjaan" class="form-label col-form-label fw-bold">NIK Karyawan</label>
                        <!-- <input readonly type="text" class="form-control" id="nik" name="nik" value="<?= date("ymd") . date("His"); ?>" placeholder="Otomatis Terisi.." required> -->
                        <select class="form-control" name="nik" id="nik">
                            <option hidden value="0">-- Pilih Nik Karyawan --</option>
                            <?php
                            $tglskr = date('d');
                            $bulan = date('m');
                            $tahun = date('Y');
                            $row = mysqli_query($conn, "SELECT * from user u where lv=1 order by lv DESC");
                            foreach ($row as $row_array) {
                            ?>
                                <option <?php
                                        $nik = $row_array['id'];
                                        $rowku = mysqli_query($conn, "SELECT * from dataabsenbulanan where username='$nik' and bulan='$bulan' and tahun='$tahun'");
                                        $rowkus = mysqli_fetch_array($rowku);
                                        if ($rowkus['tg' . $tglskr] == 0 && $rowkus['tg' . $tglskr] != null) {
                                            echo "disabled";
                                        }
                                        ?> value="<?= $row_array['id'] ?>"><?= $row_array['id'] . " (" . $row_array['nama'] . ")";
                                                                            if ($rowkus['tg' . $tglskr] == 0 && $rowkus['tg' . $tglskr] != null ) {
                                                                                echo " TIDAK MASUK";
                                                                            }  ?></option>
                            <?php } ?>
                        </select>
                        <div class="invalid-feedback">
                            Please enter your Work.
                        </div>
                        <!-- </div> -->
                    </div>
                    <div class="col-md-4">
                        <!-- <div class="input-group mb-4"> -->
                        <label for="namal" class="form-label col-form-label fw-bold">Group</label>
                        <input readonly type="text" class="form-control" id="grub" name="nama" value="" placeholder="Otomatis Terisi" required>
                        <div class="invalid-feedback">
                            Please enter your Name.
                        </div>
                        <!-- </div> -->
                    </div>
                    <div class="col-md-4">
                        <!-- <div class="input-group mb-4"> -->
                        <label for="namal" class="form-label col-form-label fw-bold">Departement</label>
                        <input readonly type="text" class="form-control" id="departement" name="departement" value="" placeholder="Otomatis Terisi" required>
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
                    <div class="col-md-4 form-label col-form-label fw-bold">
                        <div class="form-label">
                            <input <?php
                                        // $nik = $row_array['id'];
                                        $rowku = mysqli_query($conn, "SELECT * from dataabsenbulanan where bulan='$bulan' and tahun='$tahun'");
                                        $rowkus = mysqli_fetch_array($rowku);
                                        if ($rowkus['tg' . $tglskr] == null ) {
                                            echo "disabled";
                                        }
                                        ?> class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Hari Normal <?php
                                        // $nik = $row_array['id'];
                                        $rowku = mysqli_query($conn, "SELECT * from dataabsenbulanan where bulan='$bulan' and tahun='$tahun'");
                                        $rowkus = mysqli_fetch_array($rowku);
                                        if ($rowkus['tg' . $tglskr] == null ) {
                                            echo "Silahkan Absensi Dahulu";
                                        }
                                        ?>
                            </label>
                        </div>
                        <div>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Hari Holiday
                            </label>
                        </div>

                        <!-- </div> -->
                    </div>
                    <div class="col-md-4 d-none hari-normal">
                        <label for="pekerjaan" class="form-label fw-bold">Hari Normal</label>
                        <div class="input-group">
                            <label for="pekerjaan" class="form-label col-form-label fw-bold col-3">Aktual</label>
                            <input type="text" class="form-control" id="naktual" name="naktual" value="0" placeholder="..." required>
                            <input readonly type="text" class="form-control" value="Jam" placeholder="..." required>
                        </div>
                        <!-- </div> -->
                    </div>
                    <div class="col-md-4 d-none hari-holiday">
                        <label for="pekerjaan" class="form-label fw-bold">Hari Holiday</label>
                        <div class="input-group">
                            <label for="pekerjaan" class="form-label col-form-label fw-bold col-3">Aktual</label>
                            <input type="text" class="form-control" id="haktual" name="haktual" value="0" placeholder="..." required>
                            <input readonly type="text" class="form-control" value="Jam" placeholder="..." required>
                        </div>
                    </div>
                    <hr class="my-4">
                    <button class="w-100 btn btn-danger btn-md text-uppercase fw-bold btn-datalembur d-none" name="submit" type="submit">Simpan</button>
            </form>
        </div>
    </div>
</main>

<?php


if (isset($_POST['submit'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tgl = $_POST['tgl'];
    $naktual = $_POST['naktual'];
    $haktual = $_POST['haktual'];
    $bulan = date('m');
    $tahun = date('Y');
    $idlap = $nik . $bulan . $tahun;
    $row = mysqli_query($conn, "SELECT * from user_laporan where idlap='$idlap'");
    $row_data = mysqli_fetch_array($row);
    $hasil_naktual = $naktual + $row_data['naktual'];
    $harilembur = $row_data['kupon'] + 1;
    $idlem = $nik . substr($tgl, 5, 2) . substr($tgl, 0, 4);

    mysqli_query($conn, "INSERT into datalembur (idlem,nik,nama,tgl,naktuald,haktuald)
    values('$idlem','$nik','$nama','$tgl','$naktual','$haktual')");

    $bulan = date('m');
    // if ($bulan == '01') {
    //     $bulann = "Januari";
    // } else if ($bulan == '02') {
    //     $bulann = "Februari";
    // } else if ($bulan == '03') {
    //     $bulann = "Maret";
    // } else if ($bulan == '04') {
    //     $bulann = "April";
    // } else if ($bulan == '05') {
    //     $bulann = "Mei";
    // } else if ($bulan == '06') {
    //     $bulann = "Juni";
    // } else if ($bulan == '07') {
    //     $bulann = "Juli";
    // } else if ($bulan == '08') {
    //     $bulann = "Agustus";
    // } else if ($bulan == '09') {
    //     $bulann = "September";
    // } else if ($bulan == '10') {
    //     $bulann = "Oktober";
    // } else if ($bulan == '11') {
    //     $bulann = "November";
    // } else if ($bulan == '12') {
    //     $bulann = "Desember";
    // }
    $tahun = date('Y');
    $tanggalskr = date('d');
    $idlap = $nik . $bulan . $tahun;
    mysqli_query($conn, "UPDATE user_laporan set naktual='$hasil_naktual',bulan='$bulan',tahun='$tahun' where idlap='$idlap'");
    if ($haktual != 0) {
        $hasil_haktual = $haktual + $row_data['haktual'];
        mysqli_query($conn, "UPDATE user_laporan set haktual='$hasil_haktual',kupon='$harilembur',bulan='$bulan',tahun='$tahun' where idlap='$idlap'");
        mysqli_query($conn, "UPDATE dataabsenbulanan set tg$tanggalskr=1 where username='$nik' and bulan='$bulan' and tahun='$tahun'");
    }
    // usleep(500000);
    $msg = 'Data Lembur berhasil dibuat..';
    echo "<script type='text/javascript'>alert('$msg');</script>";
    echo "<script>window.location = '?mi=data_lembur'</script>";
}
?>

<script src="assets/js/jquery/jquery.min.js"></script>
<script>
    $('#nik').on('change', function() {
        var selectedPackage = $('#nik').val();
        if (selectedPackage != '0') {
            $(".btn-datalembur").removeClass("d-none");
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
    <?php
    $row = mysqli_query($conn, "SELECT * from user u where lv=1 order by lv DESC");
    foreach ($row as $row_array) {
    ?>
        $('#nik').on('change', function() {
            var selectedPackage = $('#nik').val();
            if (selectedPackage == <?= $row_array['id'] ?>) {

                $("#nama").val("<?= $row_array['nama'] ?>");
                $("#grub").val("<?php if ($row_array['grub'] == "4A") {
                                    echo "A";
                                } else if ($row_array['grub'] == "4B") {
                                    echo "B";
                                } else if ($row_array['grub'] == "4C") {
                                    echo "C";
                                } else {
                                    echo "D";
                                } ?>");
                $("#departement").val("<?= $row_array['departeman'] ?>");
            }
        })
    <?php } ?>
</script>