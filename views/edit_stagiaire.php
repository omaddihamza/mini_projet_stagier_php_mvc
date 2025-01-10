<?php

$title= "modifier le stagiaires";

ob_start();
?>
<form method="POST" action="index.php?action=update">
    <div class="mb-3">
        <label for="nom" class="form-label">ID</label>
        <input type="text" class="form-control" id="id" name="id" value="<?= $stagiaire["id"]?>" readonly>
    </div>
    <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" value="<?= $stagiaire["nom"]?>" placeholder="Enter nom">
    </div>
    <div class="mb-3">
        <label for="prenom" class="form-label">Prénom</label>
        <input type="text" class="form-control" id="prenom" name="prenom" value="<?= $stagiaire["prenom"]?>" placeholder="Enter prénom" >
    </div>
    <div class="mb-3">
        <label for="prenom" class="form-label">Age</label>
        <input type="text" class="form-control" id="age" name="age"  value="<?= $stagiaire["age"]?>" placeholder="Enter age" >
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?= $stagiaire["email"]?>" placeholder="Enter email" >
    </div>
    <div class="mb-3">
        <label for="specialite" class="form-label">Spécialité</label>
        <input type="text" class="form-control" id="specialite" name="specialite" value="<?= $stagiaire["specialite"]?>" placeholder="Enter spécialité" >
    </div>
    <div class="mb-3">
        <label for="date_debut" class="form-label">Date Début</label>
        <input type="date" class="form-control" id="date_debut" value="<?= $stagiaire["date_debut"] ?>" name="date_debut">
    </div>

    <div class="mb-3">
        <label for="date_fin" class="form-label">Date Fin</label>
        <input type="date" class="form-control" id="date_fin" value="<?= $stagiaire["date_fin"]?>" name="date_fin" >
    </div>
    <button type="submit" class="btn btn-primary" name="modifier">Modifier</button>
</form>
<?php

$content = ob_get_clean();

?>
<?php include_once "./views/layout.php";?>
