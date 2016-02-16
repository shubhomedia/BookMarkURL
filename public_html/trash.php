<?php

    include_once("./vendor/autoload.php");

    use App\Url\Bookmark;
    use App\Utility\Utility;

    //      session_start();

    $bookmark = new Bookmark();
    $bookmark->trash($_REQUEST['id']);
?>
