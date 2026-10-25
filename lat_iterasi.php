
<?php
// Perulangan while
$i = 1;
while ($i < 4) {
    echo $i . "<br>";
    $i = $i + 1;
}

// Perulangan for
for ($i = 1; $i < 4; $i++) {
    echo $i . "<br>";
}

// Deklarasi array
$kegiatan = array("Digitasi", "Pemograman", "Ngukur", "Tidur");

// Perulangan foreach
foreach ($kegiatan as $value) {
    echo "$value <br>";
}

// Menampilkan isi array dengan for
for ($i = 0; $i < 3; $i++) {
    echo $kegiatan[$i] . "<br>";
}
?>
