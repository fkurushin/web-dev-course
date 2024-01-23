<?php
    // // GET
    // $title = $_REQUEST['title'];
    // $description = $_REQUEST['description'];
    // $thumb = $_REQUEST['thumb'];
    // $photo = $_REQUEST['photo'];
    // include '../db/photo_utils.inc';
    // post_new_photo($title, $description, $thumb, $photo);
    
    // POST
    $data = json_decode(file_get_contents('php://input'), true);
    $title = $data['title'];
    $description = $data['description'];
    $thumb = $data['thumb'];
    $photo = $data['photo'];
    include '../db/photo_utils.inc';
    post_new_photo($title, $description, $thumb, $photo);