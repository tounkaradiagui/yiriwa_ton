<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    
    {

   
        include 'connect.php'; 

        $username = $_POST['username'];
        $password = $_POST['password'];


        $sql="SELECT * FROM membres WHERE username='$username' AND password=$password";
        $result=mysqli_query($con, $sql);
        
        if($result){
            $num=mysqli_num_rows($result);
            if($num>0){
                echo "Login successful ";
                session_start();
                $_SESSION['username']=$username;
                header('location:admin.php');
            }
            else
            {
               echo "Invalid data";
           
            }
        }

    }

?>





<link rel="stylesheet" href="bootstrap/bootstrap.min.css">


<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        <h5>Renseignez les champs pour vous connecter</h5>
                    </div>
                    <div class="card-body">

                        <form action="login.php" method="POST">
                            
                            <div class="form-group mb-3">
                                <label for="">Adresse Email</label>
                                <input type="text" name="username" id="" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Mot de passe</label>
                                <input type="password" name="password" id="" class="form-control">
                            </div>
                           
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Connexion</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>