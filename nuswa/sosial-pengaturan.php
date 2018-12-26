<?php
	include('header.php');
?>
<div class="container header-profile-pengaturan">
	<div class="col-md-1 col-sm-2 image-user">
		<img src="image/user/004.jpg" class="img-responsive">
	</div>
	<div class="col-md-7 col-sm-10 title-user">
		<h3 class="title">Nama User / Organisasi</h3>
		<p class="deskripsi">ada apa dengan mu ini lah kisah makan semvak minum baygon tempeh tumpeh.ada apa dengan mu ini lah kisah makan semvak minum baygon tempeh tumpeh...</p>
	</div>
</div>
<div class="container nuswa-container" style="padding-top:25px;">
	<div class="col-md-12 container-profile-pengaturan">
		<div class="col-md-4 menu-pengaturan">
			<a href="ikhtisar-pengaturan.php" class="item ikhtisar">
				<b class="nf-nuswa-user"></b>
				<span class="title">Ikhtisar Akun</span>
				<span class="deskripsi">Ubah pengaturan dasar anda</span>
			</a>
			<a href="profil-pengaturan.php" class="item profil">
				<b class="nf-nuswa-profile-card"></b>
				<span class="title">Profil</span>
				<span class="deskripsi">Lihat dan sunting profil anda</span>
			</a>
			<a href="keamanan-pengaturan.php" class="item keamanan">
				<b class="nf-nuswa-gembok-n"></b>
				<span class="title">Keamanan</span>
				<span class="deskripsi">Ubah pengaturan dasar anda</span>
			</a>
			<a href="statistik-pengaturan.php" class="item statistik">
				<b class="nf-nuswa-flow"></b>
				<span class="title">Statistik</span>
				<span class="deskripsi">Lihat Statistik</span>
			</a>
			<a href="aplikasi-pengaturan.php" class="item aplikasi">
				<b class="nf-nuswa-pack"></b>
				<span class="title">Aplikasi</span>
				<span class="deskripsi">Lihat daftar aplikasi anda</span>
			</a>
			<a href="sosial-pengaturan.php" class="item sosial active">
				<b class="nf-nuswa-atom"></b>
				<span class="title">Jejaring Sosial</span>
				<span class="deskripsi">Koneksi sosial anda</span>
			</a>
		</div>
		<div class="col-md-8 isi-pengaturan">
			<div class="col-md-12 normal-pad-col-junk header">
				<div class="col-md-12 normal-pad-col-junk">
					<h3 class="title">Koneksi</h3>
					<span class="penjelasan">Koneksi sosial anda.</span>
				</div>
				<!-- <div class="col-md-3 normal-pad-col-junk">
					<a href="#" class="btn btn-primary" style="width: 100%; margin-top: 15px;">Tambah Koneksi</a>
					<span class="penjelasan">Menambahkan koneksi baru.</span>
				</div> -->
			</div>
			<div class="col-md-12 normal-pad-col-junk content">
				<div class="col-md-9 icon-share">
					<img src="image/icon-share/facebook.png">
					<h3 class="icon-share-title">facebook</h3>
					<span class="icon-share-penjelasan">akun anda belum terhubung</span>
				</div>
				<div class="col-md-3">
					<a href="https://www.facebook.com/" class="btn btn-primary" style="width: 100%; margin-top: 25px; margin-bottom:10px; border-radius: 4px;">Hubungkan</a>
				</div>

				<div class="col-md-9 icon-share">
					<img src="image/icon-share/twitter.png">
					<h3 class="icon-share-title">twitter</h3>
					<span class="icon-share-penjelasan">akun anda belum terhubung</span>
				</div>
				<div class="col-md-3">
					<a href="https://www.facebook.com/" class="btn btn-primary" style="width: 100%; margin-top: 25px; margin-bottom:10px; border-radius: 4px;">Hubungkan</a>
				</div>

				<div class="col-md-9 icon-share">
					<img src="image/icon-share/google.png">
					<h3 class="icon-share-title">google<sup>+</sup></h3>
					<span class="icon-share-penjelasan">akun anda belum terhubung</span>
				</div>
				<div class="col-md-3">
					<a href="https://www.facebook.com/" class="btn btn-primary" style="width: 100%; margin-top: 25px; margin-bottom:10px; border-radius: 4px;">Hubungkan</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	include('search.php');
	include('modal-login-register.php');
	include('footer.php');
?>