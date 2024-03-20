<?php
require_once 'ContactBook.php';


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name =  $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $contact_book = new ContactBook();

    $contact_book->addContact( $name, $email, $phone );

    
}
header("Location: index.php");
exit();


?>