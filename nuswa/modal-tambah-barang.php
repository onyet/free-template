<form id="file_upload_form1" method="post" action="http://localhost/nuswa/proses.php" enctype="multipart/form-data" target="iframe1">
<div class="modal fade nuswa-blue-modal" id="modaln1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <label for="judulbarang1">Nama Barang</label>
        <input type="text" name="judulbarang1" id="judulbarang1" placeholder="Nama Barang ..." class="form-control">

        <label for="txttext1">Harga Barang</label>
        <div class="input-group">
          <span class="input-group-addon">Rp.</span>
          <input id="txttext1" name="harga1" type="text" class="form-control nuswa-price-format" aria-describedby="txttext1" data-role="none" value="0">
        </div>

        <label style="margin-bottom:0px; margin-top: 5px;">Foto Barang</label>
        <div class="file_junk">
          <div class="input-group">
            <input type="text" class="form-control" aria-label="..." id="txttext7" placeholder="Nama Foto...">
            <div class="input-group-btn">
              <div class="btn btn-primary" id="btnupload1"><b class="nf-nuswa-img"></b> Unggah Foto</div>
            </div><!-- /btn-group -->
          </div><!-- /input-group -->
          <input id="file1" type="file" data-role="none" accept="image/*" name="file1">

          <div class="input-group">
            <input type="text" class="form-control" aria-label="..." id="txttext8" placeholder="Nama Foto...">
            <div class="input-group-btn">
              <div class="btn btn-primary" id="btnupload2"><b class="nf-nuswa-img"></b> Unggah Foto</div>
            </div><!-- /btn-group -->
          </div><!-- /input-group -->
          <input id="file2" type="file" data-role="none" accept="image/*" name="file2">

          <div class="input-group">
            <input type="text" class="form-control" aria-label="..." id="txttext9" placeholder="Nama Foto...">
            <div class="input-group-btn">
              <div class="btn btn-primary" id="btnupload3"><b class="nf-nuswa-img"></b> Unggah Foto</div>
            </div><!-- /btn-group -->
          </div><!-- /input-group -->
          <input id="file3" type="file" data-role="none" accept="image/*" name="file3">

          <div class="input-group">
            <input type="text" class="form-control" aria-label="..." id="txttext10" placeholder="Nama Foto...">
            <div class="input-group-btn">
              <div class="btn btn-primary" id="btnupload4"><b class="nf-nuswa-img"></b> Unggah Foto</div>
            </div><!-- /btn-group -->
          </div><!-- /input-group -->
          <input id="file4" type="file" data-role="none" accept="image/*" name="file4">

          <div class="input-group">
            <input type="text" class="form-control" aria-label="..." id="txttext11" placeholder="Nama Foto...">
            <div class="input-group-btn">
              <div class="btn btn-primary" id="btnupload5"><b class="nf-nuswa-img"></b> Unggah Foto</div>
            </div><!-- /btn-group -->
          </div><!-- /input-group -->
          <input id="file5" type="file" data-role="none" accept="image/*" name="file5">
        </div>

        <label for="select4">Kategori Barang</label>
        <select id="select4" class="selectpicker" data-style="btn-default" data-role="none" style="width: 100%;" name="kategoribrg1">
            <option value="0">Elektronik</option>
            <option value="1">Gadget</option>
            <option value="2">Aksesoris & Fashion</option>
            <option value="3">Alas kaki</option>
            <option value="4">Pakaian</option>
            <option value="5">Buku</option>
            <option value="6">Properti</option>
            <option value="7">Rumah tangga</option>
            <option value="8">Bayi & Anak</option>
            <option value="9">Hobi & Olahraga</option>
            <option value="10">Kendaraan</option>
            <option value="11">Kantor & Industri</option>
            <option value="12">Pertanian & Perkebunan</option>
            <option value="13">Perikanan & Peternakan</option>
            <option value="14">Pertambangan</option>
        </select>

        <label for="textarea1">Deskripsi Barang</label>
        <textarea id="textarea1" name="deskripsibrg1" placeholder="Deskripsi Barang..." data-role="none" data-autogrow="true" class="form-control"></textarea>

        <!-- kalo barang biasa -->
        <div id="properti2">
        <label for="txttext2">Berat Barang</label>
        <div class="input-group">
          <input type="text" id="txttext2" class="form-control" data-role="none" placeholder="Berat Barang..." name="beratbrg1" value="0">
          <span class="input-group-addon">Kg</span>
          <script type="text/javascript">
            $('#txttext2').priceFormat({
                prefix: '',
                thousandsSeparator: '.',
                centsLimit: 1
            });
          </script>
        </div>
        </div>

        <!-- Kalo barang berupa properti -->
        <div id="properti1">
            <label>Luas Tanah</label>
            <div class="input-group">
              <input type="text" id="txttext3" class="form-control" data-role="none" placeholder="Luas Tanah..." name="luastanah1" value="0">
              <span class="input-group-addon">m<sup>2</sup></span>
              <script type="text/javascript">
              $('#txttext3').priceFormat({
                    prefix: '',
                    thousandsSeparator: '.',
                    centsLimit: 1
                });
              </script>
            </div>

            <label>Luas Bangunan</label>
            <div class="input-group">
              <input type="text" id="txttext4" class="form-control" data-role="none" placeholder="Luas Bangunan..." name="luasbangunan1" value="0">
              <span class="input-group-addon">m<sup>2</sup></span>
              <script type="text/javascript">
              $('#txttext4').priceFormat({
                    prefix: '',
                    thousandsSeparator: '.',
                    centsLimit: 1
                });
              </script>
            </div>

            <label>Jumlah Kamar Tidur</label>
            <input type="text" id="txttext5" class="form-control" data-role="none" placeholder="Kamar tidur..." name="jmlkmrtdr1" value="0">
            <script type="text/javascript">
            $('#txttext5').priceFormat({
                  prefix: '',
                  thousandsSeparator: '.',
                  centsLimit: 0
              });
            </script>

            <label>Jumlah Kamar Mandi</label>
            <input type="text" id="txttext6" class="form-control" data-role="none" placeholder="Kamar mandi..." name="jmlkmrmandi1" value="0">
            <script type="text/javascript">
            $('#txttext6').priceFormat({
                  prefix: '',
                  thousandsSeparator: '.',
                  centsLimit: 0
              });
            </script>

            <label for="textarea1">Alamat Lokasi</label>
            <textarea id="textarea2" name="alamatlokasi1" placeholder="Alamat lokasi rumah / ruko ..." data-role="none" data-autogrow="true" class="form-control"></textarea>

        </div>
        <label style="font-size: 14px; color: #888">Barang Apa Yang anda jual ?</label>
        <span class="radio">
          <label>
            <input type="radio" name="radio1" id="radio1" value="0" data-role="none">
            Bekas
          </label>
        </span>
        <span class="radio">
          <label>
            <input type="radio" name="radio1" id="radio1" value="1" data-role="none">
            Baru
          </label>
        </span>

      </div>
      <div class="modal-footer">
        <input type="reset" class="btn btn-danger" value="Batal" data-role="none">
        <input type="submit" class="btn btn-primary" value="Tambah" data-role="none">
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</form>
