<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main2.css">
    <title>Album</title>
</head>
<body>
    <h1>Простейший альбом</h1>
    <!-- <div class="thumbs">
        <?php
            $photo_files = scandir(__DIR__."/photos");
            foreach($photo_files as $photo_file) {
                if (str_ends_with($photo_file, "small.jpg")) {
                    $photo_name = explode("_", $photo_file)[0];
                    echo("<img src='photos/$photo_file' onclick='showBig(`$photo_name`);'/>");
                }
            }
        ?>
    </div>
    <img src="" id="main"> -->


    <form name="form" action="" method="get">
        <!-- id="search_query" value="Car Loan" where placeholder-->
        <input type="text" name="search_query" placeholder="Enter search term" value="">
        <button type="submit">Search</button>
    </form>

    <?php
        // ini_set('display_errors', '1');
        // ini_set('display_startup_errors', '1');
        // error_reporting(E_ALL);
        if (empty($_GET)){
            exit;
         }

        $search_query = $_GET['search_query'];
        $url = 'http://localhost/web-dev-course/api/get_photo_info_by_description.php?search_query=' . urlencode($search_query);
        $response = file_get_contents($url);
        $result = json_decode($response, true);

        foreach ($result as $person) {
            // echo("<img src='photos/$photo_file' onclick='showBig(`$photo_name`);'/>");
            // Access individual elements of the sub-array
            // Title, Description, Thumb, Photo
            $title = $person[1];
            $description = $person[2];
            $thumb = $person[3];
            $photo = $person[4];

            // Output the information
            echo "Title: $title<br>";
            echo "Version: $description<br>";
            // echo "Thumb: $thumb<br>";
            // echo "Photo: $photo<br>";
            // echo '<a href="">Photo</a>';
            echo '<a href="photos/' . $thumb . '" target="_blank">View Photo</a><br>';
            // echo "Large Image: $largeImage<br><hr>";
        }

    ?>

    
</body>
</html>



