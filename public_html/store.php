<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include_once("../../../vendor/autoload.php");
            use App\Bitm\SEIP106508\Url\Bookmark;
            use App\Bitm\SEIP106508\Utility\Utility;
            
            $newbookmark = new Bookmark();
            $newbookmark->title = $_POST['title'];
            $newbookmark->url = $_POST['url'];
            $newbookmark->store();
                    
            Utility::redirectbookmark();
            
        ?>
    </body>
</html>
