<?php
    include "connect.php";
    if(isset($_POST['savedata']))
    
        $code_mb = $_POST['code_mb'];
        $sexe = $_POST['sexe'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $numero = $_POST['numero'];
        $adresse = $_POST['adresse'];
        $role = $_POST['role'];
        $login = $_POST['login'];
        $password = $_POST['password'];


        try {
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = "INSERT INTO membres (code_mb,civilite,nom,prenom,numero,adresse,role,login,password) 
            VALUES ('$code_mb','$sexe', '$nom', '$prenom',  '$numero', '$adresse', '$role', '$login', '$password')";
            $connection->exec($query);
            
            echo "Votre enregistrement a été pris en compte";
          }
          
        catch (PDOException $e) {
            echo $query . "<br>" . $e->getMessage();
          }
          
          $connection = null;
       
?>