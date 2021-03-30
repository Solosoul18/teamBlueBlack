<?php
    $servername = "localhost";

    $username = "root";
    
    $password = "";
    
    $dbname = "membership";

    $con = mysqli_connect($servername, $username, $password) OR DIE ("Unable to connect to database! Please try again later.");
    
    mysqli_select_db($con,$dbname);

    $fname = $_GET['fname'];

    $lname = $_GET['lname'];

    $gender = $_GET['gender'];

    $mail = $_GET['mail'];

    $phone = $_GET['phoneno'];

    $address = $_GET['address']

    $sql = "INSERT INTO members(fname,lname,gender,mail,,phoneno,period,delivery) VALUES(' $fname','$lname','$gender',' $mail','$phone',NOW(),'$address')";

    $con->query($sql);

    mysqli_close($con);

    include("backup.html");

?>