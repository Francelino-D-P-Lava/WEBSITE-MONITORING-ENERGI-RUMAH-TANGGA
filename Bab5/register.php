<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>Halaman Register</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(120deg, hsl(150, 11%, 96%), #f8faf8);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .register-box {
      background-color: white;
      padding: 30px 40px;
      border-radius: 12px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.15);
      width: 100%;             
      max-width: 360px;        
      box-sizing: border-box;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #1e7c3a;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    td {
      padding: 8px;
      font-size: 14px;
      color: #333;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
      transition: border-color 0.3s;
      box-sizing: border-box;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="password"]:focus {
      border-color: #1e7c3a;
      outline: none;
      background-color: #f0fff4;
    }

    .button-group {
      text-align: center;
      padding-top: 12px;
    }

    input[type="submit"],
    input[type="reset"] {
      background-color: #1e7c3a;
      color: white;
      border: none;
      padding: 8px 18px;
      margin: 5px;
      border-radius: 6px;
      cursor: pointer;
      font-size: 14px;
      transition: background-color 0.3s;
    }

    input[type="submit"]:hover,
    input[type="reset"]:hover {
      background-color: #145a2c;
    }

    .login-link {
      text-align: center;
      margin-top: 15px;
      font-size: 13px;
    }

    .login-link a {
      color: #1e7c3a;
      text-decoration: none;
    }

    .login-link a:hover {
      text-decoration: underline;
    }

    @media (max-width: 480px) {
      td {
        display: block;
        width: 100%;
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

  <div class="register-box">
    <h2>Form Register</h2>
    <form id="registerForm">
      <table>
        <tr>
          <td>Nama Lengkap:</td>
          <td><input type="text" id="nama" required></td>
        </tr>
        <tr>
          <td>Username:</td>
          <td><input type="text" id="username" required></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input type="email" id="email" required></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="password" id="password" required></td>
        </tr>
        <tr>
          <td>Konfirmasi:</td>
          <td><input type="password" id="konfirmasi_password" required></td>
        </tr>
      </table>

      <div class="button-group">
        <input type="submit" value="Register">
        <input type="reset" value="Reset">
      </div>
    </form>

    <div class="login-link">
      Sudah punya akun? <a href="login.html">Login di sini</a>
    </div>
  </div>

  <script>
    // INISIALISASI EVENT, STORAGE, PROMISE, DAN FETCH 

    const form = document.getElementById('registerForm');
    const inputs = document.querySelectorAll('input');

    // EVENT #1
    inputs.forEach(input => {
      input.addEventListener('focus', () => {
        console.log(`Fokus pada input: ${input.id}`);
      });
    });

    // EVENT #2
    form.addEventListener('reset', (e) => {
      const yakin = confirm('Apakah Anda yakin ingin mereset data?');
      if (!yakin) e.preventDefault();
    });

    // EVENT #3
    form.addEventListener('submit', async (e) => {
      e.preventDefault();

      // Ambil data dari form
      const data = {
        nama: document.getElementById('nama').value,
        username: document.getElementById('username').value,
        email: document.getElementById('email').value,
        password: document.getElementById('password').value
      };

      // Simpan ke Web Storage
      localStorage.setItem('dataRegister', JSON.stringify(data));

      alert('Data berhasil disimpan ke localStorage!');

      // untuk validasi password
      const validasi = new Promise((resolve, reject) => {
        if (document.getElementById('password').value === document.getElementById('konfirmasi_password').value) {
          resolve('Password cocok!');
        } else {
          reject('Password tidak cocok!');
        }
      });

      try {
        const hasil = await validasi;
        console.log(hasil);

        const response = await fetch('https://jsonplaceholder.typicode.com/posts', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(data)
        });

        const result = await response.json();
        console.log('Data terkirim:', result);

        alert('Registrasi berhasil! Data dikirim ke server.');

        window.location.href = 'login.html';
      } 
      catch (error) {
        alert(error);
      }
    });
  </script>

</body>
</html>
