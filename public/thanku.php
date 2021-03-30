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

 {
  box-sizing: border-box;
}

form {
  width: 50%;
  margin: 180px auto;
  min-width: 300px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */


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
     
  <form action="login.php" >
    <h1 align="center">Thank you so much for shopping with us...</h1>
   <h2 align="center">To exit please click the button below </h2></br>

    </br><button type="submit" class="btn">Finish Shopping!</button>
  </form>
</div>



</body>
</html>

<?php
#session_start();
#$PHONENO = $_SESSION["PHONENO"];
#echo "$PHONENO";
?>