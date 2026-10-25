<?php
// Deklarasi Variable
$nilai_teori = 82;
$nilai_praktik = 74;

// Mengevaluasi hasil berdasarkan kondisi
if ($nilai_teori >= 75 && $nilai_praktik >= 70) {
    echo "Status: Lulus <br>";
} elseif ($nilai_teori >= 60 || $nilai_praktik >= 60) {
    echo "Status: Perlu perbaikan nilai <br>";
} else {
    echo "Status: Belum memenuhi kriteria <br>";
}

echo "Evaluasi nilai telah selesai.";
?>
