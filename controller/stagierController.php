<?php
require_once "./model/stagierModel.php";
function listStagierAction()
{
  $stagiaires = listStagier();
  require_once "./views/list_stagiaire.php";
}

function addStagierAction(){
    require_once "./views/add_stagiaire.php";
}

function store()
{
 addStagier();
 header("Location: index.php?action=list");
}

function deleteStagierAction(){
    $id = $_GET["id"];
    require_once "./views/delete_stagiaire.php";
}

function destroy(){
    $id = $_GET["id"];
    deleteStagier($id);
    header("Location: index.php?action=list");
}

function editStagierAction(){
    $id = $_GET["id"];
    $stagiaire = view($id);
    require_once "./views/edit_stagiaire.php";
}

function updateStagierAction()
{
    updateStagier($_POST["nom"], $_POST["prenom"], $_POST["age"], $_POST["email"], $_POST["specialite"] ,$_POST["date_debut"], $_POST["date_fin"], $_POST["id"]);
    header("Location: index.php?action=list");
}