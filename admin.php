<?php
session_start();
include "connect.php";



?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="assets/css/usere.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>
            
        </title>

    </head>

    <body>

                

        
        <section class="interface" style="background-color: #0E4C92;">

            <nav class="navbar" >

                <img src="assets/images/logo.png" width="100" height="90" alt="">
    
            </nav>
            
        </section>

        

        <div class="side" style="background-color: #D9D9D9; width: 200px; height: 690px;">

        

            <img src="assets/images/profile-user.png" alt="" width="80px" height="80px" class="profil">
            <h6>Madalo DIALL</h6>
            <!-- <h6>En ligne</h6> -->

             <div class="para">

                    <h5 >  <i class="bi bi-house-door-fill " ></i>   Accueil </h5><br>
                    <h5 >  <i class="bi bi-bell-fill "></i>   Notifications </h5><br>
                    <h5 >  <i class="bi bi-gear-fill "></i>  Paramètre </h5>
                    
                </div>
                <!-- <a class="nav-link" href="logout.php">Log out</a> -->
            <a type="submit" class="btn btn-primary pied" href="logout.php" >Déconnexion</a>

            
                

        </div>

        

        <section class="i-name" style="display: flex;">

            <button type="submit" class="btn btnn" onclick="location.href='membres.php'" style="color: #fff;"> <i class="fa-solid fa-users"></i> Membres</button>

            <button type="submit" class="btn btnn ehhh" onclick="location.href='cotisation.php'" style="color: #fff;"> <i class="fa-solid fa-hand-holding-dollar"></i> Cotisation</button>
          
        </section>

        <section class="i-name" style="display: flex;">

            <button type="submit" class="btn btnn" onclick="location.href='Webinaire.php'" style="color: #fff;" > <i class="fa-solid fa-video"></i> Webinaire</button>

            <button type="submit" class="btn ehhh btnn" onclick="location.href='#'" style="color: #fff;">    <i class="bi bi-info-circle-fill"></i> Actualités</button>
          
        </section>

        

        <section class="i-name" style="display: flex;">

            <button type="submit" class="btn  btnn" onclick="location.href='#'" style="color: #fff;">       <i class="fa-solid fa-pen-to-square"></i> Publication</i></button>

<<<<<<< HEAD
            <button type="submit" class="btn btn-warning ehhh" onclick="location.href='hist.php'"> <i class="fa-solid fa-list"></i> Historique</i></button>
=======
<<<<<<< HEAD
            <button type="submit" class="btn btn-warning ehhh" onclick="location.href='hist.php'"> <i class="fa-solid fa-list"></i> Historique</i></button>
=======
            <button type="submit" class="btn  ehhh btnn" onclick="location.href='#'" style="color: #fff;"> <i class="fa-solid fa-list"></i> Historique</i></button>
>>>>>>> 83dc7adc94ef24d1e05035d0f605873b268bd085
>>>>>>> 4927c5d255cb0965a22230d2c0311a814295f1be
          
        </section>



        <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
