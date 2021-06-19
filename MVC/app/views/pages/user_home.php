<?php
   require APPROOT . '/views/pages/navBar.php';
?>
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
    
    <title>Home</title>
    <style>
        .img-s {
            opacity: 0;
            transition: 0.3s;
        }

        .card:hover .img-s {
            opacity: 1;
        }
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,200&display=swap');
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

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
       
                                             </div>
                                             <form action="" method= "post">
                                                        <table id="example" class="table  responsive nowrap  table-responsive-sm" style="margin-left:450px; width:900px; margin-top:-350px;">
                                                    <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Time</th>
                                                            <th>Doctor</th>
                                                            <th>Confirm</th>
                                                            <?php if ( $this->UserType->getUserType($_SESSION['id']) ==1 || $this->UserType->getUserType($_SESSION['id']) ==3) {?>
                                                               <th>Edit</th>
                                                               <th>Delete</th>
                                                            <?php }?>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    
                                                        <?php
                                                            foreach( $this->appSchedule->getAll() as $val)
                                                            {
                                                            ?>  
                                                            <tr>  
                                                                <td > <?php echo $this->daysModel->GetDayData($val->Day)  ?></td>
                                                                <td > <?php echo $val->Time  ?></td>
                                                                <td > <?php echo $val->Doctor_Name  ?></td>
                                                                <td> <input type="submit"  name="BookApp" class="btn btn-primary btn-block py-2 font-weight-bold" value="Book"></td>
                                                                <?php if ( $this->UserType->getUserType($_SESSION['id']) ==1 || $this->UserType->getUserType($_SESSION['id']) ==3) {?>
                                                                     <td><input type="checkbox"  name="delete[]" value="<?php echo $val->Appoitment_ID?>"></td>
                                                                     <td><input type="submit"  name="editApp[]" class="btn btn-primary btn-block py-2 font-weight-bold" value="<?php echo $val->Appoitment_ID?>"></td>
                                                                <?php }?>
                                                                
                                                            </tr>
                                                            
                                                        <?php    
                                                                //var_dump($this->appSchedule->DeleteApp($_POST['delete']));  
                                                            }
                                                           
                                                        ?>
                                                        <?php if ( $this->UserType->getUserType($_SESSION['id']) ==1 || $this->UserType->getUserType($_SESSION['id']) ==3) {?>
                                                              
                                                         <input type="submit"  name="DeleteAppointment" class="btn btn-primary btn-block py-2 font-weight-bold" value="Delete Appointment">
                                                        <?php }?>
                                                    </tbody>
                                        </form>


 

</body>
</html>