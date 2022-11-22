<?php
    include 'connect.php';

    $query = "SELECT * FROM tbl_mahasiswa;";
    $sql = mysqli_query($conn, $query);
    $no = 0;

   
    //var_dump($result);
    
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js" ></script>
	<!-- Font -->
	<link rel="stylesheet" href="fontkuu/css/font-awesome.min.css">
	<title>haloww_pak</title>
</head>
<body>
<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
     TUGAS CRUD 
    </a>
  </div>
</nav>

<!-- Judul -->
<div class="container">
<h1>DATA MAHASISWA S1 SISTEM INFORMASI UNIVERSITAS NEGERI SURABAYA</h1>
	<figure>
      <blockquote class="blockquote">
       <p>Berisi Data Mahasiswa S1 Sistem Informasi UNESA 2022</p>
       </blockquote>
     <figcaption class="blockquote-footer">
      - Created By <cite title="Source Title"> Nadhifah Aww</cite>
  </figcaption>
</figure>
<a href="kelola.php" type="button" class="btn btn-primary mb-3"> 
	<i class="fa fa-plus-circle" aria-hidden="true"></i>
	Tambah Data 
</a>
<div class="table-responsive">
<table class="table align-middle table-bordered table-hover">
    <thead>
      <tr>
        <th><center>No.</center></th>
        <th><center>NIM </center></th>
        <th><center>Nama </center></th>
        <th><center>Jenis Kelamin</center></th>
        <th><center>Alamat</center></th>
        <th><center>Prodi</center></th>
        <th><center>Foto Mahasiswa</center></th>
        <th><center>Email</center></th>
        <th><center>Pengaturan</center></th>
      </tr>
    </thead>
    <tbody>
      <?php
        while ($result = mysqli_fetch_assoc($sql)){
      ?>
      <tr>
        <td><center>
          <?php echo ++$no; ?>
        </center></td>
        <td>
          <?php echo $result ['NIM_Mahasiswa']; ?>
        </td>
        <td>
          <?php echo $result ['Nama_Mahasiswa']; ?>
        </td>
        <td>
          <?php echo $result ['Jenis_Kelamin']; ?>
        </td>
        <td>
          <?php echo $result ['Alamat']; ?>
        </td>
        <td>
          <?php echo $result ['Prodi']; ?>
        </td>
        <td>
        	<img src="image/<?php echo $result ['Foto']; ?>" style="width: 100px;">
        </td>
        <td>
          <?php echo $result ['Email']; ?>
        </td>-
        <td>
        	<a href="kelola.php?ubah=<?php echo $result ['ID_Mahasiswa']; ?>" type="button" class="btn btn-success btn-sm"> 
        		<i class="fa fa-pencil"></i>
        	</a>
        	<a href="proses.php?hapus=<?php echo $result ['ID_Mahasiswa']; ?>" type="button" class="btn btn-danger btn-sm"> 
        		<i class="fa fa-trash"></i>
        	</a>
        </td>
      </tr>
      <?php
        }
      ?>
  </tbody>
</table>
</div>
</div>
</body>
</html>