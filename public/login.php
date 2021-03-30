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
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
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

<div>
  <form action="authenticate.php" >
    <h1>Login</h1>


    <label for="psw"><b>Enter Tag</b></label>
    <input type="password" placeholder="Scan Tag" name="U" required>

    <button type="submit" class="btn">Login</button>
  </form>
</div>



</body>
</html>