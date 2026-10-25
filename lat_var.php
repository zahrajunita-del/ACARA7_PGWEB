
<?php
// Menyimpan informasi dalam variabel
$ucapan = "Semangat selalu teman teman josjis";
echo $ucapan . "<br>";

// Mengakses elemen array
$warna = ["Merah", "Biru", "Hijau"];
echo "Warna pilihan: " . $warna[0] . "<br>";

// Melakukan operasi aritmetika
$nilai_awal = 20;
$nilai_tambahan = 24;
$hasil = $nilai_awal + $nilai_tambahan;
echo "Hasil penjumlahan: " . $hasil . "<br>";

// Menggunakan operator penugasan
$hasil += 3;
echo "Setelah ditambah 3: " . $hasil . "<br>";

// Mengubah nilai menjadi rangkaian teks
$teks_angka = $nilai_awal . $nilai_tambahan;
echo $teks_angka . "<br>";

// Menggabungkan teks menggunakan operator .=
$teks_angka .= " PGWEB";
echo $teks_angka;
?>
