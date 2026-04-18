<?php
require_once "Auth.php";
require_once "User.php";

Auth::cek();

$user = new User();
$data = $user->getAll();
?>

<link rel="stylesheet" href="style.css">

<div class="container">
<h2>🌿 Dashboard Greendayeuh</h2>

<a href="logout.php" class="logout">Logout</a>

<form action="process.php" method="POST" enctype="multipart/form-data" class="card">
    <input type="text" name="nama" placeholder="Nama" required>
    <input type="file" name="file" required>
    <button name="simpan">Simpan</button>
</form>

<table>
<tr>
    <th>Nama</th>
    <th>File</th>
    <th>Aksi</th>
</tr>

<?php while($row = $data->fetch_assoc()) { ?>
<tr>
    <td><?= $row['nama'] ?></td>
    <td><img src="upload/<?= $row['file'] ?>" width="80"></td>
    <td>
        <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
        <a href="process.php?hapus=<?= $row['id'] ?>">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>
</div>