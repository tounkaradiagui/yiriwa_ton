<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>La table des membres</title>
        <link rel="stylesheet" href="assets/css/membres.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        

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
                            <label>Code membre<em>*</em></label>
                            <input type="text" name="code_mb" id="code_mb" class="form-control" placeholder="Attribuer un code" required>
                        </div><br>

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
                            <label >Rôle <em>*</em></label>
                            <select name="role" id="role">
                                <option value="choisir">Choisir</option>
                                <option value="admin"   >admin</option>
                                <option value="user"   >user</option>
                            </select> 
                        </div><br>

                        <div class="form-group">
                            <label >Login <em>*</em></label>
                            <input type="text" name="login" id="" class="form-control" placeholder="Saisir le login" required> 
                        </div><br>

                        <div class="form-group">
                            <label >Password <em>*</em></label>
                            <input type="password" name="password" id="" class="form-control" placeholder="Saisir le mot de passe" required> 
                        </div>
                    
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn" data-bs-dismiss="modal" style="background-color: #0E4C92; color: #fff;">Annuler</button>
                        <button type="submit" name="savedata" class="btn" style="background-color: #f79423; color: #fff;">Enregistrer</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- Findu modal d'ajout -->

    <!-- ################################################################################################################################################## -->




   <!--Début du modal de modification -->

    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header" style="background-color: #0E4C92;">
                <h4 class="modal-title" id="form" style="color: #fff;">Ajouter un membre</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <form action="mofifymb.php" method="POST">

                <div class="modal-body">

                <input type="" name="name" id="name">

                    <div class="form-group">
                        <label>Code membre<em>*</em></label>
                        <input type="hidden" name="name" id="name" class="form-control" placeholder="Attribuer un code" required>
                    </div><br>

                    <div class="form-group">
                        <label> Civilité<em>*</em> </label>
                            <select id="sexe" required name="sexe">
                                <option value="" >choisir</option>
                                <option value="Mr" >Mr</option>
                                <option value="Mme" >Mme</option>
                                <option value="Mlle" >Mlle</option>
                            </select>         
                    </div>

                    <div class="form-group">
                        <label>Nom<em>*</em></label>
                        <input type="text" name="nom" id="nom" class="form-control" placeholder="Saisir le nom" required>
                    </div><br>

                    <div class="form-group">
                        <label> Prénom<em>*</em> </label>
                        <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Saisir le prénom" required> 
                    </div><br>

                    <div class="form-group">
                        <label >Numéro <em>*</em></label>
                        <input type="text" name="numero" id="numero" class="form-control" placeholder="Saisir le numéro de téléphone" required> 
                    </div><br>

                    <div class="form-group">
                        <label >Adresse <em>*</em></label>
                        <input type="text" name="adresse" id="adresse" class="form-control" placeholder="Saisir l'adresse" required> 
                    </div><br>

                    <div class="form-group">
                        <label >Rôle <em>*</em></label>
                        <select name="role" id="role">
                            <option value="choisir">Choisir</option>
                            <option value="admin"  >admin</option>
                            <option value="user"  >user</option>
                        </select> 
                    </div><br>

                    <div class="form-group">
                        <label >Login <em>*</em></label>
                        <input type="text" name="login" id="login" class="form-control" placeholder="Saisir le login" required> 
                    </div><br>

                    <div class="form-group">
                        <label >Password <em>*</em></label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Saisir le mot de passe" required> 
                    </div>
                
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal" style="background-color: #0E4C92; color: #fff;">Annuler</button>
                    <button type="submit" name="majdata" class="btn" style="background-color: #f79423; color: #fff;">Enregistrer</button>
                </div>

            </form>
        </div>
    </div>
    </div>

    <!-- Fin du modal de modification -->


    <!-- ################################################################################################################################################## -->



<!--Debut du Modal de suppression -->


