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
			<a href="keamanan-pengaturan.php" class="item keamanan active">
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
				<h3 class="title">Keamanan</h3>
				<span class="penjelasan">Ubah pengaturan keamanan dan privasi anda.</span>
			</div>
			<div class="col-md-12 normal-pad-col-junk content">
				<form>
				<div class="col-md-12 normal-pad-col-junk">
					<table>
						<tr>
							<td valign="top"><label>Verifikasi Masuk</label></td>
							<td valign="top">
								<label for="checkbox-01" class="keamanan-title">
									<input type="checkbox" id="checkbox-01" name="checkbox-01" data-role="none"> Jangan verifikasi permintaan masuk.
								</label>
								<label for="checkbox-02" class="keamanan-title">
									<input type="checkbox" id="checkbox-02" name="checkbox-01" data-role="none"> Kirim permintaan verifikasi ke ponsel anda.
								</label>
								<label class="status">
									anda perlu menambahkan nomor phonsel anda di akun nuswa anda untuk mengaktifkan fitur ini di web nuswa anda.
								</label>
							</td>
						</tr>
						<tr>
							<td valign="top"><label>Pengaturan Ulang Kata Sandi</label></td>
							<td valign="top">
									<label for="checkbox-03" class="keamanan-title">
									<input type="checkbox" id="checkbox-03" name="checkbox-01" data-role="none"> Membutuhkan informasi pribadi utnuk mengatur ulang kata sandi saya.
								</label>
								<label class="status">
									Jika anda mengaktifkan fitur ini. Anda akan diminta memasukan informasi pribadi anda saat merubah kata sandi anda.
								</label>
							</td>
						</tr>
						<tr>
							<td valign="top"><label>Lokasi Ketentuan</label></td>
							<td valign="top">
									<label for="checkbox-04" class="keamanan-title">
										<input type="checkbox" id="checkbox-04" name="checkbox-01" data-role="none"> Tambahkan lokasi pada kiriman saya.
									</label>
									<label for="checkbox-05" class="keamanan-title">
										<input type="checkbox" id="checkbox-05" name="checkbox-01" data-role="none"> ijinkan orang lain menemukan saya melalui email.
									</label>
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