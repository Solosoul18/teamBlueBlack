

<?php 
error_reporting(E_ERROR | E_PARSE);

$user = 'root'; 

$password = '';   

$database = 'final';   

$servername='localhost'; 

$mysqli = new mysqli($servername, $user,  

                $password, $database); 

   

if ($mysqli->connect_error) { 

    die('Connect Error (' .  

    $mysqli->connect_errno . ') '.  

    $mysqli->connect_error); 

} 

   

$sql = "SELECT * FROM flist"; 

$result = $mysqli->query($sql); 

$mysqli->close();  

?> 

​

 

<!DOCTYPE html> 

<html lang="en"> 

  

<head> 

    <meta charset="UTF-8"> 

    <title>CART</title> 

    <!-- CSS FOR STYLING THE PAGE --> 

    <style> 

    body, html {

                font-family: Arial, Helvetica, sans-serif;
  
                background-image: url("img.jpg");
                background-position: center;
                background-size: cover;
                position: relative;
                background-repeat: no-repeat;
                min-height: 900px;
            }

    .styled-table {
    border-collapse: collapse;
    margin: auto;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    background-color: white;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    border-radius: 8px;
}
    .styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
    .styled-table th,
    .styled-table td {
    padding: 12px 15px;
}

    .styled-table tbody tr {
    border-bottom: 3px solid #dddddd;
}

    .styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

    .styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
    .styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
} 

h1 {
  text-align: center;
}
    </style> 

</head> 

  

<body>

    
    

    <section> 

        <h1>Your Cart</h1> 

        <!-- TABLE CONSTRUCTION--> 

        <table class="styled-table"> 

            <tr> 
                <th>id</th> 

                <th>Product</th> 

                <th>Quantity</th> 

                <th>Item</th>

                <th>Price</th>

            </tr> 

            <!-- PHP CODE TO FETCH DATA FROM ROWS--> 

            <?php   // LOOP TILL END OF DATA  

                while($rows=$result->fetch_assoc()) 

                { 

             ?> 

            <tr> 

                <!--FETCHING DATA FROM EACH  

                    ROW OF EVERY COLUMN-->  

                <td><?php echo $rows['id'];?></td> 

                <td><?php echo $rows['barcode'];?></td> 

                <td align="center"><?php echo $rows['quantity'];?></td> 

                <td><?php echo $rows['item'];?></td>

                <td><?php echo $rows['Price'];?></td>

            </tr> 
			

            <?php 

                } 

             ?> 

        </table> 

    </section>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

* {
  box-sizing: border-box;
}

form {
  width: 50%;
  margin: 180px auto;
  max-width: 400px;
  padding: 16px;
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

<div class="bg-img">
  <form method="POST" action="update.php">

        
        <label for="quantity"> Quantity:</label>
        <input type="int" id= "quant" name="quantity" />
              
        <label for="barcode"> Barcode:</label>
        <input type="text" id= "barcode" name="barcode" />
        
        <input type="submit" value ="Update" class="btn" name="update"></label> </br> </button>
        <button type="submit" value ="Delete" class="btn" name="delete">Delete</label> </br> </button>
  
  </form>
</div>

<div>
  
  <form method="GET" action="entry1.php">
        
        <button type="submit" value ="Back" class="btn">Back</button>
  
  </form>
</div>



</body>
</html


