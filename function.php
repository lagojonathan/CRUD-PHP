<?php
require_once 'config.php';

// Fonction pour récupérer tous les inscrits
function getTousLesEtudiants($conn) {
    $sql = "SELECT * FROM etudiant ORDER BY nom ASC";
    return mysqli_query($conn, $sql);
}

// Fonction de nettoyage pour la sécurité (évite les injections)
function securiser($donnee) {
    global $pdo;
    return mysqli_real_escape_string($pdo, htmlspecialchars($donnee));
}
?>