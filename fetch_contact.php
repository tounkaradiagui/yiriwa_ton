<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/animate.css/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <title>Fetch contact</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">

            <div class="row">
                <div class="col-md-6">
                    <h2>Contact User</h2>
                </div>
                <div class="col-md-6">
                     
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
            </div>

            <?php
                $connection = mysqli_connect("localhost","root","root");
                $db = mysqli_select_db($connection, 'yiriwaton');

                $query = "SELECT * FROM contact";
                $query_run = mysqli_query($connection, $query);
            ?>

            <div class="row">
                <div class="col-md-12">
                <table class="table table-bordered mt-5">

                    <thead  class="text-center">
                            <tr>
                                <th scope="col">Nom</th>
                                <th scope="col">Prénom</th>
                                <th scope="col">Téléphone</th>
                                <th scope="col">Objet</th>
                                <th scope="col">Message</th>
                                <th colspan="2">Action</th>
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
                                        <th> <button type="button" class="btn answbtn"  style=" background-color:#0E4C92; color:#fff" >Repondre</button> </td>
                                        <th><button type="button"  class="btn  deletebtn" style=" background-color:#f79423; color:#fff ">Suprimer</button></td>
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
