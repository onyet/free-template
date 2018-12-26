<?php
	include('header.php');
?>

<div class="container nuswa-container">
	<?php
		include('kategori-home.php');
	?>
	<div class="col-md-12 normal-pad-col-junk" style="padding-top:15px;">
		<div class="col-md-8 content-left">
			<div class="col-md-12 nuswa-block-biru nuswa-title-block" style="margin:0;">
				<b class="nf-nuswa-city-n"></b>
				Berita Yang Dibaca
			</div>
			<div class="col-md-12 nuswa-bg-detailbrg normal-pad-col-junk">
				<div class="item-profile">
					<div class="col-md-12 header-profile-content nuswa-divider-bottom" style="border-color: #ccc">
						<h4 style="text-align: left; font-size: 30px; color: #444;">"Judul Berita ada disini...."</h4>
						<span style="display: block; width: 100%; text-align:right; font-size: 13px; color: #777;">
							<span style="margin-left:10px;"><i class="fa fa-user"></i> User Pengguna</span>
							<span style="margin-left:10px;"><i class="fa fa-calendar"></i> 05/06/2015</span>
							<span style="margin-left:10px;"><i class="fa fa-clock-o"></i> 19:00 WIB</span>
						</span>
					</div>
					
					/*Kalo image atau file, karena file nampilin imagenya*/ <!-- text ini di hapus -->
					<div class="col-md-12 normal-pad-col-junk warp-image-profile">
						<img src="image/Album/002.jpg">
					</div>

					<div class="col-md-12 normal-pad-col-junk">
						/*Kalo Youtube*/ <!-- text ini di hapus -->
					<div class="videoWrapper">
						<iframe width="100%" height="315" src="https://www.youtube.com/embed/MLscGpjQwB0" frameborder="0" allowfullscreen></iframe>
					</div>
					/*Kalo soundcloud*/ <!-- text ini di hapus -->
					<div class="videoWrapper">
						<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/95908097&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
					</div>
						<p class="break-wordwarp" style="white-space: normal; margin-top: 10px;">
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</strong> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently <span class="label label-danger">with desktop publishing software</span> like Aldus PageMaker including versions of Lorem Ipsum.</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						</p>
					</div>
					
					<div class="col-md-12 fans-share-profile">
						<a href="#" class="active"><i class="fa fa-thumbs-up"></i> 1200<span class="label label-danger">+1</span></a>
						<a href="#"><i class="fa fa-thumbs-down"></i> 20</a>
						<a href="#"><i class="nf-nuswa-chat"></i> 120 Komentar</a>
						<a href="#" class="share"><span class="label label-primary">Facebook +10</span></a>
						<a href="#" class="share"><span class="label label-info">twitter +12</span></a>
					</div>
				</div><!-- End of Item -->
			</div><!-- End of berita -->

			<div class="col-md-12 nuswa-bg-detailbrg nuswa-form-komentar" style="border-top: 1px solid #ddd">
				<form data-ajax="false" rel="external" method="post" name="formkomentardetailbarang">
					<textarea style="height: 57px;" class="ui-input-text ui-shadow-inset ui-body-inherit ui-corner-all ui-textinput-autogrow" placeholder="Kolom komentar..."></textarea>
					<input data-role="none" data-corners="false" data-enhanced="true" class="btn btn-danger" name="btnkomentardetailbarang" value="komentar" type="submit">
				</form>
			</div><!-- End of form komentar -->
			<div class="col-md-12 nuswa-bg-detailbrg nuswa-form-komentar">
				<div class="col-sm-1 col-xs-3 normal-pad-col-junk">
					<img src="image/user/001.jpg" class="img-responsive" style="border-radius:50%;">
				</div>
				<div class="col-sm-11 col-xs-9">
					<a data-ajax="false" rel="external" href="#" class="title-detail ui-link" style="font-size: 18px;">Nama user di sini...</a>
					<span class="title-detail-disable" style="font-size: 11px;">
						<span class="fa fa-calendar">&nbsp;18/02/2016</span>&nbsp;&nbsp;
						<span class="fa fa-clock-o">&nbsp;19:00:00</span>&nbsp;&nbsp;
					</span>
					<p class="break-wordwarp">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaada apa dengan mu ini lah kisah makan semvak minum<br> baygon tempeh tumpeh...</p>
					<a href="#" class="label label-danger">Balas</a>
				</div>
			</div><!-- End of komentar -->
				<div class="col-md-offset-1 col-md-11 nuswa-bg-detailbrg nuswa-form-komentar" style="border-top: 1px solid #ddd">
					<form data-ajax="false" rel="external" method="post" name="formkomentardetailbarang">
						<textarea style="height: 57px;" class="ui-input-text ui-shadow-inset ui-body-inherit ui-corner-all ui-textinput-autogrow" placeholder="Kolom balas komentar..."></textarea>
						<input data-role="none" data-corners="false" data-enhanced="true" class="btn btn-danger" name="btnkomentardetailbarang" value="balas komentar" type="submit">
					</form>
				</div><!-- End of form sub komentar -->
				<div class="col-md-offset-1 col-md-11 nuswa-bg-detailbrg nuswa-form-komentar">
					<div class="col-sm-1 col-xs-3 normal-pad-col-junk">
						<img src="image/user/001.jpg" class="img-responsive" style="border-radius:50%;">
					</div>
					<div class="col-sm-11 col-xs-9">
						<a data-ajax="false" rel="external" href="#" class="title-detail ui-link" style="font-size: 18px;">Nama user di sini...</a>
						<span class="title-detail-disable" style="font-size: 11px;">
							<span class="fa fa-calendar">&nbsp;18/02/2016</span>&nbsp;&nbsp;
							<span class="fa fa-clock-o">&nbsp;19:00:00</span>&nbsp;&nbsp;
						</span>
						<p class="break-wordwarp">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaada apa dengan mu ini lah kisah makan semva..</p>
					</div>
				</div><!-- End of sub komentar -->
		</div><!-- End of kontent left -->
		<div class="col-md-4 content-right">
			<div class="col-md-12 nuswa-block-kuning nuswa-title-block" style="margin:0;">
				<b class="nf-nuswa-duaring"></b>
				Berita Terkait
			</div>
			<div class="nuswa-berita-thumb nuswa-bg-detailbrg" style="padding: 10px;">
				<?php for ($i=0; $i < 7; $i++) { ?>
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
		</div>
	</div>
</div>

<?php
	include('search.php');
	include('modal-login-register.php');
	include('footer.php');
?>