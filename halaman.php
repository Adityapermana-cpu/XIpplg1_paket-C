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
		echo "Selamat Datang Peran Sebagai Penggerak Perubahan Mengelola laporan masyarakat, dengan Kami Berupaya
		meningkatkan efisiensi prioritas utama dan pastikan setiap isu mendapat perhatian yang layak.<br>";
		echo "Anda Login Sebagai : ".$_SESSION['nama_petugas'];
}