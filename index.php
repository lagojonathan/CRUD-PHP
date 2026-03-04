<?php
include("includes/bd.php");

if(isset($_POST["inscrire"])){
    $nom = $_POST['nom'];
    $postnom = $_POST['postnom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $stmt = $db->prepare("INSERT INTO etudiant(nom, postnom, prenom, age) VALUES(:nom, :postnom, :prenom, :age)");
    $insert = $stmt->execute(['nom'=>$nom, 'postnom'=>$postnom, 'prenom'=>$prenom, 'age'=>$age]);
}

include("includes/head.php")
?>
<body>
    <a href="inscription.php">S'inscrire</a>
    <h1>Liste des etudiants</h1>

    <table class="table table-bordered">
        <thead>
            <th>Nom</th>
            <th>Postnom</th>
            <th>Prenom</th>
            <th>Age</th>
        </thead>
        <tbody>
            <?php
            $stmt= $db->prepare("SELECT * FROM etudiant");
            $stmt->execute();
            $etudiants = $stmt->fetchAll();
            foreach($etudiants as $etudiant){
            ?>
            <tr>
                <td><?php echo $etudiant["nom"] ?></td>
                <td><?php echo $etudiant["postnom"] ?></td>
                <td><?php echo $etudiant["prenom"] ?></td>
                <td><?php echo $etudiant["age"] ?></td>
            </tr>
            <?php
            }
            ?>
            
        </tbody>
    </table>
</body>
</html>