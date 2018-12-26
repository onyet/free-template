<div class="col-md-12 nuswa-divider-bottom"><!-- Start search kategori -->
				<div id="nuswa-marketplace-search-kategori" class="col-md-12 normal-pad-col-junk">
					<div class="col-md-2 normal-pad-col-junk">
						<div class="input-group">
							 <div class="input-group-btn">
								<div class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><div class="txt-nuswakategori">Semua Wilayah</div> <span class="caret"></span></div>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#" id="nuswa-marketplace-semuawilayah"><span class="nf-nuswa-cart"></span> Semua Wilayah</a></li>
									<li class="divider"></li>
									<?php
										for ($a=1; $a < 35; $a++) {
											echo '<li><a href="pasar.php?brgkategori=b" class="item-wilayah"><span class="glyphicon glyphicon-chevron-right"></span> Nanggro Aceh Darussalam '.$a.'</a></li>';
										}
									?>
								</ul>
							</div><!-- /btn-group -->
						</div>
					</div>
					<div class="col-md-2 normal-pad-col-junk">
						<div class="input-group">
							 <div class="input-group-btn">
								<div class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><div class="txt-nuswakategori">Semua Kategori </div><span class="caret"></span></div>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#" id="nuswa-marketplace-semuakategori"><span class="nf-nuswa-cart"></span> Semua Kategori</a></li>
									<li class="divider"></li>
									<li><a href="pasar.php?brgkategori=a" class="item-kategori"><span class="nf-nuswa-tv"></span> Elektronik</a></li>
									<li><a href="pasar.php?brgkategori=a" class="item-kategori"><span class="glyphicon glyphicon-phone"></span> Gadget</a></li>
									<li><a href="pasar.php?brgkategori=a" class="item-kategori"><span class="glyphicon glyphicon-sunglasses"></span> Aksesoris & Fashion</a></li>
									<li><a href="pasar.php?brgkategori=a" class="item-kategori"><span class="nf-nuswa-sandal"></span> Alas kaki</a></li>
									<li><a href="pasar.php?brgkategori=a" class="item-kategori"><span class="nf-nuswa-uniform"></span> Pakaian</a></li>
									<li><a href="pasar.php?brgkategori=a" class="item-kategori"><span class="nf-nuswa-blue-books"></span> Buku</a></li>
									<li><a href="pasar.php?brgkategori=a" class="item-kategori"><span class="glyphicon glyphicon-home"></span> Properti</a></li>
									<li><a href="pasar.php?brgkategori=a" class="item-kategori"><span class="glyphicon glyphicon-lamp"></span> Rumah tangga</a></li>
									<li><a href="pasar.php?brgkategori=a" class="item-kategori"><span class="glyphicon glyphicon-baby-formula"></span> Bayi & Anak</a></li>
									<li><a href="pasar.php?brgkategori=a" class="item-kategori"><span class="nf-nuswa-kuas-n"></span> Hobi & Olahraga</a></li>
									<li><a href="pasar.php?brgkategori=a" class="item-kategori"><span class="nf-nuswa-bis"></span> Kendaraan </a></li>
									<li><a href="pasar.php?brgkategori=a" class="item-kategori"><span class="nf-nuswa-city"></span> Kantor & Industri</a></li>
									<li><a href="pasar.php?brgkategori=a" class="item-kategori"><span class="glyphicon glyphicon-apple"></span> Pertanian & Perkebunan</a></li>
									<li><a href="pasar.php?brgkategori=a" class="item-kategori"><span class="nf-nuswa-ikan"></span> Perikanan & Peternakan</a></li>
									<li><a href="pasar.php?brgkategori=a" class="item-kategori"><span class="glyphicon glyphicon-flag"></span> Pertambangan</a></li>
								</ul>
							</div><!-- /btn-group -->
						</div>
					</div>
					<form method="post" action=""><div class="col-md-6 normal-pad-col-junk">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Pencarian..." data-role="none">
						</div>
					</div>
					<div class="col-md-2 normal-pad-col-junk">
						<div class="input-group">
							 <div class="input-group-btn">
								<input type="submit" name="btnnuswamarketplaceckategori" id="btnnuswamarketplaceckategori" value="Cari" class="btn btn-default btn-danger" data-role="none">
							</div><!-- /btn-group -->
						</div>
					</div></form>
				</div><!-- End tools Search kategori -->

				<div class="col-md-12 normal-pad-col-junk">
					<?php
					if (isset($_GET['brgkategori'])){
						if ($_GET['brgkategori'] == 'b') {
					?>
					<div class="nuswa-warp-kategori popover bottom">
						<div class="arrow arrow-kategori-wil"></div>
						<h3 class="popover-title">
							<ol class="breadcrumb">
								<li><a href="#">Nama Provinsi</a></li>
								<li><a href="#">Nama Kabupaten</a></li>
								<li class="active">Nama Kecamatan</li>
							</ol>
						</h3>
						<div class="popover-content">
						<?php 
							for ($i=1; $i <= 25; $i++) { 
								echo '<div class="col-md-3"><a href="#"><span class="glyphicon glyphicon-map-marker"></span> Nama Desa '.$i.'</a></div>';
							}
						?>
						</div>
					</div>
					<?php
						}else{
					?>
					<div class="nuswa-warp-kategori popover bottom">
						<div class="arrow arrow-kategori-brg"></div>
						<h3 class="popover-title">
							<ol class="breadcrumb">
								<li class="active">Gadget</li>
							</ol>
						</h3>
						<div class="popover-content">
						<?php 
							for ($i=1; $i <= 25; $i++) { 
								echo '<div class="col-md-3"><a href="#"><span class="glyphicon glyphicon-tag"></span> Majalh, Tabloid, & Jurnal'.$i.'</a></div>';
							}
						?>
						</div>
					</div>
					<?php
						}
					}
					?>
				</div>
			</div><!-- End search kategori -->