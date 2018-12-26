<form target="iframe1" action="proses.php" method="post" enctype="multipart/form-data" class="form-horizontal">
<div class="modal fade nuswa-blue-modal" id="profile-add-sampul" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content col-md-12 normal-pad-col-junk">
      <div class="modal-body">
          <img src="image/backprofile/123.jpg" class="img-responsive">
          <div class="col-md-12 nuswa-foto-toko-detail" style="margin-bottom: 0;">
            <img src="image/user/004.jpg">
          </div>

          <form id="form1" name="form1" action="proses.php" target="iframe1" method="post" enctype="multipart/form-data">
          <div class="input-group">
            <input type="text" class="form-control" aria-label="..." id="txttext12" placeholder="Foto Profile...">
            <div class="input-group-btn">
              <div class="btn btn-primary" id="btnupload6"><b class="nf-nuswa-img"></b> Unggah Foto</div>
            </div><!-- /btn-group -->
          </div><!-- /input-group -->
          <input type="file" name="file7" id="file7" accept="image/*">
          </form>

          <form id="form2" name="form2" action="proses.php" target="iframe1" method="post" enctype="multipart/form-data">
          <div class="input-group">
            <input type="text" class="form-control" aria-label="..." id="txttext13" placeholder="Foto Sampul...">
            <div class="input-group-btn">
              <div class="btn btn-primary" id="btnupload7"><b class="nf-nuswa-img"></b> Unggah Foto</div>
            </div><!-- /btn-group -->
          </div><!-- /input-group -->
          <input type="file" name="file8" id="file8" accept="image/*">
          </form>
      </div>

      <div class="modal-footer col-md-12">
        <div class="btn btn-danger" data-dismiss="modal">Batal</div>
        <div class="btn btn-primary">Simpan</div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</form>