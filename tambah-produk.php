<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./footerindex.css">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- navigation start here -->
    <nav id="navbar-example2" class="navbar navbar-light bg-light px-3" style="box-shadow: 0 5px 5px silver;">
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        <div style="text-align: center;" class="navbar-brand">
            <img src="https://oesman.id/wp-content/uploads/2020/08/OESMAN_logo-4.png" width="160px;" height="50px;">
        </div>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link fw-bold" href="welcome.php" style="color: black;">KEMBALI</a>
            </li>
        </ul>
    </nav>

    <!-- content -->
    <div class=" container mt-5">
        <h2 class="text-center">TAMBAH PRODUK BARU</h2>
    </div>

    <!-- form start here -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5" style="box-shadow: 10px 10px 10px silver; border-radius: 20px;">
                    <!-- <div class="card-header">
                        <h4>Coba Dulu</h4>
                    </div> -->
                    <div class="card-body">

                        <form action="proses-tambah.php" method="POST" enctype="multipart/form-data">

                            <label for="" class="form-label fw-bold mt-3">Nama Produk*</label>
                            <input type="text" id="" name="namaproduk" autocomplete="off" required class="form-control">

                            <label for="" class="form-label fw-bold mt-3">Deskripsi*</label>
                            <input type="text" id="" name="deskripsi" autocomplete="off" required class="form-control">

                            <label for="" class="form-label fw-bold mt-3">Harga*</label>
                            <input type="email" id="" name="harga" autocomplete="off" required class="form-control">

                            <label for="" class="form-label fw-bold mt-3">Kategori</label>
                            <select name="kategori" id="" class="form-control">
                                <option value="" style="color: silver;">Pilih</option>
                                <option value="elektronik">Elektronik</option>
                                <option value="olahraga">Olahraga</option>
                                <option value="makanan">Makanan</option>
                                <option value="baju">Baju</option>
                                <option value="motor">Motor</option>
                                <option value="mobil">Mobil</option>
                            </select>

                            <label for="" class="form-label mt-3 fw-bold">Upload Gambar</label>
                            <input type="file" id="" multiple name="uploadgambar[]" class="form-control">

                            <div class="form-group mb-4 mt-5 text-center">
                                <button type="submit" name="tambah_produk" class="btn btn-primary">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>