<?php
	include('header.php');
?>
<div class="container nuswa-container"><!-- Start of market place body -->
	<?php
		include('searchkategoritoko.php');
	?>

	<div class="col-md-12 nuswa-divider-bottom"><!-- Start Toko populer -->
		<div class="col-md-12 nuswa-title-marketplace">
			<i class="nf-nuswa-star" style="color:#FCAD02;"></i> Toko Populer
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
			<i class="nf-nuswa-toko" style="color:#FCAD02;"></i> Daftar Toko
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

	<div id="tool-toko" class="col-md-12"><!-- start tool toko -->
		<div class="col-md-3">
			<div class="btn-group" style="width: 100%;margin-bottom: 3px;">
				<select id="select3" class="selectpicker" data-style="btn-danger" data-role="none" style="width: 100%">
					<option value="0">Terbaru&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;➔&nbsp;&nbsp;Terlawas</option>
					<option value="1">Terlawas&nbsp;&nbsp;&nbsp;➔&nbsp;&nbsp;Terbaru</option>
					<option value="2">Termurah&nbsp;&nbsp;➔&nbsp;&nbsp;Termahal</option>
					<option value="3">Termahal&nbsp;&nbsp;➔&nbsp;&nbsp;Termurah</option>
					<option value="4">Rekomendasi</option>
					<option value="5">Berdiskon</option>
				</select>
			</div>
		</div>
		<div class="col-md-6">
			<div class="input-group col-md-5 normal-pad-col-junk" style="float: left;">
				<span class="input-group-addon" id="basic-addon1">Rp.</span>
				<input id="txtnuswarangeprice1" type="text" class="nuswa-price-format form-control" aria-describedby="basic-addon1" value="0">
			</div>
			<div class="input-group col-md-2 normal-pad-col-junk" style="float: left; text-align: center; line-height: 34px;">
				Ke
			</div>
			<div class="input-group col-md-5 normal-pad-col-junk" style="float: left;">
				<span class="input-group-addon" id="basic-addon2">Rp.</span>
				<input id="txtnuswarangeprice2" type="text" class="nuswa-price-format form-control" aria-describedby="basic-addon2" value="0">
			</div>
		</div>
		<div class="col-md-3">
			<div class="nuswa-rating float-left-mobile">
				<span class="label">
					Menurut Nilai : 
				</span>
      			<input id="rating-tool-toko" type="hidden" class="rating"/>
			</div>
			<script type="text/javascript">
				$(document).ready(function(){
					$('#rating-tool-toko').on('change',function(){
						var url = $('.rating').val();
						$(location).attr('href',url);
					});
				});
			</script>
		</div>
	</div><!-- end tool toko -->

	<div id="container-toko" class="col-md-12"><!-- start item toko -->
		<?php for ($i=0; $i<5; $i++){ ?>
		<div class="col-md-3">
			<div class="col-md-12 normal-pad-col-junk item">
				<div class="image-wrap">
					<span class="diskon"><span class="glyphicon glyphicon-gift"></span> 40%</span>
					<img src="http://localhost/nuswa-image/?wh=704x368&text=352x184" class="img-responsive">
				</div>
				<div class="isi-wrap">
					<?php $h=$i%2; if($h==0){ ?>
					<span class="reputasi"><img src="image/g4104.png" class="img-responsive" data-toggle="tooltip" title="Rekomendasi" data-placement="bottom"></span>
					<?php } ?>
					<h4>
						Mulai dari <span>Rp.</span><span class="nuswa-price-format">100000</span>
					</h4>
					<a href="detailtoko.php" class="break-wordwarp">Judul market place <?php echo $i; ?></a>
					<span class="rate">
						<span class="fa fa-star" style="color:#FFC43E"></span>
						<span class="fa fa-star" style="color:#FFC43E"></span>
						<span class="fa fa-star" style="color:#FFC43E"></span>
						<span class="fa fa-star-half-o" style="color:#FFC43E"></span>
						<span class="fa fa-star-o" style="color:#FFC43E"></span> (25)
					</span>
					<span class="lokasi">
						<span class="fa fa-flag"></span> Jakarta Selatan
					</span>
				</div>
			</div>
		</div>
		<?php } ?>
		<div class="col-md-12 item-not-found">
			<h1><i class="nf-nuswa-toko"></i> Tidak Ada Toko !</h1>
		</div>
	</div><!-- end item toko -->
</div>
<?php 
	include('search.php');
	include('footer.php');
	include('modal-login-register.php');
?>