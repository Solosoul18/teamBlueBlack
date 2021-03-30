
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

.form2 {
  width: 100%;
  margin: 10px auto;
  margin-right: : 100px;
  max-width: 350px;
  padding: 90px;
 
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
  margin-right: : 100px;
  max-width: 350px;
  padding: 90px;


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
        
		<input type="image" name="cart" src="close.jpg" alt = "close" width="48" height="48" >
  
  	</form>
</div>



</body>
</html>