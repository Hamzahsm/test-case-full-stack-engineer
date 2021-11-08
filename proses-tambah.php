
<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "majoo");

if (isset($_POST['submit'])) {
    $nama = $_POST['namaproduk'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $kategori = $_POST['kategori'];

    //start uploading gambar
    // $uploadgambar = array_filter($_FILES['uploadgambar']['name']);
    // $total_count = count($_FILES['uploadgambar']['name']);
    // for ($i = 0; $i < $total_count; $i++) {
    //     if ($tmpFilePath != "") {
    //         $dirusers = "uploads/" . $nama;
    //         mkdir($dirusers);
    //         $newFilePath = "$dirusers/" . $_FILES['uploadgambar']['name'][$i];
    //         if (move_uploaded_file($tmpFilePath, $newFilePath)) {
    //         }
    //     } 

    $ekstensi_diperbolehkan    = array('jpg', 'jpeg', 'png');
    $namagambar    = $_FILES['gambar']['name'];
    $x        = explode('.', $nama);
    $ekstensi    = strtolower(end($x));
    $ukuran        = $_FILES['gambar']['size'];
    $file_tmp    = $_FILES['gambar']['tmp_name']; 
 
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 1044070){ 
            move_uploaded_file($file_tmp, 'uploads/'.$namagambar);
        }
        else{
            echo 'UKURAN FILE TERLALU BESAR!';
        }
    }
    else{
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN!';
    }
}

 

    $query = "INSERT INTO admin (namaproduk, deskripsi, harga, kategori, upload) VALUES ('$nama', '$deskripsi','$harga','$kategori', '$namagambar')"; 
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
?> 