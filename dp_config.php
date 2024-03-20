<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contacts_book";


$connection = new mysqli($servername, $username, $password, $dbname);

if($connection->connect_error){
    die($connection->cennect_error);
}

?>