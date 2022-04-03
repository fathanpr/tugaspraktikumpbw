<?php include('domain/get_data.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="assets/style.css" rel='stylesheet'>

    <title>Tugas CRUD</title>
  </head>
  <body>
  <section id="awal">
  <nav class="navbar navbar-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">UNTELE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">SIAKAD.UNILE.AC.ID</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#awal">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="input_data.php">Input Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#tabel">KRS Mahasiswa</a>
          </li>
          <li class="nav-item dropdown">
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<div class="container">

        <?php
        if (isset($_GET['message'])) {
            $message = $_GET['message'];
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
            echo  $message;
            echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
            echo '</div>';
        }
        ?>

</div>
      </section>

<section class='landing'>
<div class="background">
    <img src='assets/background.jpg'>
    <div class="container">
    <div class='row justify-content-center'>
        <div class='col-10 panel justify-content-center'>
        <h1>SELAMAT DATANG DI SIAKAD UNTELE</h1>
        <h3>Universitas Ternak Lele</h3>
            <div class="row">
                <div class="col justify-content-center">
                    <div class='tombol'>
                    <a href="input_data.php"type="button" class="btn btn-primary">Input Data</a>
                    <a href="#tabel"type="button" class="btn btn-success">Lihat KRS</a>
                    </div>
                 </div>
                </div>
        </div>
        </div>
    </div>
</div>
</div>
</section>

<section class="tampil-data" id="tabel">
<div class="container tampil-data">
  <h2 style="text-align:center;font-weight:bolder;">DATA KRS MAHASISWA UNTELE</h2>
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped" id='table-data'>
                        <thead>
                            <tr>
                                <th scope="col" style='background-color:yellow;'>No</th>
                                <th scope="col" style='background-color:aqua;'>Nama Lengkap</th>
                                <th scope="col" style='background-color:lawngreen;'>Mata Kuliah</th>
                                <th scope="col" style='background-color:palevioletred;'>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!isset($query)) {
                                echo "Belum ada yang mengisi KRS";
                            } else {
                                while ($row = mysqli_fetch_assoc($run)){
                                    echo '<tr>
                                    <td>' . $row['id'] . '</td>
                                    <td>' . $row['nama'] . '</td>
                                    <td>' . $row['nama_mk'] . '</td>
                                    <td>' . "<span style='color:palevioletred;font-weight:bolder;'>".$row['nama']."</span>". ' Mengambil Mata Kuliah ' . "<span style='color:palevioletred;font-weight:bolder;'>" . $row['nama_mk'] ."</span>". " ( ".$row['jumlah_sks'] . ' SKS )' . '</td> 
                                    </tr>';
                                }
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>