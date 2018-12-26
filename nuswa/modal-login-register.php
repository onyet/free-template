<!-- Form Login dan Register -->
<div id="nuswa-form-login" class="nuswa-bg-login modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<div class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></div>
					<h4 class="modal-title" id="myModalLabel">
						<img src="image/Logo-gede.png" alt="Nuswa Indonesia">
					</h4>
				</div>
				<div class="modal-body">
					<div class="col-md-6 normal-pad-col-junk login">
						<div class="header-login">
							<span class="nf-nuswa-gembok"></span>
							<h4>LOGIN</h4>
						</div>
						<form method="post" name="formnuswalogin">
							<input type="text" name="txtunamelogin" placeholder="Nama pengguna">
							<input type="password" name="txtpasslogin" placeholder="Kata sandi" data-toggle="login" data-placement="left" title="Harus diisi dan tanpa karakter khusus." required>
							<label from="checkbox1" style="font-weight: normal;">
								<input id="checkbox1" type="checkbox" name="txtingatpass" value="Ingat password" data-toggle="login" data-placement="left" title="Harus diisi dengan benar." required data-role="none">
							Ingat Password</label>
							<div class="group-btn-login">
								<span>Lupas password? <a href="#">Klik disini</a></span>
								<input type="button" value="Masuk" name="nuswabtnlogin" data-role="none">
								<input type="button" class="btn-loading-nuswa-login" value=" " disabled="disabled" data-role="none">
							</div>
						</form>
					</div>
					<div class="col-md-6 normal-pad-col-junk register">
						<div class="header-register">
							PENDAFTARAN
						</div>
						<form method="post" name="formnuswaregister">
							<table>
								<tr>
									<td>Nama Pengguna</td>
									<td><input type="text" name="txtunameregister" placeholder="Nama Pengguna" data-toggle="register" data-placement="right" title="minimal 2 karakter tanpa menggunakan karakter khusus." required></td>
								</tr>
								<tr>
									<td>Kata Sandi</td>
									<td><input type="password" name="txtpassregister" placeholder="Kata Sandi"data-toggle="register" data-placement="right" title="Harus diisi dengan benar." required></td>
								</tr>
								<tr>
									<td>Konfirmasi Kata Sandi</td>
									<td><input type="password" name="txtpass2register" placeholder="Ketik Ulang Kata Sandi" data-toggle="register" data-placement="right" title="Kata sandi tidak sama." required></td>
								</tr>
								<tr>
									<td>Email</td>
									<td><input type="text" name="txtemailregister" placeholder="Email Anda" data-toggle="register" data-placement="right" title="email harus valid" required></td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td><label from="checkbox2" style="font-weight: normal;">
										<input id="checkbox2" type="checkbox" name="txtacceptregister" data-role="none">
										Saya menyetujui semua ketentuan dan kebijakan yang berlaku.</label></td>
								</tr>
							</table>
							<div class="group-btn-login" style="margin-top:0;">
								<input type="button" value="Daftar" name="nuswabtnregister" data-role="none">
								<input type="button" class="btn-loading-nuswa-login" value=" " disabled="disabled" data-role="none">
							</div>
						</form>
					</div>
				</div>
				<div class="modal-footer">
					<div class="alert alert-warning" role="alert"><strong>Gagal: </strong>Pendaftaran gagal</div>
					<!-- <div class="alert alert-info" role="alert">...</div>
					<div class="alert alert-success" role="alert">...</div>
					<div class="alert alert-danger" role="alert">...</div> -->
				</div>
			</div>
	</div>
</div>
<!-- end form login dan register -->