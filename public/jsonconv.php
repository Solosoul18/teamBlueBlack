<?php
    

    session_start();

    $dbname = "backup";
    $table= $_SESSION["PHONENO"] ;
    //open connection to mysql db
    $connection = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($connection,$dbname);
    
    //fetch table rows from mysql db
    $sql = "SELECT * FROM $table";
    $result = mysqli_query($connection, $sql);

    //create an array
    $emparray = array();
    while($row = mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    //write to json file
    $fp = fopen("'".$table."'.json", 'w');
    fwrite($fp, json_encode($emparray));
    fclose($fp);


    //close the db connection
    mysqli_close($connection);
?>