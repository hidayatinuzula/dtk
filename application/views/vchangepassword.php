<!doctype html>
<html>
  <head>
  <title>Change Password</title>
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
  <div class="formlogin"></div>
  <div class="form">
    <h2>Change Your Password</h2>
    <form method="post" id="form-login" action="" role="login">
      <input type="text" placeholder="Username/Email" name="username" required/>
      <input type="password" placeholder="Old Password" name="oldpassword" required/>
      <input type="password" placeholder="New Password" name="newpassword" required/>
      <button type="submit" name="login" value="Login">Save</button>
    </form>
  </div>
  <div class="cta"><a href="clogin">Back to Login Form?</a></div>
</div>
</body>
</html>