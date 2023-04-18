<?php
error_reporting(0);
include_once './config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nik = $_POST['nik'];
    $password = $_POST['passw'];
    // $result = mysqli_query($conn, "SELECT * from user where id = '$nik' and pw = '$password'");
    $result = "SELECT * from user where id = :username and pw = :pass";
    $hasil = $conn->prepare($result);
    $hasil->bind_param("username", $nik);
    $hasil->bind_param("pass", $password);
    $hasil->execute();
    // $hasil->execute([$nik, $password]);

    // $user_data = mysqli_fetch_array($result);
    $user_data = $hasil->fetch();
    $no_rows = $hasil->num_rows();
    // $conet = quote("etete");
    // pg_fetch_all()
    if ($no_rows == 1) {
        $_SESSION['login'] = true;
        $_SESSION['id'] = $user_data['id'];
        $_SESSION['lv'] = $user_data['lv'];
        $_SESSION['grub'] = $user_data['grub'];
        echo "<script>location='./'</script>";
    } else {
        $msg = 'NIK/Password Salah...';
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>PT. Gajah Tunggal</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <link href="/sign-in/signin.css" rel="stylesheet">
</head>

<body class="" style="background-image: url('assets/img/img.jpg'); background-repeat: no-repeat; background-size:cover;">
    <main class="form-signin py-5">
        <div class="row container py-5">
            <div class="col">
                <form action="" method="POST" class="offset-5 col-4">
                    <div class="card p-4 border-2 shadow shadow-lg"><img src="assets/img/logo.png" alt="gambr kosong">
                        <h1 class="h5 mb-3 fw-bold text-capitalize text-center">Silahkan Masuk</h1>
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control bg-transparent" id="nik" name="nik" placeholder="name@example.com">
                            <label id="lab" for="floatingInput">NIK</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control bg-transparent" id="password" name="passw" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>

                        <div class="checkbox mb-3 text-start d-none">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary mb-3" type="submit">LOGIN</button>
                        <p class="mb-3 fw-bold text-center text-muted">Jika Lupa Password Hubungi Admin</p>
                    </div>
                </form>
            </div>
        </div>
    </main>



</body>

</html>