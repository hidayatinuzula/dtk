<?php $this->load->view('vadminheader'); ?>


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>TABEL <small>angkutan kota Depok</small></h1>
        </section>
        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header">
                  <!-- <h3 class="box-title">Tabel Angkutan Kota Depok</h3> -->
                </div><!-- /.box-header -->
                <div class="panel-body">
                  <table id="table" class="table table-bordered table-striped">
                    <thead>
                      <tr bgcolor="#2cab96">
                        <th width="12%"><font color="#fff"><center>No. Angkot</center></font></th>
                        <th width="19%"><font color="#fff"><center>Trayek</center></font></th>
                        <th width="40%"><font color="#fff"><center>Rute</center></font></th>
                        <th width="10%"><font color="#fff"><center>Warna</center></font></th>
                        <th width="10%"><font color="#fff"><center>Tarif</center></font></th>
                        <th width="9%"><font color="#fff"><center>Aksi</center></font></th>
                      </tr>
                    </thead>
                    <tbody style="text-align: center"></tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    <!-- Bootstrap modal -->
    <div class="modal fade" id="modal_form" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">FORM EDIT TRAYEK ANGKOT</h3>
              </div>
              <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <div class="form-body">
                      <div class="form-group">
                    <div class="col-sm-12">
                        <input type="hidden" name="txt_id_angkot" id="txt_id_angkot" class="form-control" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Nomor Angkot</label>
                    <div class="col-sm-5">
                        <input type="text" name="txt_no_angkot" id="txt_no_angkot" class="form-control" required/>
                    </div>
                </div>
                <!-- <div class="form-group">
                      <label class="col-sm-3 control-label">Jenis Trayek</label>
                    <div class="col-sm-9">
                      <input type="radio" name="txt_id_jenis_trayek" value="1" class="radio-inline flat-red"  tabindex="5" checked> Dalam Kota
                      <input type="radio" name="txt_id_jenis_trayek" value="2" class="radio-inline flat-red" tabindex="5"> Antar Kota
                    </div>
                    </div> -->
                <div class="form-group">
                        <label class="col-sm-3 control-label">Jenis Trayek</label>
                    <div class="col-sm-7">
                        <select name="txt_id_jenis_trayek" class="form-control" style="width: 100%;">
                          <option value="">---Pilih---</option>
                          <option value="1">Trayek Angkutan Dalam Kota</option>
                          <option value="2">Trayek Angkutan Antar Kota Dalam Propinsi</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                      <label class="col-sm-3 control-label">Trayek</label>
                    <div class="col-sm-4">
                        <input type="text" name="txt_trayek_asal" id="txt_trayek_asal" class="form-control" required/>
                    </div>
                    <div class="col-sm-1">
                      -
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="txt_trayek_tujuan" id="txt_trayek_tujuan" class="form-control" required/>
                    </div>
                </div>
                <div class="form-group">
                      <label class="col-sm-3 control-label">Rute Angkutan</label>
                      <div class="col-sm-9">
                      <textarea type="text" name="txt_rute" id="txt_rute" class="form-control" required/></textarea>
                    </div>
                </div>   
                <div class="form-group">
                        <label class="col-sm-3 control-label">Warna Angkutan</label>
                    <div class="col-sm-4">
                        <select name="txt_id_warna_angkot" class="form-control" style="width: 100%;">
                          <option value="">---Pilih---</option>
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
                </div>
                <div class="form-group">
                        <label class="col-sm-3 control-label">Tarif</label>
                    <div class="col-sm-3">
                        <input type="text" name="txt_tarif_dekat" id="txt_tarif_dekat" class="form-control radio-inline">
                    </div>
                    <div class="col-sm-1">
                      -
                    </div>
                    <div class="col-sm-3">
                        <input type="text" name="txt_tarif_jauh" id="txt_tarif_jauh" class="form-control radio-inline">
                    </div>
                </div>  
                <!-- <div class="form-group">
                    <div class="col-md-12">
                        <label for="Gl Account">GL Account</label>
                        <select name="txt_glaccount" id="txt_glaccount" class="form-control">
                        <option value="">---Select a GL Account---</option>
                      <?php //foreach($glaccount as $row):?>
                                    <option value="<?php //echo $row->gl_Account;?>"><?php //echo $row->gl_Account;?></option>
                                  <?php //endforeach;?>
                    </select>
                    </div>
                </div> -->
              </div>
              <div class="modal-footer">
                  <button type="submit" id="btnSave" onclick="" class="btn btn-primary">Save</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                  </form>
                </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
     </div><!-- End Bootstrap modal -->

