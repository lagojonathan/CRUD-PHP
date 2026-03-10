<?php
// Paramètres de configuration de la base de données
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "gestion_scolaire"; // Changez le nom de la BDD si possible

$pdo = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$pdo) {
    error_log("Échec de la connexion : " . mysqli_connect_error());
    die("Maintenance en cours. Veuillez réessayer plus tard.");
}
?>