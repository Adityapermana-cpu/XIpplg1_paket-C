	<?php

	if(isset($_GET['url'])){
		switch ($_GET['url']) {
			
			case 'tulis-pengaduan':
				include 'tulis.pengaduan.php';
				break;
			
			case 'lihat-pengaduan';
			include 'lihat pengaduan.php';
			break;
			
			default:
				echo"Halaman Tidak Ditemukan";
				break;
		}		
	}else{
		echo "Bersiap Menjadi Solusi,Login untuk mengelola dan menyelesaikan
		laporan masyarakat dengan cepat dan tepat.<br>";
		echo "Anda Login Sebagai : ".$_SESSION['nama_petugas'];
}