<div class="modal fade nuswa-blue-modal" id="profile-add-artikel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></div>
        <h4 class="modal-title" id="myModalLabel">Lapak Artikel</h4>
      </div>
      <div class="modal-body">
          <label for="judul-artikel-1">Judul Artikel</label>
          <input type="text" name="judul-artikel-1" id="judul-artikel-1" class="form-control" placeholder="Judul Artikel..." style="box-shadow: none;">

          <ul class="tab-nuswa-profile nav" role="tablist" id="tab-nuswa-01">
            <li role="presentation" class="col-md-4 normal-pad-col-junk active"><a href="#lapak4" aria-controls="home" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-picture"></i> Gambar</a></li>
            <li class="nuswa-strips"><a href="#">|</a></li>
            <li role="presentation" class="col-md-4 normal-pad-col-junk"><a href="#lapak5" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-video-camera"></i> Vidio</a></li>
            <li class="nuswa-strips"><a href="#">|</a></li>
            <li role="presentation" class="col-md-4 normal-pad-col-junk"><a href="#lapak6" aria-controls="messages" role="tab" data-toggle="tab"><i class="nf-nuswa-headphone"></i> Musik /Rekaman</a></li>
          </ul>

          <div class="tab-content nuswa-bg-detailbrg" style="border: 1px solid #e7e7e7; padding: 10px; margin-bottom: 10px;">
            <div role="tabpanel" class="tab-pane active" id="lapak4">
                <div class="input-group">
                  <input type="text" class="form-control" aria-label="..." id="txttext8" placeholder="Foto Cover..." style="box-shadow: none;">
                  <div class="input-group-btn">
                    <div class="btn btn-primary" id="btnupload2"><b class="nf-nuswa-img"></b> Cari Foto</div>
                  </div><!-- /btn-group -->
                </div><!-- /input-group -->
                <input type="file" name="file2" id="file2" accept="image/*">
            </div>
            <div role="tabpanel" class="tab-pane" id="lapak5">
                <div class="input-group">
                  <span class="input-group-addon">URL Vidio</span>
                  <input type="text" class="form-control" placeholder="Youtube URL..." id="url-profile-01" style="box-shadow: none;">
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="lapak6">
                <div class="input-group">
                  <span class="input-group-addon">URL Music</span>
                  <input type="text" class="form-control" placeholder="SounCloud URL..." id="url-profile-02" style="box-shadow: none;">
                </div>
            </div>
          </div>

          <select class="selectpicker" data-style="btn-primary" data-role="none">
              <option value="terserah">Kategori</option>
          </select>
          <textarea name="isi-artikel-profile2" id="isi-artikel-profile2"></textarea>
      </div>
      <div class="modal-footer">
        <div type="button" class="btn btn-danger" data-dismiss="modal">Batal</div>
        <div type="button" class="btn btn-primary">Buat Artikel</div>
      </div>
    </div>
  </div>
</div>