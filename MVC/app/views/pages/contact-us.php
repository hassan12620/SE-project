<?php
include("navBar.php");

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Contact-Us</title>
</head>

<body>

<main class="col-md-9  ms-sm-auto col-lg-10 px-md-4 bg-light">
               <div class="col-md-6 col-lg-6 form-center">
                    <!-- Registeration Form -->
                    <form id="register-form" method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 style="text-color:black;">Contact-Us</h1>
                </div>
                        <div class="container">
                            <div class="form-row">
                                <div style="margin-left:-10px"class="form-group col-md-6   ">
                                    <input type="text" name="name" class="form-control" placeholder="First Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="lname" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-12 mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email address">
                        </div>
                        <div class="form-group col-lg-12 mb-3">
                            <textarea id="subject" class="form-control" name="password" placeholder="write somthing"></textarea>
                        </div>
                          <div class="form-group col-lg-12 mx-auto mb-3">
                            <input type="submit" id="update" name="update" class="btn btn-primary btn-block py-2 font-weight-bold" value="confirm " onClick='showMessage()'>
                            
                        </div>
                    </form>
               </div>
            </main>
        </div>
    </div>
</body>
                  

