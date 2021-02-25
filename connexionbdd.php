<?php

    $serveur = "localhost";
    $dbname = "testform";
    $user = "root";
    $pass = "";
    
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //INSERTION DES DONNEES SAISIES DANS LA TABLE

            //On connecte le formulaire a la table avec INSERT INTO suivi du nom de la table, on defini quelle valeur sera envoyée dans quelle collonne ex: prenom sera envoyé dans test_prenom
            $sth = $dbco->prepare("INSERT INTO test_inscription(test_prenom, test_nom) VALUES(:prenom, :nom)");
                
                //Requetes pour lier les colonnes aux valeurs
                $sth->bindParam(':prenom',$prenom);
                $sth->bindParam(':nom',$nom);
                        $sth->execute();
                        
                        //on renvoie l'utilisateur a une page voulue
                        header("location:formulaire.php");
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }