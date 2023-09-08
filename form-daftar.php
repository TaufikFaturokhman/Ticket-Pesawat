<?php
$bandaraAsal = [
    "CGK" => ["nama" => "Bandara Soekarno-Hatta"],
    "BDO" => ["nama" => "Bandara Husein Sastranegara"],
    "MLG" => ["nama" => "Bandara Abdul Rachman Saleh"],
    "SUB" => ["nama" => "Bandara Juanda"]
];
sort($bandaraAsal);

$bandaraTujuan = [
    "DPS" => ["nama" => "Bandara Ngurah Rai"],
    "UPG" => ["nama" => "Bandara Hasanuddin"],
    "INX" => ["nama" => "Bandara Inanwatan"],
    "BTJ" => ["nama" => "Bandara Sultan Iskandar Muda"]
];
sort($bandaraTujuan);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Tiket</title>
    <link rel="stylesheet" href="styleForm.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="daftar d-flex align-items-center justify-content-center">
        <div class="form-daftar">
            <h3 class="text-center p-3 text-white" style="border-top-left-radius: 7px; border-top-right-radius: 7px; background-color: #19A7CE; opacity: 0.9;">Pembelian Tiket Pesawat</h3>
            <div class="row row-cols-2 m-1">
                <div class="col">
                    <form class="" method="post" action="data-ticket.php">
                        <label class="form-label mt-2" for="nama">Nama:</label>
                        <input class="form-control" type="text" name="nama" required placeholder="Nama"><br>

                        <label class="form-label" for="email">Email:</label>
                        <input class="form-control" type="email" name="email" required placeholder="Email"><br>

                        <label class="form-label" for="bandaraAsal">Bandara Asal:</label>
                        <select name="bandaraAsal" class="form-select">
                            <?php foreach ($bandaraAsal as $kode => $bandara) : ?>
                                <option value="<?php echo $kode; ?>"><?php echo $bandara["nama"]; ?></option>
                            <?php endforeach; ?>
                        </select><br>

                        <label class="form-label" for="bandaraTujuan">Bandara Tujuan:</label>
                        <select name="bandaraTujuan" class="form-select" </select>
                            <?php foreach ($bandaraTujuan as $kode => $bandara) : ?>
                                <option value="<?php echo $kode; ?>"><?php echo $bandara["nama"]; ?></option>
                            <?php endforeach; ?>
                        </select><br>
                </div>

                <div class="col mt-2">
                    <label class="form-label" for="jumlahTiket">Jumlah Tiket:</label>
                    <input class="form-control" type="number" name="jumlahTiket" required placeholder="Jumlah Tiket"><br>

                    <label class="form-label" for="hargaTiket">Harga Tiket:</label>
                    <input type="number" class="form-control" name="hargaTiket" required placeholder="Harga Tiket"><br>

                    <label class="form-label" for="catatan">Catatan:</label>
                    <textarea maxlength="10" type="text" name="catatan" class="form-control" placeholder="Catatan" style="max-height: 80px;"></textarea><br>

                    <input class="btn text-white" style="background-color: #19A7CE; opacity: 0.9;" type="submit" value="Pesan Sekarang">
                </div>
                </form>
            </div>
            <h5 class="text-center">Travelock</h5>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>