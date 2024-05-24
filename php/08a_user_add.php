<?php
require_once("./src/connect.php");

// Requête SQL pour insérer un nouvel utilisateur
$sql = 
"INSERT INTO client (id , first_name , last_name , email, gender , birth_date , country)
VALUES
(1001,'Rébecca', 'Armand',Rébecca@hotmail.com, 'Saint-Didier-des-Bois', 2000-04-2024),
('Aimée', 'Hebert', 'Marigny-le-Châtel', 36),
('Marielle', 'Ribeiro', 'Maillères', 27),
('Hilaire', 'Savary', 'Conie-Molitard', 58);";


// Préparation de la requête
$query = $db->prepare($sql);
// Exécution de la requête
$query->execute();

require_once("./src/close.php");

// Redirection vers la page d'accueil
header('Location: ./index.php');
?>
