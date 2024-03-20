<?php
require_once 'ContactBook.php';

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $id =  $_POST["id"];

    $contact_book = new ContactBook();

    $contact_book->deleteContact($id);

}
header('Location: index.php');

?>