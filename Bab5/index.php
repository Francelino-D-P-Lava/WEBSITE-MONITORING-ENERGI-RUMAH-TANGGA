<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Monitoring Energi Rumah Tangga</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #eaf8ec;
      margin: 0;
      padding: 40px;
      transition: background-color 0.5s ease;
    }

    h1 {
      color: #145a2c;
    }

    button {
      background-color: #1e7c3a;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 8px;
      cursor: pointer;
      margin-top: 15px;
    }

    button:hover {
      background-color: #145a2c;
    }

    /* Toast Style */
    #toast {
      visibility: hidden;
      min-width: 250px;
      margin-left: -125px;
      background-color: #145a2c;
      color: #fff;
      text-align: center;
      border-radius: 8px;
      padding: 12px;
      position: fixed;
      z-index: 1;
      left: 50%;
      bottom: 30px;
      font-size: 15px;
      transition: opacity 0.5s, bottom 0.5s;
      opacity: 0;
    }

    #toast.show {
      visibility: visible;
      opacity: 1;
      bottom: 50px;
    }
  </style>
</head>

<body align="center">
  <!-- DOM #3 akan mengubah teks di bawah ini -->
  <h1 id="judul">Selamat Datang di Website Monitoring Energi Rumah Tangga</h1>

  <img src="login.jpg" alt="Monitoring Energi" width="300"><br><br>

  <!-- DOM #1 menambahkan teks ke dalam div ini -->
  <div id="info"></div>

  <!-- DOM #2 menampilkan waktu -->
  <div id="waktu"></div>

  <button id="ubahTampilan">Ubah Tampilan</button><br><br>

  <a href="login.html">Login</a> | 
  <a href="register.html">Register</a>
  <a href="categories/categories-entry.php">Tambah Kategori</a> |
 <a href="categories/categories.php">Lihat Daftar Kategori</a>

  <!-- Tempat munculnya TOAST -->
  <div id="toast"></div>

  <script>
    // Inisialisasi DOM dan Variabel
    const btnUbah = document.getElementById("ubahTampilan");
    const infoDiv = document.getElementById("info");
    const waktuDiv = document.getElementById("waktu");
    const judul = document.getElementById("judul");
    const toast = document.getElementById("toast");

    // POPUP BOXES
    alert("Selamat datang di Sistem Monitoring Energi Rumah Tangga!");
    let namaPengguna = prompt("Masukkan nama Anda untuk personalisasi:");
    if (!namaPengguna) namaPengguna = "Pengguna";

    // WEB STORAGE
    localStorage.setItem("nama", namaPengguna);
    const namaTersimpan = localStorage.getItem("nama");

    // Tampilkan ke halaman
    infoDiv.innerHTML = `<h3>Halo, ${namaTersimpan}! Selamat memantau penggunaan energi rumah tangga Anda.</h3>`;


    // EVENT HANDLER

    // EVENT 1: Saat tombol diklik, ubah warna background
    btnUbah.addEventListener("click", () => {
      document.body.style.backgroundColor =
        document.body.style.backgroundColor === "rgb(234, 248, 236)"
          ? "#d0f0d0"
          : "#eaf8ec";
      showToast("Tampilan berhasil diubah!");
    });

    // EVENT 2: Menampilkan waktu setiap detik
    window.addEventListener("load", () => {
      setInterval(() => {
        const now = new Date();
        waktuDiv.textContent = "Waktu sekarang: " + now.toLocaleTimeString();
      }, 1000);
    });

    // EVENT 3
    judul.addEventListener("mouseover", () => {
      judul.textContent = "Pantau Energi Anda Secara Real-Time ⚡";
    });
    judul.addEventListener("mouseout", () => {
      judul.textContent = "Selamat Datang di Website Monitoring Energi Rumah Tangga";
    });

    async function ambilDataEnergi() {
      try {

        const response = await fetch("https://jsonplaceholder.typicode.com/posts/1");
        const data = await response.json();

        // Promise diselesaikan di sini
        return new Promise((resolve) => {
          setTimeout(() => {
            resolve(data);
          }, 1000);
        });
      } catch (error) {
        console.error("Gagal mengambil data:", error);
      }
    }

    // Panggil fungsi Asynchronous
    ambilDataEnergi().then((data) => {
      console.log("Data Energi (contoh fetch):", data);
      showToast("Data energi berhasil dimuat!");
    });


    // TOAST
    function showToast(text) {
      toast.textContent = text;
      toast.className = "show";
      setTimeout(() => {
        toast.className = toast.className.replace("show", "");
      }, 3000);
    }
  </script>
</body>
</html>
