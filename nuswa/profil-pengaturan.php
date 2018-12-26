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
			<a href="profil-pengaturan.php" class="item profil active">
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
			<a href="sosial-pengaturan.php" class="item sosial">
				<b class="nf-nuswa-atom"></b>
				<span class="title">Jejaring Sosial</span>
				<span class="deskripsi">Koneksi sosial anda</span>
			</a>
		</div>
		<div class="col-md-8 isi-pengaturan">
			<div class="col-md-12 normal-pad-col-junk header">
				<h3 class="title">Halaman Profil</h3>
				<span class="penjelasan">Informasi ini mucul di info publik anda, penjarian, dan lainnya.</span>
			</div>
			<div class="col-md-12 normal-pad-col-junk content">
				<form>
				<div class="col-md-12 normal-pad-col-junk">
					<table>
						<tr>
							<td valign="top"><label>Foto</label></td>
							<td>
								<div id="uploadpengaturan-01" class="unggah-foto-pengaturan">
									<img src="image/unggah_img.jpg">
									<span class="btn btn-primary">Cari Foto</span>
									<p class="status" style="margin-top: 5px;">ukuran maksimal foto 700 Kb</p>
									<input type="file" name="file-01" id="file-01" accept="image/*" data-role="none">
								</div>
							</td>
						</tr>
						<tr>
							<td valign="top"><label>Situs Web</label></td>
							<td><input type="text" class="form-control" placeholder="http://www.situswebanda.com/"></td>
						</tr>
						<tr>
							<td valign="top"><label>Nama Belakang</label></td>
							<td><textarea name="textarea-01" placeholder="biografi singkat anda..." class="form-control"></textarea></td>
						</tr>
						<tr>
							<td valign="top">
								<label>Pengaturan Profil</label>
							</td>
							<td>
								<label for="checkbox-03" class="status"><input type="checkbox" id="checkbox-03" data-role="none"> Sembunyikan foto profil saya.</label>
								<label for="checkbox-04" class="status"><input type="checkbox" id="checkbox-04" data-role="none"> Saya menyetujui segala kebijakan dan ketentuan yang berlaku.</label>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="submit" data-role="none" value="Simpan Perubahan" class="btn btn-primary" style="width: 100%;">
							</td>
						</tr>
					</table>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php
	include('search.php');
	include('modal-login-register.php');
	include('footer.php');
?>