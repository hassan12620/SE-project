<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- File CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>login</title>
</head>

<body>
    <header class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Beauty Dent Clinic</a>
    </header>

    
    <div class="container">
            <div class="row py-5 mt-4 align-items-center">
                <!-- For Demo Purpose -->
                <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
                    <h1>Welcome to Beauty Dent Clinic</h1>
                    <p class="font-italic text-muted mb-0">Login with your email and password</p>
                    </p>
                </div>
                <div class="col-md-7 col-lg-6 ml-auto">

                <form id="login-form" method="Post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="text-left w-100 mb-4 ml-3">
                          <p class="text-green h3 font-weight-bold text-uppercase">Login Form</p>
                        </div>

                        <div class="form-group col-lg-12 mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email adress">
                        </div>
                        <div class="form-group col-lg-12 mb-3">
                            <input type="password" class="form-control" name="password"  placeholder="password">
                        </div>
                        <div class="form-group col-lg-12 mx-auto mb-3">
                            <input type="submit" id="login_now" name="login" class="btn btn-primary btn-block py-2 font-weight-bold" value="Log In">


                        </div>
                        <div class="text-center w-100">
                            <p class="text-muted font-weight-bold"><a href="forgotPassword.php" class="text-primary ml-2">Forgot Password?</a></p>
                        </div>
                        <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                            <div class="border-bottom w-100 ml-5"></div>
                            <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                            <div class="border-bottom w-100 mr-5"></div>
                        </div>
                        <!-- Already Registered -->
                        <div class="text-center w-100">
                            <p class="text-muted font-weight-bold">Do not have an account? <a href="signUp.php" id="register" class="text-primary ml-2">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

    