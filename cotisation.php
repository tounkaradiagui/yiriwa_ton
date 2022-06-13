

<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    
    {

   
        include 'connect.php'; 

        $mode = $_POST['mode'];
        $numero = $_POST['numero'];
        $montant = $_POST['montant'];

        $query = "INSERT INTO cotisation (Mode_de_paiement, Numéro, Montant) VALUES ('$mode', '$numero', '$montant')";
        $result=mysqli_query($con, $query);
        
        
        if($result)
            
        {
            echo "Paiement effectué";
        }
        else
        {
            die(mysqli_error($conn));
        }

//         $sql="SELECT * FROM registration WHERE username='$username'";
//         $result=mysqli_query($con, $sql);
        
//         if($result){
//             $num=mysqli_num_rows($result);
//             if($num>0){
//                 echo "User already exist";

//                 // $user=1;
//             }
//             else
//             {
//                 $sql="INSERT INTO cotisation (username, password) VALUES ('$username', '$password')";

//                 $result=mysqli_query($con, $sql);

//                 if($result)
            
//             {
//                 echo "signup  successfully";
//                 // $user=1;

//                 header('location:cotisation.php');
//             }
//             else
//             {
//                 die(mysqli_error($con));
//             }
//             }
//         }
    }

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/cotisation.css">
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">

        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
        
        


        <link rel="stylesheet" href="style.css">

        <title>La table de cotisation</title>
    </head>

    <body>

            <!--Début du modal d'ajout -->

    <div class="modal fade" id="cotiser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header" style="background-color: #0E4C92;">
                    <h4 class="modal-title" id="form" style="color: #fff;">Je paie ma cotisation</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <form action="cotisation.php" method="POST">

                    <div class="modal-body">

                        <div class="form-group">
                            <label >Mode de paiement <em>*</em></label>
                            <select  id="" required name="mode">
                                <option value="Orange Money" >Orange Money</option>
                                <option value="Moov"  >Moov</option>
                                <option value="Wave"  >Wave</option>
                                <option value="Sama Money" >Sama Money</option>
                            </select> 
                             
                        </div><br>

                        <div class="form-group">
                            <label >Numéro <em>*</em></label>
                            <input type="text" name="numero" id="" class="form-control" placeholder="Saisir le numéro de téléphone" required> 
                        </div><br>

                        <div class="form-group">
                            <label >Montant <em>*</em></label>
                            <input type="text" name="montant" id="" class="form-control" placeholder="Saisir le montant" required> 
                        </div><br>

                    
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn" data-bs-dismiss="modal" style="background-color: #0E4C92; color: #fff;">Annuler</button>
                        <button type="submit" name="valider" class="btn" style="background-color: #f79423; color: #fff;">Enregistrer</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- Findu modal d'ajout -->

        <section class="interface" style="background-color: #0E4C92;">

            <nav class="navbar" >

                <img src="images/Logo.png" width="100" height="90" alt="">
                <h1 style="color: #fff;">Yiriwa Ton</h1>
                <button type="submit" class="btn droite" data-bs-toggle="modal" data-bs-target="#cotiser"  style="background-color: #f79423; color: #fff;">Cotiser</button>

            </nav>
            
        </section>

        

        <div class="side" style="background-color: #f79423; width: 100px; height: 600px;">

        </div>


        <div class="container i-name" style=" width: 65%;">

            <div class="row text-center mt-5">
                <h2>Mes cotisations</h2>
            </div>
            <div class="row">
                <div class="col" >


                    <table id="datatableid"  class="table table-bordered mt-5">

                        <thead>
                            <tr>
                              <th style="width:1%" >Numéro</th>
                              <th class="col-md-3" >Montant</th>
                              <th class="col-md-4" >Date de paiement</th>
                              <th class="col-md-3">Moyen de paiement</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td>0329</td>
                              <td>105000</td>
                              <td>01/01/2022</td>
                              <td>Orange Money</td>
                            </tr>
                            <tr>
                                <td>0329</th>
                                <td>105000</td>
                                <td>01/01/2022</td>
                                <td>Orange Money</td>
                            </tr>
                            <tr>
                                <td>0329</th>
                                <td>105000</td>
                                <td>01/01/2022</td>
                                <td>Orange Money</td>
                            </tr>
                        </tbody>
                    </table>

               
                </div>

                <div class="col-md-4">
                    <section id="warrri">
                        <img src="images/wari.jpg" alt="" srcset="" width="400px" height="400px">
                    </section>
                </div>
                
                    
               

            </div>
            
            <div class="row last">
                <div class="col">
                    <section style="display: flex;">
                        <img src="images/OrangeMoney.jpg" alt="" srcset="" width="200px" height="90px">
                        <img src="images/movv.png" alt="" srcset="" width="200px" height="100px">
                        <img src="images/wave.png" alt="" srcset="" width="200px" height="90px">
                        <img src="images/sama.jpg" alt="" srcset="" width="200px" height="90px">
                    </section>
                </div>
            </div>
        </div>

        <script src="bootstrap/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.dataTables.min.js"></script>

                
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

        
    </body>
</html>