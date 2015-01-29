<?php
	include("koneksi.php");
	
	if(isset($_FILES['file'])){
		$file = $_FILES['file'];
		
		$file_name = $file['name'];
		$file_tmp = $file['tmp_name'];
		$file_size = $file['size'];
		$file_error = $file['error'];
		
		$ext = explode('.', $file['name']);
		$ext = strtolower(end($ext));
		
		echo $ext;
		
		$sumber = $file['tmp_name'];
		$tujuan = "gambar/" . $file_name;
		
		if($ext == "jpg"){
			move_uploaded_file($sumber, $tujuan);
			
			$judul = $_POST['judul'];
			$ket = $_POST['ket'];
			
			$sql = "INSERT INTO gallery (title, description, image) VALUES ('$judul', '$ket', '$tujuan')";
			mysqli_query($koneksi, $sql);
			
			header('Location: admin_photo.php');
		}
	}
?>