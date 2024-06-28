<?php
session_start();
include('koneksi.php');


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memeriksa apakah username dan password cocok
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($db, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header('location: index.php?p=beranda'); // Ganti dengan halaman setelah login sukses
    } else {
        echo "<script>alert('Username atau password salah. Silakan coba lagi!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container-login" style="margin-left: 20px; margin-right: 20px;">
    <h2 class="login-title">Login</h2>
    <form method="post" action="index.php?p=login">
    <table id="tabel-input">
        <tr>
			<td class="label-formulir">Username</td>
			<td class="isian-formulir"><input type="text" name="username" class="isian-formulir isian-formulir-border" required></td>
		</tr>

        <tr>
			<td class="label-formulir">Password</td>
			<td class="isian-formulir"><input type="password" name="password" class="isian-formulir isian-formulir-border" required></td>
		</tr>
        <tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="login" value="login" class="tombol"></td>
		</tr>
    </form>
    
    <p class="akun-login">Belum punya akun? <a href="index.php?p=register">Daftar disini</a></p>
    </table>
</div>
</body>
</html>
