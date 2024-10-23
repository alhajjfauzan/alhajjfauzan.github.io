<?php
require "koneksi.php";

$id = $_GET["id"];
$result = mysqli_query($conn, "SELECT * FROM insect WHERE id = $id");

if ($result && mysqli_num_rows($result) > 0) {
    $insect = mysqli_fetch_assoc($result);
    $sisa_foto = 'img/'.$insect['fotho']; 
    $hapus = mysqli_query($conn, "DELETE FROM insect WHERE id = $id");

    if ($hapus) {
        if (file_exists($sisa_foto)) {
            if (unlink($sisa_foto)) {
                echo "<script>alert('file berhasil dihapus!');
                document.location.href = 'menucrud.php';</script>";
            } else {
                echo "<script>alert('File tidak ada!');document.location.href = 'menucrud.php';</script>";
            }
        } else {
            echo "<script>alert('File tidak ditemukan!');document.location.href = 'menucrud.php';</script>";
        }
    } else {
        echo "<script>alert('File gagal dihapus!');document.location.href = 'menucrud.php';</script>";
    }
} else {
    echo "<script>alert('Tidak ada data!'); document.location.href = 'menucrud.php';
    </script>";
}
?>
