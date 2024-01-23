<?php
// inc скрывает файлы от юзера
    include '../db/photo_utils.inc';
    echo json_encode(get_photo_list());

