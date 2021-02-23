<?php

// $prenom = $_GET['prenom']; 
// $nom = $_GET['nom'];


if (empty($_GET["nom"]))
{
    header("Location:formulaire.php?erreur=nom");
    echo"Le prénom doit être renseigné.";
    exit;
} 

if (empty($_POST["prenom"]))
{
    header("Location:formulaire.php?erreur=prenom");
    echo"Le nom doit être renseigné.";
    exit;
} 

if ( isset($_GET["erreur"]) && $_GET["erreur"] == "prenom") 
{
    echo"Le prénom doit être renseigné.";  
}

if ( isset($_GET["erreur"]) && $_GET["erreur"] == "nom") 
{
    echo"Le nom doit être renseigné.";  
}