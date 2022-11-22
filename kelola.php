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
<nav class="navbar bg-light mb-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
     TUGAS CRUD 
    </a>
  </div>
</nav>
<div class="container">
  <form method="POST" action="proses.php">
    <div class="mb-3 row">
    <label for="NIM" class="col-sm-2 col-form-label">NIM</label>
    <div class="col-sm-10">
      <input type="text" name="NIM_Mahasiswa" class="form-control" id="NIM" placeholder="ex : 210512100">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" name="Nama_Mahasiswa" class="form-control" id="Nama" placeholder="ex : Misykah">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="Jenis Kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-10">
      <select id="Jenis Kelamin" name="Jenis_Kelamin" class="form-select" >
       <option selected>Jenis Kelamin</option>
       <option value="Pria">Pria</option>
       <option value="Wanita">Wanita</option>
      </select>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="Alamat" name="Alamat" rows="3"></textarea>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="Prodi" class="col-sm-2 col-form-label">Prodi</label>
    <div class="col-sm-10">
      <input type="text" name="Prodi" class="form-control" id="Prodi"  placeholder="ex : Sistem Informasi">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="foto" class="col-sm-2 col-form-label">Foto Mahasiswa</label>
    <div class="col-sm-10">
      <input class="form-control" type="file" id="foto" name="Foto">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" name="Email" class="form-control" id="email"  placeholder="ex : aaaa.21000@mhs.unesa.ac.id">
    </div>
  </div>

  <div class="mb-3 row mt-8">
    <div class="col">
      <?php
        if (isset($_GET['ubah'])) {

      ?>
      <botton type="submit" name="Pengaturan" value="edit" class="btn btn-primary">
        <i class="fa fa-floppy-o" aria-hidden="true"></i>
      Simpan Perubahan
      </botton>
      <?php
        } else {
      ?>
      <botton tye="submit" name="Pengaturan" value="add" class="btn btn-primary">
        <i class="fa fa-floppy-o" aria-hidden="true"></i>
      Tambahkan
      </botton>
      <?php
        } 
      ?>
      <a href="index.php" type="button" class="btn btn-danger">
        <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
      Batal
      </a>
    </div>
  </div>
  </form>
</div>
</body>
</html>