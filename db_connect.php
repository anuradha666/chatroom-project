<?php
$servername = "localhost";
$username= "root";
$password = "";
$database = "chatroom";

// Creating database connection

$conn = mysqli_connect($servername,$username,$password,$database)

//check connection

/*
if($conn)
{
	die("Fail to connect".mysqli_connect_error());
}
*/

?>