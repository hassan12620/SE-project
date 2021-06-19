
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Edit profile</title>
</head>

<body>

<form action="" method="post" style='width:500px; margin-left:200px; '>
    <div  class="row">
    <input type="file" id="wizard-picture" accept="image/*" name="image">
      <div class="col">
      
      <label for="formGroupExampleInput2" class="form-label">Day</label>

        <input type="text" class="form-control" value="<?php echo $this->appSchedule->GetOneApp($_SESSION['AppId'])->Day;?>" placeholder="First name"name="efname" aria-label="First name">
      </div>
      <div class="col">
      <label for="formGroupExampleInput2" class="form-label">Time</label>

        <input type="text" class="form-control" value="<?php  echo $this->appSchedule->GetOneApp($_SESSION['AppId'])->Time;?>" placeholder="Last name" name="elname" aria-label="Last name">
        <br> <br> <br>

      </div>
      
      <div style='margin-top:-70px;'>
      <div class="col" >
      <label for="formGroupExampleInput2" class="form-label">Doctor_Name</label>
        <input type="text" class="form-control"value="<?php echo $this->appSchedule->GetOneApp($_SESSION['AppId'])->Doctor_Name;?>" placeholder="Email"name="e_email" aria-label="Last name">
        <br> <br> <br> 
        
          <input type="submit"  name="edit" class="btn btn-primary btn-block py-2 font-weight-bold" value="EditApp">
        </div>

    </form>   

  </div>

      </div>

      </div>   

</div>

</body>
    </html>