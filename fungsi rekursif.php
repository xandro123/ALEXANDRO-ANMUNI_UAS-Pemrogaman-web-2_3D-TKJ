<?php
function faktorial($angka) {
  if ($angka < 2) {
    return 1;
  } else {
    // Memanggil dirinya sendiri (rekursif)
    return ($angka * faktorial($angka-1));
  }
}

// Menampilkan hasil perhitungan faktorial 5
echo "faktorial 5 adalah " . faktorial(5);
?>