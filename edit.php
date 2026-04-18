<?php
require_once "User.php";

$user = new User();
$data = $user->getById($_GET['id']);
?>

<link rel="stylesheet" href="style.css">

<div class="container">
<form action="process.php" method="POST" class="card">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">
    <input type="text" name="nama" value="<?= $data['nama'] ?>">
    <button name="update">Update</button>
</form>
</div>