<?php
    $query = $_REQUEST['query'];
    include '../db/product_utils.php';
    echo json_encode(get_suggests_from_csv($query));