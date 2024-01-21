<?php
    $title = $_REQUEST['title'];
    $description = $_REQUEST['description'];
    $thumb = $_REQUEST['thumb'];
    $photo = $_REQUEST['photo'];
    include '../db/photo_utils.inc';
    post_new_photo($title, $description, $thumb, $photo);