<main class="col">
    <div class="text-center">
    </div>
    <div class="row">
        <div class="col">
            <form method="POST" class="needs-validation" novalidate style="font-size: larger;">
                <div class="row">
                    <div class="col-md-4">
                        <label for="namal" class="form-label col-form-label fw-bold">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="" placeholder="Nama Lengkap.." required>
                        <div class="invalid-feedback">
                            Please enter your Name.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="alamat" class="form-label col-form-label fw-bold">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="" placeholder="Alamat.." required>
                        <div class="invalid-feedback">
                            Please enter your address.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="pekerjaan" class="form-label col-form-label fw-bold">Nomer Telepon</label>
                        <input type="number" class="form-control" id="nomor" name="nomor" value="" placeholder="Nomor Telepon" required>
                        <div class="invalid-feedback">
                            Please enter your Work.
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label for="pekerjaan" class="form-label col-form-label fw-bold">Plant</label>
                        <input readonly type="text" class="form-control" id="plant" name="plant" value="A" placeholder="Plant..." required>
                        <div class="invalid-feedback">
                            Please enter your Work.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="pekerjaan" class="form-label col-form-label fw-bold">Bagian</label>
                        <!-- <input readonly type="text" class="form-control" id="bagian" name="bagian" value="ATB" placeholder="Bagian..." required> -->
                        <select class="form-control" name="bagian" id="bagian">
                            <option hidden value="0">--Pilih Bagian--</option>
                            <option value="TB">TB</option>
                            <option value="TE">TE</option>
                            <option value="TC">TC</option>
                            <option value="FI">FI</option>
                            <option hidden value="-">-</option>
                        </select>
                        <div class="invalid-feedback">
                            Please enter your Work.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="pekerjaan" class="form-label col-form-label fw-bold">Group</label>
                        <select class="form-control" name="grub" id="grub">
                            <option hidden value="0">--Pilih Group--</option>
                            <option value="4A">A</option>
                            <option value="4B">B</option>
                            <option value="4C">C</option>
                            <option value="4D">D</option>
                            <option hidden value="-">-</option>
                        </select>
                        <div class="invalid-feedback">
                            Please enter your Work.
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label for="pekerjaan" class="form-label col-form-label fw-bold">NIK (Otomatis Terbuat)</label>
                        <input readonly type="text" class="form-control" id="nik" name="nik" value="<?= date("ymd") . date("His"); ?>" placeholder="Otomatis Terisi.." required>
                        <div class="invalid-feedback">
                            Please enter your Work.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="pekerjaan" class="form-label col-form-label fw-bold">Password</label>
                        <input type="text" class="form-control" id="pass" name="pass" value="" placeholder="Password..." required>
                        <div class="invalid-feedback">
                            Please enter your Work.
                        </div>
                    </div>
                    <div class="col-md-4 d-none" id="cekbagian">
                        <label for="pekerjaan" class="form-label col-form-label fw-bold">Jabatan</label>
                        <select class="form-control" name="bagi" id="bagi">
                            <option hidden value="0">--Pilih Bagian--</option>
                            <option value="2">HRD</option>
                            <option value="1">Karyawan</option>
                        </select>
                        <div class="invalid-feedback">
                            Please enter your Work.
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label for="pekerjaan" class="form-label col-form-label fw-bold">Alamat Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="" placeholder="Alamat email anda.." required>
                        <div class="invalid-feedback">
                            Please enter your Work.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="pekerjaan" class="form-label col-form-label fw-bold">Tanggal Masuk</label>
                        <input type="date" class="form-control" id="masuk" name="masuk" value="<?= date('Y-m-d'); ?>" placeholder="Tanggal Masuk..." required>
                        <div class="invalid-feedback">
                            Please enter your Work.
                        </div>
                    </div>
                </div>

                <div class="mt-5 row d-none overtime">
                    <h4 class="text-center">Overtime</h4>
                    <div class="col-4">
                        <h5>Hari Normal</h5>
                        <div class="input-group">
                            <label for="pekerjaan" class="form-label col-form-label fw-bold col-3">Aktual</label>
                            <input type="text" class="form-control" id="naktual" name="naktual" value="" placeholder="..." required>
                            <input readonly type="text" class="form-control" value="Jam" placeholder="..." required>
                        </div>
                    </div>

                    <div class="col-4">
                        <h5>Hari Holiday</h5>
                        <div class="input-group">
                            <label for="pekerjaan" class="form-label col-form-label fw-bold col-3">Aktual</label>
                            <input type="text" class="form-control" id="haktual" name="haktual" value="" placeholder="..." required>
                            <input readonly type="text" class="form-control" value="Jam" placeholder="..." required>
                        </div>
                    </div>
                    <div class="col-4">
                        <h5>Jumlah Kupon Harian</h5>
                        <div class="input-group">
                            <label for="pekerjaan" class="form-label col-form-label fw-bold col-3">Kupon</label>
                            <input type="text" class="form-control" id="kupon" name="kupon" value="" placeholder="..." required>
                            <input readonly type="text" class="form-control" value="Hari" placeholder="..." required>
                            <div class="invalid-feedback">
                                Please enter your Work.
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-4">
                <button class="w-100 btn btn-danger btn-md text-uppercase fw-bold bt-satu d-none" name="submit2" type="submit2">Simpan</button>
                <button class="w-100 btn btn-danger btn-md text-uppercase fw-bold bt-dua d-none" name="submit" type="submit">Simpan</button>
            </form>
        </div>
    </div>
