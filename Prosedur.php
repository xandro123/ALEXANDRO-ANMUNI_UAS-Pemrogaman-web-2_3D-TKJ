<?php
// Contoh prosedur: langsung mencetak nilai
function do_print() {
  echo time();
}

// Memanggil prosedur
do_print();
echo '<br />';

// Contoh fungsi: mengembalikan nilai hasil perhitungan
function jumlah($a, $b) {
  return ($a + $b);
}

// Memanggil fungsi dan mencetak hasilnya
echo jumlah(2, 3); // Output: 5
?>