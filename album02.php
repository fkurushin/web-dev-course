<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main2.css">
    <title>Album</title>
    <!-- jQuery - библа для анимации -->
    <script src="scripts/jquery-3.7.1.js"></script>
    <script>
        function showBig(photo_name) {

            $("div.thumbs img").removeClass("selected");
            var thumb = window.event.srcElement;
            thumb.classList.add("selected");
            document.getElementById("main").src = "photos/" + photo_name + ".jpg";
        }
    </script>
</head>
<body>
    <h1>Простейший альбом</h1>
    <div class="thumbs">
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
    <img src="" id="main">
</body>
</html>


