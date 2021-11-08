
<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "majoo");

if (isset($_POST['submit'])) {
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


    $query = "INSERT INTO admin (namaproduk, deskripsi, harga, kategori, upload) VALUES ('$nama', '$deskripsi','$harga','$kategori', '$uploadgambar')"; 
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        echo "<script> alert('Data berhasil di tambah');
        document.location.href = './halaman-admin.php';</script>";
        // $_SESSION['status'] = "Inserted Successfully";
        // header("Location: ./halaman-admin.php");
    } else {
        echo "<script> alert('Oops, Gagal menambahkan data');
        document.location.href = './halaman-admin.php';</script>";
        // $_SESSION['status'] = "Inserted Failed";
        // header("Location: ./halaman-admin.php");
    }
}
?> 