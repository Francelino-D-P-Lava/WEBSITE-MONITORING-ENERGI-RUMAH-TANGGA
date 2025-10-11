// DOM #1:
const info = document.getElementById("info"); // ambil elemen dengan id 'info'
const pesan = document.createElement("p"); 
pesan.textContent = "Gunakan energi rumah Anda dengan bijak "; 
info.appendChild(pesan); 

//  DOM #2: 
const waktu = document.getElementById("waktu");
setInterval(() => {
  const now = new Date();
  waktu.textContent = "Waktu sekarang: " + now.toLocaleTimeString();
}, 1000);

const tombol = document.getElementById("ubahTampilan");
tombol.addEventListener("click", () => {
  const judul = document.getElementById("judul");
  judul.textContent = "Selamat Datang di Sistem Energi Rumah Tangga"; 

  // ubah warna background 
  const warna = ["#d1f7d1", "#fce4ec", "#dbeafe", "#fff8e1", "#e8f5e9"];
  document.body.style.backgroundColor = warna[Math.floor(Math.random() * warna.length)];

  // tampilkan notifikasi
  tampilkanToast(" Tampilan berhasil diperbarui!");
});

// Fungsi TOAST 
function tampilkanToast(teks) {
  const toast = document.getElementById("toast");
  toast.textContent = teks;
  toast.className = "show";

  setTimeout(() => {
    toast.className = toast.className.replace("show", "");
  }, 3000);
}
