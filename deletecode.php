<?php

        include "connect.php";

        if (isset($_POST['deletedata']))


        $id = $_POST['code_mb'];


        try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = "DELETE FROM membres WHERE code_mb='$id'";
            $conn->exec($query);
            
            echo "Le membre a été supprimé de la liste";
          }
          
        catch (PDOException $e) {
            echo $query . "<br>" . $e->getMessage();
          }
          
          $conn = null;

?>