<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>La table des membres</title>
        <link rel="stylesheet" href="css/membres.css">
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
        

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body>

    <!-- ################################################################################################################################################## -->
    <!--Début du modal d'ajout -->

    <div class="modal fade" id="ajouter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header" style="background-color: #0E4C92;">
                    <h4 class="modal-title" id="form" style="color: #fff;">Ajouter un membre</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <form action="addmembre.php" method="POST">

                    <div class="modal-body">

                        <div class="form-group">
                            <label> Civilité<em>*</em> </label>
                                <select id="" required name="sexe">
                                    <option value="" >choisir</option>
                                    <option value="Mr" >Mr</option>
                                    <option value="Mme" >Mme</option>
                                    <option value="Mlle" >Mlle</option>
                                </select>         
                        </div>

                        <div class="form-group">
                            <label>Nom<em>*</em></label>
                            <input type="text" name="nom" id="" class="form-control" placeholder="Saisir le nom" required>
                        </div><br>

                        <div class="form-group">
                            <label> Prénom<em>*</em> </label>
                            <input type="text" name="prenom" id="" class="form-control" placeholder="Saisir le prénom" required> 
                        </div><br>

                        <div class="form-group">
                            <label >Numéro <em>*</em></label>
                            <input type="text" name="numero" id="" class="form-control" placeholder="Saisir le numéro de téléphone" required> 
                        </div><br>

                        <div class="form-group">
                            <label >Adresse <em>*</em></label>
                            <input type="text" name="adresse" id="" class="form-control" placeholder="Saisir l'adresse" required> 
                        </div><br>

                        <div class="form-group">
                            <label >Login <em>*</em></label>
                            <input type="text" name="username" id="" class="form-control" placeholder="Saisir le login" required> 
                        </div><br>

                        <div class="form-group">
                            <label >Password <em>*</em></label>
                            <input type="password" name="password" id="" class="form-control" placeholder="Saisir le mot de passe" required> 
                        </div>
                    
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn" data-bs-dismiss="modal" style="background-color: #0E4C92; color: #fff;">Annuler</button>
                        <button type="submit" name="insertdata" class="btn" style="background-color: #f79423; color: #fff;">Enregistrer</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- Findu modal d'ajout -->

<!-- ################################################################################################################################################## -->

        <div class="container-fluid interface" style="background-color: #0E4C92;">

            <nav class="navbar" >

                <img src="images/Logo.png" width="100" height="90" alt="">
                <h1 style="color: #fff;">Yiriwa Ton</h1>
                <button class="btn boutonsdpl" data-bs-toggle="modal" data-bs-target="#ajouter" style="background-color: #f79423; color: #fff;">Ajouter</button>
    
            </nav>

        </div>

        <div class="side" style="background-color: #f79423; width: 100px; height: 600px;">

           

        </div>

        

        <div class="container i-name" style=" width: 85%;">

            <div class="row text-center mt-5">
                <h2>La table des membres Yiriwa Ton</h2>
            </div>
            <div class="row">
                <div class="col" >


                    <table id="datatable_id"  class="table table-bordered mt-5">

                        <thead  class="text-center">
                            <tr>
                              
                              <th scope="col">Civilité</th>
                              <th scope="col">Nom</th>
                              <th scope="col">Prénom</th>
                              <th scope="col">Numéro</th>
                              <th scope="col">Adresse</th>
                              <th scope="col">Login</th>
                              <th scope="col">Password</th>
                              <th colspan="2">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td></th>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td> <button type="button" class="btn btn-success">Modifier</button> </td>
                              <td><button type="button" class="btn btn-danger">Suprimer</button></td>
                            </tr>
                            <tr>
                                <td></th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> <button type="button" class="btn btn-success">Modifier</button> </td>
                                <td><button type="button" class="btn btn-danger">Suprimer</button></td>
                            </tr>
                            <tr>
                                <td></th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> <button type="button" class="btn btn-success">Modifier</button> </td>
                                <td><button type="button" class="btn btn-danger">Suprimer</button></td>
                            </tr>
                            <tr>
                                <td></th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> <button type="button" class="btn btn-success">Modifier</button> </td>
                                <td><button type="button" class="btn btn-danger">Suprimer</button></td>
                            </tr>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>

        <script src="bootstrap/bootstrap.min.js"></script>
        
    </body>
</html>