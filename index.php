 <!DOCTYPE html>
 <html lang="en">

 <head>
    <meta charset="UTF-8">
    <title>Banque payment</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
 </head>

 <body class="">
    <div class="container">
       <div class=" bg-light row d-flex justify-content-center align-items-center" style="height: 100vh;">
          

          <div class="col-md-4 col-sm-6 mx-auto ">
          <h4 class="text-center">Banque Payment</h4>
             <form class="card p-4 shadow-sm" method="POST">
                <div class="text-center text-muted">
                   <h5>Login</h5>
                </div>

                  <div class="form-group mb-1">
                     <label for="">Nom d'utilisateur</label>
                     <input type="text" name="username" class="form-control">
                  </div>
                  <div class="form-group mb-3">
                     <label for="">Mot de passe</label>
                     <input type="password" name="password" class="form-control">
                  </div>
                <!-- <div class="group-form form-check">
                   <input type="checkbox" class="form-check-input" id="exampleCheck1">
                   <label class="form-check-label" for="exampleCheck1">Afficher le mot de passe</label>
                </div> -->
                <!-- <a href="views/custommer/index.php" class="btn btn-primary">Connexion</a> -->
                <button type="submit" name="login" class="btn btn-primary">Connexion</button>

                <?php require_once '../back-end/controller/login.php' ?>
             </form>
          </div>
       </div>

    </div>
 </body>

 </html>