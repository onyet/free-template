<div id="header-profile" class="container">
	<div class="col-md-12 normal-pad-col-junk image-container">
		<div class="col-md-12 nuswa-rating">
			<a href="#" class="btn btn-primary btn-add-organisasi"><b class="glyphicon glyphicon-check"></b> Tambahkan organisasi</a>
			<span class="label">
				Nilai
			</span>
			<span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star-half-o"></span>
				<span class="fa fa-star-o"></span>
			</span>
		</div>
		<div class="col-md-12 nama-profile">
			<img src="image/user/004.jpg">
			<h3 class="break-wordwarp">Nama Akun Anda</h3>
			<p class="break-wordwarp">Biografi: asda asdas asdas asdasd asdas</p>
		</div>
		<a href="#" data-toggle="modal" data-target="#profile-add-sampul" class="change-picture"><i class="nf-nuswa-kuas-n"></i></a>
		<img src="image/backprofile/123.jpg" class="img-responsive">
	</div>
	<div class="col-md-12 navbar-default">
		<div class="col-md-12 btn-group btn-group-nuswa-kategori" role="group" aria-label="false" style="line-height: 40px;">
			<div class="btn-group" role="group">
				<a href="profile-biodata.php" class="btn <?php if ($pagename=='profile-biodata.php') { echo 'active'; } ?>"><i class="glyphicon glyphicon-list-alt"></i> Biodata</a>
			</div>
			<div class="btn-group" role="group">
				<a href="#" class="btn strip">|</a>
			</div>
			<div class="btn-group" role="group">
				<a href="organisasi-anggota.php" class="btn <?php if ($pagename=='organisasi-anggota.php') { echo 'active'; } ?>"><i class="fa fa-list-alt"></i> Anggota <span class="label label-danger">150</span></a>
			</div>
			<div class="btn-group" role="group">
				<a href="#" class="btn strip">|</a>
			</div>
			<div class="btn-group" role="group">
				<a href="profile-foto.php" class="btn <?php if ($pagename=='profile-foto.php' || $pagename=='profile-foto-isi.php') { echo 'active'; } ?>"><i class="nf-nuswa-img"></i> Foto <span class="label label-danger">140</span></a>
			</div>
			<div class="btn-group" role="group">
				<a href="#" class="btn strip">|</a>
			</div>
			<div class="btn-group" role="group">
				<a href="#" class="btn"><i class="fa fa-list-alt"></i> Biografi <span class="label label-danger">10</span></a>
			</div>
			<div class="btn-group" role="group">
				<a href="#" class="btn strip">|</a>
			</div>
			<div class="btn-group" role="group" aria-label="...">
			    <a href="#" class="btn <?php if ($pagename=='profile-pesan.php' || $pagename=='profile-agenda.php') { echo 'active'; } ?>" data-toggle="dropdown" aria-expanded="false">
			      Lainnya
			      <span class="caret"></span>
			    </a>
			    <ul class="dropdown-menu" role="menu">
			      <li class="nuswa-border-left <?php if ($pagename=='profile-pesan.php') { echo 'active'; } ?>"><a href="profile-pesan.php"><i class="glyphicon glyphicon-envelope"></i> Pesan <span class="label label-danger">1</span></a></li>
			      <li class="nuswa-border-left"><a href="#"><i class="fa fa-briefcase"></i> Agenda <span class="label label-danger">3</span></a></li>
			    </ul>
			</div>
		</div>
	</div>
</div>
<?php
	include('modal-profile-sampul.php');
?>