<script type="text/javascript" charset="utf-8">
       var save_method; 
       var table;
       $(document).ready(function(){
            $("form")[0].reset();
        $('#form').formValidation({
                message: 'This value is not valid',
                icon: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    txt_no_angkot: {
                        validators: {
                            notEmpty: {
                                message: 'Please Fill Out This Field'
                            }
                        }
                    },
                    txt_id_jenis_trayek: {
                        validators: {
                            notEmpty: {
                                message: 'Please Fill Out This Field'
                            }
                        }
                    },
                    txt_trayek_asal: {
                        validators: {
                            notEmpty: {
                                message: 'Please Fill Out This Field'
                            }
                        }
                    },
                    txt_trayek_tujuan: {
                        validators: {
                            notEmpty: {
                                message: 'Please Fill Out This Field'
                            }
                        }
                    },
                    txt_rute: {
                        validators: {
                            notEmpty: {
                                message: 'Please Fill Out This Field'
                            }
                        }
                    },
                    txt_id_warna_angkot: {
                        validators: {
                            notEmpty: {
                                message: 'Please Fill Out This Field'
                            }
                        }
                    },
                    txt_tarif_dekat: {
                        validators: {
                            notEmpty: {
                                message: 'Please Fill Out This Field'
                            }
                        }
                    },
                    txt_tarif_jauh: {
                        validators: {
                            notEmpty: {
                                message: 'Please Fill Out This Field'
                            }
                        }
                    }
                }
            })
        
        .on('success.form.fv', function(e) {
                // Prevent form submission
                e.preventDefault();

                // Get the form instance
                var $form = $(e.target);

                // Get the FormValidation instance
                var bv = $form.data('formValidation');

                // Use Ajax to submit form data
                $.post($form.attr('action'), $form.serialize(), function(result) {
                    console.log(result);
                }, 'json');

                save();
            });
                table = $("#table").DataTable({
                "processing": true, 
                "serverSide": true, 
                "ajax": {   
                    "url": "<?php echo site_url('cadmin/view_data')?>",
                    "type": "POST"
                },    
                "columnDefs": [
                    {
                        "targets": [ 2, 3, 4, 5 ], 
                        "orderable": false,
                    },
                ],  
                //"sScrollX": "3000px",
                //"autoWidth": false,  
                //"filter":false
                "scrollX": false
            });
        });
           
        function refresh() {
            location.reload();
       }
        function reload_table(){
            table.ajax.reload(null,false); 
        }

        function edit_trayek(id_angkot){
          save_method = 'update';
          $('#form')[0].reset(); // reset form on modals
   
          //Ajax Load data from ajax
          $.ajax({
            url : "<?php echo site_url('cadmin/edit/')?>/" + id_angkot,
            type: "GET",
            dataType: "JSON",
            success: function(data){ 
                $('[name="txt_id_angkot"]').val(data.id_angkot);
                $('[name="txt_no_angkot"]').val(data.no_angkot);
                $('[name="txt_id_jenis_trayek"]').val(data.id_jenis_trayek);
                $('[name="txt_trayek_asal"]').val(data.trayek_asal);
                $('[name="txt_trayek_tujuan"]').val(data.trayek_tujuan);
                $('[name="txt_rute"]').val(data.rute);
                $('[name="txt_id_warna_angkot"]').val(data.id_warna_angkot);
                $('[name="txt_tarif_dekat"]').val(data.tarif_dekat);
                $('[name="txt_tarif_jauh"]').val(data.tarif_jauh);
   
                $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Trayek'); // Set title to Bootstrap modal title  
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
      }

      function save(){
        var url;
        if(save_method == 'update'){
          url = "<?php echo site_url('cadmin/update')?>";
          }

          $.ajax({
              url : url,
              type: "POST",
              data: $('#form').serialize(),
              dataType: "JSON",
              success: function(data){
                 $('#modal_form').modal('hide');
                 reload_table();
              },
              error: function (jqXHR, textStatus, errorThrown){
                  alert('Error adding / update data');
              }
          });
          refresh();
      }

    function delete_trayek(id_angkot){
        if(confirm('Are you sure delete this data?')){
            $.ajax({
                url : "<?php echo site_url('cadmin/delete');?>/"+id_angkot,
                type: "POST",
                dataType: "JSON",
                success: function(data){
                    $('#modal_form').modal('hide');
                    reload_table();
                },
                error: function (jqXHR, textStatus, errorThrown){
                    alert('Error adding / update data');
                }
            });
            refresh();
          }
      }
    </script>
<?php $this->load->view('vadminfooter'); ?>