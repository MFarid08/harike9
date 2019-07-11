<html>
    <head>
        <title>Latihan Validasi Form</title>
        <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.css">
        <script type="text/javascript" src="asset/js/jquery-2.1.1.js"></script>
        <script type="text/javascript" src="asset/bootstrap.js"></script>
    </head>
    <body>
                 <!-- <div class="navbar"> -->   
                 <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">DIGITAL TALENT</a>
                <img src="..\viev\logo.png">
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
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">search</button>
          </form>
        </div>
        </div>
      </nav>
        <!--konten-->
        <center><img src="..asset/img/admiral_prinz.png" width="720px" alt="prinz admiral"></center>
      <div class="container">
      <h1><center>Membuat validasi Form</center></h1>
      <?php
        if (isset($_GET['nama'])){
        if($_GET['nama'] == "kosong"){
          echo "<h4 style='color:red'>Nama Belum Di Masukkan !</h4>";
        }
      }
      ?>
      <h1>Digital Talent</h1>
      <form style="padding-top:40px;"action="controller/kirimform.php" method="POST">
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Nama Lengkap</label>
              <input type="text" class="form-control" name="nama1" aria-describedby="nameHelp" placeholder="Nama">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Alamat Anda</label>
              <input type="text" class="form-control" name="alamatanda" placeholder="Alamat">
            </div>
            <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="jeniskelamin">
                      <option value="Laki-laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
    </body>
</html>