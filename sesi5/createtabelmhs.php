<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

    if($cnn){
        $tbMHS = "tbMHS";
        $sql = "CREATE TABLE $tbMHS(
           id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
           nama VARCHAR(35),
           nim VARCHAR (10),
           alamat VARCHAR (255),
           telp VARCHAR (15),
           prodi VARCHAR (25),
           jeniskelamin VARCHAR(1),
           tgllahir date
        )";
        $hasil= mysqli_query($cnn, $sql);
        if($hasil){
            echo"Pembuatan tabel" . $tbMHS. " Sukses";
        }
    }else{
        echo"Pembuatan tabel" . $tbMHS. " Gagal";
    }

    