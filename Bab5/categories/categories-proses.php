<?php
if (isset($_POST['simpan'])) {
  $kategori = $_POST['categories'];
  $harga = $_POST['price'];
  $deskripsi = $_POST['description'];
  $gambar = $_FILES['photo']['name'];

  // Buat folder upload jika belum ada
  $folder = "../uploads/";
  if (!is_dir($folder)) mkdir($folder);
  $path_gambar = $folder . $gambar;

  // Pindahkan file upload ke folder
  if (move_uploaded_file($_FILES['photo']['tmp_name'], $path_gambar)) {
    $status = "Foto berhasil diupload!";
  } else {
    $status = "Gagal mengupload foto!";
  }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Hasil Input Kategori Energi</title>
  <style>
    body {
      font-family: "Segoe UI", Arial, sans-serif;
      background-color: #04aa3f;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .card {
      background-color: #fff;
      padding: 25px 40px;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
      text-align: center;
      width: 400px;
      animation: fadeIn 0.6s ease;
    }

    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(-10px);}
      to {opacity: 1; transform: translateY(0);}
    }

    h2 {
      color: #145a2c;
      margin-bottom: 20px;
    }

    .data {
      text-align: left;
      background: #f7faf8;
      padding: 15px;
      border-radius: 10px;
      line-height: 1.7;
      margin-bottom: 20px;
    }

    .data b {
      color: #145a2c;
    }

    .foto {
      margin: 15px 0;
    }

    .foto img {
      width: 200px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.2);
    }

    .status {
      color: #04aa3f;
      font-weight: bold;
      margin-top: 8px;
    }

    .btn-container {
      margin-top: 20px;
    }

    .btn {
      display: inline-block;
      padding: 10px 20px;
      border-radius: 8px;
      text-decoration: none;
      color: white;
      font-weight: bold;
      margin: 0 8px;
    }

    .btn-green {
      background-color: #1e7c3a;
    }

    .btn-blue {
      background-color: #007bff;
    }

    .btn-green:hover {
      background-color: #145a2c;
    }

    .btn-blue:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="card">
    <h2>Hasil Input Kategori Energi</h2>
    <div class="data">
      <p><b>Nama Kategori:</b> <?= htmlspecialchars($kategori) ?></p>
      <p><b>Harga per kWh:</b> Rp <?= number_format($harga, 0, ',', '.') ?></p>
      <p><b>Deskripsi:</b> <?= htmlspecialchars($deskripsi) ?></p>
    </div>

    <div class="foto">
      <?php if (!empty($gambar) && file_exists($path_gambar)): ?>
        <img src="<?= $path_gambar ?>" alt="Foto Kategori Energi">
        <p class="status"><?= $status ?></p>
      <?php else: ?>
        <p style="color:red;"><?= $status ?></p>
      <?php endif; ?>
    </div>

    <div class="btn-container">
      <a href="categories-entry.php" class="btn btn-green">Input Baru</a>
      <a href="categories.php" class="btn btn-blue">Lihat Data</a>
    </div>
  </div>
</body>
</html>
