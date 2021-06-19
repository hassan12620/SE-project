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

    <title>Edit profile</title>
    <style>
      a{
    color:white;
}
a:hover{
    color:white;
}
    </style>
</head>

<body>

<form action="" method="post" style='width:500px; margin-left:500px; margin-top:-180px;'>
    <div  class="row">
    <input type="file" id="wizard-picture" accept="image/*" name="image">
      <div class="col">
      
      <label for="formGroupExampleInput2" class="form-label">First Name</label>

        <input type="text" class="form-control" value="<?php echo $this->personModel->getUser($_SESSION['id'])->First_Name;?>" placeholder="First name"name="efname" aria-label="First name">
      </div>
      <div class="col">
      <label for="formGroupExampleInput2" class="form-label">Last Name</label>

        <input type="text" class="form-control" value="<?php echo $this->personModel->getUser($_SESSION['id'])->Last_Name;?>" placeholder="Last name" name="elname" aria-label="Last name">
        <br> <br> <br>

      </div>
      
      <div style='margin-top:-70px;'>
      <div class="col" >
      <label for="formGroupExampleInput2" class="form-label">Email</label>
        <input type="text" class="form-control"value="<?php echo $this->personModel->getUser($_SESSION['id'])->Email;?>" placeholder="Email"name="e_email" aria-label="Last name">
        <br> <br> <br> 
        <div style='margin-top:-70px;'>
      <label for="formGroupExampleInput2" class="form-label">Password</label>

        <input type="password" class="form-control" placeholder="Password" value="<?php echo $this->personModel->getUser($_SESSION['id'])->Password;?>"name="epassword" aria-label="Last name">
        

      </div>
      <div class="col" style = "margin-top:5px;">
      <label for="formGroupExampleInput2" class="form-label">Confirm-Password</label>

        <input type="password" class="form-control"value="<?php echo $this->personModel->getUser($_SESSION['id'])->Password;?>" placeholder="Password" aria-label="Last name">
        <div style = "margin-top:10px; margin-left:40%;">
          <input type="submit"  name="edit" class="btn btn-primary btn-block py-2 font-weight-bold" value="Edit">
          
        </div>

    </form>   

  </div>

      </div>

      </div>   

</div>

</body>
    </html>