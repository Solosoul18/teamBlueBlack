
       
<?php

$servername = "localhost";

$username = "root";

$dbname = "rfid_no";

$password = "";

$usertable = "numbers";

$yourfield = "rfid_table";

$connect   =  mysqli_connect($servername, $username, $password) OR DIE ("Unable to connect to database! Please try again later.");

mysqli_select_db($connect,$dbname);

$sql = "SELECT * FROM $usertable WHERE $yourfield = '".$_GET["U"]."'";

$result = mysqli_query($connect,$sql);

$rowSelected   = mysqli_num_rows($result);

if ($rowSelected ) {

    while($row = mysqli_fetch_array($result)) {

            $name = $row["$yourfield"];
            include ('show.php');
        }

}

else {

    echo "doesnt exist";
    include ('counterlogin.php');
}

mysqli_close($connect);

?>      



               
