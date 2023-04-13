<?php
  session_start();

  // redirect ke halaman index jika data belum disimpan di session
  if (!isset($_SESSION['nama']) || !isset($_SESSION['jenis']) || !isset($_SESSION['alamat'] )) {
    header('Location: baru.php');
    exit();
  }

  $nama = $_SESSION['nama'];
  $jenis = $_SESSION['jenis'];
  $alamat = $_SESSION['alamat'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Profil</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    body {
        font-family: sans-serif;
        background-color: gray;
    }

    .container {
      place-items: center;
      height: 300px;
      width: 500px;
      border-radius: 15px;
      box-shadow: 3px 3px 10px 0px #000;
      padding: 30px;
    }

  </style>
</head>
<body>
  <div class="container mt-5">
    <h3>Biodata</h3>
    <table class="table">
      <tr>
        <td>Nama</td>
        <td><?php echo $nama ?></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td><?php echo $jenis ?></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><?php echo $alamat ?></td>
      </tr>
    </table>
    <a href="baru.php" button type="submit" name="submit" class="btn btn-danger">Kembali</a>
  </div>
</body>
</html>
