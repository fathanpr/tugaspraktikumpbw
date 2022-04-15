<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registrasi Admin</title>
    <link rel="stylesheet" href="style2.css">
  </head>
  <body>
    <div class="center">
      <h1>Admin Registration</h1>
      <form action='post_register.php' method="POST">
      <div class="txt_field">
          <input type="text" name="nama" required>
          <span></span>
          <label>Nama</label>
        </div>
        <div class="txt_field">
          <input type="email" name="email" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="txt_field">
          <input type="password" name="confirm_password" required>
          <span></span>
          <label>Confirm Password</label>
        </div>
        <input type="submit" name='register' value='Registrasi'>
      </form>
      <div class="signup_link">
          Sudah Punya Akun ? klik <a href="login.php">disini</a>
        </div>
    </div>
  </body>
</html>
