<?php
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    $photoSmall = $_FILES['photo_small'];
    $photoMain = $_FILES['photo_main'];
    $targetDir = '../photos/';
    $targetFileSmall = $targetDir . basename($photoSmall['name']);
    $targetFileMain = $targetDir . basename($photoMain['name']);
    echo $photoSmall['tmp_name'];
    move_uploaded_file($photoSmall['tmp_name'], $targetFileSmall);
    move_uploaded_file($photoMain['tmp_name'], $targetFileMain);

// sudo CHMOD 775 /Applications/XAMPP/

// sudo chmod -R 0755 /Applications/XAMPP/

// sudo chown nobody /Applications/XAMPP/