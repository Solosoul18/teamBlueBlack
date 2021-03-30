<?php
$servername = "localhost";

$username = "root";

$dbname = "final";

$password = "";

$connect   =  new mysqli($servername, $username, $password, $dbname) OR DIE ("Unable to connect to database! Please try again later.");

$sql= "SET @count = 0;
       UPDATE `flist` SET `flist`.`id` = @count:= @count + 1;
       ALTER TABLE `flist` AUTO_INCREMENT = 1;";
$connect->multi_query($sql);	
  
	   
?>