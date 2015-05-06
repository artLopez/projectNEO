<?php
if (!isset($_SESSION['username'])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Family's Profile</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->

    <link href="css/styles.css" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="page-header">
                My Messages
                <small>Letters from Loved Ones</small>
            </h1>

            <!-- First Blog Post -->
            <h2>
                <a href="http://www.nytimes.com/2003/11/11/opinion/11INTRO.html">Hi Mom!</a>
            </h2>
            <p class="lead">
                from Bobby
            </p>
            <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
            <hr>
            <img src="military.jpg" alt="military" width = "700px">
            <hr>
            <p>A couple of days ago, my squadron commander told me that I would be taking command of Fox Troop in June, after all. . . . SWEET! I left my conversation with him walking on air! Not only will I soon be a cavalry troop commander (the most lethal combination of fire power that a captain can be in command of, in any service), BUT I will have the opportunity and the incredible responsibility of commanding in combat. I have to admit that I am really nervous and just pray that I am up to the task out here to lead 120 men in combat operations. I will give them everything I have to give — I love them already, just because they're mine. I pray, with all my heart, that I will be able to take every single one of them home safe when we finish our mission here. </p>
            <a class="btn btn-primary" href="#">Reply to Bobby <span class="glyphicon glyphicon-chevron-right"></span></a>

            <hr>

            <!-- Second Blog Post -->
            <h2>
                <a href="http://www.nytimes.com/2003/11/11/opinion/11INTRO.html">Missing You</a>
            </h2>
            <p class="lead">
                by Bobby
            </p>
            <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:45 PM</p>
            <hr>

            <hr>
            <p> It seems like I've been here for so much longer than I have. My life away from here seems so far away. In some ways, I don't think I'll ever have it back completely. I think war takes certain things from you, or maybe it gives certain things that change your perspective.

                I love being in command. It's so great to lead again. I love taking care of my men and accomplishing our missions together here. I am blessed. </p>
            <a class="btn btn-primary" href="#">Reply to Bobby <span class="glyphicon glyphicon-chevron-right"></span></a>

            <hr>

            <!-- Third Blog Post -->
            <h2>
                <a href="http://www.nytimes.com/2003/11/11/opinion/11INTRO.html">Dear Mom and Dad</a>
            </h2>
            <p class="lead">
                by Bobby
            </p>
            <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:45 PM</p>
            <hr>

            <hr>
            <p> We conducted a huge operation in the desert about a week ago. We had intel that suggested that the bad guys were hiding weapons and ammo out in the desert and bringing it into the city to attack us. We swept all of the desert north of us and found lots of weapons/ ammo. . . . Two of the targets that we captured turned out to be first cousins of Saddam Hussein.

                I love you both with all of my heart! I'm working very hard here — adding honor to our country and to our family name! </p>
            <a class="btn btn-primary" href="#">Reply to Bobby <span class="glyphicon glyphicon-chevron-right"></span></a>

            <hr>

            <!-- Pager -->
            <ul class="pager">
                <li class="previous">
                    <a href="#">&larr; Older</a>
                </li>
                <li class="next">
                    <a href="#">Newer &rarr;</a>
                </li>
            </ul>

        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Blog Search Well -->
            <div class="well">
                <h4>Search Letters</h4>
                <div class="input-group">
                    <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                </div>
                <!-- /.input-group -->
            </div>

            <!-- Blog Categories Well -->
            <div class="well">
                <h4>More Information</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="deploymentMap.php">Location</a>
                            </li>
                            <li><a href="#">Schedule</a>
                            </li>
                            <li><a href="#">Videos</a>
                            </li>
                            <li><a href="#">Photos</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.col-lg-6 -->

                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
            </div>

            <!-- Side Widget Well -->
            <div class="well">
                <h4>Welcome Family Members</h4>
                <p>Keep in touch with your loved ones as they are far away from home.</p>
            </div>

        </div>

    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; 2015 NEO</p>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
