<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/ton/animate.css/animate.min.css" rel="stylesheet">
    <title>Fetch</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">

            <div class="row">
                <div class="col-md-6">
                    <h2>PHP - CRUD : Afficher les données en PHP  </h2>
                </div>
                <div class="col-md-6">
                    <a href="liaison.php" class="btn btn-success" style="margin-left: 80%;"></a>    
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
            </div>

            <?php
                $connection = mysqli_connect("localhost","root","root");
                $db = mysqli_select_db($connection, 'yiriwa_ton');

                $query = "SELECT * FROM notification";
                $query_run = mysqli_query($connection, $query);
            ?>

            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered" style="background-color: white;">
                        <thead class="table-dark">
                            <tr>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Telephone</th>
                                <th>objet</th>
                                <th>Message</th>
                                <th>Repondre</th>
                                <th>Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                                        
                        <?php
                        if($query_run)
                        {
                            while($row = mysqli_fetch_array($query_run))
                            {
                                ?>
                                    <tr>
                                        <th> <?php echo $row['nom']; ?> </th>
                                        <th> <?php echo $row['prenom']; ?> </th>
                                        <th> <?php echo $row['telephone']; ?> </th>
                                        <th> <?php echo $row['objet']; ?> </th>
                                        <th> <?php echo $row['message']; ?> </th>
                                        <th> 
                                            <form action="updatedata.php" method="post">
                                                <input type="hidden" name="nom" value="<?php echo $row['nom'] ?>">
                                                <input type="submit" name="repondre" class="btn btn-success" value="REPONDRE">
                                            </form>
                                        </th>
                                        <th> 
                                            <form action="delete.php" method="post">
                                                <input type="hidden" name="nom" value="<?php echo $row['nom'] ?>">
                                                <input type="submit" name="supprimer" class="btn btn-danger" value="SUPPRIMER"> 
                                            </form>
                                        </th>
                                    </tr>
                                <?php
                                }
                            }
                            else
                            {
                                ?>
                                    <tr>    
                                        <th colspan="6">Aucun enregistrement trouvé</th>
                                    </th>
                                <?php
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
