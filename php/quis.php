<!-- output yang diharapkan
    nama peserta : nama kalian
    nilai = 85
    grade b
    statusnya adalah lulus

soal: peserta dinyatakan lulus jika nilainya lebih dari 70 dan tidak lulus jika nilai kurang dari 70, nilai juga dikategorikan kedalam grade apa dengan huruf
1. a. jika nilainya 90 dan 100
2. b. jika nilainya 80-89
3. c. jika nilainya 70-79
4. d. jika nilainya 60-69
5. E. dibawah 60
-->

<?php

$namapeserta = "Nama Peserta : ";
echo "$namapeserta";

$nama = "Hardianti";
echo "$nama";

echo "<br>";

$nilai = "nilai : ";
echo "$nilai";

$nilaidianti = "85";
echo "$nilaidianti";

echo "<br>";

$status = "status ";
echo "$status";


if ($nilai >= 90) {
    echo "Grade A";
} elseif ($nilai >= 80) {
    echo "Grade B";
} elseif ($nilai >= 70) {
    echo "Grade C";
} elseif ($nilai > 60) {
    echo "Grade D";
} else {
    echo "Tidak Lulus";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



//  CARA YANG BENAR DIBAWAH INI
$nama = "";
$nilai = 85;
$grade = "";
$status = "";

if ($nilai > 70) {
    $status = "lulus";
} else {
    $status = "Tidak Lulus";
}

if ($nilai >= 90) {
    $grade = "Grade A";
} elseif ($nilai >= 80) {
    $grade = "Grade B";
} elseif ($nilai >= 70) {
    $grade = "Grade C";
} elseif ($nilai > 60) {
    $grade = "Grade D";
} else {
    $grade = "Grade E";
}

echo "<br>";


echo "Nama Peserta :" . $nama . "<br> Nilai : " . $nilai . "<br> Grade : " . $grade . "<br> Status : " . $status;

$username = "admin";
$password = "admin";

if ($username == "admin" && $password == "admin") {
    echo "Login Berhasil";
} else {
    echo "login gagal";
}

?>