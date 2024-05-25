<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>tabel admin</title>
  </head>
  <body>
  <link rel="stylesheet" href="CRUD admin.css" />
  <link rel="stylesheet" href="tugas akhir.css" />
  <div class="Fcontainer">
    <nav class="navbar">
    <a href="versi admin landing page.php">halaman utama</a>
      <a href="versi admin layanan.php">layanan</a>
      <a href="versi admin pesanan.php">pemesanan</a>
      <a href="versi admin tentang kami.php">tentang kami</a>
      <a href="versi admin register.php">register</a>
      <a href="versi admin halaman login.php">login</a>
      <a href="CRUD admin.php">tabel admin</a>
    </nav>
    </div>
    <center>
    <table class="table">
      <tr>
        <th>No</th>
        <th>Username</th>
        <th>Password</th>
        <th>email</th>
        <th>Role</th>
      </tr>
      <?php

//Select Tabel User dari database

$nomor = 1;



include 'koneksi database.php';

$query_mysql = mysqli_query($mysqli, "SELECT * FROM customer ")or die (mysqli_error());

while($data = mysqli_fetch_array($query_mysql)){
  ?>

<tr>
 <td><?php echo $nomor++; ?></td>

 <td><?php echo $data['username']; ?></td>
 <td><?php echo $data['password']; ?></td>
 <td><?php echo $data['email']; ?> </td>
 <td><?php echo $data['role']; ?> </td>

<?php } ?>

</tr>

    </table>
    </center>

    <footer>
      <p>&copy; 2023 Painture. All rights reserved.</p>
        </footer>

        <style>
        footer {
          background : linear-gradient(to right,rgb(122, 0, 0), rgb(205, 10, 0));
  color: white;
  text-align: center;
  padding: 10px 0;
  position: fixed;
  bottom: 0;
  width: 100%;
  margin-top: 10px;
}
</style>
  </body>
</html>
