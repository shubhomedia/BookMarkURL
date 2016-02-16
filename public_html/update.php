<?php

    include_once("./vendor/autoload.php");

    use App\Url\Bookmark;
    use App\Utility\Utility;
        
    $bookmark = new Bookmark();
    $bookmark->id = $_POST['id'];
    $bookmark->title = $_POST['title'];
    $bookmark->url = $_POST['url'];

    $bookmark->update();
?>