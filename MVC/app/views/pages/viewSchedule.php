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
                            <a class="nav-link text-white" href="editaccountDR.php">
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
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 bg-secondary">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Appointments</h1>
                </div>
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-11">
                            <div class="card">
                                <div class="card-header bg-primary">
                                    Your Appointments
                                </div>
                                <div class="card-body">
                                    <table id="example" class="table  responsive nowrap  table-responsive-sm" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Patient Name</th>
                                                <th>Service</th>
                                                <th>Time</th>
                                                <th>Date</th>
                                                <th>Day</th>
                                                <th>functions</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                           <tr>
                                             <td>Anas alshazly</td>
                                             <td>scale and polishing</td>
                                             <td> 3 pm</td>
                                             <td>12/6/2021</td>
                                             <td> monday</td>
                                             <td>
                                                <div class="">
                                                    <button class="btn btn-warning" name="submit" type="submit" style = "width: 75px; height: 35px; margin-bottom:15px;">cancel</button>
                                                </div>

                                              
                                             </td>
                                           </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>
</body>
