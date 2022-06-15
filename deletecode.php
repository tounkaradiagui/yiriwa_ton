<?php

        include "connect.php";

        if (isset($_POST['deletedata']))


        $id = $_POST['deleteid'];


        try {
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = "DELETE FROM membres WHERE code_mb='$id'";
            $connection->exec($query);
            
            echo "Le membre a été supprimé de la liste";
          }
          
        catch (PDOException $e) {
            echo $query . "<br>" . $e->getMessage();
          }
          
          $connection = null;

?>