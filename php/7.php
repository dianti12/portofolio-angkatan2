<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
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
    if (isset($_GET['nama'])) {
        $nama = $_GET['nama'];
        $nilai = $_GET['nilai'];
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
    ?>
</body>

</html>