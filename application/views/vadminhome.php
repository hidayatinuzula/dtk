<?php $this->load->view('vadminheader'); ?>
<!-- Automatic element centering -->
    <div class="content-wrapper">
      <br><br><br><br>
      <div class="lockscreen-logo">
        <img src="assets/images/logo2.png" alt="logo">
      </div>
      <div class="lockscreen-logo">
        <a href="#"><a href=""><b>WELCOME </b><?php echo "@".$this->session->userdata['username']; ?></a>
      </div>
      <!-- <div class="text-center">
        <a href="#"><a href="">Admin Aplikasi De-TransKot</a>
      </div> -->
      <div class="help-block text-center">
        Admin Aplikasi De-TransKot<br>
        Aplikasi Informasi Rute Angkutan Kota Depok
      </div>
  </div><!-- /.center -->

<?php $this->load->view('vadminfooter'); ?>