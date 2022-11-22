<?php
if(isset($_POST['Pengaturan'])){
	if($_POST['Pengaturan'] == "add"){

		$NIM = $_POST['NIM_Mahasiswa'];
		$Nama = $_POST['Nama_Mahasiswa'];
		$Jenis_Kelamin = $_POST['Jenis_Kelamin'];
		$Alamat = $_POST['Alamat'];
		$Prodi = $_POST['Prodi'];
		$Foto= "image 3.jpg;
		$Email = $_POST['Email'];

		echo $NIM. " | " .$Nama. " | " .$Jenis_Kelamin. " | " .$Alamat. " | " .$Prodi. " | " .$Foto. " | " .$Email;
		echo "<br>Tambah Data <a href='index.php'>[home]</a>";
	} else if($_POST['Pengaturan'] == "edit"){
		echo "Edit Data <a href='index.php'>[home]</a>";
	}
  }
  if (isset($_GET['hapus'])){
  	echo "Hapus Data <a href='index.php'>[home]</a>";
  }
?>