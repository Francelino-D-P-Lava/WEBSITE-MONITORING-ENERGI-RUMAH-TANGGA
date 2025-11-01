<?php
$file_data = "../data/data.json";
$data = [];

if (file_exists($file_data)) {
  $data = json_decode(file_get_contents($file_data), true);
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Kategori Energi</title>
  <style>
    body {font-family: "Segoe UI", Arial, sans-serif; background-color: #04aa3f;
      margin: 0; padding: 0; text-align: center;}
    h2 {color: #145a2c; margin: 30px 0;}
    table {width: 80%; margin: 20px auto; border-collapse: collapse;
      background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.1);}
    th, td {padding: 12px; border-bottom: 1px solid #ddd;}
    th {background-color: #1e7c3a; color: white;}
    tr:hover {background-color: #f1f1f1;}
    img {width: 80px; border-radius: 8px;}
    a {text-decoration: none; color: white; padding: 8px 15px; border-radius: 8px;
      background-color: #1e7c3a; margin: 10px; display: inline-block;}
    a:hover {background-color: #145a2c;}
    .empty {color: white; font-size: 18px; margin-top: 50px;}
  </style>
</head>
<body>
  <h2>Daftar Kategori Energi</h2>

  <?php if (!empty($data)) : ?>
  <table>
    <tr>
      <th>No</th>
      <th>Nama Kategori</th>
      <th>Harga per kWh</th>
      <th>Deskripsi</th>
      <th>Foto</th>
    </tr>
    <?php $no = 1; foreach ($data as $item): ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= htmlspecialchars($item['kategori']) ?></td>
      <td>Rp <?= number_format($item['harga'], 0, ',', '.') ?></td>
      <td><?= htmlspecialchars($item['deskripsi']) ?></td>
      <td><img src="<?= $item['gambar'] ?>" alt="Foto"></td>
    </tr>
    <?php endforeach; ?>
  </table>
  <?php else: ?>
    <p class="empty">Belum ada data yang diinput.</p>
  <?php endif; ?>

  <a href="categories-entry.php">+ Tambah Kategori Baru</a>
</body>
</html>
