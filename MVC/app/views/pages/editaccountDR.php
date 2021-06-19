<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="admin.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Appointments Schedule</title>
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Beauty Dent Clinic</a>


    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-primary sidebar collapse ">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">

                        <li class="nav-item  mb-2">
                            <a class="nav-link  text-white" href="viewSchedule.php">
                                <i class="fas fa-shopping-cart"></i>
                                Appointments
                            </a>
                        </li>
                        
                        <li class="nav-item  mb-2">
                            <a class="nav-link  text-white" href="doctorCustomer.php">
                                <i class="fas fa-users"></i>
                                Customers
                            </a>
                        </li>
                        <li class="nav-item  mb-2">
                            <a class="nav-link text-white" href="editaccount.php">
                                <i class="fas fa-key"></i>
                                Edit account
                            </a>
                        </li>
                    </ul>
                    <div class="border-top border-light p-3 mb-4 mt-5">

                        <div class="text-center">
                            <a href="logoutadmin.php" class="btn btn-outline-danger">Log Out</a>
                        </div>

                    </div>
                </div>
            </nav>
            
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 bg-light">
               <div class="col-md-6 col-lg-6 form-center">
                    <!-- Registeration Form -->
                    <form id="register-form" method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 style="text-color:black;">Edit Account</h1>
                </div>
                        <div class="container">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="First Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="lname" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-12 mb-3">
                            <input type="email" class="form-control" name="email" placeholder="example@gmail.com">
                        </div>
                        <div class="form-group col-lg-12 mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group col-lg-12 mb-3">
                            <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password">
                        </div>
                        <div class="form-group col-lg-12 mx-auto mb-3">
                            <input type="submit" id="update" name="update" class="btn btn-primary btn-block py-2 font-weight-bold" value="update" onClick='showMessage()'>
                            
                        </div>
                    </form>
               </div>
            </main>
        </div>
    </div>             
</body>