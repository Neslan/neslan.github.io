<?php
$post_json = file_get_contents("posts/posts.json");
$post_array =json_decode($post_json, true);
$post=null;
foreach ($post_array as $_post) {
    if ($_post["id"] == $_GET["id"]) {
        $post=$_post; 
        break;
    }
}
print_r($post);
?>



<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Simon Karlsson | <?php echo $post["title"]; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">

        <!--[if lt IE 9]>
            <script src="/js/vendor/html5shiv.min.js"></script>
        <![endif]-->

        <script src="js/vendor/modernizr.custom.32229-2.8-respondjs-1-4-2.js"></script>
    </head>
    <body>
        <header class="hero-image" role="banner" style="background-image: url(<?php echo $post["image"]; ?>);">

            <span class="menu-trigger animated fadeInDown">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </span>

            <!-- if the user has javascript disabled they can still use the menu -->
            <noscript>
                <div class="no-js-menu">
                    <ul>
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="fa fa-user"></i><a href="author.html">John Smith</a></li>
                        <li><i class="fa fa-anchor"></i><a href="page.html">About</a></li>
                        <li><i class="fa fa-star"></i><a href="favorites.html">Favorites</a></li>
                        <li><i class="fa fa-paper-plane"></i><a href="contact.html">Contact</a></li>
                        <li><i class="fa fa-file"></i><a href="post.html">Post Page</a></li>
                        <li><i class="fa fa-file"></i><a href="post-sidebar.html">Post with Sidebar</a></li>
                        <li><i class="fa fa-home"></i><a href="alt-home.html">Alternate Home</a></li>
                        <li><i class="fa fa-image"></i><a href="category.html">Category Page</a></li>
                    </ul>
                </div>
            </noscript>
            <!-- end no script -->

            <div id="menu-target">
                <ul>
                    <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                    <li><i class="fa fa-user"></i><a href="author.html">John Smith</a></li>
                    <li><i class="fa fa-anchor"></i><a href="page.html">About</a></li>
                    <li><i class="fa fa-star"></i><a href="favorites.html">Favorites</a></li>
                    <li><i class="fa fa-paper-plane"></i><a href="contact.html">Contact</a></li>
                </ul>
                <hr>
                <ul>
                    <li><i class="fa fa-file"></i><a href="post.html">Post Page</a></li>
                    <li><i class="fa fa-file"></i><a href="post-sidebar.html">Post with Sidebar</a></li>

                    <li><i class="fa fa-home"></i><a href="alt-home.html">Alternate Home</a></li>
                    <li><i class="fa fa-image"></i><a href="category.html">Category Page</a></li>
                </ul>
            </div>
        </header>

        <main class="container">
            <div class="row">
                <div class="col-xs-12 single-content">
                    <p class="meta">
                        <a class="" href="category.html">Simon Karlsson</a> <span><?php echo $post["tags"]; ?> </span><i class="link-spacer"></i> <i class="fa fa-clock-o"></i> <?php echo $post["datetime"]; ?>
                    </p>

                    <h1><?php echo $post["title"]; ?></h1>


                    <p>
                        <?php echo $post["ingress"]; ?>
                    </p>                   
                    <p>
                        <?php echo $post["content"]; ?>
                    </p>


                </div><!-- main-content/col -->
            </div> <!--/row -->

        </main> <!-- /container -->

        <footer class="single">

            <div class="row read-another-section">
                <a href="post.html"><div class="col-sm-6 col-md-2 no-gutter read-another-container">
                    <div class="overlay"></div>
                    <img src="img/square-iceland.jpg">
                    <h3 class="read-another">Land of Fire &amp; Ice</h3>
                </div></a>
                <a href="post.html"><div class="col-sm-6 col-md-2 no-gutter read-another-container">
                    <div class="overlay"></div>
                    <img src="img/square-spain.jpg">
                    <h3 class="read-another">The Coast of Your Mind</h3>
                </div></a>
                <a href="post.html"><div class="col-sm-6 col-md-2 no-gutter read-another-container">
                    <div class="overlay"></div>
                    <img src="img/square-peak.jpg">
                    <h3 class="read-another">Get Out of Your Comfort Zone</h3>
                </div></a>
                <a href="post.html"><div class="col-sm-6 col-md-2 no-gutter read-another-container">
                    <div class="overlay"></div>
                    <img src="img/square-woods.jpg">
                    <h3 class="read-another">Not All Who Wander Are Lost</h3>
                </div></a>
                <a href="post.html"><div class="col-sm-6 col-md-2 no-gutter read-another-container">
                    <div class="overlay"></div>
                    <img src="img/square-sunset.jpg">
                    <h3 class="read-another">Open Your Mind</h3>
                </div></a>
                <a href="post.html"><div class="col-sm-6 col-md-2 no-gutter read-another-container">
                    <div class="overlay"></div>
                    <img src="img/square-mountain.jpg">
                    <h3 class="read-another">Ten Reasons to Hike</h3>
                </div></a>
            </div>
        </footer>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/jquery.jpanelmenu.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/fastclick.min.js"></script>


        <script src="js/main.js"></script>
    </body>
</html>
