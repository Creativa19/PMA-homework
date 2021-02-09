< ?php

$servername = "thebestserver";
$username = "username";
$password = "password";
$dbname = "thebestdatabase";

$title = "Article";
$firstname = "Gosho";
$lastname = "GledaLosho";
$data = "2021-01-02"
$introtxt = "ToziGoshoGledaLosho";
$fulltxt = "BlaBlaBlaBla";
$imageurl = "htttp://someimageurl.com";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection with the DB failed: " . $conn->connect_error);
}
$sql = "INSERT INTO ArticlesData (title,firstname, lastname, data, introtxt, fulltxt, imageurl)
VALUES ($title, $firstname, $lastname, $data, $introtxt, $fulltxt, $imageurl)";

if ($conn->query($sql) === TRUE) {
  print "Successfully saved to database";
} else {
  print "Error: " . $sql . $conn->error;
}

? >