<form target="iframe1" action="proses.php" method="post" enctype="multipart/form-data" class="form-horizontal">
<div class="modal fade nuswa-blue-modal" id="modaln2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content col-md-12 normal-pad-col-junk">
      <div class="modal-body">
          <div class="col-md-5 content-left" style="margin-bottom:10px;">

            <img src="image/marketplace/penahan-poni.jpg" class="img-responsive">
            <div class="col-md-12 nuswa-foto-toko-detail" style="margin-bottom: 0;">
              <img src="image/user/004.jpg">
            </div>

            <form id="form1" name="form1" action="proses.php" target="iframe1" method="post" enctype="multipart/form-data">
            <div class="input-group">
              <input type="text" class="form-control" aria-label="..." id="txttext12" placeholder="Logo Toko...">
              <div class="input-group-btn">
                <div class="btn btn-primary" id="btnupload6"><b class="nf-nuswa-img"></b> Unggah Foto</div>
              </div><!-- /btn-group -->
            </div><!-- /input-group -->
            <input type="file" name="file7" id="file7" accept="image/*">
            </form>

            <form id="form2" name="form2" action="proses.php" target="iframe1" method="post" enctype="multipart/form-data">
            <div class="input-group">
              <input type="text" class="form-control" aria-label="..." id="txttext13" placeholder="Iklan Toko...">
              <div class="input-group-btn">
                <div class="btn btn-primary" id="btnupload7"><b class="nf-nuswa-img"></b> Unggah Foto</div>
              </div><!-- /btn-group -->
            </div><!-- /input-group -->
            <input type="file" name="file8" id="file8" accept="image/*">
            </form>
          </div>

          <div class="col-md-7 content-right">
              <h3 class="title-informasi break-wordwarp">Nuswa Toko</h3>
              <div role="tabpanel">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Informasi Toko</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Pengiriman</a></li>
                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Pembayaran</a></li>
                    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Kontak</a></li>
                    <li role="presentation"><a href="#alamat" aria-controls="alamat" role="tab" data-toggle="tab">Alamat</a></li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <div class="form-group">
                          <label for="namatoko1" class="col-sm-3">Nama Toko</label>
                          <div class="col-sm-9">
                            <input type="text" name="namatoko1" id="namatoko1" value="Nama Toko" class="form-control">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="mototoko1" class="col-sm-3">Moto Toko</label>
                          <div class="col-sm-9">
                            <input type="text" name="mototoko1" id="mototoko1" value="Moto anda di sini" class="form-control" max-length="50">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="deskripsitoko1" class="col-sm-3">Deskripsi Toko</label>
                          <div class="col-sm-9">
                            <textarea name="deskripsitoko1" id="deskripsitoko1" class="form-control">Deskripsi Toko</textarea>
                          </div>
                        </div>
                        
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                        <div class="col-md-4 col-xs-6 item-pengirim" id="checkout1">
                          <input type="checkbox" value="1" name="pengiriman-pos" id="pengiriman-pos" checked="checked">
                          <img src="image/kurir/pos-lg.png" class="img-responsive">
                          <div class="checked active">
                              <b class="glyphicon glyphicon-ok"></b>
                          </div>
                        </div>

                        <div class="col-md-4 col-xs-6 item-pengirim" id="checkout2">
                          <input type="checkbox" value="2" name="pengiriman-tiki" id="pengiriman-tiki">
                          <img src="image/kurir/tiki-lg.png" class="img-responsive">
                          <div class="checked">
                              <b class="glyphicon glyphicon-ok"></b>
                          </div>
                        </div>

                        <div class="col-md-4 col-xs-6 item-pengirim" id="checkout3">
                          <input type="checkbox" value="3" name="pengiriman-jne" id="pengiriman-jne">
                          <img src="image/kurir/jne-lg.png" class="img-responsive">
                          <div class="checked">
                              <b class="glyphicon glyphicon-ok"></b>
                          </div>
                        </div>

                    </div>
                    <div role="tabpanel" class="tab-pane" id="messages">

                        <div class="col-md-3 col-xs-6 item-pengirim" id="checkout5">
                          <input type="checkbox" value="2" name="bankbca" id="bankbca">
                          <img src="image/bank/bca.png" class="img-responsive" style="border-color: #E6E5E4">
                          <div class="checked">
                              <b class="glyphicon glyphicon-ok"></b>
                          </div>
                        </div>

                        <div class="col-md-3 col-xs-6 item-pengirim" id="checkout8">
                          <input type="checkbox" value="5" name="bankbri" id="bankbri">
                          <img src="image/bank/bri.png" class="img-responsive" style="border-color: #E6E5E4">
                          <div class="checked">
                              <b class="glyphicon glyphicon-ok"></b>
                          </div>
                        </div>

                        <div class="col-md-3 col-xs-6 item-pengirim" id="checkout4">
                          <input type="checkbox" value="1" name="bankmandiri" id="bankmandiri">
                          <img src="image/bank/mandiri.png" class="img-responsive" style="border-color: #E6E5E4">
                          <div class="checked">
                              <b class="glyphicon glyphicon-ok"></b>
                          </div>
                        </div>

                        <div class="col-md-3 col-xs-6 item-pengirim" id="checkout12">
                          <input type="checkbox" value="9" name="bankpanin" id="bankpanin">
                          <img src="image/bank/panin.png" class="img-responsive" style="border-color: #E6E5E4">
                          <div class="checked">
                              <b class="glyphicon glyphicon-ok"></b>
                          </div>
                        </div>

                        <div class="col-md-3 col-xs-6 item-pengirim" id="checkout9">
                          <input type="checkbox" value="6" name="bankmandirisyariah" id="bankmandirisyariah">
                          <img src="image/bank/mandiri-syariah.png" class="img-responsive" style="border-color: #E6E5E4">
                          <div class="checked">
                              <b class="glyphicon glyphicon-ok"></b>
                          </div>
                        </div>

                        <div class="col-md-3 col-xs-6 item-pengirim" id="checkout13">
                          <input type="checkbox" value="9" name="bankbtpn" id="bankbtpn">
                          <img src="image/bank/btpn.png" class="img-responsive" style="border-color: #E6E5E4">
                          <div class="checked">
                              <b class="glyphicon glyphicon-ok"></b>
                          </div>
                        </div>

                        <div class="col-md-3 col-xs-6 item-pengirim" id="checkout6">
                          <input type="checkbox" value="3" name="bankbi" id="bankbni">
                          <img src="image/bank/bni.png" class="img-responsive" style="border-color: #E6E5E4">
                          <div class="checked">
                              <b class="glyphicon glyphicon-ok"></b>
                          </div>
                        </div>

                        <div class="col-md-3 col-xs-6 item-pengirim" id="checkout7">
                          <input type="checkbox" value="4" name="bankmega" id="bankmega">
                          <img src="image/bank/mega.png" class="img-responsive" style="border-color: #E6E5E4">
                          <div class="checked">
                              <b class="glyphicon glyphicon-ok"></b>
                          </div>
                        </div>

                        <div class="col-md-3 col-xs-6 item-pengirim" id="checkout10">
                          <input type="checkbox" value="7" name="bankbjb" id="bankbjb">
                          <img src="image/bank/bjb.png" class="img-responsive" style="border-color: #E6E5E4">
                          <div class="checked">
                              <b class="glyphicon glyphicon-ok"></b>
                          </div>
                        </div>

                        <div class="col-md-3 col-xs-6 item-pengirim" id="checkout11">
                          <input type="checkbox" value="8" name="bankmuamalat" id="bankmuamalat">
                          <img src="image/bank/muamalat.png" class="img-responsive" style="border-color: #E6E5E4">
                          <div class="checked">
                              <b class="glyphicon glyphicon-ok"></b>
                          </div>
                        </div>

                        <div class="col-md-3 col-xs-6 item-pengirim" id="checkout14">
                          <input type="checkbox" value="8" name="bankdanamon" id="bankdanamon">
                          <img src="image/bank/danamon.png" class="img-responsive" style="border-color: #E6E5E4">
                          <div class="checked">
                              <b class="glyphicon glyphicon-ok"></b>
                          </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="settings">

                        <div class="form-group">
                          <label for="notelp1" class="col-sm-3">No Telp</label>
                          <div class="col-sm-9">
                            <input type="text" name="notelp1" id="notelp1" value="+6282226471922" class="form-control">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="txtemail1" class="col-sm-3">Email</label>
                          <div class="col-sm-9">
                            <input type="email" name="txtemail1" id="txtemail1" value="mutelitcorp@gmail.com" class="form-control">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="pinbb1" class="col-sm-3">BBM</label>
                          <div class="col-sm-9">
                            <input type="text" name="pinbb1" id="pinbb1" value="ASHJU123A" class="form-control">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="watsapp1" class="col-sm-3">WatsApp</label>
                          <div class="col-sm-9">
                            <input type="text" name="watsapp1" id="watsapp1" value="+6282226471922" class="form-control">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="kakaotalk1" class="col-sm-3">KakaoTalk</label>
                          <div class="col-sm-9">
                            <input type="text" name="kakaotalk1" id="kakaotalk1" value="+6282226471922" class="form-control">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="txtline1" class="col-sm-3">Line</label>
                          <div class="col-sm-9">
                            <input type="text" name="txtline1" id="txtline1" value="ASHJU123A" class="form-control">
                          </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 10px;">
                          <label for="wechat1" class="col-sm-3">WeChat</label>
                          <div class="col-sm-9">
                            <input type="text" name="wechat1" id="wechat1" value="ASHJU123A" class="form-control">
                          </div>
                        </div>

                    </div>
                    <div role="tabpanel" class="tab-pane" id="alamat">

                        <div class="form-group">
                          <label for="alamattoko1" class="col-sm-3">Alamat Toko</label>
                          <div class="col-sm-9">
                            <textarea name="alamattoko1" id="alamattoko1" class="form-control">Jl. Entahlah RT 07/03</textarea>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="selecttokoprofinsi1" class="col-sm-3">Profinsi</label>
                          <div class="col-sm-9">
                              <select class="selectpicker" name="selecttokoprofinsi1" data-role="none" data-style="btn-defaul">
                                  <option value="1">Profinsi</option>
                                  <option value="2">Profinsi</option>
                                  <option value="3">Profinsi</option>
                                  <option value="4">Profinsi</option>
                              </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="selecttokokota1" class="col-sm-3">Kabupaten</label>
                          <div class="col-sm-9">
                              <select class="selectpicker" name="selecttokokota1" data-role="none" data-style="btn-defaul">
                                  <option value="1">Kabupaten</option>
                                  <option value="2">Kabupaten</option>
                                  <option value="3">Kabupaten</option>
                                  <option value="4">Kabupaten</option>
                              </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="selecttokokecamatan1" class="col-sm-3">Kecamatan</label>
                          <div class="col-sm-9">
                              <select class="selectpicker" name="selecttokokecamatan1" data-role="none" data-style="btn-defaul">
                                  <option value="1">Kecamatan</option>
                                  <option value="2">Kecamatan</option>
                                  <option value="3">Kecamatan</option>
                                  <option value="4">Kecamatan</option>
                              </select>
                          </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 10px;">
                          <label for="selecttokodesa1" class="col-sm-3">Desa</label>
                          <div class="col-sm-9">
                              <select class="selectpicker" name="selecttokodesa1" data-role="none" data-style="btn-defaul">
                                  <option value="1">Desa</option>
                                  <option value="2">Desa</option>
                                  <option value="3">Desa</option>
                                  <option value="4">Desa</option>
                              </select>
                          </div>
                        </div>

                    </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="modal-footer col-md-12">
        <div class="btn btn-danger" data-dismiss="modal">Batal</div>
        <div class="btn btn-primary">Simpan</div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</form>