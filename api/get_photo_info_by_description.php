<?php
     $search_query = $_GET['search_query'];
     include '../db/photo_utils.inc';
     echo json_encode(get_info_by_description($search_query));