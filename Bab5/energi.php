<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Jenis Energi</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .sidebar {
      width: 220px;
      height: 100vh;
      background-color: #1e7c3a; /* hijau tua */
      color: white;
      position: fixed;
      top: 0;
      left: 0;
      padding: 20px 10px;
    }

    .sidebar h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .sidebar a {
      display: block;
      padding: 10px;
      color: white;
      text-decoration: none;
      margin: 5px 0;
      border-radius: 5px;
      transition: 0.3s;
    }

    .sidebar a:hover {
      background-color: #145a2c;
    }

    /* Konten utama */
    .content {
      margin-left: 240px;
      padding: 40px;
      background-color: #08e452; /* hijau terang */
      min-height: 100vh;
    }

    .content h1 {
      color: #2c3e50;
      text-align: center;
      margin-bottom: 20px;
    }

    /* Form input */
    form {
      text-align: center;
      margin-bottom: 20px;
    }

    form input {
      padding: 8px 12px;
      margin: 5px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }

    form button {
      background-color: #1e7c3a;
      color: white;
      border: none;
      border-radius: 6px;
      padding: 8px 14px;
      cursor: pointer;
      transition: 0.3s;
    }

    form button:hover {
      background-color: #145a2c;
    }

    /* Tabel */
    .table-container {
      overflow-x: auto; /* biar tabel bisa digeser di HP */
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: white;
      box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
      min-width: 400px; /* jangan terlalu kecil */
    }

    th, td {
      border: 1px solid #ccc;
      padding: 12px;
      text-align: center;
    }

    th {
      background-color: #1e7c3a;
      color: white;
    }

    .aksi {
      display: flex;
      justify-content: center;
      gap: 8px;
      flex-wrap: wrap;
    }

    .aksi button {
      padding: 6px 14px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 13px;
      color: white;
      transition: 0.3s;
    }

    .edit {
      background-color: #3498db;
    }
    .edit:hover {
      background-color: #217dbb;
    }

    .hapus {
      background-color: #e74c3c;
    }
    .hapus:hover {
      background-color: #c0392b;
    }

    /* 
       RESPONSIVE UNTUK HP
        */
    @media screen and (max-width: 768px) {
      .sidebar {
        width: 100%;
        height: auto;
        position: relative;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        padding: 10px;
      }

      .sidebar h2 {
        display: none; 
      }

      .sidebar a {
        display: inline-block;
        margin: 0;
        padding: 10px 5px;
        font-size: 14px;
      }

      .content {
        margin-left: 0;
        padding: 20px;
      }

      form input {
        width: 90%;
        margin-bottom: 10px;
      }

      table {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>

  <div class="sidebar">
    <h2>MENU HOME</h2>
    <a href="dashboard.html">Dashboard</a>
    <a href="energi.html">Jenis Energi</a>
    <a href="penggunaan.html">Penggunaan Energi</a>
    <a href="index.html">Logout</a>
  </div>

  <div class="content">
    <h1>Data Jenis Energi</h1>

    <form onsubmit="event.preventDefault(); tambahEnergi();">
      <input type="text" id="namaEnergi" placeholder="Nama Energi (misal: Listrik)" required>
      <button type="submit">Tambah</button>
    </form>

    <div class="table-container">
      <table id="tabelEnergi">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama Energi</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td><td>Listrik</td>
            <td class="aksi">
              <button class="edit">Edit</button>
              <button class="hapus" onclick="hapusBaris(this)">Hapus</button>
            </td>
          </tr>
          <tr>
            <td>2</td><td>Air</td>
            <td class="aksi">
              <button class="edit">Edit</button>
              <button class="hapus" onclick="hapusBaris(this)">Hapus</button>
            </td>
          </tr>
          <tr>
            <td>3</td><td>Gas</td>
            <td class="aksi">
              <button class="edit">Edit</button>
              <button class="hapus" onclick="hapusBaris(this)">Hapus</button>
            </td>
          </tr>
          <tr>
            <td>4</td><td>Nuklir</td>
            <td class="aksi">
              <button class="edit">Edit</button>
              <button class="hapus" onclick="hapusBaris(this)">Hapus</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <script>
    function tambahEnergi() {
      let nama = document.getElementById("namaEnergi").value.trim();
      if (nama === "") {
        alert("Nama energi tidak boleh kosong!");
        return;
      }

      let tabel = document.getElementById("tabelEnergi").getElementsByTagName("tbody")[0];
      let barisBaru = tabel.insertRow();
      let id = tabel.rows.length;
      barisBaru.insertCell(0).innerHTML = id;
      barisBaru.insertCell(1).innerHTML = nama;
      barisBaru.insertCell(2).innerHTML = `
        <div class="aksi">
          <button class="edit">Edit</button>
          <button class="hapus" onclick="hapusBaris(this)">Hapus</button>
        </div>
      `;
      document.getElementById("namaEnergi").value = "";
    }

    function hapusBaris(button) {
      let row = button.closest("tr");
      row.parentNode.removeChild(row);

      let tabel = document.getElementById("tabelEnergi").getElementsByTagName("tbody")[0];
      for (let i = 0; i < tabel.rows.length; i++) {
        tabel.rows[i].cells[0].innerHTML = i + 1;
      }
    }
  </script>

</body>
</html>
