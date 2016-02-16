<?php

    include_once("../../../vendor/autoload.php");

    use App\Bitm\SEIP106508\Url\Bookmark;
    use App\Bitm\SEIP106508\Utility\Utility;

    $bookmark = new Bookmark();
    $bookmark->id = $_POST['id'];
    $bookmark->title = $_POST['title'];
    $bookmark->url = $_POST['url'];

    $bookmark->update();
?>