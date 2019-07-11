<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Detail Data Peserta</title>
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
    <?php
        $nama = ($_GET['nama']);
        $alamatanda = ($_GET['alamatanda']);
        $jeniskelamin = ($_GET['jeniskelamin']);
    ?>



      <div class="container" style="padding-top:40px;">
      <h1><center>Detail Profil Peserta</center></h1>
        <table width="100%">
            <tr>
                <td width="40%">Nama Lengkap</td>
                <td width="60%">: <?php echo $nama; ?></td>
            </tr>
            <tr>
                <td width="40%">Alamat</td>
                <td width="60%">: <?php echo $alamatanda; ?></td>
            </tr>
            <tr>
                <td width="40%">Jenis Kelamin</td>
                <td width="60%">: <?php echo $jeniskelamin; ?></td>
            </tr>
        </table>
</body>
</html>