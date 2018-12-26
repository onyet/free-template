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
			<a href="ikhtisar-pengaturan.php" class="item ikhtisar active">
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
			<a href="sosial-pengaturan.php" class="item sosial">
				<b class="nf-nuswa-atom"></b>
				<span class="title">Jejaring Sosial</span>
				<span class="deskripsi">Koneksi sosial anda</span>
			</a>
		</div>
		<div class="col-md-8 isi-pengaturan">
			<div class="col-md-12 normal-pad-col-junk header">
				<h3 class="title">Ikhtisar Akun</h3>
				<span class="penjelasan">Ubah pengaturan akun dasar anda</span>
			</div>
			<div class="col-md-12 normal-pad-col-junk content">
				<form>
				<div class="form">
					<table>
						<tr>
							<td><label>Nama Pengguna</label></td>
							<td><input type="text" class="form-control" placeholder="Nama pengguna..."></td>
						</tr>
						<tr>
							<td><label>Nama Depan</label></td>
							<td><input type="text" class="form-control" placeholder="Nama Depan..."></td>
						</tr>
						<tr>
							<td><label>Nama Belakang</label></td>
							<td><input type="text" class="form-control" placeholder="Nama Belakang..."></td>
						</tr>
						<tr>
							<td><label>No Telp.</label></td>
							<td><input type="text" class="form-control" placeholder="08222XXXXXXX..."></td>
						</tr>
						<tr>
							<td><label>Email</label></td>
							<td>
								<input type="email" class="form-control" placeholder="email@mail.com">
								<label class="status" for="checkbox-1"><input type="checkbox" name="checkbox-1" id="checkbox-1" data-role="none"> Sembunyikan email anda.</label>
							</td>
						</tr>
						<tr>
							<td><label>Kata Sandi</label></td>
							<td><input type="password" class="form-control" placeholder="Masukan Kata Sandi..."></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="password" placeholder="Ulangi Kata Sandi..." class="form-control"></td>
						</tr>
					</table>
				</div>
				<div class="col-md-12 normal-pad-col-junk">
					<table style="margin-top: 10px;">
						<tr>
							<td><label>Bahasa</label></td>
							<td><select name="select-01" id="select-01" class="selectpicker" data-role="none">
								<option value="1">Indonesia</option>
								<option value="2">Jawa</option>
								<option value="3">Inggris :v</option>
							</select></td>
						</tr>
						<tr>
							<td><label>Negara</label></td>
							<td><select name="select-02" id="select-02" class="selectpicker" data-role="none">
								<option value="1">Indonesia</option>
								<option value="2">German</option>
								<option value="3">Inggris :v</option>
							</select></td>
						</tr>
						<tr>
							<td><label>Zona Waktu</label></td>
							<td><select name="select-03" id="select-03" class="selectpicker" data-role="none">
								<option value="1">GMT +07</option>
								<option value="2">GMT +01</option>
								<option value="3">WIB</option>
							</select></td>
						</tr>
						<tr>
							<td></td>
							<td><label for="checkbox-02" class="status"><input type="checkbox" name="checkbox-02" id="checkbox-02" data-role="none">Saya menyetujui segala kebijakan dan ketentuan yang berlaku. </label></td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="submit" data-role="none" class="btn btn-primary" value="Simpan Perubahan" style="width:100%;">
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