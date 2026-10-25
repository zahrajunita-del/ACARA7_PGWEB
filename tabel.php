<?php
$kecamatan = array("Dlingo", "Kretek", "Pundong", "Sewon");
$luas = array(55.87, 26.77, 23.68, 27.16);
$penduduk = array(38000, 33000, 37000, 95000);

echo "<table border='1'>";
echo "<tr><th>Kecamatan</th><th>Luas</th><th>Penduduk</th></tr>";

for ($i = 0; $i < count($kecamatan); $i++) {
    echo "<tr>";
    echo "<td>" . $kecamatan[$i] . "</td>";
    echo "<td>" . $luas[$i] . "</td>";
    echo "<td>" . $penduduk[$i] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