</main>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nomor = $_POST['nomor'];
    $email = $_POST['email'];
    $masuk = $_POST['masuk'];
    $plant = $_POST['plant'];
    $bagian = $_POST['bagian'];
    $group = $_POST['grub'];
    $nik = $_POST['nik'];
    $password = $_POST['pass'];
    $bagi = $_POST['bagi'];
    $kupon = $_POST['kupon'];
    $absensi = 0;
    $bulan = date('m');
    $tahun = date('Y');
    $idlap = $nik . $bulan . $tahun;
    mysqli_query($conn, "INSERT into user (nama,alamat,nom,email,tglmasuk,plant,departeman,grub,id,pw,lv,kupon) 
    values('$nama','$alamat','$nomor','$email','$masuk','$plant','$bagian','$group','$nik','$password','$bagi','$kupon')");
    mysqli_query($conn, "INSERT into dataabsen (nik,nama,grub,absensi)
    values('$nik','$nama','$group','$absensi')");
    mysqli_query($conn, "INSERT into user_laporan (idlap,id,lv,nama,plant,departement,grub,naktual,nmatang,haktual,hmatang,kupon,bulan,tahun)
    values('$idlap','$nik','$bagi','$nama','$plant','$bagian','$group','$naktual','$nmatang','$haktual','$hmatang','$kupon','$bulan','$tahun')");
    // mysqli_query($conn, "INSERT into user_laporan (id,lv)
    // values('$nik','$bagi')");
    usleep(500000);
    $msg = 'Data Pegawai berhasil ditambahkan..';
    echo "<script type='text/javascript'>alert('$msg');</script>";
    echo "<script>window.location = '?mi=data_karyawan'</script>";
}

if (isset($_POST['submit2'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nomor = $_POST['nomor'];
    $email = $_POST['email'];
    $masuk = $_POST['masuk'];
    $plant = $_POST['plant'];
    $bagian = $_POST['bagian'];
    // $group = $_POST['grub'];
    $group = "-";
    $nik = $_POST['nik'];
    $password = $_POST['pass'];
    $bagi = $_POST['bagi'];
    $kupon = $_POST['kupon'];
    $naktual = "-";
    $nmatang = "-";
    $haktual = "-";
    $hmatang = "-";
    $kupon = "-";
    mysqli_query($conn, "INSERT into user (nama,alamat,nom,email,tglmasuk,plant,departeman,grub,id,pw,lv,naktual,nmatang,haktual,hmatang,kupon) 
    values('$nama','$alamat','$nomor','$email','$masuk','$plant','$bagian','$group','$nik','$password','$bagi','$naktual','$nmatang','$haktual','$hmatang','$kupon')");

    usleep(500000);
    $msg = 'Data Pegawai berhasil ditambahkan..';
    echo "<script type='text/javascript'>alert('$msg');</script>";
    echo "<script>window.location = '?mi=data_karyawan'</script>";
}
?>

<script src="assets/js/jquery/jquery.min.js"></script>
<script>
    $('#bagi').on('change', function() {
        var selectedPackage = $('#bagi').val();
        if (selectedPackage == '2') {
            $(".bt-satu").removeClass("d-none");
            $(".bt-dua").addClass("d-none");
            $("#grub").val("-");
            $("#bagian").val("-");
        }
    })
    $('#bagi').on('change', function() {
        var selectedPackage = $('#bagi').val();
        if (selectedPackage == '1') {
            $(".bt-satu").addClass("d-none");
            $(".bt-dua").removeClass("d-none");
            $("#grub").val("4A");
        }
    })
    $('#grub').on('change', function() {
        var selectedPackage = $('#grub').val();
        if (selectedPackage != '0') {
            $("#cekbagian").removeClass("d-none");
        }
    })
</script>