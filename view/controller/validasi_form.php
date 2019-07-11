<?php
    // $nama =$_POST['nama'];
    // if($nama == ""){
    //     header("location:../latihan.php?nama=kosong");
    // }else{
    //     echo "Nama Lengkap Anda Adalah ". $nama;
    // }

    $jeniskelamin =$_POST['jeniskelamin'];
    if($jeniskelamin =="Laki-laki"){
        header("location:../latihan.php?jeniskelamin=Perempuan");
    }else{
        echo "Jenis Kelamin anda adalah". $jeniskelamin;
    }
?>