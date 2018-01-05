<?php
/*
// grab recaptcha library
require_once "recaptchalib.php";

// your secret key
$secret = "6LdvDhsTAAAAABfxiO1lLHEc2ce70rG2Hs4CpR7K";

// empty response
$response = null;

// check secret key
$reCaptcha = new ReCaptcha($secret);

*/?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Blood Donor">
    <meta name="author" content="A S Creativity">
    <link rel="shortcut icon" href="img/GCL.png"/>
    <title>Just Donate Blood</title>

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

    <!-- Java Script For Mail Check
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script>
        $(document).ready(function(){ //newly added

            function check_email(emailVal){
                {
                    alert('in');

                    alert(emailVal);
                    $.post('checkemail.php', {'email' : emailVal}, function(data) {

                        if(data=='true') return false;
                        else return true;
                    });
                }
            });
    </script>   -->

    <!-- Google reCAPTCHA
    <script src='https://www.google.com/recaptcha/api.js'></script>-->

    <!--Validate Age-->
<!--    <script>
        function getAge(DOB) {
            var today = new Date();
            var birthDate = new Date(DOB);
            var age = today.getFullYear() - birthDate.getFullYear();
            var m = today.getMonth() - birthDate.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            return age;
        }
    </script>
-->
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
                    <li>
                        <a href="#" data-toggle="modal" data-target="#myModal">Contact</a>
                    </li>
                    <li>
                        <a href="index.php"><i class="fa fa-search fa-fw"></i>&nbspFind Donor</a>
                    </li>
                    <li class="active">
                        <a href="login.php"><i class="fa fa-user-plus fa-fw"></i> Join / <i class="fa fa-sign-in"></i>&nbspSignIn</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<!-- /.intro-header -->
    <div  class="container">
    <div class="content-section-b">
        <div class="row">
            <div class="col-sm-8 col-md-offset-2">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#join"><i class="fa fa-user-plus fa-fw"></i> Join</a></li>
                    <li><a data-toggle="tab" href="#signin"><i class="fa fa-sign-in"></i> Sign In <sup><span class="label label-danger">ALPHA</span></sup></a></li>
                </ul><br>
                <div class="tab-content">
                    <div id="join" class="tab-pane fade in active">

                        <div class="panel panel-primary">
                            <div class="panel-heading text-center">
                                <h3>Register As New User</h3>
                            </div>
                            <div class="panel-body">
                                <form role="form" class="form-newuser" method="post" action="formpost.php" onsubmit="email_check($('#email').val())">
                                    <div class="form-group">

                                        <label for="name">Full Name:</label>
                                        <input type="text" class="form-control" id="name" maxlength="40"  name="name" required autofocus placeholder="Ashwini Gupta"><br>

                                        <label for="gender">Gender:</label>
                                        <select class="form-control " id="gender" name="gender" required>
                                            <option value="Select">-----Select-----</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select><br>

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
                                        </select><br>

                                        <div class="alert alert-info" >
                                            <p>Donor should be 17+</p>
                                        </div>

                                        <label for="dob">Date of Birth:</label>
                                        <input type="date" class="form-control" id="dob" name="dob" required><br>

                                        <div class="alert alert-info">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>
                                                <i class="fa fa-info-circle"></i>&nbsp;&nbsp;Contact Info!<br>
                                                &sdot; CellPhone Number without country code.<br>
                                                &sdot; Valid E-Mail Address, BlooDonor will send you the important information to mail address you provided.<br>
                                                &sdot; Landline Number, Permanent Address and District are optional.<br>
                                                &sdot; If your city is not listed below then provide nearby city and specify in District area.<br>
                                                &sdot; You can also write us about the not listing of your city or area, Find Detail in <a href="#" data-toggle="modal" data-target="#myModal">Contact</a> Menu. <br>
                                                &sdot; Write Landline No. with city code.<br>

                                            </strong>
                                        </div>
                                        <!-- Space for the mobile number and code
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="mobile">CellPhone Number:</label>
                                                <input type="tel" class="form-control" id="mobile" name="mobile" required><br>
                                            </div>
                                            <div class="col-sm-8">
                                                <label for="mobile">CellPhone Number:</label>
                                                <input type="tel" class="form-control" id="mobile" name="mobile" required><br>
                                            </div>
                                        </div>
                                        -->
                                        <label for="mobile">CellPhone Number:</label>
                                        <input type="tel" class="form-control" id="mobile" maxlength="10" name="mobile" required><br>

                                        <label for="landline">Landline Number:</label>
                                        <input type="tel" class="form-control"  id="landline" name="landline" placeholder="0755-27XXXXX"><br>

                                        <label for="email">E-Mail:</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com"><br>


                                        <label for="address">Permanent Address:</label>
                                        <textarea class="form-control" rows="5" id="address" name="address"></textarea><br>

                                        <label for="country">Select Country:</label>
                                        <select class="form-control " id="country" name="country" onchange="populate(this.id,'state')" required>
                                            <option value="Select">-----Select-----</option>
                                            <option value="India">India</option>
                                        </select><br>

                                        <label for="state">Select State:</label>
                                        <select class="form-control " id="state" name="state" onchange="populate(this.id,'city')" required>
                                            <option value="Select">-----Select-----</option>
                                        </select><br>

                                        <label for="city">Select City:</label>
                                        <select class="form-control " id="city" name="city" required>
                                            <option value="Select">-----Select-----</option>
                                        </select><br>

                                        <label for="district">District:</label>
                                        <input type="text" class="form-control" id="district" name="district"><br>

                                        <div class="alert alert-info">
                                            <p style="font-size: smaller"><i class="fa fa-info-circle"></i>&nbsp;&nbsp;By clicking Register, you agree to our <a href="terms.php">Terms & Condition</a>.</p>
                                        </div>

                                        <!--<div class="center-block">
                                            <div class="g-recaptcha" data-sitekey="6LdvDhsTAAAAAKvddOqn17u_Wrj5Y1jYZPYaPMM7"></div>
                                        </div>-->

                                        <br>
                                        <button type="submit" class="btn btn-primary" style="margin-right: 5%; margin-left: 2%; width: 45%;" value="Submit Form"><i class="fa fa-user-plus fa-fw"></i> Register</button>
                                        <button class="btn btn-danger" type="reset" style="width: 45%">Reset</button>

                                    </div>

                                </form><br>
                            </div>
                        </div>
                    </div>

                    <div id="signin" class="tab-pane fade">
                        <div class="panel panel-info">
                            <div class="panel-heading text-center">
                                <h3>Already Registered Sign In Here </h3>
                            </div><br>
                            <div class="panel-body">
                                <form class="form-signin">
                                    <div class="alert alert-warning">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>
                                            <i class="fa fa-warning fa-fw"></i> Currently Login function is not available, come back later.<br>
                                        </strong>
                                    </div>
                                    <label for="inputEmail" class="sr-only">Email address</label>
                                    <input type="email" id="inputEmail" class="form-control" placeholder="Email Address" required autofocus>
                                    <label for="inputPassword" class="sr-only">Password</label>
                                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="remember-me"> Remember me
                                        </label>
                                    </div><br>
                                    <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in"></i> Sign In</button>
                                </form><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
                    </div><br>
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
<!-- /MyModel -->

<!-- Footer -->
    <footer>
        <div  style="width: 2px; color: black" class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="index.php">Home</a>
                        </li>

                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#myModal">Contact</a>
                        </li>
                    </ul>
                    <!-- Code to AutoIncrement the Copyright Year -->
                    <p class="copyright text-muted small">&copy; <?php echo date("Y") ?> &nbsp <code>A S Creativity</code>&nbsp&nbsp|&nbsp&nbspAll Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
