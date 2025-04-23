<?php
    require_once "Connection.php";
    if (!isset($_POST['judul'])) {
        echo "<p>judul tidak boleh kosong.</p>";
        exit();
    }
    if (!isset($_POST['isian'])) {
        echo "<p>isian tidak boleh kosong.</p>";
        exit();
    }
    $sql = "INSERT INTO diary(judul, isian, tanggal) VALUES ('$_POST[judul]', '$_POST[isian]', NOW())";
    if(mysqli_query($conn, $sql)){
        header("refresh:3;url=index.php");
        echo "<p>Data berhasil disimpan.</p>";
    }
    else{
        echo"<p> ups data gagal disimpan :(</p>";
    }
?>