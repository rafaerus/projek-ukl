<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pemesanan</title>
</head>
<body>
<link rel="stylesheet" href="tugas akhir.css" />
    <div class="Fcontainer">
    <nav class="navbar">
    <a href="index.php">halaman utama</a>
      <a href="layanan.php">layanan</a>
      <a href="pesanan.php">pemesanan</a>
      <a href="tentang kami.php">tentang kami</a>
      <a href="register.php">register</a>
      <a href="halaman login.php">login</a>
    </nav>
    </div>

    <div class="register-container" style="text-align: center">
        <h1 style="color: rgb(244, 229, 229);">Halaman Pemesanan</h1>
        <form action="pesanan action.php" method="post">
            <div class="input-group">
                <label for="pemesan">username</label>
                <br>
                <input type="text"  id="pemesan" name="pemesan" required>
            </div>

            <div class="input-group">
                <label for="harga"><br>harga <br> (min 20k & mempengaruhi lama pengerjaan )</label>
                <br>
                <input type="text" id="harga"  name="harga" required>
            </div>

            <div class="input-group">
                
            </div>
            <br>
            
            
            <style>
            .input-group [type="password"]{
        padding: 10px;
        margin-top: 5px;
        width: 250px;
       
            }  
            .input-group [type="text"]{
        padding: 10px; width: 250px;
        margin-top: 5px;
        width: 250px;
            }   
            </style>

            <select name="jenis"> 
                <option value="ilustrasi custom">ilustrasi custom</option>
                <option value="fanart">fanart</option>
                <option value="barter">barter</option>
            </select>
            <input type="submit" name="submit">
        </form>
    </div>
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