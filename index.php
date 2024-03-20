<?php
require_once 'ContactBook.php';

$contact_book = new ContactBook();


?>






<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ksiązka Adresowa</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Imię" required><br>
		<input type="text" name="surname" placeholder="Nazwisko" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="text" name="phone" placeholder="Telefon" required><br>
        <input type="file" name="image"><br>
        <button type="submit" name="add_contact">Dodaj kontakt</button>
    </form>


	<?php
	$contacts = $contact->getContacts();
	foreach($contacts as $row) {
		echo "
		<p>".$row['name']."</p>
		<p>".$row['surname']."</p>
		<p>".$row['email']."</p>
		<p>".$row['phone']."</p>
		<p>".$row['image_name']."</p>
		";

	}
	
	?>
	

</body>
</html>