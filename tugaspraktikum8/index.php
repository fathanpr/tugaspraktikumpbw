<?php
include("koneksi.php");
?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Warung 20072</title>
  </head>
  <body>
    <h1 style='text-align:center;'>DATA BARANG WARUNG 20072</h1>
    <section class="data" id="data">
        <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" style="background-color:red;color:white;border:3px black;">Id_barang</th>
                        <th scope="col" style="background-color:yellow;color:white;">Nama Barang</th>
                        <th scope="col" style="background-color:orange;color:white;">Harga</th>
                        <th scope="col" style="background-color:purple;color:white;">Stok</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM barang";
                    $query = mysqli_query($conn,$sql);
                    $data = mysqli_fetch_array($query);
                    ?>
                    <?php foreach ($query as $row) : ?>
                        <tr>
                            <td><?= $row['id_barang']; ?></td>
                            <td><?= $row['nama_barang']; ?></td>
                            <td><?= $row['harga']; ?></td>
                            <td><?= $row['stok']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    </section> 

   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>