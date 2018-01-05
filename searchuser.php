<?php

    /**
     * Created by PhpStorm.
     * User: Ashwini Gupta
     * Date: 27-01-2016
     * Time: 09:08 PM
     */

    // Only process the form if $_POST isn't empty
    if ( ! empty( $_POST ) ) {

        echo 'Connected';

        $servername = "ap-cdbr-azure-east-c.cloudapp.net";
        $username = "b0e3951decbf77";
        $password = "34c04111";
        $dbname = "letssavelife";

        // post variable
        $bloodgroup = $_POST['bloodgroup'];
        $country = $_POST['country'];
        $state = $_POST['state'];
        $city = $_POST['city'];

        //Set Table name
        $tname = 'newuser';

        // Connect to MySQL
        $mysqli = new mysqli($servername, $username, $password, $dbname);

        // Check our connection
        if ($mysqli->connect_error) {
            die('Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error);
        }

        $query = "SELECT * FROM newuser";

        $stmt = $mysqli->prepare($query);

        $stmt->execute();

        $stmt->bind_result($fullname, $cellphone , $address, $city);

        while($stmt->fetch()) {
            echo "$fullname, $cellphone, $address, $city <br />";
        }

        echo '<h3>Results:</h3>';

        while ($result = mysqli_fetch_array($results))
        {
            echo '<div style="border: 1px solid #e4e4e4; padding: 15px; margin-bottom: 10px;">';
            echo '<p>Name: ' . $result['fullname'] . '</p>';
            echo '<p>Gender: ' . $result['gender'] . '</p>';
            echo '<p>BloodGroup: ' . $result['bloodgroup'] . '</p>';
            echo '<p>Mobile: ' . $result['cellphone'] . '</p>';

        }
    }

