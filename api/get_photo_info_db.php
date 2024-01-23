<?php
    $id = $_REQUEST['id'];
    include '../db/photo_utils.inc';
    echo json_encode(get_photo_info($id));