<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Edit</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="views/resource/css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="views/resource/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="views/resource/css/main.css">

        <script src="views/resource/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-bookmark"></span> Bookmark Tools</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li><a href="create.php"><span class="glyphicon glyphicon-save"></span> Add</a></li>
                        <li class="active"><a href="edit.html"><span class="glyphicon glyphicon-edit"></span> Edit</a></li>
                    </ul>
                </div><!--/.navbar-collapse -->
            </div>
        </nav>
        <!--php code here-->
        <?php
        include_once("./vendor/autoload.php");

        use App\Url\Bookmark;
        use App\Utility\Utility;

        $bookmark = new Bookmark();
        $bookmarks = $bookmark->show($_GET['id']);
        ?>
        <!--php code here-->

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron text-center">
            <div class="container">
                <h1>Bookmark Tools Edit URL</h1>
                <p>This is a web application. You can easily Store your URL collection with title.</p>
            </div>
        </div>

        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <div class="well well-lg">
                        <form role="user" action="update.php" method="post">
                            <div class="form-group">
                                <input  
                                    type="hidden" 
                                    name="id"
                                    value="<?php echo $bookmarks['id'];?>"
                                />
                                <label for="usr"> Title Or Name:</label>
                                <input type="text" 
                                       autofocus="autofocus"
                                       required=required
                                       class="form-control" 
                                       id="title"
                                       placeholder="Enter The title of URL"
                                       name="title"
                                       value="<?php echo $bookmarks['title'];?>"/>
                                <label for="usr">Enter URL:</label>
                                <input type="url" 
                                       autofocus="autofocus"
                                       required=required
                                       class="form-control" 
                                       id="summary"
                                       placeholder="Enter URL Here"
                                       name="url"
                                       value="<?php echo $bookmarks['url'];?>"/>
                            </div>
                            <button type="submit"
                                    class="btn btn-success">
                                <span class="glyphicon glyphicon-save"></span>
                                Update
                            </button>
                            <button type="submit" 
                                    class="btn btn-info">
                                <span class="glyphicon glyphicon-saved"></span> 
                                Update & Add New
                            </button>
                            <button type="reset" 
                                    class="btn btn-danger"
                                    value="reset">
                                <span class="glyphicon glyphicon-refresh"></span> 
                                Reset
                            </button>

                            <a href="javascript:history.go(-1)">
                                <button type="button" 
                                        class="btn btn-warning">
                                    <span class="glyphicon glyphicon-backward"></span> 
                                    Back
                                </button>
                            </a>

                        </form>
                    </div>
                </div>
                <div class="col-md-2">

                </div>
            </div>

            <hr>

            <footer class="text-center">
                <p>&copy; Owes Shubho 2015</p>
            </footer>
        </div> <!-- /container -->        
        <script src="views/resource/js/vendor/bootstrap.min.js"></script>
        <script src="views/resource/js/vendor/jquery-1.11.2.js"></script>

        <script src="views/resource/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    </body>
</html>

