<!DOCTYPE html>
<html lang="en">
<head>
  <title>Halaman Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="aset/bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="aset/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" align="center">
  <div align="center" style="width:400px;margin-top:5%;">
    <form method="post" class="well well-lg" action="" style="-webkit-box-shadow: 0px 0px 30px #788788;"> 
    <h3 align="center"><span class="glyphicon glyphicon-home"></span> Sistem Informasi Mahasiswa</h3>
    <hr>
    <?php if(isset($error)){
    ?>
      <p style="color: red; font-style: italic;">Username / Password Salah</p>
    <?php }
    ?>
      <div class="form-group" align="left">
        <label for="username"><span class="glyphicon glyphicon-user"></span> Username:</label>
        <input type="text" class="form-control" id="username" placeholder="ketikkan username anda" name="username" autocomplete="off" required>
      </div>
      <div class="form-group" align="left">
        <label for="password"><span class="glyphicon glyphicon-cog"></span> Password:</label>
        <input type="password" class="form-control" id="password" placeholder="ketikkan password anda" name="password">
      </div>
      <div class="checkbox" align="left">
        <label><input type="checkbox" name="remember"> Remember me</label>
      </div>
      <button type="submit" name="login" class="btn btn-block btn-success">LOGIN ADMIN</button>
      <a href="mhs/mhs_home.php" type="button" class="btn btn-block btn-info">Register Mahasiswa Baru</a>
      <a href="registrasi.php" type="button" class="btn btn-block btn-primary">Register User Baru</a>
      <button type="button" class="btn btn-link"><span class="glyphicon glyphicon-eye-open"></span> Lupa Password ?</button>  
    </form>
  </div>
</div>

</body>
</html>