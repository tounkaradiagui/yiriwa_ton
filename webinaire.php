<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/webinaire.css">
        <link rel="stylesheet" href="assets/bootstrap-icons/bootstrap-icons.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

        

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>La table webinaire</title>

    </head>

    <body>

        <!-- ################################################################################################################################################## -->

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

        <!-- ################################################################################################################################################## -->

        <!--Début du modal de planification -->

        <div class="modal fade" id="planifier" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

            <div class="modal-dialog" role="document">

                <div class="modal-content">

                    <div class="modal-header" style="background-color: #0E4C92;">
                        <h4 class="modal-title" id="form" style="color: #fff;">Planifier une réunion</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                    <form action="" method="">

                        <div class="modal-body">

                            

                            <div class="form-group">

                                <label>Sujet de la réunion<em>*</em></label><br>

                                <textarea name="" id="" cols="45" rows="1" required></textarea>

                            </div><br>

                            <div class="form-group">

                                <div class="row">
                                    <div class="col-6">
                                        <label> Date<em>*</em> </label>
                                        
                                    </div>
                                    <div class="col">
                                        <input type="date" name="" id="" required>
                                    </div>
                                </div>

                            </div><br>

                            <div class="form-group">

                                <div class="row">
                                    <div class="col-md-4">
                                        <label >Heure <em>*</em></label>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="time" name="" id="" class="form-control" placeholder="Saisir le numéro de téléphone" required> 
                                    </div>
                                </div>

                            </div><br>

                            <div class="form-group">

                                <div class="row">
                                    <div class="col-md-4">
                                        <label >Identifiant <em>*</em></label>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text" name="" id="" class="form-control" placeholder="Saisir l'identifiant" required> 
                                    </div>
                                </div>

                            </div><br>

                            <div class="form-group">

                                <div class="row">
                                    <div class="col-md-4">
                                        <label >Code de sécurité <em>*</em></label>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text" name="" id="" class="form-control" placeholder="Saisir le code de sécurité" required> 
                                    </div>
                                </div>

                            </div><br>
                        
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn gauche" data-bs-dismiss="modal" style="background-color: #0E4C92; color: #fff;">Annuler</button>
                            <button type="submit" name="" class="btn" style="background-color: #f79423; color: #fff;">Enregistrer</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <!-- Fin du modal de planification -->

        <!-- ################################################################################################################################################## -->


        <section class="interface" style="background-color: #0E4C92;">

            <nav class="navbar" >

                <img src="asset/images/logo.png" width="100" height="80" alt="">
    
            </nav>
            
        </section>

        

        <div class="side" style="background-color: #f79423; width: 100px; height: 690px;">

           

        </div>


        <section class="i-name" style="display: flex;">

            <button type="submit" class="btn btn-warning"> <i class="bi bi-camera-reels-fill"></i> Nouvelle réunion</button>

            <button type="submit" class="btn btn-warning boutons" data-bs-toggle="modal" data-bs-target="#rejoindre"> <i class="bi bi-link-45deg"></i> Rejoindre</button>
          
        </section>

        <section class="i-name" style="display: flex;">

            <button type="submit" class="btn btn-warning"  style="width: 200px;" data-bs-toggle="modal" data-bs-target="#planifier">  <i class="bi bi-calendar-date-fill"></i> Planifier </button>
  
        </section>

        <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    </body>
</html>