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
                <form class="form-horizontal" method="post" id="vadminadd" action="<?= base_url();?>cadminadd/add_trayek">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Nomor Angkutan</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control"name="no_angkot" required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Jenis Trayek</label>
                      <div class="input group col-sm-6">
                        <input type="radio" name="id_jenis_trayek" value="1" class="radio-inline"  tabindex="5"> Dalam Kota
                        <input type="radio" name="id_jenis_trayek" value="2" class="radio-inline" tabindex="5"> Antar Kota
                      </div>
                    </div>
                    <!-- <div class="form-group">
                      <label class="col-sm-2 control-label">Jenis Trayek</label>
                      <div class="input group col-sm-6">
                        <input type="radio" name="id_jenis_trayek" value="1" class="radio-inline flat-red"  tabindex="5"> Dalam Kota
                        <input type="radio" name="id_jenis_trayek" value="2" class="radio-inline flat-red" tabindex="5"> Antar Kota
                      </div>
                    </div> -->
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Trayek Angkutan</label>
                        <div class="col-sm-3">
                          <input type="text" class="form-control" placeholder="Asal" class="radio-inline" name="trayek_asal" required/>
                        </div>
                        <div class="col-sm-3">
                          <input type="text" class="form-control" placeholder="Tujuan" class="radio-inline" name="trayek_tujuan" required/>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Rute Angkutan</label>
                      <div class="col-sm-6">
                        <textarea type="text" class="form-control" name="rute" required/></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Warna Angkutan</label>
                      <div class="col-md-3">
                        <select class="form-control select2" name="id_warna_angkot" style="width: 100%;">
                          <option value="">---Pilih Warna---</option>
                          <option value="1">Biru Dongker</option>
                          <option value="2">Biru Muda</option>
                          <option value="3">Hijau</option>
                          <option value="4">Kuning</option>
                          <option value="5">Merah</option>
                          <option value="6">Orange</option>
                          <option value="7">Pink</option>
                          <option value="8">Putih</option>
                          <option value="9">Ungu</option>
                        </select>
                      </div>
                  </div><!-- /.box-body -->
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Tarif Angkutan</label>
                        <div class="col-sm-3">
                          <input type="text" class="form-control" placeholder="Tarif Dekat" class="radio-inline" name="tarif_dekat" required/>
                        </div>
                        <div class="col-sm-3">
                          <input type="text" class="form-control" placeholder="Tarif Jauh" class="radio-inline" name="tarif_jauh" required/>
                        </div>
                    </div>
                  <div class="box-footer">
                    <input type="submit" class="btn btn-success" value="Next">
                    <button type="button" class="btn btn-default" id="resetBtn">Reset</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
            </div>
          </div>          
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

<script type="text/javascript">
$(document).ready(function() {
    $('#vadminadd').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            no_angkot: {
                validators: {
                    notEmpty: {
                        message: 'Please Fill Out This Field'
                    }
                }
            },
            id_jenis_trayek: {
                validators: {
                    notEmpty: {
                        message : 'Please Fill Out This Field'
                    }
                }
            },
            trayek_asal: {
                validators: {
                    notEmpty: {
                        message : 'Please Fill Out This Field'
                    }
                }
            },
            trayek_tujuan: {
                validators: {
                    notEmpty: {
                        message : 'Please Fill Out This Field'
                    }

                }
            },
            rute: {
                validators: {
                    notEmpty: {
                        message : 'Please Fill Out This Field'
                    }
                }
            },
            tarif_dekat: {
                message: 'The Source is not valid',
                validators: {
                    notEmpty: {
                        message: 'Please Fill Out This Field'
                    },
                    regexp: {
                          regexp: /^\d+$/,
                          message: 'Please Fill With Number'
                    }
                }
            },
            tarif_jauh: {
                message: 'Date is not valid',
                validators: {
                    notEmpty: {
                        message: 'Please Fill Out This Field'
                    },
                    regexp: {
                          regexp: /^\d+$/,
                          message: 'Please Fill With Number'
                    }
                }
            },
            id_warna_angkot: {
                message: 'Date is not valid',
                validators: {
                     notEmpty: {
                        message: 'Please Fill Out This Field'
                    }
                }
            }
        }
    });

    $('#resetBtn').click(function(){
      $('#vadminadd').data('formValidation').resetForm(true);
    });
});
</script>
<?php $this->load->view('vadminfooter'); ?>