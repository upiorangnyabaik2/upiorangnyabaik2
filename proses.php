<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = htmlspecialchars($_POST['nama']);
        $asal = htmlspecialchars($_POST['asal']);
        $tujuan = htmlspecialchars($_POST['tujuan']);
        $tanggal = htmlspecialchars($_POST['tanggal']);

        $data = "Nama: $nama, Asal: $asal, Tujuan: $tujuan, Tanggal: $tanggal\n";
        file_put_contents('pemesanan.txt', $data, FILE_APPEND | LOCK_EX);

        echo "<h1>Konfirmasi Pemesanan Tiket</h1>";
        echo "<p>Nama Penumpang: $nama</p>";
        echo "<p>Kota Asal: $asal</p>";
        echo "<p>Kota Tujuan: $tujuan</p>";
        echo "<p>Tanggal Penerbangan: $tanggal</p>";
        echo "<p>Terima Kasih telah memesan tiket pesawat</p>";
       
    } else {
        echo "Data tidak valid.";
    }
?>