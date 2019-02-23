<?php
    $user=$_POST["tess"];
    $pass=$_POST["ass"];
    if ($user == "Jauza" && $pass == "1q2w3e"){
        echo "Login Berhasil";
    }else{
        echo "Login Gagal";
    }
?>