<?php
echo ("<h3>Tipe Data String</h3>");
    $nama = "Agus Muhammad Al Hasib";
    $nim = "210411100227";
    $kelas = "Paw 3C";

    echo $nama;
    echo "<br>";
    echo $nim;
    echo "<br>";
    echo $kelas;
// Variable diatas yaitu variable yang mempunyai tipe data string karena berisi suatu teks atau kalimat.

echo ("<h3>Tipe Data Float</h3>");
// Penjumlahan tipe data float
    $awal = 40.70;
    $akhir = 47.17;
    $hasil = $awal +$akhir;
    echo "Hasil nya adalah $hasil";
// Hasil diatas merupakan tipe data float, di karenakan $awal $akhir dan $hasil adalah float.

echo ("<h3>Tipe Data Array</h3>");
    $saya = array("Agus","Muhammad","Al","Hasib","210411100227");
    // Untuk menampilkan isi array
    echo count($saya);
    // Variable diatas merupakan tipe data array dikarenakan berisi kembalian panjang(jumlah elemen) dari array.
?>