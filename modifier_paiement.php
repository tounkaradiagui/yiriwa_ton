<?php

        include "connect.php";

        if (isset($_POST['modifier']))
   
       

        $code_membre = $_POST['code_membre'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $telephone = $_POST['telephone'];
        $adresse = $_POST['adresse'];
        $mode_de_paiement = $_POST['mode_de_paiement'];
        $montant = $_POST['montant'];
       


        try {
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = "UPDATE historique SET nom='$nom', prenom='$prenom', telephone='$telephone', adresse='$adresse', mode_de_paiement='$mode_de_paiement', montant='$montant'  WHERE code_membre=$code_membre";
            $connection->exec($query);
            
            echo "Paiement enregistré";
          }
          
        catch (PDOException $e) {
            echo $query . "<br>" . $e->getMessage();
          }
          
          $connection = null;

?>