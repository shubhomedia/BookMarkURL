<?php

    include_once("../../../vendor/autoload.php");

    //      session_start();
    use App\Bitm\SEIP106508\Url\Bookmark;
    use App\Bitm\SEIP106508\Utility\Utility;

    $bookmark = new Bookmark();
    $bookmark->recover($_REQUEST['id']);
?>