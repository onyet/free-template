<?php
	include('header-desa.php');
?>
<div class="fluid-container-desa col-md-12">
	<div class="content-left pull-left col-md-3">
		<div class="desa-block-title fluid-container-desa">
			<b class="fa fa-newspaper-o" style="color:#C05902; text-shadow: none;"></b> Berita Desa
		</div>
		<div class="fluid-container-desa desa-sidebar berita">
			<div class="fluid-container-desa berita-utama">
				<a href="#" class="title">Gudang Bumbu Yang Menyebabkan Polusi Desa.</a>
				<img src="image/Album/002.jpg" class="img-responsive">
				<p class="deskripsi">
					sekali rumah dijadikan gudang bumbu dll dan itu semua bikin polusi udara karena baunya bikin sesak nafas... <a href="#">Selengkapnya</a>
				</p>
			</div>
			<?php for ($i=0; $i <3 ; $i++) { ?>
			<div class="fluid-container-desa berita-str">
				<a href="#" class="title">Link e-ID Tidak Muncul Padahal Sudah Bayar.</a>
				<p class="deskripsi">Saya telah mendaftarkan peserta melalui pendaftaran online...<a href="#">Selengkapnya</a></p>
				<p class="status">
					<span><i class="fa fa-circle"></i> 18/06/2015</span>
					<span><i class="fa fa-circle"></i> 19:00 WIT</span>
					<span><i class="fa fa-circle"></i> Kategori Berita</span>
				</p>
			</div>
			<?php } ?>
		</div>
	</div>

	<div class="pull-left col-md-6" style="padding:0px;">
		<div class="desa-block-title fluid-container-desa">
			<b class="fa fa-file-text-o" style="color:#C05902; text-shadow: none;"></b> Form Pengaduan Masyarakat
		</div>
		<div class="fluid-container-desa form-pengaduan-desa">
			<form data-ajax="false" rel="external">
				<input type="text" placeholder="Nama anda..." class="form-control" style="width: 49.5%; float:left; margin-right: 1%;" data-role="none">
				<input type="email" placeholder="Email anda (Bila ada)..." class="form-control" style="width: 49.5%;" data-role="none">
				<textarea class="form-control" placeholder="Aduan anda..." data-role="none"></textarea>
				<input type="submit" class="btn btn-primary pull-right" value="kirim pengaduan" data-role="none">
			</form>
		</div>
		<div class="desa-block-title fluid-container-desa">
			<b class="fa fa-comments-o" style="color:#C05902; text-shadow: none;"></b> Pengaduan Masyarakat
		</div>
		<?php for ($i=0; $i <3 ; $i++) { ?>
		<div class="fluid-container-desa item-pengaduan-desa">
			<a href="#" class="title">Mohon Solusi Masalah Persyaratan PPDB</a>
			<p class="deskripsi">Yth Pihak terkait, adik asuh saya YOKISON KOGOYA sedang daftar masuk SMAN 9 Bandung. Yokison Kogoya adalah anak asuh di Panti Asuhan Putera Maranatha (Jl Dr Cipto No.7 Bandung 40171) yg berprestasi dalam bidang Olahraga Sepakbola, Gulat dan Judo. akan tetapi, dari pihak SMAN 9 Bandung meminta NIK Y ... <a href="#">Selengkapnya</a></p>
			<p class="status">
				<a href="#" class="pull-left label label-danger" style="line-height: 13px;">0 Balasan</a>
				<span><i class="fa fa-circle"></i> Isna Nur A.</span>
				<span><i class="fa fa-circle"></i> 18/06/2015</span>
				<span><i class="fa fa-circle"></i> 19:00 WIT</span>
			</p>
		</div>
		<?php } ?>
		<div class="fluid-container-desa col-md-12" style="text-align: center;">
		<ul class="pagination" style="margin-top:2px;">
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
	</div>
</div>
<?php
	include('footer-desa.php');
?>