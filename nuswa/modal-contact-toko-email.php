<!-- start modal form email -->
	<div class="modal fade" id="modalkirimviaemal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></div>
					<h4 class="modal-title" id="exampleModalLabel">Pesan Melalui E-Mail</h4>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label for="recipient-name" class="control-label">E-Mail Anda:</label>
							<input type="text" class="form-control" id="recipient-name" placeholder="Email Anda...">
						</div>
						<div class="form-group">
							<label for="message-text" class="control-label">Pesan Anda:</label>
							<textarea class="form-control" id="message-text" placeholder="Pesan Anda..."></textarea>
						</div>
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">Captcha</span>
							<img src="http://localhost/nuswa-image/?wh=500x34&text=12Random" alt="text">
							<input type="text" class="form-control" placeholder="Ketik ulang text di atas..." aria-describedby="basic-addon1">
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<input type="reset" class="btn btn-default" data-dismiss="modal" value="Batal" data-role="none">
					<input type="submit" class="btn btn-primary" value="Kirim Pesan" data-role="none">
				</div>
			</div>
		</div>
	</div>
	<!-- end modal form email -->