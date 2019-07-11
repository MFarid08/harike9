<!DOCTYPE html>
<html>
    <head>
            <title> Latihan Mekanisme Web </title>
                    <link rel="stylesheet" type="text/css" href="asset\css\bootstrap.css">
                    
    </head>
    <body>
         <!-- <div class="navbar"> -->   
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#"></a>
                <img src="asset/img/logo.png">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                     </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Programming
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">PHP</a>
                <a class="dropdown-item" href="#">ASP</a>
                <a class="dropdown-item" href="#">AJAX</a>
                <a class="dropdown-item" href="#">jQuery</a>
                <a class="dropdown-item" href="#">MySQL</a>
                <a class="dropdown-item" href="#">CSS</a>   
                <div class="dropdown-divider"></div>
              </div>
            </li>
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Software
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">PHP</a>
                      <a class="dropdown-item" href="#">ASP</a>
                      <a class="dropdown-item" href="#">AJAX</a>
                      <a class="dropdown-item" href="#">jQuery</a>
                      <a class="dropdown-item" href="#">MySQL</a>
                      <a class="dropdown-item" href="#">CSS</a>   
                      <div class="dropdown-divider"></div>
                    </div>
                  </li>
                  <li class="nav-item active">
                        <a class="nav-link" href="#">Contact Us <span class="sr-only">(current)</span></a>
                      </li>
                  <li class="nav-item">
                    <a class="nav-link" href="view/daftardata.php">Daftar Data</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="view/latihan.php">Form Peserta</a>
                  </li>
                  <li>
                    <a class="nav-link" href="view/controller/koneksi.php">Cek Koneksi</a>
                  </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">search</button>
          </form>
        </div>
        </div>
      </nav>
        <!--konten-->
      <div class="container">

      <h1>Digital Talent</h1>
      <form>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Nama Anda</label>
              <input type="text" class="form-control" aria-describedby="nameHelp" placeholder="Nama">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Alamat Anda</label>
              <input type="text" class="form-control" placeholder="Alamat">
            </div>
            <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>Laki-Laki</option>
                      <option>Perempuan</option>
                    </select>
                  </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        <center><img src="asset/img/admiral_prinz.png" width="720px" alt="prinz admiral"></center>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="asset/js/jquery.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/popper.min.js"></script>

    </body>
    <footer>
    <div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
    </footer>
</html>