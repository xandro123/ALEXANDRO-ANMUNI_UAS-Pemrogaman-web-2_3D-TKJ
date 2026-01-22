<?php
// Membuat fungsi dengan parameter default
function perkenalan($nama, $salam="Selamat Datang"){
  echo $salam.", ";
  echo "Perkenalkan, nama saya ".$nama."<br/>";
  echo "Senang berkenalan dengan anda<br/>";
}

// Memanggil fungsi yang sudah dibuat
perkenalan("Komang", "Hi");

echo "<hr>";

$saya = "Medi";
$ucapanSalam = "Selamat pagi";

// Memanggilnya lagi tanpa mengisi parameter salam (menggunakan default)
// Catatan: Di gambar Anda, variabel $ucapanSalam didefinisikan tapi tidak dimasukkan ke parameter
perkenalan($saya); 
?>