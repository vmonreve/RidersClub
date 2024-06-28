<?php
include('koneksi.php');

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk memasukkan data pengguna baru ke dalam database
    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    $result = mysqli_query($db, $query);

    if ($result) {
        echo "<script>alert('Registrasi berhasil. Silakan login!');</script>";
    } else {
        echo "<script>alert('Registrasi gagal. Silakan coba lagi!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<div class="container-login" style="margin-left: 20px; margin-right: 20px;">
    <h2 class="login-title">Register</h2>
    <form method="post" action="index.php?p=register">
    <table id="tabel-input">
        <tr>
			<td class="label-formulir">Username</td>
			<td class="isian-formulir"><input type="text" name="username" class="isian-formulir isian-formulir-border" required></td>
		</tr>   
        <tr>
			<td class="label-formulir">Email</td>
			<td class="isian-formulir"><input type="email" name="email" class="isian-formulir isian-formulir-border" required></td>
		</tr>
        <tr>
			<td class="label-formulir">Password</td>
			<td class="isian-formulir"><input type="password" name="password" class="isian-formulir isian-formulir-border" required></td>
		</tr>
        
    </form>
        <tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="register" value="register" class="tombol"></td>
		</tr>
    <p class="akun-register">Sudah punya akun? <a href="index.php?p=login">Login disini</a></p>
    </table>
</div>
</body>
</html>
