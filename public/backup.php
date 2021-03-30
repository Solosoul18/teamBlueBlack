<?php

error_reporting(E_ERROR | E_PARSE);

session_start();

 $L1 = new mysqli('localhost', 'root', '', 'final');

 $L2 = new mysqli('localhost', 'root', '', 'backup');
 
 $phone= $_GET['phone'];
 if(!empty($_GET['phone'])){
    $phone = $_GET['phone'];
    $m = "m";
    $phoneno = $m . $phone;
    }
    
    else{
    echo '<script type="text/javascript">';
	echo 'alert("Enter a phone number")';
	echo '</script>';
    }

    $_SESSION["PHONENO"] = $phoneno;
   
    USE backup as backup;
   
    $sql= "CREATE TABLE backup.$phoneno SELECT * FROM final.flist";  
	if($L1->query($sql)){
        include('thanku.php');
    }

    include('jsonconv.php');


	 
		
  
?>

<!--<!DOCTYPE html>
 <html>
 <head>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    // <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/> //
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
 <title></title>
 <link rel = "stylesheet" type = "text/css" href = "entrystyle.css">
 </head>
 <body>
 	<div id= "frm">
        <form method="GET" action="<?php $_PHP_SELF?>">
		</br><label for="phone"> Enter phone number:</label> <input type="number" id= "phone" name="phone" /></br>
		 </br><input type="submit" value ="submit" id="btn" name="submit"></label></br>
	</form>
    </div>
</body>
</html>-->

