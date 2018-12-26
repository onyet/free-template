<div class="col-md-12 nuswa-divider-bottom" id="header-detail-toko">
	<div class="col-sm-12 col-md-4 content-left">
		<img src="image/marketplace/penahan-poni.jpg" class="img-responsive">
		<div class="col-md-12 nuswa-foto-toko-detail">
			<img src="image/user/004.jpg">
		</div>
	</div>
	<div class="col-sm-12 col-md-8 content-right">
		<div class="col-md-12 nuswa-toko-detail-button">
			<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modaln2">
				<i class="nf-nuswa-kuas-n"></i> Ubah Informmasi Toko
			</a>
		</div>
		<div class="col-md-12 nuswa-bg-detailbrg container-header">
			<div class="col-md-12 normal-pad-col-junk nuswa-divider-bottom" style="border-color:#ccc;">
				<h3 class="break-wordwarp">Nama Toko</h3>
				<p class="break-wordwarp">"Moto kalian ada disini"</p>
			</div>
			<div class="col-md-12 normal-pad-col-junk" style="min-height: 75px">
				<a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Pemilik Toko"><i class="fa fa-user"> Admin</i></a>&nbsp;&nbsp;

				<a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Terdaftar Sejak"><i class="fa fa-clock-o"> 18/03/2015</i></a>&nbsp;&nbsp;

				<a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Pembayaran melalui"><i class="fa fa-credit-card"> BCA, Mandiri, BNI, Mandiri Syariah</i></a>&nbsp;&nbsp;

				<a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Verifikasi dengan KTP"><i class="fa fa-check"> Diverifikasi</i></a>&nbsp;&nbsp;

				<p class="break-wordwarp">"Deskripsi toko anda di sini saja yah... cape buatnya :p"</p>
			</div>
		</div>
		<div class="col-md-12 nuswa-block-biru nuswa-title-block nuswa-rating">
			<span class="label">
				Beri nilai toko ini : 
			</span>
  			<input id="rating-detail-toko" type="hidden" class="rating" <?php if (isset($_GET['rate'])) {echo "disabled='disabled'"; } ?> value=<?php if (isset($_GET['rate'])) { echo $_GET['rate'];} ?>/>
		</div>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#rating-detail-toko').on('change',function(){
					var url = 'detailtoko.php?rate=' + $('.rating').val();
					$(location).attr('href',url);
				});
			});
		</script>
	</div>
</div>