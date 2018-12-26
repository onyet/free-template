<?php
	include('header.php');
	include('search-ew.php');
?>
<div class="container header-organisasi" style="font-size: 15px; text-align: left;">
	<div class="col-md-4 col-sm-6 normal-pad-col-junk">
		<span class="col-xs-5 row" style="line-height: 32px;">Tampilkan hasil dari</span>
		<span class="col-xs-4">
			<select class="selectpicker" data-role="none">
				<option value="12">A - Z</option>
			</select>
		</span>
		<span class="col-xs-2 row"><a href="dokumen.php" class="glyphicon glyphicon-th-large btn btn-default active"></a></span>
		<span class="col-xs-1"><a href="dokumen-list.php" class="glyphicon glyphicon-th-list btn btn-default"></a></span>
	</div>
	<div class="col-md-offset-3 col-md-3 col-sm-3">
		<span class="col-xs-12 normal-pad-col-junk" style="line-height: 32px; text-align: right;">Hasil 1-10 dari 12.000</span>
	</div>
	<div class="col-md-2 col-sm-3">
		<a href="dokumen.php" class="btn btn-warning" style="width:100%; border-radius:0;">
			<b class=" glyphicon glyphicon-tasks"></b>
			<b>Semua Dokumen</b>
		</a>
	</div>
	
