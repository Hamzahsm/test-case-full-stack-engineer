<?php require_once "controllerUserData-superadmin.php"; ?>

<?php
$con = mysqli_connect("localhost","u705028021_loginsystem","Loginsystem321","u705028021_loginsystem");
// Mengambil id
$id = $_GET['id'];
// Melakukan perintah query delete berdasarkan id dalam tabel gambar
$result = mysqli_query($con, "DELETE FROM reseller WHERE id=$id");

if ($result) {
    echo "<script>alert('Data Telah Dihapus Dari Database');
            document.location.href = 'data-register-reseller.php'; </script>";    
} else {
    echo "<script>alert('Gagal Menghapus Data');</script>";    
}
//  Kembali kehalaman index.php
// header("location: dashboard-database-register-klien.php");
?>    