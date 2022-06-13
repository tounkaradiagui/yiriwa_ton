




<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="css/comptable.css">

        <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>La tabe admin</title>

    </head>

    <body>

        <!-- Debut du modal de rejoindre -->

        <div class="modal fade" id="rejoindre" tabindex="-1" role="dialog" aria-labelledby="form" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header" style="background-color: #0E4C92;">
                  <h4 class="modal-title" id="form" style="color: #fff;">Rejoindre la réunion</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
        
                  <form action="" method="">
        
                    <div class="modal-body">


                        <div class="form-group">
                            <label>ID ou lien<em>*</em></label>
                            <input type="text" name="" id="" class="form-control" placeholder="Saisir id de la réunion" required>
                        </div><br>

                        <div class="form-group">
                            <label>Nom complet<em>*</em> </label>
                            <input type="text" name="" id="" class="form-control" placeholder="Entrer votre nom complet" required> 
                        </div>
                        
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn" data-bs-dismiss="modal" style="background-color: #0E4C92; color: #fff;">Annuler</button>
                        <button type="submit" name="" class="btn" style="background-color: #f79423; color: #fff;">Enregistrer</button>
                    </div>
                  </form>
        
                </div>
                
              </div>
            </div>
        </div>

        <!-- Fin du modal de rejoindre -->

        <section class="interface" style="background-color: #0E4C92;">

            <nav class="navbar" >

                <img src="images/Logo.png" width="100" height="90" alt="">
    
            </nav>
            
        </section>

        

        <div class="side" style="background-color: #D9D9D9; width: 200px; height: 600px;">

            <img src="images/profile-user.png" alt="" width="80px" height="80px" class="profil">
            <h6>Madalo DIALL</h1>
            <h6>En ligne</h6>
                <div class="para">

                    <h5 >  <i class="bi bi-house-door-fill " ></i>   Accueil </h5><br>
                    <h5 >  <i class="bi bi-bell-fill "></i>   Notifications </h5><br>
                    <h5 >    <i class="bi bi-gear-fill "></i>  Paramètre </h5>
                </div>
            

            <a type="submit" class="btn btn-primary pied" href="logout.php" >Déconnexion</a>

        </div>


        <section class="i-name" style="display: flex;">

            <button type="submit" class="btn btn-warning"> <i class="bi bi-currency-dollar"></i> Liste de paiement</button>

            <button type="submit" class="btn btn-warning boutons" onclick="location.href='cotisation.html'"> <i class="fa-solid fa-hand-holding-dollar"></i>  Cotisation</button>
          
        </section>

        <section class="i-name" style="display: flex;">

            <button type="submit" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#rejoindre"> <i class="fa-solid fa-video"></i> Webinaire</button>

            <button type="submit" class="btn btn-warning boutons"> <i class="bi bi-info-circle-fill"></i> Actualités</button>
          
        </section>

        <section class="i-name" style="display: flex;">

            <button type="submit" class="btn btn-warning " style="width: 210px;" > <i class="bi bi-list-check"></i> Historique</button>
          
        </section>
        <script src="bootstrap/bootstrap.min.js"></script>

    </body>
</html>