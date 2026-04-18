<?php
require_once "User.php";

$user = new User();

if(isset($_POST['simpan'])){
    $user->create($_POST['nama'], $_FILES['file']);
    header("Location: dashboard.php");
}

if(isset($_GET['hapus'])){
    $user->delete($_GET['hapus']);
    header("Location: dashboard.php");
}

if(isset($_POST['update'])){
    $user->update($_POST['id'], $_POST['nama']);
    header("Location: dashboard.php");
}
?>