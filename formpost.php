<?php
// Only process the form if $_POST isn't empty
    if ( ! empty( $_POST ) ) {

        include ("connect_db.php");

        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $bloodgroup = $_POST['bloodgroup'];
        $birthdate = $_POST['dob'];
        $cellphone = $_POST['mobile'];
        $landline = $_POST['landline'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $country = $_POST['country'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $district = $_POST['district'];


        // Connect to MySQL
        $mysqli = new mysqli($servername, $username, $password, $dbname);

        // Check our connection
        if ( $mysqli->connect_error ) {
            die( 'Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error );
        }
        
        // Insert our data
        $sql = ("INSERT INTO users ( fullname, gender, bloodgroup, birthdate, cellphone, landline, email, address, country, state, city, district )
                VALUE ('$name','$gender','$bloodgroup','$birthdate','$cellphone','$landline','$email','$address','$country','$state','$city','$district')");
    
        $insert = $mysqli->query($sql);
    
        // Print response from MySQL
    
        if ( $insert ) {
    
            header("Location:thanks.php");
            exit;
        } 
        else 
        {
            die("Error: {$mysqli->errno} : {$mysqli->error}");
        }
    }