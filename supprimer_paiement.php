<?php

        include "connect.php";

        if (isset($_POST['supprimer']))


        $id = $_POST['code_membre'];


        try {
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = "DELETE FROM historique WHERE code_membre='$id'";
            $connection->exec($query);
            
            echo "Paiement supprimé de la liste";
          }
          
        catch (PDOException $e) {
            echo $query . "<br>" . $e->getMessage();
          }
          
          $conn = null;

?>