
     <!DOCTYPE html>
     <html lang="en">

     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Banque payment</title>
         <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
         <link rel="stylesheet" href="../../assets/bootstrap/css/dashboard.css">

         <meta name="theme-color" content="#7952b3">


         <style>
             .bd-placeholder-img {
                 font-size: 1.125rem;
                 text-anchor: middle;
                 -webkit-user-select: none;
                 -moz-user-select: none;
                 user-select: none;
             }

             @media (min-width: 768px) {
                 .bd-placeholder-img-lg {
                     font-size: 3.5rem;
                 }
             }
         </style>


     </head>

     <body>

         <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
             <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Banque Payement system</a>
             <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             
             <div class="navbar-nav d-none  d-md-inline-block">
                 <div class="nav-item text-nowrap">
                     <span class="text-white">Utilisateur : <?=$_SESSION['username'];?></span>
                     <a class="nav-link px-3 bg-danger" href="../../signout.php">Se deconnecter</a>
                 </div>
             </div>
         </header>

         <div class="container-fluid">
             <div class="row">
                 <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                     <div class="position-sticky pt-3">
                         <ul class="nav flex-column">
                             <!-- <li class="nav-item">
                             <a class="nav-link active" aria-current="page" href="home.php">
                                 <span data-feather=""></span>
                                 Tableau de bord
                             </a>
                         </li> -->
                             <li class="nav-item">
                                 <a class="nav-link" href="../custommer/index.php">
                                     <span data-feather="file"></span>
                                     Clients
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="../account/index.php">
                                     <span data-feather="shopping-cart"></span>
                                     Comptes
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="../costs/index.php">
                                     <span data-feather="users"></span>
                                     Frais
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="../transaction/index.php">
                                     <span data-feather="bar-chart-2"></span>
                                     Transaction
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="../user/index.php">
                                     <span data-feather="layers"></span>
                                     Utilisateurs
                                 </a>
                             </li>
                         </ul>


                     </div>
                 </nav>
             