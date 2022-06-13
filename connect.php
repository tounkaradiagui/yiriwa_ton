<?php

  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $db = 'yiriwaton';

    $con=mysqli_connect($servername,$username,$password, $db);

    if(!$con)
            {
            die(mysqli_error($conn));
        }

?>