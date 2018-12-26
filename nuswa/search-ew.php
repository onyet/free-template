<div class="container nuswa-container nuswa-organisasi-search">
	<div class="col-md-4 col-sm-7 normal-pad-col-junk colom">
		<input type="text" class="form-control" placeholder="Pencarian..." name="search-organisasi-01" id="search-organisasi-01">
	</div>
	<div class="col-md-2 col-sm-4 content-right colom">
		<select name="search-organisasi-02" id="search-organisasi-02" class="selectpicker" data-style="btn-default" data-role="none">
			<option value="default">Kategori</option>
			<option value="ABCD2">ABCD2</option>
		</select>
	</div>
	<div class="col-md-1 col-sm-1 content-right colom">
		<div class="btn btn-danger nuswa-btn-search-organisasi">
			<b class="nf-nuswa-pencarianbaru"></b><span class="text-dropdown-nuswa"> Pencarian</span>
		</div>
	</div>
	<div class="col-md-offset-3 col-md-2 normal-pad-col-junk">
		<div class="btn btn-primary" data-toggle="modal" <?php if ($pagename=='organisasi.php') { echo 'data-target="#buat-organisasi-01"'; } if ($pagename=='dokumen.php' || $pagename=='dokumen-list.php' || $pagename=='dokumen-detail.php' || $pagename=='dokumen-me.php') { echo 'data-target="#unggahdokumen1"'; } ?> style="width: 100%; border-radius: 0px;">
			<b><?php if ($pagename=='organisasi.php') { echo 'Buat Organisasi'; } if ($pagename=='dokumen.php' || $pagename=='dokumen-list.php' || $pagename=='dokumen-detail.php' || $pagename=='dokumen-me.php') { echo 'Unggah Dokumen'; } ?></b>
		</div>
	</div>
</div>