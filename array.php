<?php

// Data awal array
$dataArray = ["Apel", "Jeruk", "Mangga"];

// Jika tombol tambah ditekan
if (isset($_POST["tambah"])) {

    $dataBaru = $_POST["data"];

    if ($dataBaru != "") {
        $dataArray[] = $dataBaru;
    }
}

// Jika tombol hapus ditekan
if (isset($_POST["hapus"])) {

    array_pop($dataArray);
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Struktur Data Array</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <a href="index.php">← Kembali ke Menu</a>

    <h1>Struktur Data Array</h1>

    <p>
        Array adalah struktur data yang digunakan untuk
        menyimpan beberapa data dalam satu variabel.
    </p>

    <div class="box">

        <h2>Isi Array</h2>

        <?php if (count($dataArray) > 0): ?>

            <?php foreach ($dataArray as $index => $data): ?>

                <div class="data">

                    Index <?php echo $index; ?> :
                    <strong><?php echo htmlspecialchars($data); ?></strong>

                </div>

            <?php endforeach; ?>

        <?php else: ?>

            <p>Array kosong.</p>

        <?php endif; ?>

    </div>


    <div class="box">

        <h2>Tambah Data</h2>

        <form method="POST">

            <input
                type="text"
                name="data"
                placeholder="Masukkan data"
                required
            >

            <button type="submit" name="tambah">
                Tambah
            </button>

        </form>

    </div>


    <div class="box">

        <h2>Hapus Data</h2>

        <form method="POST">

            <button type="submit" name="hapus">
                Hapus Data Terakhir
            </button>

        </form>

    </div>


    <div class="info">

        <h2>Cara Kerja Array</h2>

        <p>Contoh array:</p>

<pre>
$dataArray = ["Apel", "Jeruk", "Mangga"];
</pre>

        <p>
            Apel mempunyai index 0,
            Jeruk mempunyai index 1,
            dan Mangga mempunyai index 2.
        </p>

    </div>

</div>

</body>

</html>