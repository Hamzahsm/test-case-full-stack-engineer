<?php require_once "controllerUserData.php"; ?>
<?php
$con = mysqli_connect("localhost", "root", "", "majoo");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
function query($datas)
{
    global $con;
    $result = mysqli_query($con, $datas);
    $datakosong = [];

    while ($isidata = mysqli_fetch_assoc($result)) {
        $datakosong[] = $isidata;
    }

    return $datakosong;
}

$datas = query("SELECT * FROM admin");
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Halaman Admin</title>
</head>

<body>
    <header>
        <div class="row" style="padding: 10px; box-shadow: 0 5px 5px silver;">
            <div class="col bg-green" style="padding: 10px;">
                <h2>Test Case</h2>
            </div>
            <div class="col-8">
            </div>
            <div class="col text-center">
                <h5 style="line-height: 70px;"> <a href="logout-user.php" style="text-decoration: none;">Logout</a></h5>
            </div>
        </div>

    </header>
    <main>

        <div class="text-center mt-5">
            <h3> BERIKUT ADALAH DAFTA STOK BARANG</h3>
            <h5><a href="./tambah-produk.php">Tambah Produk</a></h5>
        </div>

        <!-- table data start here -->

        <div class="row mt-5">
            <div class="col">

            </div>
            <div class="col-10">
                <table class="table" style="box-shadow: 5px 5px 5px silver;">
                    <thead class="table-dark">
                        <?php $i = 1; ?>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Harga Produk</th>
                            <th scope="col">Kategori Produk</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datas as $data) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $data["namaproduk"]; ?></td>
                                <td><?= $data["deskripsi"]; ?></td>
                                <td><?= $data["harga"]; ?></td>
                                <td><?= $data["kategori"]; ?></td>
                                <td><img src="./uploads/<?= $data['upload'];?>" alt="" width="200" height="100"> </td>
                                <!-- <td><?= $data["upload"]; ?></td> -->
                                <td><a href="hapus-data.php?id=<?= $data["id"]; ?>" onclick="return confirm('Apakah Anda Yakin?')" style="color: red;"> Hapus </a> | <a href="edit-data.php?id=<?= $data['id']; ?>"> Edit</a></td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="col">

            </div>
        </div>
    </main>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>