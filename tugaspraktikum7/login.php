<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="center">
      <h1>Admin Login</h1>
      <form action='post_login.php' method="POST">
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
        <input type="submit" name='login' value='Login'>
        <div class="signup_link">
          Belum punya akun ? klik <a href="register.php">disini</a>
        </div>
      </form>
    </div>

  </body>
</html>
