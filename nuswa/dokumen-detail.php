<?php
	include('header.php');
	include('search-ew.php');
?>
<div class="container header-organisasi" style="font-size: 15px; text-align: left;">
	<div class="col-md-10 col-sm-8 normal-pad-col-junk">
		<ol class="breadcrumb" style="line-height:32px; padding: 0px 12px; margin:0;">
			<li><a href="index.php">Beranda</a></li>
			<li><a href="dokumen.php">Dokumen</a></li>
			<li class="active">Judul_dokumen_detail_ada_di_sini.doc</li>
		</ol>
	</div>
	<div class="col-md-2 col-sm-4 normal-pad-col-junk">
		<div class="btn-group" style="width: 100%;">
			<div class="btn btn-danger col-xs-10" style="border-radius: 0; text-align: left;"><b class="nf-nuswa-kuas-n"></b> Tindakan</div>
			<div class="btn btn-danger col-xs-2 dropdown-toggle" style="border-radius: 0;" data-toggle="dropdown" aria-expanded="false">
				<span class="caret"></span>
				<span class="sr-only">Toggle Dropdown</span>
			</div>
			<ul class="dropdown-menu" role="menu" style="width: 100%;">
				<li><a href="#"><b class="fa fa-pencil-square-o"></b> Perbaiki Dokumen</a></li>
				<li><a href="#"><b class="fa fa-trash-o"></b> Hapus Dokumen</a></li>
			</ul>
		</div>
	</div>
	
</div>

<div id="container-detail-dokumen" class="container nuswa-container" style="padding-top: 0px;">
	<div class="col-md-12 nuswa-bg-detailbrg" style="padding:10px; margin-bottom: 10px;">
		<div class="col-md-2 content-left">
			<div class="thumb doc">
				<b class="nf-nuswa-file-doc"></b>
			</div>
		</div>
		<div class="col-md-10 content-right">
			<div class="status">
				<span class="fa fa-user">&nbsp;Admin</span>
				<span class="fa fa-calendar">&nbsp;25/05/2015</span>
				<span class="fa fa-clock-o">&nbsp;19:00 WIB</span>
				<span>|</span>
				<span>Size : 700 Kb</span>
			</div>
			<div class="title">
				<h3 class="break-wordwarp">"Judul Dokumen di sini..."</h3>
			</div>
			<div class="keterangan">
				<p>Keterangan:</p>
				<p class="break-wordwarp" style="white-space: normal;"><i>
					"Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also ..."
				</i></p>
			</div>
		</div>
	</div>

	<div class="col-md-12 nuswa-bg-detailbrg" style="padding:10px;">
		<div class="col-md-2" style="margin-bottom:10px;">
			<a href="#" class="btn btn-primary" style="width: 100%;">
				<b class="fa fa-download"></b>
				<b> Unduh Dokumen</b>
			</a>
		</div>
		<div class="col-md-2" style="margin-bottom:10px;">
			<a href="#" class="btn btn-danger" style="width: 100%;">
				<b class="fa fa-eye"></b>
				<b> Baca Dokumen</b>
			</a>
		</div>
		<div class="col-md-offset-5 col-md-3" style="line-height: 32px; color: #666;margin-bottom:10px;">
			Bagikan : 
			<a href="#" class="share-dokumen">
				<img src="image/icon-share/google.png">
			</a>
			<a href="#" class="share-dokumen">
				<img src="image/icon-share/facebook.png">
			</a>
			<a href="#" class="share-dokumen">
				<img src="image/icon-share/twitter.png">
			</a>
		</div>
		<div class="col-md-2" style="line-height: 34px;margin-bottom:10px;">
			Kode URL
		</div>
		<div class="col-md-10" style="margin-bottom:10px;">
			<input type="text" name="txtkodeurldokumen" class="form-control" value="http://www.nuswa.com/dokumen/indo/129232323.doc">
		</div>
		<div class="col-md-2" style="line-height: 34px;margin-bottom:10px;">
			Kode HTML
		</div>
		<div class="col-md-10">
			<input type="text" name="txtkodehtmldokumen" class="form-control" value="<a href='http://www.nuswa.com/dokumen/indo/129232323.doc'></a>">
		</div>
	</div>
</div>
<?php
	include('search.php');
	include('modal-login-register.php');
	include('modal-add-dokumen.php');
	include('footer.php');
?>