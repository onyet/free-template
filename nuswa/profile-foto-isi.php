<?php
	include('header.php');
	include('header-profile.php');
?>
	<div class="container nuswa-container" style="padding-top: 15px;" id="profile-biodata">
		<div class="col-md-12 nuswa-title-block-right nuswa-block-biru">
			<b class="nf-nuswa-img-n"></b> Galeri Foto "Nama Album"
		</div>
		<div class="col-md-12 normal-pad-col-junk nuswa-bg-detailbrg">
			<div class="col-md-12" style="padding: 0px 15px;">
				<div class="col-md-9"><h3 style="color:#B3AE9A;"><a href="profile-foto.php" >Album Foto</a> / Nama Album</h3></div>
				<div class="col-md-3">
					<a href="#" style="text-decoration:underline;line-height: 1.42857; display: inline-block;padding: 6px 12px;margin-top: 17px; margin-bottom: 10px; float:right;">Tambah Foto Album</a>
				</div>
			</div>
			<?php
				$jmlfoto = 15;//Jumlah rows
				$string="";
				for ($i=1; $i <= $jmlfoto; $i++) { 
					$string = $string.''.($i%6).';';
				}
				$hitung1 = explode(';', $string);
				$hitung2 = count($hitung1); // result ($jmlfoto + 1)
				$hitung3 = 0;
				if ($jmlfoto < 6) {
					$hitung3 = 1;
				}else{
					for ($as=0; $as < $jmlfoto; $as++) { 
						if ($hitung1[$as]==0) {
							$hitung3 = $hitung3+1;
						}
					}
					if ($hitung1[$jmlfoto-1]!= 0) {
						$hitung3 = $hitung3+1;
					}
				}
			?>
			<?php 
			if ($jmlfoto < 6) {
				$id = $jmlfoto;
				$jmlfoto = $jmlfoto*2;
			}else{
				$id=0;
			}
			for ($as1=0; $as1 < $hitung3; $as1++) { 
				echo '<div class="col-md-12 container-profile-album">';
				if ($id%6 == 0) {
					$id2 = 0;
				}else{
					$id2 = $id;
				}
				for ($as2=$id2; $as2 < $id2+6; $as2++) { 
					if ($id < $jmlfoto) {
						echo '
						<div class="col-md-2 col-xs-6" id="'.$id.'">
							<div class="item">
								<div class="col-md-12 normal-pad-col-junk image">
									<a href="#">
										<div class="linker"><b class="fa fa-eye"></b></div>
										<img src="image/album/002.jpg" class="img-responsive">
									</a>
								</div>
								<div class="col-md-12 normal-pad-col-junk text">
									<h3 class="break-wordwarp">
										<sup class="fa fa-quote-left"></sup>Batiku Baru<sup class="fa fa-quote-right"></sup>
									</h3>
									<p>
										<span class="col-md-6 content-left"><b class="fa fa-circle"> 12/04/2014</b></span>
									</p>
								</div>
							</div>
						</div>
						';
					}
					$id++;
				}
				echo '</div>';
			} ?>
		</div>
	</div>
<?php
	include('search.php');
	include('modal-login-register.php');
	include('footer.php');
?>