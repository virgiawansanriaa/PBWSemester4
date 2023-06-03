<?php
require_once "method.php";
$obj_comic = new comic();
$request_method = $_SERVER["REQUEST_METHOD"];
switch ($request_method) {
    case 'GET':
        if (!empty($_GET["id"])) {
            $id = intval($_GET["id"]);
            $obj_comic->get_comic($id);
        } else {
            $obj_comic->get_comics();
        }
        break;
    case 'POST':
        if (!empty($_GET["id"])) {
            $id = intval($_GET["id"]);
            $obj_comic->update_comic($id);
        } else {
            $obj_comic->insert_comic();
        }
        break;
    case 'DELETE':
        $id = intval($_GET["id"]);
        $obj_comic->delete_comic($id);
        break;
    default:
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}
