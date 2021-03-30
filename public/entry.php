 <?php

    $conn = new mysqli('localhost','root','','final');
     if($conn->connect_error){
	      die('connection failed:' .$conn->connect_error);
	 }else{
	      $sql = "TRUNCATE TABLE `flist`"; 
	 }
	 if ($conn->query($sql)== TRUE){
			  #echo '<script type="text/javascript">';
			  #echo 'alert("WELCOME")';
			  #echo '</script>';
	 }else{
		      #echo '<script type="text/javascript">';
			  #echo 'alert("error.Scan again")'.$sql. "<br>" . $conn->error; ;
			  #echo '</script>';
		     // echo "error.Scan again" .$sql. "<br>" . $conn->error; 
	       }

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
  min-height: 900px;
}

* {
  box-sizing: border-box;
}

form {
  width: 80%;
  margin: 180px auto;
  min-width: 10px;
  max-width: 500px;
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
</style>
</head>
<body>
<h1 align="center">Entry Page</h1>

<div class="bg-img">
  <form method="GET" action="insert.php">
  	<!--<h1>Enter Barcode and Quantity</h1>-->
        
        <label for="quantity"> Quantity:</label>
        <input type="int" id= "quant" name="quantity" placeholder="Quantity" />
              
        <label for="barcode"> Barcode:</label>
        <input type="text" id= "barcode" name="barcode" placeholder="Barcode_no." required/>
        
        <button type="submit" class="btn">Submit</button>
  
  </form>
</div>



</body>
</html>