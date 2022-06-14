<?php

        include "connect.php";

        if (isset($_POST['majdata']))
   
        $code_mb = $_POST['code_mb'];

        $code_mb = $_POST['code_mb'];
        $sexe = $_POST['sexe'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $numero = $_POST['numero'];
        $adresse = $_POST['adresse'];
        $role = $_POST['role'];
       


        try {
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = "UPDATE membres SET civilite='$sexe', nom='$nom', prenom='$prenom', 
            numero='$numero', adresse='$adresse', role='$role'  WHERE code_mb=$code_mb";
            $connection->exec($query);
            
            echo "Votre enregistrement a été pris en compte";
          }
          
        catch (PDOException $e) {
            echo $query . "<br>" . $e->getMessage();
          }
          
          $connection = null;

?>