<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password - Admin Company Profile</title>
    <link href="assets/images/logo/atom.png" rel="icon" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
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
                    <h1 class="">Forgot Password</h1>
                    <p class="auth-subtitle mb-2">Input your email and we will send you reset password link.</p>

                    <form action="lupaPass.php" method="post">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email" class="form-control form-control-xl" placeholder="Email">
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                        </div>
                        <button type="submit" name="lupa_password" value="Submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-2">Send</button>
                    </form>
                    <div class="text-center mt-2 text-lg fs-5">
                        <p class='text-gray-600'>Remember your account? <a href="index.php" class="font-bold">Login</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>