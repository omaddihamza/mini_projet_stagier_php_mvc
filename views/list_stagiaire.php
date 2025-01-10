<?php

$title= "List des stagiaires";

ob_start();
?>
<a href="index.php?action=create">ajouter</a>
<table class="table">
      <thead>
      <tr>
          <th scope="col">#</th>
          <th scope="col">nom</th>
          <th scope="col">prenom</th>
          <th scope="col">age</th>
          <th scope="col">email</th>
          <th scope="col">specialite</th>
          <th scope="col">date_debut</th>
          <th scope="col">date_fin</th>
          <th scope="col">Opération</th>
      </tr>
      </thead>
      <tbody>

         <?php
           foreach ($stagiaires as $value) {
           ?>
         <tr>
             <td><?= $value['id']?></td>
             <td><?= $value['nom']?></td>
             <td><?= $value['prenom']?></td>
             <td>
                 <?php
                  if($value['age'] <= 18){
                      ?>
                      <span class="btn btn-success btn-sm"><?= $value['age']?></span>
                 <?php

                  }elseif ($value['age'] >= 20 && $value['age'] <= 30){
                      ?>
                      <span class="btn btn-warning btn-sm"><?= $value['age']?></span>
                      <?php
                  }elseif ($value['age'] > 30 && $value['age'] <= 40){

                      ?>
                      <span class="btn btn-danger btn-sm"><?= $value['age']?></span>
                      <?php
                  }
                 ?>
             </td>
             <td><?= $value['email']?></td>
             <td><?= $value['specialite']?></td>
             <td><?= $value['date_debut']?></td>
             <td><?= $value['date_fin']?></td>
             <td>
                 <form>
                     <a href="index.php?action=edit&id=<?= $value['id']?>" class="btn btn-primary" >modifier</a>
                     <a href="index.php?action=delete&id=<?= $value['id']?>" class="btn btn-danger" >Supprimer</a>
                 </form>
             </td>
         </tr>
               <?php
           }
         ?>

      </tbody>
  </table>
<?php

$content = ob_get_clean();

?>
<?php include_once "./views/layout.php";?>
