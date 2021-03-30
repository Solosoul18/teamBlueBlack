<?php

error_reporting(E_ERROR | E_PARSE);

$servername = "localhost";

$username = "root";

$pdbname = "product";

$password = "";

$ptable = "list";

$pyourfield = "barcodeno";

$pfield = "units";

$barcode = $_POST['barcode'];

if(!empty($_POST['quantity'])){
    $newquantity = $_POST['quantity'];
    }
    
    else{
    $newquantity = 1;
    }

$pconnect   =  mysqli_connect($servername, $username, $password) OR DIE ("Unable to connect to database! Please try again later.");

mysqli_select_db($pconnect,$pdbname);

$psql = "SELECT * FROM $ptable WHERE $pyourfield = '".$_POST["barcode"]."'";

$presult = mysqli_query($pconnect,$psql);

$prowSelected   = mysqli_num_rows($presult);

if ($prowSelected ) {

    while($prow = mysqli_fetch_array($presult)) {

            $name = $prow["$pyourfield"];
            $units= $prow["$pfield"];
        }
    }

if($_POST["update"]) {

	$dbname = "final";

	$usertable = "flist";

	$yourfield = "quantity";

	$field = "barcode";

	$field1="TPrice";

	$field2="Price";

	$connect   =  mysqli_connect($servername, $username, $password) OR DIE ("Unable to connect to database! Please try again later.");
	
	mysqli_select_db($connect,$dbname);

	$sql = "SELECT * FROM $usertable WHERE $field = '".$_POST["barcode"]."'";

	$result = mysqli_query($connect,$sql);

	$rowSelected   = mysqli_num_rows($result);

	if ($rowSelected ) {
    
    	while($row = mysqli_fetch_array($result)) {

            $Price = $row["$field2"];
            $TPrice = $newquantity * $Price;
            $oldquantity= $row["$yourfield"];

            $sql1 = "UPDATE $usertable SET $field1 = '$TPrice' WHERE $field = '$barcode'";
            $sql2 = "UPDATE $usertable SET $yourfield = '$newquantity' WHERE $field = '$barcode'";
            $connect->query($sql1);
            $connect->query($sql2);

        }


    }

	if ($oldquantity < $newquantity){

    	$uquantity = $newquantity - $oldquantity;

    	$newunits = $units - $uquantity;

    	$pconnect   =  mysqli_connect($servername, $username, $password) OR DIE ("Unable to connect to database! Please try again later.");

    	mysqli_select_db($pconnect,$pdbname);

    	$psql1 = "UPDATE $ptable SET $pfield = '$newunits' WHERE $pyourfield = '$barcode'";

    	$pconnect->query($psql1);


	}else{

    	$uquantity = $oldquantity - $newquantity;

    	$newunits = $units + $uquantity;    	

    	$pconnect   =  mysqli_connect($servername, $username, $password) OR DIE ("Unable to connect to database! Please try again later.");

    	mysqli_select_db($pconnect,$pdbname);

    	$psql1 = "UPDATE $ptable SET $pfield = '$newunits' WHERE $pyourfield = '$barcode'";

    	$pconnect->query($psql1);
	}

include("cart.php");
mysqli_close($connect);
return ;

}

else if($_POST["delete"]) {

	$dbname = "final";

	$usertable = "flist";

	$yourfield = "quantity";

	$field = "barcode";

	$connect   =  mysqli_connect($servername, $username, $password, $dbname) OR DIE ("Unable to connect to database! Please try again later.");

	$sql = "SELECT * FROM $usertable WHERE $field = '".$_POST["barcode"]."'";

	$result = mysqli_query($connect,$sql);

	$rowSelected   = mysqli_num_rows($result);

	if ($rowSelected ) {
    
    	while($row = mysqli_fetch_array($result)) {

            $oldquantity= $row["$yourfield"];

        }

    }

    $connect   =  mysqli_connect($servername, $username, $password, $dbname) OR DIE ("Unable to connect to database! Please try again later.");

	$sql1 = "DELETE FROM flist WHERE $field = '$barcode'";

	$connect->query($sql1);

	$pconnect   =  mysqli_connect($servername, $username, $password) OR DIE ("Unable to connect to database! Please try again later.");

	mysqli_select_db($pconnect,$pdbname);

	$newunits = $units + $oldquantity;

	$psql2 = "UPDATE $ptable SET $pfield = '$newunits' WHERE $pyourfield = '$barcode'";

	$pconnect->query($psql2);

	include ("rearrange.php");
	error_reporting(E_ERROR | E_PARSE);
	include ("cart.php");

	return;
	mysqli_close($connect);

}
?>

