<?php

$connection  =  mysqli_connect ( "localhost" , "root" , "root" );
$db  =  mysqli_select_db ( $connection ,  'yiriwa_ton' );

if ( isset ( $_POST [ 'envoyer' ]))
{
    $nom  =  $_POST [ 'nom' ];
    $prenom  =  $_POST [ 'prenom' ];
    $telephone  =  $_POST [ 'telephone' ];
    $objet  =  $_POST [ 'objet' ];
    $message  =  $_POST [ 'message' ];

    $query  =  " INSERT INTO  notification (nom, prenom, telephone, objet, message)  VALUES  (' $nom ',' $prenom ',' $telephone ',' $objet ', ' message ') " ; 
    $query_run  =  mysqli_query ( $connection ,  $query );

    if ( $query_run )
    {
        echo '<script> alert("Données enregistrées"); </script>';
        header ( 'Location : home.php' );
    }
    else
    {
        echo  '<script> alert("Données non enregistrées"); </script>' ;
    }
}

?>