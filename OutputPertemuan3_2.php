<?php
    session_start();
    echo "Data Yang Diterima";
    $_SESSION['Nama']=$_POST['namasaya'];
    $_SESSION['Nim']=$_POST['NIM'];
    $_SESSION['Prodi']=$_POST['Prodi'];
?>