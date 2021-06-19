<?php
/*
 * Base Controller
 * Loads the models and views
 */
class Controller
{
    // Load model
    public function loadModel($model,$param = '')
    {
        require_once '../app/models/' . $model . '.php';
        if(!empty($param)){
            return new $model();
        }
        else{
            return new $model($param);
        }
    }

    // Load view
    public function loadView($view, $data = [])
    {
        // Check for view file
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            // View does not exist
            die('View does not exist');
        }
    }
}
