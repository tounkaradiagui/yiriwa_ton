

<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    
    {

   
      include "connect.php";
   
        $sexe = $_POST['sexe'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $numero = $_POST['numero'];
        $adresse = $_POST['adresse'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "INSERT INTO cotisation (Mode_de_paiement, Numéro, Montant) VALUES ('$mode', '$numero', '$montant')";
        $result=mysqli_query($con, $query);
        
        if($result)
            
        {
            echo "membre ajouté";
        }
        else
        {
            die(mysqli_error($conn));
        }

    }

?>