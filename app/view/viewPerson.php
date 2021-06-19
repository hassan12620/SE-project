<?php
    require_once(__ROOT__ . "view/View.php");

    class viewPerson extends View
    {
        function ShowForm()
        {
            $form='<form action="changePassword.php?action=editaction" method="post">
            <div style=`width:500px; margin-left:200px; ` class="row">
            <input type="file" id="wizard-picture" accept="image/*" name="image">
            
              <div class="col">
              <label for="formGroupExampleInput2" class="form-label">First Name</label>
            
                <input type="text" class="form-control" value="'.$this->model->getFirstName().'" aria-label="First name">
              </div>
              <div class="col">
              <label for="formGroupExampleInput2" class="form-label">Last Name </label>
            
                <input type="text" class="form-control"  value="'.$this->model->getLastName().'" aria-label="Last name">
                <br> <br> <br>
            
              </div>
              
              <div style=`margin-top:-180px;`>
              <div class="col" style ="margin-top:90px;">
              <label for="formGroupExampleInput2" class="form-label">Email</label>
                <input type="text" class="form-control" value="'.$this->model->getEmail().'" aria-label="Last name">
                <br> <br> <br> 
                <div style=`margin-top:-70px;`>
               <label for="formGroupExampleInput2" class="form-label">Password</label>
            
                <input type="password" class="form-control" value="'.$this->model->getPassword().'" aria-label="Last name">
                
            
              </div>
              <div class="col" style = "margin-top:5px;">
              <label for="formGroupExampleInput2" class="form-label">Confirm-Password</label>
            
                <input type="password" class="form-control" value="'.$this->model->getPassword().'" aria-label="Last name">
                <div style = "margin-top:10px; margin-left:40%;">
                <button  type="button" class="btn btn-primary">confirm</button>
                </div>
            
                
            
              </div>
            
                  </div>
            
                  </div>   
            
            </div>';
            return $form;
        }
    }
?>