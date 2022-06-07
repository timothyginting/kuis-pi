<?php
require_once "method.php";
$motor = new Motor();

    $request_method=$_SERVER["REQUEST_METHOD"];
    switch ($request_method) {
    case 'GET':
    if(!empty($_GET["id"]))
    {
        $id=intval($_GET["id"]);
        $motor->get_motor($id);
    }
    else
    {
        $motor->get_motors();
    }
    break;
    case 'POST':
    if(!empty($_GET["id"]))
    {
        $id=intval($_GET["id"]);
        $motor->update_data_motor($id);
    }
    else
    {
        $motor->insert_data_motor();
    }
    break;
    case 'DELETE':
        $id=intval($_GET["id"]);
        $motor->delete_data_motor($id);
    break;
    default:
    // Invalid Request Method
    header("HTTP/1.0 405 Method Not Allowed");
    break;
    break;
    }


?>