<?php
		$nama		= $_POST['nama'];
		$nim		= $_POST['nim'];
		$jenisKel	= $_POST['jenisKel'];
		$prodi		= $_POST['prodi'];
		$fakultas	= $_POST['fakultas'];
		$asal    	= $_POST['asal'];
		$moto	    = $_POST['moto'];

			$sql = "INSERT INTO datamahasiswa (nama, nim, jenisKel, prodi, fakultas, asal, motohidup) VALUES ('$nama','$nim','$jenisKel', '$prodi', '$fakultas','$asal', '$moto')";
			$query = mysqli_query($conn, $sql);
  ?>