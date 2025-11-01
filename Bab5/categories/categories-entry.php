<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Entry Kategori</title>
  <style>
    body {font-family: Arial; background-color: #0d0731ff; text-align: center;}
    .container {background: white; width: 400px; margin: 50px auto; padding: 20px; border-radius: 10px;}
    input, textarea {width: 90%; padding: 8px; margin: 5px;}
    button {background: #3498db; color: white; border: none; padding: 10px; cursor: pointer; border-radius: 5px;}
  </style>
</head>
<body>
  <div class="container">
    <h2>Tambah Kategori Produk</h2>

    <!-- Form kirim ke file categories-proses.php -->
    <form action="categories-proses.php" method="post" enctype="multipart/form-data">
      <input type="text" name="categories" placeholder="Nama Kategori" required><br>
      <input type="number" name="price" placeholder="Harga per kWh" required><br>
      <textarea name="description" placeholder="Deskripsi Produk" required></textarea><br>
      <input type="file" name="photo" accept="image/*" required><br>
      <button type="submit" name="simpan">Simpan</button>
    </form>

    <br><a href="categories.php">Lihat Daftar Kategori</a>
  </div>
</body>
</html>
