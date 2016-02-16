<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title> Home </title>
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
                        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li><a href="create.php"><span class="glyphicon glyphicon-save"></span> Add</a></li>
                        <li><a href="trashed.php"><span class="glyphicon glyphicon-retweet"></span> All Trashed</a></li>
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
        $bookmarks = $bookmark->index();
        ?>
        <!--php code here-->

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron text-center">
            <div class="container">
                <h1>Bookmark Tools</h1>
                <p>This is a web application. You can easily Store your URL collection with title.</p>
            </div>
        </div>

        <div class="container">
            <!--this is add and search section -->
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div id="message" class="alert-success text-center">
                        <?php echo Utility::message(); ?>
                    </div>
                    <form class="navbar-form" role="search">
                        <div class="input-group pull-left">
                            <input type="text" class="form-control" placeholder="Search | Filter" name="srch-term" id="srch-term">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
                    <!-- PDF And Add new Button Section Start -->
                    <div class="text-right">
                        <button type="button"
                                class="btn btn-success">
                            <span class="glyphicon glyphicon-download"></span>
                            Download As PDF|XML
                        </button>

                        <a href="create.php">
                            <button type="button"
                                    class="btn btn-success">
                                <span class="glyphicon glyphicon-save"></span>
                                Add New
                            </button>
                        </a>
                        <a href="trashed.php">
                            <button type="button"
                                    class="btn btn-default">
                                <span class="glyphicon glyphicon-retweet"></span>
                                All Trashed
                            </button>
                        </a>
                    </div>
                    <!-- PDF And Add new Button Section End -->
                </div>
                <div class="col-md-1"></div>

            </div>
            <!--this is add and search section end -->

            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-10">


                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>S.L</th>
                                <th>Title</th>
                                <th>Web Address:</th>
                                <th>View</th>
                                <th>Edit</th>
                                <th>Trash</th>
                                <th>Delete</th>
                                <th>Email to Friend</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $slno = 1;
                            foreach ($bookmarks as $bookmark) {
                                ?>
                                <tr>
                                    <td><?php echo $slno; ?></td>
                                    <!--<td><?php echo $bookmark['id']; ?></td>-->
                                    <td><a href="show.php?id=<?php echo $bookmark['id']; ?>"><?php echo $bookmark['title']; ?></a></td>
                                    <td><?php echo $bookmark['url']; ?></td>
                                    <td><a href="show.php?id=<?php echo $bookmark['id']; ?>"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-zoom-in"></span> View</button></a></td>
                                    <td><a href="edit.php?id=<?php echo $bookmark['id']; ?>"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</button></a></td>
                                    <td><a href="trash.php?id=<?php echo $bookmark['id']; ?>"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span> Trash</button></a></td>
                                    <td>
                                        <form action="delete.php" method="post">
                                            <input type="hidden" name ="id" value="<?php echo $bookmark['id']; ?>">
                                            <button type="submit" class="btn btn-danger delete"><span class="glyphicon glyphicon-trash"></span> Delete</button>
                                        </form>
                                    </td>                
                                    <td><a href="#"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-send"></span> Email to Friend</button></a></td>
                                </tr>
                                <?php
                                $slno++;
                            }
                            ?>
                        </tbody>
                    </table>

                </div>
                <div class="col-md-1">

                </div>
            </div>
            <hr>
            <!-- Page Navigation Section Start -->
            <div class="container text-center">
                <ul class="pagination">
                    <li><a href="#"><span class="glyphicon glyphicon-backward"></span> Pre</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-forward"></span> Next</a></li>
                </ul>
            </div>
            <!-- Page Navigation Section Start -->
            <hr>

            <footer class="text-center">
                <p>&copy; Owes Shubho 2015</p>
            </footer>
        </div> <!-- /container -->        
        <script src="views/resource/js/vendor/bootstrap.min.js"></script>
        <script src="views/resource/js/vendor/jquery-1.11.2.js"></script>
        <script src="views/resource/js/main.js"></script>

        <script>
            $('.delete').bind('click', function (e) {
                var deleteItem = confirm("Are you sure you want to delete?");
                if (!deleteItem) {
                    //return false; 
                    e.preventDefault();
                }
            });
            $('#message').fadeOut(2500);
        </script>
    </body>
</html>
