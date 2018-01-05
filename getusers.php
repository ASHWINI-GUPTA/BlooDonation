<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Blood Donor">
        <meta name="author" content="A S Creativity">
        <link rel="shortcut icon" href="img/GCL.png"/>
        <title>Search Result</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Sign In CSS -->
        <link href="css/signin.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/landing-page.css" rel="stylesheet">

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
                        <a href="index.php"><i class="fa fa-home fa-fw"></i> Home</a>
                    </li>
                    <!--
                    <li>
                        <a href="#" data-toggle="modal" data-target="#myModal">Contact</a>
                    </li>
                    -->
                    <li>
                        <a href="#searchform"><i class="fa fa-search fa-fw"></i>&nbspFind Donor</a>
                    </li>
                    <li>
                        <a href="login.php"><i class="fa fa-user-plus fa-fw"></i> Join / <i class="fa fa-sign-in"></i>&nbspSignIn</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.intro-header -->

    <!-- Body -->
    <div class="container-c">
        <div class="content-section-c">
            <div class="row">
                <div class="col-sm-9" style=" overflow-y: scroll; height: 450px">
                    <?php
                        if ( ! empty( $_POST ) ) {

                            include("connect_db.php");

                            $bloodgroup = $_POST['bloodgroup'];
                            $country = $_POST['country'];
                            $state = $_POST['state'];
                            $city = $_POST['city'];

                            // Create connection
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $filer =

                            $sql = "SELECT fullname, gender, bloodgroup, cellphone, address, country, state, city, district  FROM users 
                                WHERE bloodgroup = '$bloodgroup' && country = '$country' && state = '$state' && city = '$city' ORDER BY fullname";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                echo "<h2 style='color: #ff0000'>Donors Result:</h2><br>";

                                while ($row = $result->fetch_assoc()) {
                                    echo "<div class='col-sm-6'>";
                                    echo "<div class=\"panel panel-primary\">
                                          <div class=\"panel-heading\"><h3>Name: ".$row["fullname"]."</h3></div>
                                          <div class=\"panel-body\">";
                                    //echo "<div class='col-sm-4'  style='border: dashed; padding: 5px 15px 5px 15px' >";
                                    //echo "<br><h4>Name: ".$row["fullname"]." </h4>";
                                    echo "Gender: " . $row["gender"] . "<br>Blood Group: " . $row["bloodgroup"] . " <br>Cellphone: " . $row["cellphone"] . " ";
                                    echo "<br>Address: " . $row["address"] . " <br>Country: " . $row["country"] . "<br>State: " . $row["state"] . "<br>City: " . $row["city"] . " <br>District: " . $row["district"] . " ";
                                    //echo "<br><br>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</div>";
                                }
                            }
                            else
                            {
                                echo "<div class=\"panel panel-info\">
                                      <div class=\"panel-heading\"><h3>Sorry! No Donors Found!</h3></div>
                                      <div class=\"panel-body\"><h4>Try some another nearby locations!</h4></div>
                                  </div>";
                            }

                                $conn->close();
                        } else{
                            echo"<div class=\"panel panel-warning\">
                              <div class=\"panel-heading\"><h3>Error :(</h3></div>
                              <div class=\"panel-body\"><h4>Try Again! After filling all the details.</h4></div>
                            </div>";
                        }
                    ?>
                </div>

                <div class="col-sm-3" id="searchform">
                    <div class="panel panel-danger">
                        <div class="panel-heading text-center">
                            <h4>Search For Blood Donor</h4>
                        </div>

                        <div class="panel-body">
                            <form role="form" method="post" action="getusers.php" class="search-form">
                                <div class="form-group" >
                                    <label for="bloodgroup">Blood Group:</label>
                                    <select class="form-control " id="bloodgroup" name="bloodgroup" required>
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

                                    <label for="state">Select State:</label>
                                    <select class="form-control " id="state" name="state" onchange="populate(this.id,'city')" required>
                                        <option value="Select">-----Select-----</option>
                                    </select>

                                    <label for="city">Select City:</label>
                                    <select class="form-control " id="city" name="city"  required>
                                        <option value="Select">-----Select-----</option>
                                    </select>
                                    <br>
                                    <button type="submit" value="Search" name="search" class="btn btn-danger" style="width: 100%;"><i class="fa fa-search fa-fw"></i> Search Donor</button><br><br>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Body -->

    <!-- Footer -->
        <footer>
            <div class="container">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="index.php">Home</a>
                        </li>

                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="login.php">Join</a>
                        </li>
                    </ul>

                    <!-- Code to AutoIncrement the Copyright Year -->
                    <p class="copyright text-muted small">&copy; <?php echo date("Y") ?> &nbsp <code>A S Creativity</code>&nbsp&nbsp|&nbsp&nbspAll Rights Reserved</p>
                </div>
            </div>
        </footer>
    
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
    
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    
    </body>
</html>