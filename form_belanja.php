<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .harga-info {
        background-color: green;
        padding: 10px; 
        color: white;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <!-- Form Section -->
            <div class="col-md-6 m-4">
                <h1>Form Belanja</h1>
                <form method="post" action="form_belanja.php">
                    <div class="form-group row">
                        <label for="customer" class="col-4 col-form-label">Customer</label> 
                        <div class="col-8">
                            <input id="customer" name="customer" type="text" class="form-control" placeholder="Nama Customer" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label> 
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_tv" type="radio" class="custom-control-input" value="tv" required="required"> 
                                <label for="produk_tv" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_kulkas" type="radio" class="custom-control-input" value="kulkas" required="required"> 
                                <label for="produk_kulkas" class="custom-control-label">Kulkas</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_mesin" type="radio" class="custom-control-input" value="mesin cuci" required="required"> 
                                <label for="produk_mesin" class="custom-control-label">Mesin Cuci</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                        <div class="col-8">
                            <input id="jumlah" name="jumlah" type="number" class="form-control" placeholder="Jumlah" required="required">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $customer = $_POST["customer"];
                    $produk = $_POST["produk"];
                    $jumlah = $_POST["jumlah"];

                    $harga = 0;
                    switch (strtolower($produk)) {
                        case "tv":
                            $harga = 4200000;
                            break;
                        case "kulkas":
                            $harga = 3100000;
                            break;
                        case "mesin cuci":
                            $harga = 3800000;
                            break;
                    }

                    $total = $harga * $jumlah;

                    echo "<div class='alert alert-dark'>";
                    echo "<p><strong>Hasil Belanja</strong></p>";
                    echo "<p><strong>Nama Customer:</strong> $customer</p>";
                    echo "<p><strong>Produk Pilihan:</strong> " . strtoupper($produk) . "</p>"; 
                    echo "<p><strong>Jumlah Beli:</strong> $jumlah</p>";
                    echo "<p><strong>Total Belanja:</strong> Rp " . number_format($total, 0, ',', '.') . "</p>";
                    echo "</div>";
                }
                ?>
            </div>
            <!-- Sidebar Section -->
            <div class="col-md-4 m-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="harga-info">Daftar Harga</h3>
                        <p>TV : 4.200.000</p>
                        <p>Kulkas : 3.100.000</p>
                        <p>Mesin Cuci : 3.800.000</p>
                        <p class="harga-info">Harga Dapat Berubah Setiap Saat</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>