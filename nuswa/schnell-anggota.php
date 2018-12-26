<?php 
include('schnell-header.php');
include('schnell-carousel.php');
?>
	<div class="fluid-schnell container-schnell-content">
		<div class="container">
		<div class="fluid-schnell container-content-schnell-main">
			<div class="col-md-3 hide-mobile-schnell" style="padding: 0px;">
				<div class="fluid-schnell block-title-schnell">
					Daftar Aplikasi
				</div><!-- /.block-title-schnell -->
				<div class="fluid-schnell schnell-contianer-content-sidebar aplikasi">
					<div class="fluid-schnell item">
						<div class="col-xs-3">
							<img src="schnell/icon/sondir.png" class="img-responsive">
						</div>
						<div class="col-xs-6" style="padding:0px;">
							<b class="title">Sondir v.1.01</b>
							<p class="deskripsi">by : Nuswa Indonesia</p>
						</div>
						<div class="col-xs-3" style="text-align: right;">
							<a data-ajax="false" rel="external" href="#" class="btn btn-danger"><b class="fa fa-play"></b></a>
						</div>
					</div><!-- /.item -->
					<div class="fluid-schnell item">
						<div class="col-xs-3">
							<img src="schnell/icon/pondasi.png" class="img-responsive">
						</div>
						<div class="col-xs-6" style="padding:0px;">
							<b class="title">Pondasi v.1.01</b>
							<p class="deskripsi">by : Nuswa Indonesia</p>
						</div>
						<div class="col-xs-3" style="text-align: right;">
							<a data-ajax="false" rel="external" href="#" class="btn btn-danger"><b class="fa fa-play"></b></a>
						</div>
					</div><!-- /.item -->
				</div><!-- /.schnell-contianer-content-sidebar.Aplikasi -->
				<div class="fluid-schnell schnell-contianer-content-sidebar fluid-bottom">
					<div class="fluid-schnell sekilas-schnell">
						<h4 class="title-schnell-block"><b class="fa fa-star"></b>Sekilas Info</h4>
						<div class="fluid-schnell" style="padding: 5% 20%; text-align: center;">
							<img src="schnell/logo4.png" class="img-responsive" style="display: inline;">
						</div>
						<p>PT . Schnell INDONESIA adalah sebuah perusahaan swasta yang bergerak dalam bidang teknik sipil jasa konsultasi desain dengan ahli profesional sejak tahun 2006.</p>
						<label>Alamat:</label>
						<p>	PT Schnell Indonesia,
							Perumahan Firdaus Estate,
							Blok I 10 Sokaraja,
							Kabupaten Banyumas
						</p>
						<label>Website:</label>
						<p><a data-ajax="false" rel="external" href="#">www.schnellindonesia.com</a></p>
					</div><!-- /.sekilas-schnell -->
					<div class="fluid-schnell galery-foto-schnell">
						<h4 class="title-schnell-block"><b class="fa fa-image"></b>Foto <span class="pull-right label label-default">123</span></h4>
						<?php for ($i=0; $i < 12; $i++) { ?>
						<div class="col-md-3 col-xs-4 item">
							<a data-ajax="false" rel="external" href="#" class="link-to-image"><b class="fa fa-eye"></b></a>
							<img src="image/Album/002.jpg" class="img-responsive">
						</div>
						<?php } ?>
						<div class="fluid-schnell">
							<a data-ajax="false" rel="external" href="#" class="label label-danger" style="margin: 0px 5px;">Semua Foto...</a>
						</div>
					</div><!-- /.galery-foto-schnell -->
				</div><!-- /.schnell-contianer-content-sidebar.Aplikasi -->	
			</div><!-- /.col-md-3 -->
			<div class="col-md-9" style="padding: 0px;">
				<div class="fluid-schnell block-title-schnell col-md-12" style="background-color: #1C3B54; text-align: left;">
					<ul class="nav navbar-nav">
						<li><a data-ajax="false" rel="external" href="schnell.php"><b class="fa fa-home"></b> Beranda</a></li>
						<li class="active"><a data-ajax="false" rel="external" href="schnell-anggota.php"><b class="fa fa-users"></b> Anggota</a></li>
						<li><a data-ajax="false" rel="external" href="#"><b class="fa fa-calendar"></b> Agenda</a></li>
						<li><a data-ajax="false" rel="external" href="#"><b class="fa fa-picture-o"></b> Foto</a></li>
						<li class="dropdown">
							<a data-ajax="false" rel="external" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Lainnya <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a data-ajax="false" rel="external" href="#"><b class="fa fa-microphone"></b> Audio</a></li>
								<li><a data-ajax="false" rel="external" href="#"><b class="fa fa-video-camera"></b> Vidio</a></li>
								<li><a data-ajax="false" rel="external" href="#"><b class="fa fa-file-text"></b> Dokumen</a></li>
								<li class="divider"></li>
								<li><a data-ajax="false" rel="external" href="#"><b class="fa fa-info-circle"></b> Tentang Kami</a></li>
							</ul>
						</li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						<li style="padding: 0px 10px;"><b id="btnmintagabunggrup" class="btn btn-info" style="margin-top: -2px;width: 100%;"><i class="fa fa-plus"></i>&nbsp;&nbsp;Bergabung</b></li>
					</ul>
				</div><!-- /.block-title-schnell -->
				<div class="fluid-schnell schnell-contianer-content-main">
					<div class="fluid-schnell container-schnell-profile">
						<h4 class="title-schnell-block"><b class="fa fa-users"></b>Daftar Anggota <span class="pull-right label label-default">300</span></h4><!-- /.title-schnell-block -->
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Pencarian anggota..." aria-describedby="basic-addon1">
							<span class="btn btn-default input-group-addon" id="basic-addon1"><b class="fa fa-search"></b></span>
						</div><!-- /.input-group -->
						<div class="fluid-schnell schnell-container-daftar-anggota">

							<div class="col-md-6 col-xs-12 item">
								<div class="col-xs-2 image">
									<img src="image/user/003.jpg" class="img-responsive">
								</div>
								<div class="col-xs-8 text">
									<a href="#" class="title" data-ajax="false" rel="external">Isna Nur Asiz</a><!-- maks character 18 -->
									<p class="status">Bergabung sejak <span class="label label-danger">12 Juni 2015</span></p>
								</div>
								<div class="col-xs-2 button">
									<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modal01" data-ajax="false" rel="external"><b class="fa fa-sign-out"></b></a>
								</div>
							</div><!-- /.item -->
							<div class="col-md-6 col-xs-12 item">
								<div class="col-xs-2 image">
									<img src="image/user/004.jpg" class="img-responsive">
								</div>
								<div class="col-xs-8 text">
									<a href="#" class="title" data-ajax="false" rel="external">Ci OnyetCorp Onyet</a>
									<p class="status">Bergabung sejak <span class="label label-danger">12 Juni 2015</span></p>
								</div>
								<div class="col-xs-2 button">
									<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modal01" data-ajax="false" rel="external"><b class="fa fa-sign-out"></b></a>
								</div>
							</div><!-- /.item -->
							<div class="col-md-6 col-xs-12 item">
								<div class="col-xs-2 image">
									<img src="image/user/002.jpg" class="img-responsive">
								</div>
								<div class="col-xs-8 text">
									<a href="#" class="title" data-ajax="false" rel="external">Dian Mukti Wibowo</a>
									<p class="status">Bergabung sejak <span class="label label-danger">12 Juni 2015</span></p>
								</div>
								<div class="col-xs-2 button">
									<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modal01" data-ajax="false" rel="external"><b class="fa fa-sign-out"></b></a>
								</div>
							</div><!-- /.item -->
							<div class="col-md-6 col-xs-12 item">
								<div class="col-xs-2 image">
									<img src="image/user/001.jpg" class="img-responsive">
								</div>
								<div class="col-xs-8 text">
									<a href="#" class="title" data-ajax="false" rel="external">Farda Fitriyanti</a>
									<p class="status">Bergabung sejak <span class="label label-danger">12 Juni 2015</span></p>
								</div>
								<div class="col-xs-2 button">
									<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modal01" data-ajax="false" rel="external"><b class="fa fa-sign-out"></b></a>
								</div>
							</div><!-- /.item -->
							<div class="col-md-6 col-xs-12 item">
								<div class="col-xs-2 image">
									<img src="image/Album/001.jpg" class="img-responsive">
								</div>
								<div class="col-xs-8 text">
									<a href="#" class="title" data-ajax="false" rel="external">Desa Nuswa</a>
									<p class="status">Bergabung sejak <span class="label label-danger">12 Juni 2015</span></p>
								</div>
								<div class="col-xs-2 button">
									<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modal01" data-ajax="false" rel="external"><b class="fa fa-sign-out"></b></a>
								</div>
							</div><!-- /.item -->
							<div class="col-md-6 col-xs-12 item">
								<div class="col-xs-2 image">
									<img src="image/Album/002.jpg" class="img-responsive">
								</div>
								<div class="col-xs-8 text">
									<a href="#" class="title" data-ajax="false" rel="external">Megalodon</a>
									<p class="status">Bergabung sejak <span class="label label-danger">12 Juni 2015</span></p>
								</div>
								<div class="col-xs-2 button">
									<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modal01" data-ajax="false" rel="external"><b class="fa fa-sign-out"></b></a>
								</div>
							</div><!-- /.item -->

							<div class="fluid-schnell loader-schnell">
								<!-- ini cuma contoh -->
								<img src="schnell/loader/1.gif">
							</div>
						</div><!-- /.schnell-container-daftar-anggota -->
					</div><!-- /.container-schnell-profile -->

				</div><!-- /.schnell-contianer-content-main -->
			</div><!-- /.col-md-9 -->
		</div><!-- /.container-content-schnell-main -->
		</div><!-- /.container -->
	</div><!-- /.container-schnell-content -->
	<!-- modal start -->
	<div id="modal01" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Informasi Pengeluaran Anggota</h4>
				</div>
				<div class="modal-body">
					<p>Dengan mengeluarkan anggota dari organisasi, maka anggota tersebut tidak akan mendapatkan fasilitas dari organisasi ini.</p>
					<p>
						Beberapa fasilitas yang akan di nonaktifkan :
						<ul>
							<li>Pemberitahuan organisasi,</li>
							<li>Penggunaan aplikasi organisasi,</li>
							<li>Melihat dokumen atau file privasi,</li>
							<li>Memberikan kiriman,</li>
							<li>Melihat kiriman privasi organisasi,</li>
							<li>Mengomentari, membagikan, menyukai serta mebenci kiriman,</li>
							<li>dan keleluasaan hak akses lainnya.</li>
						</ul>
					</p>
					<p>Anda yakin ingin mengeluarkan "Nama User" dari organisasi ?</p>
					<p><label for="#checkboxschnell01" style="font-weight: normal"><input type="checkbox" id="#checkboxschnell01" name="checkboxschnell01" data-role="none"> Keluarkan secara permanen.</label></p>
					<p style="color: #555; font-size:12px;">*Dengan mengeluarkan secara permanen, maka anggota tersebut tidak akan bisa kembali bergabung dalam organisasi untuk selamanya.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button type="button" class="btn btn-primary">Keluarkan</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
<?php include('schnell-footer.php'); ?>