<?php
$level = $_SESSION['lv'];
$nik = $_SESSION['id'];

if ($level == 3) {
    include "./dashboard2.php";
    return;
} else {
?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="height: 470px;">
        <section id="data" class="py-3">
            <div class="p-3 mb-3 text-center" style="background-color: rgba(0, 0, 0, 0.2);">
                <h2 class="list-inline-item text-primary fw-bold text-uppercase">Ubah Password</h2>
            </div>
            <div class="text-center">
            </div>
            <div class="row">
                <div class="col">
                    <?php
                    $id = $_GET['id'];
                    $data = mysqli_query($conn, "SELECT * from user where id='$nik'");
                    while ($row_data = mysqli_fetch_array($data)) {
                    ?>
                        <form method="POST" class="needs-validation" novalidate style="font-size: larger;">

                            <div class="row">
                                <div class="col-md-4">
                                    <label for="pekerjaan" class="form-label col-form-label fw-bold">NIK</label>
                                    <input readonly type="text" class="form-control" id="nik" name="nik" value="<?= $row_data['id']; ?>" placeholder="NIK..." required>
                                    <div class="invalid-feedback">
                                        Please enter your Work.
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <label for="pekerjaan" class="form-label col-form-label fw-bold">Status</label>
                                    <input readonly type="text" class="form-control" value="<?php if ($row_data['lv'] == 1) {
                                                                                                echo "Karyawan";
                                                                                            } else if ($row_data['lv'] == 2) {
                                                                                                echo "Ketua Grup";
                                                                                            } else {
                                                                                                echo "Administrator";
                                                                                            }  ?>">
                                    
                                </div> 
                                <div class="col-md-4">
                                    <label for="pekerjaan" class="form-label col-form-label fw-bold">Password</label>
                                    <input type="text" class="form-control" id="pass" name="pass" value="" placeholder="Tulis Password Baru..." required>
                                    <div class="invalid-feedback">
                                        Please enter your Work.
                                    </div>
                                </div>
                                
                            </div>
                            <hr class="my-4">
                            <button class="w-100 btn btn-danger btn-md text-uppercase fw-bold bt-satu" name="submit" type="submit">Simpan</button>
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
    $password = $_POST['pass'];
    $bagi = $_POST['bagi'];
    $naktual = $_POST['naktual'];
    $nmatang = $naktual * 3;
    $haktual = $_POST['haktual'];
    $hmatang = $haktual * 2;
    $kupon = $_POST['kupon'];
    mysqli_query($conn, "UPDATE user set pw='$password' where id='$nik'");
    usleep(500000);
    $msg = 'Password berhasil di ubah..';
        echo "<script type='text/javascript'>alert('$msg');</script>";
    echo "<script>window.location = '?mi=ubah_password'</script>";
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
    $naktual = "-";
    $nmatang = "-";
    $haktual = "-";
    $hmatang = "-";
    $kupon = "-";
    mysqli_query($conn, "UPDATE user set nama='$nama',alamat='$alamat',nom='$nomor',plant='$plant',bagian='$bagian',grub='$group',pw='$password',lv='$bagi',naktual='$naktual',nmatang='$nmatang',haktual='$haktual',hmatang='$hmatang',kupon='$kupon' where id='$id'");
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