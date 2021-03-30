<?php
$servername = "localhost";

$username = "root";

$dbname = "product";

$password = "";

$usertable = "list";

$yourfield = "barcodeno";

$field="item";

$field1="price";

$field2="units";

$barcode = $_GET['barcode'];

if(!empty($_GET['quantity'])){
    $quantity = $_GET['quantity'];
    }
    
    else{
    $quantity = 1;
    }

$connect   =  mysqli_connect($servername, $username, $password) OR DIE ("Unable to connect to database! Please try again later.");

mysqli_select_db($connect,$dbname);

$sql = "SELECT * FROM $usertable WHERE $yourfield = '".$_GET["barcode"]."'";

$result = mysqli_query($connect,$sql);

$rowSelected   = mysqli_num_rows($result);

if ($rowSelected ) {

    while($row = mysqli_fetch_array($result)) {

            $name = $row["$yourfield"];
            $name1= $row["$field"];
            $name2= $row["$field1"];
            $units= $row["$field2"];
			      $name3= $quantity * $name2;
            $name4= $units - $quantity;
            $conn = new mysqli('localhost','root','','final');
    if($conn->connect_error){
	      die('connection failed:' .$conn->connect_error);
	}else{
	 $sql = "INSERT INTO flist(barcode,item,quantity,Price,TPrice) VALUES('$barcode','$name1','$quantity','$name2','$name3')";
   $sql1= "UPDATE $usertable SET $field2 = '$name4' WHERE $yourfield = '$barcode'";
	}
	 if ($conn->query($sql)== TRUE){
	   //echo "recorded";
	 }else{
		echo "error.Scan again" .$sql. "<br>" . $conn->error; 
	 }

   $connect->query($sql1);
        }

}

else {
    $conn = new mysqli('localhost','root','','final');
    $price = "40.00";
    $tprice = $quantity * $price;
    if($conn->connect_error){
          die('connection failed:' .$conn->connect_error);
    }else{
     $sql = "INSERT INTO flist(barcode,quantity,Price,TPrice) VALUES('$barcode','$quantity','$price',$tprice)";
    }
     if ($conn->query($sql)== TRUE){
	  /* echo '<script type="text/javascript">';
	   echo 'alert("Recorded")';
	   echo '</script>';*/	 
      # echo "recorded";
     }else{
		echo '<script type="text/javascript">';
	    echo 'alert("error.Scan again")'.$sql. "<br>" . $conn->error;;
	    echo '</script>'; 
        //echo "error.Scan again" .$sql. "<br>" . $conn->error; 
     }
}

mysqli_close($connect);
?>
 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {

  font-family: Arial, Helvetica, sans-serif;
  
  background-image: url("img.jpg");
  background-position: center;
  background-size: cover;
  position: relative;
}

* {
  box-sizing: border-box;
}

form {
  width: 80%;
  margin: 180px auto;
  max-width: 500px;
  min-width: 10px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=int]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=int]:focus {
  background-color: #ddd;
  outline: none;
}

input[type=text]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

.form2 {
  width: 100%;
  margin: 10px auto;
  margin-top: 10px;
  margin-right: auto;
  max-width: 350px;
  padding: 90px;
 
}
</style>
</head>
<body>
<h1 align="center">Entry Page</h1>

<div style="float:left">
  <form method="GET" action="insert.php">
        
        <label for="quantity"> Quantity:</label>
        <input type="int" id= "quant" name="quantity" placeholder="Quantity" />
              
        <label for="barcode"> Barcode:</label>
        <input type="text" id= "barcode" name="barcode" placeholder="Barcode_no." required/>

        
        <button type="submit" class="btn">Submit</button>
  
  </form>
</div>

<div class = "form2" style ="width: 100% margin:100%;">
  <div style="display:inline-grid; width:80%; text-align:center;">


    <form  method="GET" action="cart.php">
        
    <input type="image" name="cart" src="close.jpg" alt = "close" width="58" height="58" >
  
    </form>
</div>



</body>
</html>
