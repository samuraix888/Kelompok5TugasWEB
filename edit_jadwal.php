<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Bootstrap Sidebar Layout</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css'>
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <!-- partial:index.partial.html -->
  <div id="viewport">
    <!-- Sidebar -->
    <div id="sidebar">
      <header>
        <a href="#">Motor Pro</a>
      </header>
      <ul class="nav">
        <li>
          <a href="index_jadwal.php">
            <i class="zmdi zmdi-view-dashboard"></i> Dashboard
          </a>
        </li>
        <li>
          <a href="index_jadwal.php">
            <i class="zmdi zmdi-link"></i> Pengumuman
          </a>
        </li>
        <li>
          <a href="index_jadwal.php">
            <i class="zmdi zmdi-widgets"></i> Overview
          </a>
        </li>
        <li>
          <a href="input_jadwal.php">
            <i class="zmdi zmdi-calendar"></i> Jadwal Pelajaran
          </a>
        </li>
        <li>
          <a href="index_jadwal.php">
            <i class="zmdi zmdi-info-outline"></i> About
          </a>
        </li>
        <li>
          <a href="index_jadwal.php">
            <i class="zmdi zmdi-settings"></i> Services
          </a>
        </li>
        <li>
          <a href="index_jadwal.php">
            <i class="zmdi zmdi-comment-more"></i> Contact
          </a>
        </li>
      </ul>
    </div>
    <!-- Content -->
    <div id="content">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="#"><i class="zmdi zmdi-notifications text-danger"></i>
              </a>
            </li>
            <li><a>Admin = Dimas F </a></li>
            <li><a href="#">Logout</a></li>

          </ul>
        </div>
      </nav>
     
        <div class="eco">

          <a href="input_jadwal.php">Lihat Semua Data</a>

          <br />
          <h3>Edit data</h3>

          <?php
          include "koneksi_jadwal.php";
          $id = $_GET['id'];
          $query_mysql = mysqli_query($host, "SELECT * FROM user WHERE id='$id'") or die(mysqli_error($host));
          $nomor = 1;
          while ($data = mysqli_fetch_array($query_mysql)) {
            ?>
            <form action="update_jadwal.php" method="post">
              <table>

                <tr>
                  <td>Kelas</td>
                  <td> <select class="form-control" name="kode_kelas">
                      <option value="10 ipa 1">10 ipa 1</option>
                      <option value="10 ipa 2">10 ipa 2</option>
                      <option value="10 bahasa 1">10 bahasa 1</option>
                      <option value="10 bahasa 2">10 bahasa 2</option>
                      <option value="10 bahasa 3">10 bahasa 3</option>
                      <option value="10 ips 1">10 ips 1</option>
                      <option value="11 ipa 1">11 ipa 1</option>
                      <option value="11 ipa 2">11 ipa 2</option>
                      <option value="11 ips 1">11 ips 1</option>
                      <option value="11 ips 2">11 ips 2</option>
                      <option value="12 ipa 1">12 ipa 1</option>
                      <option value="12 ipa 2">12 ipa 2</option>
                      <option value="12 ipa 3">12 ipa 3</option>
                      <option value="12 ipa 4">12 ipa 4</option>
                      <option value="12 ips 1">12 ips 1</option>
                      <option value="12 ips 2">12 ips 2</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>Semester</td>
                  <td> <select class="form-control" name="semester">
                      <option value="genap">genap</option>
                      <option value="ganjil">ganjil</option>
                    </select>
                  </td>

                </tr>
                <tr>

                  <td>Tahun Ajaran</td>
                  <td> <select class="form-control" name="tahun_ajaran">
                      <option value="2019/2020">2019/2020</option>
                      <option value="2020/2021">2020/2021</option>
                    </select>
                  </td>



                </tr>
                <tr>
                  <td>Unggah Jadwal</td>
                  <td>
                    <!-- <form action="aksi.php" method="post" enctype="multipart/form-data"> -->
                    <input type="file" name="file">
                    <!-- <input type="submit" name="upload" value="Upload"></td> -->
                </tr>
                <tr>
                  <td></td>
                  <td><input type="submit" value="Simpan"></td>
                </tr>

              </table>
            </form>
        </div>
      
    </div>
  </div>
  <!-- partial -->
<?php }
?>
</body>

</html>