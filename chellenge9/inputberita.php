<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input berita</title>
</head>
<body>
    <h1>Input Berita</h1>
    <form action="proses_inputberita.php" method = "POST">
        <label for="judul" id="judul:">Judul</label>
        <input type="text" id="judul" name="judul">
        <br>
        <label for="isiberita" id="isiberita">Isi Berita: </label>
        <textarea name="isi" id="isiberita" name="isiberita"></textarea><br>
        <label for="kategori" id="kategori">Kategori: </label>
        <select name="id_kategori" id="kategori">
            <option value=1>olahraga</option>
            <option value=2>politik</option>
        </select><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>