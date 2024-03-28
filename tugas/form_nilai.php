<?php require_once "class_mahasiswa.php" ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


    <title> Form Nilai Mahasiswa</title>
</head>

<body>
    <div class="container">

        <h1 class="text-left">Form Nilai Ujian</h1>
        <hr>
        <form method="POST" action="form_nilai.php">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label>
                <div class="col-8">
                    <input id="nim" name="nim" type="text" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
                <div class="col-8">
                    <select id="matkul" name="matkul" class="custom-select">
                        <option value="-">Pilih Mata Kuliah</option>
                        <option value="Pemrograman Web">Pemrograman Web</option>
                        <option value="Basis Data">Basis Data</option>
                        <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai" class="col-4 col-form-label">Nilai</label>
                <div class="col-8">
                    <input id="nilai" name="nilai" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

        <?php
        if (isset($_POST["submit"])) {

            $nim = $_POST["nim"];
            $matkul = $_POST["matkul"];
            $nilai = $_POST["nilai"];
            $mhs = new NilaiMahasiswa($nim, $matkul, $nilai);

            echo "<h2>Nilai Mahasiswa</h2>  <br>";
            echo "<p>NIM: " . $mhs->nim . "</p>";
            echo "<p>Prodi: " . $mhs->matkul . "</p>";
            echo "<p>Hasil ujian: " . $mhs->hasil($nilai) . "</p>";
            echo "<p>Grade ujian: " . $mhs->grade() . "</p>";
        }
        ?>

        <hr>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>
