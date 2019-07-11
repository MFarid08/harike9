<!DOCTYPE html>
<html>
    <head>
            <title> Latihan Mekanisme Web </title>
                    <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.css">

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


      <div class="container" style="padding-top: 40px;">
    <?php
        echo "<center><h1>Daftar Rekap Nilai Peserta Digital Telent Scholarship</center></h1><br>";
        echo "<center>Tgl. Sekarang : ".date('d m Y h:i:s');
    ?>
      <h3>Daftar Nilai Akhir Peserta</h3>
        <table class="table table-striped table-bordered">
            <thead class="text-center">
                <tr>
                <th width="5%" rowspan="2">No</th>
                <th rowspan="2">Nama</th>
                <th rowspan="2">Email</th>
                <th rowspan="2">Alamat</th>
                <th colspan="2">Nilai</th>
                <th rowspan="2">Total</th>
                </tr>
                <tr>
                    <th>Ujian 1</th>
                    <th>Ujian 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
        </table>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../asset/js/jquery.js"></script>
    <script src="../asset/js/bootstrap.min.js"></script>
    <script src="../asset/js/popper.min.js"></script>

    </body>
</html>