<!DOCTYPE html>
<html lang="en">

        <!--
        Made with Love by...
         ________     _____   _
        |  ______|   /  ___| | |
        | |   ___   /  /     | |
        | |  |_  | (  ?      | |
        | |____| |  \  \___  | |____
        |________|   \_____| |______|

         http://imashwini.azurewebsites.net
        -->

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Blood Donor">
        <meta name="author" content="A S Creativity">
        <link rel="shortcut icon" href="img/GCL.png"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title>Just Donate Blood</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/landing-page.css" rel="stylesheet">

        <!-- Carousel CSS -->
        <link href="css/carousel.css" rel="stylesheet">

        <!-- Normalize CSS -->
        <link href="css/normalize.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- Font-Awesome CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <!--JavaScript for BlooDonor-->
        <script src="js/bloodonor.js"></script>

        <!--JavaScript for Extra BlooDonor Effect-->
        <script src="js/extraeffect.js"></script>

        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

    </head>

    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
            <div class="container topnav">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="headerlogo">
                        <img src="img/BD60.png" alt="Logo">
                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#home"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#myModal">Contact</a>
                        </li>
                        <li>
                            <a href="#searchform"><i class="fa fa-search fa-fw"></i> Find Donor</a>
                        </li>
                        <li>
                            <a href="login.php"><i class="fa fa-user-plus fa-fw"></i> Join / <i class="fa fa-sign-in"></i> SignIn</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Start Header -->
        <div class="intro-header" id="home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="intro-message">
                            <img src="img/bds150.png" alt="Logo">
                            <h1>Just Donate Blood</h1>
                            <h3>It's Simple, It's Safe, And It Saves Lives.</h3>
                            <hr class="intro-divider">
                            <ul class="list-inline intro-social-buttons">
                                <li>
                                    <a href="#searchform" class="btn btn-default btn-lg"><i class="fa fa-search fa-fw"></i>  <span class="network-name">Find Donor</span></a>
                                </li>
                                <li>
                                    <a href="login.php" class="btn btn-default btn-lg"><i class="fa fa-user-plus fa-fw"></i> <span class="network-name">Register As a Donor </span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header -->

        <!-- Page Content -->
        <div class="content-section-a" id="searchform">
            <div class="container" style="padding-top: 100px">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading text-center">
                                <h3>Search For Blood Donor</h3>
                            </div>

                            <div class="panel-body">

                                <form role="form" method="post" action="getusers.php" class="search-form">
                                    <div class="form-group" >

                                        <div class="alert alert-info">
                                            <p>We are working on it!</p>
                                        </div>
                                        <label for="bloodgroup">Blood Group:</label>
                                        <select class="form-control" id="bloodgroup" name="bloodgroup" required>
                                            <option value="Select">-----Select-----</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        </select>

                                        <label for="country">Select Country:</label>
                                         <select class="form-control " id="country" name="country" onchange="populate(this.id,'state')" required>
                                            <option value="Select">-----Select-----</option>
                                            <option value="India">India</option>
                                        </select>
                                        <!--<select name="country" class="form-control countries" id="countryId">
                                            <option value="">-----Select-----</option>
                                        </select>-->

                                        <label for="state">Select State:</label>
                                        <select class="form-control " id="state" name="state" onchange="populate(this.id,'city')" required>
                                            <option value="Select">-----Select-----</option>
                                        </select>
                                        <!--<select name="state" class="form-control states" id="stateId">
                                            <option value="">-----Select-----</option>
                                        </select>-->

                                        <label for="city">Select City:</label>
                                        <select class="form-control " id="city" name="city"  required>
                                            <option value="Select">-----Select-----</option>
                                        </select>
                                        <!--<select name="city" class="form-control cities" id="cityId">
                                            <option value="">-----Select-----</option>-->

                                        <br>

                                        <button type="submit" value="Search" name="search" class="btn btn-primary" style="width: 100%;"><i class="fa fa-search fa-fw"></i> Search Donor</button><br><br>

                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>

                    <div class="col-sm-8 text-center">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3>Fact's about Blood Donation!</h3>
                                <p>Why there is a need to Donate Blood?</p>
                            </div>
                            <div class="panel-body">
                                <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                        <li data-target="#myCarousel" data-slide-to="3"></li>
                                        <li data-target="#myCarousel" data-slide-to="4"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <h4>"India faces a shortage of 3 million blood units in a year"<br>
                                                <span style="font-style:italic; font-size:small">Source: TOI</span>
                                            </h4>
                                        </div>
                                        <div class="item">
                                            <h4>"If only an additional 2% of India's youth donated blood,
                                                just once in a year shortage can easily be eliminated."<br>
                                                <span style="font-style:italic; font-size:small">Source: TOI</span>
                                            </h4>
                                        </div>
                                        <div class="item">
                                            <h4>"Only 9 million units are collected annually while the need is for 12 million units"<br>
                                                <span style="font-style:italic; font-size:small">Source: World Health Organisation (WHO)</span>
                                            </h4>
                                        </div>
                                        <div class="item">
                                            <h4>"Every adult human being (male or female) has 5 to 6 litres of blood."<br>
                                                <span style="font-style:italic; font-size:small">Source: Study</span>
                                            </h4>
                                        </div>
                                        <div class="item">
                                            <h4>"Any person between 18 to 60 years, weighing 45 kg or more can safely
                                                donate one unit of blood i.e 350 ml once every 3 months."<br>
                                                <span style="font-style:italic; font-size:small">Source: Study</span>
                                            </h4>
                                        </div>
                                    </div>

                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <!-- /.container -->
        </div>
        <!-- /.content-section-a -->

        <!-- myModal-->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Contact Information!</h4>
                    </div>
                    <div class="modal-body">
                        <p>Project By: Ashwini Gupta</p>
                        <p><i class="fa fa-envelope-o fa-fw"></i> Email:<a href="mailto:AshwiniGupta4455@gmail.com" target="_blank"> AshwiniGupta4455@gmail.com</a></p>
                        <p><i class="fa fa-phone fa-fw"></i> CellPhone: (+91) 9996948870</p>
                        <p><i class="fa fa-edge fa-fw"></i> WebSite: <a href="http://iamashwini.azurewebsites.net" target="_blank">iamashwini</a> </p>
                        <br>
                        <p>Connect With Me!</p>
                        <div id="social-icon">
                            <a href="http://www.fb.com/AshwiniGupta4455" target="_blank" style="margin-right: 20px;"><i class="fa fa-facebook-square fa-3x"></i></a>
                            <a href="http://ashwini-gupta.tumblr.com/" target="_blank" style="margin-right: 20px;"><i class="fa fa-tumblr-square fa-3x"></i></a>
                            <a href="https://in.linkedin.com/in/ashwinigupta4455" target="_blank" style="margin-right: 20px;"><i class="fa fa-linkedin-square fa-3x"></i></a>
                            <a href="https://github.com/ASHWINI-GUPTA" target="_blank" style="margin-right: 20px;"><i class="fa fa-github-square fa-3x"></i></a>
                        </div>


                        <br>

                        <div class="alert alert-info">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <h4><i class="fa fa-lightbulb-o fa-3x"></i> Idea!</h4>
                            <p>Have any Idea or Suggestion feel free to write us.!</p>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="list-inline">
                            <li class="active">
                                <a href="#">Home</a>
                            </li>

                            <li class="footer-menu-divider">&sdot;</li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#myModal">Contact</a>
                            </li>
                        </ul>
                        <p class="copyright text-muted small">&copy; <?php echo date ("Y") ?> &nbsp <code>A S Creativity</code>&nbsp&nbsp|&nbsp&nbspAll Rights Reserved</p>
                    </div>
                </div>
            </div>
        </footer>


        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

    </body>

</html>
