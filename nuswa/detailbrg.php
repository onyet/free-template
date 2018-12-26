<?php
	include('header.php');
?>
	<div class="container nuswa-container">
		<?php
			include('searchkategori.php');
		?>
		<div class="col-md-12 title-desc-pasar">
			<h1><sup class="fa fa-quote-left"></sup>Es Krim Apa ini?<sup class="fa fa-quote-right"></sup></h1>
		</div>
		<div class="col-md-12 normal-pad-col-junk">
			<div class="col-md-4"><!-- start Image detail -->
				<div class="owl-carousel" id="sync1">
				<?php for ($i=0; $i < 5 ; $i++) { ?>
					<span class='nuswa-image-zoom item'>
						<img src='image/marketplace/touch-u-gadget-stand.jpg' alt='Daisy on the Ohoopee' class='img-responsive'/>
					</span>
				<?php } ?>
				</div>
				<div class="owl-carousel nuswa-detailbrg-informasi" id="sync2">
				<?php for ($i=0; $i < 5 ; $i++) { ?>
					<span class="nuswa-image-nav-detail item">
						<img src="image/marketplace/touch-u-gadget-stand.jpg">
					</span>
				<?php } ?>
				</div>
			</div><!-- end Image detail -->
			<div class="col-md-8"><!-- start Produk deskripsi -->
				<div class="col-md-12 nuswa-block-hijau nuswa-title-block">
					<b class="nf-nuswa-tanya"></b>Informasi Produk
				</div>
				<div class="col-md-12 normal-pad-col-junk nuswa-detailbrg-informasi"><!-- start content informasi barang -->
					<div class="col-md-6 content-left"><!-- start content left -->
						<div class="col-md-12 nuswa-bg-detailbrg item">
							<span class="label">Kondisi</span>
							<span class="labelisi">Baru</span>
						</div>

						<div class="col-md-12 nuswa-bg-detailbrg item">
							<span class="label">Berat</span>
							<span class="labelisi">100 gram</span>
						</div>
					</div><!-- end content left -->
					<div class="col-md-6 content-right"><!-- start content right -->
						<div class="col-md-12 nuswa-bg-detailbrg item">
							<span class="label">Harga/Upah</span>
							<span class="labelisi">Rp. <span class="nuswa-price-format">100000</span>,-</span>
						</div>

						<div class="col-md-12 nuswa-bg-detailbrg item">
							<span class="label">Kurir</span>
							<span class="labelisi"><img src="image/kurir/jne.png" style="widht:auto; max-height:20px;"></span>
						</div>
					</div><!-- end content right -->
				</div><!-- end content informasi barang -->

				<div class="col-md-12 nuswa-block-indigo nuswa-title-block">
					<b class="fa fa-align-left"></b>Deskripsi Produk
				</div>
				<div class="col-md-12 nuswa-detailbrg-informasi">
					<p class="break-wordwarp">Harga belum termasuk ongkos kirim barang...</p>
				</div>
			</div><!-- End Produk deskripsi -->
		</div>
		<div class="col-md-12 normal-pad-col-junk">
			<div class="col-md-4">
				<div class="col-md-12 nuswa-block-kuning nuswa-title-block" style="margin:0px;">
					<b class="nf-nuswa-toko"></b>Toko Produk
				</div>
				<div class="col-md-12 nuswa-bg-detailbrg" style="padding: 15px; margin-bottom: 15px;">
					<div class="col-md-12 rate-brg">
						<span class="fa fa-star"></span>&nbsp;
						<span class="fa fa-star"></span>&nbsp;
						<span class="fa fa-star"></span>&nbsp;
						<span class="fa fa-star-half-o"></span>&nbsp;
						<span class="fa fa-star-o"></span>
					</div>

					<div class="col-md-12 normal-pad-col-junk">
						<div class="col-md-4 normal-pad-col-junk">
							<img src="http://localhost/nuswa-image/?wh=200&text=107x107" class="img-responsive">
						</div>

						<div class="col-md-8 normal-pad-col-mobile-junk">
							<a href="#top" class="title-detail" style="font-size: 22px;">Mavok Toko</a>
							<span class="title-detail-disable" style="font-size:12px;"><i class="glyphicon glyphicon-map-marker"></i> Sokajara</span>
							<p style="color: #555" class="break-wordwarp">ada apa dengan mu ini lah kisah makan semvak minum baygon tempeh tumpeh...</p>
						</div>
					</div>
				</div>

				<?php
					include('kontakpenjual.php');
				?>
					
			</div>

			<div class="col-md-8">
				<div class="col-md-12 nuswa-bg-detailbrg nuswa-form-komentar" style="margin-bottom: 10px;">
					<form method="post" name="formkomentardetailbarang">
						<textarea placeholder="Kolom komentar..."></textarea>
						<input type="submit" data-corners="false" data-enhanced="true" class="btn btn-danger" name="btnkomentardetailbarang" value="komentar">
					</form>
				</div>
				<div class="col-md-12 nuswa-bg-detailbrg nuswa-form-komentar">
					<div class="col-sm-1 col-xs-3 normal-pad-col-junk">
						<img src="http://localhost/nuswa-image/?wh=130&text=60x60" class="img-responsive" style="border-radius:50%;">
					</div>
					<div class="col-sm-11 col-xs-9">
						<a href="#" class="title-detail" style="font-size: 18px;">Nama user di sini...</a>
						<span class="title-detail-disable" style="font-size: 11px;">
							<span class="fa fa-calendar">&nbsp;18/02/2016</span>&nbsp;&nbsp;
							<span class="fa fa-clock-o">&nbsp;19:00:00</span>&nbsp;&nbsp;
						</span>
						<p class="break-wordwarp">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaada apa dengan mu ini lah kisah makan semvak minum<br> baygon tempeh tumpeh...</p>
					</div>
				</div>

				<div class="col-md-12 nuswa-divider-bottom"><!-- Start Pagination bottom -->
				<div class="col-md-12 nuswa-title-marketplace" style="padding-bottom: 0;">
					<div class="nuswa-pagination">
						<ul class="pagination">
							<li>
							  <a href="#" aria-label="Previous">
							    <span aria-hidden="true">&laquo;</span>
							  </a>
							</li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li>
							  <a href="#" aria-label="Next">
							    <span aria-hidden="true">&raquo;</span>
							  </a>
							</li>
						</ul>
					</div>
				</div>
			</div><!-- End Pagination bottom -->
			</div>
		</div>
	</div>
	
<?php 
	include('modal-contact-toko-email.php');
	include('search.php');
	include('footer.php');
	include('modal-login-register.php');
?>