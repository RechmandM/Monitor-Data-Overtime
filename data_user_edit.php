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
                    $data = mysqli_query($conn, "SELECT * from user where id='$id'");
                    while ($row_data = mysqli_fetch_array($data)) {
                    ?>
                        <form method="POST" class="needs-validation" novalidate style="font-size: larger;">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="namal" class="form-label col-form-label fw-bold">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $row_data['nama']; ?>" placeholder="Nama Lengkap.." required>
                                    <div class="invalid-feedback">
                                        Please enter your Name.
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="alamat" class="form-label col-form-label fw-bold">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $row_data['alamat']; ?>" placeholder="Alamat.." required>
                                    <div class="invalid-feedback">
                                        Please enter your address.
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="pekerjaan" class="form-label col-form-label fw-bold">Nomer Telepon</label>
                                    <input type="number" class="form-control" id="nomor" name="nomor" value="<?= $row_data['nom']; ?>" placeholder="Nomor Telepon" required>
                                    <div class="invalid-feedback">
                                        Please enter your Work.
                                    </div>
                                </div>
                            </div>

                            <div <?php if ($row_data['lv'] == 3) {
                                        echo "hidden";
                                    } ?> class="row">
                                <div class="col-md-4">
                                    <label for="pekerjaan" class="form-label col-form-label fw-bold">Plant</label>
                                    <input readonly type="text" class="form-control" id="plant" name="plant" value="<?= $row_data['plant']; ?>" placeholder="Plant..." required>
                                    <div class="invalid-feedback">
                                        Please enter your Work.
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="pekerjaan" class="form-label col-form-label fw-bold">Departement</label>
                                    <!-- <input readonly type="text" class="form-control" id="bagian" name="bagian" value="<?= $row_data['departeman']; ?>" placeholder="Departement..." required> -->
                                    <select class="form-control" name="bagian" id="bagian">
                                        <option hidden value="0">--Pilih Bagian--</option>
                                        <option <?php if ($row_data['departeman'] == "TB") {
                                                    echo "selected";
                                                } ?> value="TB">TB</option>
                                        <option <?php if ($row_data['departeman'] == "TE") {
                                                    echo "selected";
                                                } ?> value="TE">TE</option>
                                        <option <?php if ($row_data['departeman'] == "TC") {
                                                    echo "selected";
                                                } ?> value="TC">TC</option>
                                        <option <?php if ($row_data['departeman'] == "FI") {
                                                    echo "selected";
                                                } ?> value="FI">FI</option>
                                        <option <?php if ($row_data['departeman'] == "-") {
                                                    echo "selected";
                                                } ?> hidden value="-">-</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please enter your Work.
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="pekerjaan" class="form-label col-form-label fw-bold">Group</label>
                                    <select <?php if ($row_data['lv'] == 3) {
                                                echo "disabled";
                                            } ?> class="form-control" name="grub" id="grub">
                                        <option hidden value="0">--Pilih Group--</option>
                                        <option <?php if ($row_data['grub'] == "4A") {
                                                    echo "selected";
                                                } ?> value="4A">A</option>
                                        <option <?php if ($row_data['grub'] == "4B") {
                                                    echo "selected";
                                                } ?> value="4B">B</option>
                                        <option <?php if ($row_data['grub'] == "4C") {
                                                    echo "selected";
                                                } ?> value="4C">C</option>
                                        <option <?php if ($row_data['grub'] == "4D") {
                                                    echo "selected";
                                                } ?> value="4D">D</option>
                                        <option <?php if ($row_data['grub'] == "-") {
                                                    echo "selected";
                                                } ?> hidden value="-">-</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please enter your Work.
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <label for="pekerjaan" class="form-label col-form-label fw-bold">NIK</label>
                                    <input readonly type="text" class="form-control" id="nik" name="nik" value="<?= $row_data['id']; ?>" placeholder="NIK..." required>
                                    <div class="invalid-feedback">
                                        Please enter your Work.
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="pekerjaan" class="form-label col-form-label fw-bold">Password</label>
                                    <input type="text" class="form-control" id="pass" name="pass" value="<?= $row_data['pw']; ?>" placeholder="Password..." required>
                                    <div class="invalid-feedback">
                                        Please enter your Work.
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="pekerjaan" class="form-label col-form-label fw-bold">Jabatan</label>
                                    <select hidden class="form-control disabled" name="bagi" id="bagi">
                                        <option hidden value="0">==Pilih Bagian==</option>
                                        <option <?php if ($row_data['lv'] == 3) {
                                                    echo "hidden";
                                                } ?> <?php if ($row_data['lv'] == 2) {
                                                            echo "selected";
                                                        } ?> value="2">HRD</option>
                                        <option <?php if ($row_data['lv'] == 3) {
                                                    echo "hidden ";
                                                } ?> <?php if ($row_data['lv'] == 1) {
                                                            echo "selected";
                                                        } ?> value="1">Karyawan</option>
                                        <option <?php if ($row_data['lv'] != 3) {
                                                    echo "hidden";
                                                } ?> <?php if ($row_data['lv'] == 3) {
                                                            echo "selected";
                                                        } ?> value="3">Administrator</option>
                                    </select>
                                    <input readonly type="text" class="form-control" value="<?php if ($row_data['lv'] == 1) {
                                                                                                echo "Karyawan";
                                                                                            } else if ($row_data['lv'] == 2) {
                                                                                                echo "HRD";
                                                                                            } else {
                                                                                                echo "Administrator";
                                                                                            }  ?>">
                                    <div class="invalid-feedback">
                                        Please enter your Work.
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="pekerjaan" class="form-label col-form-label fw-bold">Alamat Email</label>
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $row_data['email'] ?>" placeholder="Alamat email anda.." required>
                                        <div class="invalid-feedback">
                                            Please enter your Work.
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="pekerjaan" class="form-label col-form-label fw-bold">Tanggal Masuk</label>
                                        <input type="text" readonly class="form-control" id="masuk" name="masuk" value="<?= $row_data['tglmasuk'] ?>" placeholder="Tanggal Masuk..." required>
                                        <div class="invalid-feedback">
                                            Please enter your Work.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4">
                            <button class="w-100 btn btn-danger btn-md text-uppercase fw-bold bt-satu <?php if ($row_data['lv'] != 1) {
                                                                                                            echo "d-none";
                                                                                                        } ?>" name="submit" type="submit">Simpan</button>
                            <button class="w-100 btn btn-danger btn-md text-uppercase fw-bold bt-dua <?php if ($row_data['lv'] != 2 && $row_data['lv'] != 3) {
                                                                                                            echo "d-none";
                                                                                                        } ?>" name="submit2" type="submit2">Simpan</button>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </section>
    </main>
