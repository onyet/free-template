<?php
	include('header.php');
?>

<div class="container nuswa-container">
	<?php
		include('kategori-home.php');
	?>
	<div id="nuswa-home" class="col-md-12 normal-pad-col-junk">

		<div class="col-md-3 content-left">
			<div class="col-md-12 nuswa-block-hijau nuswa-title-block">
				<b class="nf-nuswa-hati"></b>
				Berita Populer
			</div>
			<div class="nuswa-berita-thumb">
				<?php for ($i=0; $i < 3; $i++) { ?>
				<div class="col-md-12 nuswa-bg-detailbrg item">
					<a href="#" class="title">"Berlangganan apa aja boleh disini adalah title."</a>
					<div class="col-xs-3 image">
						<img src="image/album/002.jpg" class="img-responsive">
					</div>
					<div class="col-xs-9 text">
						<span class="status">
							<span><b class="fa fa-user"></b> Admin</span>
							<span><b class="fa fa-calendar"></b> 05/06/2015</span>
							<span><b class="fa fa-clock-o"></b> 18:00</span>
						</span>
						<p class="deskripsi">
							berita di sini berita di sini berita di sini berita di sini berita di sini berita di sini berita di sini 
						</p>
					</div>
				</div>
				<?php } ?>
			</div>
			<div class="col-md-12 normal-pad-col-junk" style="margin-bottom: 10px;">
				<a href="#" class="nuswa-readmore" style="margin-top:0;">Lihat Seluruhnya</a>
			</div>
			<!-- end of Berita terkini -->
			<div class="col-md-12 nuswa-block-ijotua nuswa-title-block">
				<b class="nf-nuswa-camera"></b>
				Galeri
			</div>
			<div class="nuswa-berita-thumb nuswa-bg-detailbrg" style="padding: 10px; margin-bottom:5px;">
				<?php 
					$isi_item_galeri = "<div class='popover-thumb-item-galeri'>
											<div class='image'>
												<img src='image/Album/002.jpg' class='img-responsive'>
											</div>
											<div class='status'>
												<span><b class='fa fa-user'></b> Admin</span>
												<span><b class='fa fa-calendar'></b> 04/06/2015</span>
												<span><b class='fa fa-clock-o'></b> 19:00 WIB</span>
											</div>
											<a href='#' class='title'>Berlangganan apa aja boleh disini adalah title</a>
											<div class='deskripsi'>
												<p>berita di sini berita di sini berita di sini berita di sini berita di sini berita di sini berita di sini.</p>
											</div>
											<a href='#' class='read-more'>Selanjutnya</a>
										</div>";
				for ($i=0; $i < 12; $i++) { 
				?>
					<a href="#" class="col-xs-3 item-galeri-berita" data-toggle="popover" data-trigger="focus" title="" data-placement="top" data-content="<?php echo $isi_item_galeri; ?>">
						<img src="image/Album/002.jpg" class="img-responsive">
					</a>
				<?php } ?>
			</div>
			<div class="col-md-12 normal-pad-col-junk" style="margin-bottom: 10px;">
				<a href="#" class="nuswa-readmore" style="margin-top:0;">Lihat Seluruhnya</a>
			</div>
			<!-- end of Galeri -->
			<div class="col-md-12 nuswa-block-orange nuswa-title-block">
				<b class="nf-nuswa-media-player"></b>
				Vidio Peristiwa
			</div>
			<div class="nuswa-berita-thumb">
				<?php for ($i=0; $i < 5; $i++) { ?>
				
				<div class="item-berita-vidio nuswa-bg-detailbrg">
					<div class="status">
						<span class="fa fa-user"> Admin</span>
						<span class="fa fa-calendar"> 19/02/2015</span>
						<span class="fa fa-clock-o"> 19:00 WIB</span>
					</div>
					<div class="judul">
						<a data-ajax="false" rel="external" href="#" class="break-wordwarp ui-link">"Judul ada disini..."</a>
					</div>
					<div class="isi">
						<div class="col-xs-4 content-left">
							<img src="image/Album/002.jpg" class="img-responsive">
							<div class="col-md-12 content-left">
								<div class="status">
									<a data-ajax="false" rel="external" class="ui-link" href="#"><b class="fa fa-play-circle"></b></a>
								</div>
							</div>
						</div>
						<div class="col-xs-8 content-right">
							<p class="break-wordwarp" style="white-space: normal;">
								berita di sini berita di sini berita di sini berita di sini berita di sini berita di sini berita di sini 
							</p>
							<a data-ajax="false" rel="external" href="#" class="read-more-red ui-link">Selengkapnya...</a>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
			<div class="col-md-12 normal-pad-col-junk">
				<a href="#" class="nuswa-readmore">Lihat Seluruhnya</a>
			</div>
			<!-- end of Vidio Peristiwa -->
		</div>

		<div class="col-md-5 normal-pad-col-junk">
			<div class="col-md-12 nuswa-block-biru nuswa-title-block">
				<b class="nf-nuswa-chat"></b>
				Topik Utama
			</div>
			<div class="nuswa-berita-topik-utama nuswa-bg-detailbrg">
				<a href="detail-berita.php" class="title-topik-utama">"Judul berita topik utama anda ada disini..."</a>
				<span class="lokasi-topik-utama"><b class="fa fa-map-marker"></b> Karanggedang, Kec. Wanadadi, Kab. Banjarnegara</span>
				<img src="image/Album/002.jpg" class="img-responsive">
				<span class="status-topik-utama">
					<span><b class="fa fa-user"></b> Admin</span>
					<span><b class="fa fa-calendar"></b> 05/06/2015</span>
					<span><b class="fa fa-clock-o"></b> 19:00 WIB</span>
				</span>
				<p class="deskripsi-topik-utama">
					berita di sini berita di sini berita di sini berita di sini berita di sini berita di sini berita di sini berita di sini berita di sini berita di sini berita di sini berita di sini berita di sini berita di sini berita di sini berita di sini berita di sini berita di sini berita di sini berita di sini berita di sini...
				</p>
				<a href="detail-berita.php" class="label label-primary" style="margin-top:5px;">Baca selengkapnya...</a>
			</div>

			<div class="col-md-12 nuswa-block-merah nuswa-title-block">
				<b class="nf-nuswa-coffe"></b>
				Berita Terpanas
			</div>
			<?php for ($i=0; $i < 3; $i++) { ?>
			<div class="nuswa-berita-topik-utama nuswa-bg-detailbrg" style="padding:10px; margin-bottom:5px;">
				<a href="detail-berita.php" class="title-topik-utama" style="font-size: 16px">"Judul berita topik utama anda ada disini..."</a>
				<p class="deskripsi-topik-utama">
					berita di sini berita di sini berita di sini berita di sini berita di sini berita di sini berita di sini berita di sinidi sini berita di sini berita di sini berita di sini berita di sini berita di sini...
				</p>
				<span class="status-topik-utama" style="text-align: right;">
					<span><b class="fa fa-user"></b> Admin</span>
					<span><b class="fa fa-calendar"></b> 05/06/2015</span>
					<span><b class="fa fa-clock-o"></b> 19:00 WIB</span>
				</span>
			</div>
			<?php } ?>
			<div class="col-md-12 normal-pad-col-junk">
				<a href="#" class="nuswa-readmore" style="margin-top:0;">Lihat Seluruhnya</a>
			</div>

			<div class="col-md-12 nuswa-block-coklat nuswa-title-block">
				<b class="nf-nuswa-cobek"></b>
				Berita Pariwisata
			</div>
			<div class="nuswa-berita-topik-utama nuswa-bg-detailbrg" style="padding:10px; margin-bottom:5px;">
				<?php for ($i=0; $i < 6; $i++) { ?>
				<div class="col-md-4 col-sm-6 item-berita-pariwisata">
					<img src="image/Album/002.jpg" class="img-responsive">
					<span class="status">
						<span><b class="fa fa-user"></b> Admin</span>
						<span><b class="fa fa-calendar"></b> 05/06/2015</span>
						<span><b class="fa fa-clock-o"></b> 19:00</span>
					</span>
					<a href="detail-berita.php" class="title">"Pariwisata Alam..."</a>
					<p class="deskripsi">
						sini berita di sini berita di sini berita di sini berita di sini berita didi sini di sinisini...
					</p>
				</div>
				<?php } ?>
			</div>
			<div class="col-md-12 normal-pad-col-junk">
				<a href="#" class="nuswa-readmore" style="margin-top:0;">Lihat Seluruhnya</a>
			</div>
		</div>

		<div class="col-md-4 content-right">
			<div class="col-md-12 nuswa-block-kuning nuswa-title-block">
				<b class="nf-nuswa-cros"></b>
				Berita Terkini
			</div>
			<div class="nuswa-berita-thumb nuswa-bg-detailbrg" style="padding: 10px;">
				<?php for ($i=0; $i < 3; $i++) { ?>
				<div class="item-berita-terkini">
					<span class="status">
						<span class="fa fa-user"> Admin</span>
						<span class="fa fa-calendar"> 05/06/2015</span>
						<span class="fa fa-clock-o"> 19:00</span>
					</span>
					<a href="detail-berita.php" class="title">"Judul Berita ada di sini."</a>
					<p class="deskripsi">
						sini berita di sini berita di sini berita di sini berita di sini berita didi sini di sinisini...
					</p>
				</div>
				<?php } ?>
			</div>
			<div class="col-md-12 normal-pad-col-junk">
				<a href="#" class="nuswa-readmore">Lihat Seluruhnya</a>
			</div>

			<div class="col-md-12 nuswa-block-ungu nuswa-title-block">
				<b class="nf-nuswa-ramen"></b>
				Berita Hidangan Terkini
			</div>
			<div class="nuswa-berita-thumb">
				<div class="item nuswa-bg-detailbrg">
					<a href="detail-berita.php" class="title">"Judul hidangan berita anda di sini..."</a>
					<div class="text">
						<span class="status" style="font-size: 11px; text-align: right;">
							<span class="fa fa-user"> Admin</span>
							<span class="fa fa-calendar"> 05/06/2015</span>
							<span class="fa fa-clock-o"> 19:00</span>
						</span>
					</div>
					<img src="image/Album/sate.jpg" class="img-responsive">
					<div class="text" style="padding:0;">
						<p class="deskripsi" style="margin-top:5px; font-size: 13px;">
							ini berita di sini berita di sini berita di sini berita di sini berita didi sini di ini berita di sini berita di sini berita di sini berita di sini berita didi sini di sinisini...
						</p>
					</div>
				</div>
				<div class="item nuswa-bg-detailbrg">
					<label style="color: #7D3304;">Hidangan lainya</label>
					<?php for ($i=0; $i < 3; $i++) { ?>
					<div class="col-md-12 normal-pad-col-junk" style="margin-bottom: 5px;">
						<a href="detail-berita.php" class="title" style="font-size: 13px;">"Judul hidangan berita anda di sini..."</a>
						<div class="text" style="padding:0;">
							<p class="deskripsi">sini berita di sini berita di sini berita di sini berita di sini berita di sini berita di sini berita di sini berita didi sini di sinisini...</p>
							<span class="status" style="font-size: 11px; text-align: right;">
								<span class="fa fa-user"> Admin</span>
								<span class="fa fa-calendar"> 05/06/2015</span>
								<span class="fa fa-clock-o"> 19:00</span>
							</span>
						</div>
					</div>
					<?php } ?>
				</div>
				<div class="col-md-12 normal-pad-col-junk">
					<a href="#" class="nuswa-readmore" style="margin-top:0;">Lihat Seluruhnya</a>
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