<?php $this->load->view('vadminheader'); ?>


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>TABEL <small>Data Admin DTK</small></h1>
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
                        <th width="30%"><font color="#fff"><center>Nama</center></font></th>
                        <th width="40%"><font color="#fff"><center>Email</center></font></th>
                        <th width="30%"><font color="#fff"><center>Telepon</center></font></th>
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

<script type="text/javascript" charset="utf-8">
 $(document).ready(function(){
          table = $("#table").DataTable({
                "processing": true, 
                "serverSide": true, 
                "ajax": {   
                    "url": "<?php echo site_url('cadmindata/view_data')?>",
                    "type": "POST"
                },    
                "columnDefs": [
                    {
                        "targets": [ 1, 2], 
                        "orderable": false,
                    },
                ],  
                "scrollX": false
            });
        });
    </script>
<?php $this->load->view('vadminfooter'); ?>