<?php

// Data awal Stack
$stack = ["Buku A", "Buku B", "Buku C"];


// Push
if (isset($_POST['push'])) {

    $data = $_POST['data'];

    if (!empty($data)) {
        $stack[] = $data;
    }
}


// Pop
if (isset($_POST['pop'])) {

    array_pop($stack);
}

?>

<!DOCTYPE html>

<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Struktur Data Stack</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <a href="index.php">← Kembali ke Menu</a>

    <h1>Struktur Data Stack</h1>

    <p>
        Stack menggunakan konsep
        <strong>LIFO (Last In First Out)</strong>.
    </p>


    <div class="box">

        <h2>Isi Stack</h2>

        <div class="stack">

            <?php

            if (empty($stack)) {

                echo "<p>Stack kosong</p>";

            } else {

                for ($i = count($stack) - 1; $i >= 0; $i--):

            ?>

                <div class="stack-item">

                    <?php echo $stack[$i]; ?>

                    <?php if ($i == count($stack) - 1): ?>

                        <span class="top">
                            ← TOP
                        </span>

                    <?php endif; ?>

                </div>

            <?php

                endfor;

            }

            ?>

        </div>

    </div>


    <div class="box">

        <h2>Push Data</h2>

        <form method="POST">

            <input
                type="text"
                name="data"
                placeholder="Masukkan data"
                required
            >

            <button type="submit" name="push">
                PUSH
            </button>

        </form>

    </div>


    <div class="box">

        <h2>Pop Data</h2>

        <form method="POST">

            <button type="submit" name="pop">
                POP
            </button>

        </form>

    </div>


    <div class="info">

        <h3>Cara Kerja Stack</h3>

        <p>
            Stack menggunakan prinsip
            <strong>Last In First Out (LIFO)</strong>.
        </p>

        <p>
            Artinya data yang terakhir masuk akan
            menjadi data yang pertama keluar.
        </p>

        <pre>
Push A
Push B
Push C

Stack:

C ← keluar pertama
B
A
        </pre>

    </div>

</div>

</body>

</html>