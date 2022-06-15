<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "yiriwaton";

    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $telephone=$_POST["telephone"];
    
    try {


    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO historique (nom, prenom, telephone)
    VALUES ('$nom', '$prenom', '$telephone')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Message envoyé";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  

?>