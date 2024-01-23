<?php

// много библиотек используем процедурную архаичную mysqllite
// либо переменные среды либо через include новый файл
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

function post_new_photo($title, $description, $thumb, $photo) {
    // title - название фотокарточки
    // description - описание содержимого фотокарточки
    // thumb - название [с суффиксом _small]
    // photo - название основного файла
    include PATH_TO_PARAMS;
    $conn = mysqli_connect($SERVER,  $USER, $PASSWORD, $DATABASE);
    $sql = "
        INSERT INTO photos (Title, Description, Thumb, Photo) VALUES
        ('$title', '$description', '$thumb', '$photo')
    ";
    mysqli_execute_query($conn, $sql);
    mysqli_close($conn);
}

// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);

// echo post_new_photo("g", "g", "g", "g");

// типа принта в python
// echo get_photo_list()[0][0];
// var_dump(get_photo_info(2));