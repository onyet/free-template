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

		<div class="col-md-12 nuswa-title-block nuswa-block-orange" style="margin: 0;">
			<b class="nf-nuswa-warning"></b> Sekilas Biodata
		</div>
		<div class="col-md-12 nuswa-bg-detailbrg" style="margin-bottom: 15px ; padding: 15px; color: #777">
			<b>Nama</b>
			<p class="break-wordwarp">OnyetCorp Ci Onyet</p>
			<b>Alamat</b>
			<p class="break-wordwarp">Jl. Kampung-Runcuh No. 45, Desa Sinduaji Kec. Bumiayu Kab. Brebes</p>
			<b>Pekerjaan</b>
			<p class="break-wordwarp">CO. Founder Di PT.Maklum Sudah Sejahtera</p>
			<b>Organisasi</b>
			<p class="break-wordwarp">Schnell Indonesia</p>
		</div>
		<!-- End Of Biodata -->

		<div class="col-md-12 nuswa-title-block nuswa-block-coklat" style="margin: 0;">
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
		<div class="col-md-12 nuswa-title-block-right nuswa-block-kuning" style="margin-bottom:10px;">
			<b class="nf-nuswa-break-block"></b> Nama Organisasi Atau Akun Profile
		</div>
		<div class="col-md-12 normal-pad-col-junk">
			<?php for ($i=0; $i < 3; $i++) { ?>
			<div class="item-profile nuswa-bg-detailbrg">
				<div class="col-md-4 nuswa-profile-viewer">
					<b class="fa fa-eye"></b> 1200 Pengguna
				</div>
				<div class="col-md-12 header-profile-content nuswa-divider-bottom" style="border-color: #ccc">
					<div class="col-md-11 col-xs-11 normal-pad-col-junk">
						<h4>Judul Kiriman Atau Artikel</h4>
						<p class="break-wordwarp"><span class="label label-success">Artikel</span> <span class="label label-default">1 Jam yang lalu</span></p>
					</div>
					<div class="col-md-1 col-xs-1 normal-pad-col-junk">
						<img src="image/user/004.jpg" class="img-responsive">
					</div>
				</div>
				<div class="col-md-12 normal-pad-col-junk">
					<p class="break-wordwarp" style="white-space: normal; margin-top: 10px;">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
					</p>
					<a href="profile-detail-posting.php" class="read-more-red">Lihat selengkapnya...</a>
				</div>
				<div class="col-md-12 normal-pad-col-junk warp-image-profile">
					<img src="image/bank/mega.png">
				</div>
				<div class="col-md-12 fans-share-profile">
					<a href="#" class="active"><i class="fa fa-thumbs-up"></i> 1200<span class="label label-danger">+1</span></a>
					<a href="#"><i class="fa fa-thumbs-down"></i> 20</a>
					<a href="profile-detail-posting.php"><i class="nf-nuswa-chat"></i> 120 Komentar</a>
					<a href="#" class="share"><span class="label label-primary">Facebook +10</span></a>
					<a href="#" class="share"><span class="label label-info">twitter +12</span></a>
				</div>
			</div><!-- End of Item -->
			<?php } ?>
		</div>
	</div>
</div>
<?php
	include('search.php');
	include('modal-login-register.php');
	include('modal-profile-artikel.php');
	include('modal-profile-dokumen.php');
	include('footer.php');
?>