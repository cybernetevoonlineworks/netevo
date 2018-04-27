<?php
if(isset($_POST['submit']))
{

//get the name and comment entered by user
$name = $_POST['name'];


//connect to the database
include("config.php");

//insert results from the form input
$query = "INSERT IGNORE INTO clients(name) VALUES('$name')";

$result = mysqli_query($dbc, $query) or die('Error querying database.');

mysqli_close($dbc);
}

?>