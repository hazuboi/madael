<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Halaman Login</title>
<link href="<?php echo base_url(); ?>assets/images/javawebmedia.png" rel="shortcut icon">
<link href="<?php echo base_url(); ?>assets/css/style-admin.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="login">
<h1>Halaman Login</h1>


<form name="form1" method="POST" action="<?php echo base_url('admin/auth/login')?>">
  <p>
    <label for="username">Username</label>
    <input type="text" name="username" id="username">
  </p>
  <p>
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Login">
    <a href="<?php echo base_url('welcome')?>"><span class="tambah">    Back to home
    </span></a></p>
</form>
<footer></footer>
</div>
</body>
</html>