</div>
<div class="container nuswa-container" style="padding-top: 20px;">

	<div class="col-md-4">
		<div class="col-md-12 nuswa-title-block nuswa-block-coklat" style="margin-bottom: 0px;">
			<b class="nf-nuswa-blue-books"></b> Paling sering dibaca
		</div>
		<div class="col-md-12 nuswa-bg-detailbrg" style="padding: 15px; margin-bottom: 15px;">
			<?php for($i=0; $i<6; $i++){ ?>
			<a href="#" class="col-md-4 col-xs-3" data-toggle="tooltip" data-title="Judul Dokumen <?php echo $i+1; ?>" data-placement="bottom" style="padding:5px">
				<img src="http://localhost/nuswa-image/?wh=150" class="img-responsive">
			</a>
			<?php } ?>
			<a href="#" class="col-md-12 read-more-red" style="border-top: 1px solid #FFD861; margin-top:7px;">Lihat seluruhnya...</a>
		</div>

		<div class="col-md-12 nuswa-title-block nuswa-block-ungu" style="margin-bottom: 0px;">
			<b class="nf-nuswa-media-player"></b> Berita Vidio
		</div>
		<div class="col-md-12 nuswa-bg-detailbrg" style="padding: 15px; margin-bottom: 15px;">
			<?php for($i=0; $i<3; $i++){ ?>
			<div class="item-berita-vidio">
				<div class="status">
					<span class="fa fa-user"> Admin</span>
					<span class="fa fa-calendar"> 19/02/2015</span>
					<span class="fa fa-clock-o"> 19:00 WIB</span>
				</div>
				<div class="judul">
					<a href="#" class="break-wordwarp">"Judul ada disini..."</a>
				</div>
				<div class="isi">
					<div class="col-xs-3 content-left">
						<img src="http://localhost/nuswa-image/?wh=150" class="img-responsive">
						<div class="col-md-12 content-left">
							<div class="status">
								<a href="#"><b class="fa fa-play-circle"></b></a>
							</div>
						</div>
					</div>
					<div class="col-xs-9 content-right">
						<p class="break-wordwarp" style="white-space: normal;">
							berita di sini berita di sini berita di sini berita di sini berita di sini berita di sini berita di sini 
						</p>
						<a href="#" class="read-more-red">Selengkapnya...</a>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>

	<div class="col-md-8">
		<div class="col-md-12 nuswa-title-block-right nuswa-block-hijau" style="margin-bottom: 10px;">
			<b class="nf-nuswa-file"></b> Dokumen Anda
		</div>

		<div class="col-sm-3 col-xs-6 item-dokumen-thumb">
			<div class="thumb doc">
				<b class="nf-nuswa-file-doc"></b>
			</div>
			<div class="aktion">
				<a href="#" class="btn btn-primary" style="padding-top: 3px; padding-bottom: 3px;" data-toggle="tooltip" data-placement="bottom" title="Unduh"><b class="fa fa-download"></b>
				</a>
				<a href="#" class="btn btn-primary" style="padding-top: 3px; padding-bottom: 3px;" data-toggle="tooltip" data-placement="bottom" title="Lihat"><b class="fa fa-eye"></b>
				</a>
			</div>
			<div class="isi nuswa-bg-detailbrg divider-doc">
				<a href="dokumen-detail.php" class="break-wordwarp">"Proposal Penerimaan Santri baru..."</a>
				<table>
					<tr>
						<td>Dokumen</td>
						<td>&nbsp;&nbsp;: </td>
						<td> &nbsp;&nbsp;dokumen.doc</td>
					</tr>
					<tr>
						<td>Ukuran</td>
						<td>&nbsp;&nbsp;: </td>
						<td> &nbsp;&nbsp;15000 Kb</td>
					</tr>
				</table>
			</div>
		</div>

		<div class="col-sm-3 col-xs-6 item-dokumen-thumb">
			<div class="thumb pdf">
				<b class="nf-nuswa-file-pdf"></b>
			</div>
			<div class="aktion">
				<a href="#" class="btn btn-primary" style="padding-top: 3px; padding-bottom: 3px;" data-toggle="tooltip" data-placement="bottom" title="Unduh"><b class="fa fa-download"></b>
				</a>
				<a href="#" class="btn btn-primary" style="padding-top: 3px; padding-bottom: 3px;" data-toggle="tooltip" data-placement="bottom" title="Lihat"><b class="fa fa-eye"></b>
				</a>
			</div>
			<div class="isi nuswa-bg-detailbrg divider-pdf">
				<a href="dokumen-detail.php" class="break-wordwarp">"Title Dokumen"</a>
				<table>
					<tr>
						<td>Dokumen</td>
						<td>&nbsp;&nbsp;: </td>
						<td> &nbsp;&nbsp;dokumen.pdf</td>
					</tr>
					<tr>
						<td>Ukuran</td>
						<td>&nbsp;&nbsp;: </td>
						<td> &nbsp;&nbsp;15000 Kb</td>
					</tr>
				</table>
			</div>
		</div>

		<div class="col-sm-3 col-xs-6 item-dokumen-thumb">
			<div class="thumb ppt">
				<b class="nf-nuswa-file-ppt"></b>
			</div>
			<div class="aktion">
				<a href="#" class="btn btn-primary" style="padding-top: 3px; padding-bottom: 3px;" data-toggle="tooltip" data-placement="bottom" title="Unduh"><b class="fa fa-download"></b>
				</a>
				<a href="#" class="btn btn-primary" style="padding-top: 3px; padding-bottom: 3px;" data-toggle="tooltip" data-placement="bottom" title="Lihat"><b class="fa fa-eye"></b>
				</a>
			</div>
			<div class="isi nuswa-bg-detailbrg divider-ppt">
				<a href="dokumen-detail.php" class="break-wordwarp">"Persentasi KKPI Chapter 01 - Jaringan"</a>
				<table>
					<tr>
						<td>Dokumen</td>
						<td>&nbsp;&nbsp;: </td>
						<td> &nbsp;&nbsp;dokumen.ppt</td>
					</tr>
					<tr>
						<td>Ukuran</td>
						<td>&nbsp;&nbsp;: </td>
						<td> &nbsp;&nbsp;15000 Kb</td>
					</tr>
				</table>
			</div>
		</div>

		<div class="col-sm-3 col-xs-6 item-dokumen-thumb">
			<div class="thumb exl">
				<b class="nf-nuswa-file-exl"></b>
			</div>
			<div class="aktion">
				<a href="#" class="btn btn-primary" style="padding-top: 3px; padding-bottom: 3px;" data-toggle="tooltip" data-placement="bottom" title="Unduh"><b class="fa fa-download"></b>
				</a>
				<a href="#" class="btn btn-primary" style="padding-top: 3px; padding-bottom: 3px;" data-toggle="tooltip" data-placement="bottom" title="Lihat"><b class="fa fa-eye"></b>
				</a>
			</div>
			<div class="isi nuswa-bg-detailbrg divider-exl">
				<a href="dokumen-detail.php" class="break-wordwarp">"Title Dokumen"</a>
				<table>
					<tr>
						<td>Dokumen</td>
						<td>&nbsp;&nbsp;: </td>
						<td> &nbsp;&nbsp;dokumen.exl</td>
					</tr>
					<tr>
						<td>Ukuran</td>
						<td>&nbsp;&nbsp;: </td>
						<td> &nbsp;&nbsp;15000 Kb</td>
					</tr>
				</table>
			</div>
		</div>
	</div>

	<div class="col-md-offset-4 col-md-8"><!-- Start Pagination bottom -->
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
	</div><!-- End Pagination bottom -->
</div>
<?php
	include('search.php');
	include('modal-login-register.php');
	include('modal-add-dokumen.php');
	include('footer.php');
?>