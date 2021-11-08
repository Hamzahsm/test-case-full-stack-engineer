<?php

$id = $_GET['id'];

$conn = mysqli_connect("localhost","u705028021_loginsystem","Loginsystem321","u705028021_loginsystem");
$query    =mysqli_query($conn, "SELECT * FROM formweb WHERE id= $id ");
$result    =mysqli_fetch_array($query);

?>

<?php 

    if(isset($_POST['submit'])){ 
        $orderanke = $_POST['orderanke'];

        $query = "UPDATE formweb SET orderanke = '$orderanke' WHERE id = '$id'";

        // $result = mysqli_query($con, $query)  or die (mysqli_error($con)) ;

        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<script>alert('Data Berhasil di update');
            document.location.href='database-penjualan-web.php'; </script>";    
        } else {
            echo "<script>alert('Data Gagal Di Update');
            document.location.href='database-penjualan-web.php';</script>";    
        }

    }
?> 

 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Edit Status Order Ads</title>
  </head>
<body>

<!-- header start here  -->

<header>
    <div class="row" style="padding: 10px; box-shadow: 0 5px 5px silver;">
        <div class="col bg-green" style="padding: 10px;">
            <img src="https://oesman.id/wp-content/uploads/2020/08/OESMAN_logo-4.png" width="200px;" height="60px;">
        </div>
        <div class="col-8">
        </div>
        <div class="col text-center">
            <h5 style="line-height: 70px;"> <a href="database-penjualan-web.php" style="text-decoration: none;">Kembali</a></h5>
        </div>
    </div>
</header>

<!-- header end here -->

<!-- title start here -->

<div class="text-center mt-5">
        <h3> UPDATE HARGA JUAL  </h3>
    </div>

<!-- title end her  -->

<!-- form start here -->
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5" style="box-shadow: 10px 10px 10px silver; border-radius: 20px;">
                    <!-- <div class="card-header">
                        <h4>Coba Dulu</h4>
                    </div> -->
                    <div class="card-body"> 

                        <form action="" method="POST">

                                <label for="" class="form-label fw-bold mt-3">Orderan Ke </label>
                                <input type="text" id="" name="orderanke" autocomplete="off" class="form-control" value="<?php echo $result['orderanke']; ?>">



                            <div class="form-group mb-4 mt-5 text-center"> 
                                <button type="submit" name="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
