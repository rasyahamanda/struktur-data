<?php

class Node
{
    public $data;
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

class LinkedList
{
    public $head = null;

    // Menambahkan node
    public function tambah($data)
    {
        $nodeBaru = new Node($data);

        if ($this->head == null) {

            $this->head = $nodeBaru;

        } else {

            $current = $this->head;

            while ($current->next != null) {
                $current = $current->next;
            }

            $current->next = $nodeBaru;
        }
    }

    // Menghapus node terakhir
    public function hapus()
    {
        if ($this->head == null) {
            return;
        }

        if ($this->head->next == null) {
            $this->head = null;
            return;
        }

        $current = $this->head;

        while ($current->next->next != null) {
            $current = $current->next;
        }

        $current->next = null;
    }
}


// Membuat Linked List
$list = new LinkedList();

$list->tambah("Node 1");
$list->tambah("Node 2");
$list->tambah("Node 3");


// Tambah data
if (isset($_POST['tambah'])) {

    $data = $_POST['data'];

    if (!empty($data)) {
        $list->tambah($data);
    }
}


// Hapus data
if (isset($_POST['hapus'])) {

    $list->hapus();
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Linked List</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <a href="index.php">← Kembali ke Menu</a>

    <h1>Struktur Data Linked List</h1>

    <p>
        Linked List terdiri dari beberapa Node yang
        saling terhubung.
    </p>


    <div class="box">

        <h2>Linked List</h2>

        <div class="linked-list">

            <?php

            $current = $list->head;
            $index = 1;

            while ($current != null):

            ?>

                <div class="node">

                    <strong>
                        Node <?php echo $index; ?>
                    </strong>

                    <br>

                    <?php echo $current->data; ?>

                </div>

                <?php if ($current->next != null): ?>

                    <div class="arrow">
                        →
                    </div>

                <?php endif; ?>

            <?php

                $current = $current->next;
                $index++;

            endwhile;

            ?>

        </div>

    </div>


    <div class="box">

        <h2>Tambah Node</h2>

        <form method="POST">

            <input
                type="text"
                name="data"
                placeholder="Masukkan data node"
                required
            >

            <button type="submit" name="tambah">
                Tambah Node
            </button>

        </form>

    </div>


    <div class="box">

        <h2>Hapus Node Terakhir</h2>

        <form method="POST">

            <button type="submit" name="hapus">
                Hapus Node
            </button>

        </form>

    </div>


    <div class="info">

        <h3>Cara Kerja Linked List</h3>

        <p>
            Setiap node memiliki data dan alamat
            yang menunjuk ke node berikutnya.
        </p>

        <pre>
Node 1 → Node 2 → Node 3 → NULL
        </pre>

    </div>

</div>

</body>

</html>