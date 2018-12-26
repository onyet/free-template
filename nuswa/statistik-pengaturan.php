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
			<a href="statistik-pengaturan.php" class="item statistik active">
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
				<h3 class="title">Statistik</h3>
				<span class="penjelasan">Melihat statistik organisasi anda.</span>
			</div>
			<div class="col-md-12 normal-pad-col-junk content">
				<script type="text/javascript">
					$(document).ready(function(){
						var data = [],
							totalPoints = 300,
							option = {
								lines: { 
									show: true,
									fill: true 
								},
								xaxis: {
									show: false
								}
							},
							updateInterval = 30;

						function getRandomData() {

							if (data.length > 0)
								data = data.slice(1);

							// Do a random walk

							while (data.length < totalPoints) {

								var prev = data.length > 0 ? data[data.length - 1] : 50,
									y = prev + Math.random() * 10 - 5;

								if (y < 0) {
									y = 0;
								} else if (y > 100) {
									y = 100;
								}

								data.push(y);
							}

							// Zip the generated y values with the x values

							var res = [];
							for (var i = 0; i < data.length; ++i) {
								res.push([i, data[i]])
							}

							return res;
						}
						
						$.plot("#placeholder1", [getRandomData()], option);
						window.onresize = function(event) {
					        $.plot($("#placeholder1"), [getRandomData()], option);
					    }
						function update(){
					    	$.ajax({
						    	url: 'http://localhost/nuswa/flot-proses.php',
						    	type: 'post',
						    	data: 'val=1',
						    	success: function(index){
						    		$.plot("#placeholder1", [getRandomData()], option);
						    	}
						    });
						    setTimeout(update, updateInterval);
						}
						update();
					});
				</script>
				<label for="placeholder1">Statistik Pengunjung Terkini</label>
				<div id="placeholder1" class="demo-placeholder"></div>
			</div>
			<div class="col-md-12 normal-pad-col-junk header">
				<h3 class="title">Laporan</h3>
				<span class="penjelasan">Unduh laporan statistik.</span>
			</div>
			<div class="col-md-12 normal-pad-col-junk content">
				<table class="table-laporan-statistik">
					<tr>
						<th>Nama Label</th>
						<th>Keterangan</th>
						<th>Tindakan</th>
					</tr>
					<tr>
						<td>Page Viewer</td>
						<td>Setiap satu bulan</td>
						<td><a href="#" class="btn btn-danger" style="width: 100%;"><b class="fa fa-download"></b> Unduh Laporan</a></td>
					</tr>
					<tr>
						<td>Page Viewer</td>
						<td>Setiap satu minggu</td>
						<td><a href="#" class="btn btn-danger" style="width: 100%;"><b class="fa fa-download"></b> Unduh Laporan</a></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<?php
	include('search.php');
	include('modal-login-register.php');
	include('footer.php');
?>