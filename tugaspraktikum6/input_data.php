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
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="input_data.php">Input Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php #tabel">KRS Mahasiswa</a>
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
<form action="domain/post_data.php" method="POST" enctype="multipart/form-data">
<div class="row d-flex justify-content-center mb-5 login-panel">
    <h3>Input Data Mahasiswa</h3>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="mb-3">
                            <label for="npm" class="form-label">NPM</label>
                            <input type="text" class="form-control" id="npm" name="npm">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                        </div>
                        <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select class="form-select mb-3" name="jurusan" id="jurusan">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                          </select>
                        </div>
                        <div class="mb-3">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" placeholder="Alamat Lengkap" name='alamat' id="alamat" style="height: 100px"></textarea>
                        </div>
                        <hr></hr>
                        <div class="mb-3">
                        <label for="mk" class="form-label">Mata Kuliah Yang Diambil</label>
                        <select class="form-select mb-3" name="mk" id="mk">
                            <option value='A1'>Basis Data</option>
                            <option value='A2'>Pemrograman Berbasis Web</option>
                            <option value='A3'>Algoritma Dan Struktur Data</option>
                            <option value='A4'>Kajian Jurnal Informatika</option>
                          </select>
                        </div>
                        <div class="mb-3">
                        <label for="sks" class="form-label">Jumlah SKS</label>
                        <select class="form-select mb-3" name="sks" id="sks">
                            <option value='3'>3</option>
                          </select>
                        </div>
                        <button type="submit" class="btn btn-primary" name="register">Input Data</button>
                    </div>
                </div>
</form>
    </section>

      <!--<div class="row jusitfy-content-center">
        <div class="col-10 login-panel">
            <h2>Registrasi Akun</h2>
            <form action="domain/post_data.php" method="POST" enctype="multipart/form-data">
            <div class="row d-flex justify-content-center mb-5">
                    <div class="col-10 col-md-6 col-lg-6">
                        <div class="mb-3">
                            <label for="npm" class="form-label">NPM</label>
                            <input type="text" class="form-control" id="npm" name="npm">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Tempat Kelahiran</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Tanggal Lahir</label>
                            <input type="datetime-local" name="date" class="form-control" id="date">
                        </div>
                        <button type="submit" class="btn btn-success" name="order">REGISTER</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
        </div>
-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>