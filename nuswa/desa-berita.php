<?php
	include('header-desa.php');
?>
	<div id="desa-berita-populer" class="fluid-container-desa col-md-12">
		<div class="desa-block-title fluid-container-desa">
			<b class="nf-nuswa-star" style="color:#E7AD06;"></b> Berita Populer
		</div>
		<?php for ($i=0; $i < 4; $i++) { ?>
		<div class="col-md-3 col-xs-6 item">
			<div class="image fluid-container-desa">
				<img src="image/Album/002.jpg" class="img-responsive">
				<div class="isi fluid-container-desa">
					<a rel="external" data-ajax="false" href="#" class="title"><b class="fa fa-star"></b>Judul Berita Disini...</a>
					<p class="deskripsi">
						isi berita anda ada disini dan selamanya adalah ada di sini :o. Ga usah banyak - banyak deskripsinya, sigini aja nyukup kok :3...
					</p>
				</div>
			</div>
			<div class="btn-baca fluid-container-desa">
				<a rel="external" data-ajax="false" href="#">Baca</a>
			</div>
		</div>
		<?php } ?>
	</div><!-- end of desa-berita-populer -->
	<div class="fluid-container-desa col-md-12">
		<div class="desa-block-title fluid-container-desa">
			<b class="fa fa-newspaper-o" style="color:#C05902; text-shadow: none;"></b> Berita Desa
		</div>
	</div>
	<div id="desa-berita-seluruh" class="fluid-container-desa col-md-12">
		<ul id="tiles-desa">
		<?php for($a=0; $a<12; $a++){ ?>
		<li class="item col-md-3 col-sm-6">
			<div class="kategori fluid-container-desa">
				<a href="#" data-ajax="false" rel="external">POTENSI DESA</a>
			</div>
			<div class="image fluid-container-desa">
				<img src="image/Album/<?php if($a%2==0){echo 'sate';}else{ echo '002';} ?>.jpg" class="img-responsive">
			</div>
			<div class="deskripsi fluid-container-desa">
			<div class="title fluid-container-desa">
				<a href="#" data-ajax="false" rel="external">Prembun: Hasil panen padi meningkat 20% darit tahun sbelumnya.</a>
			</div>
				<a href="#" data-ajax="false" rel="external">
					deskripsi anda tentang berita desa ada di sini semuanya, mulai dari potensi desa, berita...
				</a>
			</div>
		</li>
		<?php } ?>
		</ul>
	</div>
	<div class="fluid-container-desa col-md-12" style="text-align: center;">
		<ul class="pagination">
			<li>
				<a href="#" data-ajax="false" rel="external" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span>
				</a>
			</li>
			<li><a href="#" data-ajax="false" rel="external">1</a></li>
			<li><a href="#" data-ajax="false" rel="external">2</a></li>
			<li><a href="#" data-ajax="false" rel="external">3</a></li>
			<li><a href="#" data-ajax="false" rel="external">4</a></li>
			<li><a href="#" data-ajax="false" rel="external">5</a></li>
			<li>
				<a href="#" data-ajax="false" rel="external" aria-label="Next">
					<span aria-hidden="true">&raquo;</span>
				</a>
			</li>
		</ul>
	</div>
<?php
	include('footer-desa.php');
?>