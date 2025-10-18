<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f9;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      transition: background-color 0.5s ease;
    }

    .login-container {
      background: white;
      padding: 30px 25px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
      text-align: center;
      width: 100%;
      max-width: 350px;
      box-sizing: border-box;
    }

    h2 {
      margin-bottom: 20px;
      color: #2c3e50;
    }

    table {
      margin: 0 auto;
      width: 100%;
    }

    td {
      padding: 10px;
      text-align: left;
      font-size: 14px;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      box-sizing: border-box;
      font-size: 14px;
    }

    input[type="submit"],
    input[type="reset"] {
      background-color: hsl(138, 61%, 30%);
      color: white;
      border: none;
      padding: 10px 20px;
      margin: 10px 5px;
      border-radius: 6px;
      cursor: pointer;
      font-size: 14px;
      transition: 0.3s;
    }

    input[type="submit"]:hover {
      background-color: #145a2c;
    }

    input[type="reset"]:hover {
      background-color: #c0392b;
    }

    p {
      margin-top: 15px;
      font-size: 14px;
    }

    a {
      color: #3498db;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }

    @media (max-width: 480px) {
      body {
        padding: 15px;
      }
      .login-container {
        padding: 20px;
      }
      td {
        display: block;
        width: 100%;
        text-align: left;
        font-size: 13px;
      }
      td input {
        margin-top: 5px;
      }
      input[type="submit"],
      input[type="reset"] {
        width: 100%;
        margin: 5px 0;
      }
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form id="loginForm" method="post">
      <table>
        <tr>
          <td>Username:</td>
          <td><input type="text" id="username" name="username" required></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="password" id="password" name="password" required></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="submit" value="Login">
            <input type="reset" value="Reset">
          </td>
        </tr>
      </table>
    </form>
    <p>Belum punya akun? <a href="register.html">Register di sini</a></p>
  </div>

  <script>
    // Inisialisasi DOM dan Variabel
    const formLogin = document.getElementById("loginForm");
    const usernameField = document.getElementById("username");
    const passwordField = document.getElementById("password");

    // POPUP BOXES
    alert("Selamat datang di halaman Login!");
    const konfirmasi = confirm("Apakah Anda ingin melanjutkan ke halaman login?");
    if (!konfirmasi) {
      document.body.innerHTML = "<h2 align='center'>Login dibatalkan oleh pengguna.</h2>";
      throw new Error("Login dibatalkan");
    }

    // EVENT DOM

    // EVENT 1
    window.addEventListener("load", () => {
      document.body.style.backgroundColor = "#eaf8ec";
    });

    // EVENT 2
    usernameField.addEventListener("input", () => {
      localStorage.setItem("username_temp", usernameField.value);
    });

    // EVENT 3
    formLogin.addEventListener("submit", (e) => {
      e.preventDefault();

      const username = usernameField.value.trim();
      const password = passwordField.value.trim();

      if (username === "" || password === "") {
        alert("Username dan Password wajib diisi!");
        return;
      }

      // Simpan data login sementara ke Web Storage
      localStorage.setItem("username", username);
      localStorage.setItem("password", password);

      // Jalankan proses login asynchronous
      prosesLogin(username, password);
    });

    // ASYNCHRONOUS + PROMISE + FETCH
    async function prosesLogin(username, password) {
      try {
        const dataLogin = await fetch("https://jsonplaceholder.typicode.com/users/1");
        const user = await dataLogin.json();

        return new Promise((resolve) => {
          setTimeout(() => {
            if (password.length >= 4) {
              resolve(`Login berhasil! Selamat datang, ${username}`);
            } else {
              resolve("Login gagal! Password terlalu pendek.");
            }
          }, 1500);
        })
        .then((hasil) => {
          alert(hasil);
          if (hasil.includes("berhasil")) {
            window.location.href = "index.html";
          }
        });

      } catch (error) {
        console.error("Terjadi kesalahan:", error);
        alert("Terjadi kesalahan saat proses login.");
      }
    }

    // Inisialisasi tambahan
    window.addEventListener("load", () => {
      const savedUser = localStorage.getItem("username_temp");
      if (savedUser) {
        usernameField.value = savedUser;
      }
    });
  </script>
</body>
</html>
