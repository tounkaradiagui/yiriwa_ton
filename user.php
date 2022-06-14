<?php 
session_start();
include "connect.php";

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/user.css">

    <title>User</title>
  </head>
  <body>
    <nav class="navbar" style="background-color: #0E4C92">
        <img src="assets/images/logo.png" alt="" width="100px"; height="80px">
    </nav>

    
    <div class="side" style="background-color: #d9d9d9; width: 200px; height: 690px">
        <div class="profil">
            <h5>
                <a href="#"><i class="fa-solid fa-user"></i><br></a>
                <a class="" href="">En ligne</a><span>.</span><br>
            </h5>
        </div>
        <div class="para">
            <h5>
                <a href="#"><i class="fa-solid bar fa-house-chimney"></i></a>
                <a href="#">Accueil</a><br><br><br>
                <a href="#"><i class="fa-solid bar fa-bell"></i></a>
                <a href="#">Notifications</a><br><br><br>
                <a href="#"><i class="fa-solid bar fa-wrench"></i></a>
                <a href="#">Paramèttres</a>
            </h5>
        </div>
        <button class="btn fin btn-light" type="button"><a href="logout.php"></a>Déconnexion</button>
    </div>

   
   
    <h2>Bonjour User, Bienvenue sur Yiriwa-Ton</h2>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <button type="button" class="btn user btn-lg"><i class="fa-solid fa-hand-holding-dollar"></i>Cotisation</button>
            </div>
            <div class="col-md-4">
                <a href="home.html"><button type="button" class="btn user btn-lg"><i class="fa-solid fa-circle-info"></i>Actualités</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <button type="button" class="btn user btn-lg"><i class="fa-solid fa-users-between-lines"></i>Webinaire</button>
            </div>
            <div class="col-md-4">
                <button type="button" class="btn hist btn-lg"><i class="fa fa-clock-rotate-left"><br></i><i class="fa-solid fa-list"></i>Historique</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>












