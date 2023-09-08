<?php
$detailBandaraAsal = [
    "CGK" => ["nama" => "Bandara Soekarno-Hatta", "pajak" => 65000],
    "BDO" => ["nama" => "Bandara Husein Sastranegara", "pajak" => 50000],
    "MLG" => ["nama" => "Bandara Abdul Rachman Saleh", "pajak" => 40000],
    "SUB" => ["nama" => "Bandara Juanda", "pajak" => 30000]
];
sort($detailBandaraAsal);

$detailBandaraTujuan = [
    "DPS" => ["nama" => "Bandara Ngurah Rai", "pajak" => 85000],
    "UPG" => ["nama" => "Bandara Hasanuddin", "pajak" => 70000],
    "INX" => ["nama" => "Bandara Inanwatan", "pajak" => 90000],
    "BTJ" => ["nama" => "Bandara Sultan Iskandar Muda", "pajak" => 60000]
];
sort($detailBandaraTujuan);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $jumlahTiket = $_POST["jumlahTiket"];
    $bandaraAsal = $_POST["bandaraAsal"];
    $bandaraTujuan = $_POST["bandaraTujuan"];
    $hargaTiket = $_POST["hargaTiket"];
    $catatan = $_POST["catatan"];

    $pajakAsal = $detailBandaraAsal[$bandaraAsal]["pajak"];
    $pajakTujuan = $detailBandaraTujuan[$bandaraTujuan]["pajak"];
    $pajakTotal = $pajakAsal + $pajakTujuan;
    $totalHarga = $jumlahTiket * $hargaTiket;
    $totalHargaPajak = $totalHarga + $pajakTotal;

    if ($jumlahTiket <= 0 || $hargaTiket <= 0) {
        $errorMessage = "Jumlah tiket atau harga tidak valid!";
        $totalHargaPajak = 0;
    }
    else{
        $successMessage = "Tiket Berhasil Didaftarkan!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
pesan
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tiket</title>
    <link rel="stylesheet" href="styleData.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="tiket d-flex justify-content-center align-items-center">
        <div class="data-box">
            <h2 class="text-center p-3 text-white" style="border-top-left-radius: 7px; border-top-right-radius: 7px; background-color: #19A7CE; opacity: 0.9;">Data Tiket</h2>
            
            <?php if (isset($successMessage)) : ?>
                <p class="m-3" style="color: green;"><?php echo $successMessage; ?></p>
            <?php endif; ?>

            <?php if (isset($errorMessage)) : ?>
                <p class="text-danger m-3"><?php echo $errorMessage; ?></p>
            <?php endif; ?>

            <div class="row row-cols-2 m-1">
                <div class="col">
                    <h5>Nama:</h5>
                    <p><?php echo $nama; ?></p>
                    <h5>Email:</h5>
                    <p><?php echo $email; ?></p>
                    <h5>Bandara Asal:</h5>
                    <p><?php echo $detailBandaraAsal[$bandaraAsal]["nama"]; ?></p>
                    <h5>Bandara Tujuan:</h5>
                    <p><?php echo $detailBandaraTujuan[$bandaraTujuan]["nama"]; ?></p>
                </div>

                <div class="col">
                    <h5>Jumlah Tiket:</h5>
                    <p><?php echo $jumlahTiket; ?></p>
                    <h5>Harga Tiket:</h5>
                    <p><?php echo $hargaTiket; ?></p>
                    <h5>Catatan:</h5>
                    <p><?php echo $catatan; ?></p>
                    <h5>Total Harga:</h5>
                    <p><?php echo $totalHargaPajak; ?></p>
                </div>
            </div>
            <h5 class="text-center">Travelock</h5>
            <div class="btn-cetak ms-3">
                <a class="btn text-white" href="form-daftar.php" style="background-color: #19A7CE; opacity: 0.9;">Kembali</a></button>
                <button class="btn text-white" onclick="cetak()" style="background-color: #19A7CE; opacity: 0.9;">Cetak</button>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
        function cetak() {
            window.print();
        }
    </script>
</body>

</html>