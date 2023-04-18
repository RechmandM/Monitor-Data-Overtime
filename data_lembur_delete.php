<?php
$id = $_GET['id'];
$row = mysqli_query($conn, "SELECT * from datalembur where iddl='$id'");
$row_data = mysqli_fetch_array($row);

$idlap = $_GET['idlem'];
$rows = mysqli_query($conn, "SELECT * from user_laporan where idlap='$idlap'");
$row_datas = mysqli_fetch_array($rows);
$totnors = $row_datas['naktual'] - $row_data['naktuald'];
$tothols = $row_datas['haktual'] - $row_data['haktuald'];
$kupon = $row_datas['kupon'];
if ($row_data['haktuald'] != 0) {
    $kupon -= 1;
    mysqli_query($conn, "UPDATE datalembur set naktuald='$naktual' where iddl='$id'");
}

mysqli_query($conn, "UPDATE user_laporan set naktual='$totnors',haktual='$tothols',kupon='$kupon' where idlap='$idlap'");
usleep(200000);
mysqli_query($conn, "DELETE from datalembur where iddl='$id'");
header("location:?mi=data_lembur");
