<?php
	include('header.php');
	include('search-ew.php');
?>
<div class="container header-organisasi">
	Organisasi Yang Diikuti
</div>
<div class="container nuswa-container" style="padding-top: 20px;">

	<div class="col-md-12 item-not-found" style="margin-bottom:30px;">
		<h1><i class="nf-nuswa-logoNuswa"></i> Tidak ada organisasi yang diikuti !</h1>
	</div>
	
	<div class="col-md-7 border-sm-right" style="margin-bottom:30px;">
		<div class="row">
			<div class="col-sm-6 col-md-6">
				<div class="thumbnail" style="border-radius:0px; padding: 0px;">
					<span class=""></span>
					<img src="http://localhost/nuswa-image/?wh=500" alt="Title Image" class="img-responsive">
					<div class="caption nuswa-bg-detailbrg" style="border-top: 2px solid #FFC53D">
						<h3 class="break-wordwarp" style="margin:0px; padding: 3px 0px; white-space: normal;">
							<a href="#" style="text-decoration: none; color:#333;">Thumbnail label</a>
						</h3>
						<p style="padding-bottom: 10px;">
							<span class="col-xs-6 normal-pad-col-junk" style="font-size: 10px;">Konsultan</span>
							<span class="col-xs-6 normal-pad-col-junk" style="font-size: 10px;"><b class="nf-nuswa-group"></b> 12 Anggota</span>
						</p>
						<p class="break-wordwarp" style="font-size:12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eleifend ante a tortor molestie accumsan...</p>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-md-6">
				<div class="thumbnail" style="border-radius:0px; padding: 0px;">
				  <img src="http://localhost/nuswa-image/?wh=500" alt="Title Image" class="img-responsive">
				  <div class="caption nuswa-bg-detailbrg" style="border-top: 2px solid #FFC53D">
				    <h3 class="break-wordwarp" style="margin:0px; padding: 3px 0px; white-space: normal;">
				    	<a href="#" style="text-decoration: none; color:#333;">Thumbnail label</a>
				    </h3>
				    <p style="padding-bottom: 10px;">
				    	<span class="col-xs-6 normal-pad-col-junk" style="font-size: 10px;">Konsultan</span>
				    	<span class="col-xs-6 normal-pad-col-junk" style="font-size: 10px;"><b class="nf-nuswa-group"></b> 12 Anggota</span>
				    </p>
				    <p class="break-wordwarp" style="font-size:12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eleifend ante a tortor molestie accumsan...</p>
				  </div>
				</div>
			</div>
		</div>

		<div class="col-md-12 normal-pad-col-junk">
			<a href="#" class="nuswa-readmore" style="margin: 0px;">Lihat Semua Organisasi Anda</a>
		</div>
	</div>
	<div class="col-md-5" style="margin-bottom:20px;">
		<?php  for ($i=0; $i < 4; $i++) { ?>
		<div class="thumbnail" style="border-radius:0px; padding: 0px; border:none; float:left; box-shadow: none;">
			<div class="col-xs-3 content-left">
				<img src="http://localhost/nuswa-image/?wh=200&text=500x500" class="img-responsive">
			</div>
			<div class="col-xs-9 content-right">
				<div class="caption nuswa-bg-detailbrg item-kecil" style="border-top: 2px solid #FFC53D; overflow:hidden;">
				    <h3 class="break-wordwarp" style="margin:0px; padding: 3px 0px; white-space: normal;">
				    	<a href="#" style="text-decoration: none; color:#333;">Thumbnail label</a>
				    </h3>
				    <p style="padding-bottom: 10px;">
				    	<span class="col-xs-6 normal-pad-col-junk" style="font-size: 10px;">Konsultan</span>
				    	<span class="col-xs-6 normal-pad-col-junk" style="font-size: 10px;"><b class="nf-nuswa-group"></b> 12 Anggota</span>
				    </p>
				    <p class="break-wordwarp" style="font-size:14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eleifend ante a tortor molestie accumsan. Fusce turpis risus, varius in sapien ac, consectetur imperdiet leo.</p>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>

	<div class="col-md-12">
		<div class="col-md-12 nuswa-title-block-right nuswa-block-kuning" style="text-align: right;">
			<b class="nf-nuswa-city"></b>
			Organisasi Lainnya
		</div>
	</div>
	<div class="col-md-12">
		<?php  for ($i=0; $i < 9; $i++) { ?>
		<div class="col-md-4 col-sm-6" style="margin: 10px 0px;">
			<div class="col-md-12 nuswa-bg-detailbrg normal-pad-col-junk">
				<div class="col-md-4 normal-pad-col-junk">
					<a href="#">
						<img class="img-responsive" src="http://localhost/nuswa-image/?wh=200&text=500x500" title="title here">
					</a>
				</div>
				<div class="col-md-8" style="padding: 10px;">
					<h4 class="break-wordwarp" style="margin:0px; padding: 3px 0px; white-space: normal;">
				    	<a href="#" style="text-decoration: none; color:#333;">Thumbnail label</a>
				    </h4>
			    	<span class="col-xs-12 normal-pad-col-junk" style="font-size: 10px;padding-bottom:5px;">Konsultan</span>
			    	<span class="col-xs-12 normal-pad-col-junk" style="font-size: 10px;padding-bottom:5px;"><b class="nf-nuswa-group"></b> 12 Anggota</span>
				    <p class="col-md-12 normal-pad-col-junk" style="margin:0px; text-align: right;">
				    	<a href="#" class="btn btn-primary" style="padding: 5px 8px;">Gabung</a>
				    </p>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</div>
<?php
	include('search.php');
	include('modal-login-register.php');
	include('modal-organisasi-add.php');
	include('footer.php');
?>