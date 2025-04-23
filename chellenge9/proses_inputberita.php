<?php
    require_once "koneksi.php";
    if (!isset($_POST['judul'])) {
        echo "<p>judul tidak boleh kosong.</p>";
        exit();
    }
    if (!isset($_POST['isi'])) {
        echo "<p>isian tidak boleh kosong.</p>";
        exit();
    }
    $sql = "INSERT INTO berita(judul, isi, id_kategori) VALUES ('$_POST[judul]', '$_POST[isi]', '$_POST[id_kategori]')";
    if(mysqli_query($conn, $sql)){
        header("refresh:3;url=index.php");
        echo "<p>Data berhasil disimpan.</p>";
    }
    else{
        echo"<p> ups data gagal disimpan :(</p>";
    }
?>