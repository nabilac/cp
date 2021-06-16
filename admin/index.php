<?php
include "periksa.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Admin Company Profile</title>
    <link href="assets/images/logo/atom.png" rel="icon" />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link
      rel="stylesheet"
      href="assets/vendors/bootstrap-icons/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="assets/css/app.css" />
    <link rel="stylesheet" href="assets/css/pages/auth.css" />
  </head>

  <body>
    <div id="auth">
      <div class="row h-100">
        <div class="col-lg-12 col-12">
          <div id="auth-left">
            <div class="auth-logo">
              <a href="index.html"
                ><img src="assets/images/logo/atom.png" alt="Logo"
              /></a>
            </div>
            <h1 class="auth-title">Login</h1>
            <form name="login" action="periksa.php" method="post">
              <div class="form-group position-relative has-icon-left mb-4">
                <input
                  type="text"
                  class="form-control form-control-xl"
                  name="username"
                  placeholder="Username"
                />
                <div class="form-control-icon">
                  <i class="bi bi-person"></i>
                </div>
              </div>
              <div class="form-group position-relative has-icon-left mb-4">
                <input
                  type="password"
                  class="form-control form-control-xl"
                  name="password"
                  placeholder="Password"
                />
                <div class="form-control-icon">
                  <i class="bi bi-shield-lock"></i>
                </div>
              </div>
              <button
                class="btn btn-primary btn-block btn-lg shadow-lg mt-3"
                type="submit"
                name="login"
                value="login"
              >
                Login
              </button>
            </form>
            <div class="text-center mt-3 text-lg fs-5">
              <p>
                <a class="font-bold" href="lupa_password.php"
                  >Forgot password?</a
                >
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
