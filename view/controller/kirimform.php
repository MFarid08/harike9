<?php
    $nama              = $_POST['nama'];
    $alamatanda        = $_POST['alamatanda'];
    $jeniskelamin      = $_POST['jeniskelamin'];

    header("location:../detail_data.php?nama=".$nama.
                                        "&alamatanda=".$alamatanda.
                                        "&jeniskelamin=".$jeniskelamin
);
?>