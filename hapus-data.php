<?php require_once "controllerUserData.php"; ?>

<?php
$con = mysqli_connect("localhost","root","","majoo");
// Mengambil id
$id = $_GET['id'];
// Melakukan perintah query delete berdasarkan id dalam tabel gambar
$result = mysqli_query($con, "DELETE FROM admin WHERE id=$id");

if ($result) {
    echo "<script>alert('Data Telah Dihapus');
            document.location.href = './halaman-admin.php'; </script>";    
} else {
    echo "<script>alert('Oops, Data gagal di hapus');
            document.location.href = './halaman-admin.php';</script>";    
}
?>    