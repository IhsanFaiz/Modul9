<?php
require_once "koneksi.php";
if(isset($_GET['kategori'])){
    $kategori = $_GET['kategori'];
    $sql = "SELECT b.judul, b.isi
    FROM berita b
    INNER JOIN kategori k ON b.id_kategori = k.id
    WHERE k.nama = '$kategori'";
    $result = mysqli_query($conn, $sql);
    $nomor = 0;
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
        $nomor++;
        echo "judul: " . $row['judul'] . "<br>" . "isi: ". $row['isi'] . "<br> <br>";
        }
    }
    else{
        echo "<p> belum ada berita untuk kategori ini</p>";
    }
}
?>