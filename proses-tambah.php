
<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "majoo");

if (isset($_POST['tambah_produk'])) {
    $nama = $_POST['namaproduk'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $kategori = $_POST['kategori'];

    //start uploading gambar
    $uploadgambar = array_filter($_FILES['uploadgambar']['name']);
    $total_count = count($_FILES['uploadgambar']['name']);
    for ($i = 0; $i < $total_count; $i++) {
        if ($tmpFilePath != "") {
            $dirusers = "uploads/" . $nama;
            mkdir($dirusers);
            $newFilePath = "$dirusers/" . $_FILES['uploadgambar']['name'][$i];
            if (move_uploaded_file($tmpFilePath, $newFilePath)) {
            }
        }
    }


    $query = "INSERT INTO formads (nama, deskripsi, harga, kategori, upload) VALUES ('$nama', '$deskripsi','$harga','$kategori', '$uploadgambar')";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: konfirmasi-brief-ads.php");
    } else {
        $_SESSION['status'] = "Inserted Failed";
        header("Location: brief-ads.php");
    }
}
?> 