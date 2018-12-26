<?php
	include('header.php');
?>
		<div class="container nuswa-container"><!-- Start of market place body -->
			<?php
				include('searchkategori.php');
			?>
			<div class="col-md-12 nuswa-divider-bottom"><!-- Start Toko populer -->
				<div class="col-md-12 nuswa-title-marketplace">
					<i class="nf-nuswa-star" style="color:#FCAD02;"></i> Toko Populer
					<a href="toko.php" class="btn btn-primary" style="float: right;">Semua Toko</a>
				</div>
				<div class="nuswa-slider-marketplace">
					<div id="owl-demo" class="owl-carousel">
					<?php for ($i=0; $i < 10 ; $i++) { ?>
						<div class="item nuswa-market-place">
							<div class="image-wraper-marketplace">
								<span class="nuswa-diskon-home"><span class="glyphicon glyphicon-gift"></span> 40%</span>
								<img class="lazyOwl img-responsive" data-src="http://localhost/nuswa-image/?wh=352x184" alt="title">
							</div>
							<div class="isi-wraper-marketplace">
								<span class="nuswa-reputasi-home-container"><img src="image/g4104.png" class="nuswa-reputasi-home" data-toggle="tooltip" title="Rekomendasi" data-placement="bottom"></span>
								<h4>
									Mulai dari <span>Rp.</span><span class="nuswa-price-format">100000</span>
								</h4>
								<a href="detailtoko.php" class="break-wordwarp">Judul market place <?php echo $i; ?></a>
								<span class="nuswa-time-marketplace">
									<span class="fa fa-star" style="color:#FFC43E"></span>
									<span class="fa fa-star" style="color:#FFC43E"></span>
									<span class="fa fa-star" style="color:#FFC43E"></span>
									<span class="fa fa-star-half-o" style="color:#FFC43E"></span>
									<span class="fa fa-star-o" style="color:#FFC43E"></span> (25)
								</span>
								<span class="nuswa-lokasi">
									<span class="fa fa-flag"></span> Jakarta Selatan
								</span>
							</div>
						</div><!-- End item toko populer -->
					<?php } ?>
					</div>
				</div>
			</div><!-- End Toko Populer -->
			<div class="col-md-12 nuswa-divider-bottom"><!-- Start Pagination top -->
				<div class="col-md-12 nuswa-title-marketplace" style="padding-bottom: 0;">
					<i class="nf-nuswa-pack" style="color:#FCAD02;"></i> Daftar Barang
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
			</div><!-- End Pagination top -->
			<div class="col-md-12"><!-- start tool market place -->
				<div class="col-md-9 normal-pad-col-junk">
					<div class="col-md-12 nuswa-tool-market-item">
						<div class="col-md-3">
							<select id="select1" class="selectpicker" data-style="btn-danger" data-role="none" style="width: 100%">
								<option value="0">Barang Baru</option>
								<option value="1">Barang Bekas</option>
								<option value="2">Terbaru</option>
								<option value="3">Terlawas</option>
								<option value="4">Termurah</option>
								<option value="5">Termahal</option>
								<option value="6">Diskon</option>
							</select>
						</div>
						<div class="col-md-7">
							<div class="input-group col-md-5 normal-pad-col-junk" style="float:left;">
								<span class="input-group-addon" id="basic-addon1">Rp.</span>
								<input id="txtnuswarangeprice1" type="text" class="nuswa-price-format form-control" aria-describedby="basic-addon1" value="0">
							</div>
							<div class="input-group col-md-2 normal-pad-col-junk" style="float:left; text-align: center;">
								Ke
							</div>
							<div class="input-group col-md-5 normal-pad-col-junk" style="float:left;">
								<span class="input-group-addon" id="basic-addon2">Rp.</span>
								<input id="txtnuswarangeprice2" type="text" class="nuswa-price-format form-control" aria-describedby="basic-addon2" value="0">
							</div>
						</div>
						<div class="col-md-2 float-left-mobile" style="text-align: right;">
							<a href="#" class="btn btn-danger active" data-toggle="tooltip" data-placement="bottom" title="Thumbnails">
								<span class="glyphicon glyphicon-th-large"></span>
							</a>&nbsp;
							<a href="#" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="List">
								<span class="glyphicon glyphicon-th-list"></span>
							</a>
						</div>
					</div>
					<!-- start item barang market place -->
					<div class="col-md-12 nuswa-item-brg-marketplace">
						<?php for ($i=0; $i < 8 ; $i++) { ?>
						<div class="item col-md-3"><!-- start item Thumb -->
							<div class="background">
								<div class="image">
									<a href="detailbrg.php"><img src="image/marketplace/touch-u-gadget-stand.jpg" class="img-responsive"></a>
									<span class="nama-lokasi"><i class="glyphicon glyphicon-map-marker"></i> Purwokerto</span>
								</div>
								<div class="warp">
									<span class="diskon"><span class="glyphicon glyphicon-gift"></span> 40%</span>
									<a href="detailbrg.php">
										<h4 class="break-wordwarp">"Judul Barang Anda disini"</h4>
									</a>
								</div>
								<div class="warp" style="padding:0;">
									<span class="warp-price">Rp. <span class="nuswa-price-format">1000000000</span>,-</span>
									<a href="#" class="nama-toko" style="text-align: left;"><span class="nf-nuswa-setengah-hati"></span> Bekas</a>
									<a href="#" class="nama-toko"><span class="glyphicon glyphicon-calendar"></span>&nbsp;5 jam lalu</a>
								</div>
							</div>
						</div><!-- end item Thumb -->
						<?php } 
							for ($i=0; $i < 6 ; $i++) { 
						?>
						<div class="item col-sm-12 col-md-6"><!-- start item Thumb -->
							<div class="background">
								<div class="col-md-6 normal-pad-col-junk">
									<a href="detailbrg.php"><img src="image/marketplace/touch-u-gadget-stand.jpg" class="img-responsive"></a>
									<span class="nama-lokasi" style="top:0;"><i class="glyphicon glyphicon-map-marker"></i> Purwokerto</span>
									<span class="diskon"><span class="glyphicon glyphicon-gift"></span> 40%</span>
								</div>
								<div class="col-md-6 normal-pad-col-junk">
									<div class="warp">
										<a href="detailbrg.php">
											<h4 class="break-wordwarp">"Judul Barang Anda disini asasas"</h4>
										</a>
										<p class="break-wordwarp">
											<span class="fa fa-quote-left"></span>
											Deskripsi Produk ada disini semuanya... terimakasih sekali
										</p>
									</div>
									<div class="warp" style="padding:0;">
										<span class="warp-price">Rp. <span class="nuswa-price-format">1000000000</span>,-</span>
										<a href="#" class="nama-toko" style="text-align: left;"><span class="nf-nuswa-setengah-hati"></span> Bekas</a>
										<a href="#" class="nama-toko"><span class="glyphicon glyphicon-calendar"></span>&nbsp;5 jam lalu</a>
									</div>
								</div>
							</div>
						</div><!-- end item Thumb -->
						<?php } ?>
						<div class="col-md-12 item-not-found">
							<h1><i class="nf-nuswa-logoNuswa"></i> Tidak Ada Barang !</h1>
						</div>
					</div><!-- end item barang market place -->
				</div>
				<div class="col-md-3 nuswa-marketplace-promotion normal-pad-col-junk">
					<div class="title">
						<span class="glyphicon glyphicon-bullhorn"></span>&nbsp; Promosi
					</div>
					<div class="container-item">
						<?php for ($i=0; $i < 3 ; $i++) { ?>
						<div class="item col-md-12">
							<div class="background">
								<div class="image">
									<a href="detailbrg.php"><img src="image/marketplace/touch-u-gadget-stand.jpg" class="img-responsive"></a>
									<span class="nama-lokasi"><i class="glyphicon glyphicon-map-marker"></i> Purwokerto</span>
								</div>
								<div class="warp">
									<span class="diskon"><span class="glyphicon glyphicon-gift"></span> 40%</span>
									<a href="detailbrg.php">
										<h4 class="break-wordwarp">"Judul Barang Anda disini"</h4>
									</a>
								</div>
								<div class="warp" style="padding:0;">
									<span class="warp-price">Rp. <span class="nuswa-price-format">1000000000</span>,-</span>
									<a href="#" class="nama-toko" style="text-align: left;"><span class="nf-nuswa-setengah-hati"></span> Bekas</a>
									<a href="#" class="nama-toko"><span class="glyphicon glyphicon-calendar"></span>&nbsp;5 jam lalu</a>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div><!-- End tool market place -->
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
		</div><!-- End of market place body -->
<?php 
	include('search.php');
	include('footer.php');
	include('modal-login-register.php');
?>