<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "yiriwaton";

    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $telephone=$_POST["telephone"];
    $objet=$_POST["objet"];
    $message=$_POST["message"];

    try {


    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO notification (nom, prenom, telephone, objet, message)
    VALUES ('$nom', '$prenom', '$telephone', '$objet', '$message')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Message envoyé";
    header('Location: home.php');
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  

?>