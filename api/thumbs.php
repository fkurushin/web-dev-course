<?php
    // $photo_files = scandir(dirname(__DIR__)."/photos");
    // $photos = array();

    // foreach($photo_files as $photo_file) {
    //     if (str_ends_with($photo_file, "small.jpg")) {
    //         $photo_name = explode("_", $photo_file)[0];
    //         $photo = array(
    //             "photo_name" => $photo_name,
    //             "photo_file" => $photo_file
    //         );
    //         $photos[] = $photo;
    //     }
    // }

    // echo json_encode($photos);


    // $photo_files = scandir(dirname(__DIR__)."/photos");
    // $photos = array();
    // $photo_names = array();
    // $photos_files = array();

    // foreach($photo_files as $photo_file) {
    //     if (str_ends_with($photo_file, "small.jpg")) {
    //         $photo_name = explode("_", $photo_file)[0];

    //         $photo_names[] = $photo_name;
    //         $photo_files[] = $photo_file;
    //     }
    // }

    // $photos = array(
    //     "photo_name" => $photo_names,
    //     "photo_file" => $photo_files
    // );

    // echo json_encode($photos);

    // and not to forget add _small.jpg and .jpg
    $photo_files = scandir(dirname(__DIR__)."/photos");
    $photo_names = array();

    foreach($photo_files as $photo_file) {
        if (str_ends_with($photo_file, "small.jpg")) {
            $photo_name = explode("_", $photo_file)[0];
            $photo_names[] = $photo_name;
        }
    }

    echo json_encode($photo_names);
