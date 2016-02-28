<?php $this->load->view('vadminheader'); ?>

      <div class="content-wrapper">
        <section class="content-header">
          <h1>ADD <small>angkutan kota Depok</small></h1>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Form ADD Rute</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Nomor Angkutan</label>
                      <div class="col-sm-3">
                        <input type="email" class="form-control" id="inputEmail3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Trayek Angkutan</label>
                      <div class="row">
                        <div class="col-xs-3">
                          <input type="text" class="form-control" placeholder="Asal">
                        </div>
                        <div class="col-xs-3">
                          <input type="text" class="form-control" placeholder="Tujuan">
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Rute Angkutan</label>
                      <div class="col-sm-6">
                        <textarea type="email" class="form-control" id="inputEmail3"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Tarif Angkutan</label>
                      <div class="row">
                        <div class="col-xs-3">
                          <input type="text" class="form-control" placeholder="Tarif Dekat">
                        </div>
                        <div class="col-xs-3">
                          <input type="text" class="form-control" placeholder="Tarif Jauh">
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Warna Angkutan</label>
                      <div class="col-md-6">
                        <select class="form-control select2" style="width: 100%;">
                          <option selected="selected">Pilih Warna</option>
                          <option>Biru Dongker</option>
                          <option>Biru Muda</option>
                          <option>Merah</option>
                          <option>Pink</option>
                          <option>Ungu</option>
                          <option>Hijau</option>
                          <option>Kuning</option>
                        </select>
                      </div>
      
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-default">Reset</button>
                    <button type="submit" class="btn btn-info pull-right">Next</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
            </div>
          </div>          
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

<?php $this->load->view('vadminfooter'); ?>