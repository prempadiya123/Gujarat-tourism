<?php
    $con = mysqli_connect("localhost","root","","tourism");

    //booking table
    $booking_sql="CREATE TABLE IF NOT EXISTS bookpackage( b_id INT AUTO_INCREMENT PRIMARY KEY ,firstname TEXT, email TEXT, address TEXT, city TEXT, state TEXT, zip INT(6), cardname TEXT,
    cardnumber INT(16), expmonth INT(2), expyear INT(2), cvv INT(3))";
    $result = mysqli_query($con, $booking_sql);

    //contact table
    $contact_sql = "CREATE TABLE IF NOT EXISTS bookpackage( id INT AUTO_INCREMENT PRIMARY KEY , name TEXT, email TEXT, mobileno INT(10), message TEXT)";
    $result = mysqli_query($con, $contact_sql)";

?>