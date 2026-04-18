<?php
require_once "Auth.php";

if(isset($_POST['register'])){
    $auth = new Auth();
    $auth->register($_POST['user'], $_POST['pass']);
    header("Location: index.php");
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">
<form method="POST" class="card">
    <h2>🌿 Register</h2>
    <input type="text" name="user" placeholder="Username" required>
    <input type="password" name="pass" placeholder="Password" required>
    <button name="register">Daftar</button>
</form>
</div>