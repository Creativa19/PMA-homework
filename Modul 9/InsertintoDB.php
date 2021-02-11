


<?php
function insert_log_into_db ($Type, $Date, $Location, $ClientID, $Browser, $Message) {
	
$servername = "bankserver";
$username = "username";
$password = "password";
$dbname = "bankdatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection with the DB failed: " . $conn->connect_error);
}
$sql = "INSERT INTO LogData (Type, Date, Location, ClientId, Browser, Message);
VALUES ($Type, $Date, $Location, $ClientID, $Browser, $Message);

}


if (strlen($username) < 15) 
{
	function InsertIntoDB(0, "2020-02-11", "Sofia", 123456789, "Mozzila", "Success!");

}
else
     InsertIntoDB(1,"2020-02-11", "Sofia", 123456789, "Mozzila", "Username too long!");
	 
if (strlen($password) < 8)
     InsertIntoDB(2, "20-02-11", "Sofia", 123456789, "Mozilla", "Your password is too weak!");
	 
else 
     InsertIntoDB(0, "20-02-11", "Sofia", 123456789, "Mozilla", "Password Success!");

	
?>









