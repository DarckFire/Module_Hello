<html lang="fr">
     <head>
          <title>
           My Admin
          </title>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

          <!-- link boostraps css -->
          <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
          <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
          <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css.map">

          <!-- linnk boostraps js -->
          <script src="assets/bootstrap/js/bootstrap.js"></script>
          <script src="assets/bootstrap/js/bootstrap.js.map"></script>
          <script src="assets/bootstrap/js/bootstrap.min.js"></script>
          <script src="assets/bootstrap/js/jquery-slim.min.js"></script>
          <script src="assets/bootstrap/js/popper.min.js"></script>
          <script src="assets/bootstrap/js/util.js"></script>
     </head>

     <body>
          <?php
               include 'MySQLfonction.php';
               include 'MaFonctionTableaux.php';

               $headers = getHeaderTable();
               $crud = new crud();
               $liste = $crud->getAllUser();
               MonTableaux($liste, $headers);
          ?>

          <a href=TestForm.php?id=0 >
           Créer une langue
          </a>

          <br>

          <a href=indexuser.php? >
           Partie User
          </a>

     </body>
</html>





