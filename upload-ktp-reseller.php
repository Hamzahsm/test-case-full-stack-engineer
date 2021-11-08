<?php 
// $id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload KTP Reseller</title>
</head>
<body>
    <form action="upload-ktp.php" method="post" enctype="multipart/form-data" style="margin-bottom: 30px;">
        Pilih Gambar Untuk di Upload:
        <input type="file" name="file">
        <input type="submit" name="submit" value="Upload">
    </form>

    <?php 
// Include the database configuration file
include 'connection-ktp.php';

// Get images from the database
$query = $db->query("SELECT * FROM images ORDER BY uploaded_on DESC LIMIT 1 ");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'lampiran-ktp/'.$row["file_name"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" width="240" height="150"/>
<?php }
}else{ ?>
    <p>Tidak ada gambar (null)...</p>
<?php } ?>
</body> 
</html>