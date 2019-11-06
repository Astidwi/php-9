<?php

include 'koneksi.php';

 $submit =isset($_POST['Siswa_submit'])?$_POST["Siswa_submit"]:"";
	if ($submit) {
	 	$sql ="
	 	   INSERT INTO siswa VALUES
	 	   (
	 	   	NULL,
	 	   	'".$_POST["nis"]."',
	 	   	'".$_POST["nama_lengkap"]."',
	 	   	'".$_POST["jk"]."',
	 	   	'".$_POST["tmp_lahir"]."',
	 	   	'".$_POST["tgl_lahir"]."',
	 	   	'".$_POST["alamat"]."',
	 	   	'".$_POST["no_hp"]."',
	 	   	NOW()
	 	   );
	 	   ";

	 	$result = $db->query($sql);
	 	if($result){
	 		echo "
	 		<script>
	 			alert('Data berhasil ditambahkan !');
	 			window.location = 'index.php';
	 		</script>
	 		";
	 	}
	 	else{
	 		echo "
	 		<script>
	 			alert('Data gagal ditambahkan !');
	 			window.location = 'index.php';
	 		</script>
	 		";
	 	}
	}
?>

<div class="container">
<h1>Tambah Data Siswa XI RPL 1</h1>

<form action="siswa_tambah.php" method="POST">
<div class="form-group">
	<label>NIS</label>
	<input class="form-control" type="text" name="nis" required="required"/>
</div>

<div class="form-group">
	<label>Nama Lengkap</label>
	<input class="form-control" type="text" name="nama_lengkap" required="required"/>
</div>

<div class="form-group">
	<label>JK</label>
	<select name="jk">
		<option value="">- Pilih Jenis Kelamin -</option>
		<option value="L">Laki-Laki </option>
		<option value="P">Perempuan</option>
		<option value="-">Lainnya</option>
	</select>
</div>

<div class="form-group">
	<label>Tempat Lahir</label>
	<input class="form-control" type="text" name="tmp_lahir" required="required">
</div>

<div class="form-group">
	<label>Tanggal Lahir</label>
	<input class="form-control" type="text" name="tgl_lahir" required="required" placeholder="YYYY-MM-DD">
</div>

<div class="form-group">
	<label>Alamat</label>
	<textarea class="form-control" name="alamat"></textarea>
</div>

<div class="form-group">
	<label>Nomor HP</label>
	<input class="form-control" type="text" name="no_hp" required="required">
</div>

<input class="btn btn-primary" type="submit" name="Siswa_submit" value="Simpan">
</form>