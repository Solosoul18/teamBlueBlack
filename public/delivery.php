<?php
    //error_reporting(E_ERROR | E_PARSE);

    $servername = "localhost";

    $username = "root";
    
    $password = "";
    
    $dbname = "final";

    $con = mysqli_connect($servername, $username, $password) OR DIE ("Unable to connect to database! Please try again later.");
    
    mysqli_select_db($con,$dbname);

    $name = $_GET['name'];

    $address = $_GET['address'];

    $phone = $_GET['phonenum'];

    $sql1 = "UPDATE  flist SET delivery = '$name' Where id = '1' ";
    $sql2 = "UPDATE  flist SET delivery = '$address' Where id = '2' "; 
    $sql3 = "UPDATE  flist SET delivery = '$phone' Where id = '3' ";
    if($con->query($sql1) &&
    $con->query($sql2) &&
    $con->query($sql3)){

    include("backup.html");
}
    mysqli_close($con);

    

?>