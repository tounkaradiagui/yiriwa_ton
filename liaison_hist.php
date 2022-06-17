<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'yiriwaton');

if(isset($_POST['envoyer']))
{
  $code_membre=$_POST["code_membre"];
  $nom=$_POST["nom"];
  $prenom=$_POST["prenom"];
  $telephone=$_POST["telephone"];
  $adresse=$_POST["adresse"];
  $mode_de_paiement=$_POST["mode_de_paiement"];
  $montant=$_POST["montant"];

    $query = "INSERT INTO historique (code_membre, nom, prenom, telephone, adresse, mode_de_paiement, montant) VALUES ('$code_membre', '$nom', '$prenom', '$telephone', '$adresse', '$mode_de_paiement', '$montant')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Paiement ajouté"); </script>';
    }
    else
    {
        echo '<script> alert("Erreur, paiement non ajouté"); </script>';
    }
}

?>