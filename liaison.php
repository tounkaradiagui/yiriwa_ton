<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'yiriwaton');

if(isset($_POST['envoyer']))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $telephone = $_POST['telephone'];
    $objet = $_POST['objet'];
    $message = $_POST['message'];

    $query = "INSERT INTO contact(`nom`,`prenom`,`telephone`, `objet`, `message`) VALUES ('$nom','$prenom','$telephone','$objet','$message')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Message envoyé"); </script>';
    }
    else
    {
        echo '<script> alert("Erreur, message non envoyé"); </script>';
    }
}

?>