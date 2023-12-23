<?php

// много библиотек используем процедурную архаичную mysqllite
// либо переменные среды либо через inlude новый файл
define ("PATH_TO_PARAMS", '/Applications/XAMPP/albumdb.php');

function get_photo_list() {
    include PATH_TO_PARAMS;
    // через переменные среды не получилось сделать
    $conn = mysqli_connect($SERVER,  $USER, $PASSWORD, $DATABASE);
    
    $sql = "SELECT PhotoID, Thumb FROM Photos";

    // открываем канал по которому могут пройти данные
    $cursor = mysqli_execute_query($conn, $sql);

    $photos = mysqli_fetch_all($cursor);
    mysqli_close ($conn);

    // через echo типа не можем такой сложный объект вернуть 
    return $photos;
}

function get_photo_info($photoID) {
    include PATH_TO_PARAMS;
    $conn = mysqli_connect($SERVER,  $USER, $PASSWORD, $DATABASE);
    $sql = "
        SELECT Title, Description, Photo FROM Photos
        WHERE PhotoID=$photoID
    ";
    $cursor = mysqli_execute_query($conn, $sql);
    $photo_info = mysqli_fetch_all($cursor);
    mysqli_close ($conn); 
    return $photo_info[0];
}

// типа принта в python
// echo get_photo_list()[0][0];
// var_dump(get_photo_info(2));