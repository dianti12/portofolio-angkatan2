<!--  if: fungsi percabangan dan logika untuk menjalankan kode berdasarkan kondisi yang diaari  -->

<?php

// Operator Pembanding
// = memberikan nilai
// == membandingkan
// == membandingkan tapi dengan tipe datanya
// !: tidak
// !empty - tidak kosong
//empty kosong
//isset : tidak kosong
//!isset : tidak kosong
//> : lebih besar , < : lebih kecill, >= : lebih besar sama dengan <= : lebih kecil sama dengan

$nama = "bambang";
if ($nama != "bambang") {
    echo "iya";
} else {
    echo "Bukan";
}

if (empty($nama)) {
    echo "Yaa";
} else {
    echo "Tidak";
}

$suhu = 35;
if ($suhu > 37) {
    echo "Demam";
    
} elseif ($suhu >= 35) {
    echo "Normal";
} else {
    echo "kedinginan";
}
echo <br>;

//////ini soal

$nama = "Hardianti";
$nilai = "85";

if ($nilai >= 90) {
    echo "Grade A";
}

$
elseif ($nilai >= 80 ){
    echo "Grade B";
}

 elseif ($nilai >=70){
    echo
 }

?>




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
5. dibawah 60
-->