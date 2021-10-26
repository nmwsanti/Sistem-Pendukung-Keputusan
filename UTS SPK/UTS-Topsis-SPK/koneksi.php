<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect("localhost","root","","utsspktopsis");


if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Check connection

?>
