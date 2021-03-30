<?php 

//include('backup.php');

$user = 'root'; 

$password = '';   

$database = 'final';   

$servername='localhost';

$total=0; 

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

    <title>BILL</title> 

    <!-- CSS FOR STYLING THE PAGE --> 

    <style>
    body, html {

                font-family: Arial, Helvetica, sans-serif;
  
                background-image: url("img.jpg");
                background-position: center;
                background-size: cover;
                position: relative;
            }
.btn {
  background-color: #fa0068;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 10%;
  opacity: 0.9;
  position: absolute;
  top: 10;
  left: 0;
}

.btn:hover {
  opacity: 1;
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
    text-align: center;
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

        <h1>Your Bill</h1> 

        <!-- TABLE CONSTRUCTION--> 

        <table class="styled-table">
        <thread> 

            <tr> 

                <th>Id</th> 

                <th>Product</th> 

                <th>Quantity</th> 

                <th>Item</th>

                <th>Price</th>
                
                <th>Total Price</th>

            </tr>
        </thread>

            <!-- PHP CODE TO FETCH DATA FROM ROWS--> 

            <?php   // LOOP TILL END OF DATA  

                while($rows=$result->fetch_assoc()) 

                { 
                    $total = $total + $rows['TPrice'];
             ?> 

            <tbody>
            <tr> 

                <!--FETCHING DATA FROM EACH  

                    ROW OF EVERY COLUMN-->  

                <td ><?php echo $rows['id'];?></td> 

                <td ><?php echo $rows['barcode'];?></td> 

                <td align="center"><?php echo $rows['quantity'];?></td> 

                <td ><?php echo $rows['item'];?></td>

                <td ><?php echo $rows['Price'];?></td>
                
                <td ><?php echo $rows['TPrice'];?></td>
                
                
            </tr> 
            

            <?php 

                } 
                

             ?> 
             <tr>
             <td colspan="5" align="right">Total</td>
                 
                <th align="right">Rs.<?php echo number_format($total, 2); ?></th>
             </tr>
             </tbody>       

        </table> 

    </section>
    <form  method="GET" action="backup.html" align="center">
        
    <br><input type="submit" value="Continue" class =btn name="bill">
  
    </form>


</body> 

  

</html>