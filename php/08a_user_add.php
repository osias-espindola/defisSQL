<?php
require_once("./src/connect.php");

// Requête SQL pour insérer un nouvel utilisateur
$sql = 
"INSERT INTO users ( first_name , last_name , email, gender , birth_date , country)
VALUES
('Rébecca', 'Armand','Rébecca@hotmail.com', 'Female' ,  '2000-04-24','China'),
('Aimée'  , 'Hebert','Hebert@hotmail.com', 'Male', '1999-01-20','Brazil'),
('Marielle', 'Ribeiro','Ribeiro@hotmail.com', 'Male',  '1980-02-01','Peru'),
('Hilaire', 'Savary','Savary@hotmail.com','Female' ,  '2001-11-10', 'Indonesia');


// Préparation de la requête
$query = $db->prepare($sql);
// Exécution de la requête
$query->execute();

require_once("./src/close.php");

// Redirection vers la page d'accueil
header('Location: ./index.php');
?>
