<?php
	include('header.php');
	include('header-profile.php');
?>

<div class="container nuswa-container" style="padding-top: 15px;">
	<div class="col-md-4">
		<div class="col-md-12 nuswa-title-block nuswa-block-biru" style="margin: 0;">
			<b class="nf-nuswa-keker"></b> Buat Lapak Harian
		</div>
		<div class="nuswa-buat-lapak col-md-12 nuswa-bg-detailbrg" style="margin-bottom: 15px ; padding: 15px;">
			<div role="tabpanel">
			  <!-- Nav tabs -->
			  <ul class="nav nav-tabs" role="tablist">
			    <li role="presentation" class="active"><a href="#lapak1" aria-controls="lapak1" role="tab" data-toggle="tab">Artikel</a></li>
			    <li><a href="#" class="strip">|</a></li>
			    <li role="presentation"><a href="#lapak2" aria-controls="lapak2" role="tab" data-toggle="tab">Dokumen</a></li>
			    <li><a href="#" class="strip">|</a></li>
			    <li role="presentation"><a href="#lapak3" aria-controls="lapak3" role="tab" data-toggle="tab">Jasa/Lowongan</a></li>
			  </ul>

			  <!-- Tab panes -->
			  <div class="tab-content">
			    <div role="tabpanel" class="tab-pane active" id="lapak1">
			    	<div class="col-md-12 add-item">
			    		<a href="#" data-toggle="modal" data-target="#profile-add-artikel">
			    			<i class="nf-nuswa-plus"></i> Buat Artikel
			    		</a>
			    	</div>
			    </div>
			    <div role="tabpanel" class="tab-pane" id="lapak2">
			    	<div class="col-md-12 add-item">
			    		<a href="#" data-toggle="modal" data-target="#profile-add-dokumen">
			    			<i class="nf-nuswa-plus"></i> Tambah Dokumen
			    		</a>
			    	</div>
			    </div>
			    <div role="tabpanel" class="tab-pane" id="lapak3">
			    	<div class="col-md-12 add-item">
			    		<a href="#" data-toggle="modal">
			    			<i class="nf-nuswa-plus"></i> Buat Jasa & Lowongan
			    		</a>
			    	</div>
			    </div>
			  </div>

			</div>
		</div>
		<!-- End of Add Artikel etc -->

		<div class="col-md-12 nuswa-title-block nuswa-block-hijau" style="margin: 0;">
			<b class="nf-nuswa-warning"></b> Sekilas Biodata
		</div>
		<div class="col-md-12 nuswa-bg-detailbrg" style="margin-bottom: 15px ; padding: 15px; color: #777">
			<b>Nama Organisasi</b>
			<p class="break-wordwarp">OnyetCorp Ci Onyet</p>
			<b>Alamat</b>
			<p class="break-wordwarp">Jl. Kampung-Runcuh No. 45, Desa Sinduaji Kec. Bumiayu Kab. Brebes</p>
			<b>Akte Notaris</b>
			<p class="break-wordwarp">Grape Anggur .SH <br>Nomor 4 <br>Tanggal 13 Maret 2015</p>
		</div>
		<!-- End Of Biodata -->

		<div class="col-md-12 nuswa-title-block nuswa-block-indigo" style="margin: 0;">
			<b class="nf-nuswa-img-m"></b> Galeri Foto
		</div>
		<div class="col-md-12 nuswa-bg-detailbrg" style="margin-bottom: 15px ; padding: 15px;">
			<a href="#" class="read-more-profile">120 Foto | Lihat semuanya</a>
			<div class="col-md-12 galeri-profile">
				<?php for ($i=0; $i < 12; $i++) { ?>
				<div class="col-xs-3 item">
					<a href="#"><img src="image/user/004.jpg" class="img-responsive"></a>
				</div>
				<?php } ?>
			</div>
		</div>
	</div><!-- End of left sidebar -->

	<div class="col-md-8">
		<div class="col-md-12 nuswa-title-block-right nuswa-block-kuning">
			<b class="nf-nuswa-break-block"></b> Daftar Anggota "Nama ORganisasi"
		</div>
		<div class="col-md-12 normal-pad-col-junk">
			<p class="nuswa-readmore" style="text-align: right; font-size: 12px; line-height: 28px; padding: 0 10px; margin-top: 0; margin-bottom: 30px;">Terdapat 150 Anggota</p>
		</div>
		<?php for ($i=0; $i < 12; $i++) { ?>
		<div class="col-md-12 nuswa-bg-detailbrg" style="margin-bottom: 15px ; padding: 5px 15px;">
			<div class="col-md-1 content-left">
				<img src="image/user/004.jpg" class="img-responsive">
			</div>
			<div class="col-md-8 content-right">
				<h4 class="break-wordwarp" style="margin:0px; padding: 3px 0px; white-space: normal;">
					<a href="#" style="text-decoration: none; color:#333;">Nama User <?php echo ($i+1); ?></a>
				</h4>
				<p style="font-size: 12px;">Bergabung sejak : <span class="label label-danger">12 April 2010</span></p>
			</div>
			<div class="col-md-3 normal-pad-col-junk" style="padding-top:10px;">
				<a href="#" class="btn btn-primary" style="width: 100%;">Lihat Profile</a>
			</div>
		</div>
		<?php } ?>
	</div>
</div>
<?php
	include('search.php');
	include('modal-login-register.php');
	include('modal-profile-artikel.php');
	include('modal-profile-dokumen.php');
	include('footer.php');
?>