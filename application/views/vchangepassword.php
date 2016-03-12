<?php $this->load->view('vadminheader'); ?>
<?php 
if($quser > 0){
    foreach($quser as $rowuser){
      $id_user    = $rowuser->id_user;
      $username   = $rowuser->username;
      $oldpassword   = '';
      $newpassword   = '';
      $confirmpassword = ''; 
    }
  }
?>

      <div class="content-wrapper">
        <section class="content-header">
          <h1>SECURITY<small>with change password</small></h1>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Form Change Password</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" id="formChangePassword" action="<?= base_url();?>cchangepassword/do_changePassword">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Username</label>
                      <div class="col-sm-3">
                        <input type="hidden" class="form-control" name="id_user" value="<?php echo $id_user?>" required/>
                        <input type="text" class="form-control"name="username" value="<?php echo $username?>" required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Old Password</label>
                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="oldpassword" required/>
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">New Password</label>
                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="newpassword" required/>
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Retype Password</label>
                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="confirmPassword" required/>
                        </div>
                    </div>
                  <div class="box-footer">
                    <input type="submit" class="btn btn-success" value="Save">
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
    $('#formChangePassword').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: 'Please Fill Out This Field'
                    }/*,
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    }*/
                }
            },
            oldpassword: {
                validators: {
                    notEmpty: {
                        message: 'Please Fill Out This Field'
                    },/*
                    stringLength: {
                        min: 8,
                        max: 30,
                        message: 'The password must be more than 8 and less than 30 characters long'
                    },*/
                    remote: {
                      url: '<?php echo base_url();?>cchangepassword/checkPassword',
                        type: 'POST',
                        data: {
                          oldpassword: function(){
                            return $('#oldpassword').val();
                        }},
                        message: 'The password incorect'
                    } 
              }
            },
            newpassword: {
                validators: {
                    notEmpty: {
                        message: 'Please Fill Out This Field'
                    },
                    different: {
                        field: 'username',
                        message: 'The password cannot be the same as username'
                    }/*,
                    stringLength: {
                        min: 8,
                        max: 30,
                        message: 'The password must be more than 8 and less than 30 characters long'
                    }*/ 
                }
            },
            confirmPassword: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and cannot be empty'
                    },
                    identical: {
                        field: 'newpassword',
                        message: 'The password and its confirm are not the same'
                    } 
                }
            }                                                                                                                                         
        }
    });
    $('#resetBtn').click(function(){
      $('#formChangePassword').data('formValidation').resetForm(true);
    });
});
</script>

<?php $this->load->view('vadminfooter'); ?>