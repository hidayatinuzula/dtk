<!doctype html>
<html>
  <head>
  <title>MENU UTAMA</title>
  <link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/css/formlogin.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Raleway' rel='stylesheet' type='text/css'>
  </head>
<body>
<!-- Form Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>De-TransKot</h1><span><i class="glyphicon glyphicon-tag"></i> Aplikasi Informasi Angkutan Kota Depok</span>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="glyphicon glyphicon-pencil"></i>
    <div class="tooltip">Click Me</div>
  </div>
  <div class="form">
    <h2>Login to your account</h2>
    <form method="post" id="form-login" action="<?= base_url();?>clogin/do_login" role="login">
      <input type="text" placeholder="Username" name="username" required/>
      <input type="password" placeholder="Password" name="password" required/>
      <button type="submit" name="login" value="Login">Login</button>
    </form>
  </div>
  <div class="form">
    <h2>Create an account</h2>
    <form>
      <input type="text" placeholder="Username"/>
      <input type="password" placeholder="Password"/>
      <input type="email" placeholder="Email Address"/>
      <input type="tel" placeholder="Phone Number"/>
      <button>Register</button>
    </form>
  </div>
  <div class="cta"><a href="cchangepassword">Change your password?</a></div>
</div>
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
  <!-- Toggle Function -->
    <script>
    $('.toggle').click(function(){
      // Switches the Icon
      $(this).children('i').toggleClass('fa-pencil');
      // Switches the forms  
      $('.form').animate({
        height: "toggle",
        'padding-top': 'toggle',
        'padding-bottom': 'toggle',
        opacity: "toggle"
      }, "slow");
    });
    </script>
</body>
</html>