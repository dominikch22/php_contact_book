<?php
class ContactBook {
    private $connection;

    function __construct(){
        require_once 'db_config.php';
        $this->connection = $connection;
    }

    function addContact($name, $email, $phone){
        $original_filename = basename($_FILES["image"]["name"]);
        $file_extension = pathinfo($original_filename, PATHINFO_EXTENSION);    

        $image_name = uniqid() . "." . $file_extension;  


        $sql = "INSERT INTO contacts (name, email, phone, image_name) VALUES ('$name', '$email', '$phone', '$image_name')";
        if($this->connection->query($sql) === TRUE){   
            move_uploaded_file($_FILES['image']['tmp_name'], 'images/'.$image_name);
            exit();
        }
    }

    function deleteContact($id){
        $sql = "DELETE FROM contacts WHERE id=$id";
        if($this->connection->query($sql) === TRUE){

        }
    }

    function updateContact(){

    }

    function getContacts(){
        
    }

}




?>