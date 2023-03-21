<?php 


date_default_timezone_set('Africa/Lagos');

// connect to the database 
$conn = mysqli_connect("localhost", "root", "", "blog");

// check if the connection was successful 

if (mysqli_connect_error()){
   exit('Failed to connect to database: ' .mysqli_connect_error());

} 

?>