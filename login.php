<?php

session_start();

if(!isset($_SESSION['username']) && !isset($_SESSION['id']))

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
                            </div><br>
                            <div class="form-group mb-3">
                                <select name="role" id="" class="form-select mb-3 box-input" aria-label="Default select example">
                                    <option selected value="user">User</option>
                                    <option value="admin">Admin</option>
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