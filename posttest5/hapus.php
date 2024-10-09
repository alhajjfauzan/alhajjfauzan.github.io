<?php
    require "koneksi.php";

    $id = $_GET["id"];

    $result = mysqli_query($conn, "DELETE FROM insect WHERE id = $id");

    if ($result) {
        echo "
        <script>
        alert('Berhasil Menghapus Data Mahasiswa!');
        document.location.href = 'menucrud.php';
        </script>
        ";
    }