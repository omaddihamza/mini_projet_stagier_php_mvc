<?php

$title= "delete le stagiaire";

ob_start();
echo "<p>voules vous vraiment supprimer le stagiaire </p>";
?>

<a href="index.php?action=destroy&id=<?= $id?>" class="btn btn-danger">valider la suppression</a>
<a href="index.php?action=list" class="btn btn-primary">annuler la suppression</a>
<?php

$content = ob_get_clean();

?>
<?php include_once "./views/layout.php";?>
