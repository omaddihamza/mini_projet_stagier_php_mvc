<?php

$title= "Ajouter les stagiaires";

ob_start();
?>
<form method="POST" action="index.php?action=store">
    <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" placeholder="Enter nom">
    </div>
    <div class="mb-3">
        <label for="prenom" class="form-label">Prénom</label>
        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Enter prénom" >
    </div>
    <div class="mb-3">
        <label for="prenom" class="form-label">Age</label>
        <input type="text" class="form-control" id="age" name="age" placeholder="Enter age" >
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" >
    </div>
    <div class="mb-3">
        <label for="specialite" class="form-label">Spécialité</label>
        <input type="text" class="form-control" id="specialite" name="specialite" placeholder="Enter spécialité" >
    </div>
    <div class="mb-3">
        <label for="date_debut" class="form-label">Date Début</label>
        <input type="date" class="form-control" id="date_debut" name="date_debut" >
    </div>
    <div class="mb-3">
        <label for="date_fin" class="form-label">Date Fin</label>
        <input type="date" class="form-control" id="date_fin" name="date_fin" >
    </div>
    <button type="submit" class="btn btn-primary" name="ajouter">Ajouter</button>
</form>
<?php

$content = ob_get_clean();

?>
<?php include_once "./views/layout.php";?>
