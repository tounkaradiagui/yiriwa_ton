<?php
session_start();
    include "connect.php";
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, 'yiriwaton');


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $user = $_POST["username"];
        $password = $_POST["password"];
        $role = $_POST["role"];

        $sql ="SELECT login, password, role FROM membres WHERE login='".$user."' AND role = '".$role."' AND password = '".$password."' ";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_array($result);

        $_SESSION['login'] = $user;

        if($row["role"] == "user")
        {
           
            header("Location:usere.php");
        }

        elseif($row["role"] == "admin")
        {
           
            header("Location:admin.php");
        }

        else{
            

            $message = "login or password incorrect";

        }

    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    
        
    </head>
    <body style=" background-image: url('assets/images/apepf-1.jpg'); background-size: cover;">

        
        <nav class="navbar " style="background-color: #0E4C92;">
            <div class="container">
              <a class="navbar-brand" href="#">
                <img src="assets/images/logo.png" class="monlogo" alt="" width="80" height="70">
              </a>
            </div>
        </nav>

        <div class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card shadow">
                            <div class="card-header" style="background-color: #F79423;">
                                <h5>Renseignez les champs pour vous connecter</h5>
                                <h6>Bonjour</h6>
                            </div>
                            <div class="card-body">
        
                                <form action="" method="POST">
                                    
                                    <div class="form-group mb-3">
                                        <label for="">Adresse Email</label>
                                        
                                        <input type="text" name="username" id="username" class="form-control">
                                        
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Mot de passe</label>
                                        
                                        <input type="password" name="password" id="password" class="form-control">
                                       
                                    </div><br>
                                    <div class="form-group mb-3">
                                        <select name="role" id="role" class="form-select mb-3 box-input" aria-label="Default select example">
                                            <option selected value="user">user</option>
                                            <option value="admin">admin</option>
                                        </select>
                                    </div>
                                   
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" name="submit">Connexion</button>
                                    </div>
                                </form>
        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    <script src="assets/bootstrap/js/bootstrap.min.js" ></script>

    </body>
</html>


   