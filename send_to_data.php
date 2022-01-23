<?php 
include("config/config.php");

echo "Welcome to PHP<br>";

$myUsernme = $_REQUEST["username"];
$myPassword = $_REQUEST["password"];

echo "Username: $myUsernme <br>";
echo "Password: $myPassword <br>";

//username, password table column names- INSERT  //Retrieve,  SELECT
$sqlQuery = "INSERT INTO users(username, password) VALUES('$myUsernme', '$myPassword')";

$database = new DatabaseManager();
echo "<br>MySQL QUERY : $sqlQuery";

//Object pritn
#print_r($database);

//NOW Send sqlQuery to MySQL
$sqlResponse = $database->fireQuery($sqlQuery);

echo "<br> MySQL Response: $sqlResponse";

?>