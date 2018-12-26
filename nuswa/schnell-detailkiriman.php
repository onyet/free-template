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
					<div class="fluid-schnell daftar-anggota-schnell">
						<h4 class="title-schnell-block"><b class="fa fa-users"></b>Anggota <span class="pull-right label label-default">300</span></h4>
						<!-- friends item -->
						<?php for ($i=0; $i < 12; $i++) { ?>
						<div class="item col-md-3 col-xs-4">
							<a data-ajax="false" rel="external" href="#" data-toggle="tooltip" data-placement="top" title="User-Percobaan"><img src="image/user/004.jpg" class="img-responsive
								"></a>
						</div>
						<?php } ?>
						<!-- /friends item -->
						<div class="fluid-schnell">
							<a data-ajax="false" rel="external" href="#" class="label label-danger" style="margin: 0px 5px;">Semua anggota...</a>
						</div>
					</div><!-- /.daftar-anggota-schnell -->
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
						<li><a data-ajax="false" rel="external" href="schnell-anggota.php"><b class="fa fa-users"></b> Anggota</a></li>
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
						<li><a data-ajax="false" rel="external" href="#idbuatkirimanbaru" data-toggle="collapse" aria-expanded="false"><b class="fa fa-pencil"></b> Buat Kiriman</a></li>
					</ul>
				</div><!-- /.block-title-schnell -->
				<div class="fluid-schnell schnell-contianer-content-main">
					<div id="idbuatkirimanbaru" class="fluid-schnell container-schnell-profile collapse" style="margin-top:-10px;">
						<form rel="external" data-ajax="false">
							<div class="fluid-schnell" style="margin-bottom:5px;">
								<textarea name="textarea01" id="textarea01" class="form-control"></textarea>
							</div>
							<div class="fluid-schnell">
								<div class="col-sm-9 content-left">
									<a data-ajax="false" rel="external" href="#" class="btn"><b class="fa fa-image"></b> Gambar</a>
									<a data-ajax="false" rel="external" href="#" class="btn"><b class="fa fa-microphone"></b> Audio</a>
									<a data-ajax="false" rel="external" href="#" class="btn"><b class="fa fa-play"></b> Vidio</a>
									<a data-ajax="false" rel="external" href="#" class="btn"><b class="fa fa-file-text"></b> Dokumen</a>
								</div>
								<div class="col-md-3 content-right" style="text-align: right">
									<input type="reset" value="Batal" class="btn btn-danger" data-role="none">
									<input type="submit" value="Kirim" class="btn btn-primary" data-role="none">
								</div>
							</div>
						</form><!-- /form -->
					</div><!-- /#idbuatkirimanbaru -->

					<div class="fluid-schnell container-schnell-profile">
						<div class="fluid-schnell header">
							<div class="col-md-1 col-xs-2 content-left">
								<img src="image/user/004.jpg" class="img-responsive">
							</div><!-- /Foto user -->
							<div class="col-md-9 col-xs-8">
								<a data-ajax="false" rel="external" href="#" class="title">OnyetCorp Corporate</a>
								<p class="deskripsi">
									<a data-ajax="false" rel="external" href="#" class="label label-danger">Artikel</a>&nbsp;<span class="label label-default">4 Jam yang lalu</span>
								</p>
							</div><!-- /Name User -->
							<div class="col-md-2 col-xs-2 content-right" style="text-align: right">
								<a data-ajax="false" rel="external" href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="margin-top:12px;"><span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu" style="left: auto; right: 0px;">
									<li><a data-ajax="false" rel="external" href="#"><b class="fa fa-pencil"></b> Sunting Kiriman</a></li>
									<li><a data-ajax="false" rel="external" href="#"><b class="fa fa-eye-slash"></b> Sembunyikan Kiriman</a></li>
									<li><a data-ajax="false" rel="external" href="#"><b class="fa fa-trash-o"></b> Hapus Kiriman</a></li>
									<li class="divider"></li>
									<li><a data-ajax="false" rel="external" href="#"><b class="fa fa-chain-broken"></b> Lepas Sematan</a></li>
								</ul>
							</div><!-- /action -->
						</div><!-- /.header -->
						/*Kalo Youtube*/ <!-- text ini di hapus -->
						<div class="videoWrapper">
							<iframe width="100%" height="315" src="https://www.youtube.com/embed/MLscGpjQwB0" frameborder="0" allowfullscreen></iframe>
						</div>
						/*Kalo soundcloud*/ <!-- text ini di hapus -->
						<div class="videoWrapper">
							<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/50216743&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
						</div>
						/*Kalo image atau file, karena file nampilin imagenya*/ <!-- text ini di hapus -->
						<div class="fluid-schnell image-container">
							<img src="schnell/image/1.jpg">
						</div><!-- /.image-container -->

						<div class="fluid-schnell deskripsi">
							<p><?php echo date('t'); ?>
							Lorem ipsum dolor sit amet, ex per ignota oporteat, id usu mollis numquam verterem. 
							Duo ei minimum honestatis reformidans. Sit vide complectitur id, tollit neglegentur ex mei.
							Pri et quem perpetua, vel ne ignota omnium. 
							Eam debet aperiri perpetua an, ei mei lorem propriae principes. 
							Cum cu prima albucius, ad sumo mnesarchum eum, quot unum partiendo est cu.
							</p>
							<p>
							Lorem ipsum dolor sit amet, ex per ignota oporteat, id usu mollis numquam verterem. 
							Duo ei minimum honestatis reformidans. Sit vide complectitur id, tollit neglegentur ex mei.
							Pri et quem perpetua, vel ne ignota omnium. 
							Eam debet aperiri perpetua an, ei mei lorem propriae principes. 
							Cum cu prima albucius, ad sumo mnesarchum eum, quot unum partiendo est cu.
							</p>
							<p>
							Lorem ipsum dolor sit amet, ex per ignota oporteat, id usu mollis numquam verterem. 
							Duo ei minimum honestatis reformidans. Sit vide complectitur id, tollit neglegentur ex mei.
							Pri et quem perpetua, vel ne ignota omnium. 
							Eam debet aperiri perpetua an, ei mei lorem propriae principes. 
							Cum cu prima albucius, ad sumo mnesarchum eum, quot unum partiendo est cu.
							</p>
							<p>
							Lorem ipsum dolor sit amet, ex per ignota oporteat, id usu mollis numquam verterem. 
							Duo ei minimum honestatis reformidans. Sit vide complectitur id, tollit neglegentur ex mei.
							Pri et quem perpetua, vel ne ignota omnium. 
							Eam debet aperiri perpetua an, ei mei lorem propriae principes. 
							Cum cu prima albucius, ad sumo mnesarchum eum, quot unum partiendo est cu.
							</p>
						</div><!-- /.deskripsi -->
						<div class="fluid-schnell fans-share-schnell">
							<div class="col-md-6 content-left">
								<a data-ajax="false" rel="external" href="#" class="active"><i class="fa fa-thumbs-up"></i>1000<span class="label label-primary">+1</span></a>
								<a data-ajax="false" rel="external" href="#"><i class="fa fa-thumbs-down"></i>10</a>
								<a data-ajax="false" rel="external" href="schnell-detailkiriman.php"><i class="fa fa-comments"></i>30 Komentar</a>
							</div><!-- like and comments -->
							<div class="col-md-6 content-right">
								<a data-ajax="false" rel="external" href="https://twitter.com/share" class="twitter-share-button" data-lang="id" data-hashtags="nuswaindonesia" data-url="http://www.nuswa.com">Tweet</a>
							<!-- tweeter button -->
								<div id="fb-root"></div>
								<div class="fb-share-button" data-href="http://www.nuswa.com/" data-layout="button"></div>
							<!-- facebook button -->
								<div class="g-plus" data-action="share" data-href="http://www.nuswa.com/" data-annotation="bubble" data-expandTo="right"></div>
							<!-- google+ button -->
							</div><!-- button share -->
						</div><!-- /.fans-share-schnell -->
						<div class="fluid-schnell komentar-kiriman-schnell">
							<div class="fluid-schnell form-komentar">
								<form rel="external" data-ajax="false">
									<textarea class="form-control" placeholder="Komentar anda..." name="txtarea03" style="margin-bottom: 5px;"></textarea>
									<input type="submit" value="komentar" class="btn btn-danger pull-right">
								</form>
							</div><!-- /.form-komentar -->
							<div class="fluid-schnell komentar-item">
								<div class="col-md-1 col-xs-2 image">
									<img src="image/user/004.jpg" class="img-responsive">
								</div>
								<div class="col-md-11 col-xs-10 text">
									<a href="#" class="title" data-ajax="false" rel="external">Dian Mukti Wibowo</a>
									<p class="status">
										<span><b class="fa fa-clock-o"></b>&nbsp;&nbsp;24 juni 2015 pukul 19:05</span>
									</p>
									<p class="text">
										ini komentar ku tentang karya template ini.. mudah mudahan berkenan di hati anda..
									</p>
									<a href="#" class="label label-danger" data-ajax="false" rel="external"><i class="fa fa-comment-o"></i> Balas</a>
									<a href="#" class="label label-primary" data-ajax="false" rel="external"><i class="fa fa-pencil"></i> Sunting</a>
									<a href="#" class="label label-success" data-ajax="false" rel="external"><i class="fa fa-trash"></i> Hapus</a>
								</div>
							</div><!-- /.komentar-item -->
								<div class="col-xs-offset-1 col-xs-11 komentar-item sub-komen">
									<div class="col-md-1 col-xs-2 image">
										<img src="image/user/004.jpg" class="img-responsive">
									</div>
									<div class="col-md-11 col-xs-10 text">
										<a href="#" class="title" data-ajax="false" rel="external">Dian Mukti Wibowo</a>
										<p class="status">
											<span><b class="fa fa-clock-o"></b>&nbsp;&nbsp;24 juni 2015 pukul 19:05</span>
										</p>
										<p class="text">
											ini komentar ku tentang karya template ini.. mudah mudahan berkenan di hati anda..
										</p>
										<a href="#" class="label label-primary" data-ajax="false" rel="external"><i class="fa fa-pencil"></i> Sunting</a>
										<a href="#" class="label label-success" data-ajax="false" rel="external"><i class="fa fa-trash"></i> Hapus</a>
									</div>
								</div><!-- /.komentar-item -->
								<div class="col-xs-offset-1 col-xs-11 komentar-item sub-komen">
									<div class="fluid-schnell form-komentar">
										<form rel="external" data-ajax="false">
											<textarea class="form-control" placeholder="Komentar anda..." name="txtarea03" style="margin-bottom: 5px;"></textarea>
											<input type="submit" value="balas" class="btn btn-danger pull-right">
										</form>
									</div><!-- /.form-komentar -->
								</div>
							<div class="fluid-schnell komentar-item">
								<div class="col-md-1 col-xs-2 image">
									<img src="image/user/004.jpg" class="img-responsive">
								</div>
								<div class="col-md-11 col-xs-10 text">
									<a href="#" class="title" data-ajax="false" rel="external">Dian Mukti Wibowo</a>
									<p class="status">
										<span><b class="fa fa-clock-o"></b>&nbsp;&nbsp;24 juni 2015 pukul 19:05</span>
									</p>
									<p class="text">
										ini komentar ku tentang karya template ini.. mudah mudahan berkenan di hati anda..
									</p>
									<a href="#" class="label label-danger" data-ajax="false" rel="external"><i class="fa fa-comment-o"></i> Balas</a>
									<a href="#" class="label label-primary" data-ajax="false" rel="external"><i class="fa fa-pencil"></i> Sunting</a>
									<a href="#" class="label label-success" data-ajax="false" rel="external"><i class="fa fa-trash"></i> Hapus</a>
								</div>
							</div><!-- /.komentar-item -->
						</div><!-- /.komentar-kiriman-schnell -->
					</div><!-- /.container-schnell-profile -->

				</div><!-- /.schnell-contianer-content-main -->
			</div><!-- /.col-md-9 -->
		</div><!-- /.container-content-schnell-main -->
		</div><!-- /.container -->
	</div><!-- /.container-schnell-content -->

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<script >
  window.___gcfg = {
    lang: 'id',
    parsetags: 'onload'
  };
</script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script type="text/javascript">
	$(function () {
			$('[data-toggle="tooltip"]').tooltip()
	})
</script>
<?php include('schnell-footer.php'); ?>