<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Suppression</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" >&times;</span>
                    </button>
                </div>

                <form action="deletecode.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h6>Voulez-vous vraiment supprimer cette ligne?</h6>
                    </div>

                    <div class="modal-footer">
                        <button type="button" style="margin-right: 110px;" class="btn btn-danger" data-dismiss="modal">Non</button>
                        <button type="submit" style="margin-right: 80px;" name="deletedata" class="btn btn-primary" >Oui</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!--Fin du Modal de suppression -->
    


        <div class="container-fluid interface" style="background-color: #0E4C92;">

            <nav class="navbar" >

<<<<<<< HEAD
                <img src="assets/images/logo.png" width="100" height="90" alt="">
=======
                <img src="assets/images/Logo.png" width="100" height="90" alt="">
>>>>>>> 83dc7adc94ef24d1e05035d0f605873b268bd085
                <h1 style="color: #fff;">Yiriwa Ton</h1>
                <button class="btn boutonsdpl" data-bs-toggle="modal" data-bs-target="#ajouter" style="background-color: #f79423; color: #fff;">Ajouter</button>
    
            </nav>

        </div>

        <div class="side" style="background-color: #f79423; width: 100px; height: 683px;">

           

        </div>

        

        <div class="container i-name" style=" width: 85%;">

            <div class="row text-center mt-5">
                <h2>La table des membres Yiriwa Ton</h2>
            </div>
            <div class="row">
                <div class="col" >

                <?php

                    $connection = mysqli_connect("localhost", "root", "root");
                    $db = mysqli_select_db($connection, 'yiriwaton');

                    $query = "SELECT * FROM membres";
                    $query_run = mysqli_query($connection, $query);
                ?>


                    <table class="table table-bordered mt-5">

                        <thead  class="text-center">
                            <tr>
                                <th scope="col">Code membre</th>
                                <th scope="col">Civilité</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Prénom</th>
                                <th scope="col">Numéro</th>
                                <th scope="col">Adresse</th>
                                <th scope="col">Role</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>

                    <?php
                
                        if($query_run)

                        {
                            foreach($query_run as $row)

                        {
                    ?>
                          <tbody>
                            <tr>
                                <td><?php echo $row ['code_mb'];?></th>
                                <td><?php echo $row ['civilite'];?></th>
                                <td><?php echo $row ['nom'];?></th>
                                <td><?php echo $row ['prenom'];?></th>
                                <td><?php echo $row ['numero'];?></th>
                                <td><?php echo $row ['adresse'];?></th>
                                <td><?php echo $row ['role'];?></th>
                                <td> <button type="button" class="btn editbtn"  style=" background-color:#0E4C92; color:#fff" >Modifier</button> </td>
                                <td><button type="button"  class="btn  deletebtn" style=" background-color:#f79423; color:#fff ">Suprimer</button></td>
                            </tr>
                            
                        </tbody>

                    <?php
                        
                        }
                            }

                            else
                            {
                                echo "aucun enregistrement trouvé";
                            }
                
                    ?>

                    </table>


                </div>
            </div>
        </div>

        <script src="assets/bootstrap/js/bootstrap.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


        <script>

        $(document).ready(function() {
            $('.deletebtn').on('click', function(){

                $('#deletemodal').modal('show');


            $tr = $(this).closest('tr');

            var data = $tr.children('td').map(function(){
                return $(this).text();

            }).get();


            console.log(data);

            $('#delete_id').val(data[0]);

                 });
                

            });


    </script>


    <script>

    $(document).ready(function() {
        $('.editbtn').on('click', function(){

            $('#editmodal').modal('show');
        

    $tr = $(this).closest('tr');

    var data = $tr.children('td').map(function(){
        return $(this).text();

    }).get();

    console.log(data);

    $('#code_mb').val(data[0]);
    $('#civilite').val(data[1]);
    $('#nom').val(data[2]);
    $('#prenom').val(data[3]);
    $('#numero').val(data[4]);
    $('#adresse').val(data[5]);
    $('#roles').val(data[6]);

    });
    });


    </script>

        
    </body>
</html>