<?php } ?>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nomor = $_POST['nomor'];
    $plant = $_POST['plant'];
    $bagian = $_POST['bagian'];
    $group = $_POST['grub'];
    $nik = $_POST['nik'];
    $password = $_POST['pass'];
    $bagi = $_POST['bagi'];
    $email = $_POST['email'];
    mysqli_query($conn, "UPDATE user set nama='$nama',departeman='$bagian',nama='$nama',alamat='$alamat',nom='$nomor',email='$email',grub='$group',pw='$password' where id='$id'");
    mysqli_query($conn, "UPDATE dataabsen set nama='$nama',grub='$group' where nik='$id'");
    mysqli_query($conn, "UPDATE user_laporan set nama='$nama',departement='$bagian',grub='$group' where id='$id'");
    usleep(500000);
    echo "<script>window.location = '?mi=data_user'</script>";
}
if (isset($_POST['submit2'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nomor = $_POST['nomor'];
    $plant = $_POST['plant'];
    $bagian = $_POST['bagian'];
    $group = $_POST['grub'];
    $password = $_POST['pass'];
    $bagi = $_POST['bagi'];
    $email = $_POST['email'];
    $naktual = "-";
    $nmatang = "-";
    $haktual = "-";
    $hmatang = "-";
    $kupon = "-";
    mysqli_query($conn, "UPDATE user set nama='$nama',alamat='$alamat',nom='$nomor',email='$email',grub='$group',pw='$password' where id='$id'");
    usleep(500000);
    echo "<script>window.location = '?mi=data_user'</script>";
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
</script>