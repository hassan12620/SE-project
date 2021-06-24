<?php
REQUIRE_ONCE "../model/app.php";
REQUIRE_ONCE "../view/view.php";


class appcontroller{
    public function addSlots(){

        $app = new app;
        $app->doc_name=$_REQUEST['docname'];
        $app->day=$_REQUEST['appday'];
        $app->time=$_REQUEST['apptime'];
        $app->date=$_REQUEST['appdate'];
        $app->addSlots();
        
    }
}
$cont= new appcontroller;
if($_GET['action']=='addSlots')
{
    $cont->addSlots();
    header("location: ../adminhome.php");
}


?>