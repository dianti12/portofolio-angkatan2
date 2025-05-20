<!-- Variabel system : var yang dibuat  oleh php 
 $_POST, $GET, $_SESSION, $_SERVER, $_FILES, $_REQUEST

 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel System</title>
</head>

<body>
    <!-- 
 $data = ["nama"=> "Reza"]
-->

    <form action="" method="post">
        <div class="form-group">

            <label for="">Nama :</label>
            <input type="text" name="nama" placeholder="Masukkan Nama anda">
        </div>
        <br>

        <div class="form-group">

            <label for="">Nilai :</label>
            <input type="number" name="nilai" placeholder="Masukkan Nilai anda">
        </div>
        <br>

        <div class="form-group">
            <button type="submit">Kirim</button>
        </div>

    </form>

    <?php
    if (isset($_POST['nama'])) {
        $nama = $_POST['nama'];
        $nilai = $_POST['nilai'];
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
    }

    // echo "Halo " . $nama . " , "; sebelum tutup kurung kurawal
    //shorthand / ternery
    // $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    // echo "Selamat siang " . $nama;

    ?>

</body>

</html>