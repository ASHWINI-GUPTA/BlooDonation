<?php
/**
 * Created by PhpStorm.
 * User: Ashwini Gupta
 * Date: 01-02-2016
 * Time: 12:59 PM
 */

    include ("formpost.php");
    $sql = "SELECT email FROM users WHERE email = " .$_POST['email'];
    $select = mysqli_query($mysqli, $sql);
    $row = mysql_num_rows($select);

    if ($row > 0)
    {
        echo 'true';
    }
    else
    {
        echo 'false';
    }
