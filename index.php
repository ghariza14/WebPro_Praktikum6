<?php
require_once "Auth.php";

if(isset($_POST['login'])){
    $auth = new Auth();
    $auth->login($_POST['user'], $_POST['pass']);
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">
<form method="POST" class="card">
    <h2>🌿 Login Greendayeuh</h2>
    <input type="text" name="user" placeholder="Username" required>
    <input type="password" name="pass" placeholder="Password" required>
    <button name="login">Login</button>
    <p>Belum punya akun? <a href="register.php">Daftar</a></p>
</form>
</div>