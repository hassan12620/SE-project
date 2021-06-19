<!doctype html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
    <style>

body{
    font-family: "Poppins",sans-serif;
}
a{
    color:white;
}
a:hover{
    color:white;
}
    </style>
</head>

<body>
    <header class="section-header">

        <section class="header-main border-bottom py-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-4">
                        <a href="user_home.php" class="brand-wrap">
                        <img class="logo" src="C:/xampp/htdocs/SeProjectPractice/MVC/app/images/logo.png" style = "width: 150px;height:80px;" >



                        </a> <!-- brand-wrap.// -->
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <form action="#" class="search  ms-5">
                            <div class="input-group w-100">
                                <input type="text" class="form-control" id="search_button" placeholder="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                            </form> <!-- search-wrap .end// -->
        
                </div> <!-- row.// -->
            </div> <!-- container.// -->
        </section> <!-- header-main .// -->
    </header>
    <br>
    <div class="container-fluid">
        <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-primary sidebar collapse ">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">


                        <li class="nav-item  mb-2">
                        <?php
                            if (!empty($_SESSION['id'])) {
                                # code...
                            
                              foreach( $this->LinksModel->getPage($_SESSION['id']) as $val)
                                  {
                                     ?>  
                                        <a href="<?php echo $val->Link_Address ?>"><?php echo $val->Real_Address ?></a>  
                                        <br>
                                        <br>
                                         
                                                            
                                       <?php    
                                                                
                                         }
                                        }   
                                        else {
                                            # code...            
                           
                                        foreach( $this->LinksModel->getPageViewer() as $val)
                                        {
                                            ?>
                                            <a href="<?php echo $val->Link_Address ?>"><?php echo $val->Real_Address ?></a>  
                                            <br>
                                            <br>
                                      <?php      
                                        }
                                        
                                        }
                                        ?>
                                       
                        </li>
                        
                       
                        </ul>
                        </div>
                 </nav>       
                </div>
            </nav>
 </body>