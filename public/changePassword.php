<?php
 include("navBar.php");
  define('__ROOT__', "../app/");
  require_once(__ROOT__ . "model/persons.php");
  require_once(__ROOT__ . "controller/PersonsController.php");
  require_once(__ROOT__ . "view/ViewPerson.php");
  
  $model = new Persons( $_SESSION['ID']);
  $controller = new PersonsController($model);
  $view = new ViewPerson($controller, $model);
  if (isset($_GET['action']) && !empty($_GET['action'])) {
    switch($_GET['action']){
      case 'editaction':
        echo $view->ShowForm();
        break;



    }
  }


?>

