<?php
$Servername = "localhost";
$Databasename = "<database-name>";
$Username = "root";
$password = "";
$conn = mysqli_connect($Servername , $Username , $password , $Databasename);
if(!$conn) {
    die("connection failed : ".mysqli_connect_error);
}
?>