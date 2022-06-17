<?php

if (empty($_POST['firstname'])  || empty($_POST['lastname']) || empty($_POST['email'])) {
    echo 'Saisissez tous les champs svp!';
}else{
    if (strlen(trim($_POST['firstname'])) < 3) {
        echo "Saisissez minimum trois lettres svp!";
    }
    else{
        echo 'Saisissez tous les champs svp!';
        $nom = $_POST['firstname'];
        $prenom = $_POST['lastname'];
        $email = $_POST['email'];

        require_once 'connexion.php';


        $requete = "INSERT INTO client (nom, prenom, email) VALUES('$nom', '$prenom', '$email')";
        // echo $requete;
        $execute = $obj_pdo->query($requete);

        header('location:element.php');
    
    }
    
}









?>