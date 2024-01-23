<?php
    $x = $_REQUEST["x"];
    $result = ["result" => 2 * $x];
    echo(json_encode($result));