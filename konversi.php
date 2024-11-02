<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Struk Parkir</title>
</head>

<body>
    <div class="container">
        <h2>======= STRUK PARKIR =======</h2>
        <hr>

        <?php
        $plat = $_POST["plat"];
        $kendaraan = $_POST["kendaraan"];
        $masuk = $_POST["masuk"];
        $keluar = $_POST["keluar"];

        list($jam_masuk, $menit_masuk) = explode(":", $masuk);
        list($jam_kelaur, $menit_keluar) = explode(":", $keluar);
        $detikm = ($jam_masuk * 3600) + ($menit_masuk * 60);
        $detikk = ($jam_kelaur * 3600) + ($menit_keluar * 60);
        if ($detikk < $detikm) {
            $detikk += 24 * 3600;
        }
        $x = ($detikk - $detikm);
        $jam = $x / 3600;

        $jam1 = floor($jam);
        $menit = ($jam - $jam1) * 60;

        function Rp($angka)
        {
            $rupiah = "Rp " . number_format($angka, 0, ',', '.');
            return $rupiah;
        }

        switch ($kendaraan) {
            case "mobil":
                echo "<h3> Kendaraan : $kendaraan <br/> Plat : $plat <br/> Jam Masuk : $masuk <br/> 
                Jam Keluar : $keluar <br/> Total Waktu : $jam1 Jam $menit Menit <br/></h3>";
                if ($jam <= 1) {
                    echo "<h3>harga parkir : 5.000</h3>";
                } elseif ($jam > 1) {
                    $harga = 3000 * ($jam - 1) + 5000;
                    echo "<h3> Total harga parkir $kendaraan : " . Rp($harga) . "<br/></h3>";
                }
                break;

            case "motor":
                echo "<h3> Kendaraan : $kendaraan <br/> Plat : $plat <br/> Jam Masuk : $masuk <br/> 
                Jam Keluar : $keluar <br/> Total Waktu : $jam1 Jam $menit Menit <br/></h3>";
                if ($jam <= 1) {
                    echo "<h3>harga parkir : 3.000</h3>";
                } elseif ($jam > 1) {
                    $harga = 1000 * ($jam - 1) + 3000;
                    $harga = number_format($harga, 2, '.', '');
                    echo "<h3> Total harga parkir $kendaraan : " . Rp($harga) . "<br/></h3>";
                }
                break;

            case "sepeda":
                echo "<h3> Kendaraan : $kendaraan <br/> Plat : $plat <br/> Jam Masuk : $masuk <br/> 
                Jam Keluar : $keluar <br/> Total Waktu : $jam1 Jam $menit Menit <br/></h3>";
                if ($jam <= 1) {
                    echo "<h3>harga parkir : 2.000</h3>";
                } elseif ($jam > 1) {
                    $harga = 500 * ($jam - 1) + 2000;
                    $harga = number_format($harga, 2, '.', '');
                    echo "<h3> Total harga parkir $kendaraan : " . Rp($harga) . "<br/> </h3>";
                }
                break;
        }

        ?>

        <hr>
        <h2>======= TERIMAKASIH =======</h2>
        <hr>
        <div class="anggota-kelompok">
            <h4>
                <p>Anggota Kelompok :</p>
                <p>Tezza Prayoga(225610003)</p>
                <p>Udin Dwi Wahyudi(225610031)</p>
                <p>Hendrianto Novanda Putra(225610008)</p>
            </h4>
        </div>
    </div>
</body>

</html>