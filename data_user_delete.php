<?php
$id = $_GET['id'];
mysqli_query($conn, "DELETE from user where id='$id'");
mysqli_query($conn, "DELETE from dataabsen where nik='$id'");
mysqli_query($conn, "DELETE from user_laporan where id='$id'");
mysqli_query($conn, "DELETE from datalembur where nik='$id'");
header("location:?mi=data_user");
