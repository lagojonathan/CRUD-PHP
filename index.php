<?php 
require_once 'functions.php'; 

// Logique de suppression déplacée ici
if(isset($_GET['del'])) {
    $id_a_supprimer = securiser($_GET['del']);
    mysqli_query($pdo, "DELETE FROM etudiant WHERE id = '$id_a_supprimer'");
    header("Location: index.php?msg=deleted");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Portail Gestion Étudiants</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="app-container">
        <header>
            <h1>🎓 Annuaire Académique</h1>
        </header>

        <section class="form-section">
            <form action="traitement.php" method="POST">
                <input type="text" name="nom" placeholder="Nom complet" required>
                <input type="text" name="adresse" placeholder="Adresse" required>
                <input type="tel" name="tel" placeholder="Téléphone" required>
                <button type="submit" name="ajouter">Enregistrer</button>
            </form>
        </section>

        <section class="table-section">
            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Coordonnées</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $liste = getTousLesEtudiants($pdo);
                    while($row = mysqli_fetch_assoc($liste)): 
                    ?>
                    <tr>
                        <td><strong><?= strtoupper($row['nom']) ?></strong></td>
                        <td><?= $row['adresse'] ?> <br> <small><?= $row['telephone'] ?></small></td>
                        <td>
                            <a href="editer.php?id=<?= $row['id'] ?>" class="btn edit">Modifier</a>
                            <a href="index.php?del=<?= $row['id'] ?>" class="btn delete" onclick="return confirm('Confirmer ?')">Supprimer</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>