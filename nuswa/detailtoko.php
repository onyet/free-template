<?php
	include('header.php');
?>
	<div class="container nuswa-container">
		<?php
			include('header-detailtoko.php');
		?>

		<div class="col-md-12" id="content-detail-toko">
			<div class="col-md-3 normal-pad-col-junk content-left">
				<?php
					include('detailtoko-kategori.php');
					include('kontakpenjual.php');
					include('kurir.php');
				?>
			</div>

			<div class="col-md-9 normal-pad-col-junk content-right">
				<div class="col-md-12 nuswa-block-biru nuswa-title-block">
					<b class="fa fa-th-list"></b>
					Daftar Barang
				</div>
				<div class="col-md-12 btn btn-default add-barang-button" data-toggle="modal" data-target="#modaln1">
					<b class="fa fa-cart-plus"></b> Tambah Barang
				</div>
				<div class="col-md-12 nuswa-tool-market-item" style="margin-top: 2px;">
					<div class="col-md-3">
						<select id="select2" class="selectpicker" data-style="btn-primary" data-role="none" style="width: 100%">
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
						<div class="input-group col-md-5 normal-pad-col-junk" style="float:left; margin-top: 2px;">
							<span class="input-group-addon" id="basic-addon1">Rp.</span>
							<input id="txtnuswarangeprice1" type="text" class="nuswa-price-format form-control" aria-describedby="basic-addon1" value="0">
						</div>
						<div class="input-group col-md-2 normal-pad-col-junk" style="float:left; margin-top: 2px; text-align: center;">
							Ke
						</div>
						<div class="input-group col-md-5 normal-pad-col-junk" style="float:left; margin-top: 2px;">
							<span class="input-group-addon" id="basic-addon2">Rp.</span>
							<input id="txtnuswarangeprice2" type="text" class="nuswa-price-format form-control" aria-describedby="basic-addon2" value="0">
						</div>
					</div>
					<div class="col-md-2 float-left-mobile" style="text-align: right;">
						<a href="#" class="btn btn-primary active" data-toggle="tooltip" data-placement="bottom" title="Thumbnails">
							<span class="glyphicon glyphicon-th-large"></span>
						</a>&nbsp;
						<a href="#" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="List">
							<span class="glyphicon glyphicon-th-list"></span>
						</a>
					</div>
				</div>

				<!-- start item barang market place -->
				<div class="col-md-12 nuswa-item-brg-marketplace normal-pad-col-junk">
					<?php for ($i=0; $i < 8 ; $i++) { ?>
					<div class="item col-md-3"><!-- start item Thumb -->
						<div class="background">
							<div class="image">
								<a href="detailbrg.php"><img src="image/marketplace/touch-u-gadget-stand.jpg" class="img-responsive"></a>
								<span class="nama-lokasi"><i class="glyphicon glyphicon-map-marker"></i> Purwokerto</span>
								<span class="aksi">
									<a href="#" class="edit"><b class="glyphicon glyphicon-pencil"></b></a>
									<a href="#" class="delete"><b class="glyphicon glyphicon-trash"></b></a>
								</span>
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
						for ($i=0; $i < 4 ; $i++) { 
					?>
					<div class="item col-sm-12 col-md-6"><!-- start item Thumb -->
						<div class="background">
							<div class="col-md-6 normal-pad-col-junk">
								<a href="detailbrg.php"><img src="image/marketplace/touch-u-gadget-stand.jpg" class="img-responsive"></a>
								<span class="nama-lokasi" style="top:0;"><i class="glyphicon glyphicon-map-marker"></i> Purwokerto</span>
								<span class="diskon"><span class="glyphicon glyphicon-gift"></span> 40%</span>
								<span class="aksi">
									<a href="#" class="edit"><b class="glyphicon glyphicon-pencil"></b></a>
									<a href="#" class="delete"><b class="glyphicon glyphicon-trash"></b></a>
								</span>
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

				<div class="nuswa-pagination nuswa-title-marketplace">
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
		</div>
	</div>
<?php 
	include('modal-contact-toko-email.php');
	include('modal-informasi-toko.php');
	include('modal-tambah-barang.php');
	include('alert.php');
	include('search.php');
	include('modal-login-register.php');
	include('footer.php');
?>