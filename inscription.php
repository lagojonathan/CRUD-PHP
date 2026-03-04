<?php
include("includes/bd.php");

include("includes/head.php")
?>
<body>
    <a href="index.php">Liste</a>
    <form action="index.php" method="POST">
        <div>
            <label for="">Nom</label>
            <input type="text" name="nom" class="form-control">
        </div>
        <div>
            <label for="">Postnom</label>
            <input type="text" name="postnom" class="form-control">
        </div>
        <div>
            <label for="">Prenom</label>
            <input type="text" name="prenom" class="form-control">
        </div>
        <div>
            <label for="">Age</label>
            <input type="number" name="age" class="form-control">
        </div>
        <div>
            <input type="submit" name="inscrire" value="inscrire" class="btn btn-success">
        </div>

    
    </form>
</body>
</html>