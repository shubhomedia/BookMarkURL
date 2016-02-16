<?php

    include_once("./vendor/autoload.php");

    //      session_start();
    use App\Url\Bookmark;
    use App\Utility\Utility;

    $bookmark = new Bookmark();
    $bookmark->delete($_REQUEST['id']);
?>