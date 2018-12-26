<div class="modal fade nuswa-blue-modal" id="buat-organisasi-01" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="text-align: left;">Organisasi apa yang akan kamu buat ?</h4>
      </div>
      <div class="modal-body">
        <div style="background-color:#e5e5e5; padding: 15px;">
          <input type="text" placeholder="Nama Organisasi..." class="form-control" style="margin-bottom: 10px;">

          <select id="select-02" class="selectpicker" data-role="none" data-style="btn-primary">
            <option value="123">Kategori Organisasi</option>
          </select>

           <script type="text/javascript">
              tinymce.init({
                  selector: "textarea"
              });
          </script>
          <textarea name="Deskripsi-new-organisasi"></textarea>

          <label style="color:#333; display: block; margin-bottom: 0;">Jenis Organisasi:</label>
          <label>
            <input type="radio" name="radio1" data-role="none" value="1"> Publik
          </label>
          &nbsp; &nbsp;
          <label>
            <input type="radio" name="radio1" data-role="none" value="2"> Pribadi
          </label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Buat Organisasi</button>
      </div>
    </div>
  </div>